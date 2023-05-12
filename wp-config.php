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
define( 'DB_NAME', 'assignment6' );

/** Database username */
define( 'DB_USER', 'assignment6' );

/** Database password */
define( 'DB_PASSWORD', 'assignment6' );

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
define( 'AUTH_KEY',         '}*%<J(bO.iM+)ojB?L?rU^Jts9!E~86m(eC3RCUks4ZU3I~*-CYhtW+Krr1mY{(Y' );
define( 'SECURE_AUTH_KEY',  ']rYp/:M6{geL<&+IQ.*<<hQ-tq {^4n_P {wtlqIFqxMPST,XJ8nD<F<$~6]Q!3g' );
define( 'LOGGED_IN_KEY',    'j/Z;aW0b<0IA^i_11bHLEGsGy{pdWz*U?g?9=r`~IO=kFA^5g5IDCp#Wg8$RVkNT' );
define( 'NONCE_KEY',        'VR#]is?hK%?>Ik4&6+<oU<?#ydFz.[sOpDrkja` 0|N^3Kk&!TQ21;=bic^/-xtd' );
define( 'AUTH_SALT',        '3sn*~OV,+J=n.HE$ftY^Y=b5e!aTe(_HXn2x0[,n !$*b_4-l649lES#KG,vSj;1' );
define( 'SECURE_AUTH_SALT', '1-U,-[cZummqM_wrQ;t$|Ok+ibu4R0B?Ghrr8Whd{Lqx(n9(#.M_p,U8v_.ex.E5' );
define( 'LOGGED_IN_SALT',   'jE=Swyl`_HHty@O=w]Oir@~^=h,7;h,Bjqb^4@@7t2${l@(N#%V/.b)xN-vo(o<o' );
define( 'NONCE_SALT',       'iI4&%!m`y5oK2g73y/k[r*@~9X{&}#w@D21+9t u ho!c4<%]5>eq#bVQ>;~5hE#' );

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
