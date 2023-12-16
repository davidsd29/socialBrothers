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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '(;i?x_&jb&^/EE5{#0hS15<;Hb8o$QcILXjrJ7*R)U^27^dc$=)S.*3vu4^dmnwo' );
define( 'SECURE_AUTH_KEY',   'UNNO>UAVG}nZ^~QjgoLRL4o=nI9khXeRGP`cJ^x7VeDTb*g6diC?G&{J<IV%:nCv' );
define( 'LOGGED_IN_KEY',     '/?#e^1RY)nL`^%rU_[C:JQOKz=9-w#2wlcQ]<2G}D7`}a$Xn/K1IIA0E4F)hl~-@' );
define( 'NONCE_KEY',         'zOCl1?RaeBpHL}$Z@U~+x(dMRj2#{Dg Vfoz(~Y0Rz0inhkUK]JQd~-]pz[{8Mkm' );
define( 'AUTH_SALT',         'x$QJ#fW8u[iv|!)yinrW?IQWVaZREKg*}5PyG?!jj%R[nbrqr4xk4],8jMgD1l>5' );
define( 'SECURE_AUTH_SALT',  'zj7NoO,Ijw]=hNbq_b0c=Qk@p?(|Pm<n1r43g9 446hq_#mP33x7FK|N JgnNOzS' );
define( 'LOGGED_IN_SALT',    'Ni6lxL0iID:Si}##zu6I&!>AvN}wPdD%m<Fb2kd&+|sy00,$.iw+`9A_PB<vz&H@' );
define( 'NONCE_SALT',        'y`?4VQ_Dj!EG]9R|Q?8H<%<_zN/b SQg8#teaV)q=p68hl0ppjg_n bSQ]WiN3V>' );
define( 'WP_CACHE_KEY_SALT', 'Ev|7~|u,7lP+]aa Um@aVc[G.VzjI<g04tsM[`.}dwG,tcGvZRs99_H{E7UC8:Br' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
