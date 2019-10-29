<?php

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Mezek.Showmi',
    'Pi1',
    'LLL:EXT:showmi/Resources/Private/Language/locallang_be.xlf:pi1_title',
    'EXT:showmi/Resources/Public/Icons/Extension.png'
);

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['showmi_pi1'] = 'recursive';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['showmi_pi1'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    // plugin signature: <extension key without underscores> '_' <plugin name in lowercase>
    'showmi_pi1',
    // Flexform configuration schema file
    'FILE:EXT:showmi/Configuration/FlexForms/flexform_showmi.xml'
);

//\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToInsertRecords('tx_news_domain_model_activity');