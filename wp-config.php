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
define( 'DB_NAME', 'wpboiler' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'l-NsP2PmlZOYorNdwEgF1^{<RSf{D~V%&0UIe|MBl&E{O@xxUU|-l1/X7L<N$vV|' );
define( 'SECURE_AUTH_KEY',  '2Co!C4ye3mW7X^wVC}AU1FVOX.R&3fx+he{/B=kK_#`eXr`:VqR;0TbCWJ5BZ+rI' );
define( 'LOGGED_IN_KEY',    '~{XSSH| +0u-4oigsTS!I^!DnYGp+GB/+J5Fx^8LtE/f7u9qV2BLN*MO|=EN6O=A' );
define( 'NONCE_KEY',        'x=*#CMHv(iF$s0(S3w,q%X=W/J{9&7cuNBp5+A-b#ysflA6n(Vm5.=4|Ndq5_Dc@' );
define( 'AUTH_SALT',        'T#~K9443AibdDZ__6E0Nc&TIXK}>:1lM7%Nl79iU:JL`CK:Z/1*9mrmC~&hZ|Ex!' );
define( 'SECURE_AUTH_SALT', 'XmOa7%t[OTPQg/9`<-,I?M1_d_q#+&:Bu}W3w{.[phG4?_!oPSApFq?kg{c!o+s0' );
define( 'LOGGED_IN_SALT',   '_[2G9x^O%Q_]h#Du/daz<;qO|dH5:.3kT0t|d~*W>1YSG&rA!A3u*!!4V=CpP/Fp' );
define( 'NONCE_SALT',       'F90}QB;Dfvb3DyMSrPHLe`$OVPM{bJauJR)WylwD!}?(`(S+cZ^0j[o}O(}i5/8Y' );

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
