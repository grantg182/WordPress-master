=== Plugin Name ===
Contributors: deadelvis
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=3687060
Tags: admin, role, roles, member, members, profile, shortcode, user, users, widget, widgets
Requires at least: 3.1
Tested up to: 3.2.1
Stable tag: 0.1

Members plugin extension to add a [is_user_logged_out] shortcode.

== Description ==

To complement the [is_user_logged_in] shortcode I noticed a [is_user_logged_out] shortcode was missing from [Members plugin](http://wordpress.org/extend/plugins/members/), soI  decided to write an "extension plugin" to add it. Maybe this can be added to [Members](http://wordpress.org/extend/plugins/members/) itself one day?

The [is_user_logged_out] shortcode should be used to check if a user is currently logged out of the site. If not, the content will be hidden.

Example:
[is_user_logged_out]This content is only shown to logged-out users.[/is_user_logged_out]

This shortcode has no parameters.

== Installation ==

1. Upload to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

None.

== Screenshots ==

None.

== Changelog ==

= 0.1 =
First release.

== Upgrade Notice ==

= 0.1 =
First release.

`<?php code(); // goes in backticks ?>`