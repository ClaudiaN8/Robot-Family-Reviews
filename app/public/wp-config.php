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
define('AUTH_KEY',         'sHjlK2kMBVaAnjcLnhd+MphFCcySwVwPMwM7MIyHYAGvt/GzIhQ3n9SLVXkx483DwLejWdquLxPlx58v1MHIng==');
define('SECURE_AUTH_KEY',  '/sqKWNpeqAli0mTP2vBSJq7PwTq7bmLT4bFVt2icS7m8PBQch/Rk3QAp5gIoQV8OvBbKn0jABTT6VF3GL/ZpJg==');
define('LOGGED_IN_KEY',    '4gaO1hmLQGrVhqv2c9/yqkzcM8Muk4JdhVlnV7WuFYP+57CCrvwc5tt5Nfuy+tHiMn8wOWlQJVv0e7DctjwRxg==');
define('NONCE_KEY',        'UaELmIRXNmBHFxFm1d3i6uSe0wBMXSgewY006zour+mQSoEf+nq75rF+pg+wkFF0VLXJDon1lYcQtpU1is0wjw==');
define('AUTH_SALT',        'o3ESi9s5NFd4OGNxXDdlIEGPUoWeniHD+wV94/wKiE0gXXOq6fuqOMFMBzaJDVi/5TzAGrVdSSS4YKE6nPEaaQ==');
define('SECURE_AUTH_SALT', 'xb+iYX9dEiAC3eqTkojlTJ+SVM4HblYJ8av8w7ez2EZmLVfsht4LEsNZf3d/FYTRKuwg/BLC4cgRqD2y3nlzfQ==');
define('LOGGED_IN_SALT',   '6LEoR3FONvDkRmsQeo7JU2PgkU2hBV/PFZMAZfXdDqB9+RTDYYUeXt2dAgvI6svQxHWEmGbuoW+oSckcYwrkVg==');
define('NONCE_SALT',       'ySYq5Q59IQuTIN4LwHjVBja1PSpnzA/TMG05eSGdmcVgs/pkiW0ORj1kTEAQg/R4IlOBy4Lj1/tNtHMUTgXdhQ==');

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
