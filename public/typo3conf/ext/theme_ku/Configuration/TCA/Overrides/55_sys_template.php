<?php

defined('TYPO3') || die();


/*
* ###########################
* Include Static Template files
* ===========================
*/
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'theme_ku',
    'Configuration/TypoScript',
    '__THEME__ TypoScript'
);
