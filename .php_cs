<?php

return (new PhpCsFixer\Config)
    ->setFinder((new PhpCsFixer\Finder)
        ->in(__DIR__)
        ->notPath('DependencyInjection/Configuration.php')
    )
    ->setRiskyAllowed(true)
    ->setRules([
        // See: https://mlocati.github.io/php-cs-fixer-configurator
        '@PHP74Migration' => true,
        '@Symfony' => true,
        '@Symfony:risky' => true,
        '@DoctrineAnnotation' => true,
        '@PHPUnit84Migration:risky' => true,
        'array_push' => true,
        'blank_line_after_opening_tag' => false,
        'class_attributes_separation' => ['elements' => ['method' => 'one']],
        'class_definition' => ['single_item_single_line' => true],
        'combine_consecutive_unsets' => true,
        'heredoc_indentation' => ['indentation' => 'same_as_start'],
        'heredoc_to_nowdoc' => true,
        'linebreak_after_opening_tag' => false,
        'mb_str_functions' => true,
        'method_chaining_indentation' => true,
        'native_constant_invocation' => [
            'fix_built_in' => false,
            'include' => [
                'DIRECTORY_SEPARATOR',
                'PHP_INT_SIZE',
                'PHP_SAPI',
                'PHP_VERSION_ID',
            ],
            'scope' => 'namespaced',
            'strict' => true,
        ],
        'native_function_invocation' => [
            'include' => [
                '@compiler_optimized',
            ],
            'scope' => 'namespaced',
            'strict' => true,
        ],
        'new_with_braces' => false,
        'no_extra_blank_lines' => [
            'break',
            'continue',
            'extra',
            'return',
            'throw',
            'use',
            'parenthesis_brace_block',
            'square_brace_block',
            'curly_brace_block',
        ],
        'no_null_property_initialization' => true,
        'no_short_echo_tag' => true,
        'no_superfluous_phpdoc_tags' => ['allow_mixed' => true, 'remove_inheritdoc' => true],
        'no_unreachable_default_argument_value' => true,
        'no_useless_else' => true,
        'no_useless_return' => true,
        'ordered_class_elements' => true,
        'ordered_traits' => false,
        'php_unit_method_casing' => false,
        'php_unit_strict' => false,
        'php_unit_test_annotation' => ['style' => 'annotation'],
        'php_unit_test_case_static_method_calls' => ['call_type' => 'self'],
        'php_unit_test_class_requires_covers' => false,
        'phpdoc_add_missing_param_annotation' => true,
        'phpdoc_order' => true,
        'phpdoc_summary' => false,
        'return_assignment' => true,
        'simple_to_complex_string_variable' => true,
        'simplified_if_return' => true,
        'single_line_throw' => false,
        'strict_comparison' => true,
        'strict_param' => true,
        'visibility_required' => ['property', 'method', 'const']
    ]);
