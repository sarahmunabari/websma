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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'websma' );

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
define( 'AUTH_KEY',         '<vAtUvSa4mq 4hB0U!^mu{EWIJt7C|qu#8oQb/Ov ]~|]1UfySS:S]N##n{=Y8|]' );
define( 'SECURE_AUTH_KEY',  'd1l=tLh3tBhX?h}^}Ma EwztSB,T2K%t_[Y!#{~wxC5!^b2c@a]|LNo#2K|?Y.?+' );
define( 'LOGGED_IN_KEY',    'F?hrh)1*zDa`6b/vDJ[L,pX#^80;=!1hd>o9<VJ[(#{&AE.e-g,PeC#x/%O*YJyV' );
define( 'NONCE_KEY',        'KfoL=gE=oyB/Li@uc? {Hhn3bi48nY{Z9Y=q2{2UwTW!LX~&sx|@=pqgjY1gxN_D' );
define( 'AUTH_SALT',        'm!kzyQ.&@cd~jq^cV 4b/dq?4}q4c%Q3Zg]zE7#y.SR{lpFuM$P=T!n*6*I.sBQ,' );
define( 'SECURE_AUTH_SALT', 'A$1p oTHdS[rM`,!.DrQbZm8_SYqr)u(3veW#pFI0IeyK;G (L[Qeq#nz*qIW5B&' );
define( 'LOGGED_IN_SALT',   'dha}_`iD?wr?2kusH G4w-3xOW{hK2Y[Jrihari4K$P.sU6*UyI/gmWPV?j%O?*b' );
define( 'NONCE_SALT',       'HI3NgzFgM>kw8auxQZK^!Crf90rEL];W+A~gK3ZKp7b<74bc=Uy!>.jZOkC_p&P1' );

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
