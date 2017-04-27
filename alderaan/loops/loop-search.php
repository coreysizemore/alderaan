<?php
	
	/*
		@package WordPress
		@subpackage alderaan
	*/
	 
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<article class="blog_preview" id="post-<?php the_ID(); ?>">
                                
		<h2 class="entry-title"><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>"><?php csdd_the_title(); ?></a></h2>
		
		<span class="date"><?php echo get_the_date(); ?></span>
	                   
		<?php the_excerpt(); ?>
		
		<span class="edit"><?php edit_post_link(); ?></span>
		
		<hr />
		
		<span class="author"><?php echo get_avatar( get_the_author_meta('ID'), 15); ?> by <?php the_author_posts_link(); ?></span>
		 
	</article>
                        
<?php endwhile; else : ?>

	<p><?php _e( 'Sorry, no posts matched your criteria. Try another search?' ); ?></p>
	
	<div id="another_search">
		
	<form method="get" id="page_searchform" action="<?php bloginfo('url'); ?>">
					
		<input placeholder="Search the website." class="text" type="text" name="s" id="s" />
				
		<input type="submit" class="submit button" name="submit" value="<?php _e('Search');?>" />
			
	</form>
			
</div>
	
<?php endif; ?>

