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
define( 'DB_NAME', 'saje-beauty-saloon_db' );

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
define( 'AUTH_KEY',         'b5nkl-C=GMK}O^:SV&g#8Vk{F~cGs@N?LpG3!AHxR8;F8c q-RRh]?z}9%`RG+LK' );
define( 'SECURE_AUTH_KEY',  '/vSH,stjH4ok3q;T-eL,uuvVLiJfTHMmM8m$<@5 ca^5zB9<.D04Y&Rb(8]Lue,}' );
define( 'LOGGED_IN_KEY',    '(wu!_EhPih)RFM;Zq/cr<VBzL.EqOX<Au,6gB/Z56}t!zC*J-, chC=m=UI/0WG<' );
define( 'NONCE_KEY',        '}.YZmE+(^;R.H7%KrG~NGe+@hxXV{7gX*PU,{m5z~o[4O]OYf0]:n9B/0u)?DWl9' );
define( 'AUTH_SALT',        'CcU&Z1%8$D;x:oyn^Sl}o06=5~UOHgg]B)O&Rqr;$52n5*8Kt8 ZhkngQxGS0NA?' );
define( 'SECURE_AUTH_SALT', '#(gMNtj+-oJd>@8[$=6V&!%KgTDUbdp[$?rv}E]X{|y#tqE@!/JK>n4ex[^5,aZ#' );
define( 'LOGGED_IN_SALT',   's9.Q{g1<4P^*dfEhF/vX3;#ma)jIQo8h=o)}@tnTbUM[L(3yJrHS8lzm@_)[^q$$' );
define( 'NONCE_SALT',       '+HT[1[CJ}i|_6]%/T5~?N{Ah-F9C_7s{1vZFH=~U*x9pUx%h-V]tTTSEj@_)zTZ3' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
