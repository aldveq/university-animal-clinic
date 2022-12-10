<?php
/**
 * Testimonial/Blog Block Template.
 *
 * @package University_Animal_Clinic
 */

// Testimonial Section Fields.
$testimonial_section_title = get_field( 'testimonial_section_title' );
$testimonial_section_link  = get_field( 'testimonial_section_link' );

// Blog Section Fields.
$blog_section_title = get_field( 'blog_section_title' );
$blog_section_link  = get_field( 'blog_section_link' );

// Recent Post Type Data.
$post_types_queries = UniversityAnimalClinic\Inc\Post_Types_Queries::get_instance();
$recent_post_data   = $post_types_queries->get_recent_post_data();
?>

<div class="testi-blog">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="testimonials">
					<div class="comman-icon">
						<span class="icon-quotes"></span>
					</div>
					<?php
					if ( ! empty( $testimonial_section_title ) ) :
						?>
						<h1><?php echo esc_html( $testimonial_section_title ); ?></h1>
						<?php
					endif;
					?>
					<?php
					if ( ! empty( $testimonial_section_link ) ) :
						$testimonial_section_link_url    = $testimonial_section_link['url'];
						$testimonial_section_link_title  = $testimonial_section_link['title'];
						$testimonial_section_link_target = $testimonial_section_link['target'] ? '_blank' : '_self';
						?>
						<a class="btn btn-primary" href="<?php echo esc_url( $testimonial_section_link_url ); ?>" target="<?php echo esc_attr( $testimonial_section_link_target ); ?>"><?php echo esc_html( $testimonial_section_link_title ); ?></a>
						<?php
					endif;
					?>
					<?php
					if ( have_rows( 'testimonials_data' ) ) :
						?>
						<div class="testi-owl owl-carousel">
							<?php
							while ( have_rows( 'testimonials_data' ) ) :
								the_row();
								$text   = get_sub_field( 'text' );
								$author = get_sub_field( 'author' );
								?>
								<div class="item">
									<?php
									if ( ! empty( $text ) ) :
										echo wp_kses_post( wpautop( $text ) );
									endif;
									?>
									<?php
									if ( ! empty( $author ) ) :
										?>
										<br />
										<b>- <?php echo esc_html( $author ); ?></b>
										<?php
									endif;
									?>
								</div>
								<?php
							endwhile;
							?>
						</div>
						<?php
					endif;
					?>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="home-blog">
					<div class="blog-title">
						<?php
						if ( ! empty( $blog_section_title ) ) :
							?>
							<h4 class="optinal-h4"><?php echo esc_html( $blog_section_title ); ?></h4>
							<?php
						endif;
						?>
						<?php
						if ( ! empty( $blog_section_link ) ) :
							$blog_section_link_url    = $blog_section_link['url'];
							$blog_section_link_title  = $blog_section_link['title'];
							$blog_section_link_target = $blog_section_link['target'] ? '_blank' : '_self';
							?>
							<a class="btn btn-secondary" href="<?php echo esc_url( $blog_section_link_url ); ?>" target="<?php echo esc_attr( $blog_section_link_target ); ?>"><?php echo esc_html( $blog_section_link_title ); ?></a>
							<?php
						endif;
						?>
					</div>
					<?php
					if ( ! empty( $recent_post_data ) && is_object( $recent_post_data ) ) :
						?>
						<div class="blog-main">
							<?php
							if ( ! empty( $recent_post_data->image_url ) && ! empty( $recent_post_data->image_alt_text ) ) :
								?>
								<div class="blog-image">
									<img src="<?php echo esc_url( $recent_post_data->image_url ); ?>" alt="<?php echo esc_attr( $recent_post_data->image_alt_text ); ?>">
								</div>
								<?php
							endif;
							?>
							<div class="blog-content">
								<div class="blog-inner">
									<?php
									if ( ! empty( $recent_post_data->title ) ) :
										?>
										<h4><?php echo esc_html( $recent_post_data->title ); ?></h4>
										<?php
									endif;
									?>
									<?php
									if ( ! empty( $recent_post_data->excerpt ) ) :
										?>
										<p><?php echo esc_html( $recent_post_data->excerpt ); ?></p>
										<?php
									endif;
									?>
									<?php
									if ( ! empty( $recent_post_data->link ) ) :
										?>
										<div class="readmore">
											<a class="btn btn-primary" href="<?php echo esc_url( $recent_post_data->link ); ?>" target="_self">Read More</a>
										</div>
										<?php
									endif;
									?>
								</div>
							</div>
						</div>
						<?php
					endif;
					?>
				</div>
			</div>
		</div>
	</div>
</div>
