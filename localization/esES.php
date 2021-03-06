<?php
/**
 * WoWRoster.net WoWRoster
 *
 * esES Locale File
 *
 * esES translation by maqjav, nekromant, BarryZGZ
 *
 * @copyright  2002-2011 WoWRoster.net
 * @license    http://www.gnu.org/licenses/gpl.html   Licensed under the GNU General Public License v3.
 * @version    SVN: $Id: esES.php 2619 2013-02-04 04:30:14Z ulminia@gmail.com $
 * @link       http://www.wowroster.net
 * @since      File available since Release 1.7.3
 * @package    WoWRoster
 * @subpackage Locale
 */

$lang['langname'] = 'Espa�ol';

//Instructions how to upload, as seen on the mainpage
$lang['update_link']='Pulsa aqu� para las instrucciones de actualizaci�n';
$lang['update_instructions']='Instrucciones de Actualizaci�n';

$lang['lualocation']='Pulsa Examinar y selecciona tus ficheros *.lua para el env�o';

$lang['filelocation']='se encuentra en<br /><i>*WOWDIR*</i>\\\\WTF\\\\Account\\\\<i>*NOMBRE_DE_CUENTA*</i>\\\\SavedVariables';

$lang['nodata']='No se pudo encontrar la hermandad: <b>\'%1$s\'</b> del servidor <b>\'%2$s\'</b><br />Necesitas <a href="%3$s">incluir tu hermandad</a> y asegurarte de que has <a href="%4$s">terminado la configuraci�n</a><br /><br /><a href="http://www.wowroster.net/MediaWiki/Roster:Install" target="_blank">Pulsa aqu� para ver las instrucciones de instalaci�n</a>';
$lang['no_char_in_db']='The member <b>\'%1$s\'</b> is not in the database';
$lang['no_default_guild']='Todav�a no se ha seleccionado ninguna hermandad como predeterminada. Por favor, elige una aqu�.';
$lang['not_valid_anchor']='The anchor(a=) parameter does not provide accurate enough data or is badly formatted.';
$lang['nodefguild']='No se ha seleccionado ninguna hermandad como predeterminada. Por favor, asegurate de haber <a href="%1$s">completado la configuraci�n</a><br /><br /><a href="http://www.wowroster.net/MediaWiki/Roster:Install" target="_blank">Haz click aqu� para ver las instrucciones de instalaci�n</a>';
$lang['nodata_title']='No hay informaci�n de la hermandad';

$lang['update_page']='Actualizar Perfil';

$lang['guild_addonNotFound']='No se pudo encontrar la hermandad. �Has instalado correctamente WoWRoster-GuildProfiler?';

$lang['ignored']='Ignorado';
$lang['update_disabled']='Ha sido desactivado el acceso a Update.php';

$lang['nofileUploaded']='UniUploader no ha enviado ning�n archivo, o ha enviado el archivo incorrecto.';
$lang['roster_upd_pwLabel']='Clave de Actualizaci�n';
$lang['roster_upd_pw_help']='Algunos addons requieren de contrase�a para poder subir los datos';


$lang['roster_error'] = 'Roster Error';
$lang['sql_queries'] = 'SQL Entradas';
$lang['invalid_char_module'] = 'Personajes inv�lidos en el m�dulo name';
$lang['module_not_exist'] = 'El m�dulo [%1$s] no existe';

$lang['addon_error'] = 'Addon Error';
$lang['specify_addon'] = '�Debes especificar el nombre del addon!';
$lang['addon_not_exist'] = '<b>�El addon [%1$s] no existe!</b>';
$lang['addon_disabled'] = '<b>El addon [%1$s] ha sido desactivado</b>';
$lang['addon_no_access'] = '<b>No tienes suficientes credenciales para acceder [%1$s]</b>';
$lang['addon_upgrade_notice'] = '<b>El addon [%1$s] se ha desabilitado porque necesita actualizarse</b>';
$lang['addon_not_installed'] = '<b>El addon [%1$s] no ha sido instalado todav�a</b>';
$lang['addon_no_config'] = '<b>El addon [%1$s] no se ha configurado</b>';

$lang['char_error'] = 'Error de personaje';
$lang['specify_char'] = 'No se ha especificado ningun personaje';
$lang['no_char_id'] = 'Lo siento, no hay informaci�n de personaje para member_id [ %1$s ]';
$lang['no_char_name'] = 'Lo siento, no hay informaci�n de personaje para <strong>%1$s</strong> de <strong>%2$s</strong>';

$lang['roster_cp'] = 'Panel de Control Roster';
$lang['roster_cp_ab'] = 'Roster PC';
$lang['roster_cp_not_exist'] = 'La p�gina [%1$s] no existe';
$lang['roster_cp_invalid'] = 'La p�gina especificada es inv�lida o no tienes suficientes permisos para acceder a ella';
$lang['access_level'] = 'Nivel de acceso';

$lang['parsing_files'] = 'Analizando archivos';
$lang['parsed_time'] = 'Analizados %1$s en %2$s segundos';
$lang['error_parsed_time'] = 'Ha ocurrido un error mientras analizaba %1$s despu�s de %2$s segundos';
$lang['upload_not_accept'] = '%1$s no se puede subir';

$lang['processing_files'] = 'Procesando Archivos';
$lang['error_addon'] = 'Ha ocurrido un error en el adddon %1$s en el m�todo %2$s';
$lang['addon_messages'] = 'Mensajes de Addons:';

$lang['not_accepted'] = '%1$s %2$s @ %3$s-%4$s no aceptado. Data does not match upload rules.';

$lang['not_updating'] = 'NO esta actualizando %1$s por [%2$s] - %3$s';
$lang['not_update_guild'] = 'NO esta actualizando la lista de la hermandad por %1$s@%3$s-%2$s';
$lang['not_update_guild_time'] = 'Not updating Guild List for %1$s. Guild data uploaded was scanned on %2$s. Guild data stored was scanned on %3$s';
$lang['not_update_char_time'] = 'Not updating Character %1$s. Profile data uploaded was scanned on %2$s Profile data stored was scanned on %3$s';
$lang['no_members'] = 'Los datos no contienen informaci�n sobre los miembros de la hermandad';
$lang['upload_data'] = 'Actualizando %1$s datos de [%2$s@%4$s-%3$s]';
$lang['realm_ignored'] = 'Reino: %1$s No escaneado';
$lang['guild_realm_ignored'] = 'Hermandad: %1$s @ Reino: %2$s No escaneado';
$lang['update_members'] = 'Actualizando miembros';
$lang['update_errors'] = 'Errores al actualizar';
$lang['update_log'] = 'Registro de actualizaci�n';
$lang['select_files'] = 'Select Files';
$lang['save_error_log'] = 'Registro de errores';
$lang['save_update_log'] = 'Registro de actualizaciones';

$lang['new_version_available'] = 'Existe una nueva versi�n de %1$s disponible v%2$s<br />Actual: %3$s<br />Descargalo <a href="%4$s" target="_blank">AQUI</a>';

$lang['remove_install_files'] = 'Borrar archivos de instalaci�n';
$lang['remove_install_files_text'] = 'Por favor, elimina <span class="redB">install.php</span> de este directorio';

$lang['upgrade_wowroster'] = 'Mejorar WoWRoster';
$lang['upgrade'] = 'Mejorar';
$lang['select_version'] = 'Selecciona versi�n';
$lang['no_upgrade'] = 'Acabas de mejorar tu Roster<br />O tienes una nueva versi�n mas nueva que esta mejora<br /><a class="input" href="%1$s">Back to WoWRoster</a>';
$lang['upgrade_complete'] = 'La instalaci�n de WoWRoster se ha completado satisfactoriamente<br /><a class="input" href="%1$s">Back to WoWRoster</a>';

// Menu buttons
$lang['menu_header_scope_panel'] = 'Panel de %s';

$lang['menu_totals'] = 'Total: %1$s (+%2$s Alts)';
$lang['menu_totals_level'] = ' al menos L%1$s';

// Updating Instructions
$lang['index_text_uniloader'] = "(Puedes descargar este programa desde la web de WoWRoster, busca el instalador de UniUploader para obtener la �ltima versi�n)";

