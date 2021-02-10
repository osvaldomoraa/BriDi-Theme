<?php 

add_action( 'cmb2_init', 'cmb2_home_hero_metabox' );
function cmb2_home_hero_metabox() {

	$prefix = 'htmb_cmb2_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'home_template_hero_metabox',
		'title'        => __( 'Seccion: Principal', 'cmb2' ),
        'object_types' => array( 'page' ),
        'show_on'      => array( 'key' => 'page-template', 'value' => 'template-home.php' ),
		'context'      => 'normal',
		'priority'     => 'high',
	) );

	$cmb->add_field( array(
		'name' => __( 'Titulo de la seccion', 'cmb2' ),
		'id' => $prefix . 'title_about',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Texto principal', 'cmb2' ),
		'id' => $prefix . 'text_about',
		'type' => 'textarea',
	) );

	$cmb->add_field( array(
		'name' => __( 'Enlace del video', 'cmb2' ),
		'id' => $prefix . 'video_about',
		'type' => 'text_url',
	) );	
}

add_action( 'cmb2_init', 'cmb2_home_caregivers_metabox' );
function cmb2_home_caregivers_metabox() {

	$prefix = 'htmb_cmb2_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'home_template_caregivers_metabox',
		'title'        => __( 'Seccion: Cuidadores', 'cmb2' ),
        'object_types' => array( 'page' ),
        'show_on'      => array( 'key' => 'page-template', 'value' => 'template-home.php' ),
		'context'      => 'normal',
		'priority'     => 'high',
	) );

	$cmb->add_field( array(
		'name' => __( 'Titulo de la seccion', 'cmb2' ),
		'id' => $prefix . 'title_caregivers',
		'type' => 'text',
	) );
	
	$cmb->add_field( array(
		'name' => __( 'Texto principal', 'cmb2' ),
		'id' => $prefix . 'text_caregivers',
		'type' => 'textarea',
	) );
	
	$cmb->add_field( array(
		'name' => __( 'Titulo de la tarjeta 1', 'cmb2' ),
		'id' => $prefix . 'title_card1_caregivers',
		'type' => 'text',
	) );
	
	$cmb->add_field( array(
		'name' => __( 'Texto principal de la tarjeta 1', 'cmb2' ),
		'id' => $prefix . 'text_card1_caregivers',
		'type' => 'textarea',
	) );
	
	$cmb->add_field( array(
		'name' => __( 'Imagen de la tarjeta 1', 'cmb2' ),
		'id' => $prefix . 'image_card1_caregivers',
		'type' => 'file',
	) );
	
	$cmb->add_field( array(
		'name' => __( 'Titulo de la tarjeta 2', 'cmb2' ),
		'id' => $prefix . 'title_card2_caregivers',
		'type' => 'text',
	) );
	
	$cmb->add_field( array(
		'name' => __( 'Texto principal de la tarjeta 2', 'cmb2' ),
		'id' => $prefix . 'text_card2_caregivers',
		'type' => 'textarea',
	) );
	
	$cmb->add_field( array(
		'name' => __( 'Imagen de la tarjeta 2', 'cmb2' ),
		'id' => $prefix . 'image_card2_caregivers',
		'type' => 'file',
	) );
	
	$cmb->add_field( array(
		'name' => __( 'Titulo de la tarjeta 3', 'cmb2' ),
		'id' => $prefix . 'title_card3_caregivers',
		'type' => 'text',
	) );
	
	$cmb->add_field( array(
		'name' => __( 'Texto principal de la tarjeta 3', 'cmb2' ),
		'id' => $prefix . 'text_card3_caregivers',
		'type' => 'textarea',
	) );
	
	$cmb->add_field( array(
		'name' => __( 'Imagen de la tarjeta 3', 'cmb2' ),
		'id' => $prefix . 'image_card3_caregivers',
		'type' => 'file',
	) );	
}

