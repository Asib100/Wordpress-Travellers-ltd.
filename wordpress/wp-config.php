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
define('AUTH_KEY',         '8[vOvq<D7:< PlAL@DpBo$Ua$R50f714sH v1I78gpru1Gs dQ7l!g|&0}dDN3Mp');
define('SECURE_AUTH_KEY',  'rboxq2:MCQc;p)a@NWd1u&{uOjq]!h5/Y>LU4e]tC9IZuIlC{nAgQ%G`^8rCCn1H');
define('LOGGED_IN_KEY',    '$ms[~aQ=`.gOV<+rgT<YD+IYF,bs03yP-*7N.f+~4Ak=fIUIZ>|qUVwiC{L5Z~x/');
define('NONCE_KEY',        '|R]|Qd}c!#m!t,<nJ,3Vp<7!jVd#uQ+CuwlQ2-!cO[od~U)Af.s+[xCjqV+?@qTa');
define('AUTH_SALT',        'Epf2#:uV3(g_2KR%u`?Mm`ui4&_.$5bI#wDx*iO[TMs-ms{gr =m4x*z@ulqs*i=');
define('SECURE_AUTH_SALT', '[qaV#d-v/x(ub&Q]-?;6iVfY*D/hu(FnNOv!a`lX1y9NpZ^?);o::E38~sG$q}%8');
define('LOGGED_IN_SALT',   '8<<9@Y_?J}6T[YX(V+,&g)Oa=$-xzYzw!;ub?H0_/i)}&U`oLd#$evkTzCM_uRdD');
define('NONCE_SALT',       'Xk+H_L6xa%4W<GZKsCmJsEye|8!Xi^MFfJxyM62NKtkjO=6n.L`OlNib:X*J5MKx');

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
