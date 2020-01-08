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
define( 'AUTH_KEY',          '<Q5eoezN>gqBWl&>2iOS%P-FChzS4;tl{iwZ|sNTT&gNr)>K@KPG8=o<vhbNUQiA' );
define( 'SECURE_AUTH_KEY',   'dDgLA|_%3PovuDYx@p!xCOx.*U.)h]!NTIaTK:IqbB4*oHo]nh;=WBXY/{:A1,fX' );
define( 'LOGGED_IN_KEY',     'k!}U;L2n=}*trd!s:*03G{ZhqH)SC$YD5**VV=&gSG-3HLFpgTvg=%y`*Tgx}QS+' );
define( 'NONCE_KEY',         '?R9c{Fx<4yFKY$|@x}y~(t$SqK2>/(GBu_jeSWEaNZ Zucd>3?9{so1Iwh1>|g&:' );
define( 'AUTH_SALT',         '<v.jF=/]}J~(0C?h5X9M2|*wPm%|2UB(uO<hCG4}TQiD_P2X oWVp4,3s(mRKGLe' );
define( 'SECURE_AUTH_SALT',  'Q{5a2k5A%Cx7h`[8*If>Q4gF,5xHZ`M{1:cD!krrN>Ca<$(5smL!+MZB<Ou^<L;z' );
define( 'LOGGED_IN_SALT',    ' )Z[<@}=U8Y|j29N?9MY2Ea<knLtmzAbS3KYJ]~f>[&$>p:>Tcy>[WY=Y$c#8X{|' );
define( 'NONCE_SALT',        '9s|_rS;V}c+`e<u0^w6}BU6]MrUS11jfv7r9>AlK)IzNFD/b2L8}>#e~~Xhj^Tmq' );
define( 'WP_CACHE_KEY_SALT', 'AuX+us1C]$Qhzed6@Mi1lEVSQXIgr4E=Df(BR:#$t+ztp3!sF~aZycr%T4dhC]s`' );

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
