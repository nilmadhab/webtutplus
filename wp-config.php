<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
 //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/nilmadhab/public_html/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'webtutplus');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '25011994');

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
define('AUTH_KEY',         'a{kLU42*WO;b)$V]^YjbC$m)a@0J{Dpo{mJ7+nPUd>Y:s%TEu{`;TQ<6M92>Jin]');
define('SECURE_AUTH_KEY',  'YM_-71E|`1wnexBYo92-;Rx.$*[Df#El$D:tu~oUwDqg19,F== e|@EB[(U/)Hi{');
define('LOGGED_IN_KEY',    'p}K_ -Uy|Rw&zrkwC+l;:$9%{5janYb-{KtNYGvyz02T]e6/G9Onh9|hiR]UXMx4');
define('NONCE_KEY',        'yXIj9%<LX$|KI@IoC.#|>{|YyD8w31zRpqDFfh@6geLB7niBh4 c+jP:}#yvc|:K');
define('AUTH_SALT',        ' Z_:Gr%-]nfhtLs,EO:-[[jM}8xgvx@/Dt2(-=T/YGxvuZTLTZLE>5;2ho5.rxWr');
define('SECURE_AUTH_SALT', 'M))640@ :U8 b{_6e`YTK*=+:Nk2+C6XA$!lS)>__-c_B7nGDWUO_jq_n*E8{{B2');
define('LOGGED_IN_SALT',   '?kMTmWf:xF7@~z6MEBn]!s+XNd~^7HW<)}S$sSj$!,W;u2$9+XVrgQ&RUfIqYOkm');
define('NONCE_SALT',       'J3_)*Vz=}wbYei 2e<9+>`K3%0/wBvP*j`J9@nVsA<OQ-CFC W3<]m|Zv}?:E`9#');

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