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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         ')Zjb|OP.<0ubB5L(Y5W&6!6T2:N92|viuCp>ij9^nAW<Q?{A%+$3EfjE8|~CA|2M' );
define( 'SECURE_AUTH_KEY',  '^Wn1Qt#2?FNS;HiVm9G_K~N1p8i$ _Kt5^l!BCT/Z,lS@H(G}k&@dx^NN@/KEW,3' );
define( 'LOGGED_IN_KEY',    'P}f/,C2OqTyeG*muGk9p2T6z5I+/P%QYWk=xXubt,.ju?N(K9z M^Qv6k2z&Ux E' );
define( 'NONCE_KEY',        ')?rPx5yJpu4,OxP,h1[,Rk3,mp7dW:IuR63f!OwD+g2,NMlPm VJruif6t m(6u+' );
define( 'AUTH_SALT',        '6*h*<P{FHBTn]. cf<v7 #um$EX9_Il;w}&sYNd bP+I]>6h|N0&0-r22`o(DQhN' );
define( 'SECURE_AUTH_SALT', '_;^wj<ry%PW.Hm1f,o_1AZn:,!j8@99S</THxw~V=up29^,`1pB3sVlj(Czx=I~Q' );
define( 'LOGGED_IN_SALT',   '!kNu0XnN 1c@%S`:U>9x0tUvl&rT@pAkE6tEf0S~DXD1ai[A6a SaNoI&o>s Pii' );
define( 'NONCE_SALT',       '^G=Md~}nB8jN@@ZvL$*eBVDm3@/m-,J;]<V}/}ij&17q X7O!;4h.D/xH/rf_>M^' );

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
