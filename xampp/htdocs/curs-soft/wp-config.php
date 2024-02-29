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
define( 'DB_NAME', 'bd' );

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
define( 'AUTH_KEY',         'fOSYQ[Wr4z(Q9jD_P,3];q{>Vs|POuqz_@BW-n<Qw;22v{IP:0m0eg:iS@`dbjjZ' );
define( 'SECURE_AUTH_KEY',  '^51!Nc58@|s!D,X-zvihq@I=mB;3WN>V5XfmDBqmc.<y>RiCGon*mTOCl4Iy,,tW' );
define( 'LOGGED_IN_KEY',    '8BiF,.,gtE!};y#uA^l?J[(+VZS5|{l0}Gz6$aBCb_}G6<2u_3@8c8cMh7N YC;H' );
define( 'NONCE_KEY',        '*3fo*khb@]avaU`>q;5!2IB/y;tgljPj|pVDh>Wn|)E^X5~GqF+sv1#igjMyeS}0' );
define( 'AUTH_SALT',        'uE],Sl3yLmjJ8/Xnj>6uV/sl<S|#v4Kk/~(|k;i|]b;%gaN]HfHxzZ2If0Nf0E@}' );
define( 'SECURE_AUTH_SALT', 'BeMylK! ZmX9*C>7>/p=COY3FU{TyiwJ@ <6rnHvoD]rp@h+ Iy*Qcj_!^.m?7=1' );
define( 'LOGGED_IN_SALT',   '#Ff<=p4fce[+JE f4(GBvM7c(+2~0d12@px! u<g!M)b3.7>k;dq733}pDjp_Kp9' );
define( 'NONCE_SALT',       'Y)$F_&gd99z&Q{HZzhe(7HjS>x5KeSL2`@c@fkk93%Lmkma><Q_@{7}A:~Nv3_hW' );

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
