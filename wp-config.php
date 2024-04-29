<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ngo_website' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'E,7u135Mkuy?}S>sO}t_Bs7Dcw$d~,d]b.r]5n%kNXle+3$kK_.B?25;h8 ~XDfn' );
define( 'SECURE_AUTH_KEY',  'p>16aex87b5DO>qDP^F@uv^vujP9+siz$jpy)pEmddS/1@f)5dR5p7<$VRY5jxPT' );
define( 'LOGGED_IN_KEY',    ';treJ?7JO`:SNmRZCh5rw[_&}NqI5G7lfFvv)~/:cRZ!/TfG]d~w+gH&6S{yIE7)' );
define( 'NONCE_KEY',        '#Y-6>]W8:9sX,QQELy6.AX,D#EKyM/AW=D[C`Q&iC(G%L$ky;bqLrp9`kRTD:?.e' );
define( 'AUTH_SALT',        '3#w_6K+yUdmtR&SXZ;;F5[%9he{d#j@{lg~$C#>KxW`W0@ejp*:Ewez$1!aFIL:>' );
define( 'SECURE_AUTH_SALT', '`tH4~OPoAwWtg*GukA3R8P2M]wKY&Zw}z#hEOr&HFn3rc?7>;/=PpyL2697?,4v(' );
define( 'LOGGED_IN_SALT',   'CLY6UFhsL AZMWid}+-}zgaZOyO>[PU |}R0h 5D9-zI2 #.or.h.>=3A.:PeP5&' );
define( 'NONCE_SALT',       'R/eN1:Q0Y?NU;VyAw^_]!$IOT}]@A0vD57?}VNscg]oGb|B|mxF/q/>G=dG=k^7e' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
