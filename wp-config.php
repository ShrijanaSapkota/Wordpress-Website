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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'OnlineSelection' );

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
define( 'AUTH_KEY',         'X(?+}a8E9+Bfb6elVtcM?~}U/`c$=iQ`P|$CLzt%:d5`.k4rm8Ih`e2T,K2>[Z*n' );
define( 'SECURE_AUTH_KEY',  ' 1~]q-C%zVUYjnaDMrXw%X#~}BU_^Noo0*R0Co)H>-!St,&yMY.VZvc8%16X;C7W' );
define( 'LOGGED_IN_KEY',    '!Z2`4wQ]>_HNzRcajS}qlXT(z}b&U)U&Gr(DtK]gJCMv6O2t[TZuN3ud`7/W{yIp' );
define( 'NONCE_KEY',        'I`5-)=rQJR#z%lFF`y!M42.{mUc[>IAWfYK/j~4Dy_ry[KFK2o7sm$ZdC?@]x9Ag' );
define( 'AUTH_SALT',        '45FD80Z<`K+=9FSW/*>in:Aj(-C,]<@<3T~pNcbxrp=bW7ZELci[pL1@|$UH$Cdo' );
define( 'SECURE_AUTH_SALT', '5Hc&/FdYPp3Z%}e7@#K(4*!4(JX(zsm$ZovC9!1.l0o:T*perL8kbBB^jkDW`eY[' );
define( 'LOGGED_IN_SALT',   '`hEi7A=Ew6w0am~*d(SvZE^rcMnR57ueZ/?kfocx&q:bDY&,R[{>eu<`l_N~{UI[' );
define( 'NONCE_SALT',       'oN.+9H*^f.@C0L~baJlN=5>p+he6n[YOlrR3iKE_IxQ66$&  8xXjV!kO-?[sn7d' );

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
