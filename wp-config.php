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
define( 'DB_NAME', 's700f_47646jbh' );

/** MySQL database username */
define( 'DB_USER', 's700f_478k6667' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Hondasu3_Hondasu3' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql29.conoha.ne.jp' );

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
define( 'AUTH_KEY',          '73`~9(`uVq4U~cUbsiM[:9uM),exkB7GeLlJ+m9[wjSAis.BB|3GKrvlj24x-!3w' );
define( 'SECURE_AUTH_KEY',   'mlZO[luz!-eQVO{jQYcjV=x_EqU,[dw=jNE}p]VBvfAiBw0<BO,v>)Z7&p@N+~AH' );
define( 'LOGGED_IN_KEY',     '^ifAG]kyK.xb Pn){ct3}PR5.fAs|X@sOjW ~$i<9-g(1axr_g2rfYJy(R/SW3z&' );
define( 'NONCE_KEY',         'lINrQOz95g*~~L~ebihrTWoNbo:!bjpz<$Y9l(U~,0K_9[_L]88N{;bwT4Qwi5WQ' );
define( 'AUTH_SALT',         'Fm#@mbCU:4iQYwQE`(bXIAOIJaN^1R~K2?[t$xE!gHMM*:k@[1*x-G`2K7a*l,Wk' );
define( 'SECURE_AUTH_SALT',  'XyTi*oE4L>jp,iY-$*^7G~xPAqV/LtP_C:Wgw#^fe#H0^Xb?I1p8VD>8~OA0w@o&' );
define( 'LOGGED_IN_SALT',    'Pn.Z%9$YjYPm/5td<7X0V/>O#rdzGe2  h(kL-#5?xfn0nHLF~viECwmodh-H#z9' );
define( 'NONCE_SALT',        'BywARqDuX+.njRtGM7]fB6]P{m(OviuE-E3!H)Rx)>p*FB,&~}l!ui)TQWUb?<hO' );
define( 'WP_CACHE_KEY_SALT', 'J(ar6w_iK{rf46N7ix<~YrU>*LETqOP0Aq9J.z!}Qf$GOzIwOe- {)VQjp|#?}Qm' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === "https") {
    $_SERVER['HTTPS'] = 'on';
    define('FORCE_SSL_LOGIN', true);
    define('FORCE_SSL_ADMIN', true);
}




define( 'CW_DASHBOARD_PLUGIN_SID', 'KD8eAVkcqzKJoABqW128upX2_AooYk1OOGnNzTrM1byGSVPJ88Bti3swlfbe8EoLzU9ItHTziwAGZl029YOJhF9zpl_DGiqKPaJAp0233T4.' );
define( 'CW_DASHBOARD_PLUGIN_DID', 'NlfpXuVEc9krcqrDokOt1rKUoqQvYy7RdufGREOSbwyjy9oKWKnmXXJX9N1gyw0XjAX8Fj_ymYUJgyo6rft15rgvUlQM94mv_7QBEPQ1GjI.' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
