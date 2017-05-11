<?php
	
	/*
		@package WordPress
		@subpackage New Blank Template
	*/
	 
?>

<div id="logo_footer">
					                
	<?php if ( get_theme_mod( 'themeslug_logo_4' ) ) : ?>
			
		<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo_4' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
		
		<?php if ( get_bloginfo( 'description' ) ) : ?>
		
			<h2 class='site-description'><?php bloginfo( 'description' ); ?></h2>
			
		<?php else : ?>
		
		<?php endif; ?>
			    
	<?php else : ?>
			
		<h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
			        
		 <?php if ( get_bloginfo( 'description' ) ) : ?>
		
			<h2 class='site-description'><?php bloginfo( 'description' ); ?></h2>
			
		<?php else : ?>
		
		<?php endif; ?>
			    
	<?php endif; ?>
				
</div>