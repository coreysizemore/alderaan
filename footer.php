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
			
			<div class="col_8 first">
				
				<p><?php echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'alderaan' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); ?> | <a href="<?php echo home_url('wp-admin'); ?>">Admin Login</a> | <span class="designedby">Designed by <a href="http://www.coreysizemore.com" target="_blank">CSDD</a></span></p>
			
			</div>
			
			<div class="col_4 last">
				
				<?php get_template_part( 'navs/nav', 'social-footer' ); ?>
				
			</div>
			
		</div>
		
	</div>
	
</div>

<!-- Fonts & Scripts -->

<link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700&amp;subset=latin-ext" rel="stylesheet">
  	
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;subset=latin-ext" rel="stylesheet">

<link rel="stylesheet" href= "<?php echo get_template_directory_uri(); ?>/icons17/style.css">

<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	
<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
	
<script src="<?php echo get_template_directory_uri(); ?>/js/stellar.min.js"></script>
	
<script src="<?php echo get_template_directory_uri(); ?>/js/scrollfix.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/fancybox/fancybox.min.js"></script>
	
<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.min.js"></script>

<?php wp_footer() ?>
	
</body>
</html>