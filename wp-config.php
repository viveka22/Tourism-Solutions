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
define('DB_NAME', 'bookmytickets');

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
define('AUTH_KEY',         'c/5!SVI%ovjF=XF^(nIvK-IYPLQ<|>`-&Tk=z(jE, *uchEXz*%u/V6a/rksj.,y');
define('SECURE_AUTH_KEY',  'OI.Y,Vv^V|xS*hu$^<U@!at!0s;K}*>.U<V)41haH37c*[O@n:N&{B#B_Jh)WucE');
define('LOGGED_IN_KEY',    '.)9j,aKS[PLBfwC5R0bn>E^/f1D}V%6g]CPQ:bNOH(yPT-9dM~^,Mh!5`1jz*%V3');
define('NONCE_KEY',        '6m5U>bp2}KUFhu/:i;<U1}J]iECg[nx&uiPOEaBQdPx`*6Ouv@S_KmqeadjP0_Jk');
define('AUTH_SALT',        ' Nt|IAilb(TPNClDQzpMiAq]%w5Y)Z;T^5CxFmDWqg)VKXO(?;tzBR9$F FT`#} ');
define('SECURE_AUTH_SALT', 'JAQ.=s}dW=]&3CZCAB3~B+j}q;&Mh:wnGqi(-zwzRKq vw|5SedTsQRpd1HQcT9x');
define('LOGGED_IN_SALT',   'o<oI-$9l0H0Dm+PUhK{2v{}NJ*Qz|`V7j]1j&f/I/ahs!lhf,@{%:7-2RA882^4m');
define('NONCE_SALT',       'v`@QC: P3)jWX)bt4KNn*bYu|f0wjXZH%vkLb9txk7ss`>n[9K%^7^F U6Qgap$J');

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
