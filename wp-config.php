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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'D_OI5SNGK1jrNv9bAYQ6bf-^.$zkSZqyoNIDD5 /Xe3pk]vUgKw9O<a`H7*. o.6' );
define( 'SECURE_AUTH_KEY',  'o*p>i{ai#?#Tp Abvkiqykfbg#@j0ObcStt_/hvzf7y)!IOs)R6%jr*s8/zM)qgk' );
define( 'LOGGED_IN_KEY',    'Nk8]4gnb}W}W-c4z]2ijzXvXA$1oP0#>& o$SFw9lH736>u:?2*?8;:xKhkpSW<G' );
define( 'NONCE_KEY',        '[6Z07j$$RC/25sb8|u>Zr[$UkU.yy:O ix;rhZhuck,z)jM,mZ1m&<x2B]UjxxOA' );
define( 'AUTH_SALT',        '~L|nEGPaTDU_Nxs|{FGOA<>~CMjXqas;@$-/p%X<|h@E.)g|vOs%KCpQf;Z-.?Bj' );
define( 'SECURE_AUTH_SALT', '.M`yj fy%3[:03NP.?ts}1m=y;!CsdF-o8dhiYAyBD_|=HQn%_nle7TF}c43)zt1' );
define( 'LOGGED_IN_SALT',   'n0D#.4`eY&9)kA/#;>||;F`0>qNTCsEiF7Xb]jO|]AG}oqS%=O2cfWx*6IG0xg[t' );
define( 'NONCE_SALT',       'FhJ-7rTd fe>T>X_OT#y0-~4O=Cc!G?Zn-m!a.$yfb4rr7;IV5F}<Ug3UbqMY{I`' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
