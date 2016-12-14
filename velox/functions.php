<?php
/**
 * velox functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package velox
 */
if (!function_exists('velox_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function velox_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on velox, use a find and replace
         * to change 'velox' to the name of your theme in all the template files.
         */
        load_theme_textdomain('velox', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'primary' => esc_html__('Primary Menu', 'velox'),
            'Secondary' => esc_html__('Footer Menu', 'velox'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        /*
         * Enable support for Post Formats.
         * See https://developer.wordpress.org/themes/functionality/post-formats/
         */
        add_theme_support('post-formats', array(
            'aside',
            'image',
            'video',
            'quote',
            'link',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('velox_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));
    }
endif; // velox_setup
add_action('after_setup_theme', 'velox_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function velox_content_width()
{
    $GLOBALS['content_width'] = apply_filters('velox_content_width', 640);
}

add_action('after_setup_theme', 'velox_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
 

function velox_widgets_init()
{

    /** logo function add in theme ***/
	
/* remove logo customizer setting because of upload ;

    function themeslug_theme_customizer( $wp_customize ) {
        // Fun code will go here
        $wp_customize->add_section( 'themeslug_logo_section' , array(
            'title'       => __( 'Logo', 'themeslug' ),
            'priority'    => 30,
        ) );

        $wp_customize->add_setting( 'themeslug_logo' );

        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
            'label'    => __( 'Logo', 'themeslug' ),
            'section'  => 'themeslug_logo_section',
            'settings' => 'themeslug_logo',
        ) ) );

    }
    add_action( 'customize_register', 'themeslug_theme_customizer' );

*/




    /* Adding Top Header Custom sidebar For Contact INFO & SOCIAL Links Start*/

    register_sidebar(array(
        'name' => esc_html__('Header Top', 'velox'),
        'id' => 'header-top',
        'description' => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));


    /* Adding Top Header Custom sidebar For Contact INFO & SOCIAL Links End */

    /* slider widget area add */

    register_sidebar(array(
        'name' => esc_html__('SLider Area', 'velox'),
        'id' => 'slider-area',
        'description' => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));


    /* adding custome sidebar for footer start */

    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'velox'),
        'id' => 'sidebar-1',
        'description' => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Sidebar Left', 'velox'),
        'id' => 'sidebar-left',
        'description' => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    /*      footer #1            */

    register_sidebar(array(
        'name' => esc_html__('Footer #1', 'velox'),
        'id' => 'ft-sidebar-1',
        'description' => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    /*      footer #2            */

    register_sidebar(array(
        'name' => esc_html__('Footer #2', 'velox'),
        'id' => 'ft-sidebar-2',
        'description' => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    /*      footer #3            */

    register_sidebar(array(
        'name' => esc_html__('Footer #3', 'velox'),
        'id' => 'ft-sidebar-3',
        'description' => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    /*      footer #4            */

    register_sidebar(array(
        'name' => esc_html__('Footer #4', 'velox'),
        'id' => 'ft-sidebar-4',
        'description' => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    /*      copyright            */

    register_sidebar(array(
        'name' => esc_html__('CopyRight', 'velox'),
        'id' => 'cp-sidebar-1',
        'description' => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));


    register_sidebar(array(
        'name' => esc_html__('CopyRight', 'velox'),
        'id' => 'cp-sidebar-2',
        'description' => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

}
    add_action('widgets_init', 'velox_widgets_init');


    /* adding custome sidebar for footer END */

/**
 * Enqueue scripts and styles.
 */
function velox_scripts()
{
    /**
     * Enqueue scripts and styles.
     */

    wp_enqueue_style('velox-style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css');
    // wp_enqueue_style( 'theme_css', get_template_directory_uri() . '/css/theme.css');
    wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js');
    wp_enqueue_script('velox-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true);
    wp_enqueue_script('velox-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'velox_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


// Register Custom Navigation Walker
require_once ('wp_bootstrap_navwalker.php');


/********************* practise for custom post type making  ***************************/

/** person post type */
// Register Custom Post Type
/*comment due to wordpress org upload error;
function person_post_type() {

    $labels = array(
        'name'                  => _x( 'Post Types', 'Post Type General Name', 'velox' ),
        'singular_name'         => _x( 'Post Type', 'Post Type Singular Name', 'velox' ),
        'menu_name'             => __( 'Persons', 'velox' ),
        'name_admin_bar'        => __( 'Persons', 'velox' ),
        'archives'              => __( 'Person Archives', 'velox' ),
        'parent_item_colon'     => __( 'Parent Person:', 'velox' ),
        'all_items'             => __( 'All Persons', 'velox' ),
        'add_new_item'          => __( 'Add New Person', 'velox' ),
        'add_new'               => __( 'Add Person', 'velox' ),
        'new_item'              => __( 'New Person', 'velox' ),
        'edit_item'             => __( 'Edit Person', 'velox' ),
        'update_item'           => __( 'Update Person', 'velox' ),
        'view_item'             => __( 'View Person', 'velox' ),
        'search_items'          => __( 'Search Person', 'velox' ),
        'not_found'             => __( 'Not found', 'velox' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'velox' ),
        'featured_image'        => __( 'Featured Image', 'velox' ),
        'set_featured_image'    => __( 'Set featured image', 'velox' ),
        'remove_featured_image' => __( 'Remove featured image', 'velox' ),
        'use_featured_image'    => __( 'Use as featured image', 'velox' ),
        'insert_into_item'      => __( 'Insert into item', 'velox' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'velox' ),
        'items_list'            => __( 'Items Person', 'velox' ),
        'items_list_navigation' => __( 'Persons list navigation', 'velox' ),
        'filter_items_list'     => __( 'Filter Persons list', 'velox' ),
    );
    $args = array(
        'label'                 => __( 'Post Type', 'velox' ),
        'description'           => __( 'Post Type Description', 'velox' ),
        'labels'                => $labels,
        'supports'              => array('title','editor' ,'excerpt', 'thumbnail', ),
        'taxonomies'            => array( 'person_catogries' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'person', $args );

}
add_action( 'init', 'person_post_type', 0 );*/



// Register Custom Taxonomy
/* comment due to wordpress org upload error;
function person_taxonomy() {

    $labels = array(
        'name'                       => _x( 'Person Categories', 'Taxonomy General Name', 'velox' ),
        'singular_name'              => _x( 'Person Category', 'Taxonomy Singular Name', 'velox' ),
        'menu_name'                  => __( 'Person Categories', 'velox' ),
        'all_items'                  => __( 'All Person Categories', 'velox' ),
        'parent_item'                => __( 'Parent Person Category', 'velox' ),
        'parent_item_colon'          => __( 'Parent Person Category:', 'velox' ),
        'new_item_name'              => __( 'New Person Category', 'velox' ),
        'add_new_item'               => __( 'Add Person Category', 'velox' ),
        'edit_item'                  => __( 'Edit Person Category', 'velox' ),
        'update_item'                => __( 'Update Person Category', 'velox' ),
        'view_item'                  => __( 'View Person Category', 'velox' ),
        'separate_items_with_commas' => __( 'SeparatePerson Categories with commas', 'velox' ),
        'add_or_remove_items'        => __( 'Add or remove Person Category', 'velox' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'velox' ),
        'popular_items'              => __( 'Popular Person Categories', 'velox' ),
        'search_items'               => __( 'Search Person Categories', 'velox' ),
        'not_found'                  => __( 'Not Found', 'velox' ),
        'no_terms'                   => __( 'No Person Categories', 'velox' ),
        'items_list'                 => __( 'Person Categories list', 'velox' ),
        'items_list_navigation'      => __( 'Person Categories list navigation', 'velox' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy( 'person_catogries', array( 'person' ), $args );

}
add_action( 'init', 'person_taxonomy', 0 );*/

/************* customizer panels making  ****************/