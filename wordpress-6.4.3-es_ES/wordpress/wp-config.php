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
define( 'DB_NAME', 'carlos' );

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
define( 'AUTH_KEY',         'Sp$DfKW}jO71-7pY1h/ydq(LduA2Pj7[xN:CF`cr/:~]u);L(R!nBW=FzBAjvmrH' );
define( 'SECURE_AUTH_KEY',  ',zAVQ#K?4^Gd4;X2eQhkpQzfOO]rif~rfZC4cwX_] cBAAth.aj6rG#cf7Z%CqU?' );
define( 'LOGGED_IN_KEY',    '~3=VhgpQBc91C=#f>Y cH$|vXTi7Ek^@#u;$CI>SGe/]+UFPrJ)eF&EMIZG[~tiq' );
define( 'NONCE_KEY',        'hsLUJcNe=S0 ? >~D}T[>#M~T7Z8;Q;s<qzV&sAs61pA)j>ac0G8nKt@KHZ&K6Rk' );
define( 'AUTH_SALT',        'm%J%+TM0ZKI:ph _8DRoAvbN}B{+luTQyP<8h/q-xY.FE(@}B)PznDwLri;K2)q|' );
define( 'SECURE_AUTH_SALT', 'o<veI/s0ZZ:pxaexp,2*rp>xr`H*O |G7_Osy^AW3xo!I/4^lAo^Q{kOc#|2CIik' );
define( 'LOGGED_IN_SALT',   '#0vd~y_5Q!f lsxo7N`@%t_= .6LK8%gh121`fR)GUngfBR+XgCZ;:Zpq|0+,gq_' );
define( 'NONCE_SALT',       'B?9Ej*)2][4~_?s0hVBI2e[Nu7e33L)D0hU iB%Wand].JwA>c9#d8^71K:%)wRm' );

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
