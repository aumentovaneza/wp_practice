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
define('DB_NAME', 'wp_practice');

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
define('AUTH_KEY',         'J(Q9my]:j_Dv&r@tA!Pe~#i)$gS6L)4sH^CLksquW6t@fmF{B ;cLK])5nrQ[$]]');
define('SECURE_AUTH_KEY',  'rB4^G49bV_Nlb9tMF$`aeb4ynduJq]nf*3YfBwAVL+*X;6]KO#NO+gU=p :(jC6l');
define('LOGGED_IN_KEY',    '&>T-(Vm}{,:7Vqb,$D_YYC8zxd,r-N5-|()Ug!t5&J/%@Le*7).}*rlZ3+]FfFSw');
define('NONCE_KEY',        'Y(@0#/@gkYnIC&&XUV2+/QI6_91Baax5SCNW$Ta,-95d*db~}P&xYy@]bskcU.K=');
define('AUTH_SALT',        'bfj!*$WA{T,pq*&+}KS>C*^.RJZCrP[4_(j*r!?F[{>_;T&7L3 e=&K~84vJ|>,e');
define('SECURE_AUTH_SALT', 'c5U?ChZr{pH`].mx0^acn6cN,1?AYmN9^&k4Z*#vVuKK&g.#6$fqz;fMrY{N4Sm_');
define('LOGGED_IN_SALT',   '%D{{624O8n7W:&L2z0uw5>MA_$?NNm/(KAuh(p4o-KGGubgrsWkvAwCATB&4MYn4');
define('NONCE_SALT',       '~3e/N^A9CgqNj4=((J[B~y_SI`PD23xXj(bh^6qPADebxuBY1=4sB:AcXB]qT5Ur');

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

define('WP_MEMORY_LIMIT', '168M');
