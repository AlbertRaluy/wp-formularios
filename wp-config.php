<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'wordpress_formularios' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'S&tZM(]K3:s=ip}>|hMTTV(kAZG)>2LQIo0cG 6K 0L4R4f^md{xvm{S~Q.BxSbB' );
define( 'SECURE_AUTH_KEY',  'BDA*Ptd0T_{?Nn q)1CS.?`OvWe<+&6Y7E=R0N^xR1@6^WId_hH& 6ASZ`.@@[){' );
define( 'LOGGED_IN_KEY',    'Yo(ko.rPQ>J01),/_I)l`Daf{x{4Xwq!+n;moh<*lg+~b6y&v{s}xW!@Q7 F/C9=' );
define( 'NONCE_KEY',        ';HKKd-jzMMUP.l{shUJ+]?f0~GK*rhy+k592q?gj,)LShRdW`A8n? nC[p6t05+W' );
define( 'AUTH_SALT',        'zTU>SzfMjg%&Fou/)%U@ywYOoGs*_#V!,CeqFtF8`4Xe-0XDQp?5V+I*O4wte,ZL' );
define( 'SECURE_AUTH_SALT', '~9}5;ySTyB<:4FyJ#xM:FO=N>|V^# m,bI~,-cC&+!?cku/L@2s(~NB.C.k-$dsG' );
define( 'LOGGED_IN_SALT',   '1vQFb8MHLZ%3<.Ul$Z_X@i:Pm2og*oRP!bY-_l~9xNofH_Tj7@JyPpkvM`%Aw>8Z' );
define( 'NONCE_SALT',       'VJ4Oy`p<Qg]%J94{A`n-7Fz%cE{)4Pot/T~;<F# @Se+NnWuSrN}*]ayPN2m!`=,' );

/**#@-*/

/**
 * WordPress database table prefix.
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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
