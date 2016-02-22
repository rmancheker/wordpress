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
define('DB_NAME', 'wordpressdb');

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
define('AUTH_KEY',         'J9=g*P4ap?H4(YeS[&c[?g|ko/|zPN/!vP#-a~+kJ8zqhX4+%.9chWSC*Uhpq^9W');
define('SECURE_AUTH_KEY',  'W|[6H]fIGkI,Jv?pzps!K*+3s,_D((l 7zal`VD_ZW|,R=m4PUGIbrYF<KtM=%Gm');
define('LOGGED_IN_KEY',    'R6hOFU9=Elc|eh-7V|hC5C9Ri4Q7V>G6YpZQvqK2hS3e,cKt0_+[CrwFa3(#r2ka');
define('NONCE_KEY',        'jx  #7.P+g},W[9o/#m|*Fay-w{{=MqV|WlXv!CSl,) @j-e`XEEf@KUFccPJc+q');
define('AUTH_SALT',        '_~x0R+3:4^tiMZATX}Q{r3Ss+Mq,n:1{iFA}@4? T/FEMmQlF*.vFwp{U}Fd|2&(');
define('SECURE_AUTH_SALT', '7ArTVx1MBw&q|)~fl$)x)F28,D!V]tV*tR1yov,:HX;c+`+FcR46BF?8Z+a.]KI`');
define('LOGGED_IN_SALT',   'km)xxX~2`Gf|Y1| 5Hggp-~6akvu:dZB~s}oO7g`N)1(c!MO7}YEsm`cc0Ciuis*');
define('NONCE_SALT',       '+b}o~babu4u*A~<7(Sc.(t?pJvDX_ ZGH?|(U0TK=:+Q-w*APP]FC{I$3X|Z(c+N');

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
