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
define('DB_NAME', 'kshatriy_db');

/** MySQL database username */
define('DB_USER', 'kshatriy_user');

/** MySQL database password */
define('DB_PASSWORD', 'v5E]AXTmbO~z');

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
define('AUTH_KEY',         'sH!2ny(QiZo1A@<+6I;P85NW-aLepOMlRtDzjgl0YP&e{Iwr 6=32?B^xD}Q&D/~');
define('SECURE_AUTH_KEY',  ')KXkcgrq}|,U:FM&n]4Lm,JEmi{9&w#SbF}A7p7[,jd[TR`LnkFydfD{Ts]9$Ceo');
define('LOGGED_IN_KEY',    'xk^$J%h#`#/r&RXQ8VIKep!i*`Xf$pS_`g;^=+[N!*B3?[?yM;ETkW/2-n9b9<bo');
define('NONCE_KEY',        'Ynh]MIG^V)fv(LoC)|/#77eR,EyGpLL8o6H9KG6pxjer}YvF|P6V`03 ]i;hwFM3');
define('AUTH_SALT',        'h wcgPQw[1M8y@fLR~k7SLYG|!{]+IHs+(N{yWrjekWdNNr?1W$%7y@>)D@M(oM8');
define('SECURE_AUTH_SALT', 'wqZuyl}.vpG$9tPYh1VyqLJLMffC=!uAbqg:4d6K0WXZFWM&7n:7s 6707(d33?4');
define('LOGGED_IN_SALT',   '7^NtKQ_i/+X)Rj;R8>dWP7f`2wVrjF*a.hQAd}H0(%J=CSeH=9#]v?TACIVPoNae');
define('NONCE_SALT',       '_Gzq #tmRLL:p4Os+v/&9F{yPOE%n?.`6C=PD4o@l#/W~O.Qs/NAJ{pA:XW&g15<');

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
