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
define( 'DB_NAME', 'mon_site_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '[n4TWEXL3^iBn96^dYiBMLX+h`cHlAc56z%(I8_Or(?:Gzil*nuU#]*KMSLkxu!d' );
define( 'SECURE_AUTH_KEY',  'zf+gn {@Z/@s_wP3di}60I7p!Lik!foU=/HN;L(9zoeRj.,[7D(H{z+m0U_^1[v5' );
define( 'LOGGED_IN_KEY',    '{U!rR;%rw+RII-+/w(&1we`%wAz6 }Pbb_aV:x3I5PGwX5#g/-;rAq{1}oT``ewP' );
define( 'NONCE_KEY',        'wu+M-w:tEiTu+Y Y~8bDk$Z&a^;hVE|/<8yfHU(,7A96|mf+&.dv`+o|i^J?fhvm' );
define( 'AUTH_SALT',        'YQtShH,y$9no1H*hMeDg7Mki78-ALK[%kpuv@&`t={_%[CUw#DFOGNL0;@(KWQJ=' );
define( 'SECURE_AUTH_SALT', 'lf2WA`d!}L1+*o@GFREqH_cy>3y-cy`z dfi AsmObtIuvS3/(]764 )sT$5hbgt' );
define( 'LOGGED_IN_SALT',   '(aej8IA/2tJJ|O(:u]pMk1y]};>e4KC7Fi*,tRP<,Q(5{ied}vUT<TyRqw%|41da' );
define( 'NONCE_SALT',       '-k3s{kaz2Pjk^$gqzeiD@*|ut}wlo,M-<%x+8BO;6>fiQ2^@/a%F(WtJUR5.94?|' );

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
