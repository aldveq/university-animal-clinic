<?php
/**
 * Services Block Registration
 *
 * @package University_Animal_Clinic
 */

acf_register_block_type(
	array(
		'name'            => 'services',
		'title'           => __( 'Services', 'university-animal-clinic' ),
		'description'     => __( 'Services block.', 'university-animal-clinic' ),
		'render_template' => 'template-parts/blocks/services/index.php',
		'category'        => 'university-animal-clinic-blocks',
		'icon'            => array(
			'background' => ACF_BACKGROUND_COLOR_ICON,
			'foreground' => ACF_COLOR_ICON,
			'src'        => 'pets',
		),
		'keywords'        => array( 'services' ),
		'mode'            => 'preview',
		'align'           => 'full',
		'supports'        => ACF_BLOCK_SUPPORTS,
	)
);
