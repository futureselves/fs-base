<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Styles
    |--------------------------------------------------------------------------
    |
    | List of toggleable styles.
    |
    */

    'styles' => [

        'lead' => [
            'type'   => 'paragraph',
            'name'   => 'Lead Paragraph',
            'ident'  => 'L',
            'class'  => 'lead',
            'cp_css' => 'font-size: 1.25em; margin-top: -0.5em',
        ],

        // 'hero' => [
        //     'type'   => 'heading',
        //     'level'  => 1,
        //     'name'   => 'Hero Heading',
        //     'ident'  => 'H',
        //     'class'  => 'hero-heading',
        //     'cp_css' => 'font-family: Caslon',
        // ],

        // 'brand' => [
        //     'type'   => 'span',
        //     'name'   => 'Brand Text',
        //     'ident'  => 'B',
        //     'class'  => 'brand-text',
        //     'cp_css' => 'color: dodgerblue; font-weight: 700',
        // ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Default Classes
    |--------------------------------------------------------------------------
    |
    | Default classes that will be applied to elements with no style set.
    |
    */

    'default_classes' => [
        // 'heading' => [
        //     1 => 'heading-1',
        //     2 => 'heading-2',
        //     3 => 'heading-3',
        //     4 => 'heading-4',
        //     5 => 'heading-5',
        //     6 => 'heading-6',
        // ],
        // 'paragraph' => 'paragraph',
    ],

    /*
    |--------------------------------------------------------------------------
    | Store
    |--------------------------------------------------------------------------
    |
    | By default the class names are saved to your content. If you would prefer
    | to save the style keys instead you can change this option to "key".
    |
    */

    'store' => 'class',

];
