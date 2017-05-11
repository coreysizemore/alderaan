<?php
	
	/*
		@package WordPress
		@subpackage alderaan
	*/
	 
?>

<?php while ( have_posts() ) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>">
                                
		<h1 class="entry-title"><?php csdd_the_title(); ?></h1>
	
		<hr class="divider" />
	                   
		<?php the_content("Continue reading " . the_title('', '', false)); ?>
		 
	</article>
                        
<?php endwhile; ?>
