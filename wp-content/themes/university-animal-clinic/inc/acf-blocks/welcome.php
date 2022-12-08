<?php
//  Welcome
acf_register_block_type(array(
    'name' => 'welcome',
    'title' => __('Welcome'),
    'description' => __('Welcome block.'),
    'render_template' => 'template-parts/blocks/welcome/index.php',
    'category' => 'university-animal-clinic-blocks',
    'icon' => array(
        'background' => ACF_BACKGROUND_COLOR_ICON,
        'foreground' => ACF_COLOR_ICON,
        'src' => 'align-left'
    ),
    'keywords' => array( 'welcome' ),
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