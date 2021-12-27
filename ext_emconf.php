<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Easy Accesskeys',
    'description' => 'Easy Accesskeys',
    'category' => 'frontend',
    'author' => 'Axel Hempelt',
    'author_email' => 'a.hempelt@fiz-soft.de',
    'author_company' => 'FIZ soft',
    'state' => 'beta',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'version' => '0.1.3',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-10.4.99',
            'php' => '7.1.0-7.4.99'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => [
            'Fizsoft\\FizAccesskeys\\' => 'Classes/',
        ]
    ],
];
