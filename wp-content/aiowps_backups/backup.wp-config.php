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
define( 'DB_NAME', 'demo' );

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
define( 'AUTH_KEY',         'tfa>Qr 3+v*ard~Qmb$XCVj:inOI&M@MaN9o@-cQ0T?};pm#HB2mp%u;4$:EOWRT' );
define( 'SECURE_AUTH_KEY',  'UY+dySk?ju+/kq-H=bRJh)8j6vUtEMA)j@vItq3 ut(E&=%4 9?o;YG@&WznNM{+' );
define( 'LOGGED_IN_KEY',    '2#urAd(x`Z|cvh^_/NDVX1|5WzXy5Ei<;1UoW!=w44EO5CR:0,!@0L=]XhBeHh72' );
define( 'NONCE_KEY',        'nTWZ3h}kNc88zZ3Hq(LK27DPRrA<w4(T>{$R/,fclNxb6S9j]4?1Rgo_@S&7K.;f' );
define( 'AUTH_SALT',        'BjS%qc6U:?]+S.cxbJuq~.8WN},l[, 16/BaP1Zy2?O1;oOQ6.P6o,,Ih!%]4W5?' );
define( 'SECURE_AUTH_SALT', 'HOGb0cGkqI8&%!loYt oJyn}#v5xVHZU6Gj}dczc{}j%N^iIDU`vZtTm5a6J#$8}' );
define( 'LOGGED_IN_SALT',   ' J/LvUWngU7[%zAt<+rQ.l:j;bpa+esKpE,q+<vgCQ6M)A+AG B.<XbZJooz3r^c' );
define( 'NONCE_SALT',       '>`PX_6u5q8jn$jUX]_%ow2}qXYaW]>G]=<<pPa.+&WWqMOLJ`dU&9.C5oPX[2tTm' );

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
