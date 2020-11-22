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

add_filter( 'rwmb_meta_boxes', 'mediciones_register_meta_boxes' );

function mediciones_register_meta_boxes( $meta_boxes ) {
    $prefix = 'med-mb';

    $meta_boxes[] = [
        'title'      => esc_html__( 'Detalles de la medicion', 'mediciones-metabox' ),
        'id'         => 'mediciones-main',
        'post_types' => ['medicion'],
        'context'    => 'normal',
        'priority'   => 'high',
        'autosave'   => true,
        'fields'     => [
            [
                'type' => 'text',
                'id'   => $prefix . 'text_intem_1',
                'name' => esc_html__( 'Reactivo 1', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'text_intem_2',
                'name' => esc_html__( 'Reactivo 2', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'text_intem_3',
                'name' => esc_html__( 'Reactivo 3', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'text_intem_4',
                'name' => esc_html__( 'Reactivo 4', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'text_intem_5',
                'name' => esc_html__( 'Reactivo 5', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'text_intem_6',
                'name' => esc_html__( 'Reactivo 6', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'text_intem_7',
                'name' => esc_html__( 'Reactivo 7', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'text_intem_8',
                'name' => esc_html__( 'Reactivo 8', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'text_intem_9',
                'name' => esc_html__( 'Reactivo 9', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'text_intem_10',
                'name' => esc_html__( 'Reactivo 10', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'text_intem_11',
                'name' => esc_html__( 'Reactivo 11', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'text_intem_12',
                'name' => esc_html__( 'Reactivo 12', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'text_intem_13',
                'name' => esc_html__( 'Reactivo 13', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'text_intem_14',
                'name' => esc_html__( 'Reactivo 14', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'text_intem_15',
                'name' => esc_html__( 'Reactivo 15', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'text_intem_16',
                'name' => esc_html__( 'Reactivo 16', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'text_intem_17',
                'name' => esc_html__( 'Reactivo 17', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'text_intem_18',
                'name' => esc_html__( 'Reactivo 18', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'text_intem_19',
                'name' => esc_html__( 'Reactivo 19', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'text_intem_20',
                'name' => esc_html__( 'Reactivo 20', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'text_intem_21',
                'name' => esc_html__( 'Reactivo 21', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'text_intem_22',
                'name' => esc_html__( 'Reactivo 22', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'text_intem_23',
                'name' => esc_html__( 'Reactivo 23', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'text_intem_24',
                'name' => esc_html__( 'Reactivo 24', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'text_intem_25',
                'name' => esc_html__( 'Reactivo 25', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'text_intem_26',
                'name' => esc_html__( 'Reactivo 26', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'text_intem_27',
                'name' => esc_html__( 'Reactivo 27', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'text_intem_28',
                'name' => esc_html__( 'Reactivo 28', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'text_intem_29',
                'name' => esc_html__( 'Reactivo 29', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'text_intem_30',
                'name' => esc_html__( 'Reactivo 30', 'mediciones-metabox' ),
            ],            
        ],
    ];

    return $meta_boxes;
}