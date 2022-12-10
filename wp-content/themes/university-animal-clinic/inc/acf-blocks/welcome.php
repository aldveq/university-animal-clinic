<?php
/**
 * Welcome Block Registration
 *
 * @package University_Animal_Clinic
 */

acf_register_block_type(
	array(
		'name'            => 'welcome',
		'title'           => __( 'Welcome', 'university-animal-clinic' ),
		'description'     => __( 'Welcome block.', 'university-animal-clinic' ),
		'render_template' => 'template-parts/blocks/welcome/index.php',
		'category'        => 'university-animal-clinic-blocks',
		'icon'            => array(
			'background' => ACF_BACKGROUND_COLOR_ICON,
			'foreground' => ACF_COLOR_ICON,
			'src'        => 'align-left',
		),
		'keywords'        => array( 'welcome' ),
		'mode'            => 'preview',
		'align'           => 'full',
		'supports'        => ACF_BLOCK_SUPPORTS,
	)
);
