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

define( 'WP_HOME', 'http://oscg.io/blogs' );
define( 'WP_SITE_URL', 'http://oscg.io/blogs' );

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'passw0rd!' );

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
define('AUTH_KEY',         'T]>jps-6|J!}gGg9V:u;~m(Ky*?9>qOwVJM`=`:^#oFc9U)D#*zx:QZ:zXf>4Xxw');
define('SECURE_AUTH_KEY',  '3=HRGp*?HnP<p3f1@y#C#.O-@Oe:_oo2M,wYN5X228mRMj2a&8E#5JI1(P!J?(1I');
define('LOGGED_IN_KEY',    '+guHj5}E(5p$qqR^Q.Wb35@z]dQb+cD=ylZ*R:;|@q=N|4Ev:~y[.flpJek)u=-S');
define('NONCE_KEY',        '+K&?K-L=@45Zf:s|+!,PJ{>(u:ZX6Pex6n*z5^K5Xns0Et6n$,1-7Bxl0h#;d5WN');
define('AUTH_SALT',        'dH.7!YaM<xqzOi19gHT<W83]ThpMn>~ a+yy-r A85uNI9kZhy]8]9UxS))WQ[bC');
define('SECURE_AUTH_SALT', 'r~yISFdVs[:600V4c2L/lzU-/aBIa$YcFD;qIYX82,HKtBu*9>qNVbo13kcI5fl@');
define('LOGGED_IN_SALT',   '-$mf^b>[xU%(K+C(B~^W-<i-YAW2)t?{H+,VV=;PVWJ-Z[WbCgEVtWFz]V:;QGBX');
define('NONCE_SALT',       'kL0(~D:z2Z|AjyXH}%^VXm@X-.qx-|v<*Z-eP2{ue)?Ju5%}%[t1?cL|Xp|jX7HK');

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
