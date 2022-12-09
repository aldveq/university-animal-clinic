<?php

/**
* @package University_Animal_Clinic
*/

namespace UniversityAnimalClinic\Inc;

use UniversityAnimalClinic\Inc\Traits\Singleton;

class Utilities 
{
	use Singleton;

	public function get_menu_id_by_location($menu_location) 
	{
		$locations = get_nav_menu_locations();
		$menu_id = $locations[$menu_location];
		return $menu_id;
	}

	public function get_menu_items_by_location($menu_location) 
	{
		$navigation_id;

		if ($menu_location == 'header') {
			$navigation_id = $this->get_menu_id_by_location('header-navigation');
		} else {
			$navigation_id = $this->get_menu_id_by_location('footer-navigation');
		}

		$navigation_items = wp_get_nav_menu_items($navigation_id);

		return $navigation_items;
	}

	public function get_second_level_child_menu_items($menu_array, $parent_id) 
	{
		$child_menus = [];

		if (!empty($menu_array) && is_array($menu_array)) {
			foreach ($menu_array as $menu) {
				if (intval($menu->menu_item_parent) === $parent_id) {
					array_push($child_menus, $menu);
				}
			}
		}

		return $child_menus;
	}

	public function get_third_level_child_menu_items($menu_array, $child_menu_items_of_top_nav_item)
	{
		$third_level_child_menus = [];
		$child_menu_items_of_top_nav_item_ids = $this->get_menu_items_ids($child_menu_items_of_top_nav_item);

		if(!empty($menu_array) && is_array($menu_array)) {
			foreach($menu_array as $menu) {
				if(in_array(intval($menu->menu_item_parent), $child_menu_items_of_top_nav_item_ids)):
					array_push($third_level_child_menus, $menu);
				endif;
			}
		}

		return $third_level_child_menus;
	}

	public function get_menu_items_ids($nav_items) 
	{
		$nav_ids = [];

		foreach($nav_items as $nav_item):
			array_push($nav_ids, $nav_item->ID);
		endforeach;

		return $nav_ids;
	}
}