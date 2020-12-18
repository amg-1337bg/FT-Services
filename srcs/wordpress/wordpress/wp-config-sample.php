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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'u_wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'p_wordpress' );

/** MySQL hostname */
define( 'DB_HOST', '192.168.99.105' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         't 5HPF=[Ix&QD1(-IlinLEKu2k+F4W7r)?.BY7BDNS%BcJ$Ti2fbZ@5$~9x@]pLM');
define('SECURE_AUTH_KEY',  'g5CqJJi%a+H.e.y?,6Vk@2l`LbK@0Btj<t>D-W9AJ<+ApVwNn?Uu+!2zjYi-yvbS');
define('LOGGED_IN_KEY',    '!4D@o.UwqOghXo+${^0tC;4NRKOD+FOXb|>V:azQ;=_^E)^*Zj++8m*IvqjqCuK[');
define('NONCE_KEY',        '@mwe%oe&WZ)IQSeQo>y/$!F]|Cx@-7+TsM.0K8C];o,NI==/T?iuk*w;t;]Mp-Ag');
define('AUTH_SALT',        '*C/|<~_EI-|xs^#Lt=U*fpr1gNMB={ =5CH}|SamgC9Hes!6:JJ#{Kh%ap#/h*c;');
define('SECURE_AUTH_SALT', '482Ud}C3B<J+3it:xpnVKW!Z#fLuh}k}t+?ce=Mt-*WtBP^|-2rnnGjhcdNlECHX');
define('LOGGED_IN_SALT',   '>k2_`Sv[?SE)AfTB,?n*?R4FyioFw#IL0mh$f #}:Oz|VS}BRUb;`F2S<CMPQjvI');
define('NONCE_SALT',       ',WSl.~4f6)s}7d<+&+TO@];f5e*l(f[Dt:%1L() E^8Sw%2%e*2J<]X`}P3Z9E#k');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
