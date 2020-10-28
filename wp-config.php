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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '57xv.G@PP_$EF1L%mDZv)aWd8RBfg?>rDOS}/qbLL5|lSDMU%y?_}*Z>t!RlC:%_' );
define( 'SECURE_AUTH_KEY',  'm@jj[`9rvm[PZ*jkGaW1*SHvPqIVVNk6x5yzeY}2Sz+5lJQ..^$o<nUhlRogT;y6' );
define( 'LOGGED_IN_KEY',    'W23I&XbY)mxw/=N`jVy<YN-*w5ffnb.u^BQ0nAgT8~l+wH|5P!`5QLUM^X?feM3]' );
define( 'NONCE_KEY',        'O.DNfuHPNt;zJeIs2@[#83#dhpOcl(ThR?;;ENKcchx=KYk>!Vz)N}~We =(G_!5' );
define( 'AUTH_SALT',        '=.@7^AVXJ_y55%X:3l{Bd07&}g31}h~>cLqdBR&qyjnSZ9b)DXx#kMohHF_!Ba^W' );
define( 'SECURE_AUTH_SALT', 'eSM7h~H >TT<Y~Tk4^NB4QA4E:BPiUlGr>*DXGlvhg{sU<6-rn<,,~L^!zfwn5qu' );
define( 'LOGGED_IN_SALT',   '[47(S]Lmx/<21qYD0Yq6[ ufkh9caP%#|-@MKxvW0*jg6B#~2Vz+#:C Y06uyu1$' );
define( 'NONCE_SALT',       'L}{TFV$OD,i6DF,MFoa]5XD )_|Y9}~tUMc(qT1mWrf}(PaD{P9_ZBff5a_&}>]m' );

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
