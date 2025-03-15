<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'danitech' );

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
define( 'AUTH_KEY',         '+r!+@j|a$CPDu?tD%}(O$e*=eA{H $4dLksxhymf_t)?&<ZL8b|&%5Vt(4NtMNtW' );
define( 'SECURE_AUTH_KEY',  'Pc&3.YAh~,/t|m4HKZ<ygIhe!{[4XX#2~$W]^6i33:(X50Q=v6&aLk)ZZ,_G4]YD' );
define( 'LOGGED_IN_KEY',    'c::KgqBUC`0gV2wxzb$b1cFh54;&M{D`~(Xo{|)WZKo^1S][~6q$h$xrT|b[EDep' );
define( 'NONCE_KEY',        ')jhij1N}N8X3s}Oxd@Z11 1x6<H#fS2qW,PE;H/&/a1>qvj+d>&!i8FRzvJamM>d' );
define( 'AUTH_SALT',        './FUR.XQSnFpYU)%`.2#!*F9sNN/U}&@92=e6b$yCOF?d;WMMhb>^[.y@J!/|UFU' );
define( 'SECURE_AUTH_SALT', '1.|!;AJp)]EUQXMQ4eBC$PcX~071G@jmN?1}QWtUhFA30L9aS+MLIC0W]/hE*)m6' );
define( 'LOGGED_IN_SALT',   '`O*jkc:dq`&n`},}4|?`j$u#P?h|w=`,aJQhFL[skO,(Wx:VfBvaeu9( ~7+:^jZ' );
define( 'NONCE_SALT',       'q4J-`45]2W{-F{VA>LeC}=L;Tdvq+:1#*#Ega^@*uxxhhF}KT8bk|D3TIA6N4%he' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
