<?php

/**
 * Extension Manager/Repository config file for ext "nutri_spec_site".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Nutri Spec Site',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
            'rte_ckeditor' => '8.7.0-9.5.99',
            'bootstrap_package' => '10.0.0-10.0.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Groupproject\\NutriSpecSite\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Kunal',
    'author_email' => 'kunal.harkare@hof-university.de',
    'author_company' => 'GroupProject',
    'version' => '1.0.0',
];
