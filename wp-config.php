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
define( 'DB_NAME', 'chokewaveautos_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'H(QRfYM^/Sx>8uF,t-^]JRX+1t1mviYJ&E(Wh(,p~iCEM@re2^f%_q]m1(:IEJ++' );
define( 'SECURE_AUTH_KEY',  'C,D];z[ Bv+.&(B.-,1*h9x9-4;f8a:Nz$2FeyE#5SY]N[MLK:wQ*,RS5nSY$CSV' );
define( 'LOGGED_IN_KEY',    '7(*5%`yHdu2}uhbAd=$._2Z.c|dd-lYc>]4U/WPv_+)%Z#!RvB?+d>`m{ h7YP}9' );
define( 'NONCE_KEY',        'US-o`r=Lo+m:5#8/IaE!,f(iUi`a~!`3QK?w[_[;{&Xu>s8+v+|D:R`a/]I]pdbE' );
define( 'AUTH_SALT',        'k2t2%8O^P8K4IJ;f2TQPCreEKd5TXm6@F<$uo<,;EJGCa=c1bn&Yk(=9k$F;r66(' );
define( 'SECURE_AUTH_SALT', '=fOy2i[OU)pcf@r<l{= K; X)Ks5h  gFI[f/q1O@lRg2I9N|(lI5(W(>TN(@If|' );
define( 'LOGGED_IN_SALT',   'I@e0A(?YE _5HI~KD.KAO|&Wj=a`O,EP`xX(:(!&RM~M+k6hY0d,F&}mE)RkZ&z4' );
define( 'NONCE_SALT',       'xw)DyL&1vTK7Y+v0Y0Og-9T&in%#,IvVhz`L9LzI]/b2OpP[EC,CVjvry5K{}%k)' );

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
