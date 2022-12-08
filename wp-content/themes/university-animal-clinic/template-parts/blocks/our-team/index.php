<?php
	// Fields Data
	$our_team_tagline = get_field('our_team_tagline');
	$our_team_title = get_field('our_team_title');
	$our_team_link = get_field('our_team_link');
	$our_team_pet_image = get_field('our_team_pet_image');

	// Doctors Post Type Data
	$post_types_queries = UniversityAnimalClinic\Inc\Post_Types_Queries::get_instance();
	$doctors_post_data = $post_types_queries->get_doctors_post_type_data();
?>

<div class="home-team">
	<div class="team-banner">
		<?php
			if(!empty($our_team_pet_image)):
			$our_team_pet_image_url = $our_team_pet_image['url'];
			$our_team_pet_image_alt = $our_team_pet_image['alt'];
			?>
			<div class="banner-image">
				<img src="<?php echo esc_url($our_team_pet_image_url); ?>" alt="<?php echo esc_attr($our_team_pet_image_alt); ?>" />
			</div>
			<?php
			endif;
		?>
	</div>
	<div class="team-content">
		<div class="container">
			<div class="team-wrap">
				<?php
					if(!empty($our_team_tagline)):
					?>
					<h4 class="optinal-h4"><?php echo esc_html($our_team_tagline); ?></h4>
					<?php
					endif;
				?>
				<?php
					if(!empty($our_team_title)):
					?>
					<h1><?php echo esc_html($our_team_title); ?></h1>
					<?php
					endif;
				?>
				<?php
					if(!empty($doctors_post_data) && is_array($doctors_post_data)):
					?>
					<div class="row">
						<?php
							foreach($doctors_post_data as $doctor_data):
							?>
							<div class="col-md-4">
								<div class="team-box">
									<?php
										if(!empty($doctor_data->image_url)):
										?>
										<div class="team-image">
											<img src="<?php echo esc_url($doctor_data->image_url); ?>" alt="<?php echo esc_attr($doctor_data->image_alt_text); ?>" />
											<div class="team-hover">
												<div class="team-h-inner">
													<div class="comman-icon">
														<span class="icon-cross-paw"></span>
													</div>
													<div class="more-div">
														<a class="learn-more yellow-link" href="<?php echo esc_url($doctor_data->link); ?>">learn more <span class="icon-arrow-right"></span></a>
													</div>
												</div>
											</div>
										</div>
										<?php
										endif;
									?>
									<?php
										if(!empty($doctor_data->title)):
										?>
										<div class="team-title"><?php echo esc_html($doctor_data->title); ?></div>
										<?php
										endif;
									?>
								</div>
							</div>
							<?php
							endforeach;
						?>
					</div>
					<?php
					endif;
				?>
				<?php
					if(!empty($our_team_link)):
					$our_team_link_url = $our_team_link['url'];
					$our_team_link_title = $our_team_link['title'];
					$our_team_link_target = $our_team_link['target'];
					?>
					<div class="meet-button">
						<a href="<?php echo esc_url($our_team_link_url); ?>" target="<?php echo esc_attr($our_team_link_target); ?>" class="btn btn-secondary"><?php echo esc_html($our_team_link_title); ?></a>
					</div>
					<?php
					endif;
				?>
			</div>
		</div>
	</div>
</div>