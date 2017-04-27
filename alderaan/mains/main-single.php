<?php
	
	/*
		@package WordPress
		@subpackage alderaan
	*/
	 
?>

<div class="main">
	
	<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<div class="container"><div class="row gutters"><div class="col_12"><div class="breadcrumb_wrapper"><span class="breadcrumbs">','</span></div></div></div></div>');} ?>
	
	<div class="container">
		
		<div class="row gutters">
			
			<div class="col_12">
				
				<div class="content">
	
					<?php get_template_part( 'loops/loop', 'single' ); ?>
					
				</div>
				
			</div>
			
		</div>
	
	</div>
	
	<div class="edit_button">

		<span class="edit"><?php edit_post_link(); ?></span>
	
	</div>
	
</div>

	
	