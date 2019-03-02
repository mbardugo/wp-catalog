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
define( 'DB_NAME', 'catalog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'j;LqZI:$;pNC5vf|jd~sVT*<Hp %8VEdZ;StF>mC.oXXiWcx6wlD;VZBUIL)ln>P' );
define( 'SECURE_AUTH_KEY',  'sD=B)}(M*067}d&%wP$MEsZ4AG2V7qVY2K0.O&Eu4<_Jf^9..~[q8lZVAjtuCupe' );
define( 'LOGGED_IN_KEY',    'qeeo8;?u*;1;xys`S9_Gf8VN~i7R;topN&aCW!z=9o;(ik/[f9<Djf(< Q~fzVAT' );
define( 'NONCE_KEY',        'J>Fa}}Ql>Veu*QY,_@B*t4+fP);1RlKp/2m_J|EJfAFE{?QTgH/ni[/l7RH`O!TB' );
define( 'AUTH_SALT',        '21N[%f!yhu^--^!LALz)lT9hQI/jBzQO-6b^){,Ozw<wcT9bzLaiXxrc%%D=IdC/' );
define( 'SECURE_AUTH_SALT', '&2jLI-LdjOFTRN#^Vnh5WYYAG$kd=`x<yjmy`R6-f^m{<lU8W]>~Oy5|aJfp|Yqq' );
define( 'LOGGED_IN_SALT',   'e% wSPGvq$[:G_]3eP.XgC<;v1 z}=nu-<e:*PgBF%vK%W.4R#d#Q#7PbZrlfZ4g' );
define( 'NONCE_SALT',       'dN)IRh|HRb%y>tP93CcClp~jbP8|@v&`#^]M`ilm9eg:^YYaJj4Mz;Kab#K95eA-' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wt_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
