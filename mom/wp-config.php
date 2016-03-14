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
define('DB_NAME', 'marketOnmain');

/** MySQL database username */
define('DB_USER', 'marketOnmain');

/** MySQL database password */
define('DB_PASSWORD', 'Silly$tringFire34');

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
define('AUTH_KEY',         '#>-)4):t+CnXNEn5OPk>#)m.9f9+AkoYtkO(Dfv,?QEHIyiXN-8)i$eA}Oq_d0cn');
define('SECURE_AUTH_KEY',  'dXKFI?l,vHeEqI-Gr$D/N0Sg$Z71wBKVm$q)h^aR$S3k+4;86e`QPJ3udJ2P3_19');
define('LOGGED_IN_KEY',    '^Sn/95)B7z+&p4:$K*hDVh]k_ +0O]jo9y<P5EO88Q3iYR<|X-wgc+i%E=g<o, ,');
define('NONCE_KEY',        '*$W%+Ajyd+=rn&>L*7ybir{_hK|Jhkd|3/|H-vuEZ/QH?<BN(Cb*M!Qv1NZLh^iL');
define('AUTH_SALT',        '4/{K2+v%3}|SLk0ZU)aOQI#.oAS3-sV>=1H2lGZWx_SBwpk-/cz~,eOycv~k]8~!');
define('SECURE_AUTH_SALT', 'TF@>E`py!aR.SgyDAag7A,TYIrk|s5DVFSF-{.i=MJ?p%uC/d0MYV3{TpnMHz<IJ');
define('LOGGED_IN_SALT',   'Pj]NGBdx_^2QEnR+uQd-hFROy_~p8J`7mpDUI<8^_I-uz5R3a=Ffu2*5I%TE<CB|');
define('NONCE_SALT',       'f(&T*nHomISXp%9QX6Xn9P].DNQ{(umg~<H+,9#cyM|h4S^QZ+kTnNRp&Gz~vB]r');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dbmom_';

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
