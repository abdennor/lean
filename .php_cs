<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$finder = Finder::create()
    ->in(['src', 'tests']);

return Config::create()
    ->setRules([
        '@Symfony' => true,
        'ordered_imports' => true,
        'phpdoc_align' => false,
        'phpdoc_to_comment' => false,
        'phpdoc_inline_tag' => false,
        'yoda_style' => false,
        'blank_line_before_statement' => false,
        'phpdoc_separation' => false,
        'concat_space' => [
            'spacing' => 'one',
        ],
        'array_syntax' => [
            'syntax' => 'short',
        ],
    ])
    ->setFinder($finder);
