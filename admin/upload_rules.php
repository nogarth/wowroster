<?php
/**
 * WoWRoster.net WoWRoster
 *
 * Roster upload rule config
 *
 * @copyright  2002-2011 WoWRoster.net
 * @license    http://www.gnu.org/licenses/gpl.html   Licensed under the GNU General Public License v3.
 * @version    SVN: $Id: upload_rules.php 2325 2011-05-14 21:48:41Z c.treyce@gmail.com $
 * @link       http://www.wowroster.net
 * @since      File available since Release 1.8.0
 * @package    WoWRoster
 * @subpackage RosterCP
*/

if( !defined('IN_ROSTER') || !defined('IN_ROSTER_ADMIN') )
{
	exit('Detected invalid access to this file!');
}

$roster->output['title'] .= $roster->locale->act['pagebar_uploadrules'];

$mode = (isset($roster->pages[2]) && $roster->pages[2] == 'char')?'char':'guild';

// Process a new line
if( isset($_POST['process']) && $_POST['process'] == 'process')
{
	if( $_POST['action'] == 'enforce' )
	{
		$enforce = ( $_POST['enforce'] );
		$query = "UPDATE `" . $roster->db->table('config') . "` SET `config_value` = '$enforce' WHERE `id` = '1190';";

		if( !$roster->db->query($query) )
		{
			die_quietly($roster->db->error(),'Database Error',__FILE__,__LINE__,$query);
		}
		else
		{
			// Set this enforce_rules value to the right one since roster_config isn't refreshed here
			$roster->config['enforce_rules'] = $enforce;
		}
	}
	elseif( $_POST['action'] == 'add' )
	{
		$type = ($mode == 'guild'?0:2) + ($_POST['block'] == 'allow'?0:1);

		if( !empty($_POST['value']) && !empty($_POST['server']) && !empty($_POST['region']) )
		{
			$name = $_POST['value'];
			$server = $_POST['server'];
			$region = strtoupper(substr(trim($_POST['region']),0,2));

			$default = ( (isset($_POST['defaultchk']) && $_POST['defaultchk'] == '1') ? '1' : '0' );

			if( $default == '1' )
			{
				$query = "UPDATE `" . $roster->db->table('upload') . "` SET `default` = '0';";

				if( !$roster->db->query($query) )
				{
					die_quietly($roster->db->error(),'Database Error',__FILE__,__LINE__,$query);
				}
			}

			$query  = "INSERT INTO `" . $roster->db->table('upload') . "`"
					. " (`name`,`server`,`region`,`type`,`default`)"
					. " VALUES ('" . $name . "','" . $server . "','" . $region . "','" . $type . "','" . $default . "');";

			if( !$roster->db->query($query) )
			{
				die_quietly($roster->db->error(),'Database Error',__FILE__,__LINE__,$query);
			}
		}
		else
		{
			$roster->set_message($roster->locale->act['upload_rules_error'], '', 'error');
		}
	}
	elseif( substr($_POST['action'],0,4) == 'del_' )
	{
		$rule_id = substr($_POST['action'],4);

		$query = "DELETE FROM `" . $roster->db->table('upload') . "` WHERE `rule_id` = '" . $rule_id . "' LIMIT 1;";

		if( !$roster->db->query($query) )
		{
			die_quietly($roster->db->error(),'Database Error',__FILE__,__LINE__,$query);
		}
	}
	elseif( substr($_POST['action'],0,8) == 'default_' )
	{
		$rule_id = substr($_POST['action'],8);

		$query = "UPDATE `" . $roster->db->table('upload') . "` SET `default` = '0';";

		if( !$roster->db->query($query) )
		{
			die_quietly($roster->db->error(),'Database Error',__FILE__,__LINE__,$query);
		}

		$query = "UPDATE `" . $roster->db->table('upload') . "` SET `default` = '1' WHERE `rule_id` = '" . $rule_id . "' LIMIT 1;";

		if( !$roster->db->query($query) )
		{
			die_quietly($roster->db->error(),'Database Error',__FILE__,__LINE__,$query);
		}
	}
}

// Fetch data
$query = "SELECT * FROM `" . $roster->db->table('upload') . "`";

if( $mode == 'guild' )
{
	$query .= " WHERE `type` = '0' OR `type` = '1';";
}
else
{
	$query .= " WHERE `type` = '2' OR `type` = '3';";
}
$result = $roster->db->query($query);

if( !$result )
{
	die_quietly($roster->db->error(),'Database Error',__FILE__,__LINE__,$query);
}

$existing_data = ($roster->db->num_rows($result) > 0 ? true : false);

$data = array('allow'=>array(),'deny'=>array());

while( $row = $roster->db->fetch($result) )
{
	if( $row['type'] & 1 == 1 )
	{
		$data['deny'][] = $row;
	}
	else
	{
		$data['allow'][] = $row;
	}
}


$default_present = $roster->db->query_first("SELECT `name` FROM `" . $roster->db->table('upload') . "` WHERE `default` = 1;");

if( empty($default_present) )
{
	$roster->set_message($roster->locale->act['no_default_guild'], $roster->locale->act['pagebar_uploadrules'], 'error');
}

$l_enforce_rules = explode('|',$roster->locale->act['admin']['enforce_rules']);

// OUTPUT
$roster->tpl->assign_vars(array(
	'S_ENFORCE_RULES' => $roster->config['enforce_rules'],
	'S_EXISTING_DATA' => $existing_data,

	'L_ENFORCE_RULES_HELP' => makeOverlib($l_enforce_rules[1], $l_enforce_rules[0], '', 2, '', ',WRAP'),
	'L_NAME_TIP'           => makeOverlib( $mode == 'guild' ? $roster->locale->act['guildname'] : $roster->locale->act['charname'] ),
	'L_SERVER_TIP'         => makeOverlib($roster->locale->act['realmname']),
	'L_REGION_TIP'         => makeOverlib($roster->locale->act['regionname']),

	'MODE' => $mode,
	)
);

$menu_items = array('guild','char');

foreach( $menu_items as $item )
{
	$roster->tpl->assign_block_vars('upload_rules_menu',array(
		'SELECTED' => ( $mode==$item ? true : false ),
		'LINK' => makelink($roster->pages[0] . '-' . $roster->pages[1] . '-' . $item),
		'NAME' => $roster->locale->act[$item]
		)
	);
}


// Enforce Upload Rules
foreach( $data['deny'] as $row )
{
	$roster->tpl->assign_block_vars('deny_list', array(
		'ID' => $row['rule_id'],
		'NAME' => $row['name'],
		'SERVER' => $row['server'],
		'REGION' => $row['region'],
		)
	);
}

foreach( $data['allow'] as $row )
{
	$roster->tpl->assign_block_vars('allow_list', array(
		'DEFAULT' => (bool)$row['default'],
		'ID' => $row['rule_id'],
		'NAME' => $row['name'],
		'SERVER' => $row['server'],
		'REGION' => $row['region'],
		)
	);
}

$roster->tpl->set_filenames(array(
	'body' => 'admin/upload_rules.html',
	'menu' => 'admin/upload_rules_menu.html'
	)
);
$body = $roster->tpl->fetch('body');
$menu = $roster->tpl->fetch('menu');
