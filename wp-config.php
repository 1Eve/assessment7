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
define( 'DB_NAME', 'assessment7' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'UAfDw]67VI?u;,&^ox{&8kW3W9MU]Iom9hoR~nd5r3;ZK[_OL/P6rFsg5a2Q29T2' );
define( 'SECURE_AUTH_KEY',  '8s.cL`.2[$PU`3,ho,4F^E&Z;j<+jD!-sd{eraW<Ft/nh~$dx187/Q`&G4Sna;Wx' );
define( 'LOGGED_IN_KEY',    'V7]o{m|@#yW{NgKwC$@+V$`3r)>t/^Hx80[Ag063vTck1&uA/3G89GGYuW$m-g>3' );
define( 'NONCE_KEY',        '^3q,3Yq.U=u/?6Y:+p]L?FTT)0.98hz|y6|V{D=_/4It/ML,s|t.rl$_.#5@XTbP' );
define( 'AUTH_SALT',        'Tqy|D>*`,uodG@*?poA7%wII7^#d-3>LZlu_BM^%N{Yvu$ jl~beW]jk*39>x[Jx' );
define( 'SECURE_AUTH_SALT', 'h&~&kp#:uIjjOZV{kRwWOW^*!@YvZYSlbqs[%SjH5J8zo>11a>/nToFR>q4 ]m4<' );
define( 'LOGGED_IN_SALT',   '(,MjU?Xp`)#a$>69(GOR4)p;RgDJeF1<8<@@sK^lzuR45o0D!5G 4A(UY1F?nkE;' );
define( 'NONCE_SALT',       'z0xGJoY(:dU#[*/X!UGKs|1@t:onBQG$6a(. /+rxmVWv%Ir%m%SG)/_R7f.*h2V' );

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
