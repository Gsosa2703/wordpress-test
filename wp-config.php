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
define( 'DB_NAME', 'test-ricardo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:8080' );

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
define( 'AUTH_KEY',         'Nkn{EWLAiI7yAqK*/f{ArgnA3M$K$_y}2Q6.=5d>AHD,p9$kWYF3T-+27<>1]?Bc' );
define( 'SECURE_AUTH_KEY',  'N&jF1~8qa`J6]@;NPY:-Ck;5BV>}gOMMw]bGtIaZ,>K lqU!:0^%1t58D=}Ar!07' );
define( 'LOGGED_IN_KEY',    '!9CdR]$VG@y`]Aca2t)Ns98x5(w9jL(8<fvA.Hx/g8]n2!1LDu~v]4j}&4-0`X3G' );
define( 'NONCE_KEY',        'p3m}>AVu0)/<8L#8Yvr(V^sFa0qlv_ 0j!Z#p!_{msghO<,`z3p3{%.b0Z%kCA{@' );
define( 'AUTH_SALT',        'N+cge*gTi8<$Fst<89H9n5QbBU/giVN&m&V!toLdM^K3; tU[^%+<.~NWj84ZOM>' );
define( 'SECURE_AUTH_SALT', 'ytl$h_G)-^UBx&TWg+u.-QGjbC#+595^U:O8y!alUqnM?C{CGjfNk0eRvf{<6yyt' );
define( 'LOGGED_IN_SALT',   'l7{}qVPQ*i9Fu6{Q{:tT<j,nenV!$M_l;#:T]%sM$F41A6gj+P4{D=UtT_BFL-1q' );
define( 'NONCE_SALT',       '<Z!s`/e8}4-*@m Lt:JXtsNh5#4.HT;AWHA=cs~23shH+vb9A`P5%<`>O )>lKDX' );

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
