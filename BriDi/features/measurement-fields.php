<?php 

add_filter( 'rwmb_meta_boxes', 'mediciones_register_meta_boxes' );

function mediciones_register_meta_boxes( $meta_boxes ) {
    $prefix = 'med_mb';

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
                'id'   => $prefix . '_item_1',
                'name' => esc_html__( 'Reactivo 1', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_2',
                'name' => esc_html__( 'Reactivo 2', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_3',
                'name' => esc_html__( 'Reactivo 3', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_4',
                'name' => esc_html__( 'Reactivo 4', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_5',
                'name' => esc_html__( 'Reactivo 5', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_6',
                'name' => esc_html__( 'Reactivo 6', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_7',
                'name' => esc_html__( 'Reactivo 7', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_8',
                'name' => esc_html__( 'Reactivo 8', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_9',
                'name' => esc_html__( 'Reactivo 9', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_10',
                'name' => esc_html__( 'Reactivo 10', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_11',
                'name' => esc_html__( 'Reactivo 11', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_12',
                'name' => esc_html__( 'Reactivo 12', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_13',
                'name' => esc_html__( 'Reactivo 13', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_14',
                'name' => esc_html__( 'Reactivo 14', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_15',
                'name' => esc_html__( 'Reactivo 15', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_16',
                'name' => esc_html__( 'Reactivo 16', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_17',
                'name' => esc_html__( 'Reactivo 17', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_18',
                'name' => esc_html__( 'Reactivo 18', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_19',
                'name' => esc_html__( 'Reactivo 19', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_20',
                'name' => esc_html__( 'Reactivo 20', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_21',
                'name' => esc_html__( 'Reactivo 21', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_22',
                'name' => esc_html__( 'Reactivo 22', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_23',
                'name' => esc_html__( 'Reactivo 23', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_24',
                'name' => esc_html__( 'Reactivo 24', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_25',
                'name' => esc_html__( 'Reactivo 25', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_26',
                'name' => esc_html__( 'Reactivo 26', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_27',
                'name' => esc_html__( 'Reactivo 27', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_28',
                'name' => esc_html__( 'Reactivo 28', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_29',
                'name' => esc_html__( 'Reactivo 29', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_30',
                'name' => esc_html__( 'Reactivo 30', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_31',
                'name' => esc_html__( 'Reactivo 31', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_32',
                'name' => esc_html__( 'Reactivo 32', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_33',
                'name' => esc_html__( 'Reactivo 33', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_34',
                'name' => esc_html__( 'Reactivo 34', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_35',
                'name' => esc_html__( 'Reactivo 35', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_36',
                'name' => esc_html__( 'Reactivo 36', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_37',
                'name' => esc_html__( 'Reactivo 37', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_38',
                'name' => esc_html__( 'Reactivo 38', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_39',
                'name' => esc_html__( 'Reactivo 39', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_40',
                'name' => esc_html__( 'Reactivo 40', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_41',
                'name' => esc_html__( 'Reactivo 41', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_42',
                'name' => esc_html__( 'Reactivo 42', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_43',
                'name' => esc_html__( 'Reactivo 43', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_44',
                'name' => esc_html__( 'Reactivo 44', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_45',
                'name' => esc_html__( 'Reactivo 45', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_46',
                'name' => esc_html__( 'Reactivo 46', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_47',
                'name' => esc_html__( 'Reactivo 47', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_48',
                'name' => esc_html__( 'Reactivo 48', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_49',
                'name' => esc_html__( 'Reactivo 49', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_50',
                'name' => esc_html__( 'Reactivo 50', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_51',
                'name' => esc_html__( 'Reactivo 51', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_52',
                'name' => esc_html__( 'Reactivo 52', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_53',
                'name' => esc_html__( 'Reactivo 53', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_54',
                'name' => esc_html__( 'Reactivo 54', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_55',
                'name' => esc_html__( 'Reactivo 55', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_56',
                'name' => esc_html__( 'Reactivo 56', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_57',
                'name' => esc_html__( 'Reactivo 57', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_58',
                'name' => esc_html__( 'Reactivo 58', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_59',
                'name' => esc_html__( 'Reactivo 59', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_60',
                'name' => esc_html__( 'Reactivo 60', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_61',
                'name' => esc_html__( 'Reactivo 61', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_62',
                'name' => esc_html__( 'Reactivo 62', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_63',
                'name' => esc_html__( 'Reactivo 63', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_64',
                'name' => esc_html__( 'Reactivo 64', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_65',
                'name' => esc_html__( 'Reactivo 65', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_66',
                'name' => esc_html__( 'Reactivo 66', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_67',
                'name' => esc_html__( 'Reactivo 67', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_68',
                'name' => esc_html__( 'Reactivo 68', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_69',
                'name' => esc_html__( 'Reactivo 69', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_70',
                'name' => esc_html__( 'Reactivo 70', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_71',
                'name' => esc_html__( 'Reactivo 71', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_72',
                'name' => esc_html__( 'Reactivo 72', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_73',
                'name' => esc_html__( 'Reactivo 73', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_74',
                'name' => esc_html__( 'Reactivo 74', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_75',
                'name' => esc_html__( 'Reactivo 75', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_76',
                'name' => esc_html__( 'Reactivo 76', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_77',
                'name' => esc_html__( 'Reactivo 77', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_78',
                'name' => esc_html__( 'Reactivo 78', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_79',
                'name' => esc_html__( 'Reactivo 79', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_80',
                'name' => esc_html__( 'Reactivo 80', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_81',
                'name' => esc_html__( 'Reactivo 81', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_82',
                'name' => esc_html__( 'Reactivo 82', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_83',
                'name' => esc_html__( 'Reactivo 83', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_84',
                'name' => esc_html__( 'Reactivo 84', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_85',
                'name' => esc_html__( 'Reactivo 85', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_86',
                'name' => esc_html__( 'Reactivo 86', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_87',
                'name' => esc_html__( 'Reactivo 87', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_88',
                'name' => esc_html__( 'Reactivo 88', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_89',
                'name' => esc_html__( 'Reactivo 89', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_90',
                'name' => esc_html__( 'Reactivo 90', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_91',
                'name' => esc_html__( 'Reactivo 91', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_92',
                'name' => esc_html__( 'Reactivo 92', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_93',
                'name' => esc_html__( 'Reactivo 93', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_94',
                'name' => esc_html__( 'Reactivo 94', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_95',
                'name' => esc_html__( 'Reactivo 95', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_96',
                'name' => esc_html__( 'Reactivo 96', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_97',
                'name' => esc_html__( 'Reactivo 97', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_98',
                'name' => esc_html__( 'Reactivo 98', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_99',
                'name' => esc_html__( 'Reactivo 99', 'mediciones-metabox' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . '_item_100',
                'name' => esc_html__( 'Reactivo 100', 'mediciones-metabox' ),
            ],           
        ],
    ];

    return $meta_boxes;
}