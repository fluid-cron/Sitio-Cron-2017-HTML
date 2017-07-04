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
define('DB_NAME', 'CRON');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'cron');

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
define('AUTH_KEY',         'E%,%EWM.]{vt!T$dCS*q]u};]X2UocJEvVqgme>vORvjRdo$Tyw g>K&)0]Ur9H,');
define('SECURE_AUTH_KEY',  ':mwUQf&Qr/)x}R?V_Tl``N*Qt[x4#e`/&WBC&F~jua!&0-X;&s<h=_N8h2[_YaIQ');
define('LOGGED_IN_KEY',    '5f_A_Ip#LyuSf:TZtfpS#*,/JSz[WM%&E%l0Yu6E<#(pY+/EmLom~8--r/iCZ.,9');
define('NONCE_KEY',        'C5tUN<A+Jta.9Un.L*+.N&)60j6d[d%Hg!{5CvoJZCsqSLWyC3jwRoZ4M&PDt3p[');
define('AUTH_SALT',        '8RJ68lQB$^z=0}GzVs^27i#@~vq3GC,Z7JI426IzV5@lEP}{w>yX;:|Z<1#I9Z9~');
define('SECURE_AUTH_SALT', '!]L~_y72$Al7[40^$]qH.Am`b>i(^vn_FH@/5E+LQ{Nyx>U}hU)2%iP7ksA1oWA>');
define('LOGGED_IN_SALT',   ':*|h_Q*hZNg3|,t%T&G5w$k,V%N@AB!_OGOLWR %~yr)#ePu_n@_kp@D+K6.SbGM');
define('NONCE_SALT',       '?(&T@jAc/(]5?`*By1dY}cMe`t&(pmEeWX(zyuF!&}Q0L;$hWJ`8,U`9@>>-8CHM');

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
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
define('FS_METHOD', 'direct');


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
