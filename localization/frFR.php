<?php
/**
 * WoWRoster.net WoWRoster
 *
 * frFR Locale File
 *
 * frFR translation by wowodo, lesablier, Exerladan, Ansgar and Theophilius
 *
 * @copyright  2002-2011 WoWRoster.net
 * @license    http://www.gnu.org/licenses/gpl.html   Licensed under the GNU General Public License v3.
 * @version    SVN: $Id: frFR.php 2619 2013-02-04 04:30:14Z ulminia@gmail.com $
 * @link       http://www.wowroster.net
 * @since      File available since Release 1.7.1
 * @package    WoWRoster
 * @subpackage Locale
 */

$lang['langname'] = 'Fran�ais';

//Instructions how to upload, as seen on the mainpage
$lang['update_link']='Cliquer ici pour les instructions de mise � jour.';
$lang['update_instructions']='Instructions de mise � jour.';

$lang['lualocation']='Cliquer, naviguer et t�l�charger les fichiers *.lua<br />';

$lang['filelocation']='se trouve sous<br /><i>*WOWDIR*</i>\\\\WTF\\\\Account\\\\<i>*ACCOUNT_NAME*</i>\\\\SavedVariables';

$lang['nodata']='Impossible de trouver la guilde : <b>\'%1$s\'</b> du serveur <b>\'%2$s\'</b><br />Vous devez pr�alablement<a href="%3$s">charger votre guilde</a> et <a href="%4$s">finaliser la configuration</a><br /><br /><a href="http://www.wowroster.net/MediaWiki/Roster:Install" target="_blank">Les instructions d\'installation sont disponibles ici</a>';
$lang['no_char_in_db']='The member <b>\'%1$s\'</b> is not in the database';
$lang['no_default_guild']='Aucune guilde par d�faut n\'a encore �t� indiqu�. Veuillez en indiquer une ici.';
$lang['not_valid_anchor']='The anchor(a=) parameter does not provide accurate enough data or is badly formatted.';
$lang['nodefguild']='Il n\'y a actuellement aucune guilde par d�faut. Vous devez pr�alablement <a href="%1$s">>finaliser la configuration</a><br /><br /><a href="http://www.wowroster.net/MediaWiki/Roster:Install" target="_blank">Les instructions d\'installation sont disponibles ici</a>';
$lang['nodata_title']='Donn�es de guilde introuvables';

$lang['update_page']='Mise � jour du profil';

$lang['guild_addonNotFound']='Impossible de trouver la guilde. Le greffon WoWRoster-GuildProfiler est-il install� correctement ?';

$lang['ignored']='Ignor�';
$lang['update_disabled']='L\'acc�s � update.php a �t� d�sactiv�';

$lang['nofileUploaded']='Votre UniUploader n\'a pas t�l�charg� de fichier(s), ou des fichiers erron�s.';
$lang['roster_upd_pwLabel']='Mot de passe du Roster';
$lang['roster_upd_pw_help']='Quelques mises � jour lua peuvent demander un mot de passe';


$lang['roster_error'] = 'Erreur li� au Roster';
$lang['sql_queries'] = 'Requ�tes SQL';
$lang['invalid_char_module'] = 'Caract�res interdits dans le nom du module';
$lang['module_not_exist'] = 'Le module [%1$s] n\'existe pas';

$lang['addon_error'] = 'Erreur li� au greffon';
$lang['specify_addon'] = 'Vous devez sp�cifier le nom du greffon !';
$lang['addon_not_exist'] = '<b>Le greffon [%1$s] n\'existe pas !</b>';
$lang['addon_disabled'] = '<b>Le greffon [%1$s] a �t� d�sactiv�</b>';
$lang['addon_no_access'] = '<b>Qualifications insuffisantes pour acc�der � [%1$s]</b>';
$lang['addon_upgrade_notice'] = '<b>Le greffon [%1$s] a �t� d�sactiv� car il n�cessite une mise � jour</b>';
$lang['addon_not_installed'] = '<b>Le greffon [%1$s] n\'est pas encore install�</b>';
$lang['addon_no_config'] = '<b>Le greffon [%1$s] n\'est pas configur�</b>';

$lang['char_error'] = 'Erreur li� au personnage';
$lang['specify_char'] = 'Le personnage n\'est pas indiqu�';
$lang['no_char_id'] = 'D�sol�, aucune donn�es relatives au personnage pour [%1$s]';
$lang['no_char_name'] = 'D�sol�, aucune donn�es relatives au personnage pour <strong>%1$s</strong> de <strong>%2$s</strong>';

$lang['roster_cp'] = 'Panneau de contr�le du Roster';
$lang['roster_cp_ab'] = 'PC Roster';
$lang['roster_cp_not_exist'] = 'La page [%1$s] n\'existe pas';
$lang['roster_cp_invalid'] = 'La page sp�cifi�e n\'est pas valide ou vous n\'avez pas les droits n�cessaires pour y acc�der';
$lang['access_level'] = 'Niveau d\'acc�s';

$lang['parsing_files'] = 'Traitement des fichiers';
$lang['parsed_time'] = 'Fichier %1$s trait� en %2$s secondes';
$lang['error_parsed_time'] = 'Le traitement du fichier %1$s a �chou� apr�s %2$s secondes';
$lang['upload_not_accept'] = 'Le fichier %1$s ne peut �tre trait�.';

$lang['processing_files'] = 'Traitement des fichiers';
$lang['error_addon'] = 'Le greffon [%1$s] a g�n�r� une erreur dans la m�thode %2$s';
$lang['addon_messages'] = 'Messages du greffon :';

$lang['not_accepted'] = '%1$s %2$s @ %3$s-%4$s n\'est pas autoris�. Data does not match upload rules.';

$lang['not_updating'] = 'Pas de mise � jour de %1$s pour [%2$s] - %3$s';
$lang['not_update_guild'] = 'Pas de mise � jour de la liste des membres de la guilde pour %1$s@%3$s-%2$s';
$lang['not_update_guild_time'] = 'Not updating Guild List for %1$s. Guild data uploaded was scanned on %2$s. Guild data stored was scanned on %3$s';
$lang['not_update_char_time'] = 'Not updating Character %1$s. Profile data uploaded was scanned on %2$s Profile data stored was scanned on %3$s';
$lang['no_members'] = 'Les donn�es n\'indiquent aucun membre de guilde';
$lang['upload_data'] = 'Mise � jour des donn�es de %1$s pour [%2$s@%4$s-%3$s]';
$lang['realm_ignored'] = 'Royaume : %1$s non trait�';
$lang['guild_realm_ignored'] = 'Guilde : %1$s @ Royaume : %2$s non trait�e';
$lang['update_members'] = 'Mise � jour des membres de la guilde';
$lang['update_errors'] = 'Erreur de mise � jour';
$lang['update_log'] = 'Journal des mises � jour';
$lang['select_files'] = 'Select Files';
$lang['save_error_log'] = 'Sauver le journal des erreurs';
$lang['save_update_log'] = 'Sauver le journal des mises � jour';

$lang['new_version_available'] = 'Une nouvelle version de [%1$s] est disponible v%2$s<br />Released: %3$s<br />vous pouvez la r�cup�rer <a href="%4$s" target="_blank">ici</a>';

$lang['remove_install_files'] = 'Supprimez les fichiers d\'installation';
$lang['remove_install_files_text'] = 'Merci de supprimer <span class="redB">install.php</span> de ce r�pertoire';

$lang['upgrade_wowroster'] = 'Mise � jour de WoWRoster';
$lang['upgrade'] = 'Mise � jour';
$lang['select_version'] = 'Choisissez votre version';
$lang['no_upgrade'] = 'Vous avez d�j� mis � jour le Roster.<br />Ou vous avez d�j� une version plus r�cente.<br /><a class="input" href="%1$s">Back to WoWRoster</a>';
$lang['upgrade_complete'] = 'Le Roster a �t� mis � jour<br /><a class="input" href="%1$s">Back to WoWRoster</a>';

// Menu buttons
$lang['menu_header_scope_panel'] = 'Panneau de contr�le : %s';

$lang['menu_totals'] = 'Total: %1$s (+%2$s Alts)';
$lang['menu_totals_level'] = ' Au moins L%1$s';

// Updating Instructions
$lang['index_text_uniloader'] = '<b><u>Pr�requis � l\'utilisation d\'UniUploader:</b></u><a href="http://www.microsoft.com/downloads/details.aspx?FamilyID=0856EACB-4362-4B0D-8EDD-AAB15C5E04F5&displaylang=en">Microsoft .NET Framework</a> install�.<br />Pour les utilisateurs d\'OS autres que Windows, utiliser JUniUploader qui vous permettra d\'effectuer les m�mes op�rations que UniUploader mais en utilisant Java.';

