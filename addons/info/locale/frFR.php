<?php
/**
 * WoWRoster.net WoWRoster
 *
 *
 * frFR Locale
 *
 * @copyright  2002-2011 WoWRoster.net
 * @license    http://www.gnu.org/licenses/gpl.html   Licensed under the GNU General Public License v3.
 * @version    SVN: $Id: frFR.php 2551 2012-06-16 14:47:56Z ulminia@gmail.com $
 * @link       http://www.wowroster.net
 * @package    CharacterInfo
 * @subpackage Locale
*/

$lang['char_info'] = 'Informations des personnages';
$lang['char_info_desc'] = 'Affiche les informations relatives aux personnages qui ont �t� t�l�charg�es sur le roster';

// Menu Buttons
$lang['cb_character'] = 'Personnage|Affichage des statistiques, �quipements, r�putations, talents, informations JcJ du personnage';
$lang['cb_talents'] = 'Talents|Affichage de l\'arbre de talents actuel';
$lang['cb_spellbook'] = 'Livre de sorts|Affichage des sorts, actions et capacit�s passives disponibles';
$lang['cb_mailbox'] = 'Bo�te aux lettres|Affichage du contenu de la bo�te aux lettres';
$lang['cb_bags'] = 'Sacs|Affichage du contenu des sacs du personnage';
$lang['cb_bank'] = 'Banque|Affichage du contenu de la banque du personnage';
$lang['cb_quests'] = 'Qu�tes|Affichage de la liste des qu�tes en cours du personnage';
$lang['cb_recipes'] = 'Recettes|Affichage des objets que le personnage sait confectionner';
$lang['cb_inventory'] = 'Inventory|Shows the current inventory of the players bank and bags';

$lang['char_stats'] = 'Statisques du personnage : %1$s';
$lang['talents'] = 'Talents';
$lang['talent_specialization'] = 'Talent Specialization';
$lang['unusedtalentpoints']='Points de talent non utilis�s';
$lang['hybrid']='Hybrid';

$lang['pets']='Pets';
$lang['companions']='Companions';
$lang['mounts']='Mounts';
$lang['unusedtrainingpoints']='Points de formation non utilis�s';

// Spellbook
$lang['spellbook'] = 'Grimoire';
$lang['no_spellbook'] = 'Pas de grimoire pour %1$s';

// Currency
$lang['currency'] = 'Currency';

// Mailbox
$lang['mailbox'] = 'Bo�te aux lettres';
$lang['maildateutc'] = 'Messages Captur�s';
$lang['mail_item'] = 'Objet';
$lang['mail_sender'] = 'Exp�diteur';
$lang['mail_subject'] = 'Sujet';
$lang['mail_expires'] = 'Messages expir�s';
$lang['mail_money'] = 'Argent Inclus';
$lang['no_mail'] = 'Pas de courrier pour %1$s';

// Quests
$lang['no_quests'] = '%1$s n\'a pas de qu�tes';

//skills
$lang['skilltypes'] = array(
	1 => 'Comp�tences de Classe',
	2 => 'M�tiers',
	3 => 'Comp�tences secondaires',
	4 => 'Comp�tences d�armes',
	5 => 'Armures portables',
	6 => 'Langues'
);

// item slots, for missing items on characters
$lang['Head']          = 'T�te';
$lang['Neck']          = 'Cou';
$lang['Shoulder']      = '�paules';
$lang['Back']          = 'Dos';
$lang['Chest']         = 'Torse';
$lang['Shirt']         = 'Chemise';
$lang['Tabard']        = 'Tabard';
$lang['Wrist']         = 'Poignets';
$lang['MainHand']      = 'Main droite';
$lang['SecondaryHand'] = 'Main gauche';
$lang['Ranged']        = '� distance';
$lang['Ammo']          = 'Munitions';
$lang['Hands']         = 'Mains';
$lang['Waist']         = 'Taille';
$lang['Legs']          = 'Jambes';
$lang['Feet']          = 'Pieds';
$lang['Finger0']       = 'Doigt 0';
$lang['Finger1']       = 'Doigt 1';
$lang['Trinket0']      = 'Bijou 0';
$lang['Trinket1']      = 'Bijou 1';

//tabs
$lang['profile']='Profile';
$lang['model_viewer']='Model Viewer';
$lang['reputation']='R�putation';
$lang['skills']='Comp�tences';
$lang['pvp']='JcJ';

