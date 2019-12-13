<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'GroupProject.NutrispecApp',
            'Nutrispec',
            'NutriSpec'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'GroupProject.NutrispecApp',
            'Nutrispec_Nutritionist_List',
            'Nutritionists List'
        );
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'GroupProject.NutrispecApp',
            'Nutrispec_Client_List',
            'Client List'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('nutrispec_app', 'Configuration/TypoScript', 'NutriSpec App');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_nutrispecapp_domain_model_nutritionist', 'EXT:nutrispec_app/Resources/Private/Language/locallang_csh_tx_nutrispecapp_domain_model_nutritionist.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_nutrispecapp_domain_model_nutritionist');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_nutrispecapp_domain_model_clients', 'EXT:nutrispec_app/Resources/Private/Language/locallang_csh_tx_nutrispecapp_domain_model_clients.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_nutrispecapp_domain_model_clients');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_nutrispecapp_domain_model_blog', 'EXT:nutrispec_app/Resources/Private/Language/locallang_csh_tx_nutrispecapp_domain_model_blog.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_nutrispecapp_domain_model_blog');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_nutrispecapp_domain_model_specialization', 'EXT:nutrispec_app/Resources/Private/Language/locallang_csh_tx_nutrispecapp_domain_model_specialization.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_nutrispecapp_domain_model_specialization');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_nutrispecapp_domain_model_clientreport', 'EXT:nutrispec_app/Resources/Private/Language/locallang_csh_tx_nutrispecapp_domain_model_clientreport.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_nutrispecapp_domain_model_clientreport');

    }
);
