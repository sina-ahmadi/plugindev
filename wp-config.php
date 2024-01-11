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
define( 'DB_NAME', 'plugindev' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'mysql123' );

/** Database hostname */
define( 'DB_HOST', '192.168.1.5' );

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
define( 'AUTH_KEY',          'V%]}G/20ak`&H & p4>wd!$NbOQ$N2Wnr=&/cKgZ+SP{hsbDJetkMKSktO%xf]G)' );
define( 'SECURE_AUTH_KEY',   '^Ki7BU]-rL4NA4ksa)*}tKe <*A%`3!lYaCuE|ZC[6Q2a/X_#q:)zNXHDw`D.e/^' );
define( 'LOGGED_IN_KEY',     '}Hxf[}biZ|6E~7NCKs&]G$[{pJ~9A-OQXgITI|9{J1PO!3Dm}=p1@&4*P~Q=yKF@' );
define( 'NONCE_KEY',         '4BK7{.XOCa}mfP#])yip,|>UnGkyx#E ?6$$2t1Wejm2)(mRHGEh^_1I|vM&o;G4' );
define( 'AUTH_SALT',         's>/dZNR #NC>rf*YDg#%h;q)W!;A32#SMLA|1H9y{|fLO*EF^*&:uRy?M<! 0^c-' );
define( 'SECURE_AUTH_SALT',  'Vh,c-m7<`N4+!;V ~=j#;!{MBc=QY]&?HbBvQ{ mp@n<t*x+-7|O3A>(WG9_l<9d' );
define( 'LOGGED_IN_SALT',    'NV5[eJs7C+NVE::-~)f1?#?]nv_q*(gz&WZ3>Z7sLtqC1|l;EmuBRe`FQuNn-sNS' );
define( 'NONCE_SALT',        '1$QM9%AO,)9FaO1HNB(8`R1}i<,xMCTXk_|29lL_>^6gFGE6?TH,[?uLZgELL1Ev' );
define( 'WP_CACHE_KEY_SALT', '!ud~*Dv$+J;($+;R`;d<X3V}*p}f!6duOAsYRgC44Qj?qipwp!2 q&/_si(lTe/6' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
