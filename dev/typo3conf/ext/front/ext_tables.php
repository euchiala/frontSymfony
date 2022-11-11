<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('front', 'Configuration/TypoScript', 'Templates und Funktionen für diese Seite (DEVELOPPER GmbH)');
    }
);
## EXTENSION BUILDER DEFAULTS END TOKEN - Everything BEFORE this line is overwritten with the defaults of the extension builder

// backend stylesheets
$GLOBALS['TBE_STYLES']['skins']['front'] = [
    'name' => 'front',
    'stylesheetDirectories' => [
        'css' => 'EXT:front/Resources/Public/Css/Backend/',
    ],
];