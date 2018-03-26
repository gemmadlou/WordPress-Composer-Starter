<?php
/**
 * WordPress Config file
 */


/**
 * Database name
 */
define('DB_NAME', 'wordpress');

/**
 * Database user
 */
define('DB_USER', 'root');

/**
 * Database user password
 */
define('DB_PASSWORD', 'root');

/**
 * Database host
 */
define('DB_HOST', 'localhost');

/**
 * WordPress DB Charset (is setup this way when the tables are made)
 */
define( 'DB_CHARSET', 'utf8' );

/**
 * WordPress DB Collation (is setup this way when the tables are made)
 */
define( 'DB_COLLATE', 'utf8_general_ci' );

/**
 * WordPress home URL (for the front-of-site)
 */
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '');

/**
 * WordPress site URL (which is for the admin)
 */
define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress');

/**
 * WordPress content directory
 */
define('WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content');

/**
 * WordPress plugins directory
 */
define('WP_PLUGIN_DIR', dirname(__FILE__) . '/wp-content/plugins');

/**
 * Controls the error reporting. When true, it sets the error reporting level
 * to E_ALL. 
 */
define( 'WP_DEBUG', true );

/**
 * If error logging is enabled, this determines whether the error
 * is logged or not in the debug.log file inside /wp-content.
 */
define( 'WP_DEBUG_LOG', true );

/**
 * If error logging is enabled, this determines whether the error is
 * shown on the site (in-browser)
 */
define( 'WP_DEBUG_DISPLAY', true );

/**
 * This disables live edits of theme and plugin files on the WordPress
 * administration area. It also prevents users from adding, 
 * updating and deleting themes and plugins.
 */
define( 'DISALLOW_FILE_MODS', true );

/**
 * Prevents WordPress core updates, as this is controlled through
 * Composer.
 */
define( 'WP_AUTO_UPDATE_CORE', false );

/**
 * WordPress table prefix
 */
$table_prefix = 'wp_';


/* Authentication Unique Keys and Salts. */
/* https://api.wordpress.org/secret-key/1.1/salt/ */
define('AUTH_KEY',         'wIn%@e9$=Bd~|XhJmBwN@9O@h[XdfxrUB%nlZ+-:YBzX!]9F2yfa`u]<EBo(zpI+');
define('SECURE_AUTH_KEY',  'X#H:7!A[6Z-L~X>>*edJ;lfSbbN`ac?N-OpXD.Xo8)n/(`<;d&~q Q?naQ=W_9Q*');
define('LOGGED_IN_KEY',    'y.$s|J%|js$2VWMK7I@wmvLVr8G6ZSF{xX2&6j`^7Os^PF1?>bGN$Ek<Hk!ds5jQ');
define('NONCE_KEY',        'X4RB*VCRp|`CdY|X=q7gl0(WBtH9ZT|#C#+j[0/c|I[Cyv[>gU+HYv]rzFWr{A6 ');
define('AUTH_SALT',        '!$PLxI_QBo-+UY3fz<YajT4v{/45+TRz]h#)*;0578w;)S9K:vE0jaR0eEZY5A96');
define('SECURE_AUTH_SALT', 'pHrah=@R9!Z@%{)@99Kh=Do5FBU}AO-wsr:5e[W7=^#MFfPs[18:v6XGNl+|;WB;');
define('LOGGED_IN_SALT',   '3AbG|77,)zo6>K_|0|O3@-,FlK*,+|bVXi~(`bYH?a5D~4kYB6UA)M<l+Z/7-gS@');
define('NONCE_SALT',       'x_=.6xZ>%[lu?aK $-@i}CvYDAm%0,GD:Ml!cH6K+ZQgr)<77L6D>Pc_G88+@=uU');


/* Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/public');

/* Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');