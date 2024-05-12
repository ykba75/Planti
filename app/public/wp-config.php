<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'KQ%voXmY4!/xHVJ}|&zRdxG)FfR{+V3r3Ed^2em)>vqd~3SS)DnS*s3uvQv!],F?' );
define( 'SECURE_AUTH_KEY',   'sA%mr>3L$)P<9karxf$*)@.~}f?(Kz=,-TdYqgH7<sto5Zi egL,=>Yug|*vZDJD' );
define( 'LOGGED_IN_KEY',     'bd;uPsSgq+6|O 7H!xx,p%C$`.q~3pl>{_id;O)C>7~>8_L$2kA}T,)|S>)RKat)' );
define( 'NONCE_KEY',         'cs?}}h* 4>GtXR,B@2P0$8z%(gC#,gb0[MrF+_ZpJuL0KuDvmIqM,ojt{ZEghXlW' );
define( 'AUTH_SALT',         'oL81PNJi*MM=)s5=>Kt^8;52$MJ+}G[d9-3*K,.2II/$J*nD&`XE5lSh3CE<+`H}' );
define( 'SECURE_AUTH_SALT',  'TF,Dt<NyR};hchEaT9n:%$j@}o[E-fa%(ZunYfgCk@{q4q9]<92AjR#=w:X%s*<h' );
define( 'LOGGED_IN_SALT',    '}sfq#>y9LtTe5]ZP1^fO5/[]0%[>oW#a4kgT59ox$~htp+jh5r%G(XW+p8E%mn&}' );
define( 'NONCE_SALT',        '&QjOQ]H-pb~7ft^^I/20~tgQ4#AzA5XLMzV}Z.ZI*l0_hL>V-LQ_;UZ4D!UYJ4S`' );
define( 'WP_CACHE_KEY_SALT', '-Rx[:KB0){^=v2a2J]7bak5|]:dgz3W{U[hl4<xHk#sm2g-s8O$JeK.M4RVWecox' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