$lang['strength_tooltip']='Augmente la puissance d\'attaque avec arme de m�l�e.<br />Augmente le nombre de points de d�g�ts bloqu�s par le bouclier.';
$lang['agility_tooltip']= 'Augmente votre puissance d\'attaque avec arme de jet.<br />Am�liore vos chances de r�aliser une attaque critique avec toutes les armes.<br />Augmente votre armure et votre chance d\'esquiver les attaques.';
$lang['stamina_tooltip']= 'Augmente vos points de vie.';
$lang['intellect_tooltip']= 'Augmente vos points de mana et vos chances de r�aliser une attaque critique aux moyens de sorts.<br />Augmente la vitesse d\'apprentissage des comp�tences en arme.';
$lang['spirit_tooltip']= 'Augmente la vitesse de r�g�n�ration de vos points de vie et de mana.';
$lang['armor_tooltip']= 'Reduces physical damage taken by %1$s%%';

$lang['mainhand']='Main Hand';
$lang['offhand']='Off Hand';
$lang['ranged']='� distance';
$lang['melee']='En m�l�e';
$lang['spell']='Sortil�ges';

$lang['weapon_skill']='Comp�tence';
$lang['weapon_skill_tooltip']='<span style="float:right;color:#fff;">%1$d</span>Comp�tence d\'arme<br /><span style="float:right;color:#fff;">%2$d</span>Niveau de la comp�tence d\'arme';
$lang['damage']='D�g�ts';
$lang['damage_tooltip']='<span style="float:right;color:#fff;">%.2f</span>Vitesse d\'attaque (secondes) :<br /><span style="float:right;color:#fff;">%d-%d</span>D�g�ts :<br /><span style="float:right;color:#fff;">%.1f</span>D�g�ts par seconde :<br />';
$lang['speed']='Vitesse';
$lang['atk_speed']='Vitesse d\'attaque';
$lang['haste_tooltip']='Haste Rating ';

$lang['melee_att_power']='Puissance d\'attaque en m�l�e';
$lang['melee_att_power_tooltip']='Augmente les points de d�g�ts inflig�s avec des armes de m�l�e de %.1f points de d�g�ts par seconde.';
$lang['ranged_att_power']='Puissance d\'attaque � distance';
$lang['ranged_att_power_tooltip']='Augmente les p�ints de d�g�ts inflig�s avec des armes � distance de %.1f points de d�g�ts par seconde.';

$lang['weapon_hit_rating']='Sc. toucher';
$lang['weapon_hit_rating_tooltip']='Augmente vos chances de toucher votre adversaire.';
$lang['weapon_expertise']='Expertise';
$lang['weapon_expertise_tooltip']='R�duit les chances de voter adversaire d\'esquiver ou de parer.';
$lang['weapon_crit_rating']='Critiques';
$lang['weapon_crit_rating_tooltip']='Chance de coup critique de %.2f%%.';

$lang['damage']='D�g�ts';
$lang['energy']='Energie';
$lang['rage']='Rage';
$lang['power']='Puissance';

$lang['melee_rating']='Rang de l\'Attaque en M�l�e';
$lang['melee_rating_tooltip']='Votre rang d\'attaque influence vos chances de toucher une cible.<br />Et est bas� sur votre habilit� � utiliser l\'arme que vous portez.';
$lang['range_rating']='Rang de l\'Attaque � Distance';
$lang['range_rating_tooltip']='Votre rang d\'attaque influence vos chances de toucher une cible.<br />Et est bas� sur votre habilit� � utiliser l\'arme que vous manipulez.';

$lang['spell_damage']='+Damage';
$lang['holy']='Sacr�';
$lang['fire']='Feu';
$lang['nature']='Nature';
$lang['frost']='Givre';
$lang['shadow']='Ombre';
$lang['arcane']='Arcane';

$lang['spell_healing']='+Healing';
$lang['spell_healing_tooltip']='Increases your healing by up to %d';
$lang['spell_hit_rating']='Hit Rating';
$lang['spell_hit_rating_tooltip']='Increases your chance to hit an enemy with your spells.';
$lang['spell_crit_rating']='Crit Rating';
$lang['spell_crit_chance']='Crit Chance';
$lang['spell_penetration']='Penetration';
$lang['spell_penetration_tooltip']='Reduces the target\'s resistance to your spells';
$lang['mana_regen']='Mana Regen';
$lang['mana_regen_tooltip']='%1$d mana regenerated every 5 seconds while not casting<br />%2$d mana regenerated every 5 seconds while casting';

