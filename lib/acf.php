<?php
	
	/*
		Advanced Custom Fields
	*/


	if( function_exists('acf_add_options_page') ) {
		
		acf_add_options_page(array(
			'page_title' => 'Theme Settings',
			'menu_title' => 'Theme Settings',
			'menu_slug' => 'theme-settings',
			'capability' => 'edit_posts',
			'parent_slug' => '',
			'position' => false,
			'icon_url' => false,
			'redirect' => false
		));
		
		acf_add_options_sub_page(array(
			'page_title' => 'Business Information',
			'menu_title' => 'Business Information',
			'menu_slug' => 'theme-settings-business-information',
			'capability' => 'edit_posts',
			'parent_slug' => 'theme-settings',
			'position' => false,
			'icon_url' => false
		));
	
	}

?>