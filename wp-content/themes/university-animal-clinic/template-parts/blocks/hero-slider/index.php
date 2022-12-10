<?php
/**
 * Hero Slider Block Template.
 *
 * @package University_Animal_Clinic
 */

$hero_slider_autoplay_timeout = get_field( 'hero_slider_autoplay_timeout' );

if ( have_rows( 'hero_slider_data' ) ) :
	?>
	<div class="home-slider owl-carousel owl-theme" data-autoplay-timeout="<?php echo esc_attr( $hero_slider_autoplay_timeout ); ?>">
		<?php
		while ( have_rows( 'hero_slider_data' ) ) :
			the_row();
			$image             = get_sub_field( 'image' );
			$top_level_title   = get_sub_field( 'top_level_title' );
			$hero_slider_title = get_sub_field( 'title' );
			$hero_slider_link  = get_sub_field( 'link' );

			if ( ! empty( $image ) ) :
				$image_url = $image['url'];
				$image_alt = $image['alt'];
				?>
				<div class="item">
					<div class="slide-image">
						<img src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_attr( $image_alt ); ?>" />
					</div>
					<div class="container">
						<div class="slide-content">
							<?php
							if ( ! empty( $top_level_title ) ) :
								?>
								<h4 class="optinal-h4"><?php echo esc_html( $top_level_title ); ?></h4>
								<?php
							endif;
							?>
							<?php
							if ( ! empty( $hero_slider_title ) ) :
								?>
								<h3><?php echo esc_html( $hero_slider_title ); ?></h3>
								<?php
							endif;
							?>
							<?php
							if ( ! empty( $hero_slider_link ) ) :
								$link_url    = $hero_slider_link['url'];
								$link_title  = $hero_slider_link['title'];
								$link_target = $hero_slider_link['target'] ? '_blank' : '_self';
								?>
								<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="btn btn-primary"><?php echo esc_html( $link_title ); ?></a>
								<?php
							endif;
							?>
						</div>
					</div>
				</div>
				<?php
			endif;
		endwhile;
		?>
	</div>
	<?php
endif;
?>
