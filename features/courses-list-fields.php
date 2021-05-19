<?php 

add_action( 'cmb2_init', 'cmb2_courses_card_metabox' );
function cmb2_courses_card_metabox() {

	$prefix = 'clmb_cmb2_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'courses_list_team_metabox',
		'title'        => __( 'Lista de talleres', 'cmb2' ),
        'object_types' => array( 'page' ),
        'show_on'      => array( 'key' => 'page-template', 'value' => 'template-courses.php' ),
		'context'      => 'normal',
		'priority'     => 'high',
	) );
    
    $group_field_id = $cmb->add_field( array(
        'id'          => 'course_card_block',
        'type'        => 'group',
        'description' => __( 'genera cada una de las miniaturas de talleres', 'cmb2' ),
        'options'     => array(
            'group_title'       => __( 'Taller {#}', 'cmb2' ),
            'add_button'        => __( 'Agregar taller', 'cmb2' ),
            'remove_button'     => __( 'Quitar taller', 'cmb2' ),
            'sortable'          => true,
        ),
    ) );
    
    $cmb->add_group_field( $group_field_id, array(
		'name' => __( 'Nombre del taller', 'cmb2' ),
		'id' => $prefix . 'title_course_card',
		'type' => 'text',
	) );

	$cmb->add_group_field( $group_field_id, array(
		'name' => __( 'Imagen del taller', 'cmb2' ),
		'id' => $prefix . 'image_course_card',
		'type' => 'file',
	) );
	
	$cmb->add_group_field( $group_field_id, array(
		'name' => __( 'Descripcion del taller', 'cmb2' ),
		'id' => $prefix . 'description_course_card',
		'type' => 'textarea',
	) );

	$cmb->add_group_field( $group_field_id, array(
		'name' => __( 'Dirección del taller', 'cmb2' ),
		'id' => $prefix . 'url_course_card',
		'type' => 'text-url',
	) );
}