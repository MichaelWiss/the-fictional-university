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
define( 'AUTH_KEY',          ',FN/W_CYAo:$go:PT9`>TT9XmIGCk,(cnT=}[K>{Yyo0=ZUBSQJUf5^3aK8{AZ&&' );
define( 'SECURE_AUTH_KEY',   '+<J~t,Krhr=|,~GYHQfSl]nI9;|^Qe{UH!AY@<6).En2![8m_:Woq9K-*eIf%8cL' );
define( 'LOGGED_IN_KEY',     'C>5b;K_]7q2:}vGF^v_*BmhM1yB>A:w4[4MRmnAGr~rL~7<pbAYin>0mR;N5+C|]' );
define( 'NONCE_KEY',         'z?:f`/h,s[!d_OeIOi649tL,EeFLn?-%^7*<Ooo_9}d,O_o+|N)`&^FATle[/EDr' );
define( 'AUTH_SALT',         '%({fr[2%zq}+]l1MMx!Z8%aN5[|+);V?)niK|b5yW4t{6!L.8-; olJ;uZ(7,^u0' );
define( 'SECURE_AUTH_SALT',  '<_jpjY=~PE2[<-KQiWe3!EjGw^i?E2i0Bn_/wRAIGek;Wn#lwhfX, H57il}0z?O' );
define( 'LOGGED_IN_SALT',    'Cd%kkn6Kr34Okj:MT=|uP(0c8mG{vDK.}cC=](] AFsj4? h@=LgBs2|ofdL oKo' );
define( 'NONCE_SALT',        'fn!(K#AHW!(%j=QqLy`dHir5Y@y*B(~+)kEzjP!~l01N^$$x|1_8EBON;.B8swv-' );
define( 'WP_CACHE_KEY_SALT', '03f&R}VJB,z..|;s)=k Q0c]<Fy#t/6eu^ZQUuC:wug)JK0Fqc2!qb-/eIynchtX' );


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
