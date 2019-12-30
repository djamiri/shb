<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'shb_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '}E6j|R0cg>/-c~tSr:hyc,ft~Y-[tzn5ihpJ ]S?x=<Z/3I50f`sYk=W?M,K=T2$');
define('SECURE_AUTH_KEY',  '28tARhC>foW,2-_F<_8)f(WJ6jr~nt+$YW;#4Xel x@FwhG%e#9OJt)R.2Pr`9d)');
define('LOGGED_IN_KEY',    'nsR`3qEx )buyn])>9$bw)T6>?l.+qd<AfL~qEbP:ZCy2,q.HZ$wdbfO{8p[!D<Z');
define('NONCE_KEY',        '!fD`eLoKADn55]M/Vxt^7|A}?h_b6@q)zIy)1]%Kh%dqLo[a`DvQ;YsF`HcR8wWx');
define('AUTH_SALT',        'ypeb;THd{W0tK0,m[4?]0x}3NPb,QQ+DMx*cx.da1|3JqvzbBEcQC]@c{`L=kg0A');
define('SECURE_AUTH_SALT', '~n^J8{@8p?x@c>Q+u$ClJ/+Q8P@LVWqw[~,]b1a^TN57u.Rj^ece^>* iSXO}([g');
define('LOGGED_IN_SALT',   'Ws?%{5[U;R@B#6U<7zd<(+7.NC`fSB(=7c$N0U0dcRNWm%`Y|<S|-F&C=@8FL&WP');
define('NONCE_SALT',       '/5~V%ZL|EdBG=_X@-54-nASwI5Yx5O [WR]L3~*e7szqf~.%]{r]I1_=Q% q>cw?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
