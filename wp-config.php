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
define( 'DB_NAME', 'testwordpresslanding' );

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
define( 'AUTH_KEY',         '4vmfq#[3tjfzP>/^pAn#Ci&xq#!H+>|k?v7Nu.u1Q{D #x>F*]a9JZ7(^g:bS$z?' );
define( 'SECURE_AUTH_KEY',  '$-<p6t:DbFo|zenFlmz9#@iI7Gv.~?lh+.<)Jz~z:N;n5>AHbO(ct:YDr*Y~11~4' );
define( 'LOGGED_IN_KEY',    '$FJamFZ:#_6RY_rMYy;sKf}=fwPO#,g?)yF&Re8s+5/82+_6S}oA;~3TBx%7X&1B' );
define( 'NONCE_KEY',        'Q6yW:Cr+H$&1}nsr0(+Li!$bv#]bFq(6i5f-KH]tE&}*Nhh#w`z-p.Jrdf4b6+R3' );
define( 'AUTH_SALT',        '*sZs $/upXEOX/>fhg^!nU02[Dz@$IZbdL 1SNvsb{q%AK/}!u9-rtv@SlHWfa{X' );
define( 'SECURE_AUTH_SALT', 'y4P)-,9a:7?1Q&9EQZS)ET.Mt_#No~q?|GCnY2zkpm5#D7bW =O?`v]CQ)Bnf_.{' );
define( 'LOGGED_IN_SALT',   'gTF}63FZv8/z>5Cp>o|I!NcUD:ww>O##?>06)Se;)yx>iPGItYamz62v9V#|EHQY' );
define( 'NONCE_SALT',       'mj}0E)G?{<!}>HOF2a}wC^>Vbnxz{M66riIW}SR[B 8U;XoEX2>#4==>=i)% >Kq' );

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
