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
define('DB_NAME', 'jardindeuw942');

/** MySQL database username */
define('DB_USER', 'jardindeuw942');

/** MySQL database password */
define('DB_PASSWORD', 'deuW943JDM');

/** MySQL hostname */
define('DB_HOST', 'mysql420.sql001:3306');

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
define('AUTH_KEY',         'kcdlMWrQU71TZZnRN+JSV7SWuudAZTWyO/UlkWRUe8iaKwke6QkrJgxO8Yx7');
define('SECURE_AUTH_KEY',  'oKWBxK0Wv4YFSL3cGUMNn38Qss9lnwfaorHNi9T+M6+K1isUuSVhrc/RP7dQ');
define('LOGGED_IN_KEY',    'LyQwE9Waq9ypHktgUGuom5TCrWmekbR3oFKSBXq1RfpIv+HZ+n/aZgCMbwzG');
define('NONCE_KEY',        '1q465K2XVyNarQNsxVhaSwcKTEfKQ9e014exuWJEJgo01e0Hczzx0G2Ogsxe');
define('AUTH_SALT',        'S8YzLjL3Z4vldgDttJJp+RqW1lLumOVes1wq9vCfgLZMN1fcr5QikzMQVtV7');
define('SECURE_AUTH_SALT', 'mh4q7AwWpz690fcbUXBj7wrmPybVxRmGHRFI6TG29NuDZSLVJVMUBX9JE+ry');
define('LOGGED_IN_SALT',   'pUUbKnCJN1SUHcCty7T3nHHfjg30qwfDrdhwcCmK+d+DdF1+wl0FHvxVYPtJ');
define('NONCE_SALT',       'DJDGlhnjlZq0xSf3DF2iwyroyDh7dht2ZmlbLIAKxXtA4oaj4waoEcvSvWC2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mod178_';

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

/* Fixes "Add media button not working", see http://www.carnfieldwebdesign.co.uk/blog/wordpress-fix-add-media-button-not-working/ */
define('CONCATENATE_SCRIPTS', false );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
