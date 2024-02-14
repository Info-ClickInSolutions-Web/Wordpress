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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         '}_GhT*9NE*CS!nlO5hMfe& ],#I[tb&DD&ne,3bTN|Xo3z*^a<8yo.nO[m=(Ud!M' );
define( 'SECURE_AUTH_KEY',  '13/QZFypfYU)yU<(Le@?~;|sX;ck#~>6Q9BCWPU&.AP-F0Juib# l<c*H&#?;tC8' );
define( 'LOGGED_IN_KEY',    'ET7~)b~=(G&=6WSm3s x/i~u`]Y^_8:[Sl8mV*84$x_In Fau86gOFIZK0]h#NoP' );
define( 'NONCE_KEY',        'xPPD^?QtouPkeBfFGp?+.)0#jK3=C>GayE<rned@@&Nz.mx:L1r/F`PcR6K:N5,b' );
define( 'AUTH_SALT',        'Gi2G>#+Y!NQ+I{f$d d4cL{~u;Qer9+pf |@wP2^=21f[8Y+Bnh_WcQ2P<(*$AAI' );
define( 'SECURE_AUTH_SALT', 'c)KjS{y7|+G?~kKaVOba]#B5`V:TTQY1rZm{t?km,XT*wo>:(i-,<0oL[85A8T0W' );
define( 'LOGGED_IN_SALT',   'zeh?ykvO^Pp#<&IFQG:dJ+N:^24@B1a[].,]{^( m1z!Je]`zZfUgby06I7}>:yV' );
define( 'NONCE_SALT',       'B:-^$fdsNm_CtJYq4=7v}3L%1r<ZAFd!D8wDZdKR+A du_z=->@C4ctbE:&km;p(' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
