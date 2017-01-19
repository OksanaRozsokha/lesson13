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
define('DB_NAME', 'my-mars');

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
define('AUTH_KEY',         '{WK_ hRk`+1Q,EN5<tv4G7s$|WIGwI7gvA0Y!`vJ^IjEr YP-7k!Wf}i;:taZ2{=');
define('SECURE_AUTH_KEY',  'mzb3.sex:R;j`ivFX$er@k,z^?&O3bQ-^KlauN~orLgj?/ $=R6OgN+.!B;4NB>5');
define('LOGGED_IN_KEY',    '|.ZtV|</+*+Q5n7YxYs04W=+j=zpQIW:9{lx(ejaz(D~Q<S497~Z^Wd)Vi|f(&Uz');
define('NONCE_KEY',        'l7beFSY,{F%?3xGMjQtkIKYSu4O|x[p_:ylT,.V4l|X@Y:O}9Flp`rLKlW;?A^6g');
define('AUTH_SALT',        'p ~_G46qZY#k}uzp+bQ%KUQL?tQ*>K28tJ*oUe`x](-D@bBOpPv%]+.F&K*5P6{2');
define('SECURE_AUTH_SALT', '4%KySr;e5PzOA_SG_HYp]js];epXtAW%|Z[Iyy[*k|_{zQ{e/UtOA@fa!<R8hko8');
define('LOGGED_IN_SALT',   '*I>|%s*G[~bG6Wb^.qrgX]S-_Lz]?jyk0Gx^X{T#C>l=zp)*UEx~gHec@HzbW+8I');
define('NONCE_SALT',       'w~-a/V@fP#Ok%:Y:#o~ZZLL|o|U-Kt}8/{OV5VFC~sG;#Mr;/T_MlSCN?iy-Mp+<');

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
