<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'aptop10dev');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** Define Development For Theme w/o bedrock **/
define('WP_ENV', 'development');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'i|Rq:K7>f=}lwGMba<~.3}V~)m3|XyR]G=B39W{sY6%sgCo)<Qq/lC%Cv*>FRJ7e');
define('SECURE_AUTH_KEY',  'i50.u>v ~M/qy0~:{e=5z^&v*;lFtLyER0K/K0b; =SZ,Q41)](@m_l+$<6-sRlZ');
define('LOGGED_IN_KEY',    'd|+[Msf?uQcdJ,);K!r|(>yS 4dU(;}&Mr(}(uFB(Lb2F/ow]- y$8s(,|3|9u39');
define('NONCE_KEY',        'q&eyATEn)`*/$h#Mx9sPo[3IY(2$lFhm5e2O*K2D8$*8I^?/{Sa,;~y>aN`RSE<M');
define('AUTH_SALT',        'hs2Ccq Y;1{B`Z)0K}digX&msF-EO*`W^C5Ub8q1lxE)p^I|Z0zbr;VZ|2J K vd');
define('SECURE_AUTH_SALT', '!9N$Iv?*y{d;~|n*1C)dm)guLFooe,)hP{[EFLc8@W6MmyV,y;[+B87/_8#@|3jH');
define('LOGGED_IN_SALT',   'jxBBZd{Bs>Uh9rPR)?,-[KP4MuJrS8YHoy=X]nspAH_?igZ@EF+i/YqXx~<3&~*D');
define('NONCE_SALT',       '1yAj#o_f?Q.Th}LT?b8A:#qQI>_It]y!y-OxC>Y3xwuBy |~eOThb.S9C85DO<L[');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
