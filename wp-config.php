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


define('WP_ALLOW_REPAIR', true);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'raleche.com');

/** MySQL database username */
//define('DB_USER', 'drupal');
define('DB_USER', 'admin');

/** MySQL database password */
//define('DB_PASSWORD', 'drupal');

define('DB_PASSWORD', 'YanaDavid93!');

/** MySQL hostname */
//define('DB_HOST', 'localhost');
define('DB_HOST', 'database-raleche.c73vrvuftgta.us-east-1.rds.amazonaws.com');


/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


define('FORCE_SSL', true);
define('FORCE_SSL_ADMIN',true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '{-Ws#3*Afok:(l]qE[)uBP;?K_Hp>^ZuM%^Lt QPnGa!e%9ADS?j,u:]gv$q5=u^');
define('SECURE_AUTH_KEY',  'KOqb.3u37X`7$1Sgz})(}vm8Y(_C{P>9k26_n/x6G R*~{=y(iV#FHkI}bor=BUN');
define('LOGGED_IN_KEY',    'M,~r3kzht@|]CvGF#(Dk_B^p%h.pON3_lb|[0:$5lT6h=,jQ&ZZ`^vNEDce]yq~(');
define('NONCE_KEY',        ')}p,1a=CGW/UskeSj@m4O^JH5pTZpdP4hP)uKyQ}&4K]78^E`THVcw(z3R@ap]co');
define('AUTH_SALT',        'T OWgoS1+3U;KQT#of]fJTUReb/^yy`r%-zuZRQ5sSw`(39s3U?*W>Zioo[ |-QW');
define('SECURE_AUTH_SALT', '0}@pXh9^.Gk`w%5+QQe `F3:l!6c1B?j!e*msAF&wR+<SJzO^l:6HC@KeMWVh%Z=');
define('LOGGED_IN_SALT',   ' LAN>L:Zi^r7(O|pSwYP}S2fj$#JS8<5L2q,:xn_G?klOLDU32&n=yV0i|$gR~c~');
define('NONCE_SALT',       'RX#Ikgy!bMjjp+e(L9Zj5C Ek/&])$T`~%:v)Y?Eb2be95_dy FL+ZR!Gz-}Bl|f');

//Deactivate Cron Job
define('DISABLE_WP_CRON', true);

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
define('WP_DEBUG', true);

define('WP_ALLOW_REPAIR', true);
define( 'WP_HOME', 'https://raleche.com' );
define( 'WP_SITEURL', 'https://raleche.com' );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
