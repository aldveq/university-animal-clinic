<?php

/**
* @package University_Animal_Clinic
*/

namespace UniversityAnimalClinic\Inc;

use UniversityAnimalClinic\Inc\Traits\Singleton;
use \WP_Query;

class Post_Types_Queries 
{
    use Singleton;

    public function get_services_post_type_data($device) 
	{

		$services_post_data = [];

        $services_query = new WP_Query(array(
			'post_type' => 'services',
			'posts_per_page' => -1,
            'orderby' => 'date',
            'no_found_rows' => true,
		));
        
        if ( $services_query->have_posts() ) {
            while ( $services_query->have_posts() ) {
                $services_query->the_post();

                $service_obj = (object) array(
                    'image_url' => wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())),
                    'image_alt_text' => get_the_title(),
                    'title' => get_the_title(),
					'icon_type' => get_field('services_post_type_icon_type', get_the_ID()),
                    'link' => get_the_permalink(),
                );

                array_push($services_post_data, $service_obj);
            }
        }
        
        wp_reset_postdata();

		if($device === 'desktop'):
			return array_chunk($services_post_data, 4);
		else:
        	return $services_post_data;
		endif;

    }

	public function get_doctors_post_type_data() 
	{

		$doctors_post_data = [];

        $doctors_query = new WP_Query(array(
			'post_type' => 'doctors',
			'posts_per_page' => -1,
            'orderby' => 'date',
            'no_found_rows' => true,
		));
        
        if ( $doctors_query->have_posts() ) {
            while ( $doctors_query->have_posts() ) {
                $doctors_query->the_post();

                $doctor_obj = (object) array(
                    'image_url' => wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())),
                    'image_alt_text' => get_the_title(),
                    'title' => get_the_title(),
                    'link' => get_the_permalink(),
                );

                array_push($doctors_post_data, $doctor_obj);
            }
        }
        
        wp_reset_postdata();

        return $doctors_post_data;
    }

	public function get_recent_post_data()
	{
		$recent_post_obj;

		$recent_post_query = new WP_Query(array(
			'post_type' => 'post',
			'posts_per_page' => 1,
            'orderby' => 'date',
            'no_found_rows' => true,
		));
        
        if ( $recent_post_query->have_posts() ) {
            while ( $recent_post_query->have_posts() ) {
                $recent_post_query->the_post();

                $recent_post_obj = (object) array(
                    'image_url' => wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())),
                    'image_alt_text' => get_the_title(),
                    'title' => get_the_title(),
					'excerpt' => get_the_excerpt(),
                    'link' => get_the_permalink(),
                );
            }
        }
        
        wp_reset_postdata();

		return $recent_post_obj;
	}
}