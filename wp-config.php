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
define( 'DB_NAME', 'u349110507_utese' );

/** MySQL database username */
define( 'DB_USER', 'u349110507_ywudy' );

/** MySQL database password */
define( 'DB_PASSWORD', 'eTusyRuMaq' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define('AUTH_KEY',         'wimxDMuW]=OE+#?,T~n!N|L)W1`1&w$tpd|Ow1`#2(.tLkWFS%lRnU3Mia=kOUy~');
define('SECURE_AUTH_KEY',  'Ny~0:nJj%!mbE2BN4+o>`[e3JI@}a*aRvI(9+AjHZOb{;!R]-3uFfa;0TfqVCHVT');
define('LOGGED_IN_KEY',    'N^L}U-_^O $*6,x-;=|m(-:Nh{X+%L97>hK>(>?H-Hl{Kyt[!k x-j?NW#mc}:4i');
define('NONCE_KEY',        'e!$#|Yt]W0X|Os:_Hqas`8W 4=7;e@.72x SM7u$Fd-A_|s%&M-k4zb!;.>K:^I:');
define('AUTH_SALT',        'Ml_E_)c4IY51SJ/P:nDU{fHY$AMvqt6JhaT9M=.DBO-&4%{V~7WHmaxn,H!s|P(+');
define('SECURE_AUTH_SALT', ']4ln^.t`AIw$ea3~oA^+m]_n.cX~d`TIh2JN;$$})}C6`` 8nD4Mi_vC[73y|rci');
define('LOGGED_IN_SALT',   'TX1IUP2v{`[$i*#CnFBJFAA0B<3(`AMuyI~ef[I#7UV6+f3u=y22|jXRY-oYJb2M');
define('NONCE_SALT',       'p9p:4#gJ<+$yBkJF+f5{Kt%@0moKN#.HRc~)LhcwKR}1!6S|x*#Rg[X^j,[dE{</');


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
