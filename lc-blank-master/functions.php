<?php
/**
 * Functions and definitions.
 *
 * @link https://livecomposerplugin.com/themes/
 *
 * @package LC Blank
 */

// Delcare Header/Footer compatibility.
define( 'DS_LIVE_COMPOSER_HF', true );
define( 'DS_LIVE_COMPOSER_HF_AUTO', false );

// Content Width ( WP requires it and LC uses is to figure out the wrapper width ).
if ( ! isset( $content_width ) ) {
	$content_width = 1180;
}

if ( ! function_exists( 'lct_theme_setup' ) ) {

	/**
	 * Basic theme setup.
	 */
	function lct_theme_setup() {

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Enable Post Thumbnails ( Featured Image ).
		add_theme_support( 'post-thumbnails' );

		// Enable support for HTML5 markup.
		add_theme_support( 'html5', array( 'comment-list', 'search-form', 'comment-form' ) );

	}
} add_action( 'after_setup_theme', 'lct_theme_setup' );

/**
 * Load JS and CSS files.
 */
function lct_load_scripts() {

	wp_enqueue_style( 'lct-base-style', get_stylesheet_uri(), array(), '1.0' );
	wp_enqueue_script( 'jquery' );

} add_action( 'wp_enqueue_scripts', 'lct_load_scripts' );

if ( ! defined( 'DS_LIVE_COMPOSER_VER' ) ) {

	/**
	 * Admin Notice
	 */
	function lct_notification() {
	?>
		<div class="error">
			<p><?php printf( __( '%sLive Composer%s plugin is %srequired%s and has to be active for this theme to function.', 'lc-blank' ), '<a target="_blank" href="https://wordpress.org/plugins/live-composer-page-builder/">', '</a>', '<strong>', '</strong>' ); ?></p>
		</div>
	<?php }
	add_action( 'admin_notices', 'lct_notification' );
}


add_action( 'wp_enqueue_scripts', 'masfecapital_style' );
function masfecapital_style(){
	wp_enqueue_style(
	    'animate', get_theme_file_uri( 'assets/css/animate.css' )
	);

	wp_enqueue_style(
	    'bootstrap.min', get_theme_file_uri( 'assets/css/bootstrap.min.css' )
	);
	
	wp_enqueue_style(
	    'main', get_theme_file_uri( 'assets/css/main.css' )
	);
}



add_action( 'wp_enqueue_scripts', 'masfecapital_script' );
function masfecapital_script(){
	wp_enqueue_script(
        'jquery',
        get_theme_file_uri( 'assets/js/jquery.js' ),
        array(),
        '3.3.1'
    );

    wp_enqueue_script(
        'scroll',
        get_theme_file_uri( 'assets/js/scroll.js' ),
        array('jquery'),
        '1.0'
    );

    wp_enqueue_script(
        'bootstrap.min',
        get_theme_file_uri( 'assets/js/bootstrap.min.js' ),
        array('jquery'),
        '4.0.0'
    );

    wp_enqueue_script(
        'parallax-scene',
        get_theme_file_uri( 'assets/js/parallax.min.js' ),
        array('jquery'),
        '3.1.0'
    );

    wp_enqueue_script(
        'main',
        get_theme_file_uri( 'assets/js/main.js' ),
        array('jquery'),
        '1.0'
    );
}


