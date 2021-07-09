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
define( 'DB_NAME', 'myredevh_wp' );

/** MySQL database username */
define( 'DB_USER', 'myredevh_wp' );

/** MySQL database password */
define( 'DB_PASSWORD', '~$LO2J~;B)9^' );

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
define( 'AUTH_KEY',         'IF3ps~)kUEkStq?xQ,NaUD*zC$8B7Ge0jWz3cWHsTi=;BHb!aeb/d5iMN.co7U?t' );
define( 'SECURE_AUTH_KEY',  '!ipbaePdcSOs_gK[GU)s5yM]<@rz M_Bk/c}EXr/7ZZ;(`7?$$=m-U?TD7KnK)J@' );
define( 'LOGGED_IN_KEY',    '>] elE3%{bwVZ$&f[@nC!E|*>]&JS7~Zj`+#J*~N&flrYO79}3vv5E/#k#W,cF_y' );
define( 'NONCE_KEY',        ':Gn4JtQ,QO$If]{(>yw/1?rb^0*!Ggf@)=fkjmkx@hWaBv>:@{S)dsA@I-*%67~k' );
define( 'AUTH_SALT',        ';dZNzm|JS|bmk3d(XgzF)FKQaBQv+ogH_?&6$zQPSw)m*n1&8D=TfMegCQ#vpMn0' );
define( 'SECURE_AUTH_SALT', 'Mly]e~P<2e`a%Z{?U?T@+W$9E%g:~M]~eY^n=k9.U~{]fXYB<HjCq|eu{3)/l{M_' );
define( 'LOGGED_IN_SALT',   '!UbyrwPp~^3g}2610*aDp?Kx,8IDtHhe0B gXMIr4uIFi5XU}3=7LAqQfA=E6QqM' );
define( 'NONCE_SALT',       'xcV%6AqpY7iL16MebvnL#!&,,{+H_jt!Zsj1Fak*:z^E,A6vs{AxKB<v}?elk+-@' );

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
