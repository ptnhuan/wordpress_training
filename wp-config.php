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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '$Gp*<I&,S+sGsT3y,Y3w_;L@y#eD7?4/WQaQfGjv8;#w4+c>6,ytn45wz.iWKAK4');
define('SECURE_AUTH_KEY',  '|72?ey4M<5_W_iHmj_,jb+XF/!M{7oES_lRc07K2|5U?|^a,$w~&TA)oe$,aW{N ');
define('LOGGED_IN_KEY',    'O0k5gYhf><>g@+~#|DZ^@H4zv<(ivA#E2k5K4#R$}MFz#bL<%VLu}WpPELn:5{xw');
define('NONCE_KEY',        '|Sl;tclaN:%nT9SocvnN!*/lC=FXK@?xtc<*O[sKd}QP}UcG#sZeObdHSMR0U;~/');
define('AUTH_SALT',        'hdJZltuW(5#x!#z^)?TPaN@yyX-M-]_X&ar5K*J:fz#ORA]8weWTXZm?RLk2vA$$');
define('SECURE_AUTH_SALT', 'l67&CBxwK:4WbTUAwHLb=t U/eTP|A[5zUK?#^~P5iLf_%rmSn4j<|V!8Nc=>1P8');
define('LOGGED_IN_SALT',   'Yn)}Y++KHEfVaVqsFDdHk?~.%ZiykW(Vy5M)QmTfA,>/dWX1Il]Ue8ht>Ca#+6|X');
define('NONCE_SALT',       '-UDe&=zbm]5{-A]#&(+Jm^!#P;dUH]QPW9Bpt.?Lzvw(^M,k T0n+)+hSzOi,*JR');

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
