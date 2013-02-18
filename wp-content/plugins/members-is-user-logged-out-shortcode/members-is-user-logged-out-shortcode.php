<?php
/*
Plugin Name: Members [is_user_logged_out] shortcode
Plugin URI: http://wordpress.org/extend/plugins/members-is-user-logged-out-shortcode/
Description: Members plugin extension to add a [is_user_logged_out] shortcode
Version: 0.1
Author: deadelvis
Author URI: http://wordpress.org/extend/plugins/profile/deadelvis
License: GPL2

This program is free software; you can redistribute it and/or modify it under the terms of the GNU 
General Public License version 2, as published by the Free Software Foundation.  You may NOT assume 
that you can use any other version of the GPL.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without 
even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.

@license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/

/* Add the [is_user_logged_out] shortcode. */
add_shortcode( 'is_user_logged_out', 'members_is_user_logged_out_shortcode' );

/**
 * Displays content if the user viewing it is currently logged out. This does not block content from showing 
 * in feeds.
 *
 * @since 0.1.0
 * @param $attr array Attributes for the shortcode (not used).
 * @param $content string The content located between the opening and closing of the shortcode.
 * @return $content string The content to be shown.
 */
function members_is_user_logged_out_shortcode( $attr, $content = null ) {

	/* If the user is logged in, return nothing. */
	if ( is_user_logged_in() || is_null( $content ) )
		return '';

	/* Return the content. */
	return do_shortcode( $content );
}

?>