$lang['update_instruct']='
<strong>Actualizadores Autom�ticos Recomendados:</strong>
<ul>
<li>Utiliza <a href="%1$s" target="_blank">UniUploader</a><br />
%2$s</li>
</ul>
<strong>Instrucciones de Actualizaci�n:</strong>
<ol>
<li>Descarga <a href="%3$s" target="_blank">Character Profiler</a></li>
<li>Extrae el zip en su propia carpeta en C:\Archivos de Programa\World of Warcraft\Interface\Addons\</li>
<li>Inicia WoW.</li>
<li>Abre tu ventana de banco, misiones, y profesiones que contengan recetas.</li>
<li>Desconecta/Sal del WoW (Mira m�s arriba si deseas utilizar UniUploader para enviar los datos autom�ticamente.)</li>
<li>Vete a <a href="%4$s">la p�gina de actualizaci�n.</a></li>
<li>%5$s</li>
</ol>';

$lang['update_instructpvp']='
<strong>Estad�sticas Opcionales de JcJ:</strong>
<ol>
<li>Descarga <a href="%1$s" target="_blank">PvPLog</a></li>
<li>Extrae PvPLog en la carpeta de Addons.</li>
<li>Haz duelos o combates JcJ.</li>
<li>Env�a PvPLog.lua</li>
</ol>';

$lang['roster_credits']='P�gina principal de WoWRoster - <a href="http://www.wowroster.net" target="_blank">www.wowroster.net</a>';
$lang['bliz_notice']='World of Warcraft y Blizzard Entertainment son marcas registradas de Blizzard Entertainment, Inc. en los E.U.A. y/u otros pa�ses. El resto de marcas registradas pertenecen a sus respectivos propietarios.';


$lang['timeformat'] = '%a %d %b, %H:%i'; // MySQL Time format      (example - '%a %b %D, %l:%i %p' => 'Mon Jul 23rd, 2:19 PM') - http://dev.mysql.com/doc/refman/4.1/en/date-and-time-functions.html
$lang['phptimeformat'] = 'D d M, H:i';    // PHP date() Time format (example - 'D M jS, g:ia' => 'Mon Jul 23rd, 2:19pm') - http://www.php.net/manual/en/function.date.php


/**
 * Realmstatus Localizations
 */
$lang['rs'] = array(
	'ERROR' => 'Error',
	'NOSTATUS' => 'Sin Estado',
	'UNKNOWN' => 'Desconocido',
	'RPPVP' => 'JdR JcJ',
	'PVE' => 'Normal',
	'PVP' => 'JcJ',
	'RP' => 'JdR',
	'OFFLINE' => 'Caido',
	'LOW' => 'Bajo',
	'MEDIUM' => 'Medio',
	'HIGH' => 'Alto',
	'MAX' => 'Lleno',
	'RECOMMENDED' => 'Recomendado',
	'FULL' => 'Lleno'
);


//single words used in menu and/or some of the functions, so if theres a wow eqivalent be correct
$lang['guildless']='Guildless'; //Need to translate
$lang['util']='Utilidades';
$lang['char']='Personaje';
$lang['equipment']='Equipment';
$lang['upload']='Enviar';
$lang['required']='Requerido';
$lang['optional']='Opcional';
$lang['attack']='Ataque';
$lang['defense']='Defensa';
$lang['class']='Clase';
$lang['race']='Raza';
$lang['level']='Nivel';
$lang['lastzone']='�ltima Zona';
$lang['note']='Nota';
$lang['officer_note']='Nota de oficial';
$lang['title']='T�tulo';
$lang['name']='Nombre';
$lang['health']='Salud';
$lang['mana']='Man�';
$lang['gold']='Oro';
$lang['armor']='Armadura';
$lang['lastonline']='�ltima Conexi�n';
$lang['online']='Conexi�n';
$lang['lastupdate']='�ltima Actualizaci�n';
$lang['currenthonor']='Rango de Honor Actual';
$lang['rank']='Rango';
$lang['sortby']='Ordenar por %';
$lang['total']='Total';
$lang['hearthed']='Posada';
$lang['recipes']='Recetas';
$lang['bags']='Bolsas';
$lang['character']='Personaje';
$lang['money']='Dinero';
$lang['bank']='Banco';
$lang['raid']='CT_Raid';
$lang['quests']='Misiones';
$lang['roster']='Roster';
$lang['alternate']='Suplente';
$lang['byclass']='Por Clase';
$lang['menustats']='Estad�sticas';
$lang['menuhonor']='Honor';
$lang['basename']='Nombre base';
$lang['scope']='Alcance';
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
$lang['search']='B�squeda';
$lang['search_roster']='Buscar en Roster';
$lang['search_onlyin']='Buscar solo en estos addons';
$lang['search_advancedoptionsfor']='Opciones avanzadas para';
$lang['search_results']='B�squeda de resultados para';
$lang['search_results_from']='Aqu� est�n los resultados de tu b�squeda';
$lang['search_nomatches']='Lo siento, no se encuentran coincidencias';
$lang['search_didnotfind']='�No has encontrado lo que estabas buscando? �Int�ntalo aqu�!';
$lang['search_for']='Buscar en Roster';
$lang['search_next_matches'] = 'Mas coincidencias de';
$lang['search_previous_matches'] = 'Coincidencias anteriores de';
$lang['search_results_count'] = 'Resultados';
$lang['submited_author'] = 'Publicado por';
$lang['submited_date'] = 'Fecha de publicaci�n';
//end search engine
$lang['update']='Actualizar';
$lang['credit']='Cr�ditos';
$lang['who_made']='Creadores de WoWRoster';
$lang['members']='Miembros';
$lang['member_profiles']='Member Profiles';
$lang['items']='Objetos';
$lang['find']='Encontrar objeto que contenga';
$lang['upprofile']='Env�o Datos';
$lang['backlink']='Volver al Inicio';
$lang['gender']='G�nero';
$lang['unusedtrainingpoints']='Puntos de entrenamiento sin usar';
$lang['unusedtalentpoints']='Puntos de talento sin usar';
$lang['talentexport']='Exporta tus talentos';
$lang['questlog']='Registro de misiones';
$lang['recipelist']='Lista de recetas';
$lang['reagents']='Ingredientes';
$lang['item']='Objeto';
$lang['type']='Tipo';
$lang['date']='Fecha';
$lang['complete'] = 'Completo';
$lang['failed'] = 'Fallado';
$lang['completedsteps'] = 'Partes completas';
$lang['currentstep'] = 'Parte actual';
$lang['uncompletedsteps'] = 'Partes incompletas';
$lang['key'] = 'Llave';
$lang['keyring'] = 'Keyring';
$lang['timeplayed'] = 'Tiempo jugado';
$lang['timelevelplayed'] = 'T. jugado este nivel';
$lang['Addon'] = 'Addons';
$lang['advancedstats'] = 'Estad�sticas avanzadas';
$lang['crit'] = 'Crit';
$lang['dodge'] = 'Esquivar';
$lang['parry'] = 'Parar';
$lang['block'] = 'Bloquear';
$lang['realm'] = 'Reino';
$lang['region'] = 'Regi�n';
$lang['server'] = 'Servidor';
$lang['faction'] = 'Facci�n';
$lang['page'] = 'P�gina';
$lang['general'] = 'General';
$lang['prev'] = 'Anterior';
$lang['next'] = 'Siguiente';
$lang['memberlog'] = 'Registro';
$lang['removed'] = 'Borrado';
$lang['added'] = 'A�adido';
$lang['add'] = 'A�adir';
$lang['delete'] = 'Borrar';
$lang['updated'] = 'Actualizado';
$lang['no_info'] = 'Sin informaci�n';
$lang['info'] = 'Info';
$lang['url'] = 'URL';
$lang['none']='Ninguno';
$lang['kills']='Asesinatos';
$lang['allow'] = 'Permitir';
$lang['disallow'] = 'No permitir';
$lang['locale'] = 'Local';
$lang['language'] = 'Lenguaje';
$lang['default'] = 'Predefinido';
$lang['proceed'] = 'Proceder';
$lang['submit'] = 'P�blicar';
$lang['strength']='Fortaleza';
$lang['agility']='Agilidad';
$lang['stamina']='Aguante';
$lang['intellect']='Inteligencia';
$lang['spirit']='Esp�ritu';

$lang['rosterdiag'] = 'RosterDiag';
$lang['updates_available'] = 'Updates Available!';
$lang['updates_available_message'] = 'Log in as Admin to download update files';
$lang['download_update_pkg'] = 'Download Update Package';
$lang['download_update'] = 'Download Update';
$lang['zip_archive'] = '.zip Archive';
$lang['targz_archive'] = '.tar.gz Archive';

