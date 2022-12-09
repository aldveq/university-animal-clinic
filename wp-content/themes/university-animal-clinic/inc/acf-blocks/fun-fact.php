<?php
//  Fun Fact
acf_register_block_type(array(
    'name' => 'fun-fact',
    'title' => __('Fun Fact'),
    'description' => __('Fun Fact block.'),
    'render_template' => 'template-parts/blocks/fun-fact/index.php',
    'category' => 'university-animal-clinic-blocks',
    'icon' => array(
        'background' => ACF_BACKGROUND_COLOR_ICON,
        'foreground' => ACF_COLOR_ICON,
        'src' => 'format-video'
    ),
    'keywords' => array( 'fun-fact' ),
    'mode' => 'preview',
    'align' => 'full',
    'supports' => ACF_BLOCK_SUPPORTS,
));