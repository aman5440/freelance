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
define( 'DB_NAME', 'freelance' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'idea' );

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
define( 'AUTH_KEY',         'jWJ)<VL,{F$}tqgvH@G#(,o,1D-uMuh/>ingm^EHIqz|Dvlm4QQji=fly[tB;p1:' );
define( 'SECURE_AUTH_KEY',  'xy3>7lo%+f[Vkon]@`%Rib#^fs_0^T^PMIt}prP,S,UT~Sk|yuAMg%ptn{zki!<;' );
define( 'LOGGED_IN_KEY',    'x8KEq<a*axGs}`>bW]A=3=w;LHg^[nMIyElOdpamXvkDTR/A9SqTyB8sq*Esay6E' );
define( 'NONCE_KEY',        'Z84>K368*/K!(.Ken=5!0NxJm1%O-fv`b2e-ur6Q_qWr_l00=Zz!rW5 0H@-wXaE' );
define( 'AUTH_SALT',        '6;^;^IJqVduNEVle#W>#`#~*IZ#+8R`Fi3Ad*/!TTxTeQl|#fIa-,F&V$C>3,g4o' );
define( 'SECURE_AUTH_SALT', 'XaO=-Q]^@Kqm*y_H8>Un>8|<%+]26D-fHMsqN[;(tn]M.lXv*+w5(JqC+J|}$ry:' );
define( 'LOGGED_IN_SALT',   '+F aKtHcFa?y2{J8I6tD88[BcfUGT8xXY^xSD=Sm=8-Y<<RY&5M^L+so#Fm9kG`9' );
define( 'NONCE_SALT',       'S4Z-Ib 8et&RzOH&:FL8WswE5d<}s+<Jg[rQf7Y#vd3pv/.Es?/oeBQ&`}OL>E0}' );

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
