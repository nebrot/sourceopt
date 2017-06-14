<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "sourceopt".
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'Source Optimization',
    'description' => 'Optimization of the final page: reformatting the (x)html output, removal of new lines, and quotes. Move development repository to https://github.com/lochmueller/sourceopt',
    'category' => 'fe',
    'version' => '0.9.3',
    'state' => 'beta',
    'author' => 'Dr. Ronald P. Steiner, Boris Nicolai, Tim Lochmueller',
    'author_email' => 'ronald.steiner@googlemail.com, boris.nicolai@andavida.com, tim@fruit-lab.de',
    'author_company' => null,
    'constraints' =>
    [
        'depends' =>
        [
            'typo3' => '7.6.0-8.7.99',
        ],
    ],
];
