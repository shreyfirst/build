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
define('DB_NAME', 'wordpress-db');

/** MySQL database username */
define('DB_USER', 'wordpress-user');

/** MySQL database password */
define('DB_PASSWORD', 'Password1@3');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '^p+]}QlTP;1+cKd]9Y(@R,iuqt=/uo215gSA)qr v.d8_=16D]W$D9}L14fDRdZQ');
define('SECURE_AUTH_KEY',  '_i#}|~CS<M9Pg_Su1Fgi{N0mY{|(Y[],/f4+[3p!?Pew.m4X{.5Vi}-4w/N^bCS-');
define('LOGGED_IN_KEY',    '?7+Xrl&}bM4}.k+W-O4yV2qC3P5gPl/Vh-`HD{tMA#9%*`+[Ewq@5Zbow-m[IGf,');
define('NONCE_KEY',        'kQavuqxO 7#}nC)m}By()wt^-E+9F6@JT9aG{mN7(#9f->@`#X{T5]cbX9:I+fL-');
define('AUTH_SALT',        'y+=y{QXiq=8g7cZgR.!f:_5xJn4#E%EtkZZ|>NzSi+b}5L,yC07Xk ^--koYZm0U');
define('SECURE_AUTH_SALT', '+,&ml.+[x%9 Ufqgf`w`>+v< B*RFxG,D1RpI%j_@$0i)fN%Q}Z&+Vm^WMg5&),l');
define('LOGGED_IN_SALT',   'ez;Exyz/UYXdFJrb_Y4 i+[|gO1 JG0o,|IdHnc*[%%)ImVPNL#6]4z~Ff0WQEH:');
define('NONCE_SALT',       '7=x*%lw6bSd-#1UpVn]^1kFY*y0Cg-|n]vP&KQ-xJ#C.nN6e}~yh7D_EE>-2v7cj');

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
