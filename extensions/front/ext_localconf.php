<?php

defined('TYPO3_MODE') || exit('Access denied.');

call_user_func(
    function () {
        $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
    }
);
\FluidTYPO3\Flux\Core::registerProviderExtensionKey('DEVELOPER.Front', 'Page');
\FluidTYPO3\Flux\Core::registerProviderExtensionKey('DEVELOPER.Front', 'Content');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('@import "EXT:front/Configuration/TsConfig/*"');

$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['front_minimal'] = 'EXT:front/Configuration/RTE/ProjectMinimal.yaml';
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['front_default'] = 'EXT:front/Configuration/RTE/ProjectDefault.yaml';
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['front_headline'] = 'EXT:front/Configuration/RTE/ProjectHeadline.yaml';

