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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'NzN3&kEeYes=$t~-nDLb7z<w,xmq;j#{ai.FC=-T~dS5s;-$vd|cimKgz3L@/|^p' );
define( 'SECURE_AUTH_KEY',  'X|?T/:rsWwp(WjK`ACd1[?&(eX NA<1)YuS`^5CD3?R/;n{Uz[u3OV9$!jc.({52' );
define( 'LOGGED_IN_KEY',    'G#mz%{CDQutSr<geUT^{g?FhU*3(W gQ6MW0YELZK=# :x-O1QDz~FfCZC4:kZm:' );
define( 'NONCE_KEY',        '{*RyD}6vKCLDx~_v1EZTULbx7fru&6MM^%{=]me`yib[FFXPBic$G#+]W%.Z*kY^' );
define( 'AUTH_SALT',        'pa%b3NWOhapi~]!}}DI^T? ueo|V2TgIsn&G/4B klw#{M9#3k.eSZ@K{[=4;]+q' );
define( 'SECURE_AUTH_SALT', 'q!buKlKBpVDXpa=#*avv ]E[qD7:Y3Kixc3fim@9=Lfw}54;sY(e03NxftPUm-!=' );
define( 'LOGGED_IN_SALT',   '.#5`?>APeye-hyg]8{-S!u3W^K=<=.*y8K/_r=]kxx=aj`E ,7R$C~NY?nqv#uaI' );
define( 'NONCE_SALT',       'CWH]Y##H}^CbM<X#T{g>l-pL#C:x}+!%Hql*e^E7G!xNov~C>9c|7P$Tc72Pk/MZ' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
