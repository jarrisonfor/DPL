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
define( 'DB_NAME', 'http' );

/** MySQL database username */
define( 'DB_USER', 'yeray' );

/** MySQL database password */
define( 'DB_PASSWORD', 'csas1234' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         '~d`@t!O0lYH[<+$K?cXY)-7K5mdhRgu=pe@c&~h7`|A$BZ> P}IfiBEc85c0K- X' );
define( 'SECURE_AUTH_KEY',  'r0%h`dK[<S+Kgm (9IJq%+P/4?mgc0@%h9~i87a/:nc=AL(7k/$2g{uv{~Xc;aBx' );
define( 'LOGGED_IN_KEY',    '$)QLm6uN6zV6zuwBW^3WIL^+2oTgrasshWVc49|J$Rx=?@X}CmXbTLd82cj`[7M!' );
define( 'NONCE_KEY',        '=1Q*>k*j_g#KAHq|>ibr`;;q~8Y#MlK_JGzMK24zHOp,Q[!3btf5LjOUvq+1k^pP' );
define( 'AUTH_SALT',        'QSh(bBFX65u}%BKabo>4w}B7JH:`D&3xJ/9??5uwhOmQ80d-O#a0oc;X?MxZF|8 ' );
define( 'SECURE_AUTH_SALT', 'O~>fp(q}hFyar*$*Z>kb0NVCv^wlY~{!>usMWM[C0@57+ir|y_uO:S`:xAe-Q;ol' );
define( 'LOGGED_IN_SALT',   'm7:A{PNjSI:E)h}*aAtFKxSw$}+Xc>3sJsaCM-Y-c2_#[DfU?1w4E3B=-&?`DK3#' );
define( 'NONCE_SALT',       'g:bVC%z)54P,A@ 6.]t/Anrq>eCxnsiwIlty/h`;mK:(l~lAo2h7onq0(XyX@=UF' );

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
