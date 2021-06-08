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
define( 'DB_NAME', 'project3' );

/** MySQL database username */
define( 'DB_USER', 'project3' );

/** MySQL database password */
define( 'DB_PASSWORD', 'project3' );

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
define( 'AUTH_KEY',         'TEje(^7?7R4~Y>1,m0#c.hmVDr)-F (Jth[Gp5@WabKj,BhvE^kgfdP(|dP7O $3' );
define( 'SECURE_AUTH_KEY',  ' %$A}d7|EB<yOhkeh6-]`O$9C/?qon{Ig$4I9K8_Sj/aWS%o?V4kb:.~}L,r[/e^' );
define( 'LOGGED_IN_KEY',    'c)hd4`]`2H(G~hC8r_D8OELIN8i7j,In+$n wq%A.PC~HgJ=42J[Z]A kQf}SPsQ' );
define( 'NONCE_KEY',        '8+M[?..4tW_vX}31jwDq%{;N(WD0?C/8(Hy*6y#.-w,MPr@#W(vKbTQ %TU DEVv' );
define( 'AUTH_SALT',        '.?)crr~c8:~$4W6Lk?T>AD$0?/0e2MS>DeOwa3B}Sl~1g)@N7wHy4I<w2w%?cUOt' );
define( 'SECURE_AUTH_SALT', 'YHN Z6].!ZSOuQ ./~e?pWmO%Yxh{nTre_/YIlyP`**UvleH~1*yFQ/$Y0+vE<o!' );
define( 'LOGGED_IN_SALT',   '? t^Q{$DIP2 ;r0<~s%6 yB`$?-zt}<Yrod@*{o[#?Or$A;/!@!y60G<jujuXA|q' );
define( 'NONCE_SALT',       'gc&Tsf9IVqGmOe5--/NU&L;Sq:NI+assu0eT`[~}T[!NN}5P^`{UPK/$?a451n((' );

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
