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
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '31welrl1}<m|Q*X.3eqkMRK7ifUH( `(VD0rq]nhkTS3Uq:uAUY@$)%V<f&gk|O.' );
define( 'SECURE_AUTH_KEY',   'nH(E%-4U6=cP)dN7QH$hcLNg>N.aPY.weJ)g,u};z#_&I^d<Ma7[2WRaHE.MD9UT' );
define( 'LOGGED_IN_KEY',     'I|fw?WJ.pJZcZ]f*nVA^0.Ug`xCqRU:y~e,4F@ql^V/[^,}Y<-o`d`U+ (;j$rJn' );
define( 'NONCE_KEY',         'T6_oQ]:).dRFoanbfV7UaSYnh6p7t,=[L^Pn.#y}kD|08~xy{YI)&(hJ;ExyG/00' );
define( 'AUTH_SALT',         ']q<La>)]*2]xfU05?xqqcstQ{3.p<L}p-FB%^d<k:Z,KJE7eD)yrfX4y5q&j9C.8' );
define( 'SECURE_AUTH_SALT',  'lCO#l&kM7;E6*9T_mBnmJ@y4D.6X~F5>_M:LihSOF/y*wy[8{?wpUdS`YV 6xd!y' );
define( 'LOGGED_IN_SALT',    'lqcYw95]spA#;]sk,^]~CkC,vkB+:Zuh_+Z.i5j=:Hc`ph4J{9O@H~2nGAho8L5F' );
define( 'NONCE_SALT',        's &#D8tb|UoClg*<>vRz^Z!Y2awe4pfW~=6+}95{ 4<n0u)f#|:wn)=udg:Jd0bz' );
define( 'WP_CACHE_KEY_SALT', 's1ZjeuXE|v:Kf_dnF9s(^KN34l`-/K8C*E[D<jxukM.m1FvTbhu4|2;g,mAeL:Md' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'JETPACK_DEV_DEBUG', True );
define( 'WP_DEBUG', True );
define( 'FORCE_SSL_ADMIN', False );
define( 'SAVEQUERIES', False );

// Additional PHP code in the wp-config.php
// These lines are inserted by VCCW.
// You can place additional PHP code here!


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
