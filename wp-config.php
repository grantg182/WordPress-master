<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db_45ab2de2');

/** MySQL database username */
define('DB_USER', 'user_45ab2de2');

/** MySQL database password */
define('DB_PASSWORD', 'QJCPu59YnJ76ec');

/** MySQL hostname */
define('DB_HOST', 'a.db.shared.orchestra.io');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '!.0hH^D!h-miS8HB|Iy#WNL>yn)h[9&xQ;pq?twZ{pMmt#S+nK,8A~|b}&-<Sov%');
define('SECURE_AUTH_KEY',  '[U}Jhf0a1z:B*p3c+Kg#QYcCGVBkAp]m[A)ormsj @dFNX>p1 F&Qy@nO.#)1In2');
define('LOGGED_IN_KEY',    ' E1$M[<vkf1dqOXuR_3cW%Y)<bjljm5CJ9pbUjysG2:fw>Qck*{}@QbW]U!9(8}e');
define('NONCE_KEY',        'Y3#RJ.,}bcZ+!xGuxO d4K[Dby/]z9-DU*sj|tkJ/,rszk0-|D?EE-:m.zVX1_am');
define('AUTH_SALT',        ')B%d}P?0SW}@9&~>q_.qMr<wZCX}pt]UWQ.pkoLKZ,:;U|mze.O=^s+!z@FXB5vm');
define('SECURE_AUTH_SALT', 'j=`kzbG@jC,aliwCXvDK7GI~}qETE.<Kf>|F4P6TGiAPG2:zU8tqj0--5(h-;r,,');
define('LOGGED_IN_SALT',   '7*lRhGZlh.5J+q>},kA0P~uTA&:f7+WW8`lm$TP;>120[Dw>H0v9R&718 H3syrI');
define('NONCE_SALT',       'U[Zj^#=,K Ep&,e}kzDRJ<F/xo/m=uV!{clUBPN`6P^]RD][i7MTmN[Zi{grA3oX');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
