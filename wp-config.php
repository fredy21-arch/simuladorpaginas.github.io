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
define( 'DB_NAME', 'simulador - paginas' );

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
define( 'AUTH_KEY',         'r+#yNIsAqYR@j?{qydyA=Mav>b&R6HCsg?=Q.|!I2Kg6%`5?PZ^qSBBL2u&E@S9U' );
define( 'SECURE_AUTH_KEY',  '&#1ai_Ify:)%FMlTRd84M>^KG/WVg38(QVbK%qr:M%z5u&fMWpz%h0Az{gI[=CrH' );
define( 'LOGGED_IN_KEY',    '}s /0eyUZAD}]{9 J;j~Go00A|a/<51)fHN &4R-o$|s !W/h!#BmFKH%yqmaLP6' );
define( 'NONCE_KEY',        'r`(v%JKj6H5suMw>!k?@>73r3> |ZYX5frhiM}$KW.}VO8oQY;[^;`+1(+b?1zJV' );
define( 'AUTH_SALT',        'afb]D3X1;44cGkbYV0EN5H+DH@M+ba-M#0k~!-WOW/Mrl.2JrSZM2o6?_(kO~4c0' );
define( 'SECURE_AUTH_SALT', 'yvBE]ofwFw[ryi#y6L]{J@&_5%kT( m]<Om^]-nLc TK,md,S94?B=8orKJ%NZ3a' );
define( 'LOGGED_IN_SALT',   '41NJ+{x#:Y>B%$++i`Ar{]M!wN*e8R8hFv :L)MA,g-HI[Ll{*l3nFtby Prv&`H' );
define( 'NONCE_SALT',       'G{ASaW3JlYCt~jmu0$]Q#,A2/h!NYW5kNd}|3GujY{cCJpz3.TT=-u`au(_;6>2F' );

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
