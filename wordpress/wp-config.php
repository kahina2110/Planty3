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
define( 'DB_NAME', 'WORDPRESSS' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Wo*Y3<Z6E_[n<MV:]b]-Nb:IXr( SFTVOxga}h@?@@bI/k`)NhYcK2>di2W.I?v}' );
define( 'SECURE_AUTH_KEY',  '4@ba.[!Wj!C#y[B^Y[Z}Af5tn>32t5nf3{TKS<<IX?)c:%pH}Fa4mT1hEdW%&<_-' );
define( 'LOGGED_IN_KEY',    'm5[v+Uwnfg^(<*a%FnB~PJB `qC;)1rPnL-LWl6TJZO7L;sHUT@5OCBbR(~vw`:}' );
define( 'NONCE_KEY',        'q.a><n&dIaNE%wZ=c,@]DTUAJ%T$U1FA2).OtBfVWVn7j$19c.ZAka@je`ipsnhf' );
define( 'AUTH_SALT',        'Zw0}c?~4}C&@M%8K>y$aF<~i1N;O58gh=g=qXf!FPK=r4Mm`$*7wJQym4X`7/(bc' );
define( 'SECURE_AUTH_SALT', 'U0@&Pac!H0%[H:@UvIQaQNnU:O5s^W{(0qZ&ET7CSZ.~}&vLs XU$8=$mrw :M{%' );
define( 'LOGGED_IN_SALT',   'o9c!?u2D`e}f$_i4_%#nr,%[OgzR(5BrEc)xg**v?iz3A0H`i3ycc~q6rY*geuKj' );
define( 'NONCE_SALT',       'Mk!>p!|Oel{_9#i& ?II y$@bMruaT V4_B~{Ir}=r/%;Q:kErTFhbpF9{yvfOy[' );

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
