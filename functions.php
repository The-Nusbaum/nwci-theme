<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'popper-scripts', get_stylesheet_directory_uri() . '/js/popper.min.js', array(), false);
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

register_sidebar(array(
	'name'          => "Header Nav",
	'id'            => "header_nav",
	'description'   => 'the blocks in the browse dropdown',
	'before_widget' => "<div class='col-md-3'>\n",
	'after_widget'  => "</div>\n",
));

function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );

function nwci_nav()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'header-menu',
		'menu'            => 'header-menu',
		'menu_class'      => 'nav nav-pills row',
		'echo'            => true,
		// 'container'       => 'div',
		// 'container_class' => 'menu-{menu slug}-container',
		// 'container_id'    => '',
		// 'menu_id'         => '',
		// 'fallback_cb'     => 'wp_page_menu',
		// 'before'          => '',
		// 'after'           => '',
		// 'link_before'     => '',
		// 'link_after'      => '',
		// 'items_wrap'      => '<ul>%3$s</ul>',
		// 'depth'           => 0,
		// 'walker'          => ''
		)
	);
}
