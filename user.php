<?php
	
	/*
		@package WordPress
		@subpackage alderaan
	*/
	 
?>

<div id="user">

<?php if ( is_user_logged_in() ) { ?>
	
		<a href="<?php echo wp_logout_url(); ?>">Logout</a>
		
<?php
		
	global $current_user;
	
	get_currentuserinfo();
	
	echo 'You are logged in as: &nbsp;<a href="#">' . $current_user->user_login . '</a>';
	
	} else {
		
?>
	    
	<a href="#">Sign In</a>

<?php }; ?>

</div>