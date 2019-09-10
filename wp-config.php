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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kiotvietsync' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '943c7937503926d84' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',         '][:AVA8!y`}8B Oq%`imwSKKL|BVni~p(),o8.u:L6qkzK8 }ysa(7IfF~1Mq?RP' );
define( 'SECURE_AUTH_KEY',  '<kW],{>jmd!qw8M*@w}+afSbZG:]+iW!Hh{OaK<tb}#>!A9%ePRRQQsc(K.awM&Y' );
define( 'LOGGED_IN_KEY',    'HsHo>3$^mC<8J,!kc,2hdJkW6[QYaFuG3)8:bonTFbX{0_R<_lcxcU<W28YL[y)D' );
define( 'NONCE_KEY',        'hSQV`AUnrz It9;lg`[Llr22]!VbJ7^+b,QI3*pd3[Os<*CfuHen]l/>QtR{tO41' );
define( 'AUTH_SALT',        'IJH>gkNzs/j5E?!!L7{A^3Yd!~gp_>4rIix<9ODqVE4.{6;~np[]T^YaDH)R ~vo' );
define( 'SECURE_AUTH_SALT', '`cKV70W}j #?Ub:L(6WM`JQF$xIrhY(,8qDo96/,`1a]Z[nX)0&GUb.Q6-C{OQ_4' );
define( 'LOGGED_IN_SALT',   'Xl4.uD{{-R!Wij 3*Z >GpR7_0]S?k[*v,4x304fpqUbyOe/P>|@Z}Tj)@<5M]}h' );
define( 'NONCE_SALT',       '/`G`>2,g`6Ae2e#$C1,&3oBG)`k^}rMH~<Og:Th}[0TT/mB>q4`JJ,{hMLn.yu!g' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'SAVEQUERIES', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
