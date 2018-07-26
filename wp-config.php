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
define('AUTH_KEY',         'rkY27*Xu$nny..ug@(kX`Z:eoM|%]XI6=(a^qLC%ka+pRvLm1uW2A)zDDU9[s@?W');
define('SECURE_AUTH_KEY',  'ksQr_io-MhRn&>yZ)FflpHgN(0i?G@M-0A@004)uL};,}jK/m:59J[jl)ys{Kuuj');
define('LOGGED_IN_KEY',    ',4{$q88/v0T?ja`TkvL*%s(msU[P{-4|yTU|[fr<LS@j<7E}rfCe*i/Uo^g`D>4b');
define('NONCE_KEY',        '` o5Xk3tex_S=YZ:0SmO3x?=GhF]^rPd~/$5mE~jxOFxJzxOsHoKfOXT_bl_~(xV');
define('AUTH_SALT',        'y{KNTj+CLzc!(}J_% ((2WCw8jq5*RRs*R2Pk3DjsTWDrqU0@m5mAkM.:?.Qyu+V');
define('SECURE_AUTH_SALT', 'q$r}D.mbFnrF(%)2-X:%Vqu8.qs-yN:SE<5>047j!iv;a+<G=vy: x}q?3Z^[/9Z');
define('LOGGED_IN_SALT',   'oY]:w!VN!6z.}Yz!E}1Ys1z{2<)yVyI/_ .I^m+~lIH~8< &ISs+PnhPo^`.o)A6');
define('NONCE_SALT',       'fkrWie&<,RgpV;v](szKr_a:Ahczam0S[kY&5TCY3I~gq.e} Bm{}h4O3]]9-ZxA');

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
