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
 define('AUTH_KEY',         'HF$$t7FI$0U_t<sa*_WB?|Ye&pCiSj~1EQ*;i([;3qzP//dI<e=&9sjrDgASH2v5');
 define('SECURE_AUTH_KEY',  '@_$=ITuu;y1z+rw|diH7szq/BjUHtQH8H~b}OT0.|BB@c9HkFv?)1*v+5D@sR#lo');
 define('LOGGED_IN_KEY',    'ggGukdh1qgrwI|EcH/lAhdBE;:XBZx7_`emA?j?:znwEopVUbr-Z<aY<7kpj,#0}');
 define('NONCE_KEY',        'm|a@7*t7]|&Im4wnp8%/a/>Pr4ctGk`xMICmM0Ovut++o($oAzrQ<c9aL|~_4QMn');
 define('AUTH_SALT',        'cP]}P+d)/$<9VT}4oWFCkfliNX`#Hb(Gi-1w[55m^u7h3x.]F_DJ@-*#z;x%@-SR');
 define('SECURE_AUTH_SALT', 'It3n?y2.pxC<6,/uF^pWIeqmNe:Ms`)RPLhh)F$<N>7Mm{}xCIvJ-F5XY.+c-?SX');
 define('LOGGED_IN_SALT',   'gW<-yoD!o7p[|~FL>RzH:sF/?E)Y{f>Xj?H(5*aens2CK*NR+]Q-qxkt7A;y&d(a');
 define('NONCE_SALT',       '^)[@t^=/|UFP-z;$I%>)Zf>Y/q4I7s1?$7/p^Ntg6r_EJ6Io]GkE>wx/5Zn)YLNg');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wplocal_';

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
