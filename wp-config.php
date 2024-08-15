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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\laragon\www\marcatino\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'marcatinobd' );

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
define( 'AUTH_KEY',         'o}:M,P#DXGD9Rg4hV0d-(*0FD)[5p^1fD+k&F@Vhs^;nTArALh0-f%_)!/k.RcQ/' );
define( 'SECURE_AUTH_KEY',  'hoj#>TW _l/$*Fi<;XRF/A+X<npzbRpOm_yltm/K#;&vwV1Lt4^gD!S}qKWzb;9n' );
define( 'LOGGED_IN_KEY',    'uPm-NE?#f.dA[Bed&$ )ATv(]}wLqf$YdpO4Oz6}HhKd5d`<8,MI;?vhzvLn#v!6' );
define( 'NONCE_KEY',        'u_X:pvv_K4IMi$3sEV}3X {wFV%z&%-tWkOWf3;!Fh;Kf/.) m~!&pkK%3n5NY=n' );
define( 'AUTH_SALT',        'c]LJLm+YScD,byPiH@-5|Hin+LYrI4QrcM4eesAr@*<3_M/+:7>Q/K m*T0lMD`H' );
define( 'SECURE_AUTH_SALT', '>fY1fA_ddo1cfe0NL17I=4T?$2Rz3z%93)rxghfiw.VMjN_3^R60+rV#9zO8qzjr' );
define( 'LOGGED_IN_SALT',   '-3^-:07CuJ,gx+@!pj`ZK-nO2B:UtPgm{<6r-?%x^!k&yZ.j[@U`[6bSUa O})%t' );
define( 'NONCE_SALT',       '|0okN^P`x7DEjr^L]$/}~h8;ekSiF@upK|@2kLBlW(KBmJ(p]n!-!Dzq,C(Q:a$N' );

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
