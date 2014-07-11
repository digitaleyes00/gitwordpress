<?php

/*
 Plugin Name: Bootstrap Plugin
Plugin URI: http://github.com/rhildred/gitwordpress/
Description: A test
Author: Rich Hildred
Version: 1.0
Author URI: http://syndicateme.net/
*/

class BootstrapPlugin{
	static public function getMenu()
	{
		//$sBoot = wp_nav_menu( array( 'menu_class' => 'navbar-collapse collapse', 'items_wrap' => '<ul><li id="item-id">Menu: </li>%3$s</ul>' ) );
	$menu_name = 'short-menu';

if ( ($menu = wp_get_nav_menu_object( $menu_name ) ) && ( isset($menu) ) ) {
	$menu_items = wp_get_nav_menu_items($menu->term_id);
	$menu_list = '<ul id="menu-' . $menu_name . '">';

	foreach ( (array) $menu_items as $key => $menu_item ) {
		$title = $menu_item->title;
		$url = $menu_item->url;
		$menu_list .= '<li><a href="' . $url . '">' . $title . '</a></li>';
	}

	$menu_list .= '</ul>';

} else {

	$menu_list = '<ul><li>Menu "' . $menu_name . '" not defined.</li></ul>';
}
	}

}

?>