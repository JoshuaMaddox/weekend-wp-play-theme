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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'weekend-wp-plaything' );

/** MySQL database username */
define( 'DB_USER', 'weekend' );

/** MySQL database password */
define( 'DB_PASSWORD', 'weekend' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '=G1gLX;qFAch Wy1|t~<5wM~(OZR/YDW_#iIY^&m,axpT-?>3}9VI84@vlhG`]3+');
define('SECURE_AUTH_KEY',  'n&8J&1QMZ+$:x<o/b> 0_ye;y}8w>aoq:R!diliZPPsy=N&wuk4XfIa},ntJKPCp');
define('LOGGED_IN_KEY',    ')aKIO.sAJ(msfu<Q`7J@,VUKyB|:%q~z(bY.wo#;KSj#)(w|!<A@Mk([=-nTmWab');
define('NONCE_KEY',        '>pu:GdX_{lPNzcG3!+Fu4{7T4ey$tA>,j>Q1sH=ge8e@c+4N|y^m9|dMFlh_:cgL');
define('AUTH_SALT',        '(ioM|;7~DMa,~z>+9z4-|-p5`o%<dx#DbbtSaNVzBEW#dfs+sn=_{F5oqxxU6<QN');
define('SECURE_AUTH_SALT', '~bv.1(GUan{b~~ZcfZF/i$fQe0I9iW![~3Msf!wrq;M;Et:UMm@*L%66/_94:[A@');
define('LOGGED_IN_SALT',   'Ct&cEV6zwjAknX/ogHuw@?a4X|?(;7cEvPP%Z$4@/YN_tBz{H/$ABU,>N&Gd]wpl');
define('NONCE_SALT',       '6 JNJ-/}NC.ljF8$.M9Iqg+X?9jl[%TmDF-o;W00YV7tVxC=W*PhavuI._S}62c(');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
