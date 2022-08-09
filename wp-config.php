<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'user_root' );

/** Database password */
define( 'DB_PASSWORD', 'suporte' );
define( 'DB_PORT', '3336' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1:3336' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'kjOs0~*hH`0Sb|3(67!IL%QvA38<6o@Its{bd@0dS)R{+4AQ^wV]bA**)~$~mjzM' );
define( 'SECURE_AUTH_KEY',  'cyK/OKL|t*$8vlK??kXO5vH/@]YIV*<p.A4NY4oq;^|Y4;P0A(^(n$klIQ}_5ab;' );
define( 'LOGGED_IN_KEY',    '0+n8LI3,E$Y@vL(7]Wk^WB9$O&6DS408j:HiQ9P b>tZLF!S`bVb+Tk{f&]U5I<D' );
define( 'NONCE_KEY',        'h?l9$zQ%7W@oyyBAxT2N;TkWm`otFB3k@-O5}{21zF&+G?|,/0KxF1/8%Nl(_;B3' );
define( 'AUTH_SALT',        'r[BoStsDez$vrE Qy]iWtC$|m}skz*J;jGR<-SXQ6y(N9/nmC;5vH1GL5,{|7&AX' );
define( 'SECURE_AUTH_SALT', 'r*aw5~4dW;qf|y]7ll2>|X9|C^[v|7+EjXrp}lJ#Vtn8}^Rs`$fkHhh,ytT!TfJo' );
define( 'LOGGED_IN_SALT',   'D@Nt?{a!WaVhyG9aVFtSj?{)=tLMcdF5l5a|i|tE{?/wlJ3rH;YF)#!F[%[]pIfW' );
define( 'NONCE_SALT',       'D]E5@UUV-gaUgJqK8%^N|,,ldTcm)sl1^pw,+k?y+q?c;{].()JkEEjo|5T mTMn' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */


 // ativando o modo DEBUg do PHP para achar erros de syntaxe de forma mais fácil
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
