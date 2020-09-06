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
define( 'DB_NAME', 'port' );

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
define( 'AUTH_KEY',         '@s(($,;-~p85G[xcPKJo$@En&Fb5ysmU&n~j1j8O!*$.(J+#l-2.6,u-[5SfREh:' );
define( 'SECURE_AUTH_KEY',  'd:<;C#x7)L^~}KK@l[ +jMTHu`/P~8tD)V2QI_N39V<!#Hq[3Jp *ui[)CnGXa91' );
define( 'LOGGED_IN_KEY',    'DOzK)@eJ;|ED4R|Y&PswT?Q>7{F[t]P_<:=GE9bmL#5?u8I}nh%|qWp6C->V/ylO' );
define( 'NONCE_KEY',        '#}iX-f4nk4Xmrf i}s)#Zjxj_z38Re;eey4{5J@;=IB@/(mHh}#vNm<e].OIGog%' );
define( 'AUTH_SALT',        'mY,o:vK0.Q ^qDOGIRcOT/XEsRB$yN 5teFBlOn!,WHlzROf+fg5rn`G7CG7UnB9' );
define( 'SECURE_AUTH_SALT', 'Z EncQ+`BJHg:#m +B#h/#^$7G@$A6mi7<IAeTn@crPU~yge(yjNnDO^~PEAa3)k' );
define( 'LOGGED_IN_SALT',   'Svn@e*#:YJqssaMZ JX%j/E<[IM!DazwEc:oZR`wKty[|R ncJG,>9HZ :$$Q|Xf' );
define( 'NONCE_SALT',       'BSRu1BE=d_X0YfHh-zFE}iR!;MoXKOXd8`} ?>)l^]7zIFQj^wg)06D * t$n-Cu' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'nf_';

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
