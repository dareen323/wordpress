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
define( 'DB_NAME', 'project3' );

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
define( 'AUTH_KEY',         'H)fUVBY8M|Im2nvEIq7IfI9[)0vW9`cm)Z^6YE+=P,Mb2[#L,eQxuk_nMd$Yrkvm' );
define( 'SECURE_AUTH_KEY',  'RRDndDsC1HNP5IV)k)u1r`wb*Z*o(+kVb Gb<Skm|/hMGEz0zWlQ3pj`}:12l]|8' );
define( 'LOGGED_IN_KEY',    'Rk=J@5ijUZwiVj!+@Ne}Z&QNLC/U2,cp-bwhfRjRH!M<uF-[T^D;0:GqwWBwMurb' );
define( 'NONCE_KEY',        'KKe$1aD[dR.;B1K:@lSV:> Sc:bQ<psa!!k_7p`7ms]*ik;TAP#Dvf;I_e#mlK$*' );
define( 'AUTH_SALT',        'V6Q4j@={:S03eDV&L?NPJ/p U(Pp(KW4:K/Sc>f^@gtERcRi|_{!6/SSs_#^EC1x' );
define( 'SECURE_AUTH_SALT', '=e8w6kU;t~xVeALrT/F9 Pvnj 7-(;_ x->sPRu6RfO{q; 0t5HZ@Xp~qX,9rk|n' );
define( 'LOGGED_IN_SALT',   ',//Zkv}0s6=lUMNi9H|G<A>+Ps(x`oWyoW30yu#V@<2~O0CydbfkL/I7omZ=2<95' );
define( 'NONCE_SALT',       '8[%Hi(i;LOg%eD&jeChRgc4ZMV1}(VE0 T2;w4i|7sKa}z0b?TZ6Xw1V7{@NpN2/' );

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
