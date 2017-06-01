<?php
	
	/*
		@package WordPress
		@subpackage alderaan
	*/
	 
?>

<a href="#" id="mobileopen"><span class="icon icon-menu"></span></a>

<nav id="mobile_nav">
	
	<div class="mobile_nav_wrapper">
	
		<a href="#" id="mobileclose"><span class="icon icon-close"></span></a>
		
		<nav id="main_nav">
		
			<?php wp_nav_menu( array( 'theme_location' => 'primary_nav' ) ); ?>
			
		</nav>
		
		<div id="mobile_search">
			
			<form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
						
				<input placeholder="Search the website." class="text" type="text" name="s" id="s" />
					
				<input type="submit" class="submit button" name="submit" value="<?php _e('Search');?>" />
				
			</form>
				
		</div>
		
		<?php get_template_part( 'navs/nav', 'social-mobile' ); ?>
	
	</div>
	
</nav>