<?php
/**
 * Loads scripts
 * css
 * js
 * bootstrap
 */
function style_on_load()
{
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', array(), '1.0.2', 'all');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/jquery/jquery.slim.min.js', array(), '2.0.1', 'all');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array(), '2.0.2', 'all');
    wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/styles/style.css', array(), '1.0.2', 'all');
    wp_enqueue_style('swiper-css', get_template_directory_uri().'/assets/swiper/css/swiper.min.css', array(), 'all');
    wp_enqueue_script('swiper-js', get_template_directory_uri().'/assets/swiper/js/swiper.min.js', array(), true);
    
}
add_action('wp_enqueue_scripts', 'style_on_load');
/**
 * Adds two menu styles:
 * Primary - Top Navbar,
 * Footer - Bootom Navbar
 */
register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu'),
));
/**
 * Adds theme support:
 * Custom Logo
 * Custom Header
 * Post Thumbnails
 */
add_theme_support("custom-logo");
add_theme_support("custom-header");
add_theme_support("post-thumbnails");

function myWidget(){
  
    register_sidebar(array(
        'name'=>'Header 1',
        'id' => 'header1',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name'=>'Footer 1',
        'id' => 'footer1',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name'=>'Footer 2',
        'id' => 'footer2',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name'=>'Footer 3',
        'id' => 'footer3',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
   
    register_sidebar(array(
        'name'=>'Footer 4',
        'id' => 'footer4',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name'=>'PhoneContact Space Between Sections',
        'id' => 'phonecontactspacebtw',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name'=>'Fixed Phone',
        'id' => 'phonecontact',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name'=>'Fixed Mail',
        'id' => 'mailcontact',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name'=>'Fixed Location',
        'id' => 'locationcontact',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name'=>'Contact Page All Contact',
        'id' => 'allcontact',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name'=>'First Phone Top',
        'id' => 'phonecontacttop',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name'=>'Second Phone Top',
        'id' => 'extraphonetop',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

}



add_action('widgets_init', 'myWidget');



function custom_post_type(){
    $labels_frontpage = array(
		'name' => 'Abgeschlossene Jobs',
		);
		register_post_type('projects', array(
		'labels' => $labels_frontpage,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
		'title',
		'editor',
		'excerpt',
		'thumbnail',
		'revisions',
		'page-attributes'
	    ),
		'menu_position' => 8,
		'exclude_from_search' => false,
		'menu_icon' => 'dashicons-rest-api',
		));
        $labels_frontpage = array(
            'name' => 'Slider',
        );
        register_post_type('slider', array(
            'labels' => $labels_frontpage,
            'public' => true,
            'has_archive' => true,
            'publicly_queryable' => true,
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'hierarchical' => false,
            'supports' => array(
                'title',
                'editor',
                'excerpt',
                'thumbnail',
                'revisions',
            ),
            'menu_position' => 7,
            'exclude_from_search' => false,
            'menu_icon' => 'dashicons-images-alt2',
        ));
    $labels_frontpage = array(
        'name' => 'Warum uns wählen',
    );
    register_post_type('services2', array(
        'labels' => $labels_frontpage,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions',
        ),
        'menu_position' => 7,
        'exclude_from_search' => false,
        'menu_icon' => 'dashicons-money',
    ));
    $labels_frontpage = array(
        'name' => 'Fortschrittskreis',
    );
    register_post_type('progress', array(
        'labels' => $labels_frontpage,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions',
        ),
        'menu_position' => 7,
        'exclude_from_search' => false,
        'menu_icon' => 'dashicons-image-filter',
    ));

    $labels_frontpage = array(
        'name' => 'Unser Team',
    );
    register_post_type('team', array(
        'labels' => $labels_frontpage,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions',
        ),
        'menu_position' => 7,
        'exclude_from_search' => false,
        'menu_icon' => 'dashicons-businesswoman',
    ));

    $labels_frontpage = array(
        'name' => 'Hilfedienste',
    );
    register_post_type('help', array(
        'labels' => $labels_frontpage,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions',
        ),
        'menu_position' => 7,
        'exclude_from_search' => false,
        'menu_icon' => 'dashicons-flag',
    ));
    
//     $labels_frontpage = array(
//         'name' => 'Referenzen',
//     );
//     register_post_type('testiomonials', array(
//         'labels' => $labels_frontpage,
//         'public' => true,
//         'has_archive' => true,
//         'publicly_queryable' => true,
//         'query_var' => true,
//         'rewrite' => true,
//         'capability_type' => 'post',
//         'hierarchical' => false,
//         'supports' => array(
//             'title',
//             'editor',
//             'excerpt',
//             'thumbnail',
//             'revisions',
//         ),
//         'menu_position' => 7,
//         'exclude_from_search' => false,
//         'menu_icon' => 'dashicons-format-quote',
//     ));
    
}

add_action('init', 'custom_post_type');


















/*Dienstleistungen custom post type*/
function ld_diens_post_type(){
    $labels = array(
        'name' => '3 Categories',
        'singular_name' => 'Dienstleistungen Post',
        'add_new' => 'Add item',
        'all_items' => 'All items',
        'add_new_item' => 'Add Item',
        'edit_item' => 'Edit Item',
        'new_item' => 'New Items',
        'view_item' => 'View Item',
        'search_item' => 'Search Dienstleistungens',
        'not_found' => 'No items found',
        'not_found_in_trash' => 'No items found in trash',
        'parent_item_colon' => 'Parent Item'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queruable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type'=> 'post',
        'menu_icon' => 'dashicons-menu-alt3',
        'supports' => array(
        'title',
        'excerpt',
        'editor',
        'thumbnail',
        ),
        'taxonomies' => array( 'category' ),
        'menu_position' => 5, 
    );
    register_post_type('diensleistung',$args);
    }
    add_action('init','ld_diens_post_type');




    $labels = array(
        'name' => _x( 'Projects Categories', 'taxonomy general name' ),
        'singular_name' => _x( 'Unsere Projects', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Unsere Projects' ),
        'all_items' => __( 'All Unsere Projects' ),
        'parent_item' => __( 'Parent Unsere Projects' ),
        'parent_item_colon' => __( 'Parent Unsere Projects:' ),
        'edit_item' => __( 'Edit Unsere Projects' ), 
        'update_item' => __( 'Update Unsere Projects' ),
        'add_new_item' => __( 'Add New Unsere Projects' ),
        'new_item_name' => __( 'New Unsere Projects Name' ),
        'menu_name' => __( 'Projects Categories' ),
    );    
    // Now register the taxonomy
    register_taxonomy('categorytwo',array('projects'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'categorytwo' ),
    ));