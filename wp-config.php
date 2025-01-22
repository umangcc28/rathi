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
define( 'DB_NAME', 'rathi' );

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
define( 'AUTH_KEY',         'd37`qgE3|N0R3M17c}%~xMSwe{7C_w9|,#KH[9P{2!x/x$R$F?PHFLgz,QUH/k.|' );
define( 'SECURE_AUTH_KEY',  '@-NwPJqw&50N3,{HZzk<:.4bG09=sWAe3IpX=c_0#U47w/-RNrEG{=5I362*9CWE' );
define( 'LOGGED_IN_KEY',    '{vX{J;yPf!K&D>Cvcz$sVfQtt&qurBs3kMF)0;BD>Y`)e1~0ZC=?zf{$w5uO2cno' );
define( 'NONCE_KEY',        'xQU<cJ!3@ed8J:N_|msz($iySK!ko1!]GS0+nrmbS_iW(B%c9$BQr1EDKaMl v:%' );
define( 'AUTH_SALT',        'fX&2/x7+kS`sc=cIi{(r:XSk8LmE(?c:b[YPU/8tXKij>3f9b{QV4]fgo0_w4-5.' );
define( 'SECURE_AUTH_SALT', 'MhO]7a~^hz*^!}>tnxBJiivbA:D}4RkO).<*1zvOrW[C2|1.mNzD<Oi2hMG{(c]/' );
define( 'LOGGED_IN_SALT',   '0xG+oI{4q46@dP+*VMbtnE6:ao:k$2NE!79)QcbiTtyOeN5|^M<JTz?@g:&;1lek' );
define( 'NONCE_SALT',       'JCWgCbkSLF(d>n->^S4cD:RmI)ToI>q3fMK0H/o|SsIo)blFxEULj&p{<e!w3c$w' );

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
