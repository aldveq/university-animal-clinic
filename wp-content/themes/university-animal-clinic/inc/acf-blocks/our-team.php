<?php
//  Our Team
acf_register_block_type(array(
    'name' => 'our-team',
    'title' => __('Our Team'),
    'description' => __('Our Team block.'),
    'render_template' => 'template-parts/blocks/our-team/index.php',
    'category' => 'university-animal-clinic-blocks',
    'icon' => array(
        'background' => ACF_BACKGROUND_COLOR_ICON,
        'foreground' => ACF_COLOR_ICON,
        'src' => 'admin-users'
    ),
    'keywords' => array( 'our-team' ),
    'mode' => 'preview',
    'align' => 'full',
    'supports' => ACF_BLOCK_SUPPORTS,
));