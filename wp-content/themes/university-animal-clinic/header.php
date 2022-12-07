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

	<div class="covid-message">
		<div class="container">
			<div class="covid-text">Covid-19 message: University Animal Clinic is always looking out for the safety of
				our clients and staff.
				Please visit our COVID-19 Updates page for more information on our curbside
				check-in process.</div>
			<div class="covid-link">
				<a class="learn-more" href="#">learn more <span class="icon-arrow-right"></span></a>
			</div>
			<a href="javascript:void(0);" class="icon-close removeit"></a>
		</div>
	</div>
	<header class="header">
		<div class="container">
			<div class="header-wrap">
				<div class="header-logo">
					<a href="#">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/logo.png" alt="University Animal Clinic" />
					</a>
				</div>
				<div class="header-right">
					<div class="header-content">
						<div class="call-us"><span>call us today</span> <a href="tel:9413557707">941-355-7707</a></div>
						<div class="online-request">
							<a href="#" class="btn btn-secondary">Online Pharmacy</a>
							<a href="#" class="btn btn-primary">Request an Appointment</a>
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
								<?php get_template_part('template-parts/navigation/nav', 'header'); ?>
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
			<div class="call-us">
				<span>call us </span>
				<a href="tel:9413557707">941-355-7707</a>
			</div>
		</div>
	</header>
