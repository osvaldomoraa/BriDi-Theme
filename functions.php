<?php 

function init_template(){
    add_theme_support( 'post-thumbnails');
    add_theme_support( 'title-tag' );

    register_nav_menus(
        array(
          'top_menu' => 'Principal'
        )
    );
}
add_action('after_setup_theme','init_template');

function template_styles(){
    wp_register_style( 'template-home', get_template_directory_uri() . '/assets/css/template-home.css' );  
    wp_register_style( '404', get_template_directory_uri() . '/assets/css/404.css' );
    wp_register_style( 'page', get_template_directory_uri() . '/assets/css/page.css' );
    wp_register_style( 'single', get_template_directory_uri() . '/assets/css/single.css' );  
    wp_register_style('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css',false,'4.6.0','all');
    wp_register_style('bootstrap-icons','https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css',false,'','all');
    wp_register_style('roboto','https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;500;600&family=Roboto:wght@400;500;700&display=swap',false,'','all');
    
    wp_enqueue_style('main-style', get_stylesheet_uri(), array('bootstrap','bootstrap-icons','roboto'),'1.0','all');

    wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', false,'3.5.1', true );
    wp_register_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js', array('jquery'),'4.6.0', true);

    wp_enqueue_script('main-scripts', get_stylesheet_uri(), array('jquery','bootstrap'),'1.0','all');
}
add_action('wp_enqueue_scripts','template_styles');

function registrar_sidebar(){
    register_sidebar( array(
        'name' => 'Pie de página',
        'id'  => 'footer',
        'description' => 'Zona de Widgets para pie de página', 
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<p>',
		'after_title'   => '</p>',
    ));
}
add_action('widgets_init','registrar_sidebar');

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

require_once __DIR__ . '/vendor/cmb2/init.php';

require_once('features/custom-post-types.php');

require_once('features/sesion-fields.php');

require_once('features/measurement-fields.php');

require_once('features/home-template-fields.php');

require_once('features/custom-taxonomy.php');

require_once('features/forms/user-register.php');

require_once('features/user-fields.php');

require_once('features/forms/pretest-sleeping.php');