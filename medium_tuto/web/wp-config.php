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
define( 'AUTH_KEY',          '9K@7WejK#y53&VY$=^y]{Xj`<y3wEYi)r?Lf3M4Fl?!A5/JUWF@.h nOk^2>Y6+c' );
define( 'SECURE_AUTH_KEY',   'il@(P#tQ7%t)DYM^6f.F:Q`B))u))N?vpA5J!4Fm+{mPM/hge#Fur~DB.|+-vFbu' );
define( 'LOGGED_IN_KEY',     'mX#+)sJ%0NNxJRW<h8=#@k0)x.Uu]c+2fQPfYXd@k/)<J4^qIV,`c>AHVw:^dSMf' );
define( 'NONCE_KEY',         'E911HP?Hxw/J#Zy(NuvsF~0/]1oLdNZ@J7E1/^GLnN6EHpD&Vi&@$wUI{rs>lG W' );
define( 'AUTH_SALT',         'BS[:nd:vzRoXs]zpg+^Ac~qa3:wuStH(&i3^3^$`cA}**twf[q}@9e~5QXE1hB 4' );
define( 'SECURE_AUTH_SALT',  'oBl_Kt]-n[ViER{uYXwO }B=ljJgu4Z<@jPHj.#&T>P**nBv k^ #ZmB@C5zM.N^' );
define( 'LOGGED_IN_SALT',    '6e+q+H5s8mhHAW{Rn5 ]!-42N-^ }`.tOvTAKW|153_E(ik*8byv8wygN[R*]DOQ' );
define( 'NONCE_SALT',        '.>JRVMVW.Av9e^_d-_ipzZ*e0Ayl_l*L&^gP}1&V3*;f?q<H~gpGKs07(a/M+DrG' );
define( 'WP_CACHE_KEY_SALT', '[0xSXSud=t8U=ra}$YhH:t7X6sojirkYhdM&PCuE-G`1.`yWsg0Jrh5M@^Xp0(pV' );


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
