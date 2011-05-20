<?php
/*
Plugin Name: MU Admin Bar Shortcuts
Plugin URI: http://www.spiderwebpress.com
Description: Quick Access to Install &amp; Manage Network Plugins &amp; Themes
Version: 1.0
Author: Kezz Bracey
Author URI: http://www.spiderwebpress.com
*/

function muabar_admin_bar() {
	global $wp_admin_bar;
	if ( !is_super_admin() || !is_admin_bar_showing() )
		return;
			$wp_admin_bar->add_menu( array(
			'id' => 'muabar_menu',
			'title' => __( 'MU Admin Shortcuts'),
			'href' => FALSE ) );
			$wp_admin_bar->add_menu( array(
			'parent' => 'muabar_menu',
			'id' => 'muabar_install_plugin',
			'title' => __( 'Install Network Plugin'),
			'href' => network_admin_url( 'plugin-install.php') ) );
			$wp_admin_bar->add_menu( array(
			'parent' => 'muabar_menu',
			'id' => 'muabar_install_theme',
			'title' => __( 'Install Network Theme'),
			'href' => network_admin_url( 'theme-install.php') ) );
			$wp_admin_bar->add_menu( array(
			'parent' => 'muabar_menu',
			'id' => 'muabar_manage_plugin',
			'title' => __( 'Manage Network Plugins'),
			'href' => network_admin_url( 'plugins.php') ) );
			$wp_admin_bar->add_menu( array(
			'parent' => 'muabar_menu',
			'id' => 'muabar_manage_theme',
			'title' => __( 'Manage Network Themes'),
			'href' => network_admin_url( 'themes.php') ) );
}
add_action( 'wp_before_admin_bar_render', 'muabar_admin_bar' );

?>