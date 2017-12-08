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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'l:n15;sf_H)]N00U;n8$vC4K$LBZXGX`S}=ZMg:lyTFL)7du&[L10e7eL7F54[G1');
define('SECURE_AUTH_KEY',  'IVP*:h_9}qwP>?OY:=SmL%C$^H,MZd9>$zWzdNPBvHDVd|LhA_l.]Nm;^<=1zV}P');
define('LOGGED_IN_KEY',    '^d87@L4~9-0~6SN&3M%Z/Nk%M&,SOt%CeH=LjEMeWtT3gp#}}7#6h#xD#=*mQylo');
define('NONCE_KEY',        '|4YJ< |1GBq}uq|O1=$dxj=A}CZmnoXe7N0{%XnOIPOG|Ja7i_G0LN2I5pkqyp8l');
define('AUTH_SALT',        ' gpHy_ 0U~9X)Qj^Ki:cY2!k~o$vf8LpkFaq@TU6;N+OZhZac(#AQ *|OPNXzd0u');
define('SECURE_AUTH_SALT', 'D2o!y2AI*Inw*%fRO2kQ/+y$FQ{NgrK;-E_`}T&_pHYl%A~!d#1VZ:&[$BY<G)Iz');
define('LOGGED_IN_SALT',   'fX[<HX<ol;(2!>=&sTu%$GWFc0W{JvpNnrZ*i=/2@2,k1?}mIYrlFttBiQGsOFDf');
define('NONCE_SALT',       'Pb&tMunGHq<y<oR:+H6fh1Rmff^vZ`hW%F8?7Cu<pu.kWL73P}9y@&O8wh>a{)F ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp3_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
