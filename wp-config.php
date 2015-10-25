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
define('DB_NAME', 'firsttheDBbxj8j');

/** MySQL database username */
define('DB_USER', 'firsttheDBbxj8j');

/** MySQL database password */
define('DB_PASSWORD', 'HqfQCI3qzk');

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
define('AUTH_KEY',         'nFUUn$}BQgv{BQfu,3Ifu.3IXn$2IXm${AQm+{APfu.APeu.2HXt.2HWm+]Lap*;');
define('SECURE_AUTH_KEY',  '}Mcjv^>BMUfry,7IQcq$<AIUbnu^{3MTfmy^{6EQXj+.;6IPbmu*<2ATemx.{6H');
define('LOGGED_IN_KEY',    'T*3IXmjy.3ITjy<EPfu.6IXq*;APbq*{HXix<6HXm*2DTix#6Six_2HWl_1HShx#5');
define('NONCE_KEY',        '@JUkv@>4FRco^}7JQcnz,07Qbny^}7IQcnz<3EQbju^{7IXju^<3EQXju^2EMXiu$');
define('AUTH_SALT',        '-COZhs~[1DOWhw!:5GOZls~[1KRdkw![4COZhz!}8GRZkw@[0CVcov!}4FNZks,}7');
define('SECURE_AUTH_SALT', ';e*;DSix#DOex#5Law#5Hap~;KZp~:GSdo-|19Rdo-|:8KVho-}8JRdoz|0CKcoz|');
define('LOGGED_IN_SALT',   'o0Jjz>4JUkzFUfv,3Jfu,3FUjyAQfu,3EUq$<3AMXju^<ALXiu+<2EPbt+<2EPb');
define('NONCE_SALT',       'Dap+_;9HSa[5COVho-|:9KZks@[1CKVdow!4CNVgoz|:8KRkr@>0CJVgoz|4FNYkr');

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