$lang['difficulty'] = 'Dificultad';
$lang['recipe_4'] = '�ptima';
$lang['recipe_3'] = 'Media';
$lang['recipe_2'] = 'F�cil';
$lang['recipe_1'] = 'Trivial';
$lang['roster_config'] = 'Config. Roster';

$lang['search_names'] = 'Buscar nombres';
$lang['search_items'] = 'Buscar objetos';
$lang['search_tooltips'] = 'Buscar notas';

// Talent Builds
$lang['talent_build_0'] = 'Active';
$lang['talent_build_1'] = 'Inactivo';

// Char Scope
$lang['char_level_race_class'] = 'Nivel %1$s %2$s %3$s';
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
$lang['inactive'] = 'Inactivo';

//this needs to be exact as it is the wording in the db
$lang['professions']='Profesiones';
$lang['secondary']='Habilidades secundarias';
$lang['Blacksmithing']='Herrer�a';
$lang['Mining']='Miner�a';
$lang['Herbalism']='Bot�nica';
$lang['Alchemy']='Alquimia';
$lang['Archaeology']='Arqueolog�a';
$lang['Leatherworking']='Peleter�a';
$lang['Jewelcrafting']='Joyer�a';
$lang['Skinning']='Desollar';
$lang['Tailoring']='Sastrer�a';
$lang['Enchanting']='Encantamiento';
$lang['Engineering']='Ingenier�a';
$lang['Inscription']='Inscripci�n';
$lang['Runeforging']='Forja de runas';
$lang['Cooking']='Cocina';
$lang['Fishing']='Pesca';
$lang['First Aid']='Primeros auxilios';
$lang['Poisons']='Venenos';
$lang['backpack']='Mochila';
$lang['PvPRankNone']='Ninguno';

// Uses preg_match() to find required level in recipe tooltip
$lang['requires_level'] = '/Necesitas ser de nivel ([\d]+)/';

// Skills to EN id array
$lang['skill_to_id'] = array(
	'Class Skills' => 'classskills',
	'Professions' => 'professions',
	'Secondary Skills' => 'secondaryskills',
	'Weapon Skills' => 'weaponskills',
	'Armor Proficiencies' => 'armorproficiencies',
	'Languages' => 'languages',
);

// Tradeskill-Array
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

// Tradeskill Icons-Array
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
$lang['riding'] = 'Equitaci�n';
$lang['ts_ridingIcon'] = array(
	'Elfo de la noche'=>'ability_mount_whitetiger',
	'Humano'=>'ability_mount_ridinghorse',
	'Enano'=>'ability_mount_mountainram',
	'Gnomo'=>'ability_mount_mechastrider',
	'No-muerto'=>'ability_mount_undeadhorse',
	'Trol'=>'ability_mount_raptor',
	'Tauren'=>'ability_mount_kodo_03',
	'Orco'=>'ability_mount_blackdirewolf',
	'Elfo de sangre' => 'ability_mount_cockatricemount',
	'Draenei' => 'ability_mount_ridingelekk',
	'Palad�n'=>'ability_mount_dreadsteed',
	'Brujo'=>'ability_mount_nightmarehorse',
	'Caballero de la muerte'=>'spell_deathknight_summondeathcharger',
	'Pandaren'=>'ability_mount_ridinghorse',
// Female variation
	'Elfa de la noche'=>'ability_mount_whitetiger',
	'Humana'=>'ability_mount_ridinghorse',
	'Enana'=>'ability_mount_mountainram',
	// 'Gnomo'=>'ability_mount_mechastrider',
	'No-muerta'=>'ability_mount_undeadhorse',
	// 'Trol'=>'ability_mount_raptor',
	// 'Tauren'=>'ability_mount_kodo_03',
	'Orca'=>'ability_mount_blackdirewolf',
	'Elfa de sangre' => 'ability_mount_cockatricemount',
	// 'Draenei' => 'ability_mount_ridingelekk',
	// 'Palad�n'=>'ability_mount_dreadsteed',
	'Bruja'=>'ability_mount_nightmarehorse',
	// 'Caballero de la muerte'=>'spell_deathknight_summondeathcharger'
	// 'Pandaren'=>'ability_mount_ridinghorse',
);

$lang['ts_flyingIcon'] = array(
	'Horde'=>'ability_mount_wyvern_01',
	'Alliance'=>'ability_mount_gryphon_01',
	'Druida'=>'ability_druid_flightform',
	'Caballero de la muerte'=>'ability_mount_dreadsteed'
// Female variation
	// 'Druida'=>'ability_druid_flightform',
	// 'Caballero de la muerte'=>'ability_mount_dreadsteed'
);

// Class Icons-Array
$lang['class_iconArray'] = array (
	'Caballero de la muerte'=>'deathknight_icon',
	'Druida'=>'druid_icon',
	'Cazador'=>'hunter_icon',
	'Mago'=>'mage_icon',
	'Palad�n'=>'paladin_icon',
	'Sacerdote'=>'priest_icon',
	'P�caro'=>'rogue_icon',
	'Cham�n'=>'shaman_icon',
	'Brujo'=>'warlock_icon',
	'Guerrero'=>'warrior_icon',
	'Monk'=>'monk_icon',
// Female variation
	// 'Caballero de la muerte'=>'deathknight_icon',
	// 'Druida'=>'druid_icon',
	'Cazadora'=>'hunter_icon',
	'Maga'=>'mage_icon',
	// 'Palad�n'=>'paladin_icon',
	'Sacerdotisa'=>'priest_icon',
	'P�cara'=>'rogue_icon',
	// 'Cham�n'=>'shaman_icon',
	'Bruja'=>'warlock_icon',
	'Guerrera'=>'warrior_icon',
	// 'Monk'=>'monk_icon'
);

// Class Color-Array
$lang['class_colorArray'] = array(
	'Caballero de la muerte'=>'C41F3B',
	'Druida' => 'FF7D0A',
	'Cazador' => 'ABD473',
	'Mago' => '69CCF0',
	'Palad�n' => 'F58CBA',
	'Sacerdote' => 'FFFFFF',
	'P�caro' => 'FFF569',
	'Cham�n' => '2459FF',
	'Brujo' => '9482C9',
	'Guerrero' => 'C79C6E',
	'Monk' => '00C77b',
// Female variation
	// 'Caballero de la muerte'=>'C41F3B',
	// 'Druida' => 'FF7D0A',
	'Cazadora' => 'ABD473',
	'Maga' => '69CCF0',
	// 'Palad�n' => 'F58CBA',
	'Sacerdotisa' => 'FFFFFF',
	'P�cara' => 'FFF569',
	// 'Cham�n' => '2459FF',
	'Bruja' => '9482C9',
	'Guerrera' => 'C79C6E',
	// 'Monk' => '00C77b'
);

// Class To English Translation
$lang['class_to_en'] = array(
	'Caballero de la muerte'=>'Death Knight',
	'Druida' => 'Druid',
	'Cazador' => 'Hunter',
	'Mago' => 'Mage',
	'Palad�n' => 'Paladin',
	'Sacerdote' => 'Priest',
	'P�caro' => 'Rogue',
	'Cham�n' => 'Shaman',
	'Brujo' => 'Warlock',
	'Guerrero' => 'Warrior',
	'Monk' => 'Monk',
// Female variation
	// 'Caballero de la muerte'=>'Death Knight',
	// 'Druida' => 'Druid',
	'Cazadora' => 'Hunter',
	'Maga' => 'Mage',
	// 'Palad�n' => 'Paladin',
	'Sacerdotisa' => 'Priest',
	'P�cara' => 'Rogue',
	// 'Cham�n' => 'Shaman',
	'Bruja' => 'Warlock',
	'Guerrera' => 'Warrior',
	'Monk' => 'Monk'
);

// Class to game-internal ID
$lang['class_to_id'] = array(
	'Guerrero' => 1,
	'Palad�n' => 2,
	'Cazador' => 3,
	'P�caro' => 4,
	'Sacerdote' => 5,
	'Caballero de la muerte'=>6,
	'Cham�n' => 7,
	'Mago' => 8,
	'Brujo' => 9,
	'Monk' => 10,
	'Druida' => 11,
// Female variation
	'Guerrera' => 1,
	// 'Palad�n' => 2,
	'Cazadora' => 3,
	'P�cara' => 4,
	'Sacerdotisa' => 5,
	// 'Caballero de la muerte'=>6,
	// 'Cham�n' => 7,
	'Maga' => 8,
	'Bruja' => 9,
	// 'Monk' => 10,
	// 'Druida' => 11,
);

