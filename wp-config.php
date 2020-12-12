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
define( 'DB_NAME', 'rana' );

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
define( 'AUTH_KEY',         '-a-)IB:J3nc0EkX%qnTButwZ,!~g*jVv4x3Soei/g9wgalJ<`&x&E&ESfJGgHsqE' );
define( 'SECURE_AUTH_KEY',  '^_?d2X+iwM!`gSR|:v(]+#:K-`s[ dg0QJUv3Q@a_0YJzc tj:Uf^QK|{YR==RuM' );
define( 'LOGGED_IN_KEY',    'lttvFu>&{7YF_Jxavu3r[B]2;QlA;E6c`51UU_e}`@m(%-4<^]efHy>o.kT*:k8]' );
define( 'NONCE_KEY',        'B-;kC+D}5S3eh[BR}Lh) I32D>*Gch)=w}lV$0K1{~?b|WuKuz(ldBhf0yZ/$W,z' );
define( 'AUTH_SALT',        '?kol`v.>QB3qocWviBk]p@?G;cAjnbW7MtVJEf73PM6Z@2p1Xp+JTGO-GfO-07.>' );
define( 'SECURE_AUTH_SALT', '?@cQd-v)b.B&44?v`8J=!7~ #?+lsQbuIC<;9gqHjSK]Z`((fsU;F}p2wf?_q]~3' );
define( 'LOGGED_IN_SALT',   '7sHBGZ-OV,$k|tdBFb:b@20r;!GVeHVmZZx,$YN:m^G|SSe/SlQip)ylLFmjzj^!' );
define( 'NONCE_SALT',       'U|=HNl<9.xq<N jW*KagNh@|PeY~%=`<]1hv`CQp{oFXJD&Y9n.x6;*hZAW|k]1 ' );

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
