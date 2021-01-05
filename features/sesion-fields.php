<?php 

add_filter( 'rwmb_meta_boxes', 'sesiones_register_meta_boxes' );

function sesiones_register_meta_boxes( $meta_boxes ) {
    $prefix = 'ses-mb';

    $meta_boxes[] = [
        'title'      => esc_html__( 'Detalles de la sesion', 'sesiones-metabox' ),
        'id'         => 'sesiones-main',
        'post_types' => ['sesion'],
        'context'    => 'normal',
        'priority'   => 'high',
        'fields'     => [
            [
                'type' => 'heading',
                'name' => esc_html__( 'Contenido principal', 'sesiones-metabox' ),
            ],
            [
                'type' => 'oembed',
                'name' => esc_html__( 'URL del video', 'sesiones-metabox' ),
                'id'   => $prefix . 'oembed_video',
            ],
            [
                'type' => 'file_input',
                'id'   => $prefix . 'file_input_audio',
                'name' => esc_html__( 'Archivo de audio', 'sesiones-metabox' ),
            ],
            [
                'type' => 'file_input',
                'id'   => $prefix . 'file_input_slides',
                'name' => esc_html__( 'Archivo de diapositivas', 'sesiones-metabox' ),
            ],
            [
                'type' => 'divider',
            ],
            [
                'type' => 'heading',
                'name' => esc_html__( 'Otros detalles', 'sesiones-metabox' ),
            ],
            [
                'type' => 'file',
                'id'   => $prefix . 'file_materials',
                'name' => esc_html__( 'Materiales', 'sesiones-metabox' ),
            ],
        ],
    ];
    return $meta_boxes;

}