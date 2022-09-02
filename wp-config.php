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
define( 'DB_NAME', 'Alice' );

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
define( 'AUTH_KEY',         'a?e8wF2yF7CyPYZ(Bjo/vp&If4Hk#jr.dvIY2;oFF^G{`Beyb sF4*r[<v}P &| ' );
define( 'SECURE_AUTH_KEY',  'sW 3sB6)%?j)FMf<_&#NSW739i0j.D)&Z8tQ9F;JE8C$rZ{>CtGEm.QG9AvL@cpP' );
define( 'LOGGED_IN_KEY',    'egCJH5R?5lDjA<^YuoDFMIH?2y/?yQ!xSrnbK9W0?^cOU&M_#-I8|ZZ;%@C$VWf7' );
define( 'NONCE_KEY',        'Xg>@p<qiQ)T7fs]WX@Hlpw_u&h!XO5@J9qDR<}#*SY&z3Fp&;[RZ~ r?-]eQ,4.c' );
define( 'AUTH_SALT',        'c.tK6:svFUE+NJPrw]O}US`z2kmaBpx|p+>u]m@PO1moURgD50.tO&Dd49rCm $n' );
define( 'SECURE_AUTH_SALT', '@aW$E2/a#>9*o^qT|w1bIFWuySmn4BQ2ARbJjO;Y><oT-/ka7qf&0O@jpsea0@Xj' );
define( 'LOGGED_IN_SALT',   'Mp_pFp@-sF;4kI]5L#@4=Yv^D3|P~{v,Z 2l p!pZ-,0H.Ak|{.=D0&,/-_)!*l{' );
define( 'NONCE_SALT',       'Zfk3SrAn&~l~U!1lgW#J,O~]]EK*cX1f~N%rFyw/28Lo@-}Ov&5bj%^uE/%GY~xX' );

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
