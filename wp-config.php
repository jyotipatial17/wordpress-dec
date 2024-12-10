<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'jyoti' );

/** Database username */
define( 'DB_USER', 'jyoti_user' );

/** Database password */
define( 'DB_PASSWORD', 'Jyoti123!' );

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
define( 'AUTH_KEY',         'tE9?piiX{M_ iFYO&U$/cJt<^[t5G/Egau0h=FgV65<7/!rkg8%+Q,f$-s/QW0;l' );
define( 'SECURE_AUTH_KEY',  'G9/S_S]n!@ktdm8`>:;:s,oV#ll]g{2l[m#oMp5e<[T2,4l8isR,G:F)bz1i?;[]' );
define( 'LOGGED_IN_KEY',    '{UhX<qs_Gl)it5GZ8MBMkZ;/f@XlmQQ5,/DUzi,+8jD@Bv_![KK2gMIU0|PFK6,J' );
define( 'NONCE_KEY',        'd=3Jk,xWuk-Kbz3$tA[Lx9ypt|cQ{Da*~FbVb1uwA/.~/>@=bM-h<=.U1P8QywoP' );
define( 'AUTH_SALT',        'YEnA9OK<M7B&-o`%|8S!L]KB8`MU+49RlIXu-O]6*PxK}m>$O-fIXp^*E^fj}0u;' );
define( 'SECURE_AUTH_SALT', '%!QAV>hVKMOtS0[gA!L(<;pl&8063f?Iq8j`MW8-=K~))~y1RNfflkKw c6=yP*m' );
define( 'LOGGED_IN_SALT',   'T#y[d`xJcgr~myli-V&g$,6!FLIlSMXu0STEDc`S7G][_aSovR_N43<6Y)**?D_/' );
define( 'NONCE_SALT',       'i )(I XN%E,0#@wS4jiU7b/3FPQ:x7=;2$eVn_7[^ojYFOB#^FD?vz=;N-chO6(1' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
