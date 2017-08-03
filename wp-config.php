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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'kB2S6b&rQ k|2$%S-W?SB8tunhpMZw^/<Ee;8rRLwWjzeQhb,AV.NJI_VuQ/=P|R');
define('SECURE_AUTH_KEY',  'X?PxbmA<VBr,>LY&x`!q5=&eK=)J!:-k7b4u*`{0n6H=2T-hAcpn_Ylsiq8NvN*d');
define('LOGGED_IN_KEY',    'fLdz&/U<~26yL <,|m9zkMpY;]B?Z&,@nAI#R4eCfI@4_W!|y.aQzeD3Y*ZVNf1-');
define('NONCE_KEY',        '>Cd{=%!Zh|_9UC>t6G(x_5d)>/)e^gC bSL5Lbr97 Yz06Yp09:WE1|cRw2wv-An');
define('AUTH_SALT',        'nwI^qkK?x}dTA0SCl$:Dm[&%.Z@k^F]|lG^F42bY7g=;|P9cz0Z.)50r0HU@y)IM');
define('SECURE_AUTH_SALT', '&Hpz$MZG<%:4L6/dI^}>B;|%ztT>w#6[`mfr0&yQ78o7.^+5k>zJT$y/:ug+-mm<');
define('LOGGED_IN_SALT',   'MD^gj:}W!-w{7=mK.x=SVw])3xr6PQ^A@/Sz!Nr}O5h~@ZM p`WV`3y}6REs)LM{');
define('NONCE_SALT',       'WqWP(]gZ5oEm1`i5-wtg<ms0T/}LiTP=I>@?lw7ebsU*N~nl2Q@5{@=q@EW@NdU4');

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
