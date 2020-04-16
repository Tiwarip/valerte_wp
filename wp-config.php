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
define( 'DB_NAME', 'valerte_wp' );

/** MySQL database username */
define( 'DB_USER', 'phpmyadmin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root@123' );

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
define( 'AUTH_KEY',         'aiChe<?V[CHi0dg&uMyP)D!25kl[BeH:6aFt-?qSK?Jd3in0{~?ziQpAm&=Mmdp;' );
define( 'SECURE_AUTH_KEY',  'wtFs=:f.v:^|a=b[&dBc};T,>{0k;~UE~J+a&g3oZddP6U#K%:kzQ:0q0YBwbm.w' );
define( 'LOGGED_IN_KEY',    '/mCk$[Pm9vkhIo_O@/U1=!kZW!?Zb%-9r,6]8`Hg*{8DSze2|d$&Cb<|$RpQ&Xa@' );
define( 'NONCE_KEY',        ':K/B6%[G#WzpMJt[##xbJ^.C@PlOD*5*qm*Wv7nwr~%[:]$1R;f*M_uTGta+}g8R' );
define( 'AUTH_SALT',        'dVh{e.{x7Zd{?cnhQDpTm,^g~qh$Nvy~hmj/mOEl,>=@5|4]^$9&hOLC?<dggfze' );
define( 'SECURE_AUTH_SALT', 'Sf(7^:}qz[wYShEQt,(Mj^`/|%QNr/!EQ7|DcKBJ{z3Xx6Wt10g+pS(fE@W%e*2;' );
define( 'LOGGED_IN_SALT',   'TU XtTYvAMTQdC--n4SQy |Hs!b#SRPv%[#/8wmsX=;kbSyrD:1:6R+6gzP3i@wS' );
define( 'NONCE_SALT',       'T5J ~M47LU*F::VUS%&;>%G^%bbJv(.H*%WOSslnkG}n^epvn}5`zflA0l/5U~GG' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpi8_';

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
