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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mystore' );

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
define( 'AUTH_KEY',         ',=Op+,*TL>>nl p *,{T=ag[f9#_z4Jj#UdZJ?]NAv NlXRk1*p!RW;z4q|D,biL' );
define( 'SECURE_AUTH_KEY',  '/u o&EE4P>5i%s*mb,E.5:JuHA(6N(AJF($N=Fg#jSvnP3C<pT?$8y/8k~FCq];)' );
define( 'LOGGED_IN_KEY',    '{GfTqw{3[,ol!jBmH1Y7n,MU}|.Ger_MWgEpuW]j_SJZa`xy|vYg Y4>o1kQx#k:' );
define( 'NONCE_KEY',        'MC|.t8|dJ9qHFNd;L:RBFw8Et=A^ ^5JK2(6wVKmDNUEL0FNw}EseiJgElvef`:>' );
define( 'AUTH_SALT',        '5lZZ?|VD3VIlCN%@m[?vhWHwr9^V&3<<pJ;)Dp1A5^{]))6![BA6]S@6vt*q.,Va' );
define( 'SECURE_AUTH_SALT', '0zBPH=5>##)7Oa!DHQ+;&,:%nhtbI>@D)6[~wPNUn?2qoci+OnXq a1.7d<sJX,:' );
define( 'LOGGED_IN_SALT',   '>_Oa9mtz,B[$n67uP.w*u9[zOtJj6#+]TVG :,pzc|O=@$#=?{Pi!h>RC&0`6,3h' );
define( 'NONCE_SALT',       'sr}RVdDlMykQV ~`$_wpS1]hG>w}T04oX`1(bhe@.UPW@,V%a15P5z6;@7Yi<z,V' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
