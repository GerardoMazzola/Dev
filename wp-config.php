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
define('DB_NAME', 'medcomp_db');

/** MySQL database username */
define('DB_USER', 'gmazzola');

/** MySQL database password */
define('DB_PASSWORD', 'Abc$1abc');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '~lYLIflyW*NzpquJ<Cc?Lx@VD$m:=lsm#Tnr^Kl5WN>0Z>:16 R);Uq::Ak(s.Ga');
define('SECURE_AUTH_KEY',  '}QNhCKQM[`S+cA(-U^5W)> R*|Dm@(0!rMCT/u.II=a${8!>yqfXg8NgG%5c!bg_');
define('LOGGED_IN_KEY',    'Yo58dk7?9@z~RN^dk#7-qPyI7|GA0G#%+i*YubHJc1r{=U{9vD#tIwrl(mL|nY7n');
define('NONCE_KEY',        'pPiK>Ll{!}! }X/C`JG[R7gJNX[ZDPn0<cBf,`oSa1/&-dw2ZKmF%xvowqls#H*1');
define('AUTH_SALT',        'TS64d!>9y6;XwnIXmq,#[j}t8mp(E9ZyeD]!H}$8Cje-p!F_--+r|xEQLgC80cj*');
define('SECURE_AUTH_SALT', 'vi+OJ|CB_B(4^HC0)5hu=*vUPPBIroEx@an85:W^Hw%cje qi6IR[}N/LO&hUP.*');
define('LOGGED_IN_SALT',   '|(6sx10d6w^/DxTA;n-e$]SZi4[^e^JlXg(uRiJIkdy~ip!L2t46>?W^G*oNr0,q');
define('NONCE_SALT',       'Ma[aP}=xoK,N/G9(,%6o5{>a^n`PRh`K_?a;_%c`U.Y5@~fI-rwQ4S%H$;m#CQo=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
