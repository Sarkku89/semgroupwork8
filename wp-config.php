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
define( 'DB_NAME', 'marjaana' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '2]yx0>m3lI)UoS :&;Z#m18oFX*oL9#Ay8Ab5WvZUe!Z eB~4ep#S$z?Dg288/&3' );
define( 'SECURE_AUTH_KEY',  'lI]hXxN{@1_WSs#)+*w;htus#|Rv,90Zs_j3-I*7,Ti7bSUC;5-&M<EboY`4,}o^' );
define( 'LOGGED_IN_KEY',    ',JB`x<;*JjD:=s_94c|=q&c8gA7JS/EmnBvboNxml[f`UCg9FK}I|d.&`/BIMfG-' );
define( 'NONCE_KEY',        'B1a0Ct.a.pP]4{Bm-.OQEc^OR0e6[8f%*q*R8*`(^1J!l*s!<-(Q$KV?(k^U)yJJ' );
define( 'AUTH_SALT',        'Uqg2Uf(f(?cB<P Vg~QLN%|vI-C,g:H5H~t9<>w2f!,OVMaR?<aKU{XUB()/}<Dn' );
define( 'SECURE_AUTH_SALT', 'Pwcar__sWvf#G4PQmh3**t34t|{,i0lfnJjtXf4z39`16K^Q5).*ZdzurVPwr)X#' );
define( 'LOGGED_IN_SALT',   '^Uq_0eU+{ZO[ng0DX4OIu|y@S?C,Vhu%9JtNvs?U1>`l!+dU_ tve17~V*K6+J|6' );
define( 'NONCE_SALT',       'recFy0(HxNZs2C.:E|wrb+A7V#REvK7}yZ8hB4gm:F0+Gm>U] K6h^UT0nvK5QP>' );

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
