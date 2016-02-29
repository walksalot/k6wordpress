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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'wpadmin');

/** MySQL database password */
define('DB_PASSWORD', 'LeanTreats8802');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '||iruyD~O+6kbIS3EV_C/12|u~qFN?cH,2_K )x8rOCr##88:L}FO3I( @vl1C~ ');
define('SECURE_AUTH_KEY',  '%kGfT2r2rCtM/,{Zq5W. T=F?sYNJG%EOule<|Po_Z_}TUfI-,Hr@tc!-uC&QJ)H');
define('LOGGED_IN_KEY',    '2|NL.f> hDl1:$KE14B`v]4}}[F&syw`%5J|U<As=4D9@v/1.>N_oJ=j-<$RNQE<');
define('NONCE_KEY',        ':ipwlQVs-~oAlsP]_Pr14Ba#kii]u~3u0SCXwxU;jBhv,>S|J:eEUO;ql]o#wy#$');
define('AUTH_SALT',        '$+nr$s`-g/&dv|H<Lm!i+Lv+SU4vPd7&KsgP2i]hR0<YS+fWqNg[9X12(fxp*0sV');
define('SECURE_AUTH_SALT', 't`ps(#D#fgZRm+3O%/U1k*6)&R^mp=Lo[`Y)S5-nks;?saDpn>r`k{@<5s++,^5~');
define('LOGGED_IN_SALT',   '[h7h6VCcA=YzX_Pd{pj%lFf|69h3VHSFW_~9 GWlR-aIVU`GhRT>wokT8!7TV&4p');
define('NONCE_SALT',       '^=88}C(+`i||K/u6r6xP.]E&m|r|MyNy&S8<9e/o_D6?WjPpvF=Kxp,tuQQu;W1s');

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
