<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'tinyclassifieds',
    'description' => '',
    'category' => 'plugin',
    'author' => 'Michael Blunck',
    'author_email' => 'mi.blunck@gmail.com',
    'state' => 'alpha',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
            'form' => '11.5.0-11.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
