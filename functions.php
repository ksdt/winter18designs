<?php
/**
 * winter18redesign functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package winter18redesign
 */

if ( ! function_exists( 'winter18redesign_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function winter18redesign_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on winter18redesign, use a find and replace
		 * to change 'winter18redesign' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'winter18redesign', get_template_directory() . '/languages' );

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
		 * Use a custom ksdt logo in the header
		 */
		add_theme_support( 'custom-logo' );
		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
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
		add_theme_support( 'custom-background', apply_filters( 'winter18redesign_custom_background_args', array(
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
add_action( 'after_setup_theme', 'winter18redesign_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function winter18redesign_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'winter18redesign_content_width', 640 );
}
add_action( 'after_setup_theme', 'winter18redesign_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function winter18redesign_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'winter18redesign' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'winter18redesign' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'winter18redesign_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function winter18redesign_scripts() {
	wp_enqueue_style( 'winter18redesign-style', get_stylesheet_uri() );
	wp_enqueue_style( 'winter18redesign-animsition', get_template_directory_uri() . '/css/animsition.min.css' );	
	wp_enqueue_style( 'winter18redesign-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'winter18redesign-flexslider', get_template_directory_uri() . '/css/flexslider.css' );	
	wp_enqueue_style( 'winter18redesign-font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_style( 'winter18redesign-owl-carousel', get_template_directory_uri() . '/css/owl.carousel.css' );
	wp_enqueue_style( 'winter18redesign-owl-theme', get_template_directory_uri() . '/css/owl.theme.css' );
	wp_enqueue_style( 'winter18redesign-owl-transitions', get_template_directory_uri() . '/css/owl.transitions.css' );

	wp_enqueue_style( 'winter18redesign-slick', get_template_directory_uri() . '/js/slick/slick.css' );
	wp_enqueue_style( 'winter18redesign-slick-theme', get_template_directory_uri() . '/js/slick/slick-theme.css' );


	/*JS scripts */
	wp_enqueue_script( 'winter18redesign-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'winter18redesign-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'winter18redesign-animated-headline', get_template_directory_uri() . '/js/animated-headline.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'winter18redesign-init', get_template_directory_uri() . '/js/init.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'winter18redesign-main', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );
	wp_enqueue_script( 'winter18redesign-menu', get_template_directory_uri() . '/js/menu.js', array(), '20151215', true );
	wp_enqueue_script( 'winter18redesign-owlCarousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '20151215', true );
	wp_enqueue_script( 'winter18redesign-smooth-scroll', get_template_directory_uri() . '/js/smooth-scroll.js', array(), '20151215', true );
	wp_enqueue_script( 'winter18redesign-slick-min', get_template_directory_uri('jquery') . '/js/slick/slick.min.js', array(), '20151215', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'winter18redesign_scripts' );

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
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

