<?php

/**
* @package University_Animal_Clinic
*/

namespace UniversityAnimalClinic\Inc;

use UniversityAnimalClinic\Inc\Traits\Singleton;

class Acf_Json_Registration 
{
    use Singleton;

    protected function __construct() 
	{
        $this->setup_hooks();   
    }

    protected function setup_hooks() 
	{
        // Actions & Filters
        add_filter('acf/settings/save_json', [$this, 'acf_json_save_point']);
        add_filter('acf/settings/load_json', [$this, 'acf_json_load_point']);
    }

    // ACF Json Registration 
    public function acf_json_save_point($path) 
	{    
        // Update path
        $path = get_template_directory() . '/inc/acf-json';
        // Return path
        return $path;   
    }

    /**
     * Register the path to load the ACF json files so that they are version controlled.
     * @param $paths The default relative path to the folder where ACF saves the files.
     * @return string The new relative path to the folder where we are saving the files.
     */
    public function acf_json_load_point($paths) 
	{
        // Remove original path
        unset($paths[0]);// Append our new path
        $paths[] = get_template_directory() . '/inc/acf-json';   
		return $paths;
    }
}