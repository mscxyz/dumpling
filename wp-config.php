<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'hero');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'Hr: FasqaF|FyY%2fCPV9m.F7lC7blJ~L<d7Wz-z|#d4hZo?2on/Xx&yJ1%,l9;}');
define('SECURE_AUTH_KEY',  '8Z>;d%4;hX:luqx2-YJ9Ji$KHxxWJ^F}9#KR)R#.888<U/a7~ZCkY[&I6{IV{b-!');
define('LOGGED_IN_KEY',    'knlzP[6[,Oz5?EP:f:`w%xN{#&:>pC,Jw!QM+~-tRu`A3O>$z[EizWC99jQ kY@t');
define('NONCE_KEY',        'j*hNzs$H4t/jq[sFIezBQ71/)h)9f.4LZsNq}LDXyL_1~w<O:82&pCf7By>R.k!&');
define('AUTH_SALT',        '.G~3C|7)cEg$BF0oARX02V<XGE$~IU *2 h[Xh~1[Xfd3$*AXa?X:+QFj5C{F}tK');
define('SECURE_AUTH_SALT', 'EjI775rcUBfYFi,^<6<7dZR+Pu=L7C! =[&>u6g,XOiz.l)#Vd]tt{cpodOs5aOi');
define('LOGGED_IN_SALT',   'FhhL?sYHBfdY[$k:CX=p$0T_QM17g/5x5py63<o2n.U/qvl5lNi!w8a:tN>_<0R>');
define('NONCE_SALT',       '26*>JX-8z]x)4im@PF~5348M<f[qPti;Rn%^/<{1r${2-*)e9[@h>cJx%4e+Hy8{');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
