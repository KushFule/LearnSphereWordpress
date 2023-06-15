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
define( 'DB_NAME', 'word2' );

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
define( 'AUTH_KEY',         '-k-c9U%(^2Qfuz>ADKFm>r6QORr%ua_U]~}>q/WoOQ[;ZpN[se@)_J:ve83OSkHr' );
define( 'SECURE_AUTH_KEY',  'gsQ@dNKT*;i3rl.GM*kyEL{rNK)Saq{G`DNfU DLCxQ/id14LPQ2oA*N6L>G2}?D' );
define( 'LOGGED_IN_KEY',    'tU9*@~Z9HD};[noZ;b|`~GNXYAbXk>uK.TN!D/Z-0};A@ATZFNLAV~]*Ld8~c_z1' );
define( 'NONCE_KEY',        '+0`hv(=~@9vW]N(*E&h+c-(3N4oAt+sIN%oZ)5}[>Z0vaHUs7FWUm{5[hgGMTh|p' );
define( 'AUTH_SALT',        '8J,+JG-=;UF:$VNJ2&y!L0z%[&)uTSiZ=iPNR?*e%2q3y^.|:Yl:(Uxa>a16|kMH' );
define( 'SECURE_AUTH_SALT', ' !SH:^8/45sRYKF[MRv.R.[^5K_@8U>ODwLmQ~JLS/jh!Q}a/k]>uWCf5f>c6.|F' );
define( 'LOGGED_IN_SALT',   's_nZ89Qlj=!/n~IR8M@U`*[h9,$JtQ?[8n[lm#JWtF(yT6b>m-BHG1rB,zQ0+ifH' );
define( 'NONCE_SALT',       'AoovR/&hVV-M#`Zqe6yTkEC0Ljc3~~(],e8e#6n@#dun2,Sli<KT(P4Cif+(C0O!' );

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
