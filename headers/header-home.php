<?php
	
	/*
		@package WordPress
		@subpackage alderaan
	*/
	 
?>

<?php if( get_field('display_search', 'options')): ?>

	<?php get_search_form(); ?>

<?php endif; ?>

<?php
	
	if( get_field('member_login_bar', 'options') ):
	
		if(is_user_logged_in()):
		
			$current_user = wp_get_current_user();
			$display_name = $current_user->display_name;
			$username = $current_user->user_login;
				 
			if($display_name):
				 
				echo '<div id="loginbar"><div class="container"><div class="row gutters"><div class="col_12"><div class="username"><span>Logged in as <span>';
				 
				echo $display_name;
				 	
				echo '</span><a href="';
				
				echo wp_logout_url( home_url() );
				
				echo '">Logout</a><span></div></div></div></div></div>';
				 	
			elseif($username):
				 
				echo '<div id="loginbar"><div class="container"><div class="row gutters"><div class="col_12"><div class="username"><span>';
				 
				echo $username;
				 	
				echo '<span></div></div></div></div></div>';
				 
			else:	
				 	
			endif;
		
		else:
		
			echo '<div id="loginbar"><div class="container"><div class="row gutters"><div class="col_12"><div class="username"><span><a href="';
			
			echo home_url('wp-admin');
				
			echo '">Member Login</a><span></div></div></div></div></div>';
			
		endif;
	
	endif;
		 
?>

<?php

	if( get_field('home_selection', 'options') == 'full' ):
	
		echo '<header data-stellar-background-ratio="0.9" class="header_home home_default_image">';	
			
	elseif( get_field('home_selection', 'options') == 'fixed' ):
		
		echo '<header data-stellar-background-ratio="0.9" class="header_home home_default_image fixed_height">';
		
	elseif( get_field('home_selection', 'options') == 'slide' ):
	
		echo '<header class="header_home home_default_image slideshow"><div id="slideshow_wrapper">';
		
		$slides = get_field('slideshow','options');
		
		$counter = 1;
		
		if( $slides ):
			
			foreach( $slides as $slide ):
			
				echo '<div data-stellar-background-ratio="0.9" class="image_slide slide_' . $counter . '">';
				
				if( $slide['caption'] ):
				
					echo '<div data-stellar-ratio="0.75" class="caption">';
				
					echo $slide['caption'];
					
					echo '</div>';
					
				endif;
				
				echo '</div>';
				
				$counter++;
			
			endforeach;
				
		endif;
		
		echo '</div>';
		
	elseif( get_field('home_selection', 'options') == 'slidefix' ):
	
		echo '<header class="header_home home_default_image slideshow slideshow_fixed"><div id="slideshow_wrapper">';
		
		$slides = get_field('slideshow','options');
		
		$counter = 1;
		
		if( $slides ):
			
			foreach( $slides as $slide ):
			
				echo '<div data-stellar-background-ratio="0.9" class="image_slide slide_' . $counter . '">';
				
				if( $slide['caption'] ):
				
					echo '<div data-stellar-ratio="0.75" class="caption">';
				
					echo $slide['caption'];
					
					echo '</div>';
					
				endif;
				
				echo '</div>';
				
				$counter++;
			
			endforeach;
				
		endif;
		
		echo '</div>';
			
	endif;

?>
	
	<?php get_template_part( 'sidebars/sidebar' , 'contact-information' ); ?>	
	
	<div id="nav_bar">
		
		<div class="container">
			
			<div class="row gutters">
		
				<div class="col_3">
				
					<?php get_template_part( 'logos/logo', 'main' ); ?>
				
				</div>
				
				<div class="col_9">
				
					<?php get_template_part( 'navs/nav', 'main' ); ?>
				
				</div>
				
			</div>
			
		</div>
		
	</div>
	
	<?php if( get_field('home_logo','options')): ?>
	
		<?php if( get_field('home_logo_location', 'options') == 'left' ): ?>
		
			<div id="home_logo" class="home_logo_left" data-stellar-ratio="0.75">
			
		<?php endif; ?>
		
		<?php if( get_field('home_logo_location', 'options') == 'center' ): ?>
		
			<div id="home_logo" class="home_logo_center" data-stellar-ratio="0.75">
			
		<?php endif; ?>
		
		<?php if( get_field('home_logo_location', 'options') == 'right' ): ?>
		
			<div id="home_logo" class="home_logo_right" data-stellar-ratio="0.75">
			
		<?php endif; ?>
			
			<?php get_template_part( 'logos/logo', 'home' ); ?>
			
			<div id="home_page_nav">
				
				<?php wp_nav_menu( array( 'theme_location' => 'home_page_nav' ) ); ?>	
				
			</div>
		
		</div>
	
	<?php endif; ?>
	
</header>

<header class="header_mobile_home home_default_image">
	
	<?php get_template_part( 'navs/nav', 'mobile' ); ?>
	
	<div id="nav_bar">
		
		<div class="container">
			
			<div class="row gutters">
		
				<div class="col_3">
				
					<?php get_template_part( 'logos/logo', 'main' ); ?>
				
				</div>
				
				<div class="col_9">
				
					<?php get_template_part( 'navs/nav', 'main' ); ?>
				
				</div>
				
			</div>
			
		</div>
		
	</div>
	
	<div id="home_logo">
		
		<?php get_template_part( 'logos/logo', 'home' ); ?>
		
		<div id="home_page_nav">
			
			<?php wp_nav_menu( array( 'theme_location' => 'home_page_nav' ) ); ?>
			
		</div>
	
	</div>
	
</header>