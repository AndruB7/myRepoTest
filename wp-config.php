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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'MidTermDatabase' );

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
define( 'AUTH_KEY',         'uFalmRXF#}vC0FK*wAI+5)sg<& -iSL_G7aM^N!>m4r%_)uqn}|CNBwTk*~W:CZF' );
define( 'SECURE_AUTH_KEY',  '&0+g8DKPsxI =$6FCcAI,F:_&-iONJIh pQ#RU6Y{&{RVM7yCxX+:,%Ity2ci+;J' );
define( 'LOGGED_IN_KEY',    'I8FE{G$fk.V0.N145:tomdNLv1M=n=AWr@/<{u>q 8rf`*]&!YAOn_ZpPn9wuA0s' );
define( 'NONCE_KEY',        ';Z5^plxly}<H~ifB^z-o>5#mVyTRabkW`gp`[k*O_ZsbqvuC)r^pN%.IBT9Gu*`%' );
define( 'AUTH_SALT',        'gpidcrG/G4=o|=u*Sa[kAQe$d,UM-2nm=?/<s8cFU*$x)aw;3,JD2W-+rj}Y=cCt' );
define( 'SECURE_AUTH_SALT', 'WF/FFhfv(=qnp(Ka?`n3PiOUGa^d?@[cd=x$p_Y/kz,VOMscbhKi?5:]Ble>1kbd' );
define( 'LOGGED_IN_SALT',   't3H-v*fQ]EGgSM7<dj2mC@4T!:ZP3ahrry.o7?DbkeMZZK)~t!e&.#v6?cv:k{+h' );
define( 'NONCE_SALT',       '{^0b8e$`=e$xx=,l|Ym}AMR<&N^i=AbnN3$aJ$7=%t%DxP%;FxonGg,T{i#E-2)8' );

define('FS_METHOD', 'direct');

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

