<?php
	$exotic_care_tagline = get_field('exotic_care_tagline');
	$exotic_care_title = get_field('exotic_care_title');
	$exotic_care_content = get_field('exotic_care_content');
	$exotic_care_link = get_field('exotic_care_link');
	$exotic_care_right_side_top_image = get_field('exotic_care_right_side_top_image');
	$exotic_care_right_side_top_image_caption = get_field('exotic_care_right_side_top_image_caption');
	$exotic_care_right_side_bottom_image = get_field('exotic_care_right_side_bottom_image');
	$exotic_care_right_side_bottom_image_caption = get_field('exotic_care_right_side_bottom_image_caption');
	$exotic_care_pet_background = get_field('exotic_care_pet_background');
	$exotic_care_pet_background_url = !empty($exotic_care_pet_background) ? $exotic_care_pet_background['url'] : '';
?>

<div class="exotic-care" style="background-image: url(<?php echo esc_attr($exotic_care_pet_background_url); ?>)">
	<div class="container">
		<div class="exotic-wrap">
			<div class="row align-items-center">
				<div class="col-lg-7">
					<?php
						if(!empty($exotic_care_tagline)):
						?>
						<h4 class="optinal-h4"><?php echo esc_html($exotic_care_tagline); ?></h4>
						<?php
						endif;
					?>
					<?php
						if(!empty($exotic_care_title)):
						?>
						<h1><?php echo esc_html($exotic_care_title); ?></h1>
						<?php
						endif;
					?>
					<?php
						if(!empty($exotic_care_content)):
						echo $exotic_care_content;
						endif;
					?>
					<?php
						if(!empty($exotic_care_link)):
						$exotic_care_link_url = $exotic_care_link['url'];
						$exotic_care_link_title = $exotic_care_link['title'];
						$exotic_care_link_target = $exotic_care_link['target'] ? '_blank' : '_self';
						?>
						<a href="<?php echo esc_url($exotic_care_link_url); ?>" target="<?php echo esc_attr($exotic_care_link_target); ?>" class="btn btn-primary"><?php echo esc_html($exotic_care_link_title); ?></a>
						<?php
						endif;
					?>
				</div>
				<div class="col-lg-5">
					<div class="exotic-images">
						<?php
							if(!empty($exotic_care_right_side_top_image)):
							$exotic_care_right_side_top_image_url = $exotic_care_right_side_top_image['url'];
							$exotic_care_right_side_top_image_alt = $exotic_care_right_side_top_image['alt'];
							?>
							<div class="exotic-image1 team-box">
								<div class="team-image">
									<img src="<?php echo esc_url($exotic_care_right_side_top_image_url); ?>" alt="<?php echo esc_attr($exotic_care_right_side_top_image_alt); ?>" />
								</div>
								<?php
									if(!empty($exotic_care_right_side_top_image_caption)):
									?>
									<div class="team-title"><?php echo esc_html($exotic_care_right_side_top_image_caption); ?></div>
									<?php
									endif;
								?>
							</div>
							<?php
							endif;
						?>
						<?php
							if(!empty($exotic_care_right_side_bottom_image)):
							$exotic_care_right_side_bottom_image_url = $exotic_care_right_side_bottom_image['url'];
							$exotic_care_right_side_bottom_image_alt = $exotic_care_right_side_bottom_image['alt'];
							?>
							<div class="exotic-image2 team-box">
								<div class="team-image">
									<img src="<?php echo esc_url($exotic_care_right_side_bottom_image_url); ?>" alt="<?php echo esc_attr($exotic_care_right_side_bottom_image_alt); ?>" />
								</div>
								<?php
									if(!empty($exotic_care_right_side_bottom_image_caption)):
									?>
									<div class="team-title"><?php echo esc_html($exotic_care_right_side_bottom_image_caption); ?></div>
									<?php
									endif;
								?>
							</div>
							<?php
							endif;
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>