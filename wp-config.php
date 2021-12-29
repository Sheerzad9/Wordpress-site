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
define( 'DB_NAME', 'localdb' );

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
define( 'AUTH_KEY',         '],+ Wm>UceJq/A^-ube9IoCvw _lb/TPZo@vqwP5,1($UK^;dED6QJ85]yT*MJ|m' );
define( 'SECURE_AUTH_KEY',  '}Ce<^N7b_)a{Bku Y8^O^WFMsh0|U^I{2q5p@RmN<-Y)vPOVy!S=yIrCvH3LGS8{' );
define( 'LOGGED_IN_KEY',    'hU)`H_r>X@jHq/f(os/m=7{-WpM*t3zxpFJ,Vv7RiGw+1~+A_`$d%Wu9chQP8t*Y' );
define( 'NONCE_KEY',        'n!*?6xUx#vI%DUe6#441)II6NMD9Fc#ik9dMWOHw7kgC *aEJ37iLsqLy.E!wRkJ' );
define( 'AUTH_SALT',        'ksS,m/;J1EvEPp*LHFsN-@%<9 ,OGFy7tug-wf2^?)Y.rv+X$av[[(pb{K{/HZ0[' );
define( 'SECURE_AUTH_SALT', 'v- 18F/%G7FsyTU*Ug/1imLRR-!++_fDwuUR~<xlLXcw,8=OML9vz&{sxM&d,VVo' );
define( 'LOGGED_IN_SALT',   'ow`_S:im~d^Y%W+moNzt1M1v.>;ian`v}3Rp-6qzZ&Ow>xmMO(||0fjRGek=G.!r' );
define( 'NONCE_SALT',       'qshGtq_G]PN+Iz.DnhJkQz78t>Zs2z0epXkhYdq+f!%JT_x.&F>2js[</ T;WtaM' );

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
