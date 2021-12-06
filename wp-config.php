<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'thulobazzar' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Rtd<a.LKQbI$rqxcVc8KV!j8M7T#53]1CeXt|9p$(p u&pih9/k%~V^E1rOUY<E3' );
define( 'SECURE_AUTH_KEY',  'qPhXud7>NWi+CQXV~R>gFo&GXJO=Sb]*,o-2vBj=B=z<9#[MCamIMp`3;+{3PfOG' );
define( 'LOGGED_IN_KEY',    'hxIYT_=-}!;O84=)}gG02c>6iwTyBDwBB+4LsKf+~R1LR`O=@|<?O5zi,O]W!9|#' );
define( 'NONCE_KEY',        'BusmfJx;opFR$pv3;D*L5u-WV$@0f$4gCn&N9LWP8LTgveWmzh9=j-b &&8pl>tX' );
define( 'AUTH_SALT',        '}j+XZ.$?%YA>eX`7PY.dIT#:NP@IKJQu++h!j#q-@1(BjQ2`PtQ,!q1,E~|H-,L:' );
define( 'SECURE_AUTH_SALT', 'n2%zV!Pn.e6U^Srd%&]=,dX;h}x9f9-R}/S:ftx)>;ET064dMGh[aGb~) <o>/Tn' );
define( 'LOGGED_IN_SALT',   'K9TWL7fh1;221HiMqd|3S(C!eq<a{n /;*`=%m F TDwEnKbNmg@2OmxkHp=z$Zs' );
define( 'NONCE_SALT',       'KKKFl:e$X+a]Ipc]JMZ| ,G:k2!*]VtN,+>%C1PN8s#@QZLYfnz=t}5yMl`:]Vk^' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
