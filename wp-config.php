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
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'db:3306');

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
define('AUTH_KEY',         'a {r0=S=Ty+GG_u9O%m3}RkdI!#G)oA<tX8`}I&-CN&mE2ByoN4$$~=ivi=yQE6h');
define('SECURE_AUTH_KEY',  '|^2ttTQDURl8,kj.QzAZ^f)F7z]YFpjZS,88!?x4l[wibKruE?jYS|XlmBHbcsaf');
define('LOGGED_IN_KEY',    'aFI?snU7&+Q|u8z;e{V!(e|312~(p),.:uXrCz--qKda+!:bIRic2V;$B |W-0Wt');
define('NONCE_KEY',        ')t3MGy:7~&@Dy=Y!W!a6Wr=88~[C}z-xo.CS+T1|c3iT-/sl)O+A,in+kDB#7Uo*');
define('AUTH_SALT',        ': lm,}g]x-~:m(DU38kUGIKNa+}%06]<cXI!R+]e66bAF!wT`aG]]yZXX|R?~r1D');
define('SECURE_AUTH_SALT', '(n- +pGf^XDB}399sS?/{R>:4;s#,5$=I{R6|3eQ7CHEl2Z]&)2:Eb079hayC2NC');
define('LOGGED_IN_SALT',   'Wx2m@|EbHTu.`qQiZ+B!.^?0&^(*D>cMPvo<+O|ts|xJ7xKiRZ)DC5$bp-:%dQ!S');
define('NONCE_SALT',       'u33MR9A+ Pi&-@x$.|fw.%jW-6n8-p[iywE-0FNMy8qq|P@| ?$=#Dhe#h}?SZ 4');

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

