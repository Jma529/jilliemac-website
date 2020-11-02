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
define( 'DB_NAME', 'jilliemac' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'x0|Sx+I8]6bop>hUS_k}D>r@cWK.^ZBxAD+azQp/|p[.GD.c8=`x.-M>=q$sdX/p' );
define( 'SECURE_AUTH_KEY',  '7v-EY#4cUD&1wBD$~;b0A(o=,zxniy/F&He>fW|HORCu,@wiUAs7+2I)T))zT; .' );
define( 'LOGGED_IN_KEY',    'j-J](1/W;?TO=A98Q,$t8ch/MoyiuL#a^_}.ma-.A#P4af}AhZK&U;,wM6%St?^p' );
define( 'NONCE_KEY',        '^u?*!hQoaQ%cU|3hY=P(8GP?|4ai>P#)SH*vq$*,$D}4zfXPDnd2b}%8Q(pnBD?>' );
define( 'AUTH_SALT',        'l1pN;C,Qc@YGX#))9Pr9YQ0u!}&GbgDP@OGi?E>E%F2%6n3]f8AL;k/XYg qXsc9' );
define( 'SECURE_AUTH_SALT', '1c&lAU[B]%-@-BhA#;0YU&,n[[u_Kkw^@-9FNU,^JcP.#R`bBS_U}U?C{]sRJ3N|' );
define( 'LOGGED_IN_SALT',   'W1At ujWS,JL0*`lA>&pGYTI^b.|Z;i<;z?FE6v1/deXWGo]+iqhc8T%@$ENqi?B' );
define( 'NONCE_SALT',       '*B;<6(AVTvuo<z}$^w*KoQ??j,QPR/9e9z6%kI}Rn^8wdNXqP=aXf*sGbGljGJ~H' );

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