$lang['defense_rating']='Defense Rating ';
$lang['def_tooltip']='Increases your chance to %s';
$lang['resilience']='R�silience';

$lang['buffs'] = 'Buffs';
$lang['resistances'] = 'Resistances';

$lang['res_arcane']='R�sistance aux arcanes';
$lang['res_arcane_tooltip']='Augmente la capacit� � r�sister aux attaques, sorts et techniques de type Arcane.';
$lang['res_fire']='R�sistance au feu';
$lang['res_fire_tooltip']='Augmente la capacit� � r�sister aux attaques, sorts et techniques de type Feu.';
$lang['res_nature']='R�sistance � la nature';
$lang['res_nature_tooltip']='Augmente la capacit� � r�sister aux attaques, sorts et techniques de type Nature.';
$lang['res_frost']='R�sistance au givre';
$lang['res_frost_tooltip']='Augmente la capacit� � r�sister aux attaques, sorts et techniques de type Givre.';
$lang['res_shadow']='R�sistance � l\'ombre';
$lang['res_shadow_tooltip']='Augmente la capacit� � r�sister aux attaques, sorts et techniques de type Ombre.';

$lang['empty_equip']='Aucun �quipement';
$lang['pointsspent']='Points utilis�s dans %1$s Talents';
$lang['export_url']='http://eu.wowarmory.com/talent-calc.xml?locale=fr_fr&amp;cid=%1$s&amp;tal=%2$s';
$lang['export_url2']='http://www.wowhead.com/talent#%1$s-%2$s';
$lang['no_talents']='Aucun talent pour %1$s';

// item_bonus locales //
$lang['item_bonuses_full'] = 'Bonus d�s � l\'�quipement';
$lang['item_bonuses'] = 'Objets bonus';
$lang['item_bonuses_preg_linesplits']='/(et|\/|&)/i';
$lang['item_bonuses_preg_main']='/(?!\d*\s(sec|min))(-{0,1}\d*\.{0,1}\d+)/i';

//
// patterns to standardize bonus string
$lang['item_bonuses_preg_patterns'] =
	array('/increases the block value of your shield by XX\.?/i',	//1
		'/(?:increases|improves) (?:your )?(.+) by XX\.?/i',	//2
		'/increases (Damage) and (Healing) done by magical spells and effects by up to XX\.?$/i',	//3
		'/Increases Healing Done By Spells And Effects By Up To XX\.?/i', //4
		'/Increases Damage Done By Spells And Effects By Up To XX\.?/i', //5'
		'/(?:restores|\+)?\s?XX (mana|health) (?:per|every|regen).*$/i',	//6
		'/increases damage done by (.+) and.*$/i',	//7
		'/^\+?XX (Healing)(?: Spells)?\.?$/',	//8
		'/^\+XX Spell Damage and Healing/i', //8.5
		'/^scope \(\+XX damage\)$/i',	//9
		'/^\+?XX (?:shield )?block$/i',	//10
		'/^\+XX All Stats/i', //11
		'/^\+XX All Resistances/i', //12
		'/^\+XX Spell Critical Rating/i', //13
	);
$lang['item_bonuses_preg_replacements'] =
	array('+XX Shield Block',  //1
		'+XX $1', //2
		'+XX Spell $1:+XX $2 Spells', //3
		'+XX Healing Spells',	// 4
		'+XX Damage Spells', // 5
		'+XX $1 Per 5 Seconds', //6
		'+XX $1 Damage', //7
		'+XX $1 Spells', //8
		'+XX Spell Damage:+XX Healing Spells', //8.5
		'+XX Ranged Damage (Scope)', //9
		'+XX Shield Block', //10
		'+XX Strength:+XX Agility:+XX Stamina:+XX Intellect:+XX Spirit', //11
		'+XX Arcane Resistance:+XX Fire Resistance:+XX Nature Resistance:+XX Frost Resistance:+XX Shadow Resistance', //12
		'+XX Spell Critical Strike Rating', //13
	);

