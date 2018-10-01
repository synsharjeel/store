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
define('DB_NAME', 'Store');

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
define('AUTH_KEY',         '@1S0u@@u85oL#hviQ]OE1sPD3%bJBV3=8?-RQTnq?A_q87J0aJU;K)9)U1$ =&Rd');
define('SECURE_AUTH_KEY',  '<j7T~Ni==TLPpNLYxpWtV/{7]l8:->A:re08*Xmo]bkiG{<5ofVg<YnOUGtkEIEL');
define('LOGGED_IN_KEY',    'yIYy^=)I(!g^p[/~}0T4IU1U?%1m&p?vj%!IOH&D1@?8&Z^,I*^Ldn#,*/|`^OdO');
define('NONCE_KEY',        'FMKkQ>x/cjD,jx`l%IV([}?e}L]pn%b:j#V-,@.ypbr_u2x]^Yt<Z8T00dQ1Nd44');
define('AUTH_SALT',        ':~Yq-CXoTy>wwG<<$gA?X,{Tz`RP1@Ex)>YBj(6=Wbz.y&DqLgH|g-YMa$PV|]91');
define('SECURE_AUTH_SALT', '#.4Oz6W6K(_)vEfe}.^lSgC`WW/X4|#jmMP9_z](W`U!IIM=}8aYC$V92J3>of.A');
define('LOGGED_IN_SALT',   'I_qwZC.|;_{-#j?o|fQ(!!O(E3AZqO*:_,DFBOGV{A[|m0WfX%;|?@}$:<#.4Z d');
define('NONCE_SALT',       '5N$},*)2pU;WOeB9].(IdomV%D_)~=q?d.*szNqB!OH`)jp;5K<&l )bVV{Xd7]P');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'st_';

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
