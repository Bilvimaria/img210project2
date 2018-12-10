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
define('DB_NAME', 'img210project2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Ae%pE09,Y_f6a,lU[=j*.6pJRF-TkO%C2N.QU<S#{@dp}~G#U%&GX?~S<ynSMCl!');
define('SECURE_AUTH_KEY',  'Nm-jhH5.`BFBaY+|Ut{9){!TW&hcaK0f},l&DmkO(#^.4`j3^!. EcV+j^XT[-Ni');
define('LOGGED_IN_KEY',    ',Xkx/f8pRrp ne;HL^DR!;~hMubw{[#_VrU(q3HU;a?reY#`8#)Vtk,xsN-AWW:?');
define('NONCE_KEY',        '!1{qmQA=$6z5xOTCZndr /{&N^.&r.(0fD[sr@-9z.XWIw=#x%:41V3NaI$#`L,I');
define('AUTH_SALT',        'U@UTM`-=<jN&s,VQ5l]m4V@$UYTuZcm5o4CE,#@sE3?B=hzzP%1lB}fNmzb`{?qO');
define('SECURE_AUTH_SALT', '[~f]qs3Z.Ez/z43@i$Kg2-lVJ|TWbLAeWFZDhz>kd>!=,Ow`(DH6q^ZyA(~TuSOH');
define('LOGGED_IN_SALT',   'uBsO^.:Ej%gK*m)CB}va}.~F).J{w`Gm#!FWiGFSI}qY3R@$|3i#_RnRk$rF:JTv');
define('NONCE_SALT',       '}hx/3zNN,`Drfk7dQ`JQs&02zY0 =y+QLFNctbn8}DPC5rb!XF80?{9UaQW$)kuI');

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
// Enable WP_DEBUG mode
define('WP_DEBUG', true);

// Enable Debug logging to the /wp-content/debug.log file
define('WP_DEBUG_LOG', true);

// Enable display of errors and warnings
define('WP_DEBUG_DISPLAY', true);
@ini_set('display_errors',0);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
