<?php
/**
 * WoWRoster.net WoWRoster
 *
 * Character item bonus class
 * This is largely undocumented due to the fact that the WoWRoster.net dev team did not create this
 *
 *
 * @copyright  2002-2011 WoWRoster.net
 * @license    http://www.gnu.org/licenses/gpl.html   Licensed under the GNU General Public License v3.
 * @version    SVN: $Id: charbonus.lib.php 2593 2012-08-27 02:00:45Z ulminia@gmail.com $
 * @link       http://www.wowroster.net
 * @package    CharacterInfo
 * @subpackage ItemBonuses
*/

if( !defined('IN_ROSTER') )
{
	exit('Detected invalid access to this file!');
}



/**
 * Code originally from cybrey's 'Bonuses/Advanced Stats' addon
 * output formatting originally by dehoskins
 * tabs formatting added by Zanix
 *
 * Modified by the roster dev team
 * Rewritten by ds to use new item class
 *
 * @package    CharacterInfo
 * @subpackage ItemBonuses
 */
class CharBonus
{
	var $bonus = array();
	var $bonus_tooltip = array();
	var $locale; // roster language
	var $item_locale; // working item locale
	var $color;
	var $name;
	var $equip;
	/**
	 * item object for current bonus
	 *
	 * @var item
	 */
	var $item;

	/**
	 * Constructor
	 *
	 * @param object $char
	 * @return CharBonus
	 */
	function CharBonus( $char )
	{
		global $roster;

		$this->equip = $char->equip;

		$roster->tpl->assign_vars(array(
			'L_ITEM_BONUSES' => $roster->locale->act['item_bonuses_full'],
			)
		);
	}

	function dumpBonus()
	{
		global $roster, $addon;

		/* @var $item item */
		foreach( $this->equip as $item )
		{
			// set basic item info
			$this->name = $item->name;
			$this->color = $item->color;
			$this->item_locale = $item->locale;
			$this->item = $item;
			//echo'<br><hr><br><pre>';print_r($this->item);echo'</pre>';
			$this->getBonus();
		}
		$this->_formatTooltip(); // call this to format bonus tooltip html
		$this->printBonus();
	}


	// prints out all status based on array of catagories
	function printBonus()
	{
		global $roster, $tooltips;

		foreach( $roster->locale->act['item_bonuses_tabs'] as $catkey => $catval )
		{
			// check to see if the catagory has data don't display if none
			if( isset($this->bonus[$catkey]) )
			{
				$cat = $this->bonus[$catkey];

				$roster->tpl->assign_block_vars('bonus',array(
					'KEY'   => $catkey,
					'VALUE' => $catval
					)
				);

				foreach( $cat as $key => $value )
				{
					$value = explode(':', $value);
					$idx = count($tooltips)+1;
					setTooltip($idx, $this->bonus_tooltip[$catkey][$key]['html']);
					setTooltip('cap_' . $idx, str_replace(array( 'XX', 'YY' ), $value, $key));

					$roster->tpl->assign_block_vars('bonus.row',array(
						'ROW_CLASS' => $roster->switch_row_class(),
						'IDX' => $idx,
						'VALUE' => str_replace(array('XX', 'YY'), $value, $key)
						)
					);
				}
			}
		}

//		aprint($this->bonus,'bonus');
//		aprint($this->bonus_tooltip,'bonus HTML');
	}

