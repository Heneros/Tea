<?php
/**
 * tea functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tea
 */

if ( ! function_exists( 'tea_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function tea_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on tea, use a find and replace
		 * to change 'tea' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'tea', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'tea' )
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'tea_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

	}
endif;
add_action( 'after_setup_theme', 'tea_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tea_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'tea_content_width', 640 );
}

add_action( 'after_setup_theme', 'tea_content_width', 0 );
/* Init qoob libs */
add_filter( 'qoob_libs', 'tea_add_theme_lib', 10, 2 );
if ( ! function_exists( 'tea_add_theme_lib' ) ) {
  /**
   * Adding lib in qoob libs
   *
   * @param array $qoob_libs Array with url to qoob lib.
   */
  function tea_add_theme_lib( $qoob_libs ) {
    array_push( $qoob_libs, get_template_directory() . '/blocks/lib.json' );
    return $qoob_libs;
  }
}

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tea_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'tea' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'tea' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		register_sidebar( array(
		'name'          => esc_html__( 'Footer sidebar', 'tea' ),
		'id'            => 'sidebar-footer',
		'description'   => esc_html__( 'Footer area.', 'tea' ),
		'before_widget' => '<div id="%1$s" class="col-lg-12 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}

add_action( 'widgets_init', 'tea_widgets_init' );
 /**
 * Enqueue scripts and styles.
 */
function tea_scripts() {
	wp_enqueue_style( 'tea-style', get_template_directory_uri());
	wp_enqueue_style( 'main-style', get_stylesheet_directory_uri(). '/css/style.css', array("tea-style", 'bootstrap'));
	wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri(). '/css/bootstrap.min.css', array("tea-style") );
	wp_enqueue_style( 'owl-carousel', get_stylesheet_directory_uri(). '/css/owl.carousel.css', array("tea-style") );
	wp_enqueue_style( 'owl-carousel-default', get_stylesheet_directory_uri(). '/css/owl.theme.default.css', array("tea-style") );
  wp_enqueue_style( 'magnific-popup', get_stylesheet_directory_uri(). '/css/magnific-popup.css', array("tea-style") );
  wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri(). '/css/font-awesome.min.css', array("tea-style") );

	wp_enqueue_script( 'tea-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'tea-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

 	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
 	wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'magnific-popup-js', get_template_directory_uri() . '/js/jquery.magnific-popup.js', array('jquery'), '', true );
	wp_enqueue_script( 'tea-main-js', get_template_directory_uri() . '/js/main.js', array(''), '', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'tea_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
/**
 * Init TGM class
 */
require get_template_directory() . '/inc/init-tgm.php';

/*
* Theme options
*/
require get_template_directory() . '/inc/theme-options.php';

require get_template_directory() . '/inc/tea-navwalker.php';
/**
 * Load Jetpack compatibility file.
 */
	require get_template_directory() . '/inc/jetpack.php';
