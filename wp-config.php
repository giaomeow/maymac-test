<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'maymac' );

/** Database username */
define( 'DB_USER', 'sandbox' );

/** Database password */
define( 'DB_PASSWORD', '@*dvt143*@' );

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
define( 'AUTH_KEY',         'EECdY;+_tJt=KN6[?mFf])AB40zd>0J$SJ#FH*Xc9Zjzbo9K=H /tby_-b8I~JF;' );
define( 'SECURE_AUTH_KEY',  '5rgs1vuMa*G?>%GG:.ED&b,e{>;EC+Z,]+{<I.&wZx,#W[NT1:0Xw1| Hv:u+a,]' );
define( 'LOGGED_IN_KEY',    'V%Rh5y(5zf.(%YX-Z[d.RBEN5g?gB<PbA(@{6~-O@f7*H:?&JrMAI)pz]ctg/`~8' );
define( 'NONCE_KEY',        'if5=*A?-3R}((pnjWDwnPM}~z-trMBS#RB3ae*KLSQ`B+D Mgnp%o8v!7c+$r&dY' );
define( 'AUTH_SALT',        '95hOv!:qQVO*>>kn4=4 h$dv<J}zL|}LyAs|UT.G@6y^X8wsw!xs2XGZB.Nq~YL3' );
define( 'SECURE_AUTH_SALT', '9_T:B3!?98>v_E/!HargUI0Y?jg^*mvW|*TxpbES&t!dE*([[PoRVx`;OR{zIqeq' );
define( 'LOGGED_IN_SALT',   'M&[Tv~!V,zT!v;xlJSwpX7xl$h_km&n}]7q !WcOj-!q.Kni];7IGU]7Y;=m2*k7' );
define( 'NONCE_SALT',       't6KhhmXp{igAt_3DO4--=y8ro!2eFZX1T$rfX[C#8I|ZmMEpI#(2jlD$3t#PZu{I' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mm25_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
