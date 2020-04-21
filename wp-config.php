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
define( 'DB_NAME', 'webblog' );

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
define( 'AUTH_KEY',         '9RjluyeLa@sgxMb-?f>ixB5hQ`C?F5jo5ceZf(SCK^HH$eAU)cr=|JV]e=60 ;e0' );
define( 'SECURE_AUTH_KEY',  '9uKO_:- iHvErbClbouj_BVf(@WBbBPKA+Et$Zu$sup`CH!n<!_>ac,KvGB]c$-b' );
define( 'LOGGED_IN_KEY',    '`:dnz0BWay[yG_h$WW$%A,<)g:^Tkd6^{T-7F-6ZH1j#I9)IV/ Hq,O[L+?ik2=*' );
define( 'NONCE_KEY',        '5qjN^jYXh+Co`=Shhg$E#{+rXLzn>9`Im!~!|)J;@!Y=I?KW:N*_b#|Zg5>VZ[Q4' );
define( 'AUTH_SALT',        'eHh*r^&Oj!NT>p*2H?7Pc*-#,wv?^w7l.PRF)=<r#k1%?.i%>Vk]sXd^H%b2Q>OV' );
define( 'SECURE_AUTH_SALT', '?FXO3~Pt]xA.z[AyV_Zz|s}iUvBpn26B1V1TmoD(z e]T[1:WV5o@hr^2sJS:I~j' );
define( 'LOGGED_IN_SALT',   '<!j,(#98Tg|o=[.aT{G(,qMUl]v4y:PMxgc/G57Aco?c;NwK/,CpFk Nyqoq.[(I' );
define( 'NONCE_SALT',       '.1juV{_mw~ukc9>3.9n28EpMm}eM6$x5Hz ?DW*Y&*~1r(5y^qyH/&U{!eJZ<974' );

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
