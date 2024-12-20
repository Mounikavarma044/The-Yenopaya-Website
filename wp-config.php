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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'edu' );

/** Database username */
define( 'DB_USER', 'admin3' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1:3308' );

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
define( 'AUTH_KEY',         'orGlk!#]zE*.%!0:mtj-~=AxXfy6o5q~x~%X)R[0!,&F+qh-uT<p^?j8-JptJ3v0' );
define( 'SECURE_AUTH_KEY',  '<7KtDR{GoCv~;@4%]IT}@UQ$ZrusO*B0%gijjgJSo}7k?5D^>URC#;X<!tX4v~bd' );
define( 'LOGGED_IN_KEY',    '5*E-Wp_)Bz$ )K76,olob/l<Z u:6sp%g@&KC1FojAosB,`;{uelyOGXfec:3?#,' );
define( 'NONCE_KEY',        'C7n|PUzZd)8PSgG:ko2$k*u^&jvuWuX36X* ^Izpg.U?~40_`?~r!-yvwn|0P`ur' );
define( 'AUTH_SALT',        'h<#D5Uo@s]SNjm|76p{%iom1 !i83:y$dApO`>sG&q9gxVY8aufbapg,}{)dM}kN' );
define( 'SECURE_AUTH_SALT', 'Q+TYd:f@I=qgH[^I)7qG}AftGS&VeL#(bsn!u|)M4i]&d@8Js0{#]S[C528~g9Ja' );
define( 'LOGGED_IN_SALT',   '%] ;-]%+?]wZ.V0!n1Vm3(.J8 Ma99Xn?E79R<;^2J7/`K)eWbiP?1FD7ikOynkt' );
define( 'NONCE_SALT',       'lr(.k_-o+&NZCuECoGn*ne1V-EKme&^ZC%a-xNItyVye2rABeU8Hrv3YMSx;8%WO' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
