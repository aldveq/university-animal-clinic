<?php

/**
 * @package University_Animal_Clinic
 */

namespace UniversityAnimalClinic\Inc;

use UniversityAnimalClinic\Inc\Traits\Singleton;

class University_Animal_Clinic_Theme
{
	use Singleton;

	protected function __construct()
	{
		// Loading Classes
		Assets::get_instance();
		Acf_Json_Registration::get_instance();
		Acf_Gutenberg_Blocks_Registration::get_instance();
		Acf_Options_Page::get_instance();
		Utilities::get_instance();
		Post_Types_Queries::get_instance();

		// Actions & Filters
		$this->setup_hooks();
	}

	public function setup_hooks()
	{
		add_action('after_setup_theme', [$this, 'university_animal_clinic_setup']);
		add_action('after_setup_theme', [$this, 'university_animal_clinic_content_width'], 0);
		add_action('widgets_init', [$this, 'university_animal_clinic_widgets_init']);
		add_action('enqueue_block_editor_assets', [$this, 'university_animal_clinic_editor_block_assets']);
	}

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	public function university_animal_clinic_setup()
	{
		/*
			* Make theme available for translation.
			* Translations can be filed in the /languages/ directory.
			* If you're building a theme based on University Animal Clinic, use a find and replace
			* to change 'university-animal-clinic' to the name of your theme in all the template files.
			*/
		load_theme_textdomain('university-animal-clinic', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
			* Let WordPress manage the document title.
			* By adding theme support, we declare that this theme does not use a
			* hard-coded <title> tag in the document head, and expect WordPress to
			* provide it for us.
			*/
		add_theme_support('title-tag');

		/*
			* Enable support for Post Thumbnails on posts and pages.
			*
			* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
			*/
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'header-navigation' => esc_html__('Header Navigation', 'university-animal-clinic'),
				'footer-navigation' => esc_html__('Footer Navigation', 'university-animal-clinic'),
			)
		);

		add_theme_support('align-wide');

		/*
			* Switch default core markup for search form, comment form, and comments
			* to output valid HTML5.
			*/
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'university_animal_clinic_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}

	/**
	 * Set the content width in pixels, based on the theme's design and stylesheet.
	 *
	 * Priority 0 to make it available to lower priority callbacks.
	 *
	 * @global int $content_width
	 */
	public function university_animal_clinic_content_width()
	{
		$GLOBALS['content_width'] = apply_filters('university_animal_clinic_content_width', 640);
	}

	/**
	 * Register widget area.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
	 */
	public function university_animal_clinic_widgets_init()
	{
		register_sidebar(
			array(
				'name'          => esc_html__('Sidebar', 'university-animal-clinic'),
				'id'            => 'sidebar-1',
				'description'   => esc_html__('Add widgets here.', 'university-animal-clinic'),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h2 class="widget-title">',
				'after_title'   => '</h2>',
			)
		);
	}

	public function university_animal_clinic_editor_block_assets()
	{
		wp_enqueue_style('university-animal-clinic-block-style-bundle', get_template_directory_uri() . '/build/style-index.css', array(), _S_VERSION);
		wp_enqueue_style('university-animal-clinic-block-editor-styles', get_template_directory_uri() . '/editor/style.css', array(), _S_VERSION);
	}
}
