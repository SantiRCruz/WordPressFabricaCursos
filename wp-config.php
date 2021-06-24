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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',         'Y>}EPdQibsM^,k;fi{CE~Pd.2jU+[yV|{xLeXSUQV@wULJcl?z&ES)uDiF23$<o1' );
define( 'SECURE_AUTH_KEY',  '6@mzn<s}}.l?7,hft(ZEO+/s8sFy._PqbF ^h)a-$Axqy.JJ?B6Gx&ra NLnlDr{' );
define( 'LOGGED_IN_KEY',    '+_w.H.cB14so6B4QVE;aP_-#cdH]tb,BCa4JALR83Q}tJDWjI99_gVB5W[WJCg|e' );
define( 'NONCE_KEY',        ' %9{ImWAhy&DyS5~F@s.Xz%bH4qVHJ>]<r-s]k5}h_BLuAi&bEn@m7YVB;Ay-$DW' );
define( 'AUTH_SALT',        'Bex8 ,F,n*hKtk_Kc(qyucrN@/?q,05b}BqI`w>}=}F&6%~!fcYaJEOJEu+T/fii' );
define( 'SECURE_AUTH_SALT', 'J;t]ULcKKsDC=lVoNbro75Ij%yDfhK2rFBZy)(^*rE}(G~)1S jL3RqqdH+eA7Wb' );
define( 'LOGGED_IN_SALT',   'rKcP8spdq|O^)t{<GZcf.UokeZl^vzPw2l%eg3:e?,C8ixV!#u%h D<`.RX= mZ9' );
define( 'NONCE_SALT',       'Cq.GfN)ji @bEw@!NBFYC(x=-HJeyQ`1aoXpuDW[I^M58*(.G/m;RSXj5%J,=jD,' );

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
