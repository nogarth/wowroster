<?php
/**
 * WoWRoster.net WoWRoster
 *
 * Roster password changer
 *
 *
 * @copyright  2002-2011 WoWRoster.net
 * @license    http://www.gnu.org/licenses/gpl.html   Licensed under the GNU General Public License v3.
 * @version    SVN: $Id: change_pass.php 2405 2012-02-23 22:25:41Z ulminia@gmail.com $
 * @link       http://www.wowroster.net
 * @since      File available since Release 1.8.0
 * @package    WoWRoster
 * @subpackage RosterCP
*/

if( !defined('IN_ROSTER') || !defined('IN_ROSTER_ADMIN') )
{
	exit('Detected invalid access to this file!');
}
if($roster->auth->uid > 0)
{
	$uid = $roster->auth->uid;
}
else
{
	$uid = '';
}
$roster->output['title'] .= $roster->locale->act['pagebar_changepass'];
if( array_key_exists('mode',$_POST))
{
	$mode = $_POST['mode'];

	$query = "SELECT * FROM `" . $roster->db->table('user_members') . "` WHERE `id` = '" . $uid . "';";
	$result = $roster->db->query($query);

	if( !$result )
	{
		die_quietly($roster->db->error(), $roster->locale->act['roster_cp'], __FILE__, __LINE__, $query);
	}

	if( $row = $roster->db->fetch($result) )
	{
		$realhash = $row['pass'];
	}

	$oldpass  = ( isset($_POST['old_pass']) ? $_POST['old_pass'] : '' );
	$newpass = ( isset($_POST['new_pass']) ? $_POST['new_pass'] : '' );
	$confirmpass = ( isset($_POST['confirm_pass']) ? $_POST['confirm_pass'] : '' );

	if( md5($oldpass) != $realhash )
	{
		$roster->set_message($roster->locale->act['pass_old_error'], '', 'error');
	}
	elseif( !array_key_exists('new_pass',$_POST) || !array_key_exists('confirm_pass',$_POST) )
	{
		$roster->set_message($roster->locale->act['pass_submit_error'], '', 'error');
	}
	elseif( $newpass != $confirmpass )
	{
		$roster->set_message($roster->locale->act['pass_mismatch'], '', 'error');
	}
	elseif( $newpass === '' || $confirmpass === '' || md5($newpass) == md5('') )
	{
		$roster->set_message($roster->locale->act['pass_blank'], '', 'error');
	}
	elseif( md5($newpass) == $realhash )
	{
		$roster->set_message($roster->locale->act['pass_isold'], '', 'warning');
	}
	else // valid password
	{
		$query = 'UPDATE `' . $roster->db->table('user_members') . '` SET `pass` = "' . md5($newpass) . '"  WHERE `usr` = "' . $mode . '";';
		//$result = $roster->db->query($query);
		setcookie('roster_pass',md5($newpass),(time()+60*60*24*30) );

		if (!$result)
		{
			$roster->set_message('There was a database error while trying to change the password.', '', 'error');
			$roster->set_message('<pre>' . $roster->db->error() . '</pre>', 'MySQL Said', 'error');
		}
		else
		{
			$roster->set_message(sprintf($roster->locale->act['pass_changed'], $mode, '<span class="redB">' . $newpass . '</span>'));
		}
	}
}

$password = array(
	'user' => $roster->locale->act['changeyourpass']
);

foreach( $password as $id => $title )
{
	$roster->tpl->assign_block_vars('password', array(
		'ID'    => "conf_{$id}_pass",
		'TYPE'  => ucfirst($id),
		'TITLE' => $title,
	));

	$roster->tpl->assign_block_vars('password.field', array(
		'ID'    => "{$id}_oldpass",
		'NAME'  => 'old_pass',
		'TITLE' => $roster->locale->act['old_pass'],
	));

	$roster->tpl->assign_block_vars('password.field', array(
		'ID'    => "{$id}_newpass",
		'NAME'  => 'new_pass',
		'TITLE' => $roster->locale->act['new_pass'],
	));

	$roster->tpl->assign_block_vars('password.field', array(
		'ID'    => "{$id}_confirmpass",
		'NAME'  => 'confirm_pass',
		'TITLE' => $roster->locale->act['new_pass_confirm'],
	));
}

$roster->tpl->set_filenames(array('body' => 'ucp/change_pass.html'));
$body = $roster->tpl->fetch('body');