// Game-internal ID to class
$lang['id_to_class'] = array(
	1 => 'Guerrero',
	2 => 'Palad�n',
	3 => 'Cazador',
	4 => 'P�caro',
	5 => 'Sacerdote',
	6 => 'Caballero de la muerte',
	7 => 'Cham�n',
	8 => 'Mago',
	9 => 'Brujo',
	10 => 'Monk',
	11 => 'Druida',
	25 => 'Pandaren',
	26 => 'Pandaren',
);

// Race to English Translation
$lang['race_to_en'] = array(
	'Elfo de sangre' => 'Blood Elf',
	'Draenei'   => 'Draenei',
	'Elfo de la noche' => 'Night Elf',
	'Enano'     => 'Dwarf',
	'Gnomo'     => 'Gnome',
	'Humano'    => 'Human',
	'Orco'      => 'Orc',
	'No-muerto' => 'Undead',
	'Trol'      => 'Troll',
	'Tauren'    => 'Tauren',
	'Huargen'   => 'Worgen',
	'Goblin'    => 'Goblin',
// Female variation
	'Elfa de sangre' => 'Blood Elf',
	// 'Draenei'   => 'Draenei',
	'Elfa de la noche' => 'Night Elf',
	'Enana'     => 'Dwarf',
	// 'Gnomo'     => 'Gnome',
	'Humana'    => 'Human',
	'Orca'      => 'Orc',
	'No-muerta' => 'Undead',
	// 'Trol'      => 'Troll',
	// 'Tauren'    => 'Tauren',
	// 'Huargen'   => 'Worgen',
	// 'Goblin'    => 'Goblin',
	'Pandaren'	=> 'Pandaren',
);

$lang['race_to_id'] = array(
	'Humano'    => 1,
	'Orco'      => 2,
	'Enano'     => 3,
	'Elfo de la noche' => 4,
	'No-muerto' => 5,
	'Tauren'    => 6,
	'Gnomo'     => 7,
	'Trol'      => 8,
	'Elfo de sangre' => 10,
	'Draenei'   => 11,
	'Huargen'   => 22,
	'Goblin'    => 9,
	'Pandaren'	=> 25,
	'Pandaren'	=> 26,
// Female variation
	'Humana'    => 1,
	'Orca'      => 2,
	'Enana'     => 3,
	'Elfa de la noche' => 4,
	'No-muerta' => 5,
	// 'Tauren'    => 6,
	// 'Gnomo'     => 7,
	// 'Trol'      => 8,
	'Elfa de sangre' => 10,
	// 'Draenei'   => 11,
	// 'Huargen'   => 22,
	// 'Goblin'    => 9,
	// 'Pandaren'	=> 25,
	// 'Pandaren'	=> 26,
);

$lang['id_to_race'] = array(
	1 => 'Humano',
	2 => 'Orco',
	3 => 'Enano',
	4 => 'Elfo de la noche',
	5 => 'No-muerto',
	6 => 'Tauren',
	7 => 'Gnomo',
	8 => 'Trol',
	10 => 'Elfo de sangre',
	11 => 'Draenei',
	22 => 'Huargen',
	9 => 'Goblin',
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

$lang['hslist']=' Estad�sticas de honor';
$lang['hslist1']='Personaje con mayor rango';
$lang['hslist2']='Mayor n�mero de muertes con honor';
$lang['hslist3']='Mayor n�mero de puntos de honor';
$lang['hslist4']='Mayor puntuaci�n de arenas';

$lang['Death Knight']='Caballero de la muerte';
$lang['Druid']='Druida';
$lang['Hunter']='Cazador';
$lang['Mage']='Mago';
$lang['Monk']='Monk';
$lang['Paladin']='Palad�n';
$lang['Priest']='Sacerdote';
$lang['Rogue']='P�caro';
$lang['Shaman']='Cham�n';
$lang['Warlock']='Brujo';
$lang['Warrior']='Guerrero';

$lang['today']='Hoy';
$lang['todayhk']='Hoy MH';
$lang['todaycp']='Hoy MP';
$lang['yesterday']='Ayer';
$lang['yesthk']='Ayer MH';
$lang['yestcp']='Ayer MP';
$lang['thisweek']='Esta semana';
$lang['lastweek']='Semana pasada';
$lang['lifetime']='Vida';
$lang['lifehk']='Semana MH';
$lang['honorkills']='Muertes con honor';
$lang['dishonorkills']='Muertes sin honor';
$lang['honor']='Honor';
$lang['standing']='Prestigio';
$lang['highestrank']='M�ximo rango';
$lang['arena']='Arena';

$lang['when']='Fecha';
$lang['guild']='Hermandad';
$lang['guilds']='Hermandades';
$lang['result']='Resultado';
$lang['zone']='Zona';
$lang['subzone']='Subzona';
$lang['yes']='S�';
$lang['no']='No';
$lang['win']='Gana';
$lang['loss']='Pierde';
$lang['unknown']='Desconocido';

//strings for Rep-tab
$lang['exalted']='Exaltado';
$lang['revered']='Reverenciado';
$lang['honored']='Honorable';
$lang['friendly']='Amistoso';
$lang['neutral']='Neutral';
$lang['unfriendly']='Enemigo';
$lang['hostile']='Hostil';
$lang['hated']='Odiado';
$lang['atwar']='En Guerra';
$lang['notatwar']='En Paz';

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
	'url'=>'http://es.wowhead.com/?quest=%1$s'
);

$lang['questlinks'][] = array(
	'name'=>'Thottbot',
	'url'=>'http://thottbot.com/q%1$s'
);

$lang['questlinks'][] = array(
	'name'=>'WoW-Lista',
	'url'=>'http://www.wow-lista.com/verquest.php?num=%1$s'
);




// Items external link
// Add as manu item links as you need
// Just make sure their names are unique
// uses the 'item_id' for data
$lang['itemlink'] = 'Enlaces de objetos';
$lang['itemlinks']['Thottbot'] = 'http://www.thottbot.com/i';
$lang['itemlinks']['WoW-Lista'] = 'http://www.wow-lista.com/veritem.php?num=';
$lang['itemlinks']['WoWHead'] = 'http://es.wowhead.com/?item=';
$lang['itemlinks']['Allakhazam'] = 'http://wow.allakhazam.com/db/item.html?locale=esES&witem=';

// WoW Data Site Search
// Add as many item links as you need
// Just make sure their names are unique
// use these locales for data searches
$lang['data_search'] = 'Bases de datos de WoW';
$lang['data_links']['Thottbot'] = 'http://www.thottbot.com/index.cgi?s=';
$lang['data_links']['Allakhazam'] = 'http://wow.allakhazam.com/search.html?locale=esES&q=';
$lang['data_links']['WoW-Lista'] = 'http://www.wow-lista.com/buscador.php?abuscar=';
$lang['data_links']['WoWHead'] = 'http://es.wowhead.com/?search=';

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
$lang['tooltip_use']='Uso:';
$lang['tooltip_requires']='Requiere';
$lang['tooltip_reinforced']='Reforzado';
$lang['tooltip_soulbound']='Ligado';
$lang['tooltip_accountbound']='Account Bound';
$lang['tooltip_boe']='Se liga al equiparlo';
$lang['tooltip_equip']='Equipar:';
$lang['tooltip_equip_restores']='Equipar: Restaura';
$lang['tooltip_equip_when']='Equipar: Cuando';
$lang['tooltip_chance']='Probabilidad';
$lang['tooltip_enchant']='Encantar';
$lang['tooltip_random_enchant']='Encantamiento aleatorio';
$lang['tooltip_set']='Conjunto|Bonif.';
$lang['tooltip_rank']='Rango';
$lang['tooltip_next_rank']='Siguiente Rango';
$lang['tooltip_spell_damage']='Da�o por Hechizos';
$lang['tooltip_school_damage']='\\+.*Da�o por Hechizos';
$lang['tooltip_healing_power']='Poder de Curaci�n';
$lang['tooltip_reinforced_armor']='Armadura Reforzada';
$lang['tooltip_damage_reduction']='Reducci�n de da�o';
//--Tooltip Parsing -- Translated by Subxero
$lang['tooltip_durability']='Durabilidad';
$lang['tooltip_unique']='�nico';
$lang['tooltip_speed']='Veloc.';
$lang['tooltip_poisoneffect']='Cada golpe tiene';  // this is found in poison tooltips  I need the common text that decribes the poison.
$lang['tooltip_classes']='Clases:';
$lang['tooltip_races']='Razas:';
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

