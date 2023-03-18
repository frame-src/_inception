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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'frmessin' );

/** Database password */
define( 'DB_PASSWORD', 'coffee' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'uDLC_wJhj~Rm+9O>y)#u}*F7&uPb>sL`5LP/`y,X7<gMu:(1sMyFO9jVN0L^k*}5' );
define( 'SECURE_AUTH_KEY',   '~^HybE>q*txO&p,)$/C&NK60r]4Ds5!+|Z:jZ/)7X6Tlwsn+W@NK)JKGH=Gd18[O' );
define( 'LOGGED_IN_KEY',     '9PJS;Ykjwvg_<LVDNZ4q@R`7!Tu ]97*,+xq:sa>Q$`y 6{C>X8tpnpPQ8x@@a{ ' );
define( 'NONCE_KEY',         'vkY3zGPRV7jc^BSG#!XSe3Un3zk W4Nu+$vjkYX,qSNa1nw8Jn@Y(dX*OA+V=V0.' );
define( 'AUTH_SALT',         'Rf;3XITO+jBq]Y<{ovQ=!mQ@3P4-uUsV9v5 3[Z+rJ[Pydka+Nq%1|:9_1$d^|[i' );
define( 'SECURE_AUTH_SALT',  '`#Tyv-XEJ_n%_wYhghh#KmHK?,lKD9<~l.-*m`OV1g_cRS:zIBj<WF>9k.u,@(qP' );
define( 'LOGGED_IN_SALT',    'H;{Fu#qABN}bAsz)9I- uzf{k]ajUK/-U>:=wAR@_9lui$lwS:^XVwU:/e0ktIBE' );
define( 'NONCE_SALT',        '|VY.U kWP^I$aIA)%:2gjj~4Fv[$eyS W~/Y[Yw55h!OXXlUOOOu;>9[{jOXyTMQ' );
define( 'WP_CACHE_KEY_SALT', 'kol*8Z8{iw+r&kL2VO~Pv?EQpf=f8z.L.Mo`Jz#!8gc= +H+~Yxc5:$&Z9V<O}[!' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
