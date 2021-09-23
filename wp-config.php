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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mw0bgoKt[VVViq)[' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Nd:LN/D7EzP-/S<~1Z1s(eqY*eI[=)^G~AbeZ)UpLce;_!bmf7zQ1,$J-uLzP3V5' );
define( 'SECURE_AUTH_KEY',  'F:o/TFm(2vph!P9MA,r9/^LA9S@{nRhKzy^aUo0JY~crPlQ8Du.K4 d.5WLw7)f2' );
define( 'LOGGED_IN_KEY',    'dx>sC8mlB%F!m}OF)&xor.5=$p#pU~GM3i=,44!r@v9t@x^T.AIb(oXk<>J.#{Bu' );
define( 'NONCE_KEY',        '?gBAjK7Q6w}J=9LmZ Z?4R=:a 5Sws|7uhYr[c(B_`ef{*T2IPnesrnsi_tgdw,}' );
define( 'AUTH_SALT',        'W(]]o[v5)iB^>]PRLlBw7%[*(e1G4&(LiwHp}_|lH-3%,]2K^EN9Q{v_6S0)//L3' );
define( 'SECURE_AUTH_SALT', '_Ac{q5*<UT43zuS`ymu-`g$d+4Q.D*$BX|{|8Eq-}9KpXv0(R+=2=h7I4F?Piy5B' );
define( 'LOGGED_IN_SALT',   '8v%P;.Uq<,OSDre(Hu@G-n?>kX@#Bm|dx%8avTKwLznZ;usztX`NqEyCtV%_,i-<' );
define( 'NONCE_SALT',       'e@}x|T!<3H4nOB8?GG%U&oqbXDEAx+uQoPGwsGnv J]NE0TNO.[hJBu!^F;*c-EN' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_25';

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
