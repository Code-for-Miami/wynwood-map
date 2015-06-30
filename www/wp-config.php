<?php
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
define('DB_NAME', 'wynwood');

/** MySQL database username */
define('DB_USER', 'wynwood');

/** MySQL database password */
define('DB_PASSWORD', 'codemiamiwynwood');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1:3306');

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
define('AUTH_KEY',         'tMPdUUJo^6xuy/R=*cZ4D=n?#%-18s:3V7Cl/8GDS/-4DyEf)+r)u9(0~sWe/1cx');
define('SECURE_AUTH_KEY',  'DG7`Y|#Kzo=-jA4L4g5HzIRpIb_NTM_j)&wNz;;-,<z1VtxQ#iH<I;G>ESE[Y-$k');
define('LOGGED_IN_KEY',    '9APIh^0M]`Rm9!Wnz5-07}u{H 1naO5~9ScC$xikG5X5_4vajiv453zw1QK6VdXU');
define('NONCE_KEY',        'X=F<u$rZMZ^[~Da[n3sw>3crgMWQ^_Z|O.=Iarf:=*%_rw]c&KM2nUqi/e]P-onz');
define('AUTH_SALT',        '3-m[J[&Qm!Gi+k+3+HqTaq008}WA+zp49;A5Y- AX^~UU(mlQtZilvE!AJ-$l^(x');
define('SECURE_AUTH_SALT', 'U-As-RE=ZR&)0V|2zc=#`*r kBV[_:56-y3NJ`+mJ&|BZmT,0[Mpd#hYC6]+<kqN');
define('LOGGED_IN_SALT',   'CB16?,N:P?M5vqYF+Z).CLX,8-yX`c]UJ jerT&pIRsA66Le(i}`UHTD:|tyeC!1');
define('NONCE_SALT',       '{)5- 6bTM+Hk}orYo|%SmD*|-WZa T4g;qR!xI=#J4~g/D(d(,w(ktt;T9pZ|iq]');

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
