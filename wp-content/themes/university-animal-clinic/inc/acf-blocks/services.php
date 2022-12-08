<?php
//  Services
acf_register_block_type(array(
    'name' => 'services',
    'title' => __('Services'),
    'description' => __('Services block.'),
    'render_template' => 'template-parts/blocks/services/index.php',
    'category' => 'university-animal-clinic-blocks',
    'icon' => array(
        'background' => ACF_BACKGROUND_COLOR_ICON,
        'foreground' => ACF_COLOR_ICON,
        'src' => 'pets'
    ),
    'keywords' => array( 'services' ),
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