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
define('DB_NAME', 'nhancnil_atlantasofas');

/** MySQL database username */
define('DB_USER', 'nhancnil_at-blog');

/** MySQL database password */
define('DB_PASSWORD', 'JgoHfbmUyp68');

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
define('AUTH_KEY',         'W1y&_,T!qoW{}*<g+<F#a[WkK!#akZCWS70a>v(!C7;Atk^ ~W^HNbA`A0-wxLiy');
define('SECURE_AUTH_KEY',  'sU;P7W9_G;E#+e6s 5%O!IZK;C8Q!jx/]Ws*!yVPhR?^ej_]@(KyA`qfMXvAWw30');
define('LOGGED_IN_KEY',    'X{oY0[5nbVB^-mY%6HZ~5bRV3qj@@EpOFewlCouy%NrqjQ0auMFK,3urX{=C* eI');
define('NONCE_KEY',        '.+A+&*w{Ls+u^En/<@S2tZ?0Cp+Zyq=`JqkeBT=a7G73n;n$zOc&%/NTLd;O}/qq');
define('AUTH_SALT',        'TdHKpn}1D5w&_e:: jY$.R.bN@/-~#2XDy%WI4)/8p84&K:l#s4f/7]8v:!?}Q?@');
define('SECURE_AUTH_SALT', 'M5,8Hu=|-DD=glJn<9UO ,T_~NDb]dQ<2=N6B%8@v}G(AQXr+-:pG8H5<Tb;RC<n');
define('LOGGED_IN_SALT',   'NA<_QRTLg=+(fpsu[@^p)dE.CI.jkV_F|qHvD[=qK!csf,UR:GkqQuw)Yxb::*YD');
define('NONCE_SALT',       ']?>NXB8-:9/8)r;AG)kO)0s$EJ#%1kya.}g$& s1<F-[ m(_ieD:^pF]Kw?5K%rK');

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
