<?php
	
	/*
		Default wordpress functions
	*/
	
	//Enqueue scripts and styles.
	function csdd_scripts() 
	{	
		wp_enqueue_style( 'google-font-one', 'https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700&amp;subset=latin-ext' );
		
		wp_enqueue_style( 'google-font-two', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;subset=latin-ext' );
		
		wp_enqueue_style( 'csdd-icons', get_template_directory_uri() . '/icons17/style.css' );
		
		wp_enqueue_style( 'csdd-style', get_stylesheet_uri() );
		
		wp_enqueue_style( 'csdd-styles', get_template_directory_uri() . '/css/styles.css' );
		
		wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/fancybox/fancybox.css' );
		
		wp_enqueue_script( 'latest-jquery', 'http://code.jquery.com/jquery-latest.min.js' );
		
		wp_enqueue_script( 'latest-jquery-add', 'http://code.jquery.com/ui/1.12.1/jquery-ui.min.js' );
		
		wp_enqueue_script( 'scroll-fix', get_template_directory_uri() . '/js/scrollfix.min.js' );
		
		wp_enqueue_script( 'stellar', get_template_directory_uri() . '/js/stellar.min.js' );
		
		wp_enqueue_script( 'slides', get_template_directory_uri() . '/js/slides.min.js' );
		
		wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/fancybox/fancybox.min.js' );
	
		wp_enqueue_script( 'csdd-scripts', get_template_directory_uri() . '/js/scripts.min.js' );
	}
	
	add_action( 'wp_enqueue_scripts', 'csdd_scripts' );

	// register menus
	function register_my_menus() {
	  register_nav_menus(
	    array(
	      'primary_nav' => __( 'Primary' ),
	      'home_page_nav' => __( 'Home Page' )
	    )
	  );
	}
	add_action( 'init', 'register_my_menus' );
	
	// Changing excerpt length
	function new_excerpt_length($length) {
		return 20;
	}
	add_filter('excerpt_length', 'new_excerpt_length');
	
	// Changing excerpt more
	function new_excerpt_more($more) {
	return '...';
	}
	add_filter('excerpt_more', 'new_excerpt_more');
	
	//This theme uses post thumbnails
	add_theme_support( 'post-thumbnails' );
	
	//Apply do_shortcode() to widgets so that shortcodes will be executed in widgets
	add_filter('widget_text', 'do_shortcode');
	
	//remove admin bar for anyone not an admin
	function remove_admin_bar() {

		if (!current_user_can('administrator') && !is_admin()) {
			show_admin_bar(false);
		}
	}
	add_action('after_setup_theme', 'remove_admin_bar');
	
	add_action( 'wp_enqueue_scripts', 'myphpinformation_scripts' );
	
?>