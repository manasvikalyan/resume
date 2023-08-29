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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'resume' );

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
define( 'AUTH_KEY',         '%IiVtGn){`3{ET<Ko_t8Mz}&oMKB1p%.8OQSQhPT#},Ot4cXJF=x4{bNk<|I@8$;' );
define( 'SECURE_AUTH_KEY',  'A?Nkv^7D>ymP;d.^vqg3XA+1r-;^8VIZM]h]sU`_U_n<[h]Krr~#zTZkhU}Z&I9=' );
define( 'LOGGED_IN_KEY',    '&z@{d/cxF6#o&6U/I-B#ts0-,`TH_ +,6 F}I1xr%wb%TQ]aAgs2Yx4 +VittpZD' );
define( 'NONCE_KEY',        'oAZ_HSeLib(AA^+b0(SK7NhmyQA0ZTX`g2|3;2O E+ZTi;Us(3e}B`X @pt.v:&|' );
define( 'AUTH_SALT',        ',7N:#5,nw8y:W;>*YRit5x4<k]l!H!3aV`57QFUjE2;23oGoQfGW4<[:vfWC.3$v' );
define( 'SECURE_AUTH_SALT', 'j?!9vC2n4j4y&Wh98/G/pl_Z#z>6v?_]xX%z3MqSGY^_}f,KG:J#pD&OXgyOKqiW' );
define( 'LOGGED_IN_SALT',   ';o.D]tfvD>p[5|;8]$gI*^aiG&.+NYvM3*2U8R5Ac&Ua`g[kj(E4vAQ_ZPyr8i<d' );
define( 'NONCE_SALT',       'ipI,zl=[80oKU?L]9gQsjkw7s,`viziq%Ok]7tB:<Dhef@b@OHX&ah_42DzskBm_' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
