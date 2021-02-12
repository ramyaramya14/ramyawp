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
define( 'DB_NAME', 'sql12392485' );

/** MySQL database username */
define( 'DB_USER', 'sql12392485' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wQHuFlIfFA' );

/** MySQL hostname */
define( 'DB_HOST', 'sql12.freesqldatabase.com' );

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
define( 'AUTH_KEY',         'dT*zUkQ[e*#I0}h3d3F_Pyi78C%VIL095JOfFrlsXJ.auoFwYwe`b>g7Dty=}*ix' );
define( 'SECURE_AUTH_KEY',  'wq3h{[al2uuQ[M?RpYNk-Ff#.$x`RmC?0Y IR>>KalW<;-FU4%Y}CnM5S^@3H!4m' );
define( 'LOGGED_IN_KEY',    '_I7|}`=<.*YVX<#07o.ht12diluYk=qpsiQTabN%Z2drvJ~N( r>^AH)wMF4r og' );
define( 'NONCE_KEY',        'K~vbX~4qOp6pp~5bp#c1ovE8`Fugyo{*+.XT.W #>7GY#?]ei=6F@g?Qo_2e3$ik' );
define( 'AUTH_SALT',        'Y|>M~~QEf#.~%K5mxzI$N;Hx&zJ<4YW_Nl`=5F0h8 Wp98j^t*!w@ga*rMIp:7Di' );
define( 'SECURE_AUTH_SALT', 'zw/@P~D.apaPyTEB7=*QO5a76n9f/P5[^18esk?!V|n39uE6K1b,Zx^kpo/qh7k(' );
define( 'LOGGED_IN_SALT',   '~THGOUri2#*4;n3pwZ}q,_mlRoz$aRFwUD|:pGx^AD`6oPP*8eV%_sflTmuID48z' );
define( 'NONCE_SALT',       '7}5j//k^qt^<$E_6#h]sQn,1g<m&}Bnc4uqSoK*/jwIHGI)<&`l]:[:U<~jZL)&F' );

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
