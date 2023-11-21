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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lime_hotel' );

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
define( 'AUTH_KEY',         'PY3)im(:MEAjw%&c0`T}ysmm,Ip-2`e*s-vGO8^q3#Y;Mq/%*VnJ{T;FTO2>,Dtm' );
define( 'SECURE_AUTH_KEY',  '/z?*zPp<n)L1mA(!-6!oQEA>U],>17~NSsR8I%Q0wAGNM%O0N}c}fQ`8mjw@r4Ag' );
define( 'LOGGED_IN_KEY',    'v 3AF;y>1ILCYfm!07RQCj~dV2%`1<Ci2|wk9V*dl<.JCd[Y9G%QgwN#e(cQtAWX' );
define( 'NONCE_KEY',        '94Ud|9;1V.f2-Eu.3uXl{qbtPc+Yh?u;FsVhTB+&MEkF`3L~I+>)uv]+*)ovf[LB' );
define( 'AUTH_SALT',        'u88Hq2Dx3_?Z,S^bFAr-/2^YLee_<%3R$UkIbit-=^|:I2*hRk2uy4$C5|Lom%DA' );
define( 'SECURE_AUTH_SALT', '7G{oV,E ;TwQKK(C;4pyhbIB4O_?C)N_WFcfjdp|bXv[}BG,3D/THj1Cr%ZEYFm<' );
define( 'LOGGED_IN_SALT',   '13Z/^X8c^Ch0W[;c[VY2Y|#pPUem$Pwbcmq:WA^l2D=NK}8Qr,Cs1+ hax`E:H!5' );
define( 'NONCE_SALT',       '37.#n7p-mV[(h.CPOBE]D4.AeqLBtnJn3)A%l9[s>:_?i?Ib}.9)Zf*5D9<%mw;B' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
