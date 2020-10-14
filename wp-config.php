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
define('DB_NAME', 'isppubfgc_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Administrador1.');

/** MySQL hostname */
define('DB_HOST', '161.35.96.143');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'pzl~<8jW^];NDlK0-=^2SMPmV`C`v4QX6(n4K8=vR /wiqLTz+q=clHj  qZ%)z5');
define('SECURE_AUTH_KEY',  'q5q$8CL>x+1oWf/r#DW`DEB!1yi~@DdPllGn^<o0v:1W74F{ya%<ePLa?_@PviQf');
define('LOGGED_IN_KEY',    '[<F`^Z}iEzhe(i&#U;&j1r/GE]*I #rE!QimGQSs%_e&U^7?tUe+zw< ~=n2ii}`');
define('NONCE_KEY',        '2b&9TUkyfEZ^lXGLeH)kN4AiN5]U@kVZV1Cq1x#uKBqDtHHk5Q@lj8jMC%rpp*fm');
define('AUTH_SALT',        'rexZ{BT-ZP=~Q oksp/[$-I$$thf,#j)>/y+JN1&,.=WKUHJ{KhzpnCIquE~SYQ<');
define('SECURE_AUTH_SALT', ' 7&+/Y/ PQEPfUw|Fv++_ai*[ r]]u4KsO|^`.F9u=R:hgtg<G!B:CP.ZCC}R@v<');
define('LOGGED_IN_SALT',   ')w8Am|2a2r#O[/j$zhFDg]bUY309ET.:Z<:}W~f/5D[|frg1( uL}1%zQ)!=}->)');
define('NONCE_SALT',       'CTai~%jD&]N,ckgh+!W2ht$&F).iU{x`7H [boN^Uko(JT +`82cY%L~MXg+q{>b');

define( 'FS_METHOD', 'direct' );
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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
