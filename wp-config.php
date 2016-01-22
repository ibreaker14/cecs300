<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cecs300DBrd2od');

/** MySQL database username */
define('DB_USER', 'cecs300DBrd2od');

/** MySQL database password */
define('DB_PASSWORD', '1r7ujUjXgU');

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
define('AUTH_KEY',         '~HW9OetWl-]t_1Gx#6L;DTet#p_x]D8NCVoVJdw|sgz[C[@0FZ1|9SlZCVp_wdw[8');
define('SECURE_AUTH_KEY',  '3EXnTIXq^Yr^v,r,3M,7QfMBQjyt.6]E#6PiX9Ti+ixm+;mA<+IbP6PfXmTm*u.');
define('LOGGED_IN_KEY',    'P2IXqhVl~:-:C1G:GZoRGZs!apex#t#:_5OhW9Sl~to!4J8,8RFYFUncvcvjz}k@s');
define('NONCE_KEY',        '0R!gw|4@:CR4JZs^EXAQfuXm${q.I$}B0JJYMfMUjybr,3]ATmLetix+]9_2H5');
define('AUTH_SALT',        'ep_5~t_5O.6LATAPixmTm+]xm+;D~1G5K1KdshKdw[s!w[Cx]9:H[DSlaCWp~l-p_');
define('SECURE_AUTH_SALT', 'gv,r^0,7,3NcQ[8RgNCRk@gz[@}z}CVnbu<7*3<6Q2MfTjPfy{fUj$${^II7Qf');
define('LOGGED_IN_SALT',   'v,r^3M,7Qfaqex#p.6]9#5PiL9Si+TiXA<6LbPTixmZo~:wG4K:GZoRkw[dt_1-[');
define('NONCE_SALT',       'w_5[9_5OhYNcv>r,4>B,7NgUBQjzRGZo!k@s!0@0JYN0Jcr<${EXATjybPfy{u<+{');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
