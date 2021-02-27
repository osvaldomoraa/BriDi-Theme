<?php 

function sesiones_type() {

$labels = array(
    'name'                  => 'Sesiones',
    'singular_name'         => 'Sesion',
    'menu_name'             => 'Sesiones', 
);

$args = array(
    'label'                 => 'Sesiones',
    'description'           => __( 'Actividades separadas para cada taller', 'lst' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'comments', 'thumbnail', 'revisions', 'excerpt', 'page-attributes', 'post-formats'),
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-clipboard',
    'show_in_nav_menus'     => false,
    'show_in_rest'          => true,
    'can_export'            => true,
    'publicly_queryable'    => true,
    'rewrite'               => true,
    'capabilities'          => array(
        'edit_post'             => 'edit_sesion',
        'edit_posts'            => 'edit_sesions',
        'edit_others_posts'     => 'edit_other_sesions',
        'publish_posts'         => 'publish_sesions',
        'read_post'             => 'read_sesion',
        'read_private_posts'    => 'read_private_sesions',
        'delete_post'           => 'delete_sesion',
    ),
    'map_meta_cap'          => true,
);

register_post_type( 'sesion', $args );

}
add_action( 'init', 'sesiones_type');

function mediciones_type() {

$labels = array(
    'name'                  => 'Mediciones',
    'singular_name'         => 'Medicion',
    'menu_name'             => 'Mediciones', 
);

$args = array(
    'label'                 => 'Mediciones',
    'description'           => __( 'Respuestas de los instrumentos aplicados', 'lst' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'revisions'),
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-chart-pie',
    'show_in_nav_menus'     => false,
    'show_in_rest'          => true,
    'can_export'            => true,
    'publicly_queryable'    => true,
    'rewrite'               => true,
    'capabilities'          => array(
        'edit_post'             => 'edit_measurement',
        'edit_posts'            => 'edit_measurements',
        'edit_others_posts'     => 'edit_other_measurements',
        'publish_posts'         => 'publish_measurements',
        'read_post'             => 'read_measurement',
        'read_private_posts'    => 'read_private_measurements',
        'delete_post'           => 'delete_measurement',
    ),
    'map_meta_cap'          => true,
);

register_post_type( 'medicion', $args );

}
add_action( 'init', 'mediciones_type');