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
define('DB_NAME', 'lp2cloud_com');

/** MySQL database username */
define('DB_USER', 'lp2cloudcom');

/** MySQL database password */
define('DB_PASSWORD', '2Bz8kQY?');

/** MySQL hostname */
define('DB_HOST', 'mysql.lp2cloud.com');

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
define('AUTH_KEY',         'EevJ4jAkO%9?wlQle_b~8JUW0dnb6o%_xBGrv^Dl0"a:UtQX"!C(^5//D^oUoYHI');
define('SECURE_AUTH_KEY',  '/7_;@r`*)rWndcQn&!5)mFA?b$wwd/An#"2kRsX9/eXh1OAogt(5_h&(@bd8"Dya');
define('LOGGED_IN_KEY',    '`~20%Y"F&f6g7VUaJfVGDWoCMxI`kC5%t0JEps$3tZ@7rT8%6S8erFe2(njZ0(eH');
define('NONCE_KEY',        ':O_y6XD)`d?QgdMVjWks+?M"Q^!*wl!|~l80!NPBywO0JC@23+FgBIsttsHG:%FQ');
define('AUTH_SALT',        'AJv5jGUZuSFrOQ0y&/&/f1NXg4P71IFi_3^fMkQzu0h^s@U$lKr5i8b%vo%RcFhP');
define('SECURE_AUTH_SALT', 'F*?)b3+uOCvtpC!5wVd0p0rQ!2WjKW9e5zb(bPemZ!!+7:#1vSULZTk$&M2;GZBr');
define('LOGGED_IN_SALT',   'Y~mhOYzY5$l6pMZ5zj(tgFXkh%Ss0c2jpKnMNoyqUV?"|+oL7a|CF1/59!cUefE6');
define('NONCE_SALT',       '4(!(J*xMFPCOu0$g~uniP#@5i+vRwBewP@wM#Z1C(zi1w2gfUTnUSuxX~8SO#hI0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_kekakj_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

