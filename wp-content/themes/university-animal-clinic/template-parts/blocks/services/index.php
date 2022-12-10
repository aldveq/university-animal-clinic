<?php
/**
 * Services Block Template.
 *
 * @package University_Animal_Clinic
 */

// Fields.
$services_block_tagline                = get_field( 'services_block_tagline' );
$services_block_title                  = get_field( 'services_block_title' );
$services_block_content                = get_field( 'services_block_content' );
$services_block_link                   = get_field( 'services_block_link' );
$services_block_background_pattern     = get_field( 'services_block_background_pattern' );
$services_block_background_pattern_url = ! empty( $services_block_background_pattern ) ? $services_block_background_pattern['url'] : '';

// Services Post Type Data.
$post_types_queries         = UniversityAnimalClinic\Inc\Post_Types_Queries::get_instance();
$services_post_data_desktop = $post_types_queries->get_services_post_type_data( 'desktop' );
$services_post_data_mobile  = $post_types_queries->get_services_post_type_data( 'mobile' );
?>

<div class="home-services line-bg" style="background-image: url(<?php echo esc_attr( $services_block_background_pattern_url ); ?>); background-repeat: repeat;">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="service-content">
					<?php
					if ( ! empty( $services_block_tagline ) ) :
						?>
						<h4 class="optinal-h4"><?php echo esc_html( $services_block_tagline ); ?></h4>
						<?php
					endif;
					?>
					<?php
					if ( ! empty( $services_block_title ) ) :
						?>
						<h1><?php echo esc_html( $services_block_title ); ?></h1>
						<?php
					endif;
					?>
					<?php
					if ( ! empty( $services_block_content ) ) :
						echo wp_kses_post( wpautop( $services_block_content ) );
					endif;
					?>
					<?php
					if ( ! empty( $services_block_link ) ) :
						$services_block_link_url    = $services_block_link['url'];
						$services_block_link_title  = $services_block_link['title'];
						$services_block_link_target = $services_block_link['target'] ? '_blank' : '_self';
						?>
						<a href="<?php echo esc_url( $services_block_link_url ); ?>" target="<?php echo esc_attr( $services_block_link_target ); ?>" class="btn btn-primary"><?php echo esc_html( $services_block_link_title ); ?></a>
						<?php
					endif;
					?>
				</div>
			</div>
			<div class="col-lg-6">
				<!--Desktop Slider Markup - Start -->
				<?php get_template_part( 'template-parts/services/slider', 'desktop', array( 'data' => $services_post_data_desktop ) ); ?>
				<!--Desktop Slider Markup - End -->

				<!--Mobile Slider Markup - Start -->
				<?php get_template_part( 'template-parts/services/slider', 'mobile', array( 'data' => $services_post_data_mobile ) ); ?>
				<!--Mobile Slider Markup - End -->
			</div>
		</div>
	</div>
</div>
