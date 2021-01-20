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
define( 'DB_NAME', 'git_example' );

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
define( 'AUTH_KEY',         '<KreO{9 f_U;d5#c c+6^:EK),I.63x1DWK4K}6.4qpCFqY:6[U]~EBoWCg`tRtm' );
define( 'SECURE_AUTH_KEY',  'Tw{:r;%PG1$W+?E^i3~g6F,d/Yo+3Q6cjnt0>e{w)( )iBeMH@ef:[}<]ikO|0pq' );
define( 'LOGGED_IN_KEY',    'VGkpQ+aYw%z;D]SM)ODc,//uiNj/%~v*j|.&eZ%5Xfh~NEypi1[aN4wnQa/S+FRo' );
define( 'NONCE_KEY',        ' ?KXf=zfkLPS.^k0)Z$Twdex4 l_0EhkY*ha>&;u-a1!t^#2mi_pLIthLL)toO6{' );
define( 'AUTH_SALT',        '=):vjBKx Zx$v5tGj#R?u23|,p@@D`W4`,zW)8dkwmZexD3A( zvM_nEFbA)QqnW' );
define( 'SECURE_AUTH_SALT', '%xa*~AvT.k,C3Qyy 3[}Kv{xS,YY`zK9H~|LsFM6`&Xl3 N6k.3|YvCC&pt3-wWY' );
define( 'LOGGED_IN_SALT',   'p8enTd_L5*bTyU:s#tbWd.F*D8Coj@^&og*:xCj2@+Do+4%%X1LvU5(QyMf.LbW{' );
define( 'NONCE_SALT',       'LuwLo Q)91m8Nrs/ [=K<5Of>KjfAmN7gkrn{Zg$`Sz VVMKQ]s-t gWM/ZbMVD~' );

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
