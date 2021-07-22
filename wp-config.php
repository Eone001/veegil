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
define( 'DB_NAME', 'dbveegil' );

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
define( 'AUTH_KEY',         '(.,Fo~4ms%3?/?9}!UedH,4ss+Xa6qKJYkRqH0Es9heb6A9^cTHD<]zf09m1@I46' );
define( 'SECURE_AUTH_KEY',  'Q]B}~(@=%V02I#Y-<PA%u*>WYfxX@lBhWp9eIoKlf`,wZ0@GG+3rBkm]-T`Rwp*#' );
define( 'LOGGED_IN_KEY',    'q9h#u4M63x. R?o^*V-2T9KVivEJ%)Q-g&gm+2$Ki!SK@)o*gzkzN1M`K{}yl<X|' );
define( 'NONCE_KEY',        'DbL>B; X(G]!3=ZP]mT3JzU>|/CFNdaoXXE)FjZq(`MV1tZ!ssxVkm[(_!h4PQY(' );
define( 'AUTH_SALT',        '(%O>W,]oYNOG9g:5Rbi^LL5AX,W-kXXLyU~h|(9Y:,q%T1gC=i;Fu6(rY]|i$:>9' );
define( 'SECURE_AUTH_SALT', 'P2u0Rg WzG U)Fk1uc:6i=qLncY}|_NFKv$l$jnK>to3u[3rC}Ip0U-o<Jn]eY,I' );
define( 'LOGGED_IN_SALT',   'sy}6kthu{{Qbuq,/;/pjHkOMpZRh-u)h>_tR.0!f.Xc;A;)DJNk%RW8S>M^f4;Cv' );
define( 'NONCE_SALT',       '`04,Hm}5[|F;]]?h(,i@+|$HLX~Mu]ET*_*<[1MChkA,/m|seZ:UG{$YI--LFg2N' );

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
