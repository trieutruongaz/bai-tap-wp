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
define( 'DB_NAME', 'university' );

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
define( 'AUTH_KEY',         'J}3-SDB+EVvczo_wM&RHN^!1]_vJpar<GcRYM^)t~_R-n1[Q2EaGNwo>]7_@9Cc=' );
define( 'SECURE_AUTH_KEY',  'zAgTA?)flIW<{=!v+If(bfdcl=<(0k~o70[CD[=tfgja=O&>sq[.Q.gGH#_j5(Ar' );
define( 'LOGGED_IN_KEY',    'Ys;d;_z>T=Wyj!AGm2Fg9pM9tQna3tGR{{tvxF`b9zdOhoV,>e5gN4_)!<7)Vmx8' );
define( 'NONCE_KEY',        'QRx>p3o[*c1tmcdu*D^b],22<[,pHj|.x0e^U1bqINF=d;L/7I:0RK^#Z^)WoHA=' );
define( 'AUTH_SALT',        '|~RN-(lAW;y=U5gTvn;XXWvN5gI*&#vwtk4M35uQJ*B~Ale(oL+!KXzlo#1EV&rF' );
define( 'SECURE_AUTH_SALT', '@+VM7MtN,P{F)V3t3JGJI2XW=+,1W5-E/[A6*@6X]OF,b-b!pTe?&J4LkOlMd|7%' );
define( 'LOGGED_IN_SALT',   'G7+:).t2S;5DTqO6]}Y@6&/G/KqkzGst_OFaG+CvVVel@4L1U]9]v.3Wwy=?+YiO' );
define( 'NONCE_SALT',       '-:YBc|h +K2X>?$*Xg9ET&LiJ8cNrAWOfv^AC!xy,0${9ByEiW mAA9vW1_+W4<a' );

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
