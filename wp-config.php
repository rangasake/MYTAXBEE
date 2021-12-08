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
define( 'DB_NAME', 'mtb_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'l,R8i.s~`DEZB0C`;<|YH`U(IJ{e8$hz>EBbO+V8*H?kVtAP=+?87!L@]u0</rO/' );
define( 'SECURE_AUTH_KEY',  '54dK4R9dn@>;4:uX0WpuL>WnFJ$JyuG!a}fP51V>i/%}IiCysZiM+o(j0:1-(^%3' );
define( 'LOGGED_IN_KEY',    '7ICc].=dQ =W!t`c3w@@HvNrPw~ o$aMWnRd~KvmWhQCf*?~C9,4&#XhI!p+k@R.' );
define( 'NONCE_KEY',        'W:y@DdN[r4}`C?]CReFgi2-reN;|6PYT^Zg8S*#0(0M:H(jZo~:l;N>/U7w|]wYN' );
define( 'AUTH_SALT',        '=vtz/#Z |9,!B[.LYi(-1LN1 Fnvx~O^;;X>rXM@WbJ:/(*]6O+Qo4A(coi{8tQ5' );
define( 'SECURE_AUTH_SALT', 'XkL- |CLbK-6B)$-/O<MlMREwmPI5MgE0)UQ1gLYWSBs^Q**zTZj(RUHA3f%=uA-' );
define( 'LOGGED_IN_SALT',   'gBD_sWec?P9,eQ_I5>~yxPwGOS82$5A.<=< ^B0$Cr,y!,QH7Z85_rqQ5)BT1:Df' );
define( 'NONCE_SALT',       'zYCr2&9mQd6EI,3To/8hnRLhcoSI4%tSJY5X#5oRtj4+>wDWK@j.0o779UM1inCl' );

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
