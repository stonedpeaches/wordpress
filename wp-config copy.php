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
define('DB_NAME', 'stoned_peaches');

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
define('AUTH_KEY',         '$9}?@gZmJNL0KR|&YDh&]=6{W5.8%<DBvXHM^g)bf nN9LD+NH_lR6pDk3? B=[:');
define('SECURE_AUTH_KEY',  'fTCgQL$[[H8$:9={90mR^@9/TY%)IqBvm(SG>[f[;6O<]!8:j&i[%lKb`+U2W$=?');
define('LOGGED_IN_KEY',    'tNXLQ,qx!P Nkw.<ooKUP/f8oXsWvD1<Cf{<uWSU3{!~iF1?z&9Zx&TQ+0heeO_%');
define('NONCE_KEY',        '}9.,u6J$WYU^B;T/Smc;Aj)_cTH%+mCg}arWeJ;TD>4RcX.$4hq@]&=OQ])7GRb^');
define('AUTH_SALT',        'eF2uEq32fFE`el<fa((i]A:1_o1:`MM_~y@*0RAyV{c){jGRqmG^-tOj5gO1Rf+s');
define('SECURE_AUTH_SALT', ';T5/W#5Y!Y6LB- guDGdm o*78AtWcP~P=Iz4?O1qe.&D#D70i{*W21o,O=kQfCB');
define('LOGGED_IN_SALT',   'I8-^iOUJk]|aS(P=$V7qtlMmXRc?FoshZ`p$]BF9p5{!Dt&2U>4@o^-)HWM:e:$.');
define('NONCE_SALT',       '6[? O?g87Pbb@@=9%4mMW^ZHjWdQ6sJJC0$vG5H]{j/h1,j-cI{8;![+lbZHo$o[');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
