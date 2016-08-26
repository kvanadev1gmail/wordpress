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
define('DB_NAME', 'new_wordpress');

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
define('AUTH_KEY',         'o:58-5XrakYd@CP,x?j2vMV=1LGjdbMe:9gnR,|JW*R]F4+hJIs)5N0zO29PwH3>');
define('SECURE_AUTH_KEY',  '`B8,fbZ:i6K:twP+OC)ime]O4w#$_RSj&>B79}l*h*P<JiSJlGU/(2N9Buyn5#eL');
define('LOGGED_IN_KEY',    'hcrGZ=V:,hE{Fg-,f78U0(c)oPP;g_FGGV7f@Fv*KG^Tj~j,{siKWSVMz</ge5[w');
define('NONCE_KEY',        'g/{UZ=:w ]3aUPp4;3Z@K6[x)s:ZQMc+bYj (sSf(YL2x$U}z3?{xnFAgal|r!`8');
define('AUTH_SALT',        'sP::&hnA3|mdKh^szg>#IhL<7w{EAg2?Uv}!AV1:k?Tm b)xFgW?(mIcwqmhAuyx');
define('SECURE_AUTH_SALT', 'SFjMAI#?-sI{MRkArrVEST!Yin6ScY]]V(Kz5!aA{|oMZ~FaYx&8Azy)Y)~b+v9)');
define('LOGGED_IN_SALT',   'P$NyUs4RH+/o(L/VLFydeRB.+&#?;(Q_?:M?4K[IBZd^m?Rm]j+^+2kvO6O*BTHx');
define('NONCE_SALT',       '70:Sv6@t-i{oNMl+?fC:F`VbKp<Hj:5/w-MY=!q5:a+vMjt<=xfl^7M~P8~umJYE');

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
