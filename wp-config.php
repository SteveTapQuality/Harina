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
define('DB_NAME', 'test');

/** MySQL database username */
define('DB_USER', 'root');

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
define('AUTH_KEY',         'fOg$q)v-N}m$d- 9-n*]O+/.BiZ6=2}alVB.XI[[Q;~&2FWaRO!q3J07tP4o?4$X');
define('SECURE_AUTH_KEY',  'gON*;+wm1q{!T;|2s^mbqLAa&&,~kk&_TC(ZSGAgqB{{Te7}7}{e2)RC@=MF{ZNT');
define('LOGGED_IN_KEY',    'UUsi5d&c=)#-`T2srm43E{jq8Hl)$97qA.N=|[<<m5oy_Dyn{0:N0E.Bzx;&Ht# ');
define('NONCE_KEY',        'Vn?qy-j+Xo@[t7R-<lM5t7)zD(W4b]K9%FI%*KE<FLP2#g3NVDNR?>%DQTe>|.4i');
define('AUTH_SALT',        'd.$M6!8-Fyn6&Q]{c}k?:<;+VfA3UF91ArS}HYc}H!M=%0bATvsPHJ3H<7KOW3PA');
define('SECURE_AUTH_SALT', '2}}}Zu_r=^8U#eu8o)x@)3/JDrly^{*^rFwDH}).38q]d4zlZ05V8-%UpF>WVrFO');
define('LOGGED_IN_SALT',   '1~RXsqvYng[/]j5&rp1pP4-p?qvO@8v?m*E^lM|,>c3(-8/wd-jtD}y42<,x=NnR');
define('NONCE_SALT',       'sP& />8`MSrFyc/##W|)}_&yL]?(3SuL}U9^+x7DxyzM83-^~%*>zzDxDT{-:|K+');

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
