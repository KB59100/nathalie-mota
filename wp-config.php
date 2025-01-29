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
define( 'AUTH_KEY',          '#UllN}8Xtgd:hx9ND0Rt~eLWOex|KZu~)wPqKY]@I{)#OR)N}:<pkB=aR)Tc5AV1' );
define( 'SECURE_AUTH_KEY',   ' kud^Cb.)wHc.kdHUvWdD22$6ori$;Uu<wYd%` qHbf@cxG%gU[r~WM>,>S8Nyal' );
define( 'LOGGED_IN_KEY',     'ZC|NA jLY7t#N:P#SqT6Bg&d$(zw+<oRwwd>W#3$/kJrAG%Ys(j^;Ok=)#T-%?ix' );
define( 'NONCE_KEY',         '&j,l1-}GD_[&2C|*6y=]&yc+tc.v/t#CPUH.#d~tV8QlHgPS7)97z<Pt62BGW6no' );
define( 'AUTH_SALT',         'V1]5 :LK.$*#|@,(:Z-9h<pAp DnPlG7@(=gPdK-|Mt%ie<Qy<mtYP]^5!-l20oL' );
define( 'SECURE_AUTH_SALT',  'R@Esm+3%+@1B]!h_**H2>EH;V~B-D3<*D!QuR |B+t [!Ij7S62Mj,g@TA(f-,>E' );
define( 'LOGGED_IN_SALT',    '^{UaxMsItwdbp#/l%w<@|rmisdsClju*(DM}cH~U0Y1Jj:|S7tmQ,s|,)M4C_;FT' );
define( 'NONCE_SALT',        'SXHiwXE,0r%m)dN4RPa~.07ERv}vntIUjY-z(t-fH6Ljqn[i0nB^|M58f{ApY4O*' );
define( 'WP_CACHE_KEY_SALT', '/q_/.-6FUPIO{&A `rUA,?x;Rva`$|Hc-Z ,g/ fI;Io]O7{&4Fk-,5@NU[oc*p_' );


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
