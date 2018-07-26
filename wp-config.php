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
define('DB_NAME', 'travel_blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         '7&&dUvdg[P:|_[_;rJRqp?|u&wsv*nL_ F@|6ez^[t|,V/Nn5(!, SxFd|7xFk+Z');
define('SECURE_AUTH_KEY',  'Gq=KTQ{xSR`CJ1m9Cr*@2<d0CAn:<{K)VxX/it>Qip*n]<|/Y+2ZC[7To&/y@Zsl');
define('LOGGED_IN_KEY',    'TYGI6@bv:2Et.3&JNZbB<qb.Wt:/vDx;gl._oM<is;x!D8I5V,z7X%h3{6U? 0p>');
define('NONCE_KEY',        'Dj8laR,F#<5<v6eL~;4Dd0bX2EzFGUA.q?|Xb}edqbHUf#%MlRBdR-(tEtX@izH2');
define('AUTH_SALT',        'u@XC>?3`(z<Y+IlSWhIMgx2OzPou?|%7C-[d(:8C<`{- MOnIF3EI*)hN>A|H!g=');
define('SECURE_AUTH_SALT', '|J],uN.;L)E7d61T-bfGku+Ci34C<S[0o(9eldp:S;b+!nvT@c/YgE$DmYCY~H18');
define('LOGGED_IN_SALT',   'M5jQ!^IQ8 ggE^RuG8_`D&E[gC<Mo]1^K0!tS38QTj|nlO]vmOIT3RzBt D, jy`');
define('NONCE_SALT',       'G]Sjv{a>Sj(2*Lois0@%?oO%h}$j1ZEMc=4SD_S/@..|:>#dDFQs.|A(EV==}}EN');

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
