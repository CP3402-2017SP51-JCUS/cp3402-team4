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
define('DB_NAME', 'edwinc10_specialcreationsdb');

/** MySQL database username */
define('DB_USER', 'edwinc10_scadmin');

/** MySQL database password */
define('DB_PASSWORD', 'ihateinsu123');

/** MySQL hostname */
define('DB_HOST', '184.154.228.7');

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
define('AUTH_KEY',         'wrupsncjvcs1sveprea1ntdpsifedmxrmipv8gtwfnj2t5ss0evubf2wkp9jbx8c');
define('SECURE_AUTH_KEY',  'vrt4fqzjzefcq1amrwcfdekbplgbocc90zprtlmfa67pcwik7fszru08lmoh98ii');
define('LOGGED_IN_KEY',    'qywetzsqfq0kgdylsrgpwjmfn4fnrpxn7so1leztypgzgbf8fgb9isqsvtcy0umk');
define('NONCE_KEY',        'cgpmrqgmmoddko0okapqigs9rgupuj4ikc8cslorwlmr2v0gfflvizbeqihg4eqd');
define('AUTH_SALT',        'lctjwrwhmnnazdxtqvipd3lhqkm1ii5iaalirs1n9zuvsoppdyhmoki2yajkjwa7');
define('SECURE_AUTH_SALT', 'ootl1r4eqbpnzgazqg5bkrebysmpphixsnm6cykvyr9vztrc01ufxusnyqdtryza');
define('LOGGED_IN_SALT',   '2ywjgykrybpstkmdkzyw9gvd0nq5perdcladpme0h30lhhkwx4voov1zqu7mfmmu');
define('NONCE_SALT',       'yslbatkfbrsz9904gigmamphem2sv960il2mqkyiwb32hlfocx0gk9wrvc17ibhv');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpkw_';

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
define('WP_CACHE', true);
$currenthost = $_SERVER['HTTP_HOST'];
$mypos = strpos($currenthost, '184.154.228.7');
if ($mypos === false) {
	define('WP_HOME','http://127.0.0.1/cp3402-team4/specialcreations');
	define('WP_SITEURL','http://127.0.0.1/cp3402-team4/specialcreations'); 
}	else {
	define('WP_HOME','http://127.0.0.1/cp3402-team4/specialcreations');
	define('WP_SITEURL','http://127.0.0.1/cp3402-team4/specialcreations');
}

require_once(ABSPATH . 'wp-settings.php');
