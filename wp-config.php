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
define( 'DB_NAME', 'demenius' );

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
define( 'AUTH_KEY',         'zVN~;AIOk:n+pU3V1UkO0|){NaP^K#vX]4vl% J<(a,&9Rg!P$Q)-7=]%Pt?WLU$' );
define( 'SECURE_AUTH_KEY',  'A,K$AoQ>]Y!AkY{P1dDaY@>WyCRn+&;tUu-IR|f[Sg4-Kq1:{du%;?QPielrT7#j' );
define( 'LOGGED_IN_KEY',    '*>gx<o&;1k#kos)k^WV%*)F 3g*DYCo| ?EI/`]+qPJS~GI{7`r],Cz pK !yL(K' );
define( 'NONCE_KEY',        'Z[=4Y;DG@O((6nm(TA=RV<xN^(k_W@|QA__}VlZOwJNqs~l1KFi-~Lt0Ka&kTpXN' );
define( 'AUTH_SALT',        'Hoi4y^O7;]J]Scg9lWALPNa.5~iNkWMD!1(l3(e+DM0XyF }&cE!u0+t^@t,vGL:' );
define( 'SECURE_AUTH_SALT', '`!$2bi0++vF~E6-C$wyK3I%LG)hFB,FAA``}Cg>txbM<P<Y/h{4d01b%J2K?6g^9' );
define( 'LOGGED_IN_SALT',   '}>OQ2Cm,LO_=5=PvX}]Y)Z>+%o|N(n8,%J*fwuayeJX/eCka<rdpCf54>FMa,{j}' );
define( 'NONCE_SALT',       '^}p_n4Q<hUJZ_l)-_&EizKJ2bjmh!;e(vGKMF8k.~,EP3AH.@rf-Kw+;Z<_=P/N0' );

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
