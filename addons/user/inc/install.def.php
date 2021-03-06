<?php
/**
 * WoWRoster.net WoWRoster
 *
 * @copyright  2002-2011 WoWRoster.net
 * @license	http://www.gnu.org/licenses/gpl.html   Licensed under the GNU General Public License v3.
 * @version	SVN: $Id: install.def.php 2609 2012-09-04 00:26:39Z ulminia@gmail.com $
 * @link	   http://www.wowroster.net
 * @package	News
 * @subpackage Installer
*/

if ( !defined('IN_ROSTER') )
{
	exit('Detected invalid access to this file!');
}

/**
 * News Addon Installer
 * @package News
 * @subpackage Installer
 */
class userInstall
{
	var $active = true;
	var $icon = 'inv_misc_bag_26_spellfire';

	var $version = '0.3.2';
	var $wrnet_id = '0';

	var $fullname = 'User Pages';
	var $description = 'user registration, profile pages and more';
	var $credits = array(
		array(	"name"=>	"Ulminia",
				"info"=>	"Original author")
	);


	/**
	 * Install function
	 *
	 * @return bool
	 */
	function install()
	{
		global $installer, $roster;

		//begin the magic of user settings

		/**
		*	Tables
		**/

		$installer->create_table($installer->table('profile'),"
			`uid` INT(11) NOT NULL,
			`signature` varchar(255) NOT NULL,
			`avatar` varchar(255) NOT NULL,
			`avsig_src` varchar(32) NOT NULL,
			`show_fname` INT(11) NOT NULL default '0',
			`show_lname` INT(11) NOT NULL default '0',
			`show_email` INT(11) NOT NULL default '0',
			`show_city` INT(11) NOT NULL default '0',
			`show_country` INT(11) NOT NULL default '0',
			`show_homepage` INT(11) NOT NULL default '0',
			`show_notes` INT(11) NOT NULL default '0',
			`show_joined` INT(11) NOT NULL default '0',
			`show_lastlogin` INT(11) NOT NULL default '0',
			`show_chars` INT(11) NOT NULL default '0',
			`show_guilds` INT(11) NOT NULL default '0',
			`show_realms` INT(11) NOT NULL default '0',
			PRIMARY KEY (`uid`)"
			);

		$installer->create_table($installer->table('messaging'),"
			`msgid` int(11) NOT NULL auto_increment,
			`uid` smallint(6) NOT NULL,
			`title` varchar(255) NOT NULL default '',
			`body` text NOT NULL,
			`sender` int(11) NOT NULL,
			`senderLevel` int(11) NOT NULL,
			`read` int(11) NOT NULL default 0,
			`date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
			PRIMARY KEY  (`msgid`),
			KEY (`uid`)"
			);
		$installer->create_table($installer->table('user_link'),"
			`link_id` int(11) NOT NULL AUTO_INCREMENT,
			  `uid` int(11) unsigned NOT NULL DEFAULT '0',
			  `member_id` int(11) unsigned NOT NULL DEFAULT '0',
			  `guild_id` int(11) unsigned NOT NULL DEFAULT '0',
			  `group_id` smallint(6) NOT NULL DEFAULT '1',
			  `is_main` smallint(6) NOT NULL DEFAULT '0',
			  `realm` varchar(32) NOT NULL DEFAULT '',
			  `region` varchar(32) NOT NULL DEFAULT '',
			  `name` varchar(45) NOT NULL DEFAULT '',
			  `battlegroup` varchar(32) NOT NULL DEFAULT '',
			  `class` varchar(2) NOT NULL DEFAULT '',
			  `race` varchar(2) NOT NULL DEFAULT '',
			  `gender` varchar(2) NOT NULL DEFAULT '',
			  `level` varchar(4) NOT NULL DEFAULT '',
			  `achievementPoints` varchar(32) NOT NULL DEFAULT '',
			  `thumbnail` varchar(255) NOT NULL DEFAULT '',
			  `guild` varchar(64) NOT NULL DEFAULT '',
			  `guildRealm` varchar(32) NOT NULL DEFAULT '',
			  PRIMARY KEY (`link_id`)
			");
		$installer->add_query("ALTER TABLE `" . $roster->db->table('user_members') . "`
			CHANGE `email` `email` varchar(255) DEFAULT NULL,
			CHANGE `regIP` `regIP` varchar(15) DEFAULT NULL,
			CHANGE `access` `access` varchar(25) DEFAULT NULL,
			CHANGE `fname` `fname` varchar(30) DEFAULT NULL,
			CHANGE `lname` `lname` varchar(30) DEFAULT NULL,
			CHANGE `age` `age` varchar(32) DEFAULT NULL,
			CHANGE `city` `city` varchar(32) DEFAULT NULL,
			CHANGE `state` `state` varchar(32) DEFAULT NULL,
			CHANGE `country` `country` varchar(32) DEFAULT NULL,
			CHANGE `zone` `zone` varchar(32) DEFAULT NULL,
			CHANGE `homepage` `homepage` varchar(64) DEFAULT NULL,
			CHANGE `other_guilds` `other_guilds` varchar(64) DEFAULT NULL,
			CHANGE `why` `why` varchar(64) DEFAULT NULL,
			CHANGE `about` `about` varchar(64) DEFAULT NULL,
			CHANGE `notes` `notes` varchar(64) DEFAULT NULL,
			CHANGE `last_login` `last_login` varchar(64) DEFAULT NULL,
			CHANGE `date_joined` `date_joined` varchar(64) DEFAULT NULL");
		/**
		* admin section settings
		**/
		$installer->add_config("8100,'startpage','usr_config','display','master'");
		$installer->add_config("8101,'usr_config',NULL,'blockframe','menu'");
		$installer->add_config("8102,'char_auth','1','select{Default^1|Character^1|Admin Approve^2|None^1','usr_config'");
		$installer->add_config("8103,'fname_auth','0','radio{On^1|Off^0','usr_config'");
		$installer->add_config("8104,'lname_auth','0','radio{On^1|Off^0','usr_config'");
		$installer->add_config("8105,'age_auth','0','radio{On^1|Off^0','usr_config'");
		$installer->add_config("8106,'city_auth','0','radio{On^1|Off^0','usr_config'");
		$installer->add_config("8107,'state_auth','0','radio{On^1|Off^0','usr_config'");
		$installer->add_config("8108,'country_auth','0','radio{On^1|Off^0','usr_config'");
		$installer->add_config("8109,'zone_auth','0','radio{On^1|Off^0','usr_config'");

		/**
		* Master and menu entries
		**/
		//$installer->add_menu_button('menu_register','user','register','inv_misc_bag_26_spellfire');
		$installer->add_menu_button('user_menu_chars','user','chars','spell_holy_divinespirit');
		$installer->add_menu_button('user_menu_guilds','user','guilds','inv_misc_tabardpvp_02');
		$installer->add_menu_button('user_menu_realms','user','realms','spell_holy_lightsgrace');
		$installer->add_menu_button('user_menu_mail','user','mail','achievement_guildperk_gmail');
		//$installer->add_menu_button('user_menu_settings','user','settings','inv_misc_wrench_02');
		$installer->add_menu_button('user_alt','user','alt','spell_holy_holynova');
		return true;
	}

	/**
	 * Upgrade functoin
	 *
	 * @param string $oldversion
	 * @return bool
	 */
	function upgrade($oldversion)
	{
		global $installer, $roster;

		if( version_compare('0.2', $oldversion,'>') == true )
		{
			$installer->add_config("8100,'startpage','usr_config','display','master'");
			$installer->add_config("8101,'usr_config',NULL,'blockframe','menu'");
			$installer->add_config("8102,'char_auth','1','select{Default^1|Character^1|Admin Approve^2|None^0','usr_config'");
			$installer->add_config("8103,'fname_auth','0','radio{On^1|Off^0','usr_config'");
			$installer->add_config("8104,'lname_auth','0','radio{On^1|Off^0','usr_config'");
			$installer->add_config("8105,'age_auth','0','radio{On^1|Off^0','usr_config'");
			$installer->add_config("8106,'city_auth','0','radio{On^1|Off^0','usr_config'");
			$installer->add_config("8107,'state_auth','0','radio{On^1|Off^0','usr_config'");
			$installer->add_config("8108,'country_auth','0','radio{On^1|Off^0','usr_config'");
			$installer->add_config("8109,'zone_auth','0','radio{On^1|Off^0','usr_config'");
		}
		if( version_compare('0.2.1', $oldversion,'>') == true )
		{
			$installer->add_config("8101,'usr_config',NULL,'blockframe','menu'");
		}
		if( version_compare('0.2.4', $oldversion,'>') == true )
		{
			$installer->add_query("ALTER TABLE `" . $roster->db->table('user_members') . "`
			CHANGE `email` `email` varchar(255) DEFAULT NULL,
			CHANGE `regIP` `regIP` varchar(15) DEFAULT NULL,
			CHANGE `access` `access` varchar(25) DEFAULT NULL,
			CHANGE `fname` `fname` varchar(30) DEFAULT NULL,
			CHANGE `lname` `lname` varchar(30) DEFAULT NULL,
			CHANGE `age` `age` varchar(32) DEFAULT NULL,
			CHANGE `city` `city` varchar(32) DEFAULT NULL,
			CHANGE `state` `state` varchar(32) DEFAULT NULL,
			CHANGE `country` `country` varchar(32) DEFAULT NULL,
			CHANGE `zone` `zone` varchar(32) DEFAULT NULL,
			CHANGE `homepage` `homepage` varchar(64) DEFAULT NULL,
			CHANGE `other_guilds` `other_guilds` varchar(64) DEFAULT NULL,
			CHANGE `why` `why` varchar(64) DEFAULT NULL,
			CHANGE `about` `about` varchar(64) DEFAULT NULL,
			CHANGE `notes` `notes` varchar(64) DEFAULT NULL,
			CHANGE `last_login` `last_login` varchar(64) DEFAULT NULL,
			CHANGE `date_joined` `date_joined` varchar(64) DEFAULT NULL");
		}
		if( version_compare('0.2.5', $oldversion,'>') == true )
		{
			$installer->add_menu_button('user_alt','user','alt','spell_holy_holynova');
		}
		if( version_compare('0.3.0', $oldversion,'>') == true )
		{

			$installer->drop_table($roster->db->table('user_link'));
			$installer->create_table($installer->table('user_link'),"
				`link_id` int(11) NOT NULL AUTO_INCREMENT,
				`uid` int(11) unsigned NOT NULL DEFAULT '0',
				`member_id` int(11) unsigned NOT NULL DEFAULT '0',
				`guild_id` int(11) unsigned NOT NULL DEFAULT '0',
				`group_id` smallint(6) NOT NULL DEFAULT '1',
				`is_main` smallint(6) NOT NULL DEFAULT '0',
				`realm` varchar(32) NOT NULL DEFAULT '',
				`region` varchar(32) NOT NULL DEFAULT '',
				`name` varchar(45) NOT NULL DEFAULT '',
				`battlegroup` varchar(32) NOT NULL DEFAULT '',
				`class` varchar(2) NOT NULL DEFAULT '',
				`race` varchar(2) NOT NULL DEFAULT '',
				`gender` varchar(2) NOT NULL DEFAULT '',
				`level` varchar(4) NOT NULL DEFAULT '',
				`achievementPoints` varchar(32) NOT NULL DEFAULT '',
				`thumbnail` varchar(255) NOT NULL DEFAULT '',
				`guild` varchar(64) NOT NULL DEFAULT '',
				`guildRealm` varchar(32) NOT NULL DEFAULT '',
				PRIMARY KEY (`link_id`)
			");
		}
		if( version_compare('0.3.1', $oldversion,'>') == true )
		{
			$installer->remove_menu_button('menu_register','user','register','inv_misc_bag_26_spellfire');
		}
		if( version_compare('0.3.2', $oldversion,'>') == true )
		{
			$installer->remove_menu_button('user_menu_settings','user','settings','inv_misc_wrench_02');
		}
		return true;
	}

	/**
	 * Un-Install function
	 *
	 * @return bool
	 */
	function uninstall()
	{
		global $installer;
		$installer->remove_all_config();
		$installer->remove_all_menu_button();
		$installer->drop_table('profile');
		$installer->drop_table('messaging');
		$installer->drop_table('user_link');
		return true;
	}
}