	// gets all the bonus from the item and sets the tooltips
	function getBonus()
	{
		global $roster;

		if( isset($this->item->attributes['BaseStats']) )
		{
			if( is_array($this->item->attributes['BaseStats']) )
			{
				foreach( $this->item->attributes['BaseStats'] as $bonus )
				{
					$this->addBonus($bonus, 'BaseStats', false);
				}
			}
			else
			{
				$this->addBonus($this->item->attributes['BaseStats'], 'BaseStats', false);
			}
		}
		if( isset($this->item->attributes['Enchantment']) )
		{
			if( is_array($this->item->attributes['Enchantment']) )
			{
				foreach( $this->item->attributes['Enchantment'] as $bonus )
				{
					$this->addBonus($bonus, 'Enchantment', true);
				}
			}
			else
			{
				$this->addBonus($this->item->attributes['Enchantment'], 'Enchantment', true);
			}
		}
		if( isset($this->item->attributes['Gems']) )
		{
			$gems[] = ( isset($this->item->attributes['Gems'][1]['Bonus']) ? $this->item->attributes['Gems'][1]['Bonus'] : 0 );
			$gems[] = ( isset($this->item->attributes['Gems'][2]['Bonus']) ? $this->item->attributes['Gems'][2]['Bonus'] : 0 );
			$gems[] = ( isset($this->item->attributes['Gems'][3]['Bonus']) ? $this->item->attributes['Gems'][3]['Bonus'] : 0 );
			foreach( $gems as $bonus )
			{
				if( $bonus )
				{
					$this->addBonus($bonus, 'Gems', true);
				}
			}
		}
		if( isset($this->item->effects['Equip']) )
		{
			foreach( $this->item->effects['Equip'] as $bonus )
			{
				$this->addBonus($bonus, 'Effects', false, $roster->locale->wordings[$this->item_locale]['tooltip_equip']);
			}
		}
		
		if( isset($this->item->attributes['SocketBonus']) )
		{
			preg_match($roster->locale->wordings[$this->item_locale]['tooltip_preg_socketbonus'], $this->item->attributes['SocketBonus'], $matches);
			$this->addBonus($matches[1], 'Gems', true);
		}
		
		
		if( isset($this->item->attributes['Set']['SetBonus']) )
		{
			foreach( $this->item->attributes['Set']['SetBonus'] as $bonus )
			{
				$this->addBonus($bonus, 'Set', false, $roster->locale->wordings[$this->item_locale]['tooltip_set']);
			}
		}
		if( isset($this->item->effects['Use']) )
		{
			foreach( $this->item->effects['Use'] as $bonus )
			{
				$this->addBonus($bonus, 'Use', false, $roster->locale->wordings[$this->item_locale]['tooltip_use']);
			}
		}
		if( isset($this->item->effects['ChanceToProc']) )
		{
			foreach( $this->item->effects['ChanceToProc'] as $bonus )
			{
				$this->addBonus($bonus, 'ChanceToProc', false, $roster->locale->wordings[$this->item_locale]['tooltip_equip']);
			}
		}
		if( isset($this->item->attributes['TempEnchantment']) )
		{
			foreach( $this->item->attributes['TempEnchantment'] as $bonus )
			{
				$this->addBonus($bonus, 'TempEnchantment', false);
			}
		}
	}

	/**
	 * Recursing Method:
	 * Calculate the passed $bonus string. split the bonus line if $split_bonus is true
	 * strip out passed $strip_string from $bonus
	 *
	 * @param string $bonus
	 * @param string $catagory
	 * @param bool $split_bonus
	 * @param string $strip_string
	 */
	function addBonus( $bonus, $catagory, $split_bonus=false, $strip_string=false )
	{
		global $roster;

		if( $strip_string )
		{
			$bonus = preg_replace('/' . $strip_string . '/i', '', $bonus);
		}

		$bonus = trim($bonus);
		//
		// Warning: do not set $split_bonus true inside this if
		if( $split_bonus )
		{
			if( preg_match($roster->locale->wordings[$this->item_locale]['item_bonuses_preg_linesplits'], $bonus, $matches) )
			{
				$lines = explode($matches[1], $bonus);
				foreach( $lines as $line )
				{
					$this->addBonus( trim($line), $catagory );
				}
				return;
			}
			else
			{
				$this->addBonus( $bonus, $catagory );
			}
			return;
		}
		//
		// Replace Keys
		if( preg_match_all($roster->locale->wordings[$this->item_locale]['item_bonuses_preg_main'], $bonus, $matches) )
		{
			switch( count($matches[0]) )
			{
				default:
				case 0:
					break;
				case 1:
					$modifier = $matches[0][0];
					$bonus = $this->replaceOne($modifier, 'XX', $bonus);
					$this->setBonus( $modifier, $bonus, $catagory );
					return;
				case 2:
					$modifier = $matches[0][0] . ':' . $matches[0][1];
					$bonus = $this->replaceOne($matches[0][0], 'XX', $bonus);
					$bonus = $this->replaceOne($matches[0][1], 'YY', $bonus);
					$this->setBonus( $modifier, $bonus, $catagory );
					return;
				case 3:
				case 4:
					$this->setBonus( '', $bonus, $catagory );
					return;
			}
		}
		else
		{
			$this->setBonus( '', $bonus, $catagory );
		}
		return;
	}

