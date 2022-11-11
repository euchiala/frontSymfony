<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "front"
 *
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/



$EM_CONF[$_EXTKEY] = [
    'title' => 'extension for flux usage',
    'description' => 'This TYPO3 extension is an example to use FLUX for creating contents',
    'category' => 'plugin',
    'author' => 'Documentation Team',
    'author_company' => 'DEVELOPER',
    'author_email' => '',
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '',
            'flux' => '',
            'vhs' => '',
            'impexp' => '',
        ]
    ],
    'autoload' => [
        'psr-4' => [
            'DEVELOPER\\FrontFlux\\' => 'Classes'
        ]
    ],
];