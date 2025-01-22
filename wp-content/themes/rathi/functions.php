<?php
/**
 * Rathi functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Rathi
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
function rathi_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Rathi, use a find and replace
		* to change 'rathi' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'rathi', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'rathi' ),
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
			'rathi_custom_background_args',
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
add_action( 'after_setup_theme', 'rathi_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function rathi_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'rathi_content_width', 640 );
}
add_action( 'after_setup_theme', 'rathi_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function rathi_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'rathi' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'rathi' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'rathi_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function rathi_scripts() {

	wp_enqueue_style( 'rathi-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'rathi-style', 'rtl', 'replace' );
	wp_enqueue_style( 'rathi-slick-theme', get_theme_file_uri() . '/assets/css/slick-theme.css' );
	wp_enqueue_style( 'rathi-slick', get_theme_file_uri() . '/assets/css/slick.css' );
	wp_enqueue_style( 'rathi-swiper', get_theme_file_uri() . '/assets/css/swiper-bundle.min.css' );
	wp_enqueue_style( 'rathi-animate', get_theme_file_uri() . '/assets/css/animate.min.css' );
	wp_enqueue_style( 'rathi-style-f', get_theme_file_uri() . '/assets/css/style-f.css' );  
	wp_enqueue_style( 'rathi-style-u', get_theme_file_uri() . '/assets/css/style-u.css' ); 



	
	wp_enqueue_script('jquery');
    // wp_enqueue_script( 'jquery.min', get_theme_file_uri() . '/assets/js/jquery.min.js' );
	wp_enqueue_script( 'rathi-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'wow.min', get_theme_file_uri() . '/assets/js/wow.min.js',  array('jquery'), '', true );
    wp_enqueue_script( 'ScrollTrigger', get_theme_file_uri() . '/assets/js/ScrollTrigger.min.js',  array('jquery'), '', true );
    wp_enqueue_script( 'slick', get_theme_file_uri() . '/assets/js/slick.min.js',  array('jquery'), '', true );
    wp_enqueue_script( 'swiper', get_theme_file_uri() . '/assets/js/swiper-bundle.min.js',  array('jquery'), '', true );
    wp_enqueue_script( 'custom', get_theme_file_uri() . '/assets/js/custom.js');
    wp_enqueue_script( 'mousemove', get_theme_file_uri() . '/assets/js/mousemove.js');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'rathi_scripts' );








//  classis editor for widget footer

function example_theme_support() {
    remove_theme_support( 'widgets-block-editor' );
}
add_action( 'after_setup_theme', 'example_theme_support' );


// footer widgets adding new wigets in wordpress deshbord

function my_custom_footer_widgets() {
	register_sidebar( array(
        'name'          => __( 'Footer Column 0', 'text_domain' ),
        'id'            => 'footer-0',
        'description'   => __( 'Widgets in this area will be shown in the second column of the footer.', 'text_domain' ),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer-widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Column 1', 'text_domain' ),
        'id'            => 'footer-1',
        'description'   => __( 'Widgets in this area will be shown in the first column of the footer.', 'text_domain' ),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer-widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Column 2', 'text_domain' ),
        'id'            => 'footer-2',
        'description'   => __( 'Widgets in this area will be shown in the second column of the footer.', 'text_domain' ),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer-widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Column 3', 'text_domain' ),
        'id'            => 'footer-3',
        'description'   => __( 'Widgets in this area will be shown in the third column of the footer.', 'text_domain' ),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer-widget-title">',
        'after_title'   => '</h3>',
    ) );

	register_sidebar( array(
        'name'          => __( 'Footer Column 4', 'text_domain' ),
        'id'            => 'footer-4',
        'description'   => __( 'Widgets in this area will be shown in the third column of the footer.', 'text_domain' ),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer-widget-title">',
        'after_title'   => '</h3>',
    ) );

	register_sidebar( array(
        'name'          => __( 'Footer Column 5', 'text_domain' ),
        'id'            => 'footer-5',
        'description'   => __( 'Widgets in this area will be shown in the third column of the footer.', 'text_domain' ),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer-widget-title">',
        'after_title'   => '</h3>',
    ) );

	register_sidebar( array(
        'name'          => __( 'Footer Column 6', 'text_domain' ),
        'id'            => 'footer-6',
        'description'   => __( 'Widgets in this area will be shown in the third column of the footer.', 'text_domain' ),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer-widget-title">',
        'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
        'name'          => __( 'Footer Column 7', 'text_domain' ),
        'id'            => 'footer-7',
        'description'   => __( 'Widgets in this area will be shown in the third column of the footer.', 'text_domain' ),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer-widget-title">',
        'after_title'   => '</h3>',
	) );

	
}
add_action( 'widgets_init', 'my_custom_footer_widgets' );




// prduct catagory name
// Shortcode to display WooCommerce product categories with assigned products only
function display_product_categories_with_products() {
    $categories = get_terms( array(
        'taxonomy'   => 'product_cat',
        'hide_empty' => true,  // Set to true to only show categories with products
    ));

    if ( !empty( $categories ) && !is_wp_error( $categories ) ) {
        $output = '<ul>';
        foreach ( $categories as $category ) {
            $output .= '<li>' . esc_html( $category->name ) . '</li>';
        }
        $output .= '</ul>';
        return $output;
    } else {
        return 'No categories with products found';
    }
}
add_shortcode( 'categories_with_products', 'display_product_categories_with_products' );




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

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}


function custom_theme_menus() {
    register_nav_menus(array(
        'menu1' => 'Menu 1 (Left)',
        'menu2' => 'Menu 2 (Right)',
        'mobile_menu' => 'Mobile Menu',
    ));
}
add_action('init', 'custom_theme_menus');





//woocommerce 

// Start Remove sidebar widget from cart page 
add_action('template_redirect', 'disable_sidebar_on_specific_pages');
function disable_sidebar_on_specific_pages() {
    if (is_cart() || is_checkout() || is_account_page()) {
        remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
        // Disable sidebar rendering in custom themes
        add_filter('is_active_sidebar', '__return_false', 10, 2);
    }
}


/*************************************************************************** custom Hook ****************************************************************************************************/

