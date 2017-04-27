<?php
	
	/*
		@package WordPress
		@subpackage alderaan
	*/
	 
?>

<?php if ( is_active_sidebar( 'announcement-sidebar' ) ) : ?>

	<div class="appointment">
	
		<div id="announcement_sidebar">
			
			<?php dynamic_sidebar( 'announcement-sidebar' ); ?>
			        
		</div>
	
	</div>

<?php else : ?>

	<!-- You need to drag a widget into your sidebar in the WordPress Admin -->
	
<?php endif; ?>
