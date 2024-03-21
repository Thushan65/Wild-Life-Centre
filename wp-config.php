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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wildlife' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
	define('AUTH_KEY',         'T~F(P#@YUr-y*k{k$Z0vr1ML*kOUrfQx5(+g-&t`-fBrDBt;cx[4(%9ee?Fr[wne');
	define('SECURE_AUTH_KEY',  'uEN*P$;51k[&m^d?GylCibl;-3VWixZQ23QTu;Ym#y^U7n7D}OJM!fbqs;+q]7g-');
	define('LOGGED_IN_KEY',    '{}EFyk4|2IdMdtOBiX,yO;5ODLL|q&>tvH2^}L5yC1n)R]Oe}vqhW-CrG{.]5e2!');
	define('NONCE_KEY',        '`aPHu.=35q<K-W?`A&PT(nHeO5:1A4NK9mVIKX3X|kgvp+OrK>gFLU45lj>_N!^S');
	define('AUTH_SALT',        ') >Q354zzIAN=1iMVi= }Kr@6:O%4?K5=^zK8CgvZ51fNIX+k*iZ.$`?~:H%Hj5&');
	define('SECURE_AUTH_SALT', '{Z0bl!~+//1o7]TJNFw&ylz(w+UK_2k&&w>SwPmn8sambhnJ#+tHmpu`*2gYIsJO');
	define('LOGGED_IN_SALT',   'ef3#Fw%e*t=Y[[oF ,&~SJ1m1P*2vF!f:][?c?!k.-n]vbK`WS)TI:I2j(BPvfP)');
	define('NONCE_SALT',       '~!;vSS0t,aZ<f^Uh?5UlJ Q.fYC7/TYUgb~wUSz2NmQiSnO_ji8:xo7MXr8#SU3/');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wildlife';

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
