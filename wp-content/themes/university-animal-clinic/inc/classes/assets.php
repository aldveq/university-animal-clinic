<?php

/**
* @package University_Animal_Clinic
*/

namespace UniversityAnimalClinic\Inc;

use UniversityAnimalClinic\Inc\Traits\Singleton;

class Assets 
{
	use Singleton;

	protected function __construct() 
	{
		// Actions & Filters
		$this->setup_hooks();
	}

	public function setup_hooks() 
	{
		add_action('wp_enqueue_scripts', [$this, 'university_animal_clinic_scripts']);
	}

	/**
	* Enqueue scripts and styles.
	*/
	public function university_animal_clinic_scripts() 
	{
		wp_enqueue_style( 'university-animal-clinic-style', get_stylesheet_uri(), array(), _S_VERSION );
		wp_style_add_data( 'university-animal-clinic-style', 'rtl', 'replace' );

		wp_enqueue_script( 'university-animal-clinic-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
}