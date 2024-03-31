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
define('DB_NAME', 'RenovateCompanyWordPress');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', dirname(__DIR__) === '/var/www' ? 'goldteamrules' : 'password');

/** Database hostname */
define('DB_HOST', dirname(__DIR__) === '/var/www' ? '35.224.229.250' : 'localhost');

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
define('AUTH_KEY',         ' W]PraVuDV C;O4s$oC+%RTC_Q,m#w]s-=$Ef4w%}M)xRS$k1+Um=$u[<)[S[LW#');
define('SECURE_AUTH_KEY',  'XkG2=8[G2NCZnx`FQXxqKLFHV![4fAqAIKY,|=Y_CKsaT`1_G_ G/@ F@&as[NXH');
define('LOGGED_IN_KEY',    'BOD;HHQ#UyiN+*%5S>b_e/2<8(#I20f8F=Qo(8HN&%kAx/6}I#2qtp3vhT@HY}Zs');
define('NONCE_KEY',        'JOnV$Cvn&W[A,~6&|6MlF+7(P!E;xT&6~/ (b5>ESFs}F?ZYod]]xlsWC!vgx3^a');
define('AUTH_SALT',        'NM^$!au++xj=e|`iFx(M89pP bLLYt,-qg@%yMq+<b<|Nt6[JzJA845c-4#*3e2s');
define('SECURE_AUTH_SALT', '{:0P;v-+z:vK6J}Ka[T}r.bc] z3^| t(W Ki08:-0w{Fxp*d4DFB-?dbYPDFt%y');
define('LOGGED_IN_SALT',   'W65|I;>($o%7Z1&FWvoC^cj>e!._{JKiiW-+7z678$k-r6O5:`BsFL2t^:-LS|l$');
define('NONCE_SALT',       'jQ,Cr,RzjP=C_f *#9tRyK:i:+12U(8imAV/$s@7:U.&K:F)L|wvTN|*|#RmA2p2');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'carbon_wp_';

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
// Enable WP_DEBUG mode
define( 'WP_DEBUG', true );

// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', '/wp-content/debug.txt' );

// Disable display of errors and warnings
define( 'WP_DEBUG_DISPLAY', true );

ini_set( 'display_errors', 1 );

// Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
define( 'SCRIPT_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
