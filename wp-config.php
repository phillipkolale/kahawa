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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'R$,*@M3qb7+?mZ#V.*N4:T5|{pCY`]#-p=z)[dE9X5oRT)J9odP>+c9-JXDbG}K*' );
define( 'SECURE_AUTH_KEY',   '@^~wwdrjs#5#AS/LNb9x.M;)(68IH`O%QNVD#<AG+.&N:Vn0nU>#a2W;tkJGrNHF' );
define( 'LOGGED_IN_KEY',     'U0v6K_I;9kdc?oT+br<v];-(h57X!BVV6]v(|PSN<=j@WJ91*kMazAia. j`;LM0' );
define( 'NONCE_KEY',         'b~]vIGLuZG5-H`f0294Ag/Oi~<u:8!EWwY3;(DH*91:Y)vO,Mi(1UVcCwQBqno{*' );
define( 'AUTH_SALT',         'xLO_^j_!-t{wyCG9oEp]I)L<OCbU$^E5tFN&O~0cqkS)16>1Bn{J1CSqHS%0EM+{' );
define( 'SECURE_AUTH_SALT',  'XbY_b6gUP0TvM6LO*rDh87R+jBy@ 8)CI>E#6G:{59[sulO1iA^qLQGAoR1s]V=X' );
define( 'LOGGED_IN_SALT',    '*45=/,s+PE9w^9oIiEyx*&IOusTlU<^;m$k<7. Z{%GceLMAtu[07[9bshOWH~ws' );
define( 'NONCE_SALT',        'sS[(*/C+ppCsas=RhY-gXc3A67<zXt7MMK$VJ3E9h71ZQfM=;18N,kZy=[!h/%fY' );
define( 'WP_CACHE_KEY_SALT', '< zfU8xRq98nY|zaT~A%ke%96Aq%&=yT%[=J!OJRoGby%JP>RJN5V)*t[B6A%/]c' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
