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
define('DB_NAME', 'test-wp-plugin');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'U9;0IU2/nBPy1p}*%aWze.|p7HfX.HzzI1A!{t->Y9!cv(Er<?^IgnG5h-,W1fkG');
define('SECURE_AUTH_KEY',  '+{Ma+?t@~7t!:Z[#MA@r{>C@lg*_j=O|-*%svyq|vKB|`s0{F#i|b~,gTbIUK?T8');
define('LOGGED_IN_KEY',    'h(lG7z]#jY=3Mc(#`EB=fF$K*&%a+G!]yA3AOjWJz^ |A9zyiXqLW?phiFaZ(|tV');
define('NONCE_KEY',        '<I=yZC,Su^; !XHxi}y.Z<((_+>#_d==DYt`%4-6w6sDBfsR?i[=}}9=;$}%J5x_');
define('AUTH_SALT',        'qQp{}2QkOj|xO}]H)#dlpZ]oA@4||5XG AL=t,}M>A5Bz|0j+E.sm&](m+xSGuB$');
define('SECURE_AUTH_SALT', 'vpUo^C^||#D+UP>v|]QmMZ9BP^D^[Y-;X]W,%N6>I{{lP=+9|0YqxSj0eluON$6k');
define('LOGGED_IN_SALT',   'FrMQJ&j?x1`aJQJX++/xCXNYV&{eV!NJ=tm9^G}L.+V~@44_S.wrWQd|1f1!:<W(');
define('NONCE_SALT',       '|5z+!RVDUba|(1+8,64ejD[6SL+WKO/g(n+xZOQ{UZZ,(tl+ic9+olbw H<^3o#g');

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
