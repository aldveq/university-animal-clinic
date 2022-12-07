<?php
/**
* Template part for displaying header navigation
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package University_Animal_Clinic
*/

$utilities = \UniversityAnimalClinic\Inc\Utilities::get_instance();
$header_navigation_items = $utilities->get_menu_items_by_location('header');
?>

<?php
	if(!empty($header_navigation_items) && is_array($header_navigation_items)):
		?>
		<ul class="navbar-nav">
			<?php
				foreach ($header_navigation_items as $h_nav_item):
					if(!$h_nav_item->menu_item_parent): // If is not a child item
						$second_level_menu_items = $utilities->get_second_level_child_menu_items($header_navigation_items, $h_nav_item->ID);
						$third_level_menu_items = $utilities->get_third_level_child_menu_items($header_navigation_items, $second_level_menu_items);

						if(empty($second_level_menu_items) && empty($third_level_menu_items)): // Simple Menu Item
							?>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo esc_url($h_nav_item->url); ?>"><?php echo esc_html($h_nav_item->title); ?></a>
							</li>
							<?php
						elseif(!empty($second_level_menu_items) && empty($third_level_menu_items)): // Menu Item With Second Level Sub Menu
							?>
							<li class="nav-item">
								<a class="nav-link dropdown-toggle" href="<?php echo esc_url($h_nav_item->url); ?>" data-toggle="dropdown"><?php echo esc_html($h_nav_item->title); ?></a>
								<ul class="submenu dropdown-menu">
									<?php
										foreach ($second_level_menu_items as $second_level_child_item):
											?>
											<li class="nav-item">
												<a class="nav-link" href="<?php echo esc_url($second_level_child_item->url)?>"><?php echo esc_html($second_level_child_item->title); ?></a>
											</li>
											<?php
										endforeach;
									?>
								</ul>
							</li>
							<?php
						elseif(!empty($second_level_menu_items) && !empty($third_level_menu_items)): // Menu Item With Third Level Sub Menu
							?>
							<li class="nav-item">
								<a class="nav-link dropdown-toggle" href="<?php echo esc_url($h_nav_item->url); ?>" data-toggle="dropdown"><?php echo esc_html($h_nav_item->title); ?></a>
								<ul class="submenu dropdown-menu">
									<?php
										foreach($second_level_menu_items as $second_level_child_item):
											$second_level_child_item_id = $second_level_child_item->ID;
											$belong_third_level_items_to_second_level_items_submenu = false;
											?>
											<li class="nav-item">
												<a class="nav-link" href="<?php echo esc_url($second_level_child_item->url)?>"><?php echo esc_html($second_level_child_item->title); ?></a>
												<?php
													foreach($third_level_menu_items as $third_level_menu_item):
														if($third_level_menu_item->menu_item_parent == $second_level_child_item_id):
															$belong_third_level_items_to_second_level_items_submenu = true;
														endif;
													endforeach;

													if($belong_third_level_items_to_second_level_items_submenu):
														?>
															<ul class="submenu dropdown-menu">
															<?php
																foreach($third_level_menu_items as $third_level_menu_item):
																?>
																<li class="nav-item"><a class="nav-link" href="<?php echo esc_url($third_level_menu_item->url); ?>"><?php echo esc_html($third_level_menu_item->title); ?></a></li>
																<?php
																endforeach;
															?>
															</ul>	
														<?php
													endif;
												?>
											</li>
											<?php
										endforeach;
									?>
								</ul>
							</li>
							<?php
						endif;
					endif;
				endforeach;
			?>
		</ul>
		<?php
	endif;
?>