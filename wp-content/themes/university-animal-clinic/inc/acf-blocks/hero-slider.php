<?php
/**
 * Hero Slider Block Registration
 *
 * @package University_Animal_Clinic
 */

acf_register_block_type(
	array(
		'name'            => 'hero-slider',
		'title'           => __( 'Hero Slider', 'university-animal-clinic' ),
		'description'     => __( 'Hero Slider block.', 'university-animal-clinic' ),
		'render_template' => 'template-parts/blocks/hero-slider/index.php',
		'category'        => 'university-animal-clinic-blocks',
		'icon'            => array(
			'background' => ACF_BACKGROUND_COLOR_ICON,
			'foreground' => ACF_COLOR_ICON,
			'src'        => 'slides',
		),
		'keywords'        => array( 'hero-slider' ),
		'mode'            => 'preview',
		'align'           => 'full',
		'supports'        => ACF_BLOCK_SUPPORTS,
	)
);
