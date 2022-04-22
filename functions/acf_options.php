<?php

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(
		array(
			'page_title' 	=> 'Website Options',
			'menu_title' 	=> 'Website Options',
			'menu_slug' 	=> 'website-options',
			'capability' 	=> 'edit_posts', 
			'icon_url' 		=> 'dashicons-admin-settings',
			'position'		=> 99
		)
	);
};