$lang['tooltip_preg_armor']='/^([0-9, ]+) armadura/';
$lang['tooltip_preg_durability']='/Durabilidad(|:) (\d+) \/ (\d+)/';
$lang['tooltip_preg_madeby']='/\<Hecho por (.+)\>/';  // this is the text that shows who crafted the item.  don't worry about the pattern just post me the text I will make the pattern.
$lang['tooltip_preg_bags']='/de (\d+) casillas/';  // text for bags, ie '16 slot bag'
$lang['tooltip_preg_socketbonus']='/Bonus ranura: (.+)/';
$lang['tooltip_preg_classes']='/^(Clases:) (.+)/'; // text for class restricted items
$lang['tooltip_preg_races']='/^(Razas:) (.+)/'; // test for race restricted items
$lang['tooltip_preg_charges']='/(\d+) cargas/'; // text for items with charges
$lang['tooltip_preg_block']='/([0-9, ]+) (bloqueo)/';  // text for shield blocking values
$lang['tooltip_preg_emptysocket']='/Ranura (roja|amarilla|azul|meta|prismatic|Hydraulic|Sha-Touched)/'; // text shown if the item has empty sockets.
$lang['tooltip_preg_reinforcedarmor']='/(Reforzado\s\(\+\d+\sarmadura\))/i';
$lang['tooltip_preg_tempenchants']='/(.+\s\(\d+\s(min|seg)\))\n/';
$lang['tooltip_preg_meta_requires']='/Requiere.*?gemas/';
$lang['tooltip_preg_meta_requires_min']='/Requiere al menos (\d) gema (\S+)(s)/';
$lang['tooltip_preg_meta_requires_more']='/Requiere mas gemas (\S+) que gemas (\S+)/';
$lang['tooltip_preg_item_level']='/Item Level (\d+)/';
$lang['tooltip_feral_ap']='Increases attack power by';
$lang['tooltip_source']='Fuente';
$lang['tooltip_sha'] = 'Sha-Touched';
$lang['tooltip_boss']='Jefe';
$lang['tooltip_droprate']='Pos\. de aparici';
$lang['tooltip_reforged']='Reforged';
$lang['tooltip_transmogc'] = '/Transmogrified to: (.+)/';
$lang['tooltip_transmogb'] = 'Transmogrified to: ';
$lang['tooltip_transmoga'] = "Transmogrified to:\n";

$lang['tooltip_chance_hit']='Probabilidad al acertar:'; // needs to find 'chance on|to hit:'
$lang['tooltip_reg_requires']='(Requiere|Necesitas)'; //really a preg call but w/o delims etc
$lang['tooltip_reg_onlyworksinside']='Solo funciona dentro';
$lang['tooltip_reg_conjureditems']='Los objetos creados m�gicamente desaparecen';
$lang['tooltip_reg_weaponorbulletdps']='^\(|^A�ade ';

$lang['tooltip_armor_types']='Tela|Cuero|Malla|Placas';  // the types of armor
$lang['tooltip_weapon_types']='Flecha|Hacha|Arco|Bala|Ballesta|Daga|Ca�a de pescar|Arma de pu�o|Arma de fuego|??dolo|Maza|Mano derecha|Mano izquierda|Arma de asta|Bast�n|Espada|Arma arrojadiza|Varita|Sostener con la mano izquierda|Mano principal|Reliquia'; // the types of weapons as shown in the tooltip
$lang['tooltip_bind_types']='Ligado|Se liga al equiparlo|Objeto de misi�n|Se liga al recogerlo|Este objeto inicia una misi�n|Se liga a la cuenta|Account Bound';
$lang['tooltip_misc_types']='Dedo|Cuello|Atr�s|Camisa|Alhaja|Tabardo|Cabeza|Pecho|Espalda|Pies|Abalorio';
$lang['tooltip_garbage']='<May�s clic derecho para insertar>|<Clic derecho para leer>|Duraci�n|<Clic derecho para abrir>';  // these are texts that we really do not need to show in WoWRoster's tooltip so we'll strip them out

//CP v2.1.1+ Gems info
//uses preg_match() to find the type and color of the gem
$lang['gem_preg_singlecolor'] = '/Encaja en una ranura de color (.+)\./i';
$lang['gem_preg_multicolor'] = '/Encaja en una ranura de color (.+) o (.+)\./i';
$lang['gem_preg_meta'] = '/Solo encaja en una ranura de gema meta\./i';
$lang['gem_preg_prismatic'] = '/Encaja en una ranura roja, amarilla o azul\./i';

//Gems color Array
$lang['gem_colors'] = array(
	'red' => 'roja',
	'blue' => 'azul',
	'yellow' => 'amarilla',
	'green' => 'verde',
	'orange' => 'naranja',
	'purple' => 'morada',
	'prismatic' => 'centelleante',
	'hydraulic' => 'Sha-Touched',
	'meta' => 'meta',
	);

$lang['gem_colors_to_en'] = array(
	'roja' => 'red',
	'rojo' => 'red',
	'azul' => 'blue',
	'amarilla' => 'yellow',
	'amarillo' => 'yellow',
	'verde' => 'green',
	'naranja' => 'orange',
	'morada' => 'purple',
	'centelleante' => 'prismatic',
	'hydraulic' => 'Sha-Touched',
	'meta' => 'meta',
	);

$lang['socket_colors_to_en'] = array(
	'roja' => 'red',
	'azul' => 'blue',
	'amarilla' => 'yellow',
	'meta' => 'meta',
	'prismatic' => 'prismatic',
	'hydraulic' => 'hydraulic',
	'sha-touched' => 'hydraulic',
	);
// -- end tooltip parsing

// Warlock pet names for icon displaying
$lang['Imp']='Diablillo';
$lang['Voidwalker']='Abisario';
$lang['Succubus']='S�cubo';
$lang['Felhunter']='Man�fago';
$lang['Infernal']='Inferno';
$lang['Felguard']='Guardia Maldito';

// Max experiance for exp bar on char page
$lang['max_exp']='Max PE';

// Error messages
$lang['CPver_err']='La versi�n de WoWRoster-Profiler utilizada para capturar los datos de este personaje es inferior a la versi�n m�nima admitida para el env�o.<br />Por favor, aseg�rate de que est�s utilizando al menos la versi�n %1$s y has iniciado sesi�n y grabado los datos utilizando la misma.';
$lang['GPver_err']='La versi�n de WoWRoster-GuildProfiler utilizada para capturar los datos de este personaje es inferior a la versi�n m�nima admitida para el env�o.<br />Por favor, aseg�rate de que est�s utilizando al menos la versi�n %1$s';

// Menu titles
$lang['menu_upprofile']='Actualizar Perfil|Aqu� puedes actualizar tu perfil';
$lang['menu_search']='Buscar|Busca objetos y recetas en la base de datos';
$lang['menu_roster_cp']='Panel de control|Abre el panel de configuraci�n de Roster';
$lang['menu_roster_ucp']='UserCP|Roster Configuration Panel';
$lang['menupanel_util']  = 'Utilidades';
$lang['menupanel_realm'] = 'Reino';
$lang['menupanel_guild'] = 'Hermandad';
$lang['menupanel_char']  = 'Personaje';
$lang['menupanel_user'] = 'User CP';

$lang['menuconf_sectionselect']='Selecciona panel';
$lang['menuconf_section']='Section';
$lang['menuconf_changes_saved']='Los cambios a %1$s se han guardado';
$lang['menuconf_no_changes_saved']='No se han guardado los cambios';
$lang['menuconf_add_button']='A�adir bot�n';
$lang['menuconf_drag_delete']='Arrastrar aqu� para borrar';
$lang['menuconf_addon_inactive']='El addon est� inactivo';
$lang['menuconf_unused_buttons']='Botones sin usar';

$lang['default_page_set']='The default page has been set to [%1$s]';

$lang['installer_install_0']='La instalaci�n de %1$s se ha completado satisfactoriamente';
$lang['installer_install_1']='La instalaci�n de %1$s fall�, pero se ha recuperado la versi�n anterior satisfactoriamente';
$lang['installer_install_2']='La instalaci�n de %1$s fall� y no se ha conseguido recuperar la versi�n anterior';
$lang['installer_uninstall_0']='Se ha desinstalado %1$s satisfactoriamente';
$lang['installer_uninstall_1']='Fallo al desinstalar %1$s. Se ha dejado como estaba';
$lang['installer_uninstall_2']='Fallo al desinstalar %1$s. No se ha conseguido dejar como estaba';
$lang['installer_upgrade_0']='Mejora de %1$s completada satisfactoriamente';
$lang['installer_upgrade_1']='Ha fallado la mejora de %1$s. Se ha conseguido dejar la versi�n anterior';
$lang['installer_upgrade_2']='Ha fallado la mejora de %1$s. No se ha conseguido dejar la versi�n anterior';
$lang['installer_purge_0']='Purgue de %1$s se ha completado';

