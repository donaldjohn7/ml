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
define('DB_NAME', 'mylymbo_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '&BvsY*wdS1^]CT%EE^5F|c&0pwrS!CQuv_N<i_6OE]?r62~3|3Q@2:(~Xo$Y%4*H');
define('SECURE_AUTH_KEY',  'ej(W|ZThPX&@$gUlq8cm|^P=A&.({Q!zgT Rr?Zaf8c]]O*TW]+G/^A<OKt,GjYe');
define('LOGGED_IN_KEY',    '-Mdf*@m{1jay@/V:]#S#S*ncz<V!R9,L,|)]+|CL:4*|NO`Fo;|=Rr+&VIzx+r$W');
define('NONCE_KEY',        'P66XuwfT,s||,WhI|L7x8F..sM]f=%t9fW;,BCEE3fO~-<PC|QTk! -AZKCF.NaK');
define('AUTH_SALT',        '|~!jo3Bb@1BAm^d%*yO_Cfj<?=Iiu3=y+=)[hR!:g(v=@4whbgup)nj[6uKksaX:');
define('SECURE_AUTH_SALT', 'Mb}t[l<&^tY/89QE54,2i0Az<8zIWM+-Nd4=j]:]lh]B+E+mHO++Yb`gAcVQv-Ml');
define('LOGGED_IN_SALT',   '}~h2DhYs+8vdWKtDH-Ze*%V+$8?X !-Y.%^`xJ#7Av`OcFzcBHspehM+@tGj%CF9');
define('NONCE_SALT',       '/}%sc@-sM@X*Fs=Ls15-Kv50sg`vM{#I5?HEGb},/X{:Gyl(U2}`g}C${-uI9-|o');

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
