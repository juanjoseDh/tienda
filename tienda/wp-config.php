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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'basededatostienda' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '#K)ht~_KL:*ng;Sg>.S{V_Q#4g j%-Xid]b4W]`~7U#aM~fI/zH$_wrG@& X+-94' );
define( 'SECURE_AUTH_KEY',  ',~GRc-$IL2^M!+O]sOWZ6;60:K/*p95p2$P|VdBkJb}*_~tVT)Y[;n^||eyQRND-' );
define( 'LOGGED_IN_KEY',    '84E,7Wd)Gc27G;53=orQAOQEp{~A@NW99~tm|*w%|8vo3/_;,be}i8%:%;iNVYGt' );
define( 'NONCE_KEY',        '*H|;`Lh:c7%(S?=S`wS>fbw3fLe3aCj|nBe!OEYiQNXm 46EY(g5C^(sL@=l>bKQ' );
define( 'AUTH_SALT',        '!#<$OcT]dLls_ZMd94+Y8Fr(cpSZ?^kRJ$IZ}T4)|}uJ~M9dMn},dAzug>m}#02S' );
define( 'SECURE_AUTH_SALT', '*)7Eb)nKX8MNaSE152~(w}. C:M[A@~C]?W?OZ.k=$idQzxfFB|LIB?CzVz;J|~G' );
define( 'LOGGED_IN_SALT',   'aZ[Ik$Q:60<+Y;&BEhO1&%#xUYkbZ+h+8Z(hoWfPsz*%K>^q!k8M|[.e7> #-70+' );
define( 'NONCE_SALT',       'Nmg*ci<bAD=j*cQf4_J)M@Wb-o^@E435Z[G?w$|em^`w+Lkp<iknKm>r7J-xpJ9@' );

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
