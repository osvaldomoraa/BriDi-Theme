<?php 

add_action( 'cmb2_init', 'sesiones_register_meta_boxes' );
function sesiones_register_meta_boxes() {

	$prefix = 'ses_mb';

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

	$cmb->add_field( array(
		'name' => __( 'Materiales', 'cmb2' ),
		'id' => $prefix . 'file_materials',
		'type' => 'file_list',
	) );

}