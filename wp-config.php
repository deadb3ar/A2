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
define('DB_NAME', 'A2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '~XO0otG]~4l}PR)yH6+9j4/GEj~%UvU)MCNe_0&b~0RXcWk[8FfH@OjI6Bq9(S36');
define('SECURE_AUTH_KEY',  'H#yKc!!Wp!>QEW3>1IOcY*-.zGIU7B7ElaN!dWjrjfT!.; UNKdl/c)`Isq`xV4(');
define('LOGGED_IN_KEY',    '6u_<h;J{2I`Ga{s<aS+d4QPf4.{iK>cv Z6CrN4z<*m?L2n 9K>#k%AyE#rI LG0');
define('NONCE_KEY',        'EJL;D4SsWX5Y,p1teUx~,4>hw5`%3AWwYbgp&k;fHB:01#w8P]#5gxMc=eS?IGic');
define('AUTH_SALT',        '54,:m4;$DDewYuR:f#JBC{5,QLQ_>sh82$T=Y(>+9k`A5DEz$YUzu2<9AM@<FS!>');
define('SECURE_AUTH_SALT', '16HFDo^9W0N/QG0^-(AE0XBdLYz!In>BZG2[PIT[ e|4 ZpohHPk)dj~zl{:=:jv');
define('LOGGED_IN_SALT',   '~:D- jdOwau)mjyx8eA8THYLm(t5>oz7PM5{A}sT8x*yg>J_]e=c2u@oIE8&sb+I');
define('NONCE_SALT',       'Ln!81u0CQ}7l{JfPcPcAZWFOc;`EjZSo$Ts-y?|k-JwN4N1UZn$~r-%gzYKq|b:W');

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