$lang['update_instruct']='
<strong>Actualisation automatique recommand�e :<strong>
<ul>
<li>Utiliser <a href="%1$s" target="_blank">UniUploader</a><br />
%2$s</li>
</ul>
<strong>Instructions pour actualiser le profil :<strong>
<ol>
<li>t�l�charger <a href="%3$s" target="_blank">Character Profiler</a> ;</li>
<li>d�compresser l\'archive zip dans son propre dossier dans *WoW Directory*\Interface\Addons\ ;</li>
<li>d�marrer WoW ;</li>
<li>ouvrir votre compte en banque, la fen�tre des qu�tes, et la fen�tre des professions qui contient les recettes ;</li>
<li>se d�connecter ou quitter WoW (voir ci-dessus si vous disposez d\'UniUploader pour automatiser l\'envoi des informations) ;</li>
<li>aller sur la page <a href="%4$s">d\'actualisation</a> ;</li>
<li>%5$s.</li>
</ol>';

$lang['update_instructpvp']='
<strong>Statistiques PvP optionnel :</strong>
<ol>
<li>t�l�charger <a href="%1$s" target="_blank">PvPLog</a> ;</li>
<li>d�compresser l\'archive zip dans son propre dossier dans *WoW Directory*\Interface\Addons\ ;</li>
<li>duel ou PvP ;</li>
<li>envoyer les informations PvPLog.lua (voir �tape 7 de l\'actualisation du profil).</li>
</ol>';

$lang['roster_credits']='Page officiel de WoWRoster - <a href="http://www.wowroster.net" target="_blank">www.wowroster.net</a>';
$lang['bliz_notice']='World of Warcraft et Blizzard Entertainment sont des marques, d�pos�es ou non, appartenant � Blizzard Entertainment Inc. aux �tats-Unis d\'Am�rique et/ou dans les autres pays. Toutes les autres marques sont la propri�t� de leurs seuls ayant-droits respectifs.';


$lang['timeformat'] = '%d/%m/%Y %H:%i:%s'; // MySQL Time format      (example - '%a %b %D, %l:%i %p' => 'Mon Jul 23rd, 2:19 PM') - http://dev.mysql.com/doc/refman/4.1/en/date-and-time-functions.html
$lang['phptimeformat'] = 'd/m/Y H:i:s';    // PHP date() Time format (example - 'M D jS, g:ia' => 'Mon Jul 23rd, 2:19pm') - http://www.php.net/manual/en/function.date.php


/**
 * Realmstatus Localizations
 */
$lang['rs'] = array(
	'ERROR' => 'Erreur',
	'NOSTATUS' => 'Pas de status',
	'UNKNOWN' => 'Inconnu',
	'RPPVP' => 'JdR-PvP',
	'PVE' => 'Normal',
	'PVP' => 'PvP',
	'RP' => 'JdR',
	'OFFLINE' => 'D�connect�',
	'LOW' => 'Bas',
	'MEDIUM' => 'Moyen',
	'HIGH' => 'Haut',
	'MAX' => 'Max',
	'RECOMMENDED' => 'Recommend�',
	'FULL' => 'Plein'
);


//single words used in menu and/or some of the functions, so if theres a wow eqivalent be correct
$lang['guildless']='Sans guilde';
$lang['util']='Utilitaires';
$lang['char']='Personnage';
$lang['equipment']='Equipment';
$lang['upload']='Envoyer';
$lang['required']='Requis';
$lang['optional']='Optionnel';
$lang['attack']='Attaque';
$lang['defense']='D�fense';
$lang['class']='Classe';
$lang['race']='Race';
$lang['level']='Niveau';
$lang['lastzone'] = 'Derni�re zone';
$lang['note']='Note';
$lang['officer_note']='Note d\'officier';
$lang['title']='Titre';
$lang['name']='Nom';
$lang['health']='Vie';
$lang['mana']='Mana';
$lang['gold']='Or';
$lang['armor']='Armure';
$lang['lastonline']='Derni�re connexion';
$lang['online']='Connexion';
$lang['lastupdate']='Derni�re mise � jour';
$lang['currenthonor']='Rang d\'honneur actuel';
$lang['rank']='Rang';
$lang['sortby']='Trier par %';
$lang['total']='Total';
$lang['hearthed']='Pierre de foyer';
$lang['recipes']='Recettes';
$lang['bags']='Sacs';
$lang['character']='Personnage';
$lang['money']='Argent';
$lang['bank']='Banque';
$lang['raid']='CT Raid';
$lang['quests']='Qu�tes';
$lang['roster']='Roster';
$lang['alternate']='Alternatif';
$lang['byclass']='Par classe';
$lang['menustats']='Caract�ristiques';
$lang['menuhonor']='Honneur';
$lang['basename']='Nom de base';
$lang['scope']='Scope';
$lang['tag']='Tag';
$lang['daily']='Daily';
$lang['user'] = 'User';

// Item Quality
$lang['quality']='Quality';
$lang['poor']='Poor';
$lang['common']='Common';
$lang['uncommon']='Uncommon';
$lang['rare']='Rare';
$lang['epic']='Epic';
$lang['legendary']='Legendary';
$lang['artifact']='Artifact';
$lang['heirloom']='Heirloom';

//start search engine
$lang['search']='Rechercher';
$lang['search_roster']='Rechercher sur le Roster';
$lang['search_onlyin']='Rechercher uniquement dans ce greffon';
$lang['search_advancedoptionsfor']='Options avanc�es pour';
$lang['search_results']='Rechercher des r�sultats pour';
$lang['search_results_from']='Voici les r�sultats de votre recherche';
$lang['search_nomatches']='D�sol�, aucun r�sultat ne concorde avec votre recherche';
$lang['search_didnotfind']='Vous n\'avez pas trouv� ce que vous recherchiez ? Essayez ici !';
$lang['search_for']='Rechercher dans le Roster';
$lang['search_next_matches'] = 'R�sultat suivant pour';
$lang['search_previous_matches'] = 'R�sultat pr�c�dent pour';
$lang['search_results_count'] = 'R�sultats';
$lang['submited_author'] = 'Envoy� par';
$lang['submited_date'] = 'Date de soumission';
//end search engine
$lang['update']='Mise � jour';
$lang['credit']='Cr�dits';
$lang['who_made']='Les artisans du projet WoWRoster';
$lang['members']='Membres';
$lang['member_profiles']='Member Profiles';
$lang['items']='Objets';
$lang['find']='Trouver les objets contenants';
$lang['upprofile']='Mise � jour du profil';
$lang['backlink']='Retour au Roster';
$lang['gender']='Genre';
$lang['unusedtrainingpoints']='Points de formation non utilis�s';
$lang['unusedtalentpoints']='Points de talent non utilis�s';
$lang['talentexport']='Construction de l\'arbre de talents';
$lang['questlog']='Journal des qu�tes';
$lang['recipelist']='Liste des recettes';
$lang['reagents']='Composants';
$lang['item']='Objet';
$lang['type']='Type';
$lang['date']='Date';
$lang['complete'] = 'Termin�e';
$lang['failed'] = '�chec';
$lang['completedsteps'] = '�tapes termin�es';
$lang['currentstep'] = '�tapes actuelles';
$lang['uncompletedsteps'] = '�tapes incompl�tes';
$lang['key'] = 'Clef';
$lang['keyring'] = 'Keyring';
$lang['timeplayed'] = 'Temps jou�';
$lang['timelevelplayed'] = 'Temps jou� � ce niveau';
$lang['Addon'] = 'Greffons :';
$lang['advancedstats'] = 'Statistiques avanc�es';
$lang['crit'] = 'Critiques';
$lang['dodge'] = 'Esquive';
$lang['parry'] = 'Parade';
$lang['block'] = 'Blocage';
$lang['realm'] = 'Royaume';
$lang['region'] = 'R�gion';
$lang['server'] = 'Serveur';
$lang['faction'] = 'Faction';
$lang['page'] = 'Page';
$lang['general'] = 'G�n�ral';
$lang['prev'] = 'Pr�c�dente';
$lang['next'] = 'Suivante';
$lang['memberlog'] = 'Journal';
$lang['removed'] = 'Enlev�';
$lang['added'] = 'Ajout�';
$lang['add'] = 'Ajout';
$lang['delete'] = 'Suppression';
$lang['updated'] = 'Mis � jour';
$lang['no_info'] = 'Aucune information';
$lang['info'] = 'Info';
$lang['url'] = 'URL';
$lang['none']='Rien';
$lang['kills']='Tu�s';
$lang['allow'] = 'Permis';
$lang['disallow'] = 'Interdit';
$lang['locale'] = 'Locale';
$lang['language'] = 'Langage';
$lang['default'] = 'D�faut';
$lang['proceed'] = 'Valider';
$lang['submit'] = 'Soumettre';
$lang['strength']='Force';
$lang['agility']='Agilit�';
$lang['stamina']='Endurance';
$lang['intellect']='Intelligence';
$lang['spirit']='Esprit';

$lang['rosterdiag'] = 'Diagnostic du Roster';
$lang['updates_available'] = 'Updates Available!';
$lang['updates_available_message'] = 'Log in as Admin to download update files';
$lang['download_update_pkg'] = 'Download Update Package';
$lang['download_update'] = 'Download Update';
$lang['zip_archive'] = '.zip Archive';
$lang['targz_archive'] = '.tar.gz Archive';

$lang['difficulty'] = 'Difficult�';
$lang['recipe_4'] = 'optimal';
$lang['recipe_3'] = 'moyen';
$lang['recipe_2'] = 'facile';
$lang['recipe_1'] = 'insignifiant';
$lang['roster_config'] = 'Configuration du Roster';

$lang['search_names'] = 'Recherche de noms';
$lang['search_items'] = 'Recherche d\'objets';
$lang['search_tooltips'] = 'Recherche d\'aide';

// Talent Builds
$lang['talent_build_0'] = 'Active';
$lang['talent_build_1'] = 'Inactif';

// Char Scope
$lang['char_level_race_class'] = 'Niveau %1$s %2$s %3$s';
$lang['char_guildline'] = '%1$s de %2$s';

// Login
$lang['welcome_user'] = 'Welcome, %1$s';
$lang['login'] = 'Login';
$lang['logout'] = 'Logout';
$lang['logged_in'] = 'Logged in';
$lang['logged_out'] = 'Logged out';
$lang['login_invalid'] = 'Invalid Password';
$lang['login_fail'] = 'Failed to fetch password info';
$lang['login_inactive'] = 'Your account is not active or is not approved by the admin. Only "Public" areas can be accessed.';
$lang['active'] = 'Active';
$lang['inactive'] = 'Inactif';

//this needs to be exact as it is the wording in the db
$lang['professions']='M�tiers';
$lang['secondary']='Comp�tences secondaires';
$lang['Blacksmithing']='Forge';
$lang['Mining']='Minage';
$lang['Herbalism']='Herboristerie';
$lang['Alchemy']='Alchimie';
$lang['Archaeology']='Arch�ologie';
$lang['Leatherworking']='Travail du cuir';
$lang['Jewelcrafting']='Joaillerie';
$lang['Skinning']='D�pe�age';
$lang['Tailoring']='Couture';
$lang['Enchanting']='Enchantement';
$lang['Engineering']='Ing�nierie';
$lang['Inscription']='Calligraphie';
$lang['Runeforging']='Runeforge';
$lang['Cooking']='Cuisine';
$lang['Fishing']='P�che';
$lang['First Aid']='Secourisme';
$lang['Poisons']='Poisons';
$lang['backpack']='Sac � dos';
$lang['PvPRankNone']='Rien';

// Uses preg_match() to find required level in recipie tooltip
$lang['requires_level'] = '/Niveau ([\d]+) requis/';

// Skills to EN id array
$lang['skill_to_id'] = array(
	'Class Skills' => 'classskills',
	'Professions' => 'professions',
	'Secondary Skills' => 'secondaryskills',
	'Weapon Skills' => 'weaponskills',
	'Armor Proficiencies' => 'armorproficiencies',
	'Languages' => 'languages',
);

//Tradeskill-Array
$lang['tsArray'] = array (
	$lang['Alchemy'],
	$lang['Archaeology'],
	$lang['Herbalism'],
	$lang['Blacksmithing'],
	$lang['Mining'],
	$lang['Leatherworking'],
	$lang['Jewelcrafting'],
	$lang['Skinning'],
	$lang['Tailoring'],
	$lang['Enchanting'],
	$lang['Engineering'],
	$lang['Inscription'],
	$lang['Runeforging'],
	$lang['Cooking'],
	$lang['Fishing'],
	$lang['First Aid'],
	$lang['Poisons'],
);

//Tradeskill Icons-Array
$lang['ts_iconArray'] = array (
	$lang['Alchemy']=>'trade_alchemy',
	$lang['Archaeology']=>'trade_archaeology',
	$lang['Herbalism']=>'trade_herbalism',
	$lang['Blacksmithing']=>'trade_blacksmithing',
	$lang['Mining']=>'trade_mining',
	$lang['Leatherworking']=>'trade_leatherworking',
	$lang['Jewelcrafting']=>'inv_misc_gem_02',
	$lang['Skinning']=>'inv_misc_pelt_wolf_01',
	$lang['Tailoring']=>'trade_tailoring',
	$lang['Enchanting']=>'trade_engraving',
	$lang['Engineering']=>'trade_engineering',
	$lang['Inscription']=>'inv_inscription_tradeskill01',
	$lang['Runeforging']=>'spell_deathknight_frozenruneweapon',
	$lang['Cooking']=>'inv_misc_food_15',
	$lang['Fishing']=>'trade_fishing',
	$lang['First Aid']=>'spell_holy_sealofsacrifice',
	$lang['Poisons']=>'ability_poisons'
);

// Riding Skill Icons-Array
$lang['riding'] = 'Monte';
$lang['ts_ridingIcon'] = array(
	'Elfe de la nuit'=>'ability_mount_whitetiger',
	'Humain'=>'ability_mount_ridinghorse',
	'Nain'=>'ability_mount_mountainram',
	'Gnome'=>'ability_mount_mechastrider',
	'Mort-vivant'=>'ability_mount_undeadhorse',
	'Troll'=>'ability_mount_raptor',
	'Tauren'=>'ability_mount_kodo_03',
	'Orc'=>'ability_mount_blackdirewolf',
	'Elfe de sang' => 'ability_mount_cockatricemount',
	'Draene�' => 'ability_mount_ridingelekk',
	'Paladin'=>'ability_mount_dreadsteed',
	'D�moniste'=>'ability_mount_nightmarehorse',
	'Chevalier de la mort'=>'spell_deathknight_summondeathcharger',
// Female variation
//	'Elfe de la nuit'=>'ability_mount_whitetiger',
	'Humaine'=>'ability_mount_ridinghorse',
	'Naine'=>'ability_mount_mountainram',
//	'Gnome'=>'ability_mount_mechastrider',
	'Morte-vivante'=>'ability_mount_undeadhorse',
	'Trollesse'=>'ability_mount_raptor',
	'Taur�ne'=>'ability_mount_kodo_03',
	'Orque'=>'ability_mount_blackdirewolf',
//	'Elfe de sang' => 'ability_mount_cockatricemount',
//	'Draene�' => 'ability_mount_ridingelekk',
//	'Paladin'=>'ability_mount_dreadsteed',
//	'D�moniste'=>'ability_mount_nightmarehorse',
//	'Chevalier de la mort'=>'spell_deathknight_summondeathcharger'
	'Pandaren'=>'ability_mount_ridinghorse',

);

$lang['ts_flyingIcon'] = array(
	'Horde'=>'ability_mount_wyvern_01',
	'Alliance'=>'ability_mount_gryphon_01',
	'Druide'=>'ability_druid_flightform',
	'Chevalier de la mort'=>'ability_mount_dreadsteed',
// Female variation
	'Druidesse'=>'ability_druid_flightform',
//	'Chevalier de la mort'=>'ability_mount_dreadsteed'
);

// Class Icons-Array
$lang['class_iconArray'] = array (
	'Chevalier de la mort'=>'deathknight_icon',
	'Druide'=>'druid_icon',
	'Chasseur'=>'hunter_icon',
	'Mage'=>'mage_icon',
	'Paladin'=>'paladin_icon',
	'Pr�tre'=>'priest_icon',
	'Voleur'=>'rogue_icon',
	'Chaman'=>'shaman_icon',
	'D�moniste'=>'warlock_icon',
	'Guerrier'=>'warrior_icon',
// Female variation
//	'Chevalier de la mort'=>'deathknight_icon',
	'Druidesse'=>'druid_icon',
	'Chasseresse'=>'hunter_icon',
//	'Mage'=>'mage_icon',
//	'Paladin'=>'paladin_icon',
	'Pr�tresse'=>'priest_icon',
	'Voleuse'=>'rogue_icon',
	'Chamane'=>'shaman_icon',
//	'D�moniste'=>'warlock_icon',
	'Guerri�re'=>'warrior_icon',
	'Monk'=>'monk_icon'

);

// Class Color-Array
$lang['class_colorArray'] = array(
	'Chevalier de la mort'=>'C41F3B',
	'Druide' => 'FF7D0A',
	'Chasseur' => 'ABD473',
	'Mage' => '69CCF0',
	'Paladin' => 'F58CBA',
	'Pr�tre' => 'FFFFFF',
	'Voleur' => 'FFF569',
	'Chaman' => '2459FF',
	'D�moniste' => '9482C9',
	'Guerrier' => 'C79C6E',
// Female variation
//	'Chevalier de la mort'=>'C41F3B',
	'Druidesse' => 'FF7D0A',
	'Chasseresse' => 'ABD473',
//	'Mage' => '69CCF0',
//	'Paladin' => 'F58CBA',
	'Pr�tresse' => 'FFFFFF',
	'Voleuse' => 'FFF569',
	'Chamane' => '2459FF',
//	'D�moniste' => '9482C9',
	'Guerri�re' => 'C79C6E',
	'Monk' => '00C77b'

);

// Class To English Translation
$lang['class_to_en'] = array(
	'Chevalier de la mort'=>'Death Knight',
	'Druide' => 'Druid',
	'Chasseur' => 'Hunter',
	'Mage' => 'Mage',
	'Paladin' => 'Paladin',
	'Pr�tre' => 'Priest',
	'Voleur' => 'Rogue',
	'Chaman' => 'Shaman',
	'D�moniste' => 'Warlock',
	'Guerrier' => 'Warrior',
// Female variation
//	'Chevalier de la mort'=>'Death Knight',
	'Druidesse' => 'Druid',
	'Chasseresse' => 'Hunter',
//	'Mage' => 'Mage',
//	'Paladin' => 'Paladin',
	'Pr�tresse' => 'Priest',
	'Voleuse' => 'Rogue',
	'Chamane' => 'Shaman',
//	'D�moniste' => 'Warlock',
	'Guerri�re' => 'Warrior',
	'Monk' => 'Monk'

);

// Class to game-internal ID
$lang['class_to_id'] = array(
	'Guerrier' => 1,
	'Paladin' => 2,
	'Chasseur' => 3,
	'Voleur' => 4,
	'Pr�tre' => 5,
	'Chevalier de la mort'=>6,
	'Chaman' => 7,
	'Mage' => 8,
	'D�moniste' => 9,
	'Druide' => 11,
// Female variation
	'Guerri�re' => 1,
//	'Paladin' => 2,
	'Chasseresse' => 3,
	'Voleuse' => 4,
	'Pr�tresse' => 5,
//	'Chevalier de la mort'=>6,
	'Chamane' => 7,
//	'Mage' => 8,
//	'D�moniste' => 9,
	'Monk' => 10,
	'Druidesse' => 11,

);

// Game-internal ID to class
$lang['id_to_class'] = array(
	1 => 'Guerrier',
	2 => 'Paladin',
	3 => 'Chasseur',
	4 => 'Voleur',
	5 => 'Pr�tre',
	6 => 'Chevalier de la mort',
	7 => 'Chaman',
	8 => 'Mage',
	9 => 'D�moniste',
	10 => 'Monk',
	11 => 'Druide',
	25 => 'Pandaren',
	26 => 'Pandaren',
);

// Race to English Translation
$lang['race_to_en'] = array(
	'Elfe de sang' => 'Blood Elf',
	'Draene�'      => 'Draenei',
	'Elfe de la nuit' => 'Night Elf',
	'Nain'         => 'Dwarf',
	'Gnome'        => 'Gnome',
	'Humain'       => 'Human',
	'Orc'          => 'Orc',
	'Mort-vivant'  => 'Undead',
	'Troll'        => 'Troll',
	'Tauren'       => 'Tauren',
	'Worgen'       => 'Worgen',
	'Gobelin'      => 'Goblin',
// Female variation
//	'Elfe de sang'  => 'Blood Elf',
//	'Draene�'       => 'Draenei',
//	'Elfe de la nuit' => 'Night Elf',
	'Naine'         => 'Dwarf',
//	'Gnome'         => 'Gnome',
	'Humaine'       => 'Human',
	'Orque'         => 'Orc',
	'Morte-vivante' => 'Undead',
	'Trollesse'     => 'Troll',
	'Taur�ne'       => 'Tauren',
//	'Worgen'        => 'Worgen',
//	'Gobelin'       => 'Goblin',
	'Pandaren'	=> 'Pandaren',
);

$lang['race_to_id'] = array(
	'Humain'       => 1,
	'Orc'          => 2,
	'Nain'         => 3,
	'Elfe de la nuit' => 4,
	'Mort-vivant'  => 5,
	'Tauren'       => 6,
	'Gnome'        => 7,
	'Troll'        => 8,
	'Elfe de sang' => 10,
	'Draene�'      => 11,
	'Worgen'       => 22,
	'Gobelin'      => 9,
// Female variation
	'Humaine'       => 1,
	'Orque'         => 2,
	'Naine'         => 3,
//	'Elfe de la nuit' => 4,
	'Morte-vivante' => 5,
	'Taur�ne'      => 6,
//	'Gnome'         => 7,
	'Trollesse'     => 8,
//	'Elfe de sang'  => 10,
//	'Draene�'      => 11,
//	'Worgen'       => 22,
//	'Gobelin'      => 9,
	'Pandaren'	=> 25,
	'Pandaren'	=> 26,


);

$lang['id_to_race'] = array(
	1 => 'Humain',
	2 => 'Orc',
	3 => 'Nain',
	4 => 'Elfe de la nuit',
	5 => 'Mort-vivant',
	6 => 'Tauren',
	7 => 'Gnome',
	8 => 'Troll',
	10 => 'Elfe de sang',
	11 => 'Draene�',
	22 => 'Worgen',
	9 => 'Gobelin',
	25 => 'Pandaren',
	26 => 'Pandaren',
);

/*
	profession stuff
*/
$lang['id_to_prof'] = array(
	171 => 'Alchemy',
	164 => 'Blacksmithing',
	333 => 'Enchanting',
	202 => 'Engineering',
	182 => 'Herbalism',
	773 => 'Inscription',
	755 => 'Jewelcrafting',
	165 => 'Leatherworking',
	186 => 'Mining',
	393 => 'Skinning',
	197 => 'Tailoring',
	794 => 'Archaeology',
	185 => 'Cooking',
	129 => 'First Aid',
	356 => 'Fishing'
);

$lang['prof_to_id'] = array(
 	'Alchemy'			=> 171,
	'Blacksmithing'		=> 164,
	'Enchanting'		=> 333,
	'Engineering'		=> 202,
	'Herbalism'			=> 182,
	'Inscription'		=> 773,
	'Jewelcrafting'		=> 755,
	'Leatherworking'	=> 165,
	'Mining'			=> 186,
	'Skinning'			=> 393,
	'Tailoring'			=> 197,
	'Archaeology'		=> 794,
	'Cooking'			=> 185,
	'First Aid'			=> 129,
	'Fishing'			=> 356
);
$lang['ts_id_icon'] = array (
	171 => 'trade_alchemy',
	794 => 'trade_archaeology',
	182 => 'trade_herbalism',
	164 =>'trade_blacksmithing',
	186 =>'trade_mining',
	165 =>'trade_leatherworking',
	755 =>'inv_misc_gem_02',
	393 =>'inv_misc_pelt_wolf_01',
	197 =>'trade_tailoring',
	333 =>'trade_engraving',
	202 =>'trade_engineering',
	773 =>'inv_inscription_tradeskill01',
	001 =>'spell_deathknight_frozenruneweapon',
	185 =>'inv_misc_food_15',
	356 =>'trade_fishing',
	129 =>'spell_holy_sealofsacrifice',
	000 =>'ability_poisons'
);

$lang['hslist']=' Statistiques du Syst�me d\'Honneur';
$lang['hslist1']='Membre le mieux class�';
$lang['hslist2']='Membre ayant le plus de VH';
$lang['hslist3']='Le plus de Points d\'honneur';
$lang['hslist4']='Le plus de Points d\'ar�ne';

$lang['Death Knight']='Chevalier de la mort';
$lang['Druid']='Druide';
$lang['Hunter']='Chasseur';
$lang['Mage']='Mage';
$lang['Monk']='Monk';
$lang['Paladin']='Paladin';
$lang['Priest']='Pr�tre';
$lang['Rogue']='Voleur';
$lang['Shaman']='Chaman';
$lang['Warlock']='D�moniste';
$lang['Warrior']='Guerrier';

$lang['today']='Aujourd\'hui';
$lang['todayhk']='VH du jour';
$lang['todaycp']='CP du jour';
$lang['yesterday']='Hier';
$lang['yesthk']='VH d\'hier';
$lang['yestcp']='CP d\'hier';
$lang['thisweek']='Cette semaine';
$lang['lastweek']='Semaine derni�re';
$lang['lifetime'] = '� vie';
$lang['lifehk']='VH � vie';
$lang['honorkills']='Vict. Honorables';
$lang['dishonorkills']='Vict. D�shonorantes';
$lang['honor']='Honneur';
$lang['standing']='Position';
$lang['highestrank']='Plus haut niveau';
$lang['arena']='Ar�ne';

$lang['when']='Quand';
$lang['guild']='Guilde';
$lang['guilds']='Guildes';
$lang['result']='R�sultat';
$lang['zone']='Zone';
$lang['subzone']='Sous-zone';
$lang['yes']='Oui';
$lang['no']='Non';
$lang['win']='Victoire';
$lang['loss']='D�faite';
$lang['unknown']='Inconnu';

//strings for Rep-tab
$lang['exalted']='Exalt�';
$lang['revered']='R�v�r�';
$lang['honored']='Honor�';
$lang['friendly']='Amical';
$lang['neutral']='Neutre';
$lang['unfriendly']='Inamical';
$lang['hostile']='Hostile';
$lang['hated']='Ha�';
$lang['atwar']='En guerre';
$lang['notatwar']='Pas en guerre';

// Factions to EN id
$lang['faction_to_id'] = array(
	'Alliance' => 'alliance',
	'Alliance Forces' => 'allianceforces',
	'Alliance Vanguard' => 'alliancevanguard',
	'Classic' => 'classic',
	'Other' => 'other',
	'Outland' => 'outland',
	'Shattrath City' => 'shattrathcity',
	'Steamwheedle Cartel' => 'steamwheedlecartel',
	'The Burning Crusade' => 'theburningcrusade',
	'Wrath of the Lich King' => 'wrathofthelitchking',
	'Sholazar Basin' => 'sholazarbasin',
	'Horde Expedition' => 'horde',
	'Horde' => 'horde',
	'Horde Forces' => 'horde',
	'Cataclysm' => 'cataclysm',
	'Guild' => 'guild',
	'Reputation' => 'reputation',
	'Mists of Pandaria' => 'mists of pandaria',
	'The Anglers' => 'the anglers',
	'The Tillers' => 'the tillers',
);


// Quests page external links (on character quests page)
// $lang['questlinks'][][] = array(
// 		'name'=> 'Name',  // This is the name displayed on the quests page
// 		'url' => 'url',   // This is the URL used for the quest lookup (must be sprintf() compatible)

$lang['questlinks'][] = array(
	'name'=>'WoWHead',
	'url'=>'http://fr.wowhead.com/?quest=%s'
);

/*$lang['questlinks'][] = array(
	'name'=>'Allakhazam',
	'url'=>'http://wow.allakhazam.com/db/quest.html?source=live;wquest=%s;locale=frFR'
);*/

/*$lang['questlinks'][] = array(  // Does not allow quest id linking
	'name'=>'Judgehype FR',
	'url'=>'http://worldofwarcraft.judgehype.com/index.php?page=bc-result&amp;Ckey='
);*/




// Items external link
// Add as manu item links as you need
// Just make sure their names are unique
// uses the 'item_id' for data
$lang['itemlink'] = 'Liens vers les objets';
$lang['itemlinks']['Judgehype FR'] = 'http://worldofwarcraft.judgehype.com/index.php?page=bc-obj&w=';
$lang['itemlinks']['WoWHead'] = 'http://fr.wowhead.com/?item=';
$lang['itemlinks']['Allakhazam'] = 'http://wow.allakhazam.com/db/item.html?locale=frFR&witem=';
//$lang['itemlinks']['WoWDBU FR'] ='http://wowdbu.com/2-1.html?way=asc&amp;order=name&amp;showstats=&amp;type_limit=0&amp;lvlmin=&amp;lvlmax=&amp;name='; // In maintenance mode - not accessible yet

// WoW Data Site Search
// Add as many item links as you need
// Just make sure their names are unique
// use these locales for data searches
$lang['data_search'] = 'Site de recherche de donn�es sur WoW';
$lang['data_links']['Thottbot'] = 'http://www.thottbot.com/index.cgi?s=';
$lang['data_links']['Allakhazam'] = 'http://wow.allakhazam.com/search.html?locale=frFR&q=';
$lang['data_links']['WWN Data'] = 'http://wwndata.worldofwar.net/search.php?search=';
$lang['data_links']['WoWHead'] = 'http://fr.wowhead.com/?search=';

// Google Search
// Add as many item links as you need
// Just make sure their names are unique
// use these locales for data searches
$lang['google_search'] = 'Google';
$lang['google_links']['Google'] = 'http://www.google.com/search?q=';
$lang['google_links']['Google Groups'] = 'http://groups.google.com/groups?q=';
$lang['google_links']['Google Images'] = 'http://images.google.com/images?q=';
$lang['google_links']['Google News'] = 'http://news.google.com/news?q=';

// Definition for item tooltip coloring
$lang['tooltip_use']='Utiliser...';
$lang['tooltip_requires']='Niveau';
$lang['tooltip_reinforced']='renforc�e';
$lang['tooltip_soulbound']='Li�';
$lang['tooltip_accountbound']='Account Bound';
$lang['tooltip_boe']='Li� quand �quip�';
$lang['tooltip_equip']='�quip�...';
$lang['tooltip_equip_restores']='�quip�.:.Rend';
$lang['tooltip_equip_when']='�quip� : Lorsque';
$lang['tooltip_chance']='Chance';
$lang['tooltip_enchant']='Enchantement';
$lang['tooltip_random_enchant']='Enchantement al�atoire';
$lang['tooltip_set']='Ensemble...|Complet...|Set...';
$lang['tooltip_rank']='Rang';
$lang['tooltip_next_rank']='Prochain rang';
$lang['tooltip_spell_damage']='les d�g�ts et les soins produits par les sorts et effets magiques';
$lang['tooltip_school_damage']='les d�g�ts inflig�s par les sorts et effets';
$lang['tooltip_healing_power']='les soins prodigu�s par les sorts et effets';
$lang['tooltip_reinforced_armor']='Armure renforc�e';
$lang['tooltip_damage_reduction']='R�duit les points de d�g�ts';
//--Tooltip Parsing -- Translated by Kalia
$lang['tooltip_durability']='Durabilit�';
$lang['tooltip_unique']='Unique';
$lang['tooltip_speed']='Vitesse';
$lang['tooltip_poisoneffect']='Chaque coup a';
$lang['tooltip_classes']='Classes:';
$lang['tooltip_races']='Races:';
$lang['tooltip_heroic']='Heroic';
// MOP 5.1
$lang['tooltip_upgrade']='Upgrade Level: %1$s/%2$s';
$lang['tooltip_preg_upgrade']='/Upgrade Level: (\d+)\/(\d+)/';
$lang['tooltip_preg_enchant']='/Enchanted: (.+)/';
$lang['tooltip_ienchant']='Enchanted: %1$s';
// MOP 5.0
$lang['tooltip_preg_item_season']='/Season ([0-9, ]+)/';
// php 5.3 changes
$lang['tooltip_preg_soulbound']='/Soulbound/';
$lang['tooltip_preg_dps']='/(\d+) damage per second/';
$lang['tooltip_preg_item_equip']='/Equip: (.+)/';
$lang['tooltip_preg_item_set']='/Set: (.+)/';
$lang['tooltip_preg_item_set_n']='/\(([0-9])\) Set: (.+)/';
$lang['tooltip_preg_use']='/Use: (.+)/';
$lang['tooltip_preg_chance']='/Chance (.+)/';
$lang['tooltip_preg_chance_hit']='/Chance ^(to|on) hit: (.+)/';
$lang['tooltip_preg_heroic']='/Heroic/';
$lang['tooltip_preg_timeless']='/Timeless/';
$lang['tooltip_preg_warforged']='/^(Flexible|Warforged)/';
$lang['tooltip_preg_lfr']='/Raid Finder/';
$lang['tooltip_garbage1']='/\<Shift Right Click to Socket\>/';
$lang['tooltip_garbage2']='/\<Right Click to Read\>/';
$lang['tooltip_garbage3']='/Duration (.+)/';
$lang['tooltip_garbage4']='/Cooldown remaining (.+)/';
$lang['tooltip_garbage5']='/\<Right Click to Open\>/';
$lang['tooltip_garbage6']='/Equipment Sets: (.+)/';
$lang['tooltip_garbage7'] = '/You may sell this item to a vendor within (.+) for a full refund./';
$lang['tooltip_garbage8'] = '/You may sell this item to a vendor within (\d+) hour (\d+) min for a full refund./';
//^(Red|Yellow|Blue|Meta)
$lang['tooltip_preg_weapon_types']='/^(Arrow|Axe|Bow|Bullet|Crossbow|Dagger|Fishing Pole|Fist Weapon|Gun|Idol|Mace|Main Hand|Off-hand|Polearm|Staff|Sword|Thrown|Wand|Ranged|One-Hand|Two-Hand|Relic)/';
$lang['tooltip_preg_speed']='/Speed/';

$lang['tooltip_preg_armor']='/Armure.+ ([0-9, ]+)/';
$lang['tooltip_preg_durability']='/Durabilit�(|:) (\d+) \/ (\d+)/';
$lang['tooltip_preg_madeby']='/\<Artisan.+ (.+)\>/';  // this is the text that shows who crafted the item.
$lang['tooltip_preg_bags']='/Conteneur (\d+) emplacements/';  // text for bags, ie '16 slot bag'
$lang['tooltip_preg_socketbonus']='/Bonus de sertissage : (.+)/';
$lang['tooltip_preg_classes']='/^(Classes.:.)(.+)$/'; // text for class restricted items
$lang['tooltip_preg_races']='/^(Races.:.)(.+)$/'; // text for race restricted items
$lang['tooltip_preg_charges']='/(\d+) Charges/i'; // text for items with charges
$lang['tooltip_preg_block']='/(Bloquer).+?([0-9, ]+)/i';  // text for shield blocking values
$lang['tooltip_preg_emptysocket']='/(?:Ch�sse )?(rouge(?!\()|jaune(?!\()|Prismatic(?!\()|bleue(?!\()|M�ta(?=-))(?:-ch�sse)?/'; // text shown if the item has empty sockets.
$lang['tooltip_preg_reinforcedarmor']='/(Renforc� \(\+\d Armure\))/';
$lang['tooltip_preg_tempenchants']='/(.+\s\(\d+\s(min|sec)\))\n/';
$lang['tooltip_preg_meta_requires']='/N�cessite.*?gemme(?:s|)/i';
$lang['tooltip_preg_meta_requires_min']='/N�cessite au moins (\d) gemme(?:s|) (\S+)\(s\)/i';
$lang['tooltip_preg_meta_requires_more']='/N�cessite plus de gemmes (jaune|rouge|blue\S+) que de (\S+)/i';
$lang['tooltip_preg_item_level']='/Item Level (\d+)/';
$lang['tooltip_feral_ap']='Increases attack power by';
$lang['tooltip_source']='Source';
$lang['tooltip_sha'] = 'Sha-Touched';
$lang['tooltip_boss']='Boss';
$lang['tooltip_droprate']='Fr�quence de butin';
$lang['tooltip_reforged']='Reforged';
$lang['tooltip_transmogc'] = '/Transmogrified to: (.+)/';
$lang['tooltip_transmogb'] = 'Transmogrified to: ';
$lang['tooltip_transmoga'] = "Transmogrified to:\n";

$lang['tooltip_chance_hit']='Chances quand vous touchez...'; // needs to find 'chance on|to hit:'
$lang['tooltip_reg_requires']='Niveau|requis|Requiert'; // � une main
$lang['tooltip_reg_onlyworksinside']='Ne fonctionne qu\'� l\'int�rieur du Donjon de la Temp�te';
$lang['tooltip_reg_conjureditems']='Objet invoqu�';
$lang['tooltip_reg_weaponorbulletdps']='^\(|^Ajoute ';

$lang['tooltip_armor_types']='Tissu|Cuir|Mailles|Plaques';  // the types of armor
$lang['tooltip_weapon_types']='Hache|Arc|Arbal�te|Dague|Canne � p�che|Arme de pugilat|Arme � feu|� une main|Masse|Main droite|Arme d\'hast|B�ton|Ep�e|Armes de jet|Baguette|Tenu\(e\) en main gauche|Fl�che|Balle';
$lang['tooltip_bind_types']='Li�|Li� quand �quip�|Objet de qu�te|Li� quand utilis�|Cet objet permet de lancer une qu�te|Lier au compte|Account Bound';
$lang['tooltip_misc_types']='Doigt|Cou|Dos|Chemise|Bijou|Tabard|T�te|Torse|Jambes|Pieds';
$lang['tooltip_garbage']='Maj clic-droit pour sertir|<Right Click to Read>|Duration|Temps de recharge|<Right Click to Open>';  // these are texts that we really do not need to show in WoWRoster's tooltip so we'll strip them out

//CP v2.1.1+ Gems info
//uses preg_match() to find the type and color of the gem
$lang['gem_preg_singlecolor'] = '/Correspond � une ch�sse (.+)\./';
$lang['gem_preg_multicolor'] = '/Correspond � une ch�sse (.+) ou (.+)\./';
$lang['gem_preg_meta'] = '/Ne peut �tre serti que dans une ch�sse de m�ta-gemme\./';
$lang['gem_preg_prismatic'] = '/Correspond � une ch�sse rouge, jaune ou bleue\./';

//Gem color Array
$lang['gem_colors'] = array(
	'red' => 'rouge',
	'blue' => 'bleue',
	'yellow' => 'jaune',
	'green' => 'verte',
	'orange' => 'orange',
	'purple' => 'pourpre',
	'prismatic' => 'prismatique',
	'hydraulic' => 'Sha-Touched',
	'meta' => 'm�ta'
	);

$lang['gem_colors_to_en'] = array(
	'red' => 'rouge',
	'blue' => 'bleu',
	'yellow' => 'jaune',
	'green' => 'verte',
	'orange' => 'orange',
	'purple' => 'violette',
	'prismatic' => 'prismatic',
	'hydraulic' => 'Sha-Touched',
	'meta' => 'meta'
	);

$lang['socket_colors_to_en'] = array(
	'rouge' => 'red',
	'bleue' => 'blue',
	'jaune' => 'yellow',
	'm�ta' => 'meta',
	'prismatic' => 'prismatic',
	'hydraulic' => 'hydraulic',
	'sha-touched' => 'hydraulic',
	);
// -- end tooltip parsing



// Warlock pet names for icon displaying
$lang['Imp']='Diablotin';
$lang['Voidwalker']='Marcheur du Vide';
$lang['Succubus']='Succube';
$lang['Felhunter']='Chasseur corrompu';
$lang['Infernal']='Infernal';
$lang['Felguard']='Gangregarde';

// Max experiance for exp bar on char page
$lang['max_exp']='XP maximum';

// Error messages
$lang['CPver_err']='La version du WoWRoster-Profiler utilis�e pour r�cup�rer les donn�es pour ce personnage est plus ancienne que la version minimum autoris�e.<br />Veuillez vous assurez que vous fonctionnez avec au moins la version v%1$s, que vous vous �tes connect� sur ce personnage et avez sauv� les donn�es en utilisant cette version.';
$lang['GPver_err']='La version du WoWRoster-GuildProfiler utilis�e pour capturer les donn�es pour ce personnage est plus ancienne que la version minimum autoris�e pour le t�l�chargement.<br />SVP assurez vous que vous fonctionnez avec la v%1$s';

// Menu titles
$lang['menu_upprofile']='Mise � jour du profil|Mettez � jour votre profil sur ce site';
$lang['menu_search']='Recherche|Rechercher des objets et des recettes dans la base de donn�e';
$lang['menu_roster_cp']='Configuration Roster|Panneau de configuration du Roster';
$lang['menu_roster_ucp']='UserCP|Roster Configuration Panel';
$lang['menupanel_util']  = 'Utilitaires';
$lang['menupanel_realm'] = 'Royaume';
$lang['menupanel_guild'] = 'Guilde';
$lang['menupanel_char']  = 'Personnage';
$lang['menupanel_user'] = 'User CP';

$lang['menuconf_sectionselect']='Zone de s�lection';
$lang['menuconf_section']='Section';
$lang['menuconf_changes_saved']='Changements sur %1$s enregistr�';
$lang['menuconf_no_changes_saved']='Aucun changement enregistr�';
$lang['menuconf_add_button']='Ajouter un bouton';
$lang['menuconf_drag_delete']='D�placer ici pour supprimer';
$lang['menuconf_addon_inactive']='Greffon inactif';
$lang['menuconf_unused_buttons']='Boutons non utilis�s';

$lang['default_page_set']='The default page has been set to [%1$s]';

$lang['installer_install_0'] = 'L\'installation de [%1$s] a r�ussi';
$lang['installer_install_1'] = 'L\'installation de [%1$s] a �chou� mais le retour � l\'�tat pr�c�dent a r�ussi';
$lang['installer_install_2'] = 'L\'installation de [%1$s] a �chou� et il n\'a pas �t� possible de revenir � l\'�tat pr�c�dent la tentative d\'installation';
$lang['installer_uninstall_0'] = 'La d�sinstallation de [%1$s] a r�ussi';
$lang['installer_uninstall_1'] = 'La d�sinstallation de [%1$s] a �chou� mais le retour � l\'�tat pr�c�dent a r�ussi';
$lang['installer_uninstall_2'] = 'La d�sinstallation de [%1$s] a �chou� et il n\'a pas �t� possible de revenir � l\'�tat pr�c�dent la tentative de d�sinstallation';
$lang['installer_upgrade_0'] = 'La mise � jour de [%1$s] a r�ussi';
$lang['installer_upgrade_1'] = 'La mise � jour de [%1$s] a �chou� mais le retour � l\'�tat pr�c�dent a r�ussi';
$lang['installer_upgrade_2'] = 'La mise � jour de [%1$s] a �chou� et il n\'a pas �t� possible de revenir � l\'�tat pr�c�dent la tentative de mise � jour';
$lang['installer_purge_0'] = 'Nettoyage de [%1$s] r�ussi';

$lang['installer_icon'] = 'Ic�ne';
$lang['installer_addoninfo'] = 'Informations du greffon';
$lang['installer_status'] = 'Status';
$lang['installer_installation'] = 'Installation';
$lang['installer_author'] = 'Auteur';
$lang['installer_log'] = 'Journal du gestionnaire de greffon';
$lang['installer_activate_0'] = 'Addon %1$s d�sactiv�';
$lang['installer_activate_1'] = 'Addon %1$s activ�';
$lang['installer_deactivated'] = 'D�sactiv�';
$lang['installer_activated'] = 'Activ�';
$lang['installer_installed'] = 'Install�';
$lang['installer_upgrade_avail'] = 'Une mise � jour est disponible';
$lang['installer_not_installed'] = 'Non install�';
$lang['installer_install'] = 'Install';
$lang['installer_uninstall'] = 'Uninstall';
$lang['installer_activate'] = 'Activate';
$lang['installer_deactivate'] = 'Deactivate';
$lang['installer_upgrade'] = 'Upgrade';
$lang['installer_purge'] = 'Purge';

$lang['installer_turn_off'] = 'Cliquez pour d�sactiver';
$lang['installer_turn_on'] = 'Cliquez pour activer';
$lang['installer_click_uninstall'] = 'Cliquez pour d�sintaller';
$lang['installer_click_upgrade'] = 'Cliquez pour mettre � jour %1$s de %2$s';
$lang['installer_click_install'] = 'Cliquez pour installer';
$lang['installer_overwrite'] = '�crasement de l\'ancienne version';
$lang['installer_replace_files'] = 'Vous avez �cras� la version actuelle du greffon avec une version plus ancienne.<br />Mettez � jour les fichiers avec la version la plus r�cente.<br /><br />Ou cliquer pour purger le greffon';

$lang['installer_error'] = 'Erreurs relatives au programme d\'installation';
$lang['installer_invalid_type'] = 'Type d\'installation invalide';
$lang['installer_no_success_sql'] = 'Les requ�tes n\'ont pas �t� ajout�es avec succ�s au programme d\'installation';
$lang['installer_no_class'] = 'Le fichier contenant les d�finitions du programme d\'installation pour [%1$s] ne contient pas de classes d\'installation correctes';
$lang['installer_no_installdef'] = 'inc/install.def.php pour [%1$s] n\'est pas trouvable';

$lang['installer_no_empty'] = 'Installation impossible avec un nom de greffon vide';
$lang['installer_fetch_failed'] = '�chec de r�cup�ration des donn�es du greffon [%1$s]';
$lang['installer_addon_exist'] = '%1$s contient d�j� %2$s. Vous pouvez revenir en arr�re et d\'abord supprimer ce greffon, ou le mettre � jour, ou installer ce greffon sous un nom diff�rent.';
$lang['installer_no_upgrade'] = '[%1$s] ne contient pas de donn�es � mettre � jour';
$lang['installer_not_upgradable'] = '[%1$s] ne peut pas mettre � jour [%2$s] car son nom [%3$s] n\'est pas dans la liste des greffons pouvant �tre mis � jour.';
$lang['installer_no_uninstall'] = '[%1$s] ne contient pas de greffon pouvant �tre d�sinstall�.';
$lang['installer_not_uninstallable'] = '[%1$s] contient le greffon [%2$s] qui doit �tre supprim� avec ce programme de d�sinstallation de greffon.';

// After Install guide
$lang['install'] = 'Installation';
$lang['setup_guide'] = 'Guide de post-installation';
$lang['skip_setup'] = 'Skip Setup';
$lang['default_data'] = 'Donn�es par d�faut';
$lang['default_data_help'] = 'Indiquez ici votre guilde autoris� par d�faut.<br />Une guilde par d�faut est n�cessaire pour que plusieurs greffons fonctionnent correctement.<br />Vous pouvez ajouter plusieurs guildes autoris�s dans RosterCP-&gt;R�gles de mise � jour.<br /><br />Si cette installation de Roster n\'est pas li�e � une guilde :<br />indiquez Guildless-F comme nom de guilde en rempla�ant F par l\'initiale de votre faction (A-Alliance ou H-Horde), <br />indiquez votre royaume et r�gion par d�faut.<br />Indiquez les r�gles de mise � jour dans RosterCP-&gt;R�gles de mise � jour';
$lang['guide_complete'] = 'Le processus de post-installation est complet.';
$lang['guide_next'] = 'Remember To';
$lang['guide_next_text'] = '<ul><li><a href="%1$s" target="_blank">Install Roster AddOns</a></li><li><a href="%2$s" target="_blank">Set Upload Rules</a></li><li><a href="%3$s" target="_blank">Update Data from the Armory</a></li></ul>';
$lang['guide_already_complete'] = 'Le processus de post-installation a d�j� �t� effectu�.<br />Vous ne pouvez pas l\'�xecuter une nouvelle fois.';

// Armory Data
$lang['adata_update_talents'] = 'Talents';
$lang['adata_update_class'] = 'Class %1$s updated';
$lang['adata_update_row'] = '%1$s rows added to database.';

// Password Stuff
$lang['username'] = 'Username';
$lang['password'] = 'Mot de passe';
$lang['remember_me'] = 'Remember me';
$lang['pass'] = 'Pass';
$lang['changeadminpass'] = 'Changer le mot de passe administrateur';
$lang['changeofficerpass'] = 'Changer le mot de passe de mise � jour';
$lang['changeguildpass'] = 'Changer le mot de passe de guilde';
$lang['old_pass'] = 'Ancien mot de passe';
$lang['new_pass'] = 'Nouveau mot de passe';
$lang['new_pass_confirm'] = 'Confirmation du nouveau mot de passe';
$lang['pass_old_error'] = 'Mot de passe erron�. Merci de fournir le bon mot de passe d\'origine.';
$lang['pass_submit_error'] = 'Erreur d\'envoi. L\'ancien, le nouveau et la confirmation du nouveau mot de passe doivent �tre fournis.';
$lang['pass_mismatch'] = 'Erreur de mot de passe de confirmation. Merci de saisir le m�me mot de passe dans les champs nouveau mot de passe et confirmation du nouveau mot de passe';
$lang['pass_blank'] = 'Pas de mot de passe vide. Merci de saisir un mot de passe dans les deux champs. Les mots de passe vides ne sont pas autoris�s';
$lang['pass_isold'] = 'Le mot de passe n\'a pas �t� modifi�. Le nouveau mot de passe et l\'ancien sont exactement les m�mes.';
$lang['pass_changed'] = '&quot;%1$s&quot; le mot de passe a �t� modifi�. Votre nouveau mot de passe est [ %2$s ].<br /> Ne l\'oubliez pas, il n\'est pas stock� de fa�on lisible.';
$lang['auth_req'] = 'Autorisation requise';

// Upload Rules
$lang['enforce_rules'] = 'Enforce Upload Rules';
$lang['enforce_rules_never'] = 'Never';
$lang['enforce_rules_all'] = 'All LUA Updates';
$lang['enforce_rules_cp'] = 'CP Updates Only';
$lang['enforce_rules_gp'] = 'Guild Updates Only';
$lang['upload_rules_error'] = 'Vous ne pouvez pas laisser un des champs vide quand vous ajoutez une r�gle.';
$lang['upload_rules_help'] = 'Les r�gles sont s�par�es en deux blocs.<ul><li>Pour chaque guilde/personnage envoy�, le premier bloc est pris en compte en premier.<br />Si le couple nom@serveur correspond � l\'une des r�gles de rejet, celui-ci sera rejet�.</li><li>Ensuite le second bloc est v�rifi�.<br />Si le couple nom@serveur correspond � l\'une des r�gles d\'acceptation, celui-ci sera accept�.</li><li>Si aucune r�gle n\'est v�rifi�e, celui-ci est alors rejet�.</li></ul>You can use % for a wildcard.<br /><br />Remember to set a default guild here as well.';

// Data Manager
$lang['clean'] = 'Clean up entries based on upload rules';
$lang['clean_help'] = 'This will run an update and enforce the rules as set by the \'Enforce Upload Rules\' setting';
$lang['select_guild'] = 'S�lectionner une guilde';
$lang['delete_checked'] = 'Supprim� les valid�s';
$lang['delete_guild'] = 'Supprimer la guilde';
$lang['delete_guild_confirm'] = 'Ceci supprimera enti�rement la guilde et tous ses membres seront sp�cifier sans guilde.\\n�tes-vous s�r de vouloir continuer ?\\n\\nNOTE : il est impossible de revenir en arri�re !';

// Config Reset
$lang['config_is_reset'] = 'La configuration a �t� remise � z�ro. Merci de ne pas oublier de tout re-configurer avant de renvoyer vos donn�es.';
$lang['config_reset_confirm'] = 'Cette action est irr�versible. �tes-vous s�r de vouloir continuer ?';
$lang['config_reset_help'] = 'Ceci va compl�tement remettre � z�ro la configuration du roster.<br />
Toutes les donn�es relatives � la configuration du roster vont �tre d�truites et les valeurs par d�faut vont �tre remises.<br />
Les donn�es relative aux guildes, aux personnages, � la configuration des greffons, aux greffons, aux boutons des menus, et aux r�gles de mise � jour seront conserv�es.<br />
Les mots de passe de guilde, d\'officiers et d\'administrateur seront aussi conserv�s.<br />
<br />
Afin de continuer, saisissez votre mot de passe administrateur et cliquez sur \'Valider\'.';

/******************************
 * Roster Admin Strings
 ******************************/

$lang['pagebar_function'] = 'Fonctions';
$lang['pagebar_rosterconf'] = 'Configuration principale';
$lang['pagebar_uploadrules'] = 'R�gles de mise � jour';
$lang['pagebar_dataman'] = 'Gestion des donn�es';
$lang['pagebar_userman'] = 'Users';
$lang['pagebar_armory_data'] = 'Armory Data';
$lang['pagebar_changepass'] = 'Changer le mot de passe';
$lang['pagebar_addoninst'] = 'Gestion des greffons';
$lang['pagebar_plugin'] = 'Plugin Management';
$lang['pagebar_update'] = 'Mise � jour';
$lang['pagebar_rosterdiag'] = 'Diagnostic';
$lang['pagebar_menuconf'] = 'Configuration des menus';
$lang['pagebar_configreset'] = 'Remise � z�ro de la configuration';
$lang['pagebar_usergroups'] = 'Groups';
$lang['pagebar_addonconf'] = 'Greffons';
$lang['pagebar_api_data'] = 'Api Usage';
$lang['roster_config_menu'] = 'Menu de configuration';
$lang['menu_config_help'] = 'Add Menu Button Help';
$lang['menu_config_help_text'] = 'Use this to add a new menu button. Adding a new menu button here will add it to the current section.<ul><li>Title - The name of the new button.</li><li>URL - The button\'s link. This can be a WoWRoster path or a full URL (add http:// in the link)</li><li>Icon - The button\'s image. This must be an image from the Interface Image Pack without the path or extension (ex. inv_misc_gear_01)</ul>';

$lang['permissions'] = 'Permissions';
// Submit/Reset confirm questions
$lang['config_submit_button'] = 'Sauvegarder les modifications';
$lang['config_reset_button'] = 'Remise � z�ro du formulaire';
$lang['confirm_config_submit'] = 'Ceci va sauver vos modifications dans la base de donn�es. �tes-vous s�r ?';
$lang['confirm_config_reset'] = 'Ceci va remettre le formulaire dans l\'�tat o� il �tait avant vos modifications. �tes-vous s�r ?';

// All strings here
// Each variable must be the same name as the config variable name
// Example:
//   Assign description text and tooltip for $roster->config['sqldebug']
//   $lang['admin']['sqldebug'] = "Desc|Tooltip";

// Each string is separated by a pipe ( | )
// The first part is the short description, the next part is the tooltip
// Use <br /> to make new lines!
// Example:
//   "Controls Flux-Capacitor|Turning this on may cause serious temporal distortions<br />Use with care"


// Main Menu words
$lang['admin']['main_conf'] = 'Fondamentaux|Param�tres principaux du roster.<br />Ceci comprend l\'adresse du roster, l\'emplacement des images de l\'interface et d\'autres param�tres fondamentaux';
$lang['admin']['defaults_conf'] = 'Divers|D�finissez divers options du roster';
$lang['admin']['index_conf'] = 'Accueil|Options pour ce qu\'affiche la page d\'accueil';
$lang['admin']['menu_conf'] = 'Menu|Contr�lez ce qu\'affiche le menu principal du roster';
$lang['admin']['display_conf'] = 'Affichage|Diff�rents param�tres de configuration: css, javascript, motd, etc...';
$lang['admin']['realmstatus_conf'] = '�tats des royaumes|Param�tres pour l\'�tat des royaumes';
$lang['admin']['data_links'] = 'Liens annexes|Liens externes';
$lang['admin']['update_access'] = 'Accr�ditations|Sp�cifiez les niveau d\'acc�s aux diff�rents composants du panneau de contr�le du roster';

$lang['admin']['documentation'] = 'Documentation|Documentation de WoWRoster via wiki de WoWRoster.net';

// main_conf
$lang['admin']['roster_dbver'] = 'Version de la base de donn�es Roster|La version de la base de donn�es';
$lang['admin']['version'] = 'Version du Roster|Version actuelle du Roster';
$lang['admin']['debug_mode'] = 'Mode debug|off - aucun message d\'erreur ou de debug<br />on - message d\'erreur et de debug simples<br />�tendu - mode debug complet et backtrace dans les messages d\'erreurs';
$lang['admin']['sql_window'] = 'Fen�tre SQL|off - pas de fen�tre des requ�tes<br />on - fen�tre des requ�tes en pied de page<br />�tendu - inclure DESCRIBE statements';
$lang['admin']['minCPver'] = 'Version minimum de CP|Version minimale de WoWRoster-Profiler autoris�e';
$lang['admin']['minGPver'] = 'Version minimum de GP|Version minimale de WoWRoster-GuildProfiler autoris�e';
$lang['admin']['locale'] = "Langue principale|Langue principale utilis�e par sur le roster";
$lang['admin']['default_page'] = 'Page d\'accueil|Page � afficher si aucune n\'est sp�cifi�e dans l\'adresse';
$lang['admin']['external_auth'] = 'Authentification|Ici vous pouvez choisir le fichier que Roster utilisera pour l\'authentification.<br />&quot;Roster&quot; est la valeur par d�faut, syst�me d\'authentification int�gr�.';
$lang['admin']['website_address'] = "Adresse du site Web|Utilis� pour le lien sur le logo et le lien sur le menu principal<br />Certains addon pour le roster peuvent �galement l'utiliser";
$lang['admin']['interface_url'] = "R�pertoire des images de l'interface|R�pertoire o� les images de l'interface sont situ�s<br />La valeur par d�faut est &quot;img/&quot;<br /><br />Vous pouvez utiliser un chemin relatif ou une URL absolue";
$lang['admin']['img_suffix'] = "Extension des images de l'interface|Le type des images de l'interface";
$lang['admin']['alt_img_suffix'] = "Extension alternative des images de l'interface|Le type alternatif d'images pour les images de l'interface";
$lang['admin']['img_url'] = "R�pertoire des images du roster|R�pertoire o� les images du roster sont situ�s<br />La valeur par d�faut est &quot;img/&quot;<br /><br />Vous pouvez utiliser un chemin relatif ou une URL absolue";
$lang['admin']['timezone'] = "Fuseau horaire|Affich� apr�s les dates et heures afin de savoir � quel fuseau horaire l'heure fait r�f�rence";
$lang['admin']['localtimeoffset'] = "D�calage horaire|Le d�calage horaire par rapport � l'heure UTC/GMT<br />Les heures sur le roster seront affich�es avec ce d�calage";
$lang['admin']['use_update_triggers'] = 'D�clenchement de mise � jour de greffon|D�clencher automatiquement la mise � jour de greffon est n�cessaire pour ceux qui ont besoin de fonctionner lors d\'une mise � jour d\'un profil.<br />Quelques greffons ont besoin de ce param�tre activ� pour fonctionner correctement.';
$lang['admin']['check_updates'] = "V�rifier les mises � jour|Permettre au site de v�rifier si une nouvelle version du roster (ou des greffons poss�dant cette fonctionalit�) est disponible et si vous avez la derni�re version d\\'install�e";
$lang['admin']['seo_url'] = "Friendly URLs|Enable SEO like URL links in Roster<br /><br />on - /some/page/here/param=value.html<br />off - index.php?p=some-page-here&amp;param=value";
$lang['admin']['local_cache']= "Syst�me de cache de fichiers|Utiliser un syst�me de cache de fichiers sur le serveur pour am�liorer les performances.";
$lang['admin']['use_temp_tables'] = "Utiliser des tables temporaires|D�sactiver ce param�tre si votre h�te ne permet pas de cr�er des tables de base de donn�es temporaires (le privil�ge CREATE TEMPORARY TABLE).<br/>Laisser activ� ce param�tre est recommand� pour les performances.";
$lang['admin']['preprocess_js'] = "Aggregate JavaScript files|Certain JavaScript files will be optimized automatically, which can reduce both the size and number of requests made to your website.<br />Leaving this on is recommended for performance.";
$lang['admin']['preprocess_css'] = "Aggregate and compress CSS files|Certain CSS files will be optimized automatically, which can reduce both the size and number of requests made to your website.<br />Leaving this on is recommended for performance.";
$lang['admin']['enforce_rules'] = "Enforce Upload Rules|This setting will enforce the upload rules on every lua update<ul class='ul-no-m'><li>Never: Never enforce rules</li><li>All LUA Updates: Enforce rules on all lua updates</li><li>CP Updates: Enforce rules on any CP.lua update</li><li>Guild Updates: Enforce rules only on guild updates</li></ul>You can also toggle this setting on the &quot;Upload Rules&quot; page.";

// defaults_conf
$lang['admin']['default_name'] = "Nom du roster|Saisissez un nom qui sera affich� quand vous ne serez pas sur une page de guilde ou de personnage";
$lang['admin']['default_desc'] = "Description|Saisissez une courte description du site qui sera affich�e quand vous ne serez pas sur une page de guilde ou de personnage";
$lang['admin']['alt_type'] = "Identification des rerolls|Textes identifiant les rerolls pour le d�compte dans le menu principal<br /><br /><span class=\"red\">The Memebers List AddOn DOES NOT use this for alt grouping</span>";
$lang['admin']['alt_location'] = "Identification des rerolls (champ)|O� faut-il rechercher l'identification des rerolls<br /><br /><span class=\"red\">The Memebers List AddOn DOES NOT use this for alt grouping</span>";

// display_conf
$lang['admin']['theme'] = "Th�me du roster|S�lectionner l'apparence du roster<br /><span class=\"red\">NOTE :</span> la matrice du roster n'a pas encore �t� compl�tement achev�e<br />et l'utilisation de th�mes autres que celui par d�faut peut donc avoir des cons�quences sur l'affichage de celui-ci.";
$lang['admin']['logo'] = "URL pour le logo de l'ent�te|L'URL compl�te de l'image<br />Ou en laissant \"img/\" devant le nom, cel� cherchera dans le r�pertoire img/ du roster";
$lang['admin']['roster_bg'] = "URL pour l'image de fond|L'URL absolue de l'image pour le fond principal<br />Ou en laissant &quot;img/&quot; devant le nom, cel� cherchera dans le r�pertoire img/ du roster";
$lang['admin']['motd_display_mode'] = "Mode d'affichage du message du jour|Comment le message du jour sera affich�<br /><br />&quot;Text&quot; - Montre le message de du jour en rouge<br />&quot;Image&quot; - Montre le message du jour sous forme d'une image (n�cesite GD!)";
$lang['admin']['header_locale'] = "S�lection de la langue|Contr�le l'affichage de la zone de s�lection de la langue du panneau sup�rieur du menu principal du roster";
$lang['admin']['header_login'] = "Login in header|Control the display of the login box in the header";
$lang['admin']['header_search'] = "Search in header|Control the display of the search box in the header";
$lang['admin']['signaturebackground'] = "Image de fond pour img.php|Support de l'ancien g�n�rateur de signature";
$lang['admin']['processtime'] = "Temps de g�n�ration de la page|Displays render time and query count in the footer<br />&quot;<i>x.xx | xx</i>&quot;";

// data_links
$lang['admin']['profiler'] = "Lien de t�l�chargement du WoWRoster-Profiler|URL de t�l�chargement de WoWRoster-Profiler";
$lang['admin']['uploadapp'] = "Lien de t�l�chargement d'UniUploader|URL de t�l�chargement d'UniUploader";

// realmstatus_conf
$lang['admin']['rs_display'] = "Mode d'affichage|Comment l'�tat du royaume sera affich�<ul class='ul-no-m'><li>off: Do not show realm status</li><li>Text: L'�tat du royaume sera affich� dans une balise DIV avec du texte et des images</li><li>Image: Le statut du royaume sera affich� comme une image (NECESSITE GD !)</li></ul>";
$lang['admin']['rs_timer'] = "Rafra�chissement|Temps que met le roster avant de r�cup�rer � nouveau les donn�es sur l'�tat de royaume";
$lang['admin']['rs_left'] = "Affichage|";
$lang['admin']['rs_middle'] = "Type de royaume|";
$lang['admin']['rs_right'] = "Population du royaume|";
$lang['admin']['rs_font_server'] = "Police du nom|Police de caract�re pour l'affichage du nom du royaume<br />(en mode image uniquement !)";
$lang['admin']['rs_size_server'] = "Taille de police du nom|Taille de la police de caract�re pour l'affichage du nom du royaume<br />(en mode image uniquement !)";
$lang['admin']['rs_color_server'] = "Couleur du nom|Couleur du nom du royaume";
$lang['admin']['rs_color_shadow'] = "Couleur de l'ombre|Couleur pour l'effet d'ombre du texte<br />(en mode image uniquement !)";
$lang['admin']['rs_font_type'] = "Police du type|Police pour le type de royaume<br />(en mode image uniquement !)";
$lang['admin']['rs_size_type'] = "Taille de police|Taille de police pour le type de royaume<br />(en mode image uniquement !)";
$lang['admin']['rs_color_rppvp'] = "Couleur JdR-JCJ|Couleur pour un serveur de type JdR-JCJ";
$lang['admin']['rs_color_pve'] = "Couleur Normal|Couleur pour un serveur de type Normal";
$lang['admin']['rs_color_pvp'] = "Couleur JCJ|Couleur pour un serveur de type JCJ";
$lang['admin']['rs_color_rp'] = "Couleur JdR|Couleur pour un serveur de type JdR";
$lang['admin']['rs_color_unknown'] = "Couleur inconnu|Couleur pour un serveur de type inconnu";
$lang['admin']['rs_font_pop'] = "Police de population|Police de caract�re pour le niveau de peuplement du serveur<br />(en mode image uniquement !)";
$lang['admin']['rs_size_pop'] = "Taille de police|Taille de la police de caract�re pour le niveau de peuplement du serveur<br />(en mode image uniquement !)";
$lang['admin']['rs_color_low'] = "Couleur Faible|Couleur pour un niveau de peuplement faible";
$lang['admin']['rs_color_medium'] = "Couleur Moyen|Couleur pour un niveau de peuplement moyen";
$lang['admin']['rs_color_high'] = "Couleur Haute|Couleur pour un niveau de peuplement �lev�";
$lang['admin']['rs_color_max'] = "Couleur Max|Couleur pour un niveau de peuplement maximum";
$lang['admin']['rs_color_error'] = "Couleur Erreur|Couleur d'un serveur avec une erreur";
$lang['admin']['rs_color_offline'] = "Couleur Hors-ligne|Couleur dans le cas d'un royaume hors-ligne";
$lang['admin']['rs_color_full'] = "Couleur Complet|Couleur pour un serveur complet (EU serveurs seulement)";
$lang['admin']['rs_color_recommended'] = "Couleur Recommand�|Couleur pour un serveur recommand� (EU serveurs seulement)";

// update_access
$lang['admin']['authenticated_user'] = "Acc�s � Update.php|Contr�le l'acc�s � update.php<br /><br />Passer ce param�tre � off d�sactive l'acc�s � TOUT LE MONDE";
$lang['admin']['api_key_private'] = "Blizzard API Private key|This is the Private key given to you by Blizzard<br />This enables WoWRoster to make more then 3000 requests per day to the Armory";
$lang['admin']['api_key_public'] = "Blizzard API Public key|This is the Public key given to you by Blizzard<br />This enables WoWRoster to make more then 3000 requests per day to the Armory";
$lang['admin']['api_url_region'] = "Blizzard API Region|this is the armory region that you are accessing";
$lang['admin']['api_url_locale'] = "Blizzard API Locale|These locales are REGION dependent and will display<br>info in the desired language";
$lang['admin']['update_inst'] = 'Instructions de mise � jour|Controls the display of the Update Instructions on the update page';
$lang['admin']['gp_user_level'] = "Niveau d'acc�s aux donn�es de guilde|Niveau requis pour mettre � jour les donn�es fournies par WoWRoster-GuildProfiler";
$lang['admin']['cp_user_level'] = "Niveau d'acc�s aux donn�es des personnages|Niveau requis pour mettre � jour les donn�es fournies par WoWRoster-Profiler";
$lang['admin']['lua_user_level'] = "Niveau d'acc�s aux donn�es des autres LUA|Niveau requis pour mettre � jour les donn�es fournies par d'autres sources de donn�es (LUA).<br />Ceci est valable pour TOUTES SOURCES AUTRES pouvant �tre envoy�es au roster.";
$lang['admin']['use_api_onupdate'] = "Api on Lua Update|process an api call on each lua char update pulling all api info for the character some addons may use this data";

//session
$lang['admin']['sess_time'] = 'Session Time|Edit the length of time before a session is ended.';
$lang['admin']['save_login'] = 'Save Login|Use a cookie to remember the client login?';
$lang['admin']['acc_session'] = 'Session Config|Configure the settings for accounts sessions.';

// Character Display Settings
$lang['admin']['per_character_display'] = 'Affichage par personnage';

// user admin
$lang['admin']['user_desc'] = 'CP Admin - This option gives the selected user admin access to WoWRoster<br/>Public - The default access given to all users. Allows the user to see any and all public pages in Roster. Removing this option only lets them see the content their other ranks allow<br/>** Other ranks are scaned from the currently selected guilds\' rank names and you can assign user access accordingly to users.';
$lang['admin']['user_groups_desc'] = 'User Groups';

//core permission settings
$lang['admin']['core']				= 'Roster Core';
$lang['admin']['addon']				= 'Addons';
$lang['admin']['addon_access_desc']	= 'Allow access to this addon?';
$lang['admin']['roster_cp']			= 'Roster CP';
$lang['admin']['roster_cp_desc']	= 'Gives access to Roster CP pages';
$lang['admin']['gp_update']			= 'Guild Update';
$lang['admin']['gp_update_desc']	= 'Gives access to update guilds';
$lang['admin']['cp_update']			= 'CP Update';
$lang['admin']['cp_update_desc']	= 'gives access to update characters';
$lang['admin']['lua_update']		= 'Lua Update';
$lang['admin']['lua_update_desc']	= 'this gives access to update with other lua files besids rosterprofiler';

//Overlib for Allow/Disallow rules
$lang['guildname'] = 'Nom de la guilde';
$lang['realmname']  = 'Nom du royaume';
$lang['regionname'] = 'R�gion (i.e. EU)';
$lang['charname'] = 'Nom du personnage';

//register locals
$lang['register'] 	= 'Register';
$lang['menu_register'] 	= 'Register|Register with roster to have access to your guilds pages';
$lang['cname_tt'] 	='Your Username should be your Main charactor in the guild Alts can be added later';
$lang['cname'] 		='Character name';
$lang['cclass_tt'] 	='Your characters class';
$lang['cclass'] 	='Character Class';
$lang['clevel_tt'] 	='Your characters level';
$lang['clevel']		='Character level';
$lang['cgrank_tt'] 	='This is your guild rank in the guild';
$lang['cgrank'] 	='Guild Rank';
$lang['cemail_tt'] 	='Your Email address DO NOT USE your battle.net address';
$lang['cemail'] 	='Email address';

// ucp strings 
$lang['pagebar_user_settings'] = 'Settings';
$lang['pagebar_user_chars'] = 'Char Disp Settings';
$lang['user_profile_edit'] = array(
	'fname'			=> 'First name',
	'lname'			=> 'Last name',
	'age'			=> 'Age',
	'city'			=> 'City',
	'state'			=> 'State',
	'country'		=> 'Country',
	'homepage'		=> 'Homepage',
	'other_guilds'	=> 'Other guilds',
	'why'			=> 'Why you joined',
	'about'			=> 'About you',
	'notes'			=> 'Some notes',
);
$lang['changeyourpass'] = 'Change Your Password';
$lang['roster_ucp'] = 'User Control Panel';
$lang['roster_ucp_ab'] = 'UCP';

$lang['apiitem']['socketbonus']='Socket Bonus: %s';
$lang['apiitem']['reqlevel']='Requires Level %s';
$lang['apiitem']['ilevel']='Item Level %s';
$lang['apiitem']['requires']='Requires %s';
$lang['apiitem']['dpsspeed']= '%1$s Damage	Speed %2$s';
//common wording
$lang['apiitem']['socket']='Socket';

$lang['apiitem']['itemclass'] = array(
	'0' => 'Consumable',
	'1' => 'Container',
	'2' => 'Weapon',
	'3' => 'Gem',
	'4' => 'Armor',
	'5' => 'Reagent',
	'6' => 'Projectile',
	'7' => 'Trade Goods',
	'8' => 'Generic',
	'9' => 'Book',
	'10' => 'Money',
	'11' => 'Quiver',
	'12' => 'Quest',
	'13' => 'Key',
	'14' => 'Permanent',
	'15' => 'Junk',
	'16' => 'Glyph'
);

//itemSubClass
$lang['apiitem']['itemSubClass'] = array(
	'0' => array(
		'0' => 'Consumable',
		'5' => 'Food & Drink',
		'1' => 'Potion',
		'2' => 'Elixir',
		'3' => 'Flask',
		'7' => 'Bandage',
		'6' => 'Item Enhancement',
		'4' => 'Scroll',
		'8' => 'Other'
	),
	'1' => array('0' => 'Bag',
		'1' => 'Soul Bag',
		'2' => 'Herb Bag',
		'3' => 'Enchanting Bag',
		'4' => 'Engineering Bag',
		'5' => 'Gem Bag',
		'6' => 'Mining Bag',
		'7' => 'Leatherworking Bag',
		'8' => 'Inscription Bag',
		'9' => 'Tackle Box'
	),
	'2' => array(
		'0' => 'Axe',
		'1' => 'Axe',
		'2' => 'Bow',
		'3' => 'Gun',
		'4' => 'One-Handed Mace',
		'5' => 'Two-Handed Mace',
		'6' => 'Polearm',
		'7' => 'One-Handed Sword',
		'8' => 'Two-Handed Sword',
		'9' => 'Obsolete',
		'10' => 'Stave',
		'11' => 'One-Handed Exotic',
		'12' => 'Two-Handed Exotic',
		'13' => 'Fist Weapon',
		'14' => 'Miscellaneous',
		'15' => 'Dagger',
		'16' => 'Thrown',
		'17' => 'Spear',
		'18' => 'Crossbow',
		'19' => 'Wand',
		'20' => 'Fishing Pole'
	),
	'3' => array(
		'0' => 'Red',
		'1' => 'Blue',
		'2' => 'Yellow',
		'3' => 'Purple',
		'4' => 'Green',
		'5' => 'Orange',
		'6' => 'Meta',
		'7' => 'Simple',
		'8' => 'Prismatic',
		'9' => 'Hydraulic',
		'10' => 'Cogwheel'
	),
	'4' => array(
		'0' => 'Miscellaneous',
		'1' => 'Cloth',
		'2' => 'Leather',
		'3' => 'Mail',
		'4' => 'Plate',
		'5' => 'Bucklers',
		'6' => 'Shield',
		'7' => 'Libram',
	'8' => 'Idol',
		'9' => 'Totem',
		'10' => 'Sigil',
		'11' => 'Relic'),
	'5' => array(
		'0' => 'Reagent'
	),
	'6' => array(
		'0' => 'Wand(OBSOLETE)',
		'1' => 'Bolt(OBSOLETE)',
		'2' => 'Arrow',
		'3' => 'Bullet',
		'4' => 'Thrown(OBSOLETE)'),
	'7' => array(
		'0' => 'Trade Goods',
		'10' => 'Elemental',
		'15' => 'Weapon Enchantment - Obsolete',
		'5' => 'Cloth',
		'6' => 'Leather',
		'7' => 'Metal & Stone',
		'8' => 'Meat',
		'9' => 'Herb',
		'12' => 'Enchanting',
		'4' => 'Jewelcrafting',
		'1' => 'Parts',
		'3' => 'Devices',
		'2' => 'Explosives',
		'13' => 'Materials',
		'11' => 'Other',
		'14' => 'Item Enchantment'
	),
	'9' => array(
		'0' => 'Book',
		'1' => 'Leatherworking',
		'2' => 'Tailoring',
		'3' => 'Engineering',
		'4' => 'Blacksmithing',
		'5' => 'Cooking',
		'6' => 'Alchemy',
		'7' => 'First Aid',
		'8' => 'Enchanting',
		'9' => 'Fishing',
		'10' => 'Jewelcrafting',
		'11' => 'Inscription'
	),
	'11' => array(
		'0' => 'Quiver(OBSOLETE)',
		'1' => 'Quiver(OBSOLETE)',
		'2' => 'Quiver',
		'3' => 'Ammo Pouch'
	),
	'12' => array(
		'0' => 'Quest'
	),
	'13' => array(
		'0' => 'Key',
		'1' => 'Lockpick'
	),
	'14' => array(
		'0' => 'Permanent'
	),
	'15' => array(
		'0' => 'Junk',
		'1' => 'Reagent',
		'2' => 'Pet',
		'3' => 'Holiday',
		'4' => 'Other',
		'5' => 'Mount'
	),
	'16' => array(
		'1' => 'Warrior',
		'2' => 'Paladin',
		'3' => 'Hunter',
		'4' => 'Rogue',
		'5' => 'Priest',
		'6' => 'Death Knight',
		'7' => 'Shaman',
		'8' => 'Mage',
		'9' => 'Warlock',
		'11' => 'Druid'
	)
);

$lang['apiitem']['slotType'] = array(
	'0' => 'None',
	'1' => 'Head',
	'2' => 'Neck',
	'3' => 'Shoulder',
	'4' => 'Shirt',
	'5' => 'Chest',
	'6' => 'Waist',
	'7' => 'Legs',
	'8' => 'Feet',
	'9' => 'Wrist',
	'10' => 'Hands',
	'11' => 'Finger',
	'12' => 'Trinket',
	'13' => 'One-Hand',
	'14' => 'Shield',
	'15' => 'Ranged',
	'16' => 'Cloak',
	'17' => 'Two-Hand',
	'18' => 'Bag',
	'19' => 'Tabard',
	'20' => 'Robe',
	'21' => 'Main Hand',
	'22' => 'Off Hand',
	'23' => 'Held In Off-hand',
	'24' => 'Ammo',
	'25' => 'Thrown',
	'26' => 'Ranged',
	'28' => 'Relic'
);

/*
stat types
*/
$lang['apiitem']['statlocal'] = array(
	'1' => 'Health',
	'2' => 'Mana',
	'3' => 'Agility',
	'4' => 'Strength',
	'5' => 'Intellect',
	'6' => 'Spirit',
	'7' => 'Stamina',
	'44' => 'Armor Penetration',
	'38' => 'Attack Power',
	'15' => 'Shield Block',
	'48' => 'the block value of your shield by.',
	'19' => 'Melee Critical strike',
	'20' => 'Ranged Critical strike',
	'32' => 'Critical Strike',
	'21' => 'Spell Critical strike',
	'25' => 'Melee Critical avoidance',
	'26' => 'Ranged Critical avoidance',
	'34' => 'Critical Avoidance',
	'27' => 'Spell critical avoidance',
	'12' => 'Defense',
	'13' => 'Dodge',
	'37' => 'Expertise',
	'40' => 'attack power by in Cat, Bear, Dire Bear, and Moonkin forms only.',
	'28' => 'Melee Haste',
	'29' => 'Ranged Haste',
	'36' => 'Haste',
	'30' => 'Spell Haste',
	'16' => 'Melee Hit',
	'17' => 'Ranged Hit',
	'31' => 'Hit',
	'18' => 'Spell Hit',
	'22' => 'Melee Hit Avoidance',
	'23' => 'Ranged Hit Avoidance',
	'33' => 'Hit Avoidance',
	'24' => 'Spell Hit Avoidance',
	'43' => 'Equip: Restores mana per 5 sec.',
	'49' => 'Mastery',
	'14' => 'Parry',
	'39' => 'Ranged Attack Power',
	'35' => 'PvP Resilience',
	'57' => 'PvP Power',
	'41' => 'damage done by magical spells and effects by up to.',
	'42' => 'healing done by magical spells and effects by up to.',
	'47' => 'Spell Penetration',
	'45' => 'Spell Power'
);
$lang['apiitem']['itemstat'] = array(
	'1' => '+%s Health',
	'2' => '+%s Mana',
	'3' => '+%s Agility',
	'4' => '+%s Strength',
	'5' => '+%s Intellect',
	'6' => '+%s Spirit',
	'7' => '+%s Stamina',
	'46' => 'Equip: Restores %s health per 5 sec.',
	'44' => '+%s Armor Penetration',
	'38' => '+%s Attack Power',
	'15' => '+%s Shield Block',
	'48' => 'the block value of your shield by %s.',
	'19' => '+%s Melee Critical strike',
	'20' => '+%s Ranged Critical strike',
	'32' => '+%s Critical Strike',
	'21' => '+%s Spell Critical strike',
	'25' => '+%s Melee Critical avoidance',
	'26' => '+%s Ranged Critical avoidance',
	'34' => '+%s Critical Avoidance',
	'27' => '+%s Spell critical avoidance',
	//ITEM_MOD_DAMAGE_PER_SECOND_SHORT => 'Damage Per Second',
	'12' => '+%s Defense',
	'13' => '+%s Dodge',
	'37' => '+%s Expertise',
	'40' => 'attack power by %s in Cat, Bear, Dire Bear, and Moonkin forms only.',
	'28' => '+%s Melee Haste',
	'29' => '+%s Ranged Haste',
	'36' => '+%s Haste',
	'30' => '+%s Spell Haste',
	'16' => '+%s Melee Hit',
	'17' => '+%s Ranged Hit',
	'31' => '+%s Hit',
	'18' => '+%s Spell Hit',
	'22' => '+%s Melee Hit Avoidance',
	'23' => '+%s Ranged Hit Avoidance',
	'33' => '+%s Hit Avoidance',
	'24' => '+%s Spell Hit Avoidance',
	'43' => 'Equip: Restores %s mana per 5 sec.',
	'49' => '+%s Mastery',
	'14' => '+%s Parry',
	'39' => '+%s Ranged Attack Power',
	'35' => '+%s PvP Resilience',
	'57' => '+%s PvP Power',
	'41' => 'damage done by magical spells and effects by up to %s.',
	'42' => 'healing done by magical spells and effects by up to %s.',
	'47' => '+%s Spell Penetration',
	'45' => '+%s Spell Power'
);

$lang['apiitem']['bind'] = array(
	'0' => '',
	'8' => "Account Bound",
	'2' => "Binds when equipped",
	'1' => "Binds when picked up",
	'3' => "Binds when used",
	'4' => "Quest Item",
	'5' => "Binds to account",
	'6' => "Binds to Battle.net account",
	'7' => "Battle.net Account Bound"
);

$lang['apiitem']['skills'] = array(
	"185" => "Cooking",
	"773" => "Inscription",
	"755" => "Jewelcrafting",
	"393" => "Skinning",
	"333" => "Enchanting",
	"202" => "Engineering",
	"197" => "Tailoring",
	"186" => "Mining",
	"182" => "Herbalism",
	"171" => "Alchemy",
	"165" => "Leatherworking",
	"164" => "Blacksmithing"
);