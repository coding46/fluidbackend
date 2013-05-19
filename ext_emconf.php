<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "fluidcontent".
 *
 * Auto generated 17-03-2013 23:51
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Fluid Backend Engine',
	'description' => 'Fluid Backend engine - create easy backend modules based on Flux forms',
	'category' => 'be',
	'author' => 'Claus Due',
	'author_email' => 'claus@wildside.dk',
	'author_company' => 'Wildside A/S',
	'shy' => '',
	'dependencies' => 'cms,flux',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'version' => '0.0.0',
	'constraints' => array(
		'depends' => array(
			'typo3' => '4.5-0.0.0',
			'cms' => '',
			'flux' => '5.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'suggests' => array(
	),
	'_md5_values_when_last_written' => 'a:15:{s:16:"ext_autoload.php";s:4:"7e9d";s:12:"ext_icon.gif";s:4:"68b4";s:17:"ext_localconf.php";s:4:"6e69";s:14:"ext_tables.php";s:4:"09d3";s:14:"ext_tables.sql";s:4:"3b19";s:9:"README.md";s:4:"2c2c";s:35:"Classes/Backend/ContentSelector.php";s:4:"95b0";s:40:"Classes/Controller/ContentController.php";s:4:"d9f2";s:49:"Classes/Provider/ContentConfigurationProvider.php";s:4:"3254";s:40:"Classes/Service/ConfigurationService.php";s:4:"3afa";s:34:"Configuration/TypoScript/setup.txt";s:4:"2f15";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"5edb";s:38:"Resources/Private/Layouts/Content.html";s:4:"da94";s:34:"Resources/Private/Layouts/FCE.html";s:4:"5a0f";s:33:"Resources/Public/Icons/Plugin.png";s:4:"50ed";}',
);
