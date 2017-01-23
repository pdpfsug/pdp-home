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
/* modifica */
define('DB_NAME', 'my_pdptest');

/** MySQL database username */
define('DB_USER', 'pdptest');
/* fine */

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
/* modifica */
define('AUTH_KEY',         '3MKmBTUC3e@tSval*P1NL(Ko1BmQr7at#vYEM3&rl9Igh9qDa5vJFoDg)*75S1ih');
define('SECURE_AUTH_KEY',  'Ep%DJqg$9q^3$M#ulzVdXsEMS29^*2ruhNiDJ%VSwSSZ79t!EO*5KNV&2Ze2(^UA');
define('LOGGED_IN_KEY',    '9DeO27^gO8bZC8yYGmap(huirnj!@wF&CLCIhXib7dI2f(dKJhlMTuQNTII6pmFe');
define('NONCE_KEY',        'e3tmNAkfWW)opY(A1$9jjbEnDs8ttFD*NYZd(acZGwj&rK3xSwKS2wF)xJA1$kmg');
define('AUTH_SALT',        'dN9HzrdlbjOirIyn46lLsgSm!)bVFKyKQWKt)FgK@)SV9LsI&sbeSXGF^H6tRkrI');
define('SECURE_AUTH_SALT', 'P^SO$f2wJ6iruE97L(eX(kXb#Fs%0qZdM3EtGFxEOiKquNFOMWhCcXUH5uN64dHE');
define('LOGGED_IN_SALT',   'qXhUh3HoRWeftg2XERY&7yyAAowi0!fDiog2ta2A1jdxl%D@XEk*$zDsZps$UE5o');
define('NONCE_SALT',       'Wrm7X%@@oRKd3Bv7JfIFaD%aB)msui!9I2Q93U@b3oSTkTegitefpLCySFp1XBYH');
/* fine */

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
/* modifica */
$table_prefix  = 'avwp_';
/* fine */

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
/* modifica */
define('WPLANG', 'it_IT');
/* fine */
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
define('ALTERNATE_WP_CRON', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */

/* modifica */
$_SERVER['DOCUMENT_ROOT'] = "/membri/pdptest";
$_ENV['DOCUMENT_ROOT'] = "/membri/pdptest";
/* fine */
require_once(ABSPATH . 'wp-settings.php');