$lang['installer_icon'] = 'Icono';
$lang['installer_addoninfo'] = 'Informaci�n sobre el addon';
$lang['installer_status'] = 'Estado';
$lang['installer_installation'] = 'Instalar';
$lang['installer_author'] = 'Autor';
$lang['installer_log'] = 'Registro del Addon Manager';
$lang['installer_activate_0'] = 'Addon %1$s desactivado';
$lang['installer_activate_1'] = 'Addon %1$s activado';
$lang['installer_deactivated'] = 'Desactivado';
$lang['installer_activated'] = 'Activado';
$lang['installer_installed'] = 'Instalado';
$lang['installer_upgrade_avail'] = 'Mejora disponible';
$lang['installer_not_installed'] = 'No instalado';
$lang['installer_install'] = 'Install';
$lang['installer_uninstall'] = 'Uninstall';
$lang['installer_activate'] = 'Activate';
$lang['installer_deactivate'] = 'Deactivate';
$lang['installer_upgrade'] = 'Upgrade';
$lang['installer_purge'] = 'Purge';

$lang['installer_turn_off'] = 'Haz click para desactivar';
$lang['installer_turn_on'] = 'Haz click para activar';
$lang['installer_click_uninstall'] = 'Haz click para desinstalar';
$lang['installer_click_upgrade'] = 'Haz click para mejorar de %1$s a %2$s';
$lang['installer_click_install'] = 'Haz click para instalar';
$lang['installer_overwrite'] = 'Versi�n anterior sobreescrita';
$lang['installer_replace_files'] = 'Has sobreescribido tu instalaci�n actual del addon con una versi�n anterior<br />Reemplaza los archivos con la �ltima versi�n<br /><br />Or Click to Purge AddOn';

$lang['installer_error'] = 'Errores de instalaci�n';
$lang['installer_invalid_type'] = 'Tipo de instalaci�n invalido';
$lang['installer_no_success_sql'] = 'No se ha podido a�adir algunas entradas al instalador';
$lang['installer_no_class'] = 'El archivo de definici�n para la instalaci�n de %1$s no conten�a informaci�n correcta';
$lang['installer_no_installdef'] = 'inc/install.def.php de %1$s no se ha encontrado';

$lang['installer_no_empty'] = 'No se puede instalar con el nombre del addon en blanco';
$lang['installer_fetch_failed'] = 'Error al traer informaci�n del addon de %1$s';
$lang['installer_addon_exist'] = '%1$s actualmente contiene %2$s. Puedes volver atr�s y desinstalar el addon primero, mejorarlo, o instalar el addon con un nombre diferente';
$lang['installer_no_upgrade'] = '%1$s no contiene informaci�n de mejora';
$lang['installer_not_upgradable'] = '%1$s no se puede mejorar %2$s desde que su nombre base %3$s no esta en la lista de addons mejorables';
$lang['installer_no_uninstall'] = '%1$s no se puede desinstalar';
$lang['installer_not_uninstallable'] = '%1$s contiene un addon %2$s que debe de ser instalado con este desinstalador de addons';

// After Install guide
$lang['install'] = 'Instalar';
$lang['setup_guide'] = 'Gu�a despu�s de instalar';
$lang['skip_setup'] = 'Skip Setup';
$lang['default_data'] = 'Datos predeterminados';
$lang['default_data_help'] = 'Elige tu hermandad permitida predeterminada aqu�<br />Muchos addons requieren de una hermandad predeterminada para funcionar perfectamente<br />Puedes a�adir mas hermandades permitidas en RosterCP-&gt;Normas de subir<br /><br />Si esto es una instalaci�n de una persona que no pertenece a la hermandad:<br />Entre en hermandades-F para ver los nombres de la hermandad<br />Reemplaza F con tu facci�n (A-Alianza, H-Horda)<br />Introduce tu reino y regi�n<br />Elige las normas de subir personajes en RosterCP-&gt;Normas de subir';
$lang['guide_complete'] = 'Se ha terminado la configuraci�n despu�s de instalar';
$lang['guide_next'] = 'Remember To';
$lang['guide_next_text'] = '<ul><li><a href="%1$s" target="_blank">Install Roster AddOns</a></li><li><a href="%2$s" target="_blank">Set Upload Rules</a></li><li><a href="%3$s" target="_blank">Update Data from the Armory</a></li></ul>';
$lang['guide_already_complete'] = 'La gu�a de despu�s de instalar acaba de completarse<br />No podr�s verla de nuevo';

// Armory Data
$lang['adata_update_talents'] = 'Talents';
$lang['adata_update_class'] = 'Class %1$s updated';
$lang['adata_update_row'] = '%1$s rows added to database.';

// Password Stuff
$lang['username'] = 'Username';
$lang['password'] = 'Contrase�a';
$lang['remember_me'] = 'Remember me';
$lang['pass'] = 'Pass';
$lang['changeadminpass'] = 'Cambiar contrase�a de Admin';
$lang['changeofficerpass'] = 'Cambiar contrase�a de Oficial';
$lang['changeguildpass'] = 'Cambiar contrase�a de la Hermandad';
$lang['old_pass'] = 'Contrase�a antigua';
$lang['new_pass'] = 'Contrase�a nueva';
$lang['new_pass_confirm'] = 'Nueva contrase�a [confirmar]';
$lang['pass_old_error'] = 'Contrase�a incorrecta. Por favor, introduce la contrase�a correcta';
$lang['pass_submit_error'] = 'Error de publicaci�n. La contrase�a vieja, la nueva y la confirmada necesitan ser publicadas';
$lang['pass_mismatch'] = 'Las contrase�as no coinciden. Por favor, escribe exactamente la misma contrase�a en ambas casillas';
$lang['pass_blank'] = 'No se permite contrase�as en blanco. Por favor, escribe una contrase�a en ambas casillas.';
$lang['pass_isold'] = 'No se ha cambiado la contrase�a. La nueva contrase�a es la misma que la anterior';
$lang['pass_changed'] = '&quot;%1$s&quot; contrase�a cambiada. Tu nueva contrase�a es [ %2$s ].<br /> No olvides la contrase�a, se guarda encriptada �nicamente';
$lang['auth_req'] = 'Introduce contrase�a';

// Upload Rules
$lang['enforce_rules'] = 'Forzar exclusiones';
$lang['enforce_rules_never'] = 'Never';
$lang['enforce_rules_all'] = 'All LUA Updates';
$lang['enforce_rules_cp'] = 'CP Updates Only';
$lang['enforce_rules_gp'] = 'Guild Updates Only';
$lang['upload_rules_error'] = 'No puedes dejar ning�n campo vac�o cuando a�ades una hermandad/personaje';
$lang['upload_rules_help'] = 'En este apartado puedes configurar las hermandades/personajes excluidos y permitidos.<ul><li>Cada vez que se sube una hermandad/personaje, se comprueba el bloque de arriba.<br />Si el nombre@servidor concuerda con los \'no permitidos\', directamente se rechaza.</li><li>Despu�s se comprueba el segundo bloque.<br />Si el nombre@servidor concuerda con los \'permitidos\', entonces los datos se graban en la base de datos.</li><li>Si no concuerda con ning�n bloque, los datos se descartan.</li></ul>You can use % for a wildcard.<br /><br />Remember to set a default guild here as well.';

// Data Manager
$lang['clean'] = 'Limpia todas las entradas bas�ndose en las normas';
$lang['clean_help'] = 'This will run an update and enforce the rules as set by the \'Enforce Upload Rules\' setting';
$lang['select_guild'] = 'Selecciona hermandad';
$lang['delete_checked'] = 'Eliminar marcado';
$lang['delete_guild'] = 'Eliminar hermandad';
$lang['delete_guild_confirm'] = 'Con esto borrar�s esta hermandad entera y todos los miembros marcados como miembros de la hermandad.\\n �Estas seguro de continuar?\\n\\nNOTA: �No podr�s volver atr�s!';

