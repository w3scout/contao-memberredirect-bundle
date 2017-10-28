<?php

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2011 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * @copyright  w3scouts.com
 * @author     Darko Selesi
 * @license    LGPL
 */

$GLOBALS['TL_DCA']['tl_member']['subpalettes']['login'] = str_replace(',password', ',password,redirectAfterLogin,redirectAfterLogout,', $GLOBALS['TL_DCA']['tl_member']['subpalettes']['login']);

$GLOBALS['TL_DCA']['tl_member']['fields']['redirectAfterLogin'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_member']['redirectAfterLogin'],
	'exclude'                 => true,
	'inputType'               => 'pageTree',
	'foreignKey'              => 'tl_page.title',
	'eval'                    => array('fieldType'=>'radio', 'tl_class' => 'clr'),
	'sql'                     => "int(10) unsigned NOT NULL default '0'",
	'relation'                => array('type'=>'hasOne', 'load'=>'eager')
);
$GLOBALS['TL_DCA']['tl_member']['fields']['redirectAfterLogout'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_member']['redirectAfterLogout'],
	'exclude'                 => true,
	'inputType'               => 'pageTree',
	'foreignKey'              => 'tl_page.title',
	'eval'                    => array('fieldType'=>'radio'),
	'sql'                     => "int(10) unsigned NOT NULL default '0'",
	'relation'                => array('type'=>'hasOne', 'load'=>'eager')
);