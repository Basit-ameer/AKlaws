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
define( 'DB_NAME', 'law' );

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
define( 'AUTH_KEY',         '1M2j#k2MMm_31]@He[*PJ9=eHPAc256( LvrdrP8+Qfi6*(GpTc_?-tl<>IBSRq,' );
define( 'SECURE_AUTH_KEY',  '2-GQS#]o].Zu!:P*o);~em4S3hZ7yTw`I^N(WDlwTx1mo1hW/~[q=$|fW^q51h[!' );
define( 'LOGGED_IN_KEY',    'Px7hJ72<o|W?JZspK$.aC1i]V`OGkTeOw}i+}HJT}HqxtY=J?x18/dW6r&!6)G}j' );
define( 'NONCE_KEY',        '_9]jKg87QNoB*4qkS$ftE_Q;^^7WOH5LC4,iG/+p{?z (Z*3:0IOOb&iEu7bQS34' );
define( 'AUTH_SALT',        'B(a$9,.%!Ym~,)+6fluO~G%XGL,pGr@{mJma~/`6`AdWx;@PUT/S%vxW|&nc7Crs' );
define( 'SECURE_AUTH_SALT', '4)3h;M7tiA;RL9pkTc}2l5~nf)90O_[uYLsG$njXJp-AfaJTE$tqHa<D4>8?Hv_m' );
define( 'LOGGED_IN_SALT',   'IS ;3::6.fSGE}Fgsf7x2d=k&<4AqvleLc<qLrqLAI8X.IV{M|~*!w4FG5Sr_[Y?' );
define( 'NONCE_SALT',       ']Xh>gn*4S5<NoagxJc}`6JPB8tuN-|Ekcx*kCV]HXnGSER4FJvm{;rd`Dx,T.29<' );

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
