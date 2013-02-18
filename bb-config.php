<?php
/** 
 * The base configurations of bbPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys and bbPress Language. You can get the MySQL settings from your
 * web host.
 *
 * This file is used by the installer during installation.
 *
 * @package bbPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for bbPress */
define( 'BBDB_NAME', 'wordpress' );

/** MySQL database username */
define( 'BBDB_USER', 'root' );

/** MySQL database password */
define( 'BBDB_PASSWORD', '' );

/** MySQL hostname */
define( 'BBDB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'BBDB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'BBDB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/bbpress/ WordPress.org secret-key service}
 *
 * @since 1.0
 */
define( 'BB_AUTH_KEY', 'FLPe<&KsOL=0}<hlgwtZzf|Ke*.-%2xr|ZZE[SzoHUkI^ ^)W~iwtW jC<&4^4Av' );
define( 'BB_SECURE_AUTH_KEY', '?g;Kc#_@I@_S|QlrB 4fJO~^OC|}k zbI}UTlm,g{&xw4<4a[I|Bp66VfQm0Ev@]' );
define( 'BB_LOGGED_IN_KEY', '0cP>w3PH(52BCrf+}ki[/EZ^7Idcw&W8G!aDb{3&5)<&G?9q{`TB<[U/1n b-|8P' );
define( 'BB_NONCE_KEY', 'B_MsNB!M9Lp7Nm!C&e E+o|I2IF/mVV`T19z/uQR+OpZt{$2+%Ux9@D5|Cl68{,I' );
/**#@-*/

/**
 * bbPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$bb_table_prefix = 'wp_bb_';

/**
 * bbPress Localized Language, defaults to English.
 *
 * Change this to localize bbPress. A corresponding MO file for the chosen
 * language must be installed to a directory called "my-languages" in the root
 * directory of bbPress. For example, install de.mo to "my-languages" and set
 * BB_LANG to 'de' to enable German language support.
 */
define( 'BB_LANG', 'en_US' );
$bb->custom_user_table = 'wp_users';
$bb->custom_user_meta_table = 'wp_usermeta';

$bb->uri = 'http://localhost/wp-content/plugins/buddypress//bp-forums/bbpress/';
$bb->name = 'West Caldwell Health Council Forums';

define('BB_AUTH_SALT', 'je~|u*}dw4^;3IVx=_a&D~!x8:UU{#ZU3uIL1DMJ5kBoi u!{<m6o3@~9Lmzyg5C');
define('BB_LOGGED_IN_SALT', 'sK!)5K@Vs:LgIHxSBai]|+8G]B3NF{D6S{_LRTz|QhhcTs*$FIT>Jcr QzcrRWCP');
define('BB_SECURE_AUTH_SALT', '@uf_bL/LJRQ>1q{v7fC(P_jdk$m-iOhgU`tNQ(vAw<L1AzS#fB%/pd/+JMt~>YtG');

define('WP_AUTH_COOKIE_VERSION', 2);

?>