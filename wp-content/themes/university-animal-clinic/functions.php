<?php
/**
 * University Animal Clinic functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package University_Animal_Clinic
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Autoloaders.
 */
require get_template_directory() . '/inc/helpers/autoloader.php';

function university_animal_clinic_get_theme_instance() {
	\UniversityAnimalClinic\Inc\University_Animal_Clinic_Theme::get_instance();
}
university_animal_clinic_get_theme_instance();
