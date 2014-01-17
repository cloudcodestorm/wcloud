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
define('DB_NAME', 'wcloud');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '5zf*_n)CL`j/uPVE8-HY-w46q|h>^WJx*d5cV1|]-I!4lA,VE^bqMNc&4@bdE$3|');
define('SECURE_AUTH_KEY',  'hl-4kwL0)U!b*KRT;Rv~F{k4e-ty%2S6wa]*oM98Bat;ogASWmh),Ou&.WqP?WP#');
define('LOGGED_IN_KEY',    '*dO~ JDB?;Svo-xD|l4.)(an;8%WIjQEJSil2ocJ`ikUi$,E1)Q1p$}Pw0;ySB~m');
define('NONCE_KEY',        '/T?R@sJ/<*-r l[pG:K?@wK:|D/{aBC{,-z<-.$Dx|l$X!YP)|/v6CKM [R+_*l$');
define('AUTH_SALT',        'EixwICCp89H>h%4m>(OP -L7-z _5;PmY%d|t8-@OaTb)Rg0Y*2].Qj&u^VZj7f~');
define('SECURE_AUTH_SALT', '-2:|I.3ZMdB0}-[e?8U)>m$:x<vK+-PY0`QTvEk5sa@` xAQ?WVOa3+:x4p<GpxQ');
define('LOGGED_IN_SALT',   'b=E^2.>.@{O|a#&BF^hYHg>cU}lS[ltX|X!{Fw>s]PW6Dly@jZy5SF7UUV<-DLx4');
define('NONCE_SALT',       '@3I@!cu fQ1<NlUmoh:Js-H*~q|9Ydt#M8sf.4ZJB(&+{]&YEfr+$.*-q9ME-bUt');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
