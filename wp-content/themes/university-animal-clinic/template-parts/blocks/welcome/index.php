<?php
/**
 * Welcome Block Template.
 *
 * @package University_Animal_Clinic
 */

$welcome_block_image         = get_field( 'welcome_block_image' );
$welcome_block_image_caption = get_field( 'welcome_block_image_caption' );
$welcome_block_tagline       = get_field( 'welcome_block_tagline' );
$welcome_block_title         = get_field( 'welcome_block_title' );
$welcome_block_content       = get_field( 'welcome_block_content' );
$welcome_block_link          = get_field( 'welcome_block_link' );
?>

<div class="welcome-block">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-md-4 mobile-order2">
				<?php
				if ( ! empty( $welcome_block_image ) ) :
					$welcome_block_image_url = $welcome_block_image['url'];
					$welcome_block_image_alt = $welcome_block_image['alt'];
					?>
					<div class="welcome-box team-box">
						<div class="team-image">
							<img src="<?php echo esc_url( $welcome_block_image_url ); ?>" alt="<?php echo esc_attr( $welcome_block_image_alt ); ?>" />
						</div>

						<?php
						if ( ! empty( $welcome_block_image_caption ) ) :
							?>
							<div class="team-title"><?php echo esc_html( $welcome_block_image_caption ); ?></div>
							<?php
						endif;
						?>
					</div>
					<?php
				endif;
				?>
			</div>
			<div class="col-lg-7 col-md-8">
				<div class="welcome-content">
					<?php
					if ( ! empty( $welcome_block_tagline ) ) :
						?>
						<h4 class="optinal-h4"><?php echo esc_html( $welcome_block_tagline ); ?></h4>
						<?php
					endif;
					?>
					<?php
					if ( ! empty( $welcome_block_title ) ) :
						?>
						<h1><?php echo esc_html( $welcome_block_title ); ?></h1>
						<?php
					endif;
					?>
					<?php
					if ( ! empty( $welcome_block_content ) ) :
						echo wp_kses_post( wpautop( $welcome_block_content ) );
					endif;
					?>
					<?php
					if ( ! empty( $welcome_block_link ) ) :
						$welcome_block_link_url    = $welcome_block_link['url'];
						$welcome_block_link_title  = $welcome_block_link['title'];
						$welcome_block_link_target = $welcome_block_link['target'] ? '_blank' : '_self';
						?>
						<a href="<?php echo esc_url( $welcome_block_link_url ); ?>" target="<?php echo esc_attr( $welcome_block_link_target ); ?>" class="btn btn-primary"><?php echo esc_html( $welcome_block_link_title ); ?></a>
						<?php
					endif;
					?>
				</div>
			</div>
		</div>
	</div>
</div>
