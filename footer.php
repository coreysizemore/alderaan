<?php
	
	/*
		@package WordPress
		@subpackage alderaan
	*/
	 
?>
	
<?php get_template_part( 'sidebars/sidebar' , 'footer' ); ?>

<div class="copyright">
	
	<div class="container">
		
		<div class="row gutters">
			
			<div class="col_8">
				
				<p><?php echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'alderaan' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); ?> | <a href="<?php echo home_url('wp-admin'); ?>">Admin Login</a> | <span class="designedby">Designed by <a href="http://www.coreysizemore.com" target="_blank">CSDD</a></span></p>
			
			</div>
			
			<div class="col_4">
				
				<?php get_template_part( 'navs/nav', 'social-footer' ); ?>
				
			</div>
			
		</div>
		
	</div>
	
</div>

<?php wp_footer() ?>
	
</body>
</html>