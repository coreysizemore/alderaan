<?php
	
	/*
		@package WordPress
		@subpackage alderaan
	*/
	 
?>

<div class="blog_sidebar">
	
	<div class="container">
			
		<div class="row gutters">
			
			<div class="col_6 first">
					
				<div id="blog_sidebar_1" class="blog_sidebars">
		
				    <?php if ( is_active_sidebar( 'blog-sidebar-1' ) ) : ?> <?php dynamic_sidebar( 'blog-sidebar-1' ); ?>
				            
				    <?php else : ?><p>You need to drag a widget into your sidebar in the WordPress Admin</p>
					
					<?php endif; ?>
					
				</div>
				
			</div>
			
			<div class="col_6 last">
				
				<div id="blog_sidebar_2" class="blog_sidebars">
					
					<?php if ( is_active_sidebar( 'blog-sidebar-2' ) ) : ?> <?php dynamic_sidebar( 'blog-sidebar-2' ); ?>
				            
				    <?php else : ?><p>You need to drag a widget into your sidebar in the WordPress Admin</p>
					
					<?php endif; ?>
					
				</div>
				
			</div>
			
		</div>
		        
	</div>
	
</div>
