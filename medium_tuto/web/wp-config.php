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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',          'N5{d)EaX*PQa`@-$}_eBK8-Xj7{tC,7IH1k@2Y|`dId0k[T?P*%3Vzztf.VmJ*c+' );
define( 'SECURE_AUTH_KEY',   'VE0|,=6irw{M.3kXdWY_ [>G8(!fI*U0j/XT)u$JS8yTPH,Cx ?(!A}^Lyk#&Stt' );
define( 'LOGGED_IN_KEY',     '3L6`pRSwev:Qb24i(tbnKfiro9>))Nd/]uZrj0!D-,J1wWrMM`-)ZMBvWh|X]nCu' );
define( 'NONCE_KEY',         '1JkM0j+fU7Qzw)-+CI?Ph.cMIgcWH#m)tkgD ?o[SMi<r(bRV9eDz|?@[3Egdp_{' );
define( 'AUTH_SALT',         'Y;Ees!jf2Y}aX+xjXLzym5rlFM>jxnAmtH|!DQyS5GOk!B)GCC+N7-M|edD7s#/3' );
define( 'SECURE_AUTH_SALT',  'oOk8d ulPQ:5L(fY*w/+qR[9&Omir9/91dzCmh&Q3_$/e=,S_NY*VLQV/AJBInYR' );
define( 'LOGGED_IN_SALT',    'sPr?Z=.6^YsO!.h!K}u?TIR47M#Y~(]Hn5+W*L_zwDS3<y&gA|*0|]yVk(LtvtD5' );
define( 'NONCE_SALT',        'wdNc.eVP;K=jX-n*C,f<qEQfH5f;wtuti<veITpKsiD3W#Ng3nM[j7*T)Z7U,N;1' );
define( 'WP_CACHE_KEY_SALT', 'bO>P9/r@?-/c4:cNG<<%vOR<A&4~@IJhq pO%T0P9a84y0,yT=y);PW~7iPqhYv~' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
