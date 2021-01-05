<?php 

function sesion_taxonomy() {

$labels = array(
    'name'                       => _x( 'Modulos', 'Taxonomy General Name', 'sesion_taxonomy' ),
    'singular_name'              => _x( 'Modulo', 'Taxonomy Singular Name', 'sesion_taxonomy' ),
    'menu_name'                  => __( 'Modulos', 'sesion_taxonomy' ),
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
register_taxonomy( 'modulo', array( 'sesion' ), $args );

}
add_action( 'init', 'sesion_taxonomy', 0 );



function medicion_taxonomy() {

    $labels = array(
        'name'                       => _x( 'Tipos de instrumentos', 'Taxonomy General Name', 'sesion_taxonomy' ),
        'singular_name'              => _x( 'Tipo de instrumento', 'Taxonomy Singular Name', 'sesion_taxonomy' ),
        'menu_name'                  => __( 'Tipos de instrumentos', 'sesion_taxonomy' ),
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
    register_taxonomy( 'tipo_instrumento', array( 'medicion' ), $args );
    
    }
    add_action( 'init', 'medicion_taxonomy', 0 );