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
define( 'FS_METHOD', 'direct' );

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'platinum_pools' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1:3307' );

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
define( 'AUTH_KEY',         '_6I6TaMmQp1U^;@L&}If4z->s[Yx6Rb$r>]W1H]{5fv]@nmHtLGmD~y/[*TeoRIb' );
define( 'SECURE_AUTH_KEY',  '7y@0|NrWtlg>gW<tVTvN%%az%o:5~]Ks@FW<wRhQwxmt,+-Cgc./$1n}ygED`(K&' );
define( 'LOGGED_IN_KEY',    '~<KU&::(Vu1x,i-^a2;e-Gux.;FvIgMp8V<@f# a+cviu,K]wN-lq;$XJP`wa89=' );
define( 'NONCE_KEY',        '0}Dz]`l9*E^j7/]KY`*PnnM#v}K!uCCAb}}8`%~C{%%i3a@mZE~J#R<Lr5f`kF;K' );
define( 'AUTH_SALT',        'lq+Y_c|22{Ciuf{Z>pqmSEMv)H%>D.`@XBDz3@O+&0iEy46ISUH_bQq,o+b/pW^`' );
define( 'SECURE_AUTH_SALT', '_YY)Q/-7JyGl0/2=d=T:T&t. /o2.@=1]F;@!7Jqb{K#vS#vbke/.][CATi]v1IE' );
define( 'LOGGED_IN_SALT',   'JJpUrJdeiHHaZEkfd-*#,XeZwSYQ+v9$4Ig{!n)^R43~wayF/q,wtxQ_7Xv8XqC9' );
define( 'NONCE_SALT',       'QzjkMLT[bI3BQ!zDs0#ObJFKyKYr8Nz.E8iKD_{-j:p6&J/WO~yQUh_U5w%JrE_C' );

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
