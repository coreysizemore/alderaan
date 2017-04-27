<?php
	
	/*
		@package WordPress
		@subpackage alderaan
	*/
	 
?>

<nav id="social_nav">
	
	<?php
					
		if( get_field('display_contact_information_top', 'options')):
						
			if( have_rows('office_information', 'options') ):
							
			echo '<ul class="social_info">';
					
				while ( have_rows('office_information', 'options') ) : the_row();
								
					while ( have_rows('social_accounts', 'options') ) : the_row();
							
						if( get_sub_field('social_url', 'options')):
										
							echo '<li><a href="tel:';
											
							the_sub_field('social_url', 'options');
											
							echo '" target="_blank">';
											
							the_sub_field('social_url', 'options');
											
							echo '</a></li>';
											
						endif;
										
					endwhile;
									
				endwhile;
								
				echo '</ul>';
							
			else :
									
			endif;
						
		endif;
						
	?>
	
</nav>