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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '`jk{f7ZfGilm)gJT]+[bW#wKy`ZS%*[.s-&F&$aHE7#cM:?oES|-F*12^x5J2=a2' );
define( 'SECURE_AUTH_KEY',  't2)RyP+&R7&glE#K>{2&I#*4*;Znv|B4(01&QvE&IWb z,oMm+vmq$`v(J5NI^9[' );
define( 'LOGGED_IN_KEY',    'L)i0nYPpVOGOSD}ZO1=Sap:#|tG?yYGyuvpL*`4(LDof}Q[.|49= tm:Z_TV4vOg' );
define( 'NONCE_KEY',        ')]1k{FBhJY/lO2s9RiAbd|o3,qkbtPP+N@cMK|96}Sv}F?*EpeWg@TyW,{((Vo>$' );
define( 'AUTH_SALT',        'u aZSAb0Ke<d{y~uYd6~SOz5:@.Vo}.fo=z RU{._}5Y>t5[;JlQ2iEotm|q0[lo' );
define( 'SECURE_AUTH_SALT', 'TAqaM-nW=B2=C:*STL[2!UK_qN~q_39_EYj-r$/`iX+<Ct<zRp:$o7Y51K]+[5cQ' );
define( 'LOGGED_IN_SALT',   '`|DOKf_~%z0<Y]_}._9bh*K0{MPm7j]|yAfd49b8vqyD=;[jj*&K]M(lP*4w$;2w' );
define( 'NONCE_SALT',       '|vcZA<EWmUlx9dx^(W=.=[n yDT2>P_jpA9s;ot9ogf[.%AZS:=?(:ntkQAfp%yd' );

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
