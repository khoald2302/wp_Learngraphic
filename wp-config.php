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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'Learngraphic');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'r=BiZ&EanF*7|E:QEd`<HOm{m.%srjqmz;<Cogvlzc[&c(T1>p#EQR|/0@Z9{Iz0');
define('SECURE_AUTH_KEY',  '@T%^Nm{.LqD#++^jsG-s?i+2.0K8(E]6{Ow|43*B4]3MVUj%$`_51vss o.1^MKp');
define('LOGGED_IN_KEY',    'r?cn(@*]-~4FY(NC`31?TD,*Wa7RI+c1ib|#o%0bkb0B@XC[!>|m]@PrsIKm?4R9');
define('NONCE_KEY',        '3}*nt(k<|fi|9Re,S3vE/qXoY,_ZU`Pth42bu7bU:OYde|ueOU{J8oKSQr]yYh[I');
define('AUTH_SALT',        ':$O,*v):gNJX;u2]?id.DfXK|iWg^UdMyfU`C9Zt?VvJ|1m!6:3j4Z27CKVwlj)@');
define('SECURE_AUTH_SALT', '7jNXa{oQFDjbXuNR3_VlS-E[rxW[uPshB/zpcxMpu[gz{-@h /_`Z2Y(P:a3;A=|');
define('LOGGED_IN_SALT',   'xU(*}r^QNU>Ysp*mI1i_32IxPac3c.a>[|`+J+,pp6@*`pCFBy+3@@Blx.-p|)@^');
define('NONCE_SALT',       'P{FQDyeEaM7}C9qkTk&qD4TQX#t;+-mo|k*suuNW7nq^!.:T:E=x+.;+X7]w}GS3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
