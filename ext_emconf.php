<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Test Extension',
    'description' => 'Test Extension',
    'category' => 'plugin',
    'author' => 'Nikita Hovratov',
    'author_email' => 'nikita.h@live.de',
    'author_company' => 'Nikita Hovratov',
    'state' => 'stable',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '10.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.0.0-11.99.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'NH\\Testextension\\' => 'Classes/'
        ]
    ]
];
