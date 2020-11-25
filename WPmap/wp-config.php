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
define( 'DB_NAME', 'wpmap' );

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
define( 'AUTH_KEY',         'Mn(ft$Bb2#yr6Gm38TAmbo5k[&(pd65qCF^)u+RF!xq{7^lp)X5K1`E0FT3GbTgh' );
define( 'SECURE_AUTH_KEY',  'M /ZW{b$Lgt?nU+d1%}mr.9fhr;iX[:$0Et=v)cC6 t,s|J*uQo95n[l|G$Yw<IN' );
define( 'LOGGED_IN_KEY',    '6f.Wq4YV(_f)`$uE=7@qXVYs)|Am3/yPDsJe;Mw4#-Vot@Bflb$If/y<q|],A0&K' );
define( 'NONCE_KEY',        '9(fIylNyLv2JG`c-W211eQO|D+F^4YD<X;$k.3_!09[RE*oP bv:h481}jNg[B}:' );
define( 'AUTH_SALT',        '[`v&8Fl2-nZCQ4}G7b)$5A+P/D>K[~Wb_bp{E:S}kC<6~V1;57B>Pcw/Fs8_3{0#' );
define( 'SECURE_AUTH_SALT', 'sJKiv@4}po~f9LPUy&Cq`G,LK~ k  6[HVmIP~*=aSY-L_YCY2D8JR-lbVbm_O)y' );
define( 'LOGGED_IN_SALT',   '3+)Ntb-@Dmc%6!ROmRH36Do z<91+}SqRT}$!QO&`es,*z3AfJB/VN&-~w#wR%|^' );
define( 'NONCE_SALT',       'U3?&gyq<5D<2zeOLt/a89Dx.yzEPL(*{8B|#BJ#CKi#3SE%JUlIJmW07ss/*4H[t' );

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
