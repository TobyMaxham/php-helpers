<?php

return PhpCsFixer\Config::create()
    ->setRules([
        '@PSR2' => true,
        'ordered_imports' => [
            'sortAlgorithm' => 'alpha', //'length',
        ],
        //'ordered_class_elements' => true,
        'no_unused_imports' => true,
        'blank_line_before_return' => true,
        'array_syntax' => [
            'syntax' => 'short',
        ],
    ])
    ;