	/**
	 * standardize Bonus $string and calculate bonus and set tooltip
	 *
	 * @param int $modifier |   12
	 * @param string $string |  +XX Strength
	 * @param string $catagory | Catagory this bonus belongs
	 * @param bool $is_standardized | true to bypass bonus standardizing
	 */
	function setBonus( $modifier, $string, $catagory, $is_standardized=false )
	{
		if( !$is_standardized && $catagory != 'Use' && $catagory != 'ChanceToProc' && $catagory != 'Set' )
		{
			// pass modifier and $catagory in case two or more bonuses come of the function
			$string = $this->standardizeBonus($string, $modifier, $catagory);
		}

		$this->_makeTooltip($string, $modifier, $catagory);

	}

	function _makeTooltip( $string, $modifier, $catagory )
	{
		global $roster;

		if( $catagory == 'Set' )
		{
			$html = '<span style="color:#ffd517;font-size:13px;font-weight:bold;">'
				  . $this->item->attributes['Set']['ArmorSet']['Name'] . '</span>';

			$this->bonus['Totals'][$string] = $modifier;
			$this->bonus[$catagory][$string] = $modifier;
			$setName = addslashes($this->item->attributes['Set']['ArmorSet']['Name']);
			if( empty($this->bonus_tooltip['Totals'][$string][$setName]) )
			{
				$this->bonus_tooltip['Totals'][$string][$setName] = $html . '<br /><br />' . $this->_setNewSetBonusHTML();
				$this->bonus_tooltip[$catagory][$string][$setName] = $html . '<br /><br />' . $this->_setNewSetBonusHTML();
			}
			else
			{
				$this->bonus_tooltip['Totals'][$string][$setName] = $this->bonus_tooltip['Totals'][$string][$setName] . '<br />' . $this->_setNewSetBonusHTML();
				$this->bonus_tooltip[$catagory][$string][$setName] = $this->bonus_tooltip[$catagory][$string][$setName] . '<br />' . $this->_setNewSetBonusHTML();
			}
			return;
		}

		//
		// if set this is an existing bonus
		if( isset($this->bonus['Totals'][$string]) )
		{
			$this->bonus['Totals'][$string] = $this->_add($this->bonus['Totals'][$string], $modifier);
			if( isset($this->bonus[$catagory][$string]) )
			{
				$this->bonus[$catagory][$string] = $this->_add($this->bonus[$catagory][$string], $modifier);
			}
			else
			{
				$this->bonus[$catagory][$string] = $modifier;
			}
		}
		else // new bonus
		{
			$this->bonus['Totals'][$string] = $modifier;
			$this->bonus[$catagory][$string] = $modifier;
		}

		if( isset($this->bonus_tooltip['Totals'][$string][$this->item->name]) )
		{
			$this->bonus_tooltip['Totals'][$string][$this->item->name] = $this->bonus_tooltip['Totals'][$string][$this->item->name] . ',&nbsp;' . $modifier;
		}
		else
		{
			$this->bonus_tooltip['Totals'][$string][$this->item->name] = $this->_setNewBonusHTML($modifier);
		}

		if( isset($this->bonus_tooltip[$catagory][$string][$this->item->name]) )
		{
			$this->bonus_tooltip[$catagory][$string][$this->item->name] = $this->bonus_tooltip[$catagory][$string][$this->item->name] . ',&nbsp;' . $modifier;
		}
		else
		{
			$this->bonus_tooltip[$catagory][$string][$this->item->name] = $this->_setNewBonusHTML($modifier);
		}

	}