// Config Reset
$lang['config_is_reset'] = 'La configuraci�n ha sido restaurada. Por favor, recuerda re-configurar TODAS tus opciones antes de pasar a subir datos';
$lang['config_reset_confirm'] = 'Esto es irreversible. �Estas seguro de continuar?';
$lang['config_reset_help'] = 'En esta ventana puedes restaurar por completo la configuraci�n de Roster.<br />
Todos los datos de configuraci�n de Roster se borrar�n permanentemente, y los valores predefinidos ser�n<br /> restaurados. Los datos de la hermandad, datos de personajes, configuraci�n de addons, datos<br /> de addons, botones del men� y las exclusiones ser�n guardadas.<br />
Las contrase�as de la hermandad, oficiales y administrador tambi�n ser�n guardadas.<br />
<br />
Para continuar, introduce tu contrase�a de administrador debajo y haz click en \'Proceder\'.';


/******************************
 * Roster Admin Strings
 ******************************/

$lang['pagebar_function'] = 'Funciones';
$lang['pagebar_rosterconf'] = 'Configuraci�n de Roster';
$lang['pagebar_uploadrules'] = 'Exclusiones';
$lang['pagebar_dataman'] = 'Control de datos';
$lang['pagebar_userman'] = 'User Manager';
$lang['pagebar_armory_data'] = 'Armory Data';
$lang['pagebar_changepass'] = 'Cambiar contrase�a';
$lang['pagebar_addoninst'] = 'Instalar addons';
$lang['pagebar_plugin'] = 'Plugin Management';
$lang['pagebar_update'] = 'Subir perfil';
$lang['pagebar_rosterdiag'] = 'Roster Diag.';
$lang['pagebar_menuconf'] = 'Configuraci�n de paneles';
$lang['pagebar_configreset'] = 'Restaurar configuraci�n';
$lang['pagebar_usergroups'] = 'Groups';
$lang['pagebar_addonconf'] = 'Configurar addon';
$lang['pagebar_api_data'] = 'Api Usage';
$lang['roster_config_menu'] = 'Men� de configuraci�n';
$lang['menu_config_help'] = 'Add Menu Button Help';
$lang['menu_config_help_text'] = 'Use this to add a new menu button. Adding a new menu button here will add it to the current section.<ul><li>Title - The name of the new button.</li><li>URL - The button\'s link. This can be a WoWRoster path or a full URL (add http:// in the link)</li><li>Icon - The button\'s image. This must be an image from the Interface Image Pack without the path or extension (ex. inv_misc_gear_01)</ul>';

$lang['permissions'] = 'Permissions';
// Submit/Reset confirm questions
$lang['config_submit_button'] = 'Guardar opciones';
$lang['config_reset_button'] = 'Restaurar';
$lang['confirm_config_submit'] = 'Esto guardar� los cambios en la base de datos. �Estas seguro?';
$lang['confirm_config_reset'] = 'Esto restaurara el formulario a como estaba cuando lo cargastes. �Estas seguro?';

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
$lang['admin']['main_conf'] = 'Opciones principales|Opciones principales del Roster<br />Incluye la URL de Roster, el URL de las Im�genes del Interfaz, y otras opciones del n�cleo';
$lang['admin']['defaults_conf'] = 'Datos de la hermandad|Configura aspectos generales sobre la hermandad';
$lang['admin']['index_conf'] = 'P�gina principal|Opciones sobre que mostrar en la P�gina Principal';
$lang['admin']['menu_conf'] = 'Aspecto del men�|Cambia el aspecto del men� principal';
$lang['admin']['display_conf'] = 'Configuraci�n general|Muestra opciones miscel�neas: css, javascript, motd, etc...';
$lang['admin']['realmstatus_conf'] = 'Estado del reino|Opciones sobre la imagen del estado del reino';
$lang['admin']['data_links'] = 'Descargas|Enlaces externos de addons indispensables';
$lang['admin']['update_access'] = 'Permisos para actualizar|Configura los niveles de acceso al panel de control de control de Roster';

$lang['admin']['documentation'] = 'Documentaci�n|Documentaci�n de WoWRoster v�a wowroster.net wiki';

// main_conf
$lang['admin']['roster_dbver'] = "Versi�n de la base de datos de Roster|Versi�n de la base de datos";
$lang['admin']['version'] = "Versi�n de Roster|Versi�n actual del Roster";
$lang['admin']['debug_mode'] = "Modo Depurar|off - No depurar los mensajes de error<br />on - Muestra mensajes de error y una sencilla depuraci�n<br />extendido - Modo de depuraci�n completa";
$lang['admin']['sql_window'] = "Ventana SQL|off - No mostrar� la ventana de entradas<br />on - Muestra la ventana de entradas al pie de la p�gina<br />extendido - Incluye estadisticas de descripci�n";
$lang['admin']['minCPver'] = "Versi�n min de CP|M�nima versi�n permitida del WoWRoster-Profiler";
$lang['admin']['minGPver'] = "Versi�n min de GP|M�nima versi�n permitida del WoWRoster-GuildProfiler";
$lang['admin']['locale'] = "Lenguaje principal del Roster|Elige el lenguaje del interfaz";
$lang['admin']['default_page'] = "P�gina predeterminada|Elige la p�gina a mostrar si el URL introducido no existe";
$lang['admin']['external_auth'] = "Roster Auth|Aqu� puedes elegir que archivo auth se utilizar�<br />&quot;Roster&quot; es el predeterminado, creado por el sistema";
$lang['admin']['website_address'] = "Direcci�n del sitio|Se utiliza para localizar el URL del logo, y para el enlace del nombre de la hermandad que aparece en el men� principal.<br />Algunos addons del roster requieren de ella.";
$lang['admin']['interface_url'] = "Directorio del interfaz|Directorio donde se encuentran las im�genes del interfaz.<br />El predeterminado es &quot;img/&quot;<br /><br />Puedes usar una ruta relativa o la completa";
$lang['admin']['img_suffix'] = "Extensi�n de las im�genes del interfaz|El tipo de im�genes que usa tu interfaz";
$lang['admin']['alt_img_suffix'] = "Extensi�n de las im�genes del interfaz Alt|Otro tipo de im�genes que usa tu interfaz";
$lang['admin']['img_url'] = "Directorio de im�genes del Roster|Directorio donde se encuentran las im�genes del Roster<br />El predeterminado es &quot;img/&quot;.<br /><br />Puedes usar una ruta relativa o la completa";
$lang['admin']['timezone'] = "Hora de la zona|Muestra la hora de tu regi�n geogr�fica";
$lang['admin']['localtimeoffset'] = "Diferencia horaria|La diferencia horaria desde el UTC/GMT<br />La hora del Roster se calcula con esta diferencia";
$lang['admin']['use_update_triggers'] = "Actualizar addon triggers|Esto se utiliza con addons que necesitan ser ejecutados mientras actualizas un personaje o la hermandad.<br />Algunos addons requieren de esto para funcionar correctamente";
$lang['admin']['check_updates'] = "Buscar actualizaciones|Permite a WoWRoster (y a los addons que usan esta opci�n)<br />comprobar si existe alguna versi�n nueva del software";
$lang['admin']['seo_url'] = "URLs amistosos|Activa enlaces en Roster<br /><br />on - /alguna/p�gina/aqu�/param=value.html<br />off - index.php?p=alguna-p�gina-aqu�&amp;param=value";
$lang['admin']['local_cache']= "Sistema de archivos en cach�|Permite al servidor local guardar algunos archivos para mejorar el rendimiento.";
$lang['admin']['use_temp_tables'] = "Usar tablas temporales|Desactiva esta opci�n si tu servidor no permite crear tablas temporales en la base de datos (CREATE TEMPORARY TABLE privilege).<br/>Se recomienda activarlo para mejorar el rendimiento.";
$lang['admin']['preprocess_js'] = "Aggregate JavaScript files|Certain JavaScript files will be optimized automatically, which can reduce both the size and number of requests made to your website.<br />Leaving this on is recommended for performance.";
$lang['admin']['preprocess_css'] = "Aggregate and compress CSS files|Certain CSS files will be optimized automatically, which can reduce both the size and number of requests made to your website.<br />Leaving this on is recommended for performance.";
$lang['admin']['enforce_rules'] = "Forzar exclusiones|Esta opci�n forzar� las mismas normas de subida para todos los ficheros lua que se suban<ul class='ul-no-m'><li>Never: Nunca forzar� las normas</li><li>All LUA Updates: Forzar� las normas a todas las actualizaciones de ficheros lua</li><li>CP Updates: Forzar� las normas solo a los ficheros CP.lua</li><li>Guild Updates: Forzar� las normas solo con actualizaciones de la hermandad</li></ul>Tambi�n puedes activar esta opci�n en el panel &quot;Exclusiones&quot;.";

