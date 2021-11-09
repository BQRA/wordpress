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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bxdon9nhpytqn5owdebs' );

/** MySQL database username */
define( 'DB_USER', 'u58ox8rowil3pr5e' );

/** MySQL database password */
define( 'DB_PASSWORD', 'NGxhgccy0HMPFo7bKZ8C' );

/** MySQL hostname */
define( 'DB_HOST', 'bxdon9nhpytqn5owdebs-mysql.services.clever-cloud.com' );

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
define( 'AUTH_KEY',         '8|Ykt4n((!)UsxhV8c#0dev@VcD}U$tX}M!supO|PWfT6jAo>jN^<{Ukv7?HQxeW' );
define( 'SECURE_AUTH_KEY',  'eoB;jr[?$O?u-=L4.+}D7XUf+V8F~YAX.fZ7R?>^o(=@.S@=xvx:8DMrXQ0 v[we' );
define( 'LOGGED_IN_KEY',    'i-nvr:_,.{5O{MqRReebM>RvB~<dV2:0bQY=%D|/OO71>-wU>W k1e(33U3GtB)E' );
define( 'NONCE_KEY',        '@l]ax$nWjJMTT$k_TL}reK!_<irYt!h2*K+*ov28  oOd:@g-tVyUA@Y,9V)Qm:+' );
define( 'AUTH_SALT',        'CVY^Pu>IS{L5;Q,f/i`~mVbia2ejP0E(96,uq JjY;I/e+:hDi_(GM,9hqcY8i/f' );
define( 'SECURE_AUTH_SALT', 'mj`g/Tz+6C@9/?CZX;_ev5oJyjY}WS&q% G2GF^=j~!IIb.@#^hV=PzJZo&I8Mnz' );
define( 'LOGGED_IN_SALT',   '@J-P64K*3e71`e**xnGV5Up^p%c9IqlLiVC=@OgI>vHN2~0nEo;wKnjo`^6{(aS,' );
define( 'NONCE_SALT',       'V[,wKdYj-_Vrkuuql/VJM$8)P={=L3a!>+PHz|F(#Q9nFl[oi{-[R?1}z4^c=slr' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
