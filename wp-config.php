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
// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bigswigtours' );
/** MySQL database username */
define( 'DB_USER', 'root' );
/** MySQL database password */
define( 'DB_PASSWORD', 'root' );
/** MySQL hostname */
define( 'DB_HOST', 'localhost:8888' );
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );
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
define( 'AUTH_KEY',         '/?;,Cu@S==q.mXq]r?$@}3}n~jXr>UWlml*m@$^.}X82X-Nt)Q_W7ewrh>Vb ;pa' );
define( 'SECURE_AUTH_KEY',  'lQFql&? r1@7G:pT|#[8S7VBMz*je%M%|b-Qo?oY1]+>+F+%rV%]_;B$,*5K^HW?' );
define( 'LOGGED_IN_KEY',    'CAjN?#Fg<6!Pz?gi(uYg;6x}nQKQkEMf*X!|Ul3{o[;XI.PeE7J@WR<{f!z]%K&^' );
define( 'NONCE_KEY',        'f+ma-uU&9(KfLWVF`=~g^GFxiG&..tnB]9V>3hlPxaGaQ4|o3}8&*/t.bTW|,^ I' );
define( 'AUTH_SALT',        'uqU B@p,*JKv8L:B;+JmQ`z,#Wv>K=5Y0j$k<,tA[+d3VXNQM)wPXSOEC+5 /C+2' );
define( 'SECURE_AUTH_SALT', '=/y>>Fx9H:tb(ohh51eDP?fn<DgT|@+WD u0y%[{>-u&jcW%(#)Q6nB,e9w YMt;' );
define( 'LOGGED_IN_SALT',   'q~Bb5>FOfHha0-;yebt&i10+*;p*b-nM|U6}/<Yh_OL*~=v5,&THI|O>2 ,ZO;#m' );
define( 'NONCE_SALT',       'yrX@`C?()hI?bpP{l3|%(6&~8~80nl8ozeTj}e[ U>3r`$~_#6<e+P3!d*k.*A]h' );
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
