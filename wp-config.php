<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'wordpress2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '>y+;Iu&{){K,B^G/@Tlw! yRLwRGCer]F0[d:+E%=G!^5KlPp.Ij]wk03C>$+DoD' );
define( 'SECURE_AUTH_KEY',  'UDv-{cQ;v/R-o@!N`wkm%:w@Dfh/w>BNtx^B}~JUi.0Z=x%W<`pXh#1FysJ`-iPH' );
define( 'LOGGED_IN_KEY',    'p2EpY)2y*Q}!w4EsDu(sUV9^k*_p49Xw+?oK@@IV2+D+|&$ @FsdTGmTDBrJkI#!' );
define( 'NONCE_KEY',        ':AjCB*Fx3F?5E(TPP*~B[+495i~VY]{0@._J]^|+*jeYKnJTP:<U_&c.!<GU&k<W' );
define( 'AUTH_SALT',        'ddzueDQtZ>`:?l(cDzPe?bCa,,Qev*JGXD_1T(!r~sd%u,~|?J]QLwGK*PHU.&}q' );
define( 'SECURE_AUTH_SALT', '(g`dpXDW6cYZx#T<=rIDZzyc]gOLc|?ws/4~KeXQVeirw ,gT!U(=0ZMrhl7X8_!' );
define( 'LOGGED_IN_SALT',   '[C~9@E|@vuP]t/)UZ&0 wF4tudJc)d j!0PBHB~?%4Z%VO>po9K9x#svow~MnWlj' );
define( 'NONCE_SALT',       'p@Jk!a-~=GWP7W #.&2`Fh7h%r_[!-j$`HM);)P;2O?dzq@asv_+h2$hul583]HG' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
