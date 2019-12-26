<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'SimpleParser.Cmsp',
            'Cmspfe',
            'spFrontend'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('cmsp', 'Configuration/TypoScript', 'cmSimpleParser');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_cmsp_domain_model_user', 'EXT:cmsp/Resources/Private/Language/locallang_csh_tx_cmsp_domain_model_user.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_cmsp_domain_model_user');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_cmsp_domain_model_requestsearch', 'EXT:cmsp/Resources/Private/Language/locallang_csh_tx_cmsp_domain_model_requestsearch.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_cmsp_domain_model_requestsearch');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_cmsp_domain_model_requestentry', 'EXT:cmsp/Resources/Private/Language/locallang_csh_tx_cmsp_domain_model_requestentry.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_cmsp_domain_model_requestentry');

    }
);
