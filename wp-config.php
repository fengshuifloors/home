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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'site_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '&o;lf!jS)DUphg&!5E#1lD02fHf4Qj}wBr#Qr;{kR/q|otz`=NqPs{:qoiTuq$,e' );
define( 'SECURE_AUTH_KEY',  'f2Q-s$O&U6IK< k}O#QqY^apEr*zf Z*Pc|(OQ9GxMKCRNwL[kC]J>jc!$3t2?K1' );
define( 'LOGGED_IN_KEY',    '}krf<aGqPVMz[{3Xx9dpt.|T!@Wzcvst)q^k7wsF9[X+-BRV-=N6yszssbRnlofh' );
define( 'NONCE_KEY',        'L-oPe+SH1!(@Ma~QJ_vxHl-rL&dF;]>tzaP^7l6Kgi~<rFH(1^98IH$4Z:[bOqB2' );
define( 'AUTH_SALT',        'O`YCtxS!WPqmg3i,&%3w>U?>W7xW]29w=Z(FnI9/1mt{I$]yJJFJ:dyoqP.>zGF~' );
define( 'SECURE_AUTH_SALT', '@0Dic$p-11RJ{<{21Fy;iwba(2dm}8chzcA9!:;(Cn-59c?AV0#~u8f>vsiq.ER1' );
define( 'LOGGED_IN_SALT',   '9g`h]0{+(nd(BKu/sw3]KMk[n/(9o7.cn9FqvCrR7Z`n}&`%a$!f^-_O})~^U|il' );
define( 'NONCE_SALT',       '*Y/GJdr$jKO] :Q {:Q>Yd!1v4FATXlVXBSIqnF6Q]q*;6=Ixq4a_P=UJ@F4KC-G' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
