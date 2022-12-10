<?php
/**
 * Testimonial/Blog Block Registration
 *
 * @package University_Animal_Clinic
 */

acf_register_block_type(
	array(
		'name'            => 'testi-blog',
		'title'           => __( 'Testimonials/Blog', 'university-animal-clinic' ),
		'description'     => __( 'Testimonials/Blog block.', 'university-animal-clinic' ),
		'render_template' => 'template-parts/blocks/testi-blog/index.php',
		'category'        => 'university-animal-clinic-blocks',
		'icon'            => array(
			'background' => ACF_BACKGROUND_COLOR_ICON,
			'foreground' => ACF_COLOR_ICON,
			'src'        => 'format-quote',
		),
		'keywords'        => array( 'testi-blog' ),
		'mode'            => 'preview',
		'align'           => 'full',
		'supports'        => ACF_BLOCK_SUPPORTS,
	)
);
