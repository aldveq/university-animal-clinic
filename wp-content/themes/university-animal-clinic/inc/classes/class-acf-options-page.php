<?php

/**
 * @package University_Animal_Clinic
 */

namespace UniversityAnimalClinic\Inc;

use UniversityAnimalClinic\Inc\Traits\Singleton;

class Acf_Options_Page
{
	use Singleton;

	protected function __construct()
	{
		// Actions & Filters
		$this->setup_hooks();
	}

	protected function setup_hooks()
	{
		add_action('admin_menu', [$this, 'add_single_menu_page']);
		add_action('acf/init', [$this, 'register_acf_options_page']);
	}

	public function add_single_menu_page()
	{
		add_menu_page('Theme Settings', 'Theme Settings', 'manage_options', 'theme-settings', null, 'dashicons-admin-generic', 80);
	}

	public function register_acf_options_page()
	{
		if (function_exists('acf_add_options_page')) {
			acf_add_options_page(array(
				'page_title'    => 'General',
				'menu_title'    => 'General',
				'menu_slug'     => 'theme-settings',
				'capability'    => 'edit_posts',
				'redirect'      => false,
				'parent_slug' => 'theme-settings',
			));

			acf_add_options_page(array(
				'page_title'    => 'Header',
				'menu_title'    => 'Header',
				'menu_slug'     => 'header-settings',
				'capability'    => 'edit_posts',
				'redirect'      => false,
				'parent_slug' => 'theme-settings',
			));

			acf_add_options_page(array(
				'page_title'    => 'Footer',
				'menu_title'    => 'Footer',
				'menu_slug'     => 'footer-settings',
				'capability'    => 'edit_posts',
				'redirect'      => false,
				'parent_slug' => 'theme-settings',
			));
		}
	}
}
