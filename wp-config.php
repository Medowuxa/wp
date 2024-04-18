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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '1015-22_16988' );

/** Database username */
define( 'DB_USER', '1015-22_16988' );

/** Database password */
define( 'DB_PASSWORD', '00c8ba235fa6ec590b51' );

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
define( 'AUTH_KEY',         '4a0^lzl~Z<&KL|Yv/+Z*8Y1h[0Y_[`B3~!j,!T/^J<-(Xe3X;JbFHzn0(t>[mJo*' );
define( 'SECURE_AUTH_KEY',  '0@/obmzbeFcVj`2Ua305p$,JhMEVr.@n7@vZ84eLN:*8I[^{RXd3f|I/fy7HWvj_' );
define( 'LOGGED_IN_KEY',    '.4FTxo&#}yV,r~>{K0lw#*xZeh5x[CqdLBapk+zT[I{77uyeuz{`h1~R6FoZINXX' );
define( 'NONCE_KEY',        'opU#?[+]z^-:d3A v6SMMF{i4e`D!d?IU]keXS$)T8R#ylCcOOUc(~T;}N;NK,QB' );
define( 'AUTH_SALT',        '~SQ_EN<(gD$;($YN_DVpclve!v!U.OWD~1Rjb*NG%x`T#sff8y^ofA:L^<dj-C$n' );
define( 'SECURE_AUTH_SALT', 'mW<//lS/g1YqGq5;eH[0B_{U_Fh6*0fzzOu<7YC/mr2W|m8X1B4mV*}A9G4a3$J6' );
define( 'LOGGED_IN_SALT',   'Q4QTd#>g~qu+hj4UJOZ/J*yl,FX8HJy}$e-HmtyxnQe5]WFy3H%waz.&R;L*D3!-' );
define( 'NONCE_SALT',       '&BiefB:*crqY&O*BrP^nFZz3,`gC`<$@9;2Bj(MIK1OO]PZxdol)6cc3D;h3}[nL' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mjZo8_';


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