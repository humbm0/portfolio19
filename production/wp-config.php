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
define('DB_NAME', 'porfolio19');

/** MySQL database username */
define('DB_USER', 'humbm0');

/** MySQL database password */
define('DB_PASSWORD', 'QB90VkfzsGScJgU0');

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
 define('AUTH_KEY',         'F}J+7~Jd3yfaB`C=IyR(fVqOIlPIBjA{W>xNun&Yacz#WwVrP#T1$D+==2(3M+tU');
 define('SECURE_AUTH_KEY',  'UnC!+5uZ_ip1I[>2V3Hwk&,Z#w]OwCPUJfkG;;lq#Nb23J+0O):KbRJC^mr56xC0');
 define('LOGGED_IN_KEY',    'Lb$wCd01l$f=Z~L#M<qY]wQL||lT%-+14,J.+m-5Gl@D;t+Y~^q8y{V@dt6*$-`O');
 define('NONCE_KEY',        'ZN`?TILzO5eTm#pUZr-*X$vgfD6QAE-YV%Q)h)N<OjJ8E K!s[C{J_`&L#d>%>OG');
 define('AUTH_SALT',        '#/ZFQ2e>y[zf<>< }<|@3New2+2=6x^4M/,?;;3diq5h=@xJ_S3~O`}O`yu1EsY[');
 define('SECURE_AUTH_SALT', '+,=d#37^/U/7i0]()aehW431S%| @({$D2Hxy+y0OskuxBxX-53R__JDJ^gHYB0$');
 define('LOGGED_IN_SALT',   'aMxwf0)6_`,*3>L@P6&o@2]d&dH1,|S3+Nc.|?H:|q!<e)Cxsp-O<>w*Ltz8Ii|q');
 define('NONCE_SALT',       '|PQHxT]6t(}{c6=U%*#).vGTPykb9V+?W_$+O~tW>GqME#3?i6<GK*#W?AVoG:41');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'xyz7736';

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
