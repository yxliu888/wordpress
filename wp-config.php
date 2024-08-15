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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'doctor_of_truth' );

/** Database username */
define( 'DB_USER', 'spiritxqb' );

/** Database password */
define( 'DB_PASSWORD', '3axwEepg95kN' );

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
define( 'AUTH_KEY',         'C=+}x%Y`p]w)[iHq;Y<U[^I[iV-dh)S+@6K3%*Vdm9AfnSE.eP/sSr=d7b~5-}#e' );
define( 'SECURE_AUTH_KEY',  'i&8:8Uu!D?9X0JeG%cd1lG.A$yG6O[9#*Bod}6rEzfoaZ?4ER.wo!*4~9:#Tcsh`' );
define( 'LOGGED_IN_KEY',    'q`{<xZ_6DKT0aW,n!|1m&NcVr9qpW|/<Rue_%4-O<9jfL9R$>KfF>r47AG-Vk:jf' );
define( 'NONCE_KEY',        'XMVeOhG7L9K((byEHiKuG7l(v{{CXd`ko].16RGEAuG(7*0=m80w}{ut.yT3%|m/' );
define( 'AUTH_SALT',        '3t~0%tGuf;V3)CtXM>T3zeX](g<G[R><jhWc15HGt.3`a{|RP*ei$}GvuL>B%gO6' );
define( 'SECURE_AUTH_SALT', '>0/hp#l+=`n$h?h,wy<G&NZLt8v!r+DZ!u5W]G2)hP )H`?e}M}zXPUi;>dTN{H@' );
define( 'LOGGED_IN_SALT',   ' iEaRWE+OjY KD{G^3c]P. uV@TB<~=81s-Y2Y8?&S!x1+zvQLWMb#tXwMIg:V4u' );
define( 'NONCE_SALT',       '5XO/_rtPW9b9QoA;TRt%ulHKDPSnd>1cfE {M]%kO#3R$zL1ao1>u6u`X}.ME27e' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

