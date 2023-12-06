<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'sakib' );

/** Database password */
define( 'DB_PASSWORD', '123abc456' );

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
define( 'AUTH_KEY',         '6QSM|;4sHqk$U6QKSQ5`v M*Vp6/4FDV$C+@lH9!u]~&!?ZEr*01]H2;?V8ZE{M]' );
define( 'SECURE_AUTH_KEY',  '5rYTHp{gT>sKGgz0lX29?_=T4fcA:,t*5`av[rX( 00f{EB-EqL-V~Bqz0Q6eB,D' );
define( 'LOGGED_IN_KEY',    'SXb>b0{K4?s7[:`$%&Yd:q+7Y|5klEA2$w<Ky5DFY_!`~j%_+ts.p^,kP;b9$Tw`' );
define( 'NONCE_KEY',        '{-.Ppx[5c[lYuC8g-j8Sj+Ks7b)FTb<]s YTB|4y^>f9N@{:jcy$Yxmu/=i.k%P=' );
define( 'AUTH_SALT',        'UKc=;r; l2GI7Oi3?vMRT~PWNYS>;~G~5[*|RZ{V4g8?>-@fZ;8 ,{4;y?l/&eSF' );
define( 'SECURE_AUTH_SALT', '7m5W8Wu}BBFJQNKPMwmp6j_Z&;Qa4b+GJo]zRnhEGy^<!YhT|3]4W,yroBBmq1J*' );
define( 'LOGGED_IN_SALT',   'g6#]d<D};5us<4>>g{vZx*EK^WsMW5MOE)#Tv5X.} ,9F?X_2t:a-c-~w[hrk!c6' );
define( 'NONCE_SALT',       'AY(!hmz5XAQYWH^#+S1I{6l7ZOMovME9BXF<Zt #y!SWEKQl-7P2=4.ITw-$Nl>W' );

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
