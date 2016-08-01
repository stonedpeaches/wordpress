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
define('AUTH_KEY',         '.jq|&c|ZD+@~q+VkDNz:8HxV-&e(Vk@4SCln}-nm9+Bd|N}}r4OgGq$%E|[SwOnI');
define('SECURE_AUTH_KEY',  'Vf5]N,n`$*lQg.yk]nvm(p><a2257ss+,0]Mk5E]b3kKzLyS8@`tWYS(#Q-`1|fy');
define('LOGGED_IN_KEY',    '32>z0`N&FV^}KIVh<FJ]m;1zht@qQOm+(8 1+Jvk<#szHn x6hm%2J,k-]!?SK@-');
define('NONCE_KEY',        'eWy7e[vA5#elUSbs D;4+ecH}R(8V|w]P1e4&XhY&qlwuA!IM4/3M<LlV-FBQ7$g');
define('AUTH_SALT',        '*+d@Ncy%Y=FJcpd,e.IsjeE[cX8+|bq~]D-Ikaxy:{eM*Wj:#]*j$Y%kFq&oKB$-');
define('SECURE_AUTH_SALT', '>K7<ta<GY Tcr(-qr4b }_OO#22-Oq?.JJt(Vr2o[[! UQ=RDfENa-Bp<o@vG$Yx');
define('LOGGED_IN_SALT',   'YJNq&#Tw=@#u:rba,TG.yI[;]4diF6CqQ!si+_K^+%?fAJ-E{*j4zTym3FE$YIT/');
define('NONCE_SALT',       'g5m(.c~aK]SIru&As!g}KjX^ZPV4;(?*WQ_bl]qB;ST6C[$-~(?%;&Ys&d}~Y$&b');
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
