<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', "palm_wp_task");

/** Database username */
define('DB_USER', "root");

/** Database password */
define('DB_PASSWORD', "root");

/** Database hostname */
define('DB_HOST', "localhost");

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',          '4{u6fT3j~,,nXmg>h+p:%bo|hyFR*AxyHe.F[IwrV#~S8EvA>=f,*85TEM;gkM1c');
define('SECURE_AUTH_KEY',   'ojVl ^Vc#~q*n5yXzjn+3`8gM<Rjd[d[Ax%c8f`tUs)P&j>z,,f*Q$Vi83;,azqI');
define('LOGGED_IN_KEY',     '68@i=g[3(@+=%bZ+ZM-4-Qk~::TCcKtlRGB$=>:U8jhuZj$a=Av-I&x<+nQm6E3C');
define('NONCE_KEY',         '<;qc}3k$Wpr--:yT|vj7n(c`fbl,4*S8Y+t[4ii=4$[:yD8qin@&-e+3qW 5Dy2F');
define('AUTH_SALT',         '$,2XM%$+<a<C{xx:B.DSyg+#vq`24.ZR#w}>SW.#t2.6W?B]=)$I{>q-9lFSt}X8');
define('SECURE_AUTH_SALT',  'G+(z~I.b*>Y<fK)xP{|,?lu;.6Myc#NH?2f770rcngbn(h-S+(ig(;xe !B_VVy3');
define('LOGGED_IN_SALT',    'B!G5,p_7ScgH[h?wQioQa#]?+USCN0+jU~s.2np,}J|>CCH= ~.*KV/35z?_Rl^z');
define('NONCE_SALT',        'a%3U0X{(f~+{,)*<ZNi`qyZg8J=@5j!F#6~k%rSn/) >u7G? !+u5a9fofx+v9o8');
define('WP_CACHE_KEY_SALT', 'A!9-_#^|?8t~H`EUR09+iP$5G >Y(<UCbVZ)SdX~k|k4ccFYP:_{6*OFh=jsz/<f');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bzd_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if (! defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

define('DUPLICATOR_AUTH_KEY', '[7Fna!z,f`Jv+BZ6W,>9fPxjGh|Dmy&-1z;zVz;&Ww%^uA6RHXyQmXjBeSN^B@JW');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
	define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
@include_once('/var/lib/sec/wp-settings-pre.php'); // Added by SiteGround WordPress management system
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
