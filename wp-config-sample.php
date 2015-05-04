<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'homestead');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

/** MySQL hostname */
define('DB_HOST', '192.168.35.40');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'PJ/cL-/(|uQwx/#m}eiUwN2vko%|P6rrJ)`xMt->lYg!we+?s.=gL61_%AF12t9k');
define('SECURE_AUTH_KEY',  '[|-n(af/=@|%%;kOf||9u:PrJNMBS[NdIyr?Yl?6[7c8)+M!AbZIDZp=>H&-u+o[');
define('LOGGED_IN_KEY',    'I!^FRg@cJV=_:^8|Ye[;+8z)oyzQSc1/,*<0ONCJY<}zhs$GSEUc1-#8vDd2jMN[');
define('NONCE_KEY',        'CR+)3eiaD{R3 i3/jB#v nyqb:{@|^,j;iLD+/m%:]tu&S|mhlqeN(L/%IjhhwHS');
define('AUTH_SALT',        'i;ZawW2B[,bZ3-?J9%TO!jJ@ GchX6U7<N_`?r?c[|c7[h5YtF9W74s>gdmni-7,');
define('SECURE_AUTH_SALT', 'p@e+NpB+`aqyZ~Pc+Fca~%qJ-Fq6N~ {8 .+zbmBf{KXC_fiA:J_Ou~i]MOH28/G');
define('LOGGED_IN_SALT',   '};{ZqSOMC,SiZn&Pv={d5I[}0W:52g<GaRpd%!U0@?=d(B>>JySOa|%~bF3TaJU0');
define('NONCE_SALT',       'hFd4syisp9H6CU/Ft/Myja{8V]Xl`OK|K8*la;ctn|Q,wY?~]g}A`R)Ow+]x~iWy');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_dev';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');
