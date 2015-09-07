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
define('DB_NAME', 'tnwla');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'QJ UIVg(FoR||Z{BRv-i.MEz~@*76.lmiC+>>`=e1SL|n0BHEQppfek6:`MB!+Qv');
define('SECURE_AUTH_KEY',  'MZ%EER7A+iaC=Q|2nV&CzT~v3rq-I-yc,u/f-rc/z/L7Z--Qb/<=HvS_<$I!|;cD');
define('LOGGED_IN_KEY',    'E^S,HwH_z8b3 {P~%_$S^=.cV|Oc%a0{tk$i y|${@7.KL2)<U4=Vca4]{ykK)1R');
define('NONCE_KEY',        '$`O#4S|WdL7&H7+4O#+>cCdH4R9nwE6z`U)=u=p4D@/ls}Z_MQ-#/ccV!Z-ihs)d');
define('AUTH_SALT',        '|_Ln6rQgK`-_COt|{CLBRC{cLyAbA/}TiUX-vx83//]Z0{+`.g117<vdZwUel;ys');
define('SECURE_AUTH_SALT', 'djQU|}eya|k[rtw(_@N2taV-NBsPMVg#TH=_alrXjN4m~[6QZA^Ib][UA-N^ak{*');
define('LOGGED_IN_SALT',   ';~>sH3Fj*-5=@KQMvMs&S_W02G@D HcDl<|K`]u8>1 21S|DzW-IBgZd97]1|-M+');
define('NONCE_SALT',       'S_|j&n-;6%54w-3).N1ELLQS+1!]HKth.#bgnJU4r?GiVaq7P-.v`%i|!I!YD-~b');

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
