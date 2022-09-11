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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '/wbam`cv^%Nt>gO}rrpbiuxD?7d2T@*Gux)Z:#G,A~yN(^ar75OM|FM4[tD:=Kmk' );
define( 'SECURE_AUTH_KEY',  'BOW$-M}Z7Fo}hO]$-K=`Lc6sW/l&O5mE<d?iA`Ju$P5rZ(YS_cv~iF5ZF|vk:f}T' );
define( 'LOGGED_IN_KEY',    '$p/l}QbwMLb-qQVNf.eY9%`w_O]wg$K%Zu2G}LmYR^<%Ca8 bd@sKoIF+L2p@;mb' );
define( 'NONCE_KEY',        '2d;IAjyn@],As=HKeViB?phe|Zr/qZO5}V:<?Z?[XhKhKzZS:rv27LkMs<w*6V[6' );
define( 'AUTH_SALT',        '`gV{$}wl4. ,kMR31Wm89oDArh#_w8#<r<+|T_Xh$LanMq1k|f2oZ4W!yNxh12Tw' );
define( 'SECURE_AUTH_SALT', ' UB|#P^R^r%iNi f]q<ko%hc1W2JMa;EcT1UM,UGnv8/;6LC~c:1v!%eb4qk,2H}' );
define( 'LOGGED_IN_SALT',   '7%Qu;}I[=&MHq{Bd1Ky/ $[#uJ;|I2fcM+69Fk6is~|g^L}a>C@jawBC!tBOjsC8' );
define( 'NONCE_SALT',       'Iv[B< kH60G6hV06+Nck$Ot,Z4s;H/<${|Q ~>pVuVp h1iOj{+*1`u@)gd;gm.1' );

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
