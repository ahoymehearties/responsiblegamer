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
define('DB_NAME', 'responsiblegamer');

/** MySQL database username */
define('DB_USER', 'responsiblegamer');

/** MySQL database password */
define('DB_PASSWORD', 'h3ll01tsj1m');

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
define('AUTH_KEY',         'F:[w&lPlm)Up}-B+(Kyd;A;b-n^N}u@GzD?445t?(FUu(2vTWyIL<kzo+wO*ql9[');
define('SECURE_AUTH_KEY',  '|;b }X:OcQd!~x >)uKG`IG.zLYI,i!YfEgaI4.p/, !%]up3dH;=AketZY-,YX`');
define('LOGGED_IN_KEY',    't`pSU+bq#C`p(L8kX^r#50;vf7Pohd0R{u83NyCBm-.IG*zWoz#[ESk[U`<b ,2y');
define('NONCE_KEY',        '3[?eRC|5F-wTo(,YN&,6&sI6S4TFG}Xt)3W98&Dp1,xe3d{$j(vNs?FmgyBtJjm;');
define('AUTH_SALT',        'N(VD{9jzQ?wI-Bau?G|_D!5~F!MzJ?O,luWl*[n[[N?5j9e|[J/-[,+q+CDnbw& ');
define('SECURE_AUTH_SALT', ',}%&#ahI7F<h3uH<zx/R3$@rs.N06V(6*m$Y Axea++`U>i{x~!-=inE]^l%xz i');
define('LOGGED_IN_SALT',   'Uh9qXk!+F+S25%-o-$LWV311i%u[z1+3!Yu6DY%@#O[+%+3C|2|nNU05sG5CvbGK');
define('NONCE_SALT',       's`FO=N+Vf&<xhu6o|R6lZZMe>N/,WP+zmq fS7f(!FmhFoB %b^8_ec$Vg:#DZ_*');

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
define('FS_METHOD' . 'ftpsockets');
define('FTP_CONTENT_DIR' . '/home/ahoymehearties/sites/responsiblegamer/wp-content/');
define('FTP_PLUGIN_DIR' . '/home/ahoymehearties/sites/responsiblegamer/wp-content/plugins/');
