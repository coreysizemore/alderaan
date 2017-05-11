<?php
	
	/*
		@package WordPress
		@subpackage alderaan
	*/
	 
?>

<?php if ( is_active_sidebar( 'appointment-sidebar' ) ) : ?>

	<div class="appointment">
	
		<div id="appointment_sidebar">
			
			<?php dynamic_sidebar( 'appointment-sidebar' ); ?>
			        
		</div>
	
	</div>

<?php else : ?>

	<!-- You need to drag a widget into your sidebar in the WordPress Admin -->
	
<?php endif; ?>
