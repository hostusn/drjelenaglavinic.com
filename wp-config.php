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
define( 'DB_NAME', 'wp_drjelena' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'drjelenaglavinic.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '8@OkVU(PGFuvWmz2t`7zU19r|M?Kkgxg>;okZXN3r? j413({J324Jnod8]B4S%y' );
define( 'SECURE_AUTH_KEY',  'DT*UA+?.D={U/G;VTu8ns@HK6RR!8&hz+%,^g~V`{@smY%E$lPG]N;Td6BA0pFmE' );
define( 'LOGGED_IN_KEY',    '#dA0y%j9lhWj~u8J$>CJ%^?aF.^c#.isPQ8W;:5C8!`34A%7V,Dv>MhdR3V:-j5_' );
define( 'NONCE_KEY',        '7__6$a0LS@f;Z_njXx[=;jv#KJmwHdp6#F6)P&t{ju<~`G4zLEF#W)|CNFa-A/~N' );
define( 'AUTH_SALT',        'mtzAP*GmN^K C3bYU8jd%f(I-xl!RAMr/UwF>TgAEbh/>?I@WK(4$/zs8/XP`06:' );
define( 'SECURE_AUTH_SALT', '&ykIq&Lw9W!2+>h&R0!rWF;14aUM/fJBTCGL!Asz7o*fRNs,uj=:ZdI`lfaA]o%^' );
define( 'LOGGED_IN_SALT',   '<]7i2:di[8%=[rAcv,WFb ed6msk.D-;lRE<X88C+x7Hgg@8TwqZA}^CM{bf`_%d' );
define( 'NONCE_SALT',       'qi*M!u$e2KFDy=X08a `>i<8151Rv6x|T[i!qv>9_^Cv2S]8Mw:c3(>NWxi%IqSz' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
