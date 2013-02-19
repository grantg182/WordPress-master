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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'FLPe<&KsOL=0}<hlgwtZzf|Ke*.-%2xr|ZZE[SzoHUkI^ ^)W~iwtW jC<&4^4Av');
define('SECURE_AUTH_KEY',  '?g;Kc#_@I@_S|QlrB 4fJO~^OC|}k zbI}UTlm,g{&xw4<4a[I|Bp66VfQm0Ev@]');
define('LOGGED_IN_KEY',    '0cP>w3PH(52BCrf+}ki[/EZ^7Idcw&W8G!aDb{3&5)<&G?9q{`TB<[U/1n b-|8P');
define('NONCE_KEY',        'B_MsNB!M9Lp7Nm!C&e E+o|I2IF/mVV`T19z/uQR+OpZt{$2+%Ux9@D5|Cl68{,I');
define('AUTH_SALT',        'je~|u*}dw4^;3IVx=_a&D~!x8:UU{#ZU3uIL1DMJ5kBoi u!{<m6o3@~9Lmzyg5C');
define('SECURE_AUTH_SALT', '@uf_bL/LJRQ>1q{v7fC(P_jdk$m-iOhgU`tNQ(vAw<L1AzS#fB%/pd/+JMt~>YtG');
define('LOGGED_IN_SALT',   'sK!)5K@Vs:LgIHxSBai]|+8G]B3NF{D6S{_LRTz|QhhcTs*$FIT>Jcr QzcrRWCP');
define('NONCE_SALT',       'bh8bIGl{mJ[0yNK<|!t8lQ0A$p)zv|;18t0,mJ*+W-ceP{9n739J#zxe%80<]eAf');

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
