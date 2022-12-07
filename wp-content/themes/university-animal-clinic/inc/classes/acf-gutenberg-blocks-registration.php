<?php

/**
* @package University_Animal_Clinic
*/

namespace UniversityAnimalClinic\Inc;

use UniversityAnimalClinic\Inc\Traits\Singleton;

class Acf_Gutenberg_Blocks_Registration 
{
    use Singleton;

    protected function __construct() 
	{
        // Actions & Filters
        $this->setup_hooks();
    }

    protected function setup_hooks() 
	{
        add_filter('block_categories', [$this, 'add_block_categories'], 10, 2);
        add_action('acf/init', [$this, 'register_acf_block_type']);
    }

    /**
     * Register Custom Category for ACF Blocks & global constants
     */

    public function add_block_categories($categories, $post) 
	{
        return array_merge(
            $categories,
            array(
                array(
                    'slug'  => 'university-animal-clinic-blocks',
                    'title' => esc_html__( 'University Animal Clinic Blocks', 'university-animal-clinic' ),
                ),
            )
        );
    }

    public function register_acf_block_type() 
	{
        // Check if function exists and hook into setup.
        if(function_exists('acf_register_block_type')) 
		{
            foreach(glob(get_template_directory() . '/inc/acf-blocks/*.php') as $acf_settings):
                @include_once $acf_settings;
            endforeach;
        }
    
    }
}