// defaults_conf
$lang['admin']['default_name'] = "Nombre de WoWRoster|T�tulo que aparece en la parte superior del men� principal";
$lang['admin']['default_desc'] = "Descripci�n|Introduce una breve descripci�n a mostrar debajo del nombre de WoWRoster";
$lang['admin']['alt_type'] = "Alt-Texto b�squeda|Asigna el c�digo para reconocer a los personajes alts<br /><br /><span class=\"red\">The Memebers List AddOn DOES NOT use this for alt grouping</span>";
$lang['admin']['alt_location'] = "Campo b�squeda de alts|Indica el campo en el que se tiene que buscar la etiqueta establecida en el campo anterior<br /><br /><span class=\"red\">The Memebers List AddOn DOES NOT use this for alt grouping</span>";

// display_conf
$lang['admin']['theme'] = "Tema del Roster|Elige el aspecto general de Roster<br /><span class=\"red\">NOTA:</span> No todo el Roster varia con el tema.<br />Usando otros temas puede que no obtengas los resultados esperados";
$lang['admin']['logo'] = "URL para el logo de la cabecera|Escribe el URL completo de la imagen o en su lugar &quot;img/&quot;nombre_logo. <br />Es la imagen que se muestra en la cabecera de la p�gina";
$lang['admin']['roster_bg'] = "URL para la imagen del fondo|Indica el URL completo de la imagen a mostrar en el fondo de la web<br />o el nombre relativo &quot;img/&quot;";
$lang['admin']['motd_display_mode'] = "Modo de mostrar MDD|Elige como mostrar el texto del mensaje del d�a<br /><br />&quot;Texto&quot; - Muestra el MDD en rojo<br />&quot;Imagen&quot; - Muestra el MDD en una imagen (�REQUERIDO GD!)";
$lang['admin']['header_locale'] = "Caja de idioma|Muestra la caja de selecci�n de idioma en el men� principal de Roster";
$lang['admin']['header_login'] = "Login in header|Control the display of the login box in the header";
$lang['admin']['header_search'] = "Search in header|Control the display of the search box in the header";
$lang['admin']['signaturebackground'] = "img.php Fondo|Soporte para elegir el fondo de pantalla";
$lang['admin']['processtime'] = "Pag Gen. Tiempo/DB Colas|Muestra el tiempo de renderizado y el n�mero de llamadas al pie de la p�gina<br />&quot;<i>x.xx | xx</i>&quot;";

// data_links
$lang['admin']['profiler'] = "Enlace para descargar WoWRoster-Profiler|URL para descargar WoWRoster-Profiler";
$lang['admin']['uploadapp'] = "Enlace para descargar UniUploader|URL para descargar UniUploader";

// realmstatus_conf
$lang['admin']['rs_display'] = "Modo de mostrar|Elige como mostrar el estado del reino<ul class='ul-no-m'><li>off: Do not show realm status</li><li>Text: Muestra el reino en una imagen con un texto</li><li>Imagen: Muestra el estado del reino con una imagen (�REQUERIDO GD!)</li></ul>";
$lang['admin']['rs_timer'] = "Tiempo de refresco|Elige el periodo de tiempo para obtener nuevos datos sobre el estado del reino";
$lang['admin']['rs_left'] = "Mostrar|";
$lang['admin']['rs_middle'] = "Opciones de tipos de Mostrar|";
$lang['admin']['rs_right'] = "Opciones sobre como mostrar la Poblaci�n|";
$lang['admin']['rs_font_server'] = "Fuente de teino|Tipo de fuente para el nombre del reino<br />(�Solo en modo imagen!)";
$lang['admin']['rs_size_server'] = "Tama�o de fuente de reino|Elige el tama�o de la fuente del nombre de reino<br />(�Solo en modo imagen!)";
$lang['admin']['rs_color_server'] = "Color de reino|Elige el color del nombre del Reino";
$lang['admin']['rs_color_shadow'] = "Color de la sombra|Elige el color para la sombra de los textos<br />(�Solo en modo imagen!)";
$lang['admin']['rs_font_type'] = "Fuente de letra|Elige el tipo de letra para el reino<br />(�Solo en modo imagen!)";
$lang['admin']['rs_size_type'] = "Tama�o de la fuente de letra|Elige el tama�o de la fuente de letra para el reino<br />(�Solo en modo imagen!)";
$lang['admin']['rs_color_rppvp'] = "RJ-JcJ Color|Color para reinos RJ-JcJ";
$lang['admin']['rs_color_pve'] = "Normal Color|Color para reinos Normales";
$lang['admin']['rs_color_pvp'] = "JcJ Color|Color para reinos JcJ";
$lang['admin']['rs_color_rp'] = "RJ Color|Color para reinos RJ";
$lang['admin']['rs_color_unknown'] = "Color desconocido|Color para reinos desconocidos";
$lang['admin']['rs_font_pop'] = "Poblaci�n Fuente|Tipo de letra para la poblaci�n del reino<br />(�Solo en modo imagen!)";
$lang['admin']['rs_size_pop'] = "Poblaci�n Tama�o de fuente|Elige el tama�o de la fuente de letra para la poblaci�n del reino<br />(�Solo en modo imagen!)";
$lang['admin']['rs_color_low'] = "Bajo Color|Color para poblaciones bajas";
$lang['admin']['rs_color_medium'] = "Medio Color|Color para poblaciones medias";
$lang['admin']['rs_color_high'] = "Alto Color|Color para poblaciones altas";
$lang['admin']['rs_color_max'] = "Max Color|Color para poblaciones con el m�ximo";
$lang['admin']['rs_color_error'] = "Error Color|Color for realm error";
$lang['admin']['rs_color_offline'] = "Desconectado Color|Color para reinos desconectados";
$lang['admin']['rs_color_full'] = "Lleno Color|Color para reinos lleinos (solo en reinos europeos)";
$lang['admin']['rs_color_recommended'] = "Recomendado Color|Color para reinos recomendados (solo en reinos europeos)";

// update_access
$lang['admin']['authenticated_user'] = "Acceso a Update.php|Controla el acceso a update.php<br /><br />Poniendo esta opci�n en off desactivas el acceso para todo el mundo.";
$lang['admin']['api_key_private'] = "Blizzard API Private key|This is the Private key given to you by Blizzard<br />This enables WoWRoster to make more then 3000 requests per day to the Armory";
$lang['admin']['api_key_public'] = "Blizzard API Public key|This is the Public key given to you by Blizzard<br />This enables WoWRoster to make more then 3000 requests per day to the Armory";
$lang['admin']['api_url_region'] = "Blizzard API Region|this is the armory region that you are accessing";
$lang['admin']['api_url_locale'] = "Blizzard API Locale|These locales are REGION dependent and will display<br>info in the desired language";
$lang['admin']['update_inst'] = 'Instrucciones de actualizaci�n|Controls the display of the Update Instructions on the update page';
$lang['admin']['gp_user_level'] = "Nivel de hermandad|Elige el nivel requerido para poder subir datos con WoWRoster-GuildProfiler";
$lang['admin']['cp_user_level'] = "Nivel de personaje|Elige el nivel requerido para poder subir datos con WoWRoster-Profiler";
$lang['admin']['lua_user_level'] = "Nivel de otros LUA|Elige el nivel requerido para poder subir datos con otros addons<br />Esto es para TODOS los tipos de archivos LUA que quieras subir al Roster.";
$lang['admin']['use_api_onupdate'] = "Api on Lua Update|process an api call on each lua char update pulling all api info for the character some addons may use this data";

//session
$lang['admin']['sess_time'] = 'Session Time|Edit the length of time before a session is ended.';
$lang['admin']['save_login'] = 'Save Login|Use a cookie to remember the client login?';
$lang['admin']['acc_session'] = 'Session Config|Configure the settings for accounts sessions.';

// Character Display Settings
$lang['admin']['per_character_display'] = 'Pantalla Per-Character';

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
$lang['guildname'] = 'Nombre de Hermandad';
$lang['realmname']  = 'Nombre de Reino';
$lang['regionname'] = 'Regi�n (i.e. ES)';
$lang['charname'] = 'Nombre de Personaje';

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