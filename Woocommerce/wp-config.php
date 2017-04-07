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
define('DB_NAME', 'shop');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_ALLOW_REPAIR', true);

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'UH$c:doHU4`^|sj2iD,jITBH]RI<3zZgh_G)u:_;}a_ks;>zEe_c]*_uKfs]HW>!');
define('SECURE_AUTH_KEY',  'ZUX*T!MqoFh ,2I8;c9.g<B:?1sWB[(T/g(VB#`6E@#wlY?RKpJr97o[8&2z8*c<');
define('LOGGED_IN_KEY',    'uFrZEGK*lJr5:7D_b/i^d,+hu~<Ew!]!rYs`|[yQ41?9H*1L3vWMr4LH,_Tnq8/>');
define('NONCE_KEY',        '_p|o_&iIG`a/oIhq@}i$73h3}zFj&8^$zDS>8YxM;G9::8+aA*xI.;KF9C.E;{8L');
define('AUTH_SALT',        '2+#jbF36A41`0M2M+QJ#Z!OLP-4=gNKnk7H{F+L7abx2b~2bRfea YK1-nJX3S56');
define('SECURE_AUTH_SALT', 'h/9HK*>pZk]4Us%g.Y8dv-])>D:; A{&5g$gb;nc]*P4_+;s_)n[tQmBm.U966qS');
define('LOGGED_IN_SALT',   '4:ee.O*p1X:kKb`NOj[F:#2EOQ1$T0.7G]v/f.O exzhN7a >DH`#zb2REv7I9sJ');
define('NONCE_SALT',       'Qso3fF,hlH@:vL}oi2[allLgb( G2P]E6dp1bW!b,E%tP<FLDOOZcN}.,V3+K3+p');

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

