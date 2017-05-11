<?php
	
	/*
		@package WordPress
		@subpackage alderaan
	*/
	 
?>

<?php while ( have_posts() ) : the_post(); ?>

	<article class="blog_entry" id="post-<?php the_ID(); ?>">
                                
		<h1 class="entry_title"><?php csdd_the_title(); ?></h1>
		
		<div class="meta">
		
			<span class="date"><?php echo get_the_date(); ?></span><span class="sep"> | </span><span class="category"><?php the_category( ', ' ); ?></span><span class="sep"> | </span><span class="author">by <?php the_author_posts_link(); ?></span>
		
		</div>
			                   
		<?php the_content(); ?>
		
		<div class="tagcloud"><?php the_tags('','',''); ?></div>	
		 
	</article>
                        
<?php endwhile; ?>