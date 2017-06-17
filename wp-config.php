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
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'q/2RKRdE7_,X^zi`mY>QUn8XGlX.)1U;.Yqvs*_I0f.aZ+ALq:H!M8q3)Bq=dl!t');
define('SECURE_AUTH_KEY',  '<GVb=kMm5--#B>-O`-P;`tXM][Cf`lkh7k6[I9!SI>o*|Zem3*D}iT&#%MX2dxm+');
define('LOGGED_IN_KEY',    ':?4nO+T$zheV`Y/0&L`#C[5TBKXt|R49lkT8sv,OW9jJNYxlam.Q*/lN0oyBg@WU');
define('NONCE_KEY',        'dJy-~Qk5RHH54qQJ4N3BJjEQ!,{-jLr0#8Czd8$uzp&u7+UVjp{}r-G}tKZrh p#');
define('AUTH_SALT',        'MtlviJHJaK9e^JEh`6}5<kEOZp-)qQ29~c>,75ACjV_=k7ba1w>!*u2` ,j]f^g7');
define('SECURE_AUTH_SALT', '<$^nP;sBtJEa@1+7tc2vfw|LL},1Q}@io_u5uaS40?Utg~7`5$O);n)imA%f @(u');
define('LOGGED_IN_SALT',   '<rR?)f% |T61ZZWP*_:_u|ol%%(7a;E4a*uk6vWHhA}6}w^^ofC^B2!?;h3g`|l4');
define('NONCE_SALT',       'lMI:p6}Yc}`yh04B#K4AW)qcCyQwTPP|I&c@0?T=bx=*1=9,Lf1Q.Wr`U:f{AQ4]');

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
