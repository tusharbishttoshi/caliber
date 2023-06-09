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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'caliber-trust' );

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
define( 'AUTH_KEY',         '%`LBuS?xDHXDaS,~`cNl;y=7A[b]z=$SNqQx%fOYg(ZS%^Z7|XR7&-t~>]gv<J1:' );
define( 'SECURE_AUTH_KEY',  'j|a2&^L+sx|R+;eN7;<+Dc5(;F$4SOBRQ77Jb,RD>+q3By7G+jVF240;50 MI;S4' );
define( 'LOGGED_IN_KEY',    'dzS.V]_(Pxfuoal%2dy}`2cUkEb~UZ0N]RIG/Rhd$.Lf[]1<]g?Tyl:IYg.V.=&^' );
define( 'NONCE_KEY',        'fD+q<nq|D3eFcW`8b=If,Wn|8}-b@I@U__[T%Ot(eM_n+Nf673g)8(R9^&Aa?w{I' );
define( 'AUTH_SALT',        'T%-E.|[zb{#V8FzdJrg1cC2S2hUo6Q632:;ZK0}T*rLb~iDG6}bzSi{S}:U}FB76' );
define( 'SECURE_AUTH_SALT', 'wXOt u=qB6!4hvH7kl!iVui{ ph07?fSyi5Y=S~.%B@(jgg]rC?ocke)L:=+pxNV' );
define( 'LOGGED_IN_SALT',   'SQjHD1Wyc =Fl>WW _`TyN]AxKs!,Jo:nQWrGl{vOd=8bxMod+&O_GRG;FEerY}0' );
define( 'NONCE_SALT',       'lz>Vt.N~qn!2-R}yj;h| f{7*BKwXnnoq4]K9{=HcI5Kw##3OQ.W|| )loH6SV{F' );

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