/*
$lang['item_bonuses_remap']=
	array( // key must be lowercase!											// standardized bonus
		'+xx healing'                   												=> '+XX to Healing Spells',
		'+xx healing spells'															=> '+XX to Healing Spells',
		'increases healing done by spells and effects by up to xx.'						=> '+XX to Healing Spells',
		'restores xx health per 5 sec.'													=> '+XX Health per 5 Seconds',
		'+xx mana every 5 sec.'         												=> '+XX Mana per 5 Seconds',
		'+xx mana every 5 sec'															=> '+XX Mana per 5 Seconds',
		'+xx mana every 5 seconds'														=> '+XX Mana per 5 Seconds',
		'xx mana per 5 sec.'															=> '+XX Mana per 5 Seconds',
		'+xx mana regen'																=> '+XX Mana per 5 Seconds',
		'restores xx mana per 5 sec.'													=> '+XX Mana per 5 Seconds',
		'restores xx mana per 5 sec'													=> '+XX Mana per 5 Seconds',
		'+xx spell critical rating'														=> '+XX Spell Critical Strike Rating',
		'improves spell critical strike rating by xx.'									=> '+XX Spell Critical Strike Rating',
		'+xx spell damage'																=> '+XX Spell Damage and Heal',
		'+xx spell power'																=> '+XX Spell Damage and Heal',
		'increases damage and healing done by magical spells and effects by up to xx.'	=> '+XX Spell Damage and Heal',
		'improves spell hit rating by xx.'												=> '+XX Spell Hit Rating',
		'increases your spell hit rating by xx.'										=> '+XX Spell Hit Rating',
		'increases your dodge rating by xx.'											=> '+XX Dodge Rating',
		'increases defense rating by xx.'												=> '+XX Defense Rating',
		'increases your parry rating by xx.'											=> '+XX Parry Rating',
//		'xx block'																		=> '+XX Shield Block',
		'increases the block value of your shield by xx.'								=> '+XX Shield Block Rating',
		'increases your shield block rating by xx.'										=> '+XX Shield Block Rating',
		'improves hit rating by xx.'													=> '+XX Hit Rating',
		'improves your resilience rating by xx.'										=> '+XX Resilience Rating',
		'increases damage done by fire spells and effects by up to xx.'					=> '+XX Fire Spell Damage',
		'increases damage done by frost spells and effects by up to xx.'				=> '+XX Frost Spell Damage',
		'increases damage done by shadow spells and effects by up to xx.'				=> '+XX Shadow Spell Damage',
//
		'increases attack power by xx.'													=> '+XX Attack Power',
		'improves critical strike rating by xx.'										=> '+XX Critical Strike Rating',
		'increases your hit rating by xx.'												=> '+XX Hit Rating',
		'scope (+xx damage)'															=> '+XX Ranged Damage (Scope)'
		);
*/
$lang['item_bonuses_tabs'] = array(
		//key				//translate this
		'Totals' 			=> 'Totaux',
		'Enchantment' 		=> 'Enchant.',
		'BaseStats' 		=> 'Bonus caract.',
		'Gems' 				=> 'Gemmes',
		'Effects' 			=> 'Passif',
		'Set' 				=> 'Sets',
		'Use' 				=> 'Use',
		'ChanceToProc' 		=> 'Procs',
		'TempEnchantment'	=> 'Effets temp.'
		);

// item_bonus end //
$lang['inactive'] = 'Inactif';

