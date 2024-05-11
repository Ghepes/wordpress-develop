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
define( 'DB_NAME', 'ui-app' );

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
define('AUTH_KEY', '++|)i&$UEG=8E]VA!# Go.:aByqm}6yVa9*_Z.2$@I}^$j/OpjHedU~)o@JSfubg');
define('SECURE_AUTH_KEY', 'I}D;SwynDe61u?#?3 hmtIkV(@ASz9z/%Z80>J1oY-`=G&Xw|K}BCH|T6+|a-`4D');
define('LOGGED_IN_KEY', 'd3SpO4-(SxOW[Sl+rbnurp16Hk__qV}zw.L{*McD8WSl%|D*@D{%LL: * %GT;sz');
define('NONCE_KEY', 'bMishf<I.jak-Foe4X{,_4hU@?UI-]D_9H1i0V U G2(?=U(j;#no& k/WO gx/3');
define('AUTH_SALT', ',N]|p9UQYe qnBFBb_+7;`$V^xS$,)9i@p_:2A`__b%n-2$K>fXDaT)}]MTOM?_|');
define('SECURE_AUTH_SALT', '%DGA+K{4X_q,A,eWs,]&hSJ^[uUUQ*[Sjg|OoJ#rbsP~=M[Bvyxi,(I-Am3WHbRd');
define('LOGGED_IN_SALT', '`-+7t Ov+Wt<>s)wr:Ab$4f~XBoUQxvB=YQTw+isMq2E)4gc-TVdbHu*Yo((Iu@r');
define('NONCE_SALT', 'Yxwp<l9<k|BNig0O <7d_!igfY/$qirOGJPh2Xo#hUy5WOY^ @!KpNud&d.A;8Ow');


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
