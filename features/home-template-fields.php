<?php 

add_filter( 'rwmb_meta_boxes', 'home_template_register_meta_boxes' );

function home_template_register_meta_boxes( $meta_boxestitle_about ) {    
    $prefix = 'hmtp_mb';

    $meta_boxes[] = [
        'title'      => esc_html__( 'Campos de la pagina principal', 'home-template-metabox' ),
        'id'         => 'home-template-main',
        'post_types' => ['page'],
        'context'    => 'normal',
        'priority'   => 'high',
        'fields'     => [
            [
                'type' => 'heading',
                'name' => esc_html__( 'Seccion: Nosotros', 'home-template-metabox' ),
            ],
            [
                'type' => 'image_advanced',
                'id'   => $prefix . 'background_about',
                'name' => esc_html__( 'Fondo de la seccion', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'title_about',
                'name' => esc_html__( 'Titulo de la seccion', 'home-template-metabox' ),
            ],
            [
                'type' => 'textarea',
                'id'   => $prefix . 'textarea_about',
                'name' => esc_html__( 'Texto principal', 'home-template-metabox' ),
            ],
            [
                'type' => 'url',
                'id'   => $prefix . 'video_about',
                'name' => esc_html__( 'Enlace del video', 'home-template-metabox' ),
            ],
            [
                'type' => 'divider',
            ],
            [
                'type' => 'heading',
                'name' => esc_html__( 'Seccion: Cuidadores', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'title_caregivers',
                'name' => esc_html__( 'Titulo de la seccion', 'home-template-metabox' ),
            ],
            [
                'type' => 'textarea',
                'id'   => $prefix . 'textarea_caregivers',
                'name' => esc_html__( 'Texto principal', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'title_card1_caregivers',
                'name' => esc_html__( 'Titulo de la tarjeta 1', 'home-template-metabox' ),
            ],
            [
                'type' => 'textarea',
                'id'   => $prefix . 'textarea_card1_caregivers',
                'name' => esc_html__( 'Texto principal de la tarjeta 1', 'home-template-metabox' ),
            ],
            [
                'type' => 'image_advanced',
                'id'   => $prefix . 'image_card1_caregivers',
                'name' => esc_html__( 'Imagen de la tarjeta 1', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'title_card2_caregivers',
                'name' => esc_html__( 'Titulo de la tarjeta 2', 'home-template-metabox' ),
            ],
            [
                'type' => 'textarea',
                'id'   => $prefix . 'textarea_card2_caregivers',
                'name' => esc_html__( 'Texto principal de la tarjeta 2', 'home-template-metabox' ),
            ],
            [
                'type' => 'image_advanced',
                'id'   => $prefix . 'image_card2_caregivers',
                'name' => esc_html__( 'Imagen de la tarjeta 2', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'title_card3_caregivers',
                'name' => esc_html__( 'Titulo de la tarjeta 3', 'home-template-metabox' ),
            ],
            [
                'type' => 'textarea',
                'id'   => $prefix . 'textarea_card3_caregivers',
                'name' => esc_html__( 'Texto principal de la tarjeta 3', 'home-template-metabox' ),
            ],
            [
                'type' => 'image_advanced',
                'id'   => $prefix . 'image_card3_caregivers',
                'name' => esc_html__( 'Imagen de la tarjeta 3', 'home-template-metabox' ),
            ],
            [
                'type' => 'url',
                'id'   => $prefix . 'url_caregivers',
                'name' => esc_html__( 'Enlace para ver más', 'home-template-metabox' ),
            ],
            [
                'type' => 'divider',
            ],
            [
                'type' => 'heading',
                'name' => esc_html__( 'CTA: Slogan', 'home-template-metabox' ),
            ],
            [
                'type' => 'image_advanced',
                'id'   => $prefix . 'image_slogan',
                'name' => esc_html__( 'Imagen o icono', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'title_slogan',
                'name' => esc_html__( 'Slogan', 'home-template-metabox' ),
            ],
            [
                'type' => 'divider',
            ],
            [
                'type' => 'heading',
                'name' => esc_html__( 'Seccion: Como lo hacemos', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'title_methodology',
                'name' => esc_html__( 'Titulo de la seccion', 'home-template-metabox' ),
            ],
            [
                'type' => 'image_advanced',
                'id'   => $prefix . 'image_methodology',
                'name' => esc_html__( 'Imagen principal', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'title_card1_methodology',
                'name' => esc_html__( 'Titulo de la tarjeta 1', 'home-template-metabox' ),
            ],
            [
                'type' => 'textarea',
                'id'   => $prefix . 'textarea_card1_methodology',
                'name' => esc_html__( 'Texto principal de la tarjeta 1', 'home-template-metabox' ),
            ],
            [
                'type' => 'image_advanced',
                'id'   => $prefix . 'image_card1_methodology',
                'name' => esc_html__( 'Imagen de la tarjeta 1', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'title_card2_methodology',
                'name' => esc_html__( 'Titulo de la tarjeta 2', 'home-template-metabox' ),
            ],
            [
                'type' => 'textarea',
                'id'   => $prefix . 'textarea_card2_methodology',
                'name' => esc_html__( 'Texto principal de la tarjeta 2', 'home-template-metabox' ),
            ],
            [
                'type' => 'image_advanced',
                'id'   => $prefix . 'image_card2_methodology',
                'name' => esc_html__( 'Imagen de la tarjeta 2', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'title_card3_methodology',
                'name' => esc_html__( 'Titulo de la tarjeta 3', 'home-template-metabox' ),
            ],
            [
                'type' => 'textarea',
                'id'   => $prefix . 'textarea_card3_methodology',
                'name' => esc_html__( 'Texto principal de la tarjeta 3', 'home-template-metabox' ),
            ],
            [
                'type' => 'image_advanced',
                'id'   => $prefix . 'image_card3_methodology',
                'name' => esc_html__( 'Imagen de la tarjeta 3', 'home-template-metabox' ),
            ],
            [
                'type' => 'url',
                'id'   => $prefix . 'url_methodology',
                'name' => esc_html__( 'Enlace para ver más', 'home-template-metabox' ),
            ],
            [
                'type' => 'divider',
            ],
            [
                'type' => 'heading',
                'name' => esc_html__( 'Seccion: Objetivos', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'title_objetives',
                'name' => esc_html__( 'Titulo de la seccion', 'home-template-metabox' ),
            ],
            [
                'type' => 'textarea',
                'id'   => $prefix . 'textarea_objetives',
                'name' => esc_html__( 'Texto principal', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'title_card1_objetives',
                'name' => esc_html__( 'Titulo de la tarjeta 1', 'home-template-metabox' ),
            ],
            [
                'type' => 'textarea',
                'id'   => $prefix . 'textarea_card1_objetives',
                'name' => esc_html__( 'Texto principal de la tarjeta 1', 'home-template-metabox' ),
            ],
            [
                'type' => 'image_advanced',
                'id'   => $prefix . 'image_card1_objetives',
                'name' => esc_html__( 'Imagen de la tarjeta 1', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'title_card2_objetives',
                'name' => esc_html__( 'Titulo de la tarjeta 2', 'home-template-metabox' ),
            ],
            [
                'type' => 'textarea',
                'id'   => $prefix . 'textarea_card2_objetives',
                'name' => esc_html__( 'Texto principal de la tarjeta 2', 'home-template-metabox' ),
            ],
            [
                'type' => 'image_advanced',
                'id'   => $prefix . 'image_card2_objetives',
                'name' => esc_html__( 'Imagen de la tarjeta 2', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'title_card3_objetives',
                'name' => esc_html__( 'Titulo de la tarjeta 3', 'home-template-metabox' ),
            ],
            [
                'type' => 'textarea',
                'id'   => $prefix . 'textarea_card3_objetives',
                'name' => esc_html__( 'Texto principal de la tarjeta 3', 'home-template-metabox' ),
            ],
            [
                'type' => 'image_advanced',
                'id'   => $prefix . 'image_card3_objetives',
                'name' => esc_html__( 'Imagen de la tarjeta 3', 'home-template-metabox' ),
            ],
            [
                'type' => 'url',
                'id'   => $prefix . 'url_objetives',
                'name' => esc_html__( 'Enlace para ver más', 'home-template-metabox' ),
            ],
            [
                'type' => 'divider',
            ],
            [
                'type' => 'heading',
                'name' => esc_html__( 'Seccion: Equipo', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'title_team',
                'name' => esc_html__( 'Titulo de la seccion', 'home-template-metabox' ),
            ],
            [
                'type' => 'textarea',
                'id'   => $prefix . 'textarea_team',
                'name' => esc_html__( 'Texto principal', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'title_member1_team',
                'name' => esc_html__( 'Nombre 1', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'role_member1_team',
                'name' => esc_html__( 'Rol 1', 'home-template-metabox' ),
            ],
            [
                'type' => 'image_advanced',
                'id'   => $prefix . 'image_member1_team',
                'name' => esc_html__( 'Foto 1', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'title_member2_team',
                'name' => esc_html__( 'Nombre 2', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'role_member2_team',
                'name' => esc_html__( 'Rol 2', 'home-template-metabox' ),
            ],
            [
                'type' => 'image_advanced',
                'id'   => $prefix . 'image_member2_team',
                'name' => esc_html__( 'Foto 2', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'title_member3_team',
                'name' => esc_html__( 'Nombre 3', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'role_member3_team',
                'name' => esc_html__( 'Rol 3', 'home-template-metabox' ),
            ],
            [
                'type' => 'image_advanced',
                'id'   => $prefix . 'image_member3_team',
                'name' => esc_html__( 'Foto 3', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'title_member4_team',
                'name' => esc_html__( 'Nombre 4', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'role_member4_team',
                'name' => esc_html__( 'Rol 4', 'home-template-metabox' ),
            ],
            [
                'type' => 'image_advanced',
                'id'   => $prefix . 'image_member4_team',
                'name' => esc_html__( 'Foto 4', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'title_member5_team',
                'name' => esc_html__( 'Nombre 5', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'role_member5_team',
                'name' => esc_html__( 'Rol 5', 'home-template-metabox' ),
            ],
            [
                'type' => 'image_advanced',
                'id'   => $prefix . 'image_member5_team',
                'name' => esc_html__( 'Foto 5', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'title_member6_team',
                'name' => esc_html__( 'Nombre 6', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'role_member6_team',
                'name' => esc_html__( 'Rol 6', 'home-template-metabox' ),
            ],
            [
                'type' => 'image_advanced',
                'id'   => $prefix . 'image_member6_team',
                'name' => esc_html__( 'Foto 6', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'title_member7_team',
                'name' => esc_html__( 'Nombre 7', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'role_member7_team',
                'name' => esc_html__( 'Rol 7', 'home-template-metabox' ),
            ],
            [
                'type' => 'image_advanced',
                'id'   => $prefix . 'image_member7_team',
                'name' => esc_html__( 'Foto 7', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'title_member8_team',
                'name' => esc_html__( 'Nombre 8', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'role_member8_team',
                'name' => esc_html__( 'Rol 8', 'home-template-metabox' ),
            ],
            [
                'type' => 'image_advanced',
                'id'   => $prefix . 'image_member8_team',
                'name' => esc_html__( 'Foto 8', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'title_member9_team',
                'name' => esc_html__( 'Nombre 9', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'role_member9_team',
                'name' => esc_html__( 'Rol 9', 'home-template-metabox' ),
            ],
            [
                'type' => 'image_advanced',
                'id'   => $prefix . 'image_member9_team',
                'name' => esc_html__( 'Foto 9', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'title_member10_team',
                'name' => esc_html__( 'Nombre 10', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'role_member10_team',
                'name' => esc_html__( 'Rol 10', 'home-template-metabox' ),
            ],
            [
                'type' => 'image_advanced',
                'id'   => $prefix . 'image_member10_team',
                'name' => esc_html__( 'Foto 10', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'title_member11_team',
                'name' => esc_html__( 'Nombre 11', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'role_member11_team',
                'name' => esc_html__( 'Rol 11', 'home-template-metabox' ),
            ],
            [
                'type' => 'image_advanced',
                'id'   => $prefix . 'image_member11_team',
                'name' => esc_html__( 'Foto 11', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'title_member12_team',
                'name' => esc_html__( 'Nombre 12', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'role_member12_team',
                'name' => esc_html__( 'Rol 12', 'home-template-metabox' ),
            ],
            [
                'type' => 'image_advanced',
                'id'   => $prefix . 'image_member12_team',
                'name' => esc_html__( 'Foto 12', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'title_member13_team',
                'name' => esc_html__( 'Nombre 13', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'role_member13_team',
                'name' => esc_html__( 'Rol 13', 'home-template-metabox' ),
            ],
            [
                'type' => 'image_advanced',
                'id'   => $prefix . 'image_member13_team',
                'name' => esc_html__( 'Foto 13', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'title_member14_team',
                'name' => esc_html__( 'Nombre 14', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'role_member14_team',
                'name' => esc_html__( 'Rol 14', 'home-template-metabox' ),
            ],
            [
                'type' => 'image_advanced',
                'id'   => $prefix . 'image_member14_team',
                'name' => esc_html__( 'Foto 14', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'title_member15_team',
                'name' => esc_html__( 'Nombre 15', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'role_member15_team',
                'name' => esc_html__( 'Rol 15', 'home-template-metabox' ),
            ],
            [
                'type' => 'image_advanced',
                'id'   => $prefix . 'image_member15_team',
                'name' => esc_html__( 'Foto 15', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'title_member16_team',
                'name' => esc_html__( 'Nombre 16', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'role_member16_team',
                'name' => esc_html__( 'Rol 16', 'home-template-metabox' ),
            ],
            [
                'type' => 'image_advanced',
                'id'   => $prefix . 'image_member16_team',
                'name' => esc_html__( 'Foto 16', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'title_member17_team',
                'name' => esc_html__( 'Nombre 17', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'role_member17_team',
                'name' => esc_html__( 'Rol 17', 'home-template-metabox' ),
            ],
            [
                'type' => 'image_advanced',
                'id'   => $prefix . 'image_member17_team',
                'name' => esc_html__( 'Foto 17', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'title_member18_team',
                'name' => esc_html__( 'Nombre 18', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'role_member18_team',
                'name' => esc_html__( 'Rol 18', 'home-template-metabox' ),
            ],
            [
                'type' => 'image_advanced',
                'id'   => $prefix . 'image_member18_team',
                'name' => esc_html__( 'Foto 18', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'title_member19_team',
                'name' => esc_html__( 'Nombre 19', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'role_member19_team',
                'name' => esc_html__( 'Rol 19', 'home-template-metabox' ),
            ],
            [
                'type' => 'image_advanced',
                'id'   => $prefix . 'image_member19_team',
                'name' => esc_html__( 'Foto 19', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'title_member20_team',
                'name' => esc_html__( 'Nombre 20', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'role_member20_team',
                'name' => esc_html__( 'Rol 20', 'home-template-metabox' ),
            ],
            [
                'type' => 'image_advanced',
                'id'   => $prefix . 'image_member20_team',
                'name' => esc_html__( 'Foto 20', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'title_member21_team',
                'name' => esc_html__( 'Nombre 21', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'role_member21_team',
                'name' => esc_html__( 'Rol 21', 'home-template-metabox' ),
            ],
            [
                'type' => 'image_advanced',
                'id'   => $prefix . 'image_member21_team',
                'name' => esc_html__( 'Foto 21', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'title_member22_team',
                'name' => esc_html__( 'Nombre 22', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'role_member22_team',
                'name' => esc_html__( 'Rol 22', 'home-template-metabox' ),
            ],
            [
                'type' => 'image_advanced',
                'id'   => $prefix . 'image_member22_team',
                'name' => esc_html__( 'Foto 22', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'title_member23_team',
                'name' => esc_html__( 'Nombre 23', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'role_member23_team',
                'name' => esc_html__( 'Rol 23', 'home-template-metabox' ),
            ],
            [
                'type' => 'image_advanced',
                'id'   => $prefix . 'image_member23_team',
                'name' => esc_html__( 'Foto 23', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'title_member24_team',
                'name' => esc_html__( 'Nombre 24', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'role_member24_team',
                'name' => esc_html__( 'Rol 24', 'home-template-metabox' ),
            ],
            [
                'type' => 'image_advanced',
                'id'   => $prefix . 'image_member24_team',
                'name' => esc_html__( 'Foto 24', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'title_member25_team',
                'name' => esc_html__( 'Nombre 25', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'role_member25_team',
                'name' => esc_html__( 'Rol 25', 'home-template-metabox' ),
            ],
            [
                'type' => 'image_advanced',
                'id'   => $prefix . 'image_member25_team',
                'name' => esc_html__( 'Foto 25', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'title_member26_team',
                'name' => esc_html__( 'Nombre 26', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'role_member26_team',
                'name' => esc_html__( 'Rol 26', 'home-template-metabox' ),
            ],
            [
                'type' => 'image_advanced',
                'id'   => $prefix . 'image_member26_team',
                'name' => esc_html__( 'Foto 26', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'title_member27_team',
                'name' => esc_html__( 'Nombre 27', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'role_member27_team',
                'name' => esc_html__( 'Rol 27', 'home-template-metabox' ),
            ],
            [
                'type' => 'image_advanced',
                'id'   => $prefix . 'image_member27_team',
                'name' => esc_html__( 'Foto 27', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'title_member28_team',
                'name' => esc_html__( 'Nombre 28', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'role_member28_team',
                'name' => esc_html__( 'Rol 28', 'home-template-metabox' ),
            ],
            [
                'type' => 'image_advanced',
                'id'   => $prefix . 'image_member28_team',
                'name' => esc_html__( 'Foto 28', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'title_member29_team',
                'name' => esc_html__( 'Nombre 29', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'role_member29_team',
                'name' => esc_html__( 'Rol 29', 'home-template-metabox' ),
            ],
            [
                'type' => 'image_advanced',
                'id'   => $prefix . 'image_member29_team',
                'name' => esc_html__( 'Foto 29', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'title_member30_team',
                'name' => esc_html__( 'Nombre 30', 'home-template-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'role_member30_team',
                'name' => esc_html__( 'Rol 30', 'home-template-metabox' ),
            ],
            [
                'type' => 'image_advanced',
                'id'   => $prefix . 'image_member30_team',
                'name' => esc_html__( 'Foto 30', 'home-template-metabox' ),
            ],            
        ],
    ];
    
	return $meta_boxes;
}