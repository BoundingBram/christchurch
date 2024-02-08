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
define( 'AUTH_KEY',          'l4qTpuByRqSgLoH5PzS6aS}l}<|)M:nPAHS>0cTs;[3jS:GSU(S;MQPv:9MfX~PX' );
define( 'SECURE_AUTH_KEY',   ')Yk]7vIU*]|,uF] AsG[QwBNBw6u:|2FNf?xnjpuMKUhl#hy90;93Iw:gfAy(3s[' );
define( 'LOGGED_IN_KEY',     '1&E)_a,;FM#tsA+}ao-]-~UU!%%JDA%0):kXJ.o*V?Yr{[(-T^6vQw~6BhHVxDL[' );
define( 'NONCE_KEY',         'fwX:?#yjrOu_A$+L2$3YZbhX 7@^] M6~`un`P&9MsfMZ1)$K>D.Hx=1-<~AG?*b' );
define( 'AUTH_SALT',         'Yq_{ds$8y<v*C8TGCDDo5IBnxT<]|yPLMhqnh)20agE!iv6U)2;p%n^i&a3IXw}+' );
define( 'SECURE_AUTH_SALT',  'aNFcOdQ0/,1!ScubG(V1vnl8_u&UX7V==CNo*LeY(5UGm+T)>k%pp27}5/dJsY7n' );
define( 'LOGGED_IN_SALT',    'PZk3T4TnCki1.t}3[88qb]VAZ^.u?6tO$A PrN|x,Mfj@$f_[#HFg&}HeQeZ,6H;' );
define( 'NONCE_SALT',        'Xk$G:,]]P!%YzpPU?|%|Jiq#Z%{T~v073L*o{DXs96[@j 3o,u/sG@,e 5VVmh?/' );
define( 'WP_CACHE_KEY_SALT', 'PbSLKn`%9PXCn;H5t&UX}KKS90:-*I4|qomed5&&. }7<4>HPrjaM&(qs_=)~f,I' );


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
