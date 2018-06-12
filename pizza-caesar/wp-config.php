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
define('DB_NAME', 'pizzaCaesar');

/** MySQL database username */
define('DB_USER', 'pizzaman');

/** MySQL database password */
define('DB_PASSWORD', 'Sp2H3jaDXZoMZnDL');

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
define('AUTH_KEY',         '])E|ClvT9^_X4|sPdW$bF79#iS<skUsR?%tAMx!Vjj-!2{ui7X8.I`dUY))k-Mbw');
define('SECURE_AUTH_KEY',  '<^2cT3||F)3wA8A%kg Mj;eFa:S&8G<.Rb~-|1Sv@u/d?uf{6+z_u+Ho,|Rrx)++');
define('LOGGED_IN_KEY',    'U%cl7&6zf3vz-}onO8trEBS0W;jhu*51v]&/|vT=i<o=2a231zX.Cs7 [pw)e<;4');
define('NONCE_KEY',        ')~O+Hb+cZdzYZiou&T(SI2e$zw`I#0+2=b|-O7V-}K-m9/+E*;/)Hke8DHt>*N =');
define('AUTH_SALT',        'bxg(<W*#|:TwrSy]xJKBnjLe)/1|&-|`f 2VN<H}ZkvN)(}+V<]tCT8Ml^1K*LK1');
define('SECURE_AUTH_SALT', '/mOz|f/ Wm[7GF2<2i|b{Le$3VTXc+A=Ukm9p?HImAZ:.z}5a8L$>u(cZpRf,>x7');
define('LOGGED_IN_SALT',   '8?v~a?6dcDt5-2pPSQ_-xo1|vZB4YcY#sEmNX}zf,x(J?p~]Ijd{)I-6NTWFG9E_');
define('NONCE_SALT',       '5AMjrpS>u=U;+Q}~?ewVOb(DhG-K+_w@JGu/`VcRE)3C$Yo%r9{i=@F,qh9ASO>~');

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
