<?php
/*
	Copyright (C) 2018 Enriador & Oliver Auth

	This file is part of the Manifest Destiny variant for vDiplomacy

	The Manifest Destiny variant for vDiplomacy is free software: you can redistribute
	it and/or modify it under the terms of the GNU Affero General Public License
	as published by the Free Software Foundation, either version 3 of the License,
	or (at your option) any later version.

	The Manifest Destiny variant for vDiplomacy is distributed in the hope that it will
	be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
	See the GNU General Public License for more details.

	You should have received a copy of the GNU Affero General Public License
	along with vDiplomacy. If not, see <http://www.gnu.org/licenses/>.
*/

defined('IN_CODE') or die('This script can not be run by itself.');

// Build anywhere
class BuildAnywhere_OrderInterface extends OrderInterface {

	protected function jsLoadBoard()
	{
		global $Variant;
		parent::jsLoadBoard();

		if( $this->phase=='Builds' )
		{
			libHTML::$footerIncludes[] = '../variants/'.$Variant->name.'/resources/supplycenterscorrect.js';
			foreach(libHTML::$footerScript as $index=>$script)
				libHTML::$footerScript[$index]=str_replace('loadBoard();','loadBoard();SupplyCentersCorrect();', $script);
		}
	}
}

// Custom Unit-Icons in javascript-code
class CustomIcons_OrderInterface extends BuildAnywhere_OrderInterface
{
	protected function jsLoadBoard() {
		
		global $Variant;
		parent::jsLoadBoard();

		if( $this->phase!='Builds' )
		{
			libHTML::$footerIncludes[] = '../variants/'.$Variant->name.'/resources/iconscorrect.js';
			foreach(libHTML::$footerScript as $index=>$script)
				libHTML::$footerScript[$index]=str_replace('loadOrdersModel();','loadOrdersModel();IconsCorrect("'.$Variant->name.'","'.$Variant->countries[$this->countryID -1].'");', $script);
		}
	}
}

class ManifestDestinyVariant_OrderInterface extends CustomIcons_OrderInterface {}
