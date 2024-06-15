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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'T0hn2vG.x#mMnfp,mX/&E/Qg7g_qj!B*Jn@L Fv!u38XDF5D/F,_M$ps?$ww]7i3' );
define( 'SECURE_AUTH_KEY',   'LBd?N*jFt63_YnwnzY(q6TTV^;b-;]l=O1H]CqDlKz&co<W:Ct~sGco,u[}y%D^q' );
define( 'LOGGED_IN_KEY',     'p;8Sh^UV*sa~]=Xm*-|u ~.!^+%@hT|,HH3M*9W-K2l}^Cw$TyDJ.uq(Y|Luo&7}' );
define( 'NONCE_KEY',         '/kk5=^K:z[{D`U-kpu2:4`0@CG7oV&5h&?dG3~%kEl*37kGWa H@_F6;et&7UQ_:' );
define( 'AUTH_SALT',         '@ Qt3{`OGb.T-F Og#uy$nUCTT0J-~][o.FIlj@uqn<QTh69$21h(fyK-AS%QuTc' );
define( 'SECURE_AUTH_SALT',  '$M*?Z*k{oFO768h34itKW_ocG8MD>{[:3vHRwjIR#)^{bdACTUPdB9&9K+CL7Y0F' );
define( 'LOGGED_IN_SALT',    ']?TYv3,0?pyY{yDWRj!YnBd*>eAq<V|]?KD@9zUy^n1D,3vW-pnZ~>t|UB7*ot{m' );
define( 'NONCE_SALT',        'RBb|+-NE}CxgN0L.9.uX.a4z)Mc`Ea/Rly~4;3u)l0b`v;Y)I?A|bTi:7>.cE&E6' );
define( 'WP_CACHE_KEY_SALT', 'RPy1c;K3{@<JlDdUJd]l-GW;oF?y]=|SifPvph?N$Up@ H&,T))?x%wGlN9UeFUQ' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
