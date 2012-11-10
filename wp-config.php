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
define('DB_NAME', 'wordpressgit1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mnuwxk2r');

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
define('AUTH_KEY',         '[JD.h~b-wU6,=$Cgy4PZIb~BybK{LJq9~^nLiT1zhEnyk>61K40IU6a?SWw>~0`D');
define('SECURE_AUTH_KEY',  '4H8Ygm5iZT|UngSq%bSzyk1Q?%5Ml~a.M<MGRt|7qkTH:$5TFl{o_Z6afHq0mM.o');
define('LOGGED_IN_KEY',    '@>Y!TJcY wJrcAF&w+T +dh^OH1.uX#VEFMkwS}1/3]Y-v]s^FR+qGlXP=EL:1}l');
define('NONCE_KEY',        'KwcdL$XIc=|e,]JknhfzD`m_$jjw1G`kq6]#Df?YZ?%z(CqYlL)Z%k2=F5F$M0Ih');
define('AUTH_SALT',        'dp$<QpIp_sk%E|yF;J9I_E;{?dbG|uQjLhE5d71CEtN1Df-P!N>lk$a:nN(0lqw`');
define('SECURE_AUTH_SALT', '0w/%b/P8kdd(QM^><#aKn`*c?NXB{!*u5,%(7vBkaVK73+B5l}qHYyu@z}22/7S,');
define('LOGGED_IN_SALT',   '+)7_Vm6}<BJ#&.@,ug?8z5bvXJC[QD_RWfg}L*QZ?@9Ezp(M#=(Eah1ERF53wo@+');
define('NONCE_SALT',       'fi=sxR:1zAdxu>Ajo4$^$q<j1G/~WKb&ed-q-U8wcGpYi-`]c5UK^ Mr{PRnt:vY');

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
