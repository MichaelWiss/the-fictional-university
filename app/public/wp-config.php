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
define( 'AUTH_KEY',          '6eO>gVQ)V2WbubQinc`Zg;|Sy;WV%{.Anm9Qf6yUmqkh5lPdn78_nyh]48xngU0(' );
define( 'SECURE_AUTH_KEY',   '_j`]td*J:z2jIvUrK) |08R!M3@S1?;2th FwJvk2GCQ,Jwx[8}>{.B4v+WqR92 ' );
define( 'LOGGED_IN_KEY',     '%g]Y]6{WA.jFGGcP T6g-w)B] >~}vskBtUqu0!5lmiRamPZ%zRc>y hVv_KKbj:' );
define( 'NONCE_KEY',         '1`Akq#QDM`Ta!6kZ,.XCZ6nCnW8F]#s8KSMID1CAhKGbuIhe;^uVfNo0=IP}PG:)' );
define( 'AUTH_SALT',         'M5V[Bu63B[e6&XA#5%C&KMhJQ6]OQ0IWS8|/$:.N]8C%$oT7jPZ| VIXBiPjf4lR' );
define( 'SECURE_AUTH_SALT',  'lY!-eB4?%z G9h78Z)-~Xrql;_!Aq6Spt03ms%3jaoMf5K`$&/L{/hKn8D{)LY^D' );
define( 'LOGGED_IN_SALT',    'RCGn3Ci&(48i$E@tp?<KfC8-UDB.c7Cb[6p.8Y%I1<(3o<Mv=Xy8$@fc=}Dh0b}B' );
define( 'NONCE_SALT',        '&!R?[!<hdB:8fU,Ap|5$6?TJHUI&A]tHDI|W&_Qn+Bai88Kc)Ep1Xmm(hXvgS)~;' );
define( 'WP_CACHE_KEY_SALT', 'v2.)/~Wz?ns FERk:e:^l]=V#b|pt|lU]qd-Vl aj6mAP:pt}g0{Od!_Ih8^z$Uk' );


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
