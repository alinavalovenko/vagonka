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
define( 'DB_NAME', 'vagonka' );

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
define( 'AUTH_KEY',         'HM]XufG)j,.iw$+7?$dofFzLXa};O5 (MFQ+JJ?JTC:(?z8;2cqu7+^c84p;HzV6' );
define( 'SECURE_AUTH_KEY',  '=_#n<V<jI,BZ)1za:O.gT/`d=pB8q1&kJtYu&n)V@(%(soTz3luBxqV@F$!zkRf,' );
define( 'LOGGED_IN_KEY',    '*e@<BH;~kiP;#)x9X)L3=HKr]~Q(k^Fq84/Wy3LAW%p 2R@^5af%rs %j(g7YvTP' );
define( 'NONCE_KEY',        '&c#J(AhQ].c`9/#KOv^f2LdY. nf$_$e+2 tK.RP?eVO:dx5MwtT-f:~4y=IeT@6' );
define( 'AUTH_SALT',        '4o[BA8^KmMWI5Kt%ozXdfeu(z!x$?W,~.-2pkcY>k?@^zc$EKV8$$4d|[#wJOApO' );
define( 'SECURE_AUTH_SALT', '6,wtsM0QBK*j%80oGaP7G&n=e.E-p-B0p9{53sP:NT}6T2!BfR-/qk@_,pt^m/E[' );
define( 'LOGGED_IN_SALT',   'Xf,}:h-[SrI!XalEKf=}uBH7; cBybhCbv4i;LH@I/Kj=*=A>3sCpdyF!wNq.MYX' );
define( 'NONCE_SALT',       'rgKY}44b;QLQN `014R|]@!/%LDUwkIW=.LmU#q4&V<S$Ve&N=^YMs9E]tOju1jT' );

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
