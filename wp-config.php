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
define( 'DB_NAME', 'chic_dressing' );

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
define( 'AUTH_KEY',         '7#k$;/If?v-r-dzDC-a2a=~HM=k>fU0B^Oqahpb4}Y=0F@!zYEzS}i(&UiPTgjnW' );
define( 'SECURE_AUTH_KEY',  ' `&geUWQEVL2`I~|qmT%,ZY VAI_ER*~&i0XS lfG>`;(Rzx]&uUw,pi=wRDpCAK' );
define( 'LOGGED_IN_KEY',    'L^#hVu3mO_rq4_WxIt*(r :Ss+jG^|-1@9v_q=hv?8>m1S(n4iPqOtKse!N-~aRr' );
define( 'NONCE_KEY',        'eI2^kje6Uj2WgZ&ZvriCn7-c[l2ai%my)s&-GNnt6c/AC7g%M;*8($d64Eaq+`ne' );
define( 'AUTH_SALT',        ' TF<@H9yn>r/<]Y{>tQtN]GmT2D`jj3:2|D4Oo^Yt<N]:uI14R!Q{Vbu+;pqWl[Q' );
define( 'SECURE_AUTH_SALT', '[w7NBYYG>tXcj~s+&oZ6da7BTFTC-uvip kmi:[0x=ie0}@q}MP p;&ym5zlM%at' );
define( 'LOGGED_IN_SALT',   'KXJG#+aJG&Z_8_,}OV$/o!%HuWxcsw~*-|eE3InhNL47NGNK.p[w6AI|fQ!s:oR8' );
define( 'NONCE_SALT',       'w;y#!e_r<XU_UHoNiQ$..}s $`f]lzQ3BRPxN7(g*WO}x4.6)/-Cx_N**5RPQAGK' );

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

