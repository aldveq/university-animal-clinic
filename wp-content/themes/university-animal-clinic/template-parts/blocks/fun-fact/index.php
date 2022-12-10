<?php
/**
 * Fun Fact Block Template.
 *
 * @package University_Animal_Clinic
 */

$fun_fact_tagline                  = get_field( 'fun_fact_tagline' );
$fun_fact_title                    = get_field( 'fun_fact_title' );
$fun_fact_background_pattern_shape = get_field( 'fun_fact_background_pattern_shape' );
$fun_fact_background_pattern_url   = ! empty( $fun_fact_background_pattern_shape ) ? $fun_fact_background_pattern_shape['url'] : '';
?>
<div class="fun-fact line-bg" style="background-image: url(<?php echo esc_url( $fun_fact_background_pattern_url ); ?>); background-repeat: repeat;">
	<div class="container">
		<?php
		if ( ! empty( $fun_fact_tagline ) ) :
			?>
			<div class="fun-friday">
			<?php echo esc_html( $fun_fact_tagline ); ?>
			<?php
			if ( ! empty( $fun_fact_title ) ) :
				?>
					<span class="friday-label"><?php echo esc_html( $fun_fact_title ); ?></span>
				<?php
			endif;
			?>
			</div>
			<?php
		endif;
		?>
		<?php
		if ( have_rows( 'fun_facts_data' ) ) :
			?>
			<div class="fun-fact-owl owl-carousel">
			<?php
			while ( have_rows( 'fun_facts_data' ) ) :
				the_row();
				$image         = get_sub_field( 'image' );
				$youtube_url   = get_sub_field( 'youtube_url' );
				$content       = get_sub_field( 'content' );
				$fun_fact_link = get_sub_field( 'link' );
				?>
					<div class="item">
				<?php
				if ( ! empty( $image ) && ! empty( $youtube_url ) ) :
					$image_url = $image['url'];
					$image_alt = $image['alt'];
					?>
							<div class="fun-image">
								<img src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_attr( $image_alt ); ?>">
								<a class="play-icon icon-youtube" href="<?php echo esc_url( $youtube_url ); ?>" data-lity></a>
							</div>
					<?php
				endif;
				?>
				<?php
				if ( ! empty( $content ) ) :
					?>
							<div class="fun-content">
					<?php echo wp_kses_post( wpautop( $content ) ); ?>
					<?php
					if ( ! empty( $fun_fact_link ) ) :
						$link_url    = $fun_fact_link['url'];
						$link_title  = $fun_fact_link['title'];
						$link_target = $fun_fact_link['target'];
						?>
									<a class="btn btn-primary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						<?php
					endif;
					?>
							</div>
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
