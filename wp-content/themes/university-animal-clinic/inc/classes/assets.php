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
		wp_enqueue_style('university-animal-clinic-google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap');
		wp_enqueue_style('university-animal-clinic-style', get_stylesheet_uri(), array(), _S_VERSION);
		wp_enqueue_style('university-animal-clinic-style-bundle', get_template_directory_uri() . '/build/style-index.css', array(), _S_VERSION);
		wp_style_add_data('university-animal-clinic-style', 'rtl', 'replace');

		wp_enqueue_script('university-animal-clinic-popper', get_template_directory_uri() . '/js/popper.min.js', array('jquery'), _S_VERSION, true);
		wp_enqueue_script('university-animal-clinic-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), _S_VERSION, true);
		wp_enqueue_script('university-animal-clinic-owl-carousel', get_template_directory_uri() . '/js/owl-carousel.min.js', array(), _S_VERSION, true);
		wp_enqueue_script( 'university-animal-clinic-script-bundle', get_template_directory_uri() . '/build/index.js', array('jquery'), _S_VERSION, true );

		if(is_singular() && comments_open() && get_option('thread_comments')) {
			wp_enqueue_script('comment-reply');
		}
	}
}