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
define( 'DB_NAME', '' );

/** MySQL database username */
define( 'DB_USER', '' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         'cali0l8lothqgwq6xcuweunbtzdoibgrnkbvawdd9iepiuvxo2ndhwev12qyxr8l' );
define( 'SECURE_AUTH_KEY',  'krupynqgemy3coaav43wcn6ku1wx3wfpi6tuodpyhg41nd0psdcgmz321ahly215' );
define( 'LOGGED_IN_KEY',    'yd206dpf7aw74x0cpzayurrohoxrljdguzkrugoeemirkftdcbnm2fhyhmspcabd' );
define( 'NONCE_KEY',        'nepbsl2znt8qtjzuemtwtb20viqduefmjbllibetnnyj2x4cimihctiiorc5pqhr' );
define( 'AUTH_SALT',        'jdtvglt7rnzbjpfcn0jyqydca4law6rhu0k7qpimdqu5l7jabp22nyjpmx4uueqa' );
define( 'SECURE_AUTH_SALT', '93lmrkmzxm2agwqe9hidp7ztyhahfhymrr2dg9urnlpoooxzmvt1vtdsofgg9exq' );
define( 'LOGGED_IN_SALT',   'ynykwbtizi3xgvuacsxqiwoheqeqzphieu1mmxwopo2n0ysl1tkxptldabio0zi1' );
define( 'NONCE_SALT',       'n8hugyzxosmu4bt0zan9u0iamfjravbmoygvzhloozvurmtwx6k1aqaithwf2iac' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpmf_';

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
