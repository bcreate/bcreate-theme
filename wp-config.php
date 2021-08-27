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
define( 'DB_NAME', 'bijansu229_wp196' );

/** MySQL database username */
define( 'DB_USER', 'bijansu229_wp196' );

/** MySQL database password */
define( 'DB_PASSWORD', ']6(Svu57qp' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'apcb67357rmovvfqkhrahxwg9a6hbvqommjgcsf7age4anugqhtusnnm2erdmcai' );
define( 'SECURE_AUTH_KEY',  '3zuzjawaqs5tquzmmj8ux8shisesp5f4jzjmf1wpvwn1ebyc3c0tbz0lyuuqtvwf' );
define( 'LOGGED_IN_KEY',    'o6gp05dol5iqi2ayimc2kcdlewoi8vzli9ujo4lvzflwao3avxufi8zkhtqpknr3' );
define( 'NONCE_KEY',        'ilpumzkybjkfg9ptzkfiwatpbeu8noa2aozwjtzm1rpwtipgey40b7qdjaovjeen' );
define( 'AUTH_SALT',        'setnxwdgpykgh6s2uxcm2wlfnz19bfkb52sbslfwasfffn9f7vxcwdruq8p40seg' );
define( 'SECURE_AUTH_SALT', 'tcbd5oyskvkejcabrreeivp0sesa6lzfh5uv0bohju55an4itwdrce26eat8tbis' );
define( 'LOGGED_IN_SALT',   'liy8c34yl91hxmhhl4cu6w9hbtmmsa1ocoospk2c0rue3lzmpzyglw1pruweum8z' );
define( 'NONCE_SALT',       'c2nszvuvgqvzs1mghodrlbfczne7521dvcu1t03sqnamgvcw2oiuahxxzorwhjo7' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpfv_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
