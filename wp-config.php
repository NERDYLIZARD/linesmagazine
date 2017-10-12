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
define('DB_NAME', 'linesmagazine');

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
define('AUTH_KEY',         '>j?AsVbXQA ^Wy2[>8g^zAd57r_.<}u_AnmBg/yN%X{YN4z+ hga+P.40OakX]K ');
define('SECURE_AUTH_KEY',  'J+Jzg(6bjP~R]~&2u0<egHa5BL!rQ*[j85I<Y{5-$f1EAvik-`fYR6P t7&cHA<w');
define('LOGGED_IN_KEY',    '6d2Z$Fh_]]6|vu7DBdc`!hFR0J{0YU|=[!=Gmx]3<YTH?7j@/ziM8h22,JmEGR%y');
define('NONCE_KEY',        'a*PR+j<#a^Gl=^VL WcbU,5(nx5c#0q1-Dd^v!%5grYnGYnR;_nrod/lJd}QU->b');
define('AUTH_SALT',        'zLlvBX8J:=:tSr;ClIigNzZz]0>y0~fIN#pzsm*Cm8yaI7Hc;&`t>]m`,RK_|9,)');
define('SECURE_AUTH_SALT', 'zc1.ap:Pt>Ctpf4vj6X*](Jw!k +z>N>|mLI%U9-xP!~&@N?# Cw<M|%amIaVDY6');
define('LOGGED_IN_SALT',   'y0DhbZqa-zyJwU1N]iMxLz4cYDQQ?R@MMCy}SEXBT5Nk@B:S#2k&@rQpiC;`!*7$');
define('NONCE_SALT',       '0s$cXSC%FPYTFr~r]1O0&mN&#-NA:}yYO_VqWWOU;fd;dd7Tb= ?Tn1TZ6?%*ae=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'linesmagazine_';

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
