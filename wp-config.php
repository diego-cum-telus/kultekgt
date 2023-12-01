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
define( 'DB_NAME', 'kultekgt' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '@Hu3v1t0Kultek' );

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
define( 'AUTH_KEY',         '- f6Y[xUD8=rM*jNyiU<unQ$PS}$D_A]C{ZS76$l<5(u<pJV/,5`hQH(lU/THvFz' );
define( 'SECURE_AUTH_KEY',  'O!OBu 0@IU2eIALP:=7i*Uq;We_O?a6,EBA{=^&2{a.kCFI|WtQ@2Xy=!5AU^![[' );
define( 'LOGGED_IN_KEY',    'Oq^/&C3$CUuP`n>6}F4eTuJzSc<ny/:wwhufu)X|M[R2nTL*lb1>fT?,K}K@-1fL' );
define( 'NONCE_KEY',        'A07^0zGdId=b>o4[Rqi wVB,#372vNi[c+9g|iIgW7<d34;tPF]c/:ptWOTQ?-1b' );
define( 'AUTH_SALT',        '5d/|2xPl8:yT63vW3@lfVjy}x25.2hnh9=o`:eBo?C},E)-/bHw<>fth7+3ldiUx' );
define( 'SECURE_AUTH_SALT', '~#xw[lKI`%mcR9R0gdiWmvwbhc,5Bz*wJiH{[Y87YB/ hQ} K|(5b$b.j;HYe7vT' );
define( 'LOGGED_IN_SALT',   'Ly]uH>oL[1*%Z0AD:p7ZDYn:t~%GkI8F@aGkM))Hc?y9$[r^j]T`WjX d3F/W=Xe' );
define( 'NONCE_SALT',       'qirIoU#M]?mvY@<Kcr1UZmWslK4d&63^F)yV&c`O;wgn=u1V/nLW4?f0U17Bb8gt' );

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
