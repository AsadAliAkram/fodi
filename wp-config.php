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
define('DB_NAME', 'fodi');

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
define('AUTH_KEY',         '$Us!WfIQ<pc8p--R+5=;C?k}*~E.=7%Gf+t6jJOg=[IJyVEblRnEL6HCP%pwVKQB');
define('SECURE_AUTH_KEY',  'm=Ktjs@X`.ZBk]f[B6jWbhze w*D^m  ADYd5>Z./8( >4pZf{CE#b1N[*i779%A');
define('LOGGED_IN_KEY',    '_M/)~ik<l4h:A8Ew}KY6^5?=t5n/;TgM*m[woTXMa5:Vv%gxzo6z*YK3>8OK!5<u');
define('NONCE_KEY',        'WWp]&0]:/D44RPVlAb_k<K]R|2DebWV}e3=IG9]sez[*@LsrTGEUYn%3s{GtQAVm');
define('AUTH_SALT',        '$l|D#Rf?BN)L<*`ez8tvN.DM(5dO8yA&KV%h5cN:jM+&XJvx<r,EU#-dZt}A*#Z3');
define('SECURE_AUTH_SALT', '1sncDA|oFr3sC|~MGA3qrum[Z-oJ2PpRe:)UfX7#Ak9[[RRwfC1B&}wY1@V](4=_');
define('LOGGED_IN_SALT',   'ZVd05o+!VRqAz{wfTIL786xrA KfZ+?`1ui&XVy[~[(A%P}!J@u~(+[Y<jF4ln?J');
define('NONCE_SALT',       '4_v2s:?[ks*ykT!H&w4^.E8P9GMCF[I%z9n?C`.< *h7LFlNXOGm0CNYrtp:6p+P');

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
