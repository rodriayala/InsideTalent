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
define('DB_NAME', 'imaat_clients_insidetalent-com-ar');
/** MySQL database username */
define('DB_USER', 'imaat_clients');
/** MySQL database password */
define('DB_PASSWORD', 'pablojairo99');
/** MySQL hostname */
define('DB_HOST', 'db');
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');
/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define('WP_HOME','http://insidetalent.com.ar');
define('WP_SITEURL','http://insidetalent.com.ar');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'MI-to$L>!ekTnRsoV`[`!$>u-u@y)6Wl5Yo$eJ4>%R:{^c,` 0408t=dH*yanr56');
define('SECURE_AUTH_KEY',  '5{h(eKw.zvie8b(JJ^y&;e=`yQ.6c17<vD+@rf3}PSGqL#VWbX3m~MOB_-?P(4f`');
define('LOGGED_IN_KEY',    'j*+)d}~u=oF=jfO/uaOo/yJZAvF#5UP$!(%:R<u+:}1?*SU/%B^K`p%M`84vAv=]');
define('NONCE_KEY',        'Qqoh.Opo@=Hb=!3XrM9NSPpRm6HKb(bxdrJg?M)CDi3[QKD6c~r1#WNBH{0;VC~F');
define('AUTH_SALT',        'E13i&V<fi+RG_9#jX9r[rnskpBcc<&);B#W]@bQ|]f~#oiKXBzLj1@3qL}}C3E%!');
define('SECURE_AUTH_SALT', '.HXQ}C$#uAW)rGX4a q]=2xxB<FyR:z-e5sOEX.S4#%wkGItrdZCZ5PAmId{GIY/');
define('LOGGED_IN_SALT',   'Ujx0-St0n`PsCzp`f!= _?D*e,Aav=t9Jd!WM`jzDLfDB|#;>M@cN6XRxdSinfsG');
define('NONCE_SALT',       'BkyQC#/Z#5H07~WF>9:7k8su{jxt5&JNMM2O8S?IzJfGh/y[dWUEp3Mw}v|(m,M4');
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';
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
define('WP_DEBUG', false);
define('FS_METHOD','direct');
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
if ($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') $_SERVER['HTTPS']='on';
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
