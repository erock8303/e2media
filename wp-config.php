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
define('DB_NAME', 'e2media');

/** MySQL database username */
define('DB_USER', 'lorette');

/** MySQL database password */
define('DB_PASSWORD', 'zvjH0tN2');

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
define('AUTH_KEY',         '@)EbD/BZO?!_nD<W2%+iS/W7dss05=>|8`U55v)P+/VrhZ-0XK@4,E?O_tZmH>qK');
define('SECURE_AUTH_KEY',  '3}jri`VR|Xb$88P+,I{ySt!N#mN`&Qn5n=]b8ibq:B(IRk(ZbSeT<s[#-7F=|Z #');
define('LOGGED_IN_KEY',    ':1I;c2>9mQkSi|a82|8naJL>^vhoL_-qGs`A/i0`K1G6Z}W!j+d125MRV}5`O1B>');
define('NONCE_KEY',        'z8QP^Yh8+&N,E<dkZ15 X5#<&n5*QE%UH$3WiFPsWWz30UhqRmuH,h_wdUyp]y~q');
define('AUTH_SALT',        ';4Rp7Kyxr.8I>@N>U$T)gEU#)^p z4*YSE/*$6I|[?VoV6F{@=OwfC*GibglL#K)');
define('SECURE_AUTH_SALT', 'yMoTEvUmjGp|@W+0/*=@?%{uam,|dI[Z-2N|efmd(muB9DY-u}+<@lGtUR=o#;C:');
define('LOGGED_IN_SALT',   'i_E`k-H~2^iX;D8|l3 o!1h ?~NC.+8cOdQx2>il90,_O( C]Xy<(Vo]YMwCDO(C');
define('NONCE_SALT',       'DdW%7{V_fNWJE9:?77xJ{/hEGsCsgMWj$<++z5% $Md+t)6+o|S_42+^vqw4Bmwu');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'eme_';

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