add_action( 'cmb2_init', 'cmb2_home_cta_metabox' );
function cmb2_home_cta_metabox() {

	$prefix = 'htmb_cmb2_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'home_template_cta_metabox',
		'title'        => __( 'Seccion: CTA', 'cmb2' ),
        'object_types' => array( 'page' ),
        'show_on'      => array( 'key' => 'page-template', 'value' => 'template-home.php' ),
		'context'      => 'normal',
		'priority'     => 'high',
	) );

	$cmb->add_field( array(
		'name' => __( 'Imagen o icono', 'cmb2' ),
		'id' => $prefix . 'image_slogan',
		'type' => 'file',
	) );

	$cmb->add_field( array(
		'name' => __( 'Slogan', 'cmb2' ),
		'id' => $prefix . 'title_slogan',
		'type' => 'text',
	) );	
}

add_action( 'cmb2_init', 'cmb2_home_methodology_metabox' );
function cmb2_home_methodology_metabox() {

	$prefix = 'htmb_cmb2_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'home_template_methodology_metabox',
		'title'        => __( 'Seccion: Metodologia', 'cmb2' ),
        'object_types' => array( 'page' ),
        'show_on'      => array( 'key' => 'page-template', 'value' => 'template-home.php' ),
		'context'      => 'normal',
		'priority'     => 'high',
	) );

	$cmb->add_field( array(
		'name' => __( 'Titulo de la seccion', 'cmb2' ),
		'id' => $prefix . 'title_methodology',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Imagen principal', 'cmb2' ),
		'id' => $prefix . 'image_methodology',
		'type' => 'file',
	) );

	$cmb->add_field( array(
		'name' => __( 'Titulo de la tarjeta 1', 'cmb2' ),
		'id' => $prefix . 'title_card1_methodology',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Texto principal de la tarjeta 1', 'cmb2' ),
		'id' => $prefix . 'text_card1_methodology',
		'type' => 'textarea',
	) );

	$cmb->add_field( array(
		'name' => __( 'Imagen de la tarjeta 1', 'cmb2' ),
		'id' => $prefix . 'image_card1_methodology',
		'type' => 'file',
	) );

	$cmb->add_field( array(
		'name' => __( 'Titulo de la tarjeta 2', 'cmb2' ),
		'id' => $prefix . 'title_card2_methodology',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Texto principal de la tarjeta 2', 'cmb2' ),
		'id' => $prefix . 'text_card2_methodology',
		'type' => 'textarea',
	) );

	$cmb->add_field( array(
		'name' => __( 'Imagen de la tarjeta 2', 'cmb2' ),
		'id' => $prefix . 'image_card2_methodology',
		'type' => 'file',
	) );

	$cmb->add_field( array(
		'name' => __( 'Titulo de la tarjeta 3', 'cmb2' ),
		'id' => $prefix . 'title_card3_methodology',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Texto principal de la tarjeta 3', 'cmb2' ),
		'id' => $prefix . 'text_card3_methodology',
		'type' => 'textarea',
	) );

	$cmb->add_field( array(
		'name' => __( 'Imagen de la tarjeta 3', 'cmb2' ),
		'id' => $prefix . 'image_card3_methodology',
		'type' => 'file',
	) );	
}

add_action( 'cmb2_init', 'cmb2_home_objetives_metabox' );
function cmb2_home_objetives_metabox() {

	$prefix = 'htmb_cmb2_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'home_template_objetives_metabox',
		'title'        => __( 'Seccion: Objetivos', 'cmb2' ),
        'object_types' => array( 'page' ),
        'show_on'      => array( 'key' => 'page-template', 'value' => 'template-home.php' ),
		'context'      => 'normal',
		'priority'     => 'high',
	) );

	$cmb->add_field( array(
		'name' => __( 'Titulo de la seccion', 'cmb2' ),
		'id' => $prefix . 'title_objetives',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Texto principal', 'cmb2' ),
		'id' => $prefix . 'text_objetives',
		'type' => 'textarea',
	) );

	$cmb->add_field( array(
		'name' => __( 'Titulo de la tarjeta 1', 'cmb2' ),
		'id' => $prefix . 'title_card1_objetives',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Texto principal de la tarjeta 1', 'cmb2' ),
		'id' => $prefix . 'text_card1_objetives',
		'type' => 'textarea',
	) );

	$cmb->add_field( array(
		'name' => __( 'Imagen de la tarjeta 1', 'cmb2' ),
		'id' => $prefix . 'image_card1_objetives',
		'type' => 'file',
	) );

	$cmb->add_field( array(
		'name' => __( 'Titulo de la tarjeta 2', 'cmb2' ),
		'id' => $prefix . 'title_card2_objetives',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Texto principal de la tarjeta 2', 'cmb2' ),
		'id' => $prefix . 'text_card2_objetives',
		'type' => 'textarea',
	) );

	$cmb->add_field( array(
		'name' => __( 'Imagen de la tarjeta 2', 'cmb2' ),
		'id' => $prefix . 'image_card2_objetives',
		'type' => 'file',
	) );

	$cmb->add_field( array(
		'name' => __( 'Titulo de la tarjeta 3', 'cmb2' ),
		'id' => $prefix . 'title_card3_objetives',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Texto principal de la tarjeta 3', 'cmb2' ),
		'id' => $prefix . 'text_card3_objetives',
		'type' => 'textarea',
	) );

	$cmb->add_field( array(
		'name' => __( 'Imagen de la tarjeta 3', 'cmb2' ),
		'id' => $prefix . 'image_card3_objetives',
		'type' => 'file',
	) );	
}

