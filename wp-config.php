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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'wp_mysql' );

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
define( 'AUTH_KEY',         'LiJF!dUgB,k!6#2dC-B$XgY/4rMR|lTBoy bx`/rH,)do[mAL@0JB}J#@36[]aPO' );
define( 'SECURE_AUTH_KEY',  'Gc PJ9Vhi1^#iA<#,v]%DVTmSM9MFDFzZhIe=CXjcI%5snvidTWYse4BDcJ+Z)LQ' );
define( 'LOGGED_IN_KEY',    'Uq|n]Sp]eP6Qz|312hA$ &8di1TF~r>Q>2j6ppzliFADZ_]5n*h?{>.aC[a}o)0=' );
define( 'NONCE_KEY',        'x*1eWG$1sR<XeXHI.MQP-w:Tf:`jF/>{s%H,A:g5_X_az=Iy7D#0SP(d9)VJ:2d3' );
define( 'AUTH_SALT',        '8(7S,`LrD<+w$bAV6(*N1Pwz7o9i~`^M*omE4MiEp^ha5|XJ0m~5hP e*NqI,}({' );
define( 'SECURE_AUTH_SALT', 'ELbpkt#Vm$/mdnXFR,mmVA.x+UQu?S@J00G0;wIJc`:ihx]Xd2mXZchP:>a)3^H+' );
define( 'LOGGED_IN_SALT',   'ZT3P*rY?%^.*8%XzH{2-IbrySi~nCr6k]FlOX MX)s> `Me4&<S$.mV8A{XQ4Z17' );
define( 'NONCE_SALT',       'ihMuJ]MYEELcb? qS5Ii/RCfJmlT1KD]|$o10hR]WnlX&1SF!Sv:+9Ygljvee}6[' );
define('FS_METHOD','direct');
define("FTP_HOST", "localhost");
define("FTP_USER", "admin");
define("FTP_PASS", "1234");

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

