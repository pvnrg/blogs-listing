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
define( 'DB_NAME', 'blogs' );

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
define( 'AUTH_KEY',         '7P6}D/ 5{JU?apimPIg=<CIM xe_n}ohTf:QtMJthuY4$+o0:}Xvj1*}]5gn6nwB' );
define( 'SECURE_AUTH_KEY',  'UJu~];q|RY2#rG>.Af~{`^C5cm=(Wv}ed]fe&itcvC1-o0;3qcvIS&aM6PKA4ve$' );
define( 'LOGGED_IN_KEY',    '(r|*-7,Le<y$Tj)q7y B!YT1jJu4u5d>8>=`3y1Z^Gr$5PYGkP@bz1?C<oet`X,P' );
define( 'NONCE_KEY',        'O1r]ThD-]dj`ej&6Np9-M7J1CWi>0q0di)Y_KwF?Yili2>C~LZWxIn4c|;s E.s7' );
define( 'AUTH_SALT',        'W2)&Io?W7u6 D-UZz]U<5J+YoKFhUAxa:[iAc.A.*{e%+5tau3Nt?h8Qvr[2[#_g' );
define( 'SECURE_AUTH_SALT', 'mF:<>l![R* C&O]f~ko-iHSac1C7.;8dYDPy.$D1|m/T7j:vkb(Urg=IVYa/7.:>' );
define( 'LOGGED_IN_SALT',   'b#U>Oj:6YLMMd)A*Z^?!Byi;F?4Ye:%?zKXBPy&@eKSDQ%JV~y_0_82([t@mi_>9' );
define( 'NONCE_SALT',       'Nx2Me~B[!5hlCy.KW:1{K$36ak<iH,.rRCIb#qsd+YgGe(z}z_P0%kUJR0+W^wC5' );

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
