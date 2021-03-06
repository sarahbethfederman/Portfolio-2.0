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
define('DB_NAME', 'sbf1973');

/** MySQL database username */
define('DB_USER', 'sbf1973');

/** MySQL database password */
define('DB_PASSWORD', 'Gummygirl1');

/** MySQL hostname */
define('DB_HOST', 'cias.rit.edu');

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
define('AUTH_KEY',         '=g<xC^>s[oac>sKE*i:)k!CYW+bAnDjo)j$4hI_KBY-Ic1*V_}#k-.H~0r5t|RWa');
define('SECURE_AUTH_KEY',  '&Kr+>4SU@-lx`fn:nvx:;oQ u:~3q%`.f=)R-#WW$6+!tuaZ&|KL1<M=8=BFiesI');
define('LOGGED_IN_KEY',    'q<8(wC:(#T Gtk95N>~E^0;>N MVP.vv,P_,Wf3XKn+*[;9{1<r@yXIo!59*`kIY');
define('NONCE_KEY',        'tidF+x6NyL`=^b`EU0t;NMw0+|zKl#[o$ 8BBe[&J]+aA).Rf3WYE|.KwK$ BM^l');
define('AUTH_SALT',        'el^FNiE`+uas-F@kWt(Ps|bZ{2+/U2{&I[}2+jqEX-]/js7|T{]!-Nz?]S])]=>7');
define('SECURE_AUTH_SALT', 'H=4`;DZ6c5E!3~faMEJR[l-#g/nt-gMvxN-BSb>)+HmpoeI}eS>dS?`+Tpo1vEA@');
define('LOGGED_IN_SALT',   'Y;T!1@sH_odU6W[(r&*[80|BZIr-r{i2+Coa/51-owLJ,7OKoQ>|ox]?M/73S4B[');
define('NONCE_SALT',       '|e`/{av]1$<~_2X<U)j%MSP[Ge;ht5$o]V0KRGr4|YU#N]9gee1Si#?yR#u{l1$Q');

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
define('ABSPATH', 'http://sbf1973.cias.rit.edu/');
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