/* plus-minus */

add_action( 'woocommerce_before_quantity_input_field', 'custom_display_quantity_minus' );
function custom_display_quantity_minus() {
    echo '<button type="button" class="minus">-</button>';
}

add_action( 'woocommerce_after_quantity_input_field', 'custom_display_quantity_plus' );
function custom_display_quantity_plus() {
    echo '<button type="button" class="plus">+</button>';
}



/* Wishlist */

function woocommerce_show_product_thumbnails() {
	echo do_shortcode('[yith_wcwl_add_to_wishlist]');
}
add_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_thumbnails', 20 );



/* Variable Product price */
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );

function woocommerce_template_single_price() {
    global $product;

    if ( $product->is_type( 'variable' ) ) {
        // Handle variable product price
        $default_attributes = $product->get_default_attributes();
        $variations = $product->get_available_variations();
        $default_price = '';

        // Find the default variation's price
        foreach ( $variations as $variation ) {
            $variation_id = $variation['variation_id'];
            $match = true;

            foreach ( $default_attributes as $key => $value ) {
                $attribute_key = 'attribute_' . $key;
                if ( isset( $variation['attributes'][ $attribute_key ] ) && $variation['attributes'][ $attribute_key ] !== $value ) {
                    $match = false;
                    break;
                }
            }

            if ( $match ) {
                $default_price = $variation['price_html'];
                break;
            }
        }

        // Display the price for variable product
        echo '<p class="default-variation-price">';
        echo ! empty( $default_price ) ? $default_price : $product->get_price_html();
        echo '</p>';
        
    } elseif ( $product->is_type( 'simple' ) ) {
        // Handle simple product price
        echo '<p class="simple-product-price">';
        echo $product->get_price_html();
        echo '</p>';
    }
}


add_filter('woocommerce_return_to_shop_redirect', 'custom_empty_cart_redirect');

function custom_empty_cart_redirect() {
    return home_url(); // Redirects to homepage
}

/* Recipe Popup Ajex */

add_action('wp_ajax_recipe_popup', 'recipe_popup');
add_action('wp_ajax_nopriv_recipe_popup', 'recipe_popup');

function recipe_popup() {
    // Validate post ID and category slug
    $post_id = isset($_POST['post_id']) ? intval($_POST['post_id']) : 0;
    $category_slug = isset($_POST['category_slug']) ? sanitize_text_field($_POST['category_slug']) : '';

    if (!$post_id || empty($category_slug)) {
        wp_send_json_error(['message' => 'Invalid request parameters.']);
    }

    // Fetch post content
    $post = get_post($post_id);
    if (!$post) {
        wp_send_json_error(['message' => 'Post not found.']);
    }
    
    $post_title = get_the_title($post_id);
    $information = apply_filters('the_content', $post->post_content);
    $category = get_term_by('slug', $category_slug, 'recipe-category');
    $feature_image = $category ? get_the_post_thumbnail_url($post_id, 'full') : '';


    // Fallback for missing feature image
    if (!$feature_image) {
        $feature_image = get_template_directory_uri() . '/assets/images/default.png';
    }

    // Return the response
    wp_send_json_success([
         'post_title' => $post_title,
        'information' => $information,
        'feature_image' => $feature_image,
    ]);

    wp_die();
}





// Quote page banner shortcode



function custom_banner_shortcode() {
    // Get the field values
    $desktop_image = get_field('desktop_image');
    $tablet_image = get_field('tablet_image');
    $mobile_image = get_field('mobile_image');
    $banner_head = get_field('banner_title');
    $banner_subhead = get_field('sub_text');

    // Check if at least one field is not empty
    if (!is_search() && ($desktop_image || $tablet_image || $mobile_image || $banner_head)) {
        ob_start(); // Start output buffering
        ?>
        <section class="banner-sec about-banner combo-banner">
            <div class="home-banner">
                <?php if ($desktop_image): ?>
                    <img src="<?php echo esc_url($desktop_image); ?>" class="desktop-img">
                <?php endif; ?>
                <?php if ($tablet_image): ?>
                    <img src="<?php echo esc_url($tablet_image); ?>" class="tablet-img">
                <?php endif; ?>
                <?php if ($mobile_image): ?>
                    <img src="<?php echo esc_url($mobile_image); ?>" class="mobile-img">
                <?php endif; ?>
            </div>
            <div class="banner-h1">
                <?php if ($banner_head): ?>
                    <h1><?php echo esc_html($banner_head); ?></h1>
                <?php endif; ?>
                <?php if ($banner_subhead): ?>
                    <p><?php echo esc_html($banner_subhead); ?></p>
                <?php endif; ?>
            </div>
        </section>
        <?php
        return ob_get_clean(); // Return the buffered content
    }
    return ''; // Return an empty string if conditions are not met
}
add_shortcode('custom_banner', 'custom_banner_shortcode');
