<?php
//  Exotic Care
acf_register_block_type(array(
    'name' => 'exotic-care',
    'title' => __('Exotic Care'),
    'description' => __('Exotic Care block.'),
    'render_template' => 'template-parts/blocks/exotic-care/index.php',
    'category' => 'university-animal-clinic-blocks',
    'icon' => array(
        'background' => ACF_BACKGROUND_COLOR_ICON,
        'foreground' => ACF_COLOR_ICON,
        'src' => 'pets'
    ),
    'keywords' => array( 'exotic-care' ),
    'mode' => 'preview',
    'align' => 'full',
    'supports' => ACF_BLOCK_SUPPORTS,
));