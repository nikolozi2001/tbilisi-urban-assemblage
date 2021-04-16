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
define( 'DB_NAME', 'rtulilogini_tbilisi-urban-assemblage' );

/** MySQL database username */
define( 'DB_USER', 'rtulilogini_mafioza' );

/** MySQL database password */
define( 'DB_PASSWORD', '(GoogleBot9)' );

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
define( 'AUTH_KEY',         'MNb}k!i?j$QC/@n.<DDRk7yH3ud6-y:AGw6IYJIi>Is//B/&VLu[=l[B.[txlss6' );
define( 'SECURE_AUTH_KEY',  'apa[Mn<a>NpcccYB!>|5#HELoQ|qg28;!1yqoOq]e2/m!&-Lka=V%gm9H(*s{1k?' );
define( 'LOGGED_IN_KEY',    'WW7NlgzqiEu~>50fbQBNGS8;.NuaW%T>-U 8}i~Lq}+-bBolKQ:<yd~TEmI>_L% ' );
define( 'NONCE_KEY',        'Jg^Y,yC-Q~DNQg5v;t_ye,_MppuK<vWu)VGpfxWvK{R320=*A1/Civjy$<c+Yx|}' );
define( 'AUTH_SALT',        ')Rp@gLoD&o&4P?=O;@W_.!cVX?B2(~&MZ%gJLq3we*R^=h}uu*N./:eybpIFX<8}' );
define( 'SECURE_AUTH_SALT', '%V/-x[Fg.FCm]Nk%6r(7-HxMZ4ns.S%F[l3c)hHqUmZn.R8)t`]_g ;:Ji=yU}<q' );
define( 'LOGGED_IN_SALT',   '^,.9xx^yeLb`>`VrX+p|Pi2^9E6Ozg,k*7j.[gm:5*b7*|KC({|THJ!+ksW~P{q&' );
define( 'NONCE_SALT',       '7tf*.8neJN!<j&q]6Ac>6K^qBLVa]tKs%>)l*PE+_42cUl3x>n3jDl8M$lI(/`jB' );

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
