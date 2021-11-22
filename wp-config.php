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
define( 'DB_NAME', 'phpknowledge' );

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
define( 'AUTH_KEY',         ']5E,&qZ]j<@NnaP1&Y? =&]y)  }U]$R^1@J,b?FI^iRR.c..jk~fw*<Nj!.CR6;' );
define( 'SECURE_AUTH_KEY',  'CG]a( G-2ECq2g F6kz1#;pSg3s86ZrTNVX;S#25E)C$<L;/GH.+JbtNw=M~t;|V' );
define( 'LOGGED_IN_KEY',    'IsyTK.V<Oj6L@C8T<gm|wtcJncZydv[#Xx7mu:#i2>p!.C5|vGUD0yhX-,K$Ne/$' );
define( 'NONCE_KEY',        'lRuJd=;[*e{CI{37BAkV2ap]WF9A%gF2)d<BL-HK1:Dk,^0&PrM@KtxAY9[U![vC' );
define( 'AUTH_SALT',        'Odi0L7lU9}M[,>+6;)|^D|bb,PKP>Ur5[I3v(ti#ll78i)fWi8B`J]7v0=gw&$Pb' );
define( 'SECURE_AUTH_SALT', '#@P}83oHqxp`RDl+K%q}tD2z3uRi{;vViVWlfM@Rl7_/t>t{9MbW7_<H=NVzw=_:' );
define( 'LOGGED_IN_SALT',   ']`t^]pvpV9 &m{KckU !L5#7Ui*/Ir/)mb9lDb8U@1sx6[#}QOSsc)$#1b@R*-<.' );
define( 'NONCE_SALT',       '*xg[Bc:&nd:<T}]xA`KW}S90/(Nm{*LU7)4eN5rD!BpGNK:%*p,~aHFfcl@>oC7=' );

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
