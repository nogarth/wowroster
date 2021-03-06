<?php
/**
 * WoWRoster.net WoWRoster
 *
 *
 * @copyright  2002-2011 WoWRoster.net
 * @license    http://www.gnu.org/licenses/gpl.html   Licensed under the GNU General Public License v3.
 * @version    SVN: $Id: skilllist.php 2490 2012-05-27 03:53:04Z c.treyce@gmail.com $
 * @link       http://www.wowroster.net
 * @package    MembersList
 */

if ( !defined('IN_ROSTER') )
{
	exit('Detected invalid access to this file!');
}

if (!isset($roster->data['guild_id'])) {
	return;
}

$skill_name = isset($_POST['skill']) ? $_POST['skill'] : 'Unarmed';

include_once ($addon['inc_dir'] . 'memberslist.php');

$memberlist = new memberslist;

$mainQuery =
	'SELECT '.
	'`members`.`member_id`, '.
	'`members`.`name`, '.
	'`members`.`class`, '.
	'`members`.`classid`, '.
	'`members`.`level`, '.
	'`members`.`zone`, '.
	"(UNIX_TIMESTAMP( `members`.`last_online`)*1000+".($roster->config['localtimeoffset']*3600000).") AS 'last_online_stamp', ".
	"DATE_FORMAT(  DATE_ADD(`members`.`last_online`, INTERVAL ".$roster->config['localtimeoffset']." HOUR ), '".$roster->locale->act['timeformat']."' ) AS 'last_online', ".
	'`members`.`note`, '.
	"IF( `members`.`note` IS NULL OR `members`.`note` = '', 1, 0 ) AS 'nisnull', ".
	'`members`.`guild_title`, '.

	'`alts`.`main_id`, '.

	'`players`.`server`, '.
	'`players`.`race`, '.
	'`players`.`sex`, '.
	'`players`.`exp`, '.
	'`players`.`clientLocale`, '.

	"GROUP_CONCAT( DISTINCT CONCAT( `build`, '|', `tree` , '|', `pointsspent` , '|', `background` ) ORDER BY `build`, `order`) AS 'talents', ".

	'`skills`.`skill_level`, '.
	'`skills`.`skill_name` '.

	'FROM `'.$roster->db->table('members').'` AS members '.
	'INNER JOIN `'.$roster->db->table('players').'` AS players ON `members`.`member_id` = `players`.`member_id` '.
	'INNER JOIN `'.$roster->db->table('skills').'` AS skills ON `members`.`member_id` = `skills`.`member_id` '.
	'LEFT JOIN `'.$roster->db->table('alts',$addon['basename']).'` AS alts ON `members`.`member_id` = `alts`.`member_id` '.
	'LEFT JOIN `'.$roster->db->table('talenttree').'` AS talenttable ON `members`.`member_id` = `talenttable`.`member_id` ';
$where[] = '`members`.`guild_id` = "'.$roster->data['guild_id'].'"';
$where[] = '`skills`.`skill_name` = "'.$skill_name.'"';
$group[] = '`members`.`member_id`';
$order_first[] = 'IF(`members`.`member_id` = `alts`.`member_id`,1,0)';
$order_last[] = '`members`.`level` DESC';
$order_last[] = '`members`.`name` ASC';

$FIELD['name'] = array(
	'lang_field' => 'name',
	'filt_field' => '`members`.`name`',
	'order'      => array( '`members`.`name` ASC' ),
	'order_d'    => array( '`members`.`name` DESC' ),
	'value'      => array($memberlist,'name_value'),
	'display'    => 3,
);

$FIELD['class'] = array(
	'lang_field' => 'class',
	'filt_field' => '`members`.`class`',
	'order'      => array( '`members`.`class` ASC' ),
	'order_d'    => array( '`members`.`class` DESC' ),
	'value'      => array($memberlist,'class_value'),
	'display'    => $addon['config']['stats_class'],
);

$FIELD['level'] = array(
	'lang_field' => 'level',
	'filt_field' => '`members`.`level`',
	'order'      => array( '`members`.`level` DESC' ),
	'order_d'    => array( '`members`.`level` ASC' ),
	'value'      => array($memberlist,'level_value'),
	'display'    => $addon['config']['stats_level'],
);

$FIELD['skill_level'] = array (
	'lang_field' => 'skill_level',
	'order'      => array( "`skill_level` DESC" ),
	'order_d'    => array( "`skill_level` ASC" ),
	'value'      => 'skill_value',
	'display'    => $addon['config']['stats_str'],
);

$memberlist->prepareData($mainQuery, $where, $group, $order_first, $order_last, $FIELD, 'memberslist');

// Start output
if ( $addon['config']['stats_motd'] == 1 )
{
	echo $memberlist->makeMotd();
}

echo skill_dropdown();

echo $memberlist->makeMembersList('syellow');

function skill_dropdown()
{
	global $roster, $skill_name;

	$query = 'SELECT DISTINCT `skill_order`, `skill_type`, `skill_name` '.
		'FROM `'.$roster->db->table('skills').'` '.
		'ORDER BY `skill_order`;';

	$result = $roster->db->query($query);

	$output = '<form name="skillpicker" action="'.makelink().'" method="post">'."\n";
	$output .= '  <select name="skill" onchange="document.forms[\'skillpicker\'].submit();">'."\n";
	$output .= '      <option value="">-------</option>'."\n";
	$type = null;
	while( $row = $roster->db->fetch($result) )
	{
		if( $row['skill_type'] !== $type )
		{
			if( $type !== null )
			{
				$output .= '    </optgroup>'."\n";
			}
			$output .= '    <optgroup label="'.$row['skill_type'].'">'."\n";
			$type = $row['skill_type'];
		}
		$output .= '      <option value="'.$row['skill_name'].'"'.($skill_name==$row['skill_name'] ? ' selected="selected"' : '').'>'.$row['skill_name'].'</option>'."\n";
	}
	if( $type == null )
	{
		return '';
	}
	$output .= '    </optgroup>'."\n";
	$output .= '  </select>'."\n";
	$output .= '</form><br />'."\n";

	return $output;
}

function skill_value( $row )
{
	global $roster, $addon;

	list($value, $maxvalue) = explode( ':', $row['skill_level'] );
	$skill_name = $row['skill_name'];
	$barwidth = ceil($value/$maxvalue*273);

	$output = '<div style="display:none;">'.$value.'</div>';
	$output = '<div class="skill_bar">'."\n";
	if( $maxvalue == '1' )
	{
		$output .= '  <div style="position:absolute;"><img src="'.$addon['tpl_image_url'].'skill/bar_grey.gif" alt="" /></div>'."\n";
		$output .= '  <div class="text">'.$row['skill_name'].'</div>';
	}
	else
	{
		$output .= '  <div style="position:absolute;clip:rect(0px '.$barwidth.'px 15px 0px);"><img src="'.$addon['tpl_image_url'].'skill/bar.gif" alt="" /></div>'."\n";
		$output .= '  <div class="text">'.$skill_name.'<span class="text_num">'.$value.' / '.$maxvalue.'</span></div>'."\n";
	}
	$output .= '</div>'."\n";

	return $output;
}
