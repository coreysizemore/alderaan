<?php
	
	/*
		@package WordPress
		@subpackage alderaan
	*/
	 
?>

<?php if( get_field('footer_type', 'options') == 'standard'): ?>

	<footer>
	
		<div class="container">
			
			<div class="row gutters">
				
				<div class="col_3 first">
		
					<div id="footer_sidebar_1" class="footer_sidebar">
						
					    <?php if ( is_active_sidebar( 'footer-sidebar-1' ) ) : ?> <?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
					            
					    <?php else : ?><p>You need to drag a widget into your sidebar in the WordPress Admin, test.</p>
						
						<?php endif; ?>
						        
					</div>
				
				</div>
				
				<div class="col_3">
					
					<div id="footer_sidebar_2" class="footer_sidebar">
			
					    <?php if ( is_active_sidebar( 'footer-sidebar-2' ) ) : ?> <?php dynamic_sidebar( 'footer-sidebar-2' ); ?>
					            
					    <?php else : ?><p>You need to drag a widget into your sidebar in the WordPress Admin, test.</p>
						
						<?php endif; ?>
						        
					</div>
					
				</div>
				
				<div class="col_3">
					
					<div id="footer_sidebar_3" class="footer_sidebar">
			
					    <?php if ( is_active_sidebar( 'footer-sidebar-3' ) ) : ?> <?php dynamic_sidebar( 'footer-sidebar-3' ); ?>
					            
					    <?php else : ?><p>You need to drag a widget into your sidebar in the WordPress Admin, test.</p>
						
						<?php endif; ?>
						        
					</div>
					
				</div>
				
				<div class="col_3 last">
					
					<div id="footer_sidebar_4" class="footer_sidebar">
			
					    <?php if ( is_active_sidebar( 'footer-sidebar-4' ) ) : ?> <?php dynamic_sidebar( 'footer-sidebar-4' ); ?>
					            
					    <?php else : ?><p>You need to drag a widget into your sidebar in the WordPress Admin, test.</p>
						
						<?php endif; ?>
						        
					</div>
					
				</div>
				
			</div>
			
		</div>
	
	</footer>
	
<?php elseif( get_field('footer_type', 'options') == 'simple'): ?>

	<footer>
		
		<div class="container">
			
			<div class="row gutters">
				
				<div class="col_12">
					
					<?php get_template_part( 'logos/logo', 'footer' ); ?>
					
				</div>
				
			</div>
			
		</div>
		
	</footer>
	
<?php elseif( get_field('footer_type', 'options') == 'none'): ?>

	<!-- please select a footer element -->

<?php endif; ?>
