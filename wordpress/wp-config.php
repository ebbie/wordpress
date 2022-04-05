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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'wp' );

/** Database password */
define( 'DB_PASSWORD', 'secret' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'K)7Cn]20I.i4bsr3)}Dw; s?P4{.D<Cf3PQ9OuFc>2z7L<IJ@1|WSo#qmK}9*1D.' );
define( 'SECURE_AUTH_KEY',  '2ObLk?Mih(U<)-7lD-/SK/D>n4{&$h(ZkG;*1L0LcP8K0{-y~vYW)@0;JLpC$JUk' );
define( 'LOGGED_IN_KEY',    'fho$so#KTi7jO#Z-x`F~H5r10.IDaZa]S!_OKFp0V,ZBO}PQM8z;>UX6t}1v6`hh' );
define( 'NONCE_KEY',        'd? }f{^ qY(+SvR7%ema9^08IIpX<vC|nqNP.y$%5%3n3x!8UUmp|zSdj/m=AC~`' );
define( 'AUTH_SALT',        ',ryiYYGV2poiKKR2}PIJo{K!{RV~N6[R]eV;(A==%z-S+;YKLsoUJuuW`X6+OaZ!' );
define( 'SECURE_AUTH_SALT', 'xF:R|)t+{://HzPpD-L0h%P1TLbn;uKzK|X13@53B*?0EWZ7rXyT*/NC41~=NIce' );
define( 'LOGGED_IN_SALT',   '1FFFaPSF&,$0<;<MiV]_a{!_tYvb15y)bRmRV%M&qt@4iu~}R>gKK6_/K#Z3l`|Y' );
define( 'NONCE_SALT',       '=dyp%;n2Ct~&uF{+y:CYg(,*<?3MLZ]n5um~w8}8-TD3[(Zj)8oDmlopsuj}+goY' );

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
