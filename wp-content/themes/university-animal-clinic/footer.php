<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package University_Animal_Clinic
 */

// Footer Logo.
$branding_footer_logo = get_field( 'branding_footer_logo', 'option' );

// Contact Information.
$contact_information_section_title = get_field( 'contact_information_section_title', 'option' );
$contact_information_address_text  = get_field( 'contact_information_address_text', 'option' );
$contact_information_address_link  = get_field( 'contact_information_address_link', 'option' );
$contact_information_phone_label   = get_field( 'contact_information_phone_label', 'option' );
$contact_information_phone_number  = get_field( 'contact_information_phone_number', 'option' );

// Hours Of Operation.
$hours_operation_section_title = get_field( 'hours_operation_section_title', 'option' );

// Awards & Associations.
$awards_associations_section_title = get_field( 'awards_associations_section_title', 'option' );
$awards_associations_awards_data   = get_field( 'awards_associations_awards_data', 'option' );

// Copyright.
$copyright_text = get_field( 'copyright_text', 'option' );

?>

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<?php
					if ( ! empty( $branding_footer_logo ) ) :
						$branding_footer_logo_url = $branding_footer_logo['url'];
						$branding_footer_logo_alt = $branding_footer_logo['alt'];
						?>
							<div class="footer-logo">
								<a href="<?php echo esc_url( home_url() ); ?>">
									<img src="<?php echo esc_url( $branding_footer_logo_url ); ?>" alt="<?php echo esc_attr( $branding_footer_logo_alt ); ?>" />
								</a>
							</div>
							<?php
						endif;
					?>
					<?php
					if ( have_rows( 'general_settings_socials', 'option' ) ) :
						?>
							<div class="footer-social">
								<ul>
								<?php
								while ( have_rows( 'general_settings_socials', 'option' ) ) :
									the_row();
									$general_settings_socials_link = get_sub_field( 'general_settings_socials_link' );
									if ( ! empty( $general_settings_socials_link ) ) :
										$general_settings_socials_link_url    = $general_settings_socials_link['url'];
										$general_settings_socials_link_title  = $general_settings_socials_link['title'];
										$general_settings_socials_link_target = $general_settings_socials_link['target'] ? '_blank' : '_self';
										?>
												<li><a href="<?php echo esc_url( $general_settings_socials_link_url ); ?>" target="<?php echo esc_attr( $general_settings_socials_link_target ); ?>" class="icon-<?php echo esc_attr( strtolower( $general_settings_socials_link_title ) ); ?>"></a></li>
											<?php
											endif;
										endwhile;
								?>
								</ul>
							</div>
							<?php
						endif;
					?>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-contact">
						<?php
						if ( ! empty( $contact_information_section_title ) ) :
							?>
								<h4><?php echo esc_html( $contact_information_section_title ); ?></h4>
								<?php
							endif;
						?>
						<?php
						if ( ! empty( $contact_information_address_text ) ) :
							echo wp_kses_post( wpautop( $contact_information_address_text ) );
							endif;
						?>
						<?php
						if ( ! empty( $contact_information_address_link ) ) :
							$contact_information_address_link_url    = $contact_information_address_link['url'];
							$contact_information_address_link_title  = $contact_information_address_link['title'];
							$contact_information_address_link_target = $contact_information_address_link['target'] ? '_blank' : '_self';
							?>
								<a class="learn-more" href="<?php echo esc_url( $contact_information_address_link_url ); ?>" target="<?php echo esc_attr( $contact_information_address_link_target ); ?>"><?php echo esc_html( $contact_information_address_link_title ); ?> <span class="icon-arrow-right"></span></a>
								<?php
							endif;
						?>
						<?php
						if ( ! empty( $contact_information_phone_label ) && ! empty( $contact_information_phone_number ) ) :
							?>
								<p class="footer-contact__phone">
								<?php echo esc_html( $contact_information_phone_label ); ?> <a class="color-body" href="tel:<?php echo esc_attr( $contact_information_phone_number ); ?>"><?php echo esc_html( $contact_information_phone_number ); ?></a>
								</p>
								<?php
							endif;
						?>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-contact">
						<?php
						if ( ! empty( $hours_operation_section_title ) ) :
							?>
								<h4><?php echo esc_html( $hours_operation_section_title ); ?></h4>
								<?php
							endif;
						?>
						<?php
						if ( have_rows( 'hours_operation_hours_data', 'option' ) ) :
							while ( have_rows( 'hours_operation_hours_data', 'option' ) ) :
								the_row();
								$hour = get_sub_field( 'hour' );
								?>
									<p><?php echo esc_html( $hour ); ?></p>
									<?php
								endwhile;
							endif;
						?>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-contact">
						<?php
						if ( ! empty( $awards_associations_section_title ) ) :
							?>
								<h4><?php echo esc_html( $awards_associations_section_title ); ?></h4>
								<?php
							endif;
						?>
						<?php
						if ( have_rows( 'awards_associations_awards_data', 'option' ) ) :
							?>
								<ul class="award-logos">
								<?php
								while ( have_rows( 'awards_associations_awards_data', 'option' ) ) :
									the_row();
									$award_image = get_sub_field( 'award_image' );
									if ( ! empty( $award_image ) ) :
										$award_image_url = $award_image['url'];
										$award_image_alt = $award_image['alt'];
										?>
											<li>
												<img src="<?php echo esc_url( $award_image_url ); ?>" alt="<?php echo esc_attr( $award_image_alt ); ?>" />
											</li>
										<?php
										endif;
										endwhile;
								?>
								</ul>
								<?php
							endif;
						?>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="bottom-wrap">
					<div class="footer-left">
						<?php get_template_part( 'template-parts/navigation/nav', 'footer' ); ?>
						<?php
						if ( ! empty( $copyright_text ) ) :
							?>

								<div class="copyright">Copyright &copy; <script>document.write(new Date().getFullYear());</script>. <?php echo esc_html( $copyright_text ); ?></div>
								<?php
							endif;
						?>
					</div>
					<div class="back-top">
						<a class="learn-more yellow-link" href="#">Back to Top <span class="icon-arrow-up"></span></a>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