add_action( 'cmb2_init', 'cmb2_home_team_metabox' );
function cmb2_home_team_metabox() {

	$prefix = 'htmb_cmb2_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'home_template_team_metabox',
		'title'        => __( 'Seccion: Equipo', 'cmb2' ),
        'object_types' => array( 'page' ),
        'show_on'      => array( 'key' => 'page-template', 'value' => 'template-home.php' ),
		'context'      => 'normal',
		'priority'     => 'high',
	) );

	$cmb->add_field( array(
		'name' => __( 'Titulo de la seccion', 'cmb2' ),
		'id' => $prefix . 'title_team',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Texto principal', 'cmb2' ),
		'id' => $prefix . 'text_team',
		'type' => 'textarea',
    ) );
    
    $group_field_id = $cmb->add_field( array(
        'id'          => 'team_members_block',
        'type'        => 'group',
        'description' => __( 'genera cada una de las tarjetas de equipo', 'cmb2' ),
        'options'     => array(
            'group_title'       => __( 'Integrante {#}', 'cmb2' ),
            'add_button'        => __( 'Agregar integrante', 'cmb2' ),
            'remove_button'     => __( 'Quitar integrante', 'cmb2' ),
            'sortable'          => true,
        ),
    ) );
    
    $cmb->add_group_field( $group_field_id, array(
		'name' => __( 'Nombre', 'cmb2' ),
		'id' => $prefix . 'title_member_team',
		'type' => 'text',
	) );

	$cmb->add_group_field( $group_field_id, array(
		'name' => __( 'Rol', 'cmb2' ),
		'id' => $prefix . 'role_member_team',
		'type' => 'text',
	) );

	$cmb->add_group_field( $group_field_id, array(
		'name' => __( 'Foto', 'cmb2' ),
		'id' => $prefix . 'image_member_team',
		'type' => 'file',
	) );	
}

add_action( 'cmb2_init', 'cmb2_home_testimonials_metabox' );
function cmb2_home_testimonials_metabox() {

	$prefix = 'htmb_cmb2_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'home_template_testimonials_metabox',
		'title'        => __( 'Seccion: Testimonios', 'cmb2' ),
        'object_types' => array( 'page' ),
        'show_on'      => array( 'key' => 'page-template', 'value' => 'template-home.php' ),
		'context'      => 'normal',
		'priority'     => 'high',
	) );

	$cmb->add_field( array(
		'name' => __( 'Titulo de la seccion', 'cmb2' ),
		'id' => $prefix . 'title_testimonials',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Texto de la burbuja', 'cmb2' ),
		'id' => $prefix . 'bubble_text_testimonials',
		'type' => 'textarea',
	) );

	$cmb->add_field( array(
		'name' => __( 'Foto', 'cmb2' ),
		'id' => $prefix . 'photo_caregiver_testimonials',
		'type' => 'file',
	) );

	$cmb->add_field( array(
		'name' => __( 'Nombre', 'cmb2' ),
		'id' => $prefix . 'name_caregiver_testimonials',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Rol', 'cmb2' ),
		'id' => $prefix . 'role_caregiver_testimonials',
		'type' => 'text',
	) );    	
}