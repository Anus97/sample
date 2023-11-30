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
define( 'DB_NAME', 'myinfo' );

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
define( 'AUTH_KEY',         'hq-35b .@b:Hy1gFSL<P{Ie-XN&=NyuJD1(6?FM!kXi?.)GO,l7}dZ/ f%G}JPIJ' );
define( 'SECURE_AUTH_KEY',  '7uUEkc[CUNSPM kE ~c[}RZwOq6r{& 1=Bou?nDZ4-hfn|8a5>|aO>{1c(hJFBj:' );
define( 'LOGGED_IN_KEY',    'Ze ZMz^LkfS2yr{)Q^zL%gaEfQVHZ[xHp@qJFdi>Ul]J/]H@{BKoaKIjgWiBjuUf' );
define( 'NONCE_KEY',        '{Run(r9qIFzvK2^<OC(A.c66.G]@dbw%m|2pl^J*E@[aagCn8Ti-7KIEWi|4Z;Ju' );
define( 'AUTH_SALT',        'aiYm(~CP~jq8L=@.tx9@c.U4R Z?)X$~m%#l8!hZkos/8[bu>AEWcEh.lh5Vu+W[' );
define( 'SECURE_AUTH_SALT', '{XRo#=_T%r,;1gIh+VzO@jiC:(PThfFZvSpd@5^l)g[qCZ_wjB+Thazt3kA^]`8.' );
define( 'LOGGED_IN_SALT',   'N}g?L6FLB_T5oG2mA6U2a<Z>Bbm7-P/C^4]]<BW3Sk%io]zCEzUglW=Hi>@{_b ]' );
define( 'NONCE_SALT',       '$TIR6r[m>+!K`}b[G:UNK4_yJ@HM[h6/G>b$0Vj^|BLO:nC;]~[lo{#V%WY]Q xZ' );

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
