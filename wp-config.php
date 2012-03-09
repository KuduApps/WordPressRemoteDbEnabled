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

define('DB_NAME', getenv('DB_NAME'));

/** MySQL database username */
define('DB_USER', getenv('DB_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('DB_HOST'));

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
define('AUTH_KEY',         'StmIs(G7QwSA!Mef0x8.?X|:fS8eFExHkz);PTX8L@eg&nWWemc7~-<?6//yJ`mj');
define('SECURE_AUTH_KEY',  'IQn_RHFDFYon1+bq-VMuDg)Wj%Q~n[:{JCdT94TO5}^yJ [~BQ 4NM_eTcxo41Y,');
define('LOGGED_IN_KEY',    'AqxI*rkjZ8ig3PSCE/ylB~1d&s!kTI%i,+(8%LSyy NyxJ.#i]E%t5&x0z>Wr/1S');
define('NONCE_KEY',        'Te{d*$$2m+JEz~9zI8m@;;-qJjrZf^|jt^iR^Z*dIj4*&;*,;@~u7AW{<3Z|WD*e');
define('AUTH_SALT',        'om`odhr|Wxh#B:0G;EalMdR?$[H[|xv^IUAEQpUTthu:xy%>3V]t-FP,.~4[iP9+');
define('SECURE_AUTH_SALT', ']UBPSs?H8~sd- ~,~=NR,lh}#7D})P?09t3DSWK0@Jo{%BEB6oHI)qF=:olWt9)@');
define('LOGGED_IN_SALT',   '1j==zxwi&sk Rp4Xbo44! ng~K4ezyP{7=J<BrkgDj_W#iasPjpQrL=GRkaRo]o[');
define('NONCE_SALT',       '@N,hQ1uNbR.~T3v>_p0T9#_rg^c_`2ck.xj !hheM%F-dnv:DsvC3o@gj{kHGQ T');

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
