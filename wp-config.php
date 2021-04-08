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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'myblog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'D&Z;H~^j;P|7*4/YSPcyLT:>b=i.1PLFb<P`i6(yDJx}zJ^j}[t%aaB5q;C:f/t0' );
define( 'SECURE_AUTH_KEY',  'sgN1[X<Y76c+CZEo-Z&UHT?=}ojiOGDpJI)^{E}R/?!TVd&J~*QaL(PWV+DO{.ZZ' );
define( 'LOGGED_IN_KEY',    '6q#8T<!&{azk5h?n`Pw9YkUe[/u7)42f9rC?+F)P0a[}Xm4WUCBR*X)LEB@9[a5@' );
define( 'NONCE_KEY',        'C~|*qEHN)ZxU_lA(52I^Ht~ry12>hR^uIEG^-4C/dkq2=Y7E/s7W(AV)y11q@Qrn' );
define( 'AUTH_SALT',        '@.9x~.?k&3Oy,6B(;*N?v+,5:.<R/;;zwP-@oo5xC$0rpFLpBH?o6mbXC}[1v.t<' );
define( 'SECURE_AUTH_SALT', '(e|vC8c}.9y+eh3!1m~.H}hgJ4J5,*[VJSi5bi|9o lpNMXk/@m>L*zunyn(/u`O' );
define( 'LOGGED_IN_SALT',   '{XJH}8{MdNP:4vJ{>Qk-9PY*d.4d4e`3B7s22u0}v{yS/~3FI95wktfE%A1bcv]^' );
define( 'NONCE_SALT',       '=J.@%d.r+xuFte@d5L4)oNMGs>h6XsXw._F2fRoz!f,zLXuA!{&rwG~Ff&ANbi5Z' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