$lang['admin']['char_conf'] = 'Page de Personnage|D�finir ce qui est affich� sur la page de personnage';
$lang['admin']['char_links'] = "Liens de la page de personnage|Afficher le lien rapide vers la page de personnage sur chaque page de personnage";
$lang['admin']['recipe_disp'] = "Affichage des recettes|Contr�le la fa�on dont la page des recettes est affich�e � son chargement<br />Les listes peuvent �tre repli�es ou ouvertes en cliquant sur l'en-t�te du tableau<br /><br />&quot;show&quot; laissera appara�tre les listes au chargement<br />&quot;collapse&quot; laissera les listes repli�es";
$lang['admin']['mail_disp'] = "Mail Display|Controls how the mail is displayed<br /><br />&quot;Table&quot; Shows the mail in a table view<br />&quot;Bag&quot; Shows each mail as a bag of items<br />&quot;Both&quot; Shows both";
$lang['admin']['show_money'] = "Argent|Affichage de l'argent<br /><br />Le param�tre est global et �crase le param�tre par personnage";
$lang['admin']['show_played'] = "Time Played|Controls the display of Time Played and Time Level Played<br /><br />Setting is global and overrides per-user setting";
$lang['admin']['show_model'] = "Model Viewer|Controls the display of Blizzard's Model Viewer<br /><br />Setting is global and overrides per-user setting";
$lang['admin']['show_pets'] = "Familiers|Affichage des familiers<br /><br />Le param�tre est global et �crase le param�tre par personnage";
$lang['admin']['show_reputation'] = "R�putation|Affichage des r�putations<br /><br />Le param�tre est global et �crase le param�tre par personnage";
$lang['admin']['show_skills'] = "Comp�tences|Affichage des comp�tences<br /><br />Le param�tre est global et �crase le param�tre par personnage";
$lang['admin']['show_honor'] = "JcJ|Affichage du JcJ<br /><br />Le param�tre est global et �crase le param�tre par personnage";
$lang['admin']['show_currency'] = "Currency|Controls the display of the Currency Page<br /><br />Setting is global and overrides per-user setting";
$lang['admin']['show_talents'] = "Talents|Affichage des talents<br /><br />Le param�tre est global et �crase le param�tre par personnage";
$lang['admin']['show_glyphs'] = "Glyphs|Controls the display of Glpyhs<br /><br />Setting is global and overrides per-user setting";
$lang['admin']['show_spellbook'] = "Grimoire|Affichage du grimoire<br /><br />Le param�tre est global et �crase le param�tre par personnage";
$lang['admin']['show_mail'] = "Courrier|Affichage du courrier<br /><br />Le param�tre est global et �crase le param�tre par personnage";
$lang['admin']['show_bags'] = "Sacs|Affichage des sacs<br /><br />Le param�tre est global et �crase le param�tre par personnage";
$lang['admin']['show_bank'] = "Banque|Affichage du contenu de la banque<br /><br />Le param�tre est global et �crase le param�tre par personnage";
$lang['admin']['show_recipes'] = "Recettes|Affichage des recettes<br /><br />Le param�tre est global et �crase le param�tre par personnage";
$lang['admin']['show_quests'] = "Qu�tes|Affichage des qu�tes<br /><br />Le param�tre est global et �crase le param�tre par personnage";
$lang['admin']['show_bg'] = "Champs de bataille|Affichage des donn�es de champs de bataille<br />N�cessite le t�l�chargement des donn�es PvPLog<br /><br />Le param�tre est global et �crase le param�tre par personnage";
$lang['admin']['show_pvp'] = "Joueur contre joueur|Affichage des donn�es joueur contre joueur<br />N�cessite le t�l�chargement des donn�es PvPLog<br /><br />Le param�tre est global et �crase le param�tre par personnage";
$lang['admin']['show_duels'] = "Duel|Affichage des donn�es de duel<br />N�cessite le t�l�chargement des donn�es PvPLog<br /><br />Le param�tre est global et �crase le param�tre par personnage";
$lang['admin']['show_item_bonuses'] = "Bonus d'�quipement|Affichage des bonus d'�quipement<br /><br />Le param�tre est global et �crase le param�tre par personnage";
$lang['admin']['show_pet_talents'] = "Pet Talents|Controls the display of Pet Talents<br /><br />Setting is global and overrides per-user setting";
$lang['admin']['show_pet_spells'] = "Pet Spells|Controls the display of Pet Spells<br /><br />Setting is global and overrides per-user setting";
$lang['admin']['show_companions'] = "Companions|Controls the display of Companions<br /><br />Setting is global and overrides per-user setting";
$lang['admin']['show_mounts'] = "Mounts|Controls the display of Mounts<br /><br />Setting is global and overrides per-user setting";

$lang['admin']['char_pref'] = 'Pr�f�rences d\'affichage|D�finir ce qui est affich� sur la page de personnage pour chacun d\'eux';
$lang['admin']['api_image'] = 'Character Image|save the Characters image on update for display on the profile';
$lang['admin']['no_data'] = 'Aucune donn�e';
$lang['admin']['nothing_to_config'] = 'Nothing to configure<br />All Global settings are set to override per-character settings';
