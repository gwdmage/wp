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
define('DB_NAME', 'gwd');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         'YD9:-?iYNk~qwp)No0MOZA_euuw(c,7b%2wbI].5D=eN)U0:2+]r1%YcBQs2cs1A');
define('SECURE_AUTH_KEY',  'xer3+-~?tXrc<NGin8p~Na&q> :TU`oTfJ cr*BURm2+:k:Ac X1MDZRx@=F/d.8');
define('LOGGED_IN_KEY',    'hz/zio;ykolKmIB)QV(-d!!P7#yB@P>BnW}n@Q+E(pD720=%/xc>O?Ae&$Cf$#55');
define('NONCE_KEY',        'Y-^v &z3_MltWeP9e#NEid>kHyv^9lB@yE2m:(t9>dkZ<nSn-x$23%{>%ffHVbkm');
define('AUTH_SALT',        '7Jwz},)^Fzc8:7lV va+[0t784x_YE9bzg>g[,cof@]~1#iGp^7^hoKySRNoZfC@');
define('SECURE_AUTH_SALT', 'msDf!E.XG=<[LU8#e+pVIn(}h%?CbP.D(pWEv/s-fK_>]|FcrFlKo$!scW(/7_dk');
define('LOGGED_IN_SALT',   '45(L[xAV)VG(v@VSTHm?6:&z]wW%T@aeiShD&<qv#bD0;|!`[!.W6[rjwN_B#6.C');
define('NONCE_SALT',       '5+_hQ,JfJ!B=p2G=8K:iTZZw8(JZVN37UHsd)U0?0)F)FabnFM@x/HC-[ZK6cy+,');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
