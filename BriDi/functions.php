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
    wp_register_style('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css',false,'4.4.1','all');
    wp_register_style('montserrat','https://fonts.googleapis.com/css?family=Montserrat&display=swap',false,'','all');
    wp_enqueue_style('main-style', get_stylesheet_uri(), array('bootstrap','montserrat'),'1.0','all');

    wp_register_script( 'popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', false, true );
    wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array('jquery','popper'), true);

    wp_enqueue_script( 'custom', get_template_directory_uri()."/assets/js/custom.js", false,"1.1", true );
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
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'excerpt', 'page-attributes', 'post-formats'),
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
    );
    
	register_post_type( 'medicion', $args );

}
add_action( 'init', 'mediciones_type');

// Registrando Meta Box para post type Book
add_filter( 'rwmb_meta_boxes', 'your_prefix_meta_boxes' ); // Función declarada en el filtro rwmb_meta_boxes propia de Meta Box 
function your_prefix_meta_boxes( $meta_boxes ) { // Función para crear los Custom Fields
    $meta_boxes[] = array(
        'title'      => __( 'Datos del libro', 'textdomain' ), // Nombre de todo el grupo
        'post_types' => 'sesion', // Lo mostraremos en nuestro pos type llamado book
        'fields'     => array(
          // Inicio de cada uno de los campos que agregaremos
          array(
                'id'   => 'codigo',
                'name' => __( 'Código', 'textdomain' ),
                'type' => 'number',
            ),
            // Fin de cada uno de los campos que agregaremos
            array(
                'id'   => 'autor',
                'name' => __( 'Autor', 'textdomain' ),
                'type' => 'text',
            ),
            array(
                'id'      => 'tapa',
                'name'    => __( 'Tapa', 'textdomain' ),
                'type'    => 'radio',
                'options' => array(
                    'blanda' => __( 'Blanda', 'textdomain' ),
                    'dura' => __( 'Dura', 'textdomain' ),
                ),
            ),
            array(
                'id'   => 'fecha',
                'name' => __( 'Fecha de creación', 'textdomain' ),
                'type' => 'date',
            ),
            array(
                'id'   => 'resumen',
                'name' => __( 'Resumen', 'textdomain' ),
                'type' => 'textarea',
            ),
            array(
        'id' => 'select_1',
        'name' => esc_html__( 'Select', 'metabox-online-generator' ),
        'type' => 'select',
        'placeholder' => esc_html__( 'Select an Item', 'metabox-online-generator' ),
        'options' => array(
          'Español' => 'Español',
          'Ingles' => 'Ingles',
        ),
        'std' => 'Español',
      ),
        ),
    );
    return $meta_boxes; // Retornamos la variable de toda la función.
}