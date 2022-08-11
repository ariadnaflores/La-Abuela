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

define( 'DB_NAME', "id17266561_wordpress" );


/** MySQL database username */

define( 'DB_USER', "id17266561_wordpress01" );


/** MySQL database password */

define( 'DB_PASSWORD', "JM6Uv\\)JM|\$X\$-7X" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


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

define( 'AUTH_KEY',         'HtwOKgD)61.y7/Z- ,@YHobfHr)qk6^_zuVGX5IOr2&9=@`?k3Hg#rm*w)5Nnn^v' );

define( 'SECURE_AUTH_KEY',  'Xtvqc=E,0],)(iQ;r<JD&6$J~wIGB]I|nbvOnv&F%.G7!-FuBG-B(W~0juUlq+pP' );

define( 'LOGGED_IN_KEY',    '^;22lf:Tu0ogC~ljw|;5CcB:|T)q(flKmu!I$^J/(/B$f]6?z$ZEk/h;Q2~b:{0K' );

define( 'NONCE_KEY',        'q;sVJ+%@Wq@`(*zvb*Lm=*pp:!#}CBleDq?9>p~6PT)kj.o7A}ZKOoB+<;FIC:$!' );

define( 'AUTH_SALT',        '<xyI+.Xmf LpONtyD`(eZfLb;XIytE7U>wU>=t*Lt@.0Q(hmtV4C@m4/hFkN< 89' );

define( 'SECURE_AUTH_SALT', 'r`0U-;s`IaAe%o4]D4v`N;LgC9Lukb}p~.SJ|GQDxB6P5B>M)=5~rUNvCnR)5Q>l' );

define( 'LOGGED_IN_SALT',   'Pa:bnnyblbLE+x,oE4ALJ<JCS^zCj7#iKHEB[-2->w+>L?3D>0rmsLVH&V=l7j$k' );

define( 'NONCE_SALT',       '|lz&|3 %*0zaV}zzF7&QdR6GgwWvx4}N@]A$H-:AJ_azI.hC}r7SF>@lZ]+^slXP' );


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

