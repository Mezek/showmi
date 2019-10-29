<?php
defined('TYPO3_MODE') || die('Access denied.');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Mezek.Showmi',
	'Pi1',
	[
		'Activity' => 'list,internet',
		'Personnel' => 'list,current,students,department,defense,singlePerson,singleStudent,singleDefense',
		'Topic' => 'list,show,thema',
	],
    // non-cacheable actions
	[
		'Activity' => '',
		'Personnel' => '',
		'Topic' => '',
	]
);

