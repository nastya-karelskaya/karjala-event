<?php
/**
 * karjala-event functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package karjala-event
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'karjala_event_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function karjala_event_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on karjala-event, use a find and replace
		 * to change 'karjala_event' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'karjala_event', get_template_directory() . '/languages' );

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
		 * Enable support for Post and Categories  Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		add_theme_support('category-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'По умолчанию', 'karjala_event' ),
				'menu-main-top' => esc_html__( 'Главная страница (заголовок)', 'karjala_event_main_top' ),
				'menu-main-bottom' => esc_html__( 'Главная страница (подвал)', 'karjala_event_main_bottom' ),
				'menu-common-top-left' => esc_html__( 'Общее слева (внутренние страницы)', 'karjala_event_common_top_left' ),
				'menu-common-top-right' => esc_html__( 'Общее справа (внутренние страницы)', 'karjala_event_common_top_right' ),
				'menu-aside' => esc_html__( 'Боковое меню (стр. Корпоративы)', 'karjala_event_aside' ),
				'menu-mobile' => esc_html__( 'Мобильное меню', 'karjala_event_mobile' ),
			)
		);



		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'karjala_event_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'karjala_event_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function karjala_event_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'karjala_event_content_width', 640 );
}
add_action( 'after_setup_theme', 'karjala_event_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function karjala_event_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Боковое меню блога', 'karjala_event_sidebar' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'karjala_event_sidebar' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="mkdf-st-title">',
			'after_title'   => '</h4>',
		)
	);

	register_sidebar( array(
		'name'          => 'Подвал блок с лого',
		'id'            => 'footer-logo',
		'before_widget' => '<div class="widget mkdf-blog-list-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer-widget-title mt-sm-20 mb-sm-10">',
		'after_title'   => '</h4>',
	) );

	// register_sidebar( array(
	// 	'name'          => 'Подвал блок с описанием сайта',
	// 	'id'            => 'footer-descr',
	// 	'before_widget' => '<div class="widget mkdf-blog-list-widget">',
	// 	'after_widget'  => '</div>',
	// 	'before_title'  => '<h4 class="footer-widget-title mt-sm-20 mb-sm-10">',
	// 	'after_title'   => '</h4>',
	// ) );


	register_sidebar( array(
		'name'          => 'Подвал меню-блок левый',
		'id'            => 'footer-left',
		'before_widget' => '<div class="widget mkdf-blog-list-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="mkdf-widget-title-holder">
		<h4 class="mkdf-widget-title">',
		'after_title'   => '</h4></div>',
	) );

	

	register_sidebar( array(
		'name'          => 'Подвал меню-блок центр',
		'id'            => 'footer-center',
		'before_widget' => '<div class="widget mkdf-blog-list-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="mkdf-widget-title-holder">
		<h4 class="mkdf-widget-title">',
		'after_title'   => '</h4></div>',
	) );

	register_sidebar( array(
		'name'          => 'Подвал меню-блок правый',
		'id'            => 'footer-right',
		'before_widget' => '<div class="widget mkdf-blog-list-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="mkdf-widget-title-holder">
		<h4 class="mkdf-widget-title">',
		'after_title'   => '</h4></div>',
	) );
}
add_action( 'widgets_init', 'karjala_event_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function karjala_event_scripts() {



	wp_enqueue_style( 'karjala_event-font', 'https://fonts.googleapis.com/css?family=Oswald%3A300%2C400%2C400i%2C600%7CCrimson+Text%3A300%2C400%2C400i%2C600&#038;subset=latin-ext&#038;', array(), _S_VERSION );

	// wp_enqueue_style( 'karjala_event-font', 'https://fonts.googleapis.com/css?family=Oswald%3A300%2C400%2C400i%2C600%7CMuli%3A300%2C400%2C400i%2C600%7CCrimson+Text%3A300%2C400%2C400i%2C600&#038;subset=latin-ext&#038;', array(), _S_VERSION );

	wp_enqueue_style( 'karjala_event-slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), _S_VERSION );

	wp_enqueue_style( 'karjala_event-animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', array(), _S_VERSION );


	if( !is_home() && !is_front_page() ) {
		wp_enqueue_style( 'karjala_event-part1', get_template_directory_uri() . '/css/part1.css', array(), _S_VERSION );
	}

	
		wp_enqueue_style( 'karjala_event-part2', get_template_directory_uri() . '/css/part2.css', array(), _S_VERSION );
	
	

	wp_enqueue_style( 'karjala_event-common', get_template_directory_uri() . '/css/common.css', array(), _S_VERSION );

	if( is_archive() || is_tag() || is_category() ) {
		wp_enqueue_style( 'karjala_event-archive', get_template_directory_uri() . '/css/archive.css', array(), _S_VERSION );

	}

	if( is_single() ) {
		wp_enqueue_style( 'karjala_event-single', get_template_directory_uri() . '/css/post.css', array(), _S_VERSION );

	}

	if( is_search() ) {
		wp_enqueue_style( 'karjala_event-search', get_template_directory_uri() . '/css/search.css', array(), _S_VERSION );

	}

	if( is_page('Политика конфиденциальности') || is_privacy_policy() ) {
		wp_enqueue_style( 'karjala_event-privacy', get_template_directory_uri() . '/css/privacy.css', array(), _S_VERSION );

	}

	if( is_page('Блог') || is_home() ) {
		wp_enqueue_style( 'karjala_event-blog', get_template_directory_uri() . '/css/blog.css', array(), _S_VERSION );

	}


	if( is_page('Корпоративы') || is_page_template('corporates.php') ) {
		wp_enqueue_style( 'karjala_event-corporate', get_template_directory_uri() . '/css/corporate.css', array(), _S_VERSION );

	}

	if( is_page('Магазин') || is_page_template('shop.php') ) {
		wp_enqueue_style( 'karjala_event-shop', get_template_directory_uri() . '/css/shop.css', array(), _S_VERSION );

	}

	if( is_page('Свадьбы') || is_page_template('marriage.php')  ) {
		wp_enqueue_style( 'karjala_event-marriage', get_template_directory_uri() . '/css/marriage.css', array(), _S_VERSION );

	}

	if( is_page('Походы') || is_page('Праздники') || is_page_template('celebrations.php') || is_page_template('trips.php') ) {
		wp_enqueue_style( 'karjala_event-trips', get_template_directory_uri() . '/css/trips.css', array(), _S_VERSION );
	}

	if( is_page('Праздники') || is_page_template('celebrations.php') ) {
		wp_enqueue_style( 'karjala_event-celebrations', get_template_directory_uri() . '/css/celebrations.css', array(), _S_VERSION );
	}

	if( is_page('Карта сайта') || is_page_template('map.php') ) {
		wp_enqueue_style( 'karjala_event-map', get_template_directory_uri() . '/css/map.css', array(), _S_VERSION );
	}
	

	if( is_404() ) {
		wp_enqueue_style( 'karjala_event-404', get_template_directory_uri() . '/css/404.css', array(), _S_VERSION );
	}
	

	if( is_home() || is_front_page() ) {
		wp_enqueue_style( 'karjala_event-index', get_template_directory_uri() . '/css/index.css', array(), _S_VERSION );
	}

	wp_enqueue_style( 'karjala_event-overwrite', get_template_directory_uri() . '/style.css', array(), _S_VERSION );

	wp_style_add_data( 'karjala_event-style', 'rtl', 'replace' );




	/**** scripts */
	
	
	wp_enqueue_script('karjala_event-jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', null, null, true);

	wp_enqueue_script('karjala_event-isotope', get_template_directory_uri() . '/js/isotope.pkgd.min.js', null, null, true);
	

	wp_enqueue_script('karjala_event-slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', null, null, true);

	wp_enqueue_script('karjala_event-custom-scripts', get_template_directory_uri() . '/js/custom.js', null, null, true);



	wp_enqueue_script( 'karjala_event-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	//CLOSE COMMENTS
	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
}
add_action( 'wp_enqueue_scripts', 'karjala_event_scripts' );

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

