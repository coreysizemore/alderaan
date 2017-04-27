<?php
	
	/*
		@package WordPress
		@subpackage alderaan
	*/
	 
?>

<a href="#" id="searchopen"><span class="icon icon-search"></span></a>

<div id="search">

	<a href="#" id="searchclose"><span class="icon icon-close"></span></a>
	
	<form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
		
		<span class="icon icon-search"></span>
			
		<input placeholder="Search the website." class="text" type="text" name="s" id="s" />
		
		<input type="submit" class="submit button" name="submit" value="<?php _e('Search');?>" />
	
	</form>

</div>