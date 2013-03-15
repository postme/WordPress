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
define('DB_NAME', 'wordpress-preprod');

/** MySQL database username */
define('DB_USER', 'preprod');

/** MySQL database password */
define('DB_PASSWORD', '_pencak69');

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
define('AUTH_KEY',         'A[Xqy6+Ev&^+(-7>#_Ibv|78l,K^N.+NSE :?ULe)1N0vljyztjN_6J`ew)zodJz');
define('SECURE_AUTH_KEY',  '1&==Oj/KxFs|~dU28gIx=EmR,06%4[>c&w/,y]ab|{PALOms~=tWR2SFMDxs<YY+');
define('LOGGED_IN_KEY',    ']fFDP053z+`@$([:d/J_gFi0]?aY{x-KY`U}*NS7#LFe2P+Wl&vs{|U*YA!]oIjM');
define('NONCE_KEY',        '-/nq{%FCR(|)840{WUR?7lY3lx{s>86Ox>no]6#9H9(D;SxxZlfp!W#C:AzgY<,`');
define('AUTH_SALT',        'k+xLxSDOFU8b<+Ty_5+Fa]&x#>e;@OGWs$V)=8R.R`^%ck{c:-aJZ^[6ODPO$r41');
define('SECURE_AUTH_SALT', '>XoIY6_8~Z>4ml0Uv/$xdpx4U|39~F<yknv k/DZCCC-O/]W}Z<B:uTyfW Z,*|+');
define('LOGGED_IN_SALT',   '#IgQY`|.-0d^PVq]YMa[K2Qf}x:B+d7L(_U/3G.!*jzEo6Y@o/QzUgk6|aF8[^,P');
define('NONCE_SALT',       'MOBE>uTQ|#6?Td-V->J(*V%a@AX)b:;EA~};/=xv|7qD^w@&uNW;f/^^VvY*PX?o');

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
