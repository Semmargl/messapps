<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'messapps');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'wUN!s(X6E(R6[ p9lU]!c!E0DGI/PTC|W3HU<#o/dodU>(MQ#,k=lJWl K9AiZ~N');
define('SECURE_AUTH_KEY',  'o:Bq1H;`9.@q:brO!&u?hdexe}6Bc63JsK}|na4&PE a:iK+6;99,$>VEEFTtAs6');
define('LOGGED_IN_KEY',    '^juC )jUQt{1at|g}*N RH]LO^~InsA7npAE[+FJ}&g8Vx1r}~Kzi7yUk{zg+,o{');
define('NONCE_KEY',        'n(:}M~D77ybz%3Jt[d?DvVCJMwQ[k*TKL:KKTHgDer2m;7OT7&eYpV|.cXU-=>5H');
define('AUTH_SALT',        'N=P2|Z25Zgv9=<#sUd~-929L[[Jf-5(0L-K_fUF;b>*~X}i5B45@`1dyU7hg!q),');
define('SECURE_AUTH_SALT', 'x(mTo+e?d#x~<Y-3m&KKK_8$-Z0%i>rPbqv@=6I(+;4Rox9 2T[L^/uw!3Kvp6O7');
define('LOGGED_IN_SALT',   'rXQ3Uf0S<gmDH=R<_9n:-2yAb=d0,BjTo|`(:sH8+.{]`Z7`i!;XR3.q_D:A`1/G');
define('NONCE_SALT',       '8ya:t8~RpaEb(PkAHfHN;CF8BK@<Iy?m>-sS&5<Of4K?oh1D>g`M_eHQ 6w}kOka');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
