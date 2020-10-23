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
define( 'DB_NAME', 'ravindu m thilakarathna photography' );

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
define( 'AUTH_KEY',         ' FwtN5TCD)[4,x.O6PDgv;f;(d(I{ygwf,jTpq$^w0:& R1Ndns~XQE*unQ4J!wx' );
define( 'SECURE_AUTH_KEY',  '&7A$gx1;7bqP?~]J./5,G uQ/f2|4aS +IPfOfFYvKaOVZ@=HV&$Gcj.?@v]:uDF' );
define( 'LOGGED_IN_KEY',    'J<|mimm+ vF of33v-wZo2TKIAQ}]4b8ql,uE8Z{^G!h|hGx] {/Ae0m(31Z74CJ' );
define( 'NONCE_KEY',        '1K6$[jP9T^Na,C-PKMo_9xe=oNmDEgJEi[{!($LBq%OMLLub#&=}sYR~(=s?J%.j' );
define( 'AUTH_SALT',        'Jy&TC4VA-B+P.-;|qib+2S?$l4&Y)R#Zh+T$6jj{%%=>p#h51?8,SI0;xbmY&,yH' );
define( 'SECURE_AUTH_SALT', '$b+^P#=L{!GrQ~3oXVU<f{:t1@a7irZqz^$^-G@>`z:Gjy6hi)9%6)v(.(C*]yL%' );
define( 'LOGGED_IN_SALT',   'h3f5Rj<OWj5W$uAPDadQB^[GH4UQQVo7]?+=P])xMRf/l}4Ijv]XlLhx;HW#{l+|' );
define( 'NONCE_SALT',       '{gy<|#J4[+-`e9 |PqXV4u*Og@KIHpxP#ety, 0Xs?C=,zWS}aKcgjWrH| KzVjP' );

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
