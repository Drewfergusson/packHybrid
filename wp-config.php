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
define('DB_NAME', 'wolfpack_database');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '-H(`mfx4U{?7CU%xhIyw!ku,L%xON-;=uw d75V-09/0Dof=R GN1xUO@7 DHt&-');
define('SECURE_AUTH_KEY',  'szE8],A HDWi`|Phwk@(`k_OyPNm9P(~>|KocYi[jord-`a`IK@3YQqDz8^`p>?%');
define('LOGGED_IN_KEY',    'IiTVhH~&gFPjtaT0}Wbk+Pms8zD-|KrNkaoCfPkb`2c%.5oTYf!x6#)~>~oSW6[}');
define('NONCE_KEY',        '0TwgbihNls{<0i2%$BU_e?OIDa|T`3MBS.BLc7Z+|.KcwaX,ZD5DVi[G$aF[`2-`');
define('AUTH_SALT',        '!CU;h1zOu9J+-;/{$f{v~H^|Sk,/1#=tQ]m|Ew^&<qcZ+WR|0R!x<BD#0b?+,Jnq');
define('SECURE_AUTH_SALT', 'Vx+@yI]4q|aoX{D>qd]d(o-yDJ=k,d7?m-p*v.*KwO|,R-fX~9WkHgoFjfqh23`*');
define('LOGGED_IN_SALT',   'VVi|kS:c=J/>R/0.lZiEm.9t8@|:$3;yfIXvlXtJu,@{A0@_q4{c-%iY7>H-`Bp,');
define('NONCE_SALT',       'aP(`^^R-eKKDo[TIzLJS@28S>Mk_)7Gf#<OA mT-_h)Xh8rgdl[>eA$Y?JYciQNk');

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
