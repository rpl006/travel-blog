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

if(file_exists(dirname(__FILE__) . '/local.php')){
	/**Local database settings
		/** The name of the database for WordPress */
		define('DB_NAME', 'travel_blog');

		/** MySQL database username */
		define('DB_USER', 'root');

		/** MySQL database password */
		define('DB_PASSWORD', 'mysql');

		/** MySQL hostname */
		define('DB_HOST', 'localhost');
}else{
	/**Live Database Settings
	/** The name of the database for WordPress */
		define('DB_NAME', 'raml3549_travel_blog_data');

		/** MySQL database username */
		define('DB_USER', 'raml3549_travel');

		/** MySQL database password */
		define('DB_PASSWORD', 'TbveH6AA*S-q');

		/** MySQL hostname */
		define('DB_HOST', 'localhost');
}



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
define('AUTH_KEY',         '-v1OW`}6DU[sVYT,]w^fu=jj|7$$RKA+}9 &)2WUpn+wfFk`|1)c?##|jA.d,Vep');
define('SECURE_AUTH_KEY',  '+Y:3Zh{cc _ @~fclK`R-QW:VE{eNW!xu|;H;M>E,]+&m[gHbOeb#Wm&@AyHGAY9');
define('LOGGED_IN_KEY',    '-g+xoz[8howaZ4]v]6nN?YJZ <1Jkby%c@0WH6^:z d|7|R2y)D)LNa-?T:Ulw9i');
define('NONCE_KEY',        ')3|v.,DxnuZx(6/HZ7w639W]zuHKjMP$Nd%KBlMS!^?GzW!S.ZT{JyEhh.%G0~1^');
define('AUTH_SALT',        '!Nn]s(+/ LezvOj4}&[jlUL2?~w<h}+dm][P,.0FXCgC q]-*Km,HBR_||O#)nu$');
define('SECURE_AUTH_SALT', 'UGcN4L+ODmmPcRVJ3}xi$L?sk~3J>{^[u@h8wuteYG|Tj3ey1)!c/6E<Y8ops6=E');
define('LOGGED_IN_SALT',   '=5Yz(l[6N-1-dPZI2GU)y2>WTGp?-Jc)Wa;ZDmKtm)kk)-IVVI)cL?PFIzIup.UB');
define('NONCE_SALT',       'hY&rnzR{[8Cbt$|>u@.tooO4c|D&s*K-EY{/l*U$TTH6f$>cf>h^|#z^rll?zab,');

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
