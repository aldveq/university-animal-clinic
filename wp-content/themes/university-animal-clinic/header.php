<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package University_Animal_Clinic
 */

// Disclaimer Data.
$top_bar_disclaimer_text = get_field( 'top_bar_disclaimer_text', 'option' );
$top_bar_disclaimer_cta  = get_field( 'top_bar_disclaimer_cta', 'option' );

// Phone Data.
$top_bar_phone_label  = get_field( 'top_bar_phone_label', 'option' );
$top_bar_phone_number = get_field( 'top_bar_phone_number', 'option' );

// Primary & Secondary CTA Data.
$top_bar_primary_cta   = get_field( 'top_bar_primary_cta', 'option' );
$top_bar_secondary_cta = get_field( 'top_bar_secondary_cta', 'option' );

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'university-animal-clinic' ); ?></a>

	<?php
	if ( ! empty( $top_bar_disclaimer_text ) && ! empty( $top_bar_disclaimer_cta ) ) :
		$top_bar_disclaimer_cta_url    = $top_bar_disclaimer_cta['url'];
		$top_bar_disclaimer_cta_title  = $top_bar_disclaimer_cta['title'];
		$top_bar_disclaimer_cta_target = $top_bar_disclaimer_cta['target'] ? '_blank' : '_self';
		?>
			<div class="covid-message">
				<div class="container">
					<div class="covid-text"><?php echo wp_kses_post( wpautop( $top_bar_disclaimer_text ) ); ?></div>
					<div class="covid-link">
						<a class="learn-more" href="<?php echo esc_url( $top_bar_disclaimer_cta_url ); ?>" target="<?php echo esc_attr( $top_bar_disclaimer_cta_target ); ?>"><?php echo esc_html( $top_bar_disclaimer_cta_title ); ?> <span class="icon-arrow-right"></span></a>
					</div>
					<a href="javascript:void(0);" class="icon-close removeit"></a>
				</div>
			</div>
			<?php
		endif;
	?>

	<header class="header">
		<div class="container">
			<div class="header-wrap">
				<?php 
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					
				if ( ! empty( $custom_logo_id ) ) :
					$custom_logo_url = wp_get_attachment_image_url( $custom_logo_id, 'full' );     
					$custom_logo_alt = get_post_meta( $custom_logo_id, '_wp_attachment_image_alt', true );
					?>
						<div class="header-logo">
							<a href="<?php echo esc_url( home_url() ); ?>">
								<img src="<?php echo esc_url( $custom_logo_url ); ?>" alt="<?php echo esc_attr( $custom_logo_alt ); ?>" />
							</a>
						</div>
						<?php
					endif;
				?>
				<div class="header-right">
					<div class="header-content">
						<?php
						if ( ! empty( $top_bar_phone_label ) && ! empty( $top_bar_phone_number ) ) :
							?>
								<div class="call-us"><span><?php echo esc_html( $top_bar_phone_label ); ?></span> <a href="tel:<?php echo esc_attr( $top_bar_phone_number ); ?>"><?php echo esc_html( $top_bar_phone_number ); ?></a></div>
								<?php
							endif;
						?>
						<div class="online-request">
							<?php
							if ( ! empty( $top_bar_primary_cta ) ) :
								$top_bar_primary_cta_url    = $top_bar_primary_cta['url'];
								$top_bar_primary_cta_title  = $top_bar_primary_cta['title'];
								$top_bar_primary_cta_target = $top_bar_primary_cta['target'] ? '_blank' : '_self';
								?>
									<a href="<?php echo esc_url( $top_bar_primary_cta_url ); ?>" target="<?php echo esc_attr( $top_bar_primary_cta_target ); ?>" class="btn btn-secondary"><?php echo esc_html( $top_bar_primary_cta_title ); ?></a>
									<?php
								endif;
				
							if ( ! empty( $top_bar_secondary_cta ) ) :
								$top_bar_secondary_cta_url    = $top_bar_secondary_cta['url'];
								$top_bar_secondary_cta_title  = $top_bar_secondary_cta['title'];
								$top_bar_secondary_cta_target = $top_bar_secondary_cta['target'] ? '_blank' : '_self';
								?>
									<a href="<?php echo esc_url( $top_bar_secondary_cta_url ); ?>" target="<?php echo esc_attr( $top_bar_secondary_cta_target ); ?>" class="btn btn-primary"><?php echo esc_html( $top_bar_secondary_cta_title ); ?></a>
									<?php
								endif;
							?>
						</div>
					</div>
					<div class="header-bottom">
						<nav class="navbar navbar-expand-lg navbar-light">
							<button class="navbar-toggler" type="button" data-toggle="collapse"
								data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
								aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon">
									<span></span>
									<span></span>
									<span></span>
								</span>
								<span class="menu-text">Menu</span>
							</button>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<?php get_template_part( 'template-parts/navigation/nav', 'header' ); ?>
							</div>
						</nav>
						<div class="header-search">
							<a href="javascript:void(0);" class="icon-search"></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="searchbar">
			<div class="container">
				<div class="searchbar-inner">
					<input type="text" class="form-control" placeholder="Search here..." />
					<button type="submit" class="btn search-btn icon-search"></button>
				</div>
			</div>
		</div>

		<div class="mobile-bottom-header">
		<?php
		if ( ! empty( $top_bar_phone_label ) && ! empty( $top_bar_phone_number ) ) :
			?>
				<div class="call-us">
					<span><?php echo esc_html( $top_bar_phone_label ); ?></span>
					<a href="tel:<?php echo esc_attr( $top_bar_phone_number ); ?>"><?php echo esc_html( $top_bar_phone_number ); ?></a>
				</div>
				<?php
			endif;
		?>
		</div>
	</header>
