<?php
/**
 * starter-theme-sass functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package starter-theme-sass
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function starter_theme_sass_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on starter-theme-sass, use a find and replace
		* to change 'starter-theme-sass' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'starter-theme-sass', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'starter-theme-sass' ),
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
			'starter_theme_sass_custom_background_args',
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
add_action( 'after_setup_theme', 'starter_theme_sass_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function starter_theme_sass_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'starter_theme_sass_content_width', 640 );
}
add_action( 'after_setup_theme', 'starter_theme_sass_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function starter_theme_sass_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'starter-theme-sass' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'starter-theme-sass' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'starter_theme_sass_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function starter_theme_sass_scripts() {
	wp_enqueue_style( 'starter-theme-sass-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'starter-theme-sass-style', 'rtl', 'replace' );

	wp_enqueue_script( 'starter-theme-sass-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'starter_theme_sass_scripts' );

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

/* Footer Customiser */
function footer_customize_register($wp_customize) {
    // Add a Section for Footer
    $wp_customize->add_section('footer_section', array(
        'title'      => __('Footer Settings', 'your-theme-textdomain'),
        'priority'   => 120,
    ));

    // Add Setting & Control for Company Name
    $wp_customize->add_setting('footer_company_name', array(
        'default'           => 'Default Company Name',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('footer_company_name_control', array(
        'label'    => __('Company Name', 'your-theme-textdomain'),
        'section'  => 'footer_section',
        'settings' => 'footer_company_name',
        'type'     => 'text',
    ));

    // Add Setting & Control for Address Line 1
    $wp_customize->add_setting('footer_address_line1', array(
        'default'           => 'Default Address Line 1',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('footer_address_line1_control', array(
        'label'    => __('Address Line 1', 'your-theme-textdomain'),
        'section'  => 'footer_section',
        'settings' => 'footer_address_line1',
        'type'     => 'text',
    ));

    // Add Setting & Control for Address Line 2
    $wp_customize->add_setting('footer_address_line2', array(
        'default'           => 'Default Address Line 2',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('footer_address_line2_control', array(
        'label'    => __('Address Line 2', 'your-theme-textdomain'),
        'section'  => 'footer_section',
        'settings' => 'footer_address_line2',
        'type'     => 'text',
    ));

    // Add Setting & Control for Phone
    $wp_customize->add_setting('footer_phone', array(
        'default'           => '(123) 456-7890',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('footer_phone_control', array(
        'label'    => __('Phone', 'your-theme-textdomain'),
        'section'  => 'footer_section',
        'settings' => 'footer_phone',
        'type'     => 'text',
    ));

    // Add Setting & Control for Email
    $wp_customize->add_setting('footer_email', array(
        'default'           => 'info@company.com',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('footer_email_control', array(
        'label'    => __('Email', 'your-theme-textdomain'),
        'section'  => 'footer_section',
        'settings' => 'footer_email',
        'type'     => 'email',
    ));
}
add_action('customize_register', 'footer_customize_register');


function register_footer_menu() {
    register_nav_menu('footer-menu', __('Footer Menu', 'your-theme-textdomain'));
}
add_action('init', 'register_footer_menu');
