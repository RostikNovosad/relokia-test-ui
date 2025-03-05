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
define( 'DB_NAME', 'relokia' );

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
define( 'AUTH_KEY',         'Z%@`*mZBJVO];wHmqD|:l3Sv;K f9z@3h[Y|GJovj>6q18%Nx,Zu?=7|H;tR&kVX' );
define( 'SECURE_AUTH_KEY',  'g|nnK*NZfsLdwItp7qCq:[]x9UKOauNJ@! hkLRzAVeHV1[ZiMRLXA~*>Rf9CG U' );
define( 'LOGGED_IN_KEY',    '3OW3}wW]NI:=%C_t3>joMWg=2,wqqaXKGA&bH8Trd=>#4ksp:0qNdI<!^t KPR%V' );
define( 'NONCE_KEY',        '&3{]eC9>d(/>aOsg($C[r-D6(A8aY%g*jPPW~Eh82 &vUTt=.<DrZNqndV|DUg5a' );
define( 'AUTH_SALT',        's9:O)N8<{V+m/Wp<dg@|2aKhEQ0+l4*UgXj~_A#IGU/TMVg|/B}V4_4Wzl/?$sQB' );
define( 'SECURE_AUTH_SALT', 'A?C&{v%tDvt1CKm,R[Rym0Ck:qrYZ_g7k_-tSrgDJrr]{2CVHQ<;^x*/%CxiW`sI' );
define( 'LOGGED_IN_SALT',   'pHz}M-UfU)7SnS1afcWdc@e@B3 CS8eTc1i:dZa-g]n4*8Et0V)w3:&o[s=UqeT:' );
define( 'NONCE_SALT',       '!0CbM~_EpCkKp]us@K15)^o8CpD{}Hu&Z 0%2o)|MrIJ _WN05=(lyz`V d,9~^I' );

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
