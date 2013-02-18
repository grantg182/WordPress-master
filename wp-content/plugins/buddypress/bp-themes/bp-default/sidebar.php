<?php do_action( 'bp_before_sidebar' ); ?>

<div id="sidebar" role="complementary">

	<div id="sidebarOfficeInfo" class="padder">
		<h2>Clinical Hours</h2>
		<h5>Monday - Friday: 8AM to 5PM<br>
			AFTER HOURS - By appointment*<br>
			CLOSED: 12-1PM for lunch<br>
			*Call office to page us instantly.
		</h5>
	</div>

	<div id="sidebarSoc" class="padder"><a href="http://facebook.com/westcaldwellhealthcouncil" target="_blank">Facebook</a><a href="http://twitter.com/westcaldwellhealthcouncil" target="_blank">Twitter</a><a href="http://youtube.com/users/westcaldwellhealthcouncil" target="_blank">YouTube</a><a href="http://localhost/feed" target="_blank">RSS</a></div>
	
	<div id="sidebarNonMem" class="padder">
		<?php printf( __( '<a href="%s" title="Create an account"><h4><span>Register</span><em> to stay tuned,</em></h4></a>', 'buddypress' ), bp_get_signup_page() ); ?>
		<a id="sidebarLoginToggler"><em>or </em><span>Login</span><em>.</em></a></div>

	
	

	
	
	
	
	<div id="sidebarLogin" class="padder">

	<?php do_action( 'bp_inside_before_sidebar' ); ?>

	<?php if ( is_user_logged_in() ) : ?>

		<?php do_action( 'bp_before_sidebar_me' ); ?>

		<div id="sidebar-me">
			<a href="<?php echo bp_loggedin_user_domain(); ?>">
				<?php bp_loggedin_user_avatar( 'type=thumb&width=40&height=40' ); ?>
			</a>

			<h4><?php echo bp_core_get_userlink( bp_loggedin_user_id() ); ?></h4>
			<a class="button logout" href="<?php echo wp_logout_url( wp_guess_url() ); ?>"><?php _e( 'Log Out', 'buddypress' ); ?></a>

			<?php do_action( 'bp_sidebar_me' ); ?>
		</div>

		<?php do_action( 'bp_after_sidebar_me' ); ?>

		<?php if ( bp_is_active( 'messages' ) ) : ?>
			<?php bp_message_get_notices(); /* Site wide notices to all users */ ?>
		<?php endif; ?>

	<?php else : ?>

		<?php do_action( 'bp_before_sidebar_login_form' ); ?>

		<?php if ( bp_get_signup_allowed() ) : ?>
		
			<p id="login-text" style="display:none;">
                Login here:

			</p>

		<?php endif; ?>

		<form name="login-form" id="sidebar-login-form" class="standard-form" action="<?php echo site_url( 'wp-login.php', 'login_post' ); ?>" method="post">
			<label><?php _e( 'Username', 'buddypress' ); ?><br />
			<input type="text" name="log" id="sidebar-user-login" class="input" value="<?php if ( isset( $user_login) ) echo esc_attr(stripslashes($user_login)); ?>" tabindex="97" /></label>

			<label><?php _e( 'Password', 'buddypress' ); ?><br />
			<input type="password" name="pwd" id="sidebar-user-pass" class="input" value="" tabindex="98" /></label>

			<p class="forgetmenot"><label><input name="rememberme" type="checkbox" id="sidebar-rememberme" value="forever" tabindex="99" /> <?php _e( 'Remember Me', 'buddypress' ); ?></label></p>

			<?php do_action( 'bp_sidebar_login_form' ); ?>
			<input type="submit" name="wp-submit" id="sidebar-wp-submit" value="<?php _e( 'Log In', 'buddypress' ); ?>" tabindex="100" />
			<input type="hidden" name="testcookie" value="1" />
		</form>

		<?php do_action( 'bp_after_sidebar_login_form' ); ?>

	<?php endif; ?>

	<?php /* Show forum tags on the forums directory */
	if ( bp_is_active( 'forums' ) && bp_is_forums_component() && bp_is_directory() ) : ?>
		<div id="forum-directory-tags" class="widget tags">
			<h3 class="widgettitle"><?php _e( 'Forum Topic Tags', 'buddypress' ); ?></h3>
			<div id="tag-text"><?php bp_forums_tag_heat_map(); ?></div>
		</div>
	<?php endif; ?>
	</div><!-- .padder -->
	
	
	
	
	
	<style>#sidebarLogin{display:none;}</style>
	
<?php if( is_user_logged_in() ) { ?>

	<div id="sidebarMem" class="padder"><a href="http://localhost/forums"><h4>Forums</h4></a><a href="http://localhost/groups"><h4>Groups</h4></a></div>
	    
	<style>#sidebarNonMem{display:none;} #sidebarLogin{display:block;}</style>

<?php } ?>


</div><!-- #sidebar -->

<?php do_action( 'bp_after_sidebar' ); ?>
