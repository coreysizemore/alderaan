<?php
	
	/*
		@package WordPress
		@subpackage alderaan
	*/
	 
?>

<div class="main coloredbg">
	
	<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<div class="container"><div class="row gutters"><div class="col_12"><div class="breadcrumb_wrapper"><span class="breadcrumbs">','</span></div></div></div></div>');} ?>
	
	<div class="container">
		
		<div class="row gutters">
			
			<div class="col_12">
				
				<div class="content">
	
					<?php get_template_part( 'loops/loop', 'search' ); ?>
					
				</div>
				
			</div>
			
		</div>
	
	</div>
	
</div>
	
	