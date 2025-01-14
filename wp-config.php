<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Ercubetech' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '37PoNi`N_Y8|dUM FSE]C(/MON8q0^gjM.iM1SX>o: 78n3Zt:U5^Z:z#wnd>_N*' );
define( 'SECURE_AUTH_KEY',  '!4nGl_&IBr<Q)kb$@h4<uDH4gn6tbMiFvY#WY3<})X:&bU:&4+,[DwM=|VqX%wX!' );
define( 'LOGGED_IN_KEY',    'HxKLY?c<>oZ1IVT@3gho &)C0oQ/]==IR!-2jEJ[r7-oKu+VN64Ka!Q@WTHvM}8^' );
define( 'NONCE_KEY',        ' .4/fb,t=%`Je{zK3}|/^.s9R8AXc?<1&pp*ZSm.lkC#((Y[9?wbt{;@L812*9.d' );
define( 'AUTH_SALT',        '2G<aV/N{4h}UV;<4TD]}EjLhgZ5Im]twoi,CJqbn7q3P~?gC%>uwrD&mJ%L;?`E8' );
define( 'SECURE_AUTH_SALT', '>gB&q<B3=Ve>3xefSIf4^NIUSb|mE)]Wm|> 0n@~2xm_#*)Mp?iqXeAky$TP7=ac' );
define( 'LOGGED_IN_SALT',   '3*~nMs9ObsvFea2SMtNGDwJ?&6hc6tNE5~ 4wtM9=tb)Y?wsd`n|#?~<i?]Ym2ub' );
define( 'NONCE_SALT',       '`tsFSb=qim v)2{khOI_$:0Hc~w)b}dn9x72?F`)7b:gkjC*GR0W8s9s^&B3O^L-' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

define( 'WP_ALLOW_MULTISITE', true );

define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'localhost' );
define( 'PATH_CURRENT_SITE', '/Ercubetech/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
