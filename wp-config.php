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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fypdatabase' );

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
define( 'AUTH_KEY',         'zwn9CaH1L2r{ZgvXdszt}r}kzIQ)NV53^d*U;6iMXzS06Lvl J)V};m8QMqW.E_O' );
define( 'SECURE_AUTH_KEY',  'MJaInu8AJ5GK)`g&`ngr~f1ey:)|7#Up +)}5g1Q)9P]DvhkuN[#B*u7%-dU&O}E' );
define( 'LOGGED_IN_KEY',    'jH]@Cl)?24zDv*ud~tQ!RRrT uM8nS`v#j!BWhu!5-?:aM>L<vDvmYE{a[_&s;qQ' );
define( 'NONCE_KEY',        '}x+@*FXP[WB6%`|{lB,]-B2HJJhjkoR,MVj)Z_Sq|&~MYvsdl-L!9s$j7[VJyE_j' );
define( 'AUTH_SALT',        '1!si>MCrPr-y0Qs-%~a`7Xtynt`lxlU3XwXVu@ZWj*eVwfLZz+5S}E=s 3eQ-Osi' );
define( 'SECURE_AUTH_SALT', '*z}ZDc5Xs_{y_%MPNCN~$(h49A-ai^CWff1b)ss@n3|GOO^VmO>Z_jl-j4<jW}1.' );
define( 'LOGGED_IN_SALT',   '*2+:w*wn5opF]HcqW.S4;:a&Z#B([F&50Uthe.MzeKT3[/j=)[GL{10&IklM<Mtq' );
define( 'NONCE_SALT',       'G1*^VJ<J%i<Q/1FOINi/Vm`7#Es.PMV|70a-TAZ=n8{!7Pu,e(D_iiFY6{@2}Dfk' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
