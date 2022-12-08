<?php
//  Hero Slider
acf_register_block_type(array(
    'name' => 'hero-slider',
    'title' => __('Hero Slider'),
    'description' => __('Hero Slider block.'),
    'render_template' => 'template-parts/blocks/hero-slider/index.php',
    'category' => 'university-animal-clinic-blocks',
    'icon' => array(
        'background' => ACF_BACKGROUND_COLOR_ICON,
        'foreground' => ACF_COLOR_ICON,
        'src' => 'slides'
    ),
    'keywords' => array( 'hero-slider' ),
    'mode' => 'preview',
    'align' => 'full',
    'supports' => ACF_BLOCK_SUPPORTS,
    'example'  => array(
        'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    'is_preview' => true
                )
        )
    )
));