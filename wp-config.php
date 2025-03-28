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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bcawordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'r^5Ymr)VL.xtc{:#}WSlD`~X7 ~]83*D9}W#EX4>@%j29u;<at(N{5z*7XjIJQVc' );
define( 'SECURE_AUTH_KEY',  'x7Ve D09AR:jc&;8ym8nvCu}0wbppRl[Qq` (L7~.p!v}GyFlhy;|%t6,9_Zv0/o' );
define( 'LOGGED_IN_KEY',    'LnqMp&_Ndny&u%7QU{4>X^HptI~%m.bs$cULb>AYn+|s^./h(9~f;Rr(MJ~`1)S$' );
define( 'NONCE_KEY',        'q|7KJT5|eG0kP)xITwo`Y,FD0-vVWI#Q&E1#$El2ob+7!0ktweowO,O=o}5xBxUo' );
define( 'AUTH_SALT',        '=bQ>e[Gd4x5/:2!J;Twjv_8.UQAg#LeG(2;d<m%Q1He.>zF:U#<UP(+F,uJoi@{i' );
define( 'SECURE_AUTH_SALT', '=-^cuI8o$_IcXB3.w)QY@>T<6QiAc]}Tttv.I}kAFkL{@??A17A?!6==zo?PV~-j' );
define( 'LOGGED_IN_SALT',   '=:;w);$A#H)2f<]TA<{!M/E634> N E}(.2p!lg?mZ_lF2R{OQs70}Y;TtxoTD1>' );
define( 'NONCE_SALT',       '.s63wvakfXop(:4=4z[`Tm`&}Nv~uy$=w{%`IKuUZ@<?1,4iCU?slDO/j>;+nY/~' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
