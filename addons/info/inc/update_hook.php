<?php
/**
 * WoWRoster.net WoWRoster
 *
 *
 * @copyright  2002-2011 WoWRoster.net
 * @license    http://www.gnu.org/licenses/gpl.html   Licensed under the GNU General Public License v3.
 * @version    SVN: $Id: update_hook.php 2551 2012-06-16 14:47:56Z ulminia@gmail.com $
 * @link       http://www.wowroster.net
 * @package    CharacterInfo
 * @subpackage UpdateHook
*/

if ( !defined('IN_ROSTER') )
{
	exit('Detected invalid access to this file!');
}

/**
 * Addon Update class
 * This MUST be the same name as the addon basename
 *
 * @package    CharacterInfo
 * @subpackage UpdateHook
 */
class infoUpdate
{
	var $messages = '';		// Update messages
	var $data = array();	// Addon config data automatically pulled from the addon_config table
	var $files = array();
	var $disp_defaults = array();


	/**
	 * Class instantiation
	 * The name of this function MUST be the same name as the class name
	 *
	 * @param array $data	| Addon data
	 * @return infoUpdate
	 */
	function infoUpdate( $data )
	{
		global $roster;

		$this->data = $data;

		$query = "SELECT * FROM `" . $roster->db->table('default',$this->data['basename']) . "`;";

		$result = $roster->db->query($query);
		$this->disp_defaults = $roster->db->fetch_all($result, SQL_ASSOC);
		$this->disp_defaults = $this->disp_defaults[0];
	}

	/**
	 * Char trigger: create an entry for the character processed
	 *
	 * @param array $char
	 * @param int $memberid
	 * @return bool
	 */
	function char( $char , $member_id )
	{
		global $roster;

		$query = "SELECT `member_id` FROM `" . $roster->db->table('display',$this->data['basename']) . "` WHERE `member_id` = '$member_id';";

		$result = $roster->db->query($query);

		if( !$result )
		{
			$this->messages .= 'CharacterInfo: <span style="color:red;">' . $char['Name'] . ' not updated, failed at line ' . __LINE__ . '</span><br />' . "\n";
			return false;
		}

		$update = $roster->db->num_rows($result) == 1;
		$roster->db->free_result($result);

		if( !$update )
		{
			$query = $this->disp_defaults;
			$query['member_id'] = $member_id;
			$querystr = "INSERT INTO `" . $roster->db->table('display',$this->data['basename']) . "` " . $roster->db->build_query('INSERT',$query) . ";";

			if( !$roster->db->query($querystr) )
			{
				$this->messages .= 'CharacterInfo: <span style="color:red;">Old records not deleted. MySQL said: ' . $roster->db->error() . "</span><br />\n";
				return false;
			}			
		}
		if ($this->data['config']['api_image'] == 1)
		{
			if( $roster->config['use_api_onupdate'] == 0 )
			{
				$char['API'] = $roster->api->Char->getCharInfo($char['Server'],$char['Name'],'1');
			}
	
			$name = $char['name'];
			$server = $char['server'];

			if (isset($char['API']['thumbnail']))
			{
				$e = $char['API']['thumbnail'];
				$c = explode("-", $e);

				$img_url = "http://us.battle.net/static-render/us/".$c[0]."-profilemain.jpg";
				//$save_path = $addon['dir'].'x/'.$name.'-'.$server.'.jpg';
				$save_path = $this->data['dir'].'chars/'.$member_id.'.jpg';
					
				if (is_file($save_path))
				{
					unlink($save_path);
				}

				if (!$this->save_image($img_url,$save_path))
				{
					//echo ' - <font color=red>Not saves</font><br>';
					$this->messages .= 'Image not saved!<br />' . "\n";
				}
				else
				{
					//echo ' - <font color=green>Saved '.$char['Name'].'-'.$member_id.'</font><br>';
					$this->messages .= 'Image saved: <span style="color:green;">'.$member_id.'.jpg</span><br />' . "\n";
					
					$file = $member_id.'.jpg';
					$dir = $this->data['dir'].'chars/';
					list($width, $height) = getimagesize($dir.$file);
					$im = $this->imagecreatetruecolortrans( 369,479 );
					$saved_image = $dir.'thumb-'.strtolower($file);
					$im_temp = imagecreatefromjpeg($dir.$file);
					//imagecopyresampled($im, $im_temp, 0, 0, 213, 45, 369, 479, $width, $height);
					@imagecopy( $im,$im_temp,0,0,213, 45, 369, 479 );
					//header('Content-type: image/png');
					imagePng( $im,$saved_image );//imagepng($im);
					imagedestroy($im);
					imagedestroy($im_temp);
					
				}
			}
		}


		return true;
	}
	
	function imagecreatetruecolortrans($x,$y)
    {
        $i = @imagecreatetruecolor($x,$y)
			or debugMode( (__LINE__),'Cannot Initialize new GD image stream','',0,'Make sure you have the latest version of GD2 installed' );

        $b = imagecreatefromstring(base64_decode($this->blankpng()));

        imagealphablending($i,false);
        imagesavealpha($i,true);
        imagecopyresized($i,$b,0,0,0,0,$x,$y,imagesx($b),imagesy($b));
        imagealphablending($i,true);

        return $i;
    }
    function blankpng()
	{
		$c  = "iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29m".
			"dHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAADqSURBVHjaYvz//z/DYAYAAcTEMMgBQAANegcCBNCg".
			"dyBAAA16BwIE0KB3IEAADXoHAgTQoHcgQAANegcCBNCgdyBAAA16BwIE0KB3IEAADXoHAgTQoHcgQAAN".
			"egcCBNCgdyBAAA16BwIE0KB3IEAADXoHAgTQoHcgQAANegcCBNCgdyBAAA16BwIE0KB3IEAADXoHAgTQ".
			"oHcgQAANegcCBNCgdyBAAA16BwIE0KB3IEAADXoHAgTQoHcgQAANegcCBNCgdyBAAA16BwIE0KB3IEAA".
			"DXoHAgTQoHcgQAANegcCBNCgdyBAgAEAMpcDTTQWJVEAAAAASUVORK5CYII=";
		return $c;
	}
	
	
	
	function save_image($inPath,$outPath)
	{
		//Download images from remote server
		$in=    fopen($inPath, "rb");
		$out=   fopen($outPath, "wb");
		while ($chunk = fread($in,8192))
		{
			fwrite($out, $chunk, 8192);
		}
		fclose($in);
		fclose($out);
		if (file_exists($outPath))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	/**
	 * Guild post trigger: remove deleted members from the info table
	 *
	 * @param array $guild
	 *		CP.lua guild data
	 * @return bool
	 */
	function guild_post( $guild )
	{
		global $roster;

		$query = "DELETE `" . $roster->db->table('display',$this->data['basename']) . "`"
			   . " FROM `" . $roster->db->table('display',$this->data['basename']) . "`"
			   . " LEFT JOIN `" . $roster->db->table('players') . "` USING (`member_id`)"
			   . " WHERE `" . $roster->db->table('players') . "`.`member_id` IS NULL;";

		if( $roster->db->query($query) )
		{
			$this->messages .= 'CharacterInfo: ' . $roster->db->affected_rows() . ' records without matching member records deleted';
		}
		else
		{
			$this->messages .= 'CharacterInfo: <span style="color:red;">Old records not deleted. MySQL said: ' . $roster->db->error() . "</span><br />\n";
			return false;
		}

		return true;
	}

	/**
	 * Resets addon messages
	 */
	function reset_messages()
	{
		$this->messages = '';
	}
}
