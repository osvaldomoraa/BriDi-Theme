<?php 

add_action( 'cmb2_init', 'sesiones_register_meta_boxes' );
function sesiones_register_meta_boxes() {

	$prefix = 'ses_mb_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'sesiones-main',
		'title'        => __( 'Detalles de la sesion', 'cmb2' ),
		'object_types' => array( 'sesion' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$cmb->add_field( array(
		'name' => __( 'URL del video principal', 'cmb2' ),
		'id' => $prefix . 'main_video',
		'type' => 'text_url',
	) );

	$cmb->add_field( array(
		'name' => __( 'Archivo de audio principal', 'cmb2' ),
		'id' => $prefix . 'main_audio',
		'type' => 'file',
	) );

	$cmb->add_field( array(
		'name' => __( 'Archivo de diapositivas principal', 'cmb2' ),
		'id' => $prefix . 'main_slides',
		'type' => 'file',
	) );

	$group_field_id = $cmb->add_field( array(
        'id'          => 'single_sesion_assets_block',
        'type'        => 'group',
        'description' => __( 'Lista de materiales del taller', 'cmb2' ),
        'options'     => array(
            'group_title'       => __( 'Material {#}', 'cmb2' ),
            'add_button'        => __( 'Agregar material', 'cmb2' ),
            'remove_button'     => __( 'Quitar material', 'cmb2' ),
            'sortable'          => true,
        ),
    ) );
    
	$cmb->add_group_field( $group_field_id, array(
		'name' => __( 'Nombre del material', 'cmb2' ),
		'id' => $prefix . 'file_name_assets_block',
		'type' => 'text',
	) );

	$cmb->add_group_field( $group_field_id, array(
		'name' => __( 'Archivo', 'cmb2' ),
		'id' => $prefix . 'file_link_assets_block',
		'type' => 'file',
	) );	

}