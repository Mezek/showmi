<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('showmi', 'Configuration/TypoScript', 'Data listings');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_showmi_domain_model_activity', 'EXT:showmi/Resources/Private/Language/locallang_csh_tx_showmi_domain_model_activity.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_showmi_domain_model_activity');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_showmi_domain_model_personnel', 'EXT:showmi/Resources/Private/Language/locallang_csh_tx_showmi_domain_model_personnel.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_showmi_domain_model_personnel');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_showmi_domain_model_topic', 'EXT:showmi/Resources/Private/Language/locallang_csh_tx_showmi_domain_model_topic.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_showmi_domain_model_topic');

    }
);
