<?php
/**
* Template part for displaying footer navigation
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package University_Animal_Clinic
*/

$utilities = \UniversityAnimalClinic\Inc\Utilities::get_instance();
$footer_navigation_items = $utilities->get_menu_items_by_location('footer');
?>

<?php
	if(!empty($footer_navigation_items) && is_array($footer_navigation_items)):
		?>
		<ul class="footer-menu">
			<?php
				foreach($footer_navigation_items as $footer_nav_item):
					?>
					<li><a href="<?php echo esc_url($footer_nav_item->url); ?>"><?php echo esc_html($footer_nav_item->title); ?></a></li>
					<?php
				endforeach;
			?>
		</ul>
		<?php
	endif;
?>