	/**
	 * Search and find $this->item->name in the global $tooltips.
	 * Make subtooltip with the existing javascript variable
	 *
	 * Returns html string
	 *
	 * @return string
	 */
	function _setNewBonusHTML( $modifier )
	{
		global $roster, $tooltips;


				return 	/*'<a onmouseover="return overlib2(overlib_' . $key . ',WIDTH,325,HAUTO);" onmouseout="return nd2();">'
						. */'<img width="24px" height="24px" src="' . $roster->config['interface_url'] . 'Interface/Icons/'
						. $this->item->icon . '.' . $roster->config['img_suffix'] . '"/><span style="font-size:12px;"><span style="color:#' . $this->item->color
						. ';">&nbsp;&nbsp;' . $this->item->name . '</span>&nbsp;:&nbsp;' . $modifier . '</span>';

	}

	function _setNewSetBonusHTML( )
	{
		global $roster, $tooltips;

				return 	/*'<a onmouseover="return overlib2(overlib_' . $key . ',WIDTH,325,HAUTO);" onmouseout="return nd2();">'
				  	   	. */'<img width="24px" height="24px" src="' . $roster->config['interface_url'] . 'Interface/Icons/'
				  	   	. $this->item->icon . '.' . $roster->config['img_suffix'] . '"/><span style="color:#' . $this->item->color
				  		. ';font-size:12px;">&nbsp;&nbsp;' . $this->item->name . '</span>';

	}

	function _formatTooltip()
	{
		foreach( $this->bonus_tooltip as $catagory => $catagory_value )
		{
			if( !is_array($this->bonus_tooltip[$catagory]) )
			{
				continue;
			}
			foreach( $this->bonus_tooltip[$catagory] as $bonus => $bonus_value )
			{
				if( !is_array($this->bonus_tooltip[$catagory][$bonus]) )
				{
					continue;
				}
				foreach( $this->bonus_tooltip[$catagory][$bonus] as $val )
				{
					if( isset($this->bonus_tooltip[$catagory][$bonus]['html']) )
					{
						$this->bonus_tooltip[$catagory][$bonus]['html'] = $this->bonus_tooltip[$catagory][$bonus]['html'] . $val . '<br />';
					}
					else
					{
						$this->bonus_tooltip[$catagory][$bonus]['html'] = $val . '<br />';
					}
				}
			}
		}
	}

	/**
	 * Helper function that will add values paired together with a :
	 * will add single pair if a ':' is not found
	 * @param mixed $value1	| 10:10
	 * @param mixed $value2	| 20:5
	 * @return string	| 30:15
	 */
	function _add( $value1 , $value2 )
	{
		if( strpos($value1, ':') !== false )
		{
			$value1 = explode(':', $value1);
			$value2 = explode(':', $value2);

			(string)$return = ($value1[0] + $value2[0]) . ':' . ($value1[1] + $value2[1]);
		}
		else
		{
			(string)$return = ($value1 + $value2);
		}
		return $return;
	}

	/**
	 * Runs $bonus through a set of localized patterns to standerize the bonus
	 * Recursing if resulting bonus is split into multiple bonus strings
	 *
	 * @param string $bonus
	 * @param int $modifier
	 * @param string $catagory
	 * @return string
	 */
	function standardizeBonus( $bonus, $modifier, $catagory )
	{
		global $roster;
		//
		// use preg matches to replace variations on bonus text
		$bonus = preg_replace($roster->locale->wordings[$this->item_locale]['item_bonuses_preg_patterns'], $roster->locale->wordings[$this->item_locale]['item_bonuses_preg_replacements'], ucwords($bonus));

		if( strpos($bonus, ':') )
		{
			$return = explode(':', $bonus);
			//
			// loop through the array recursing into setBonus()
			// until 0 index then return out
			for( $idx=(count($return)-1);;$idx-- )
			{
				if( $idx != 0 )
				{
					$this->setBonus($modifier, $return[$idx], $catagory, true);
				}
				else
				{
					return $return[0];
				}
			}
		}
		return $bonus;
	}

	// by: Dmitry Fedotov box@neting.ru
	// edited by ds
	function replaceOne( $in, $out, $content )
	{
		$pos = strpos($content, $in);

		if( $pos !== false )
		{
			return substr($content, 0, $pos) . $out . substr($content, $pos+strlen($in));
		}
		else
		{
			return $content;
		}
	}
} // end class CharBonus
