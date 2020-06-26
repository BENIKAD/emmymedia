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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '0qrTGAkoX3GeGWCZC2NTZwbqrVvjCc49M7y+QeKfTH5990VH+p9yiMoM2KRCLRWWGfaLX8YUczU2dhDp5U/6sQ==');
define('SECURE_AUTH_KEY',  'sG4uhnhAGM866XUxNTPtmB4w9x61eDhRgVWP1ZPSIEEpXrCuHoAqFS81p7YAMjfKsw8k3fje0m/T0kP/zdkuEQ==');
define('LOGGED_IN_KEY',    '7U+IopKWv72fEdcWs8mp6n6QTSl6/rnacGPmpUvRxS0WXVqvos0TVUjJmibVXJnmrmmKO4ny+3k51ZKQdI0icA==');
define('NONCE_KEY',        'JeywjsmRjlX/YB0i8hGgpiklOanJbF/MmKaYTqIJlyD4WL7unTs1aknRZgScwqqzMzc/mGhvaj3ZllM6ZzzaOA==');
define('AUTH_SALT',        'IyRWgpiH+FHTaKzE813ewHeyHyZjvgyMhdC7iTTcvaQnDdnENaomd44t1soPilXypn0jxf8ohTprXWzHW8p5bg==');
define('SECURE_AUTH_SALT', 'he6bP6yTCnp+ykRnCsUAF9U20+6SGQejqSaC+ZpOnXsdL+fw2kDUbrzhX0Ly29S+B0JOdfnfarVqCJr+oQMX7Q==');
define('LOGGED_IN_SALT',   'rO7AL95UQ8BR33XCR9KR6SnxCQ0ZPETdXnfJYFLMH1pkxXt2THJD6tExX/RFf50OAhUMDotpIkdr/6u0UVrufA==');
define('NONCE_SALT',       '+L0J1APzJov+tmfaRb3K8s4X30ADu8GbTLuUbH5Wuvn/MMvsFZ4zVlMbLbdJ9iTJA7ryzaGHk/07bAIo+P63rg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
