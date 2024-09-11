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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'khodientu' );

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
define( 'AUTH_KEY',         '+KxZRFO:H/;fIxo)b|~g>c^e{PdVr+ ~P!Z=L]?;zbqA]:s=hpK#TG;h_gT+Kt!@' );
define( 'SECURE_AUTH_KEY',  'a8?Y^V **59~?!T!l4@tjR6q i.PgM<3^MrF`c[4meEFHuoR6M>F*)cdlu>6V |G' );
define( 'LOGGED_IN_KEY',    'Y17}(Z&;Z|^4?r-1,-~b1K:E@;b4Jb&DKKNY_%@6pAK/^3jek[Tc1Cr6decQEurN' );
define( 'NONCE_KEY',        '*0Br?QP;Z6_MAE?[)jxs0G*CO5x0HcoCP`e]@<Dba;X=^u>vELc>y-K(]qB(XwT6' );
define( 'AUTH_SALT',        'l0!*wRhB.}jJ@2nh~)0 >&>M>eGtrG=O3v3%^_R/SjD!X3ODhaN`YOzH|q]$@tIs' );
define( 'SECURE_AUTH_SALT', 'b[e/MB&9&K?d1}%6a/9,A1FF[P8KtX?]_^J-3:[j^L&L?Yi.cvwfN5Md(#hrbz5#' );
define( 'LOGGED_IN_SALT',   'JbW>VG;j*lm_/P3bP {9t3q-Q!D_%-q24JA,f35{IWmsM}5z >T4n|amOR j,>lz' );
define( 'NONCE_SALT',       '$,-a#3P,p|43Ze2=H$Q9 k:*o:zgQ2SQh2.6M/x&}mP6bkJ=7gWo5UOocprI@/=*' );

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
