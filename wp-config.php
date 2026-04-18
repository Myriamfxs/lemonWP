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
define( 'DB_NAME', 'u224540409_w80Jn' );
/** Database username */
define( 'DB_USER', 'u224540409_7xpAW' );
/** Database password */
define( 'DB_PASSWORD', '1EQ8HtNBAi' );
/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );
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
define( 'AUTH_KEY',          'a5q, ~9V.yUzZ>g2y5&eO={<eNwp0I4j;qOCh;8+Ydfs&>Wx)0mU+iY Y;C~R#hO' );
define( 'SECURE_AUTH_KEY',   '6W},sgi-h bdm)w8AOe@k7C(XG:3PpMg#r# ZPw8<.Q^&#k: V0eav@J~WkHwW*a' );
define( 'LOGGED_IN_KEY',     ' NCsL&&nKhM@V*r#dy^v*q@<*2VSos0iKc6o:qsjJeI(h&Nz8ynwNPq(up=Yj>Um' );
define( 'NONCE_KEY',         'Ju:]y`ScZ-FiQYvY.-Gy.Z`;($OCnW~0v<bo9ckO^0^48MszEl)pe!ud*8WeR[iD' );
define( 'AUTH_SALT',         '#nvg2,&/.6dfX4|#ny}MC>JkOA777 wfX|S&?}dkAGWiH&tM(>8`bp9T&f;u~9Y4' );
define( 'SECURE_AUTH_SALT',  '[#<s)WGIu.^Q3hG_Xw&f #4z-m+(!a&zts;ofbg7qk g3Rmiw;@W-wSaPdk=DS-Z' );
define( 'LOGGED_IN_SALT',    '<bYE_WDhX{~[N]~[t4>q#[f2A$*C0_zG.v3-e:VLi Fr1d@R3Q[@.:p$^G1W?g)-' );
define( 'NONCE_SALT',        '}i}cryo&{);p-+u/Fv)p9AMoA67=6lLV^;}mGwb0l<=9C0z[5|<XHB?$&ukxE FO' );
define( 'WP_CACHE_KEY_SALT', 'IM{uN;t^T4_J^MPl[O4X!|dilq/V[<-R>1P5U]iR`wlUw2qm4:P{+ss=|1<^@@Vc' );
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
define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', 'f5fc0e5cb4388db0f605ae4653843329' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
define( 'WP_DEBUG_LOG', false );
define( 'WP_DEBUG_DISPLAY', false );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';