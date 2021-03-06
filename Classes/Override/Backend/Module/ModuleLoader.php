<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Claus Due <claus@wildside.dk>, Wildside A/S
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Override: sysext "backend" ModuleLoader
 *
 * Extended with mechanisms for loading Fluid backend modules.
 *
 * @author Claus Due, Wildside A/S
 * @package Fluidbackend
 * @subpackage Override\Backend\Controller
 */
class Tx_Fluidbackend_Override_Backend_Module_ModuleLoader extends \TYPO3\CMS\Backend\Module\ModuleLoader {

	/**
	 * @param array $modulesArray
	 * @param string $BE_USER
	 */
	public function load($modulesArray, $BE_USER = '') {
		/** @var $objectManager Tx_Extbase_Object_ObjectManagerInterface */
		$objectManager = t3lib_div::makeInstance('Tx_Extbase_Object_ObjectManager');
		/** @var $configurationService Tx_Fluidbackend_Service_ConfigurationService */
		$configurationService = $objectManager->get('Tx_Fluidbackend_Service_ConfigurationService');
		$configurationService->detectAndRegisterAllFluidBackendModules();
		$modulesArray = $GLOBALS['TBE_MODULES'];
		parent::load($modulesArray, $BE_USER);
	}

}
