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
define('DB_NAME', 'testDBvbnsy');

/** MySQL database username */
define('DB_USER', 'testDBvbnsy');

/** MySQL database password */
define('DB_PASSWORD', '9fkWcchTw0');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'C>gVJYNBzsgrgY0,0,zRJ7NB0rgYjYQ>@v^znF7},>$UIBMB3rjYjbU{^y,$qIA');
define('SECURE_AUTH_KEY',  'xiW;.;#+TLAL92peSiWL#+p+ph9;#1#-SL9K91pdphW:_-#-pK91C1|dWK-ohZ1[~');
define('LOGGED_IN_KEY',    'N|zs@wkc8}|0>!ZRF8JB4skYocUN,@r^znJ70>3}^cQJYMF7vncrjY3>^{,E>fUfU');
define('NONCE_KEY',        'vY0,z,$rJ7IB>YMYME$rjujB>^{^XQEQE3ujXmbP<$q$uiA<2{*bPIXLE+uibP');
define('AUTH_SALT',        'S9xmapeS]_x_+pH5H9;leSdSK_xl-pd5:_1#-WK9K91pdSdVK_wo-sh8:81|dVKwk');
define('SECURE_AUTH_SALT', '9s[_wo-skC5:81[@ZRGVKC4wkdNG8wohVkdR:!zs@vkG80C4>!cRJYNF8zogrkc4}');
define('LOGGED_IN_SALT',   'RdRJ|zs!vog80|4}!cVJCrkYRnJ70F3}kcUJYMF^vnzrjYyUMF3IBrjbQfXM<^un');
define('NONCE_SALT',       '^vQF7B3<jbQfUME$ujyqfA3<TME2ujbqfX{*y.+qLE2{6;<*umeqi+tLDaPeWL#');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
