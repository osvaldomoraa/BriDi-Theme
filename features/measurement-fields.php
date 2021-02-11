<?php 

add_action( 'cmb2_init', 'mediciones_register_meta_boxes' );
function mediciones_register_meta_boxes() {

	$prefix = 'med_mb_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'mediciones_main',
		'title'        => __( 'Detalles de la medicion', 'cmb2' ),
		'object_types' => array( 'medicion' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 1', 'cmb2' ),
		'id' => $prefix . 'item_1',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 2', 'cmb2' ),
		'id' => $prefix . 'item_2',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 3', 'cmb2' ),
		'id' => $prefix . 'item_3',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 4', 'cmb2' ),
		'id' => $prefix . 'item_4',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 5', 'cmb2' ),
		'id' => $prefix . 'item_5',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 6', 'cmb2' ),
		'id' => $prefix . 'item_6',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 7', 'cmb2' ),
		'id' => $prefix . 'item_7',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 8', 'cmb2' ),
		'id' => $prefix . 'item_8',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 9', 'cmb2' ),
		'id' => $prefix . 'item_9',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 10', 'cmb2' ),
		'id' => $prefix . 'item_10',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 11', 'cmb2' ),
		'id' => $prefix . 'item_11',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 12', 'cmb2' ),
		'id' => $prefix . 'item_12',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 13', 'cmb2' ),
		'id' => $prefix . 'item_13',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 14', 'cmb2' ),
		'id' => $prefix . 'item_14',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 15', 'cmb2' ),
		'id' => $prefix . 'item_15',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 16', 'cmb2' ),
		'id' => $prefix . 'item_16',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 17', 'cmb2' ),
		'id' => $prefix . 'item_17',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 18', 'cmb2' ),
		'id' => $prefix . 'item_18',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 19', 'cmb2' ),
		'id' => $prefix . 'item_19',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 20', 'cmb2' ),
		'id' => $prefix . 'item_20',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 21', 'cmb2' ),
		'id' => $prefix . 'item_21',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 22', 'cmb2' ),
		'id' => $prefix . 'item_22',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 23', 'cmb2' ),
		'id' => $prefix . 'item_23',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 24', 'cmb2' ),
		'id' => $prefix . 'item_24',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 25', 'cmb2' ),
		'id' => $prefix . 'item_25',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 26', 'cmb2' ),
		'id' => $prefix . 'item_26',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 27', 'cmb2' ),
		'id' => $prefix . 'item_27',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 28', 'cmb2' ),
		'id' => $prefix . 'item_28',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 29', 'cmb2' ),
		'id' => $prefix . 'item_29',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 30', 'cmb2' ),
		'id' => $prefix . 'item_30',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 31', 'cmb2' ),
		'id' => $prefix . 'item_31',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 32', 'cmb2' ),
		'id' => $prefix . 'item_32',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 33', 'cmb2' ),
		'id' => $prefix . 'item_33',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 34', 'cmb2' ),
		'id' => $prefix . 'item_34',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 35', 'cmb2' ),
		'id' => $prefix . 'item_35',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 36', 'cmb2' ),
		'id' => $prefix . 'item_36',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 37', 'cmb2' ),
		'id' => $prefix . 'item_37',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 38', 'cmb2' ),
		'id' => $prefix . 'item_38',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 39', 'cmb2' ),
		'id' => $prefix . 'item_39',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 40', 'cmb2' ),
		'id' => $prefix . 'item_40',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 41', 'cmb2' ),
		'id' => $prefix . 'item_41',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 42', 'cmb2' ),
		'id' => $prefix . 'item_42',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 43', 'cmb2' ),
		'id' => $prefix . 'item_43',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 44', 'cmb2' ),
		'id' => $prefix . 'item_44',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 45', 'cmb2' ),
		'id' => $prefix . 'item_45',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 46', 'cmb2' ),
		'id' => $prefix . 'item_46',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 47', 'cmb2' ),
		'id' => $prefix . 'item_47',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 48', 'cmb2' ),
		'id' => $prefix . 'item_48',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 49', 'cmb2' ),
		'id' => $prefix . 'item_49',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 50', 'cmb2' ),
		'id' => $prefix . 'item_50',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 51', 'cmb2' ),
		'id' => $prefix . 'item_51',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 52', 'cmb2' ),
		'id' => $prefix . 'item_52',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 53', 'cmb2' ),
		'id' => $prefix . 'item_53',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 54', 'cmb2' ),
		'id' => $prefix . 'item_54',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 55', 'cmb2' ),
		'id' => $prefix . 'item_55',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 56', 'cmb2' ),
		'id' => $prefix . 'item_56',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 57', 'cmb2' ),
		'id' => $prefix . 'item_57',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 58', 'cmb2' ),
		'id' => $prefix . 'item_58',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 59', 'cmb2' ),
		'id' => $prefix . 'item_59',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 60', 'cmb2' ),
		'id' => $prefix . 'item_60',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 61', 'cmb2' ),
		'id' => $prefix . 'item_61',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 62', 'cmb2' ),
		'id' => $prefix . 'item_62',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 63', 'cmb2' ),
		'id' => $prefix . 'item_63',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 64', 'cmb2' ),
		'id' => $prefix . 'item_64',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 65', 'cmb2' ),
		'id' => $prefix . 'item_65',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 66', 'cmb2' ),
		'id' => $prefix . 'item_66',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 67', 'cmb2' ),
		'id' => $prefix . 'item_67',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 68', 'cmb2' ),
		'id' => $prefix . 'item_68',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 69', 'cmb2' ),
		'id' => $prefix . 'item_69',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 70', 'cmb2' ),
		'id' => $prefix . 'item_70',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 71', 'cmb2' ),
		'id' => $prefix . 'item_71',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 72', 'cmb2' ),
		'id' => $prefix . 'item_72',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 73', 'cmb2' ),
		'id' => $prefix . 'item_73',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 74', 'cmb2' ),
		'id' => $prefix . 'item_74',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 75', 'cmb2' ),
		'id' => $prefix . 'item_75',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 76', 'cmb2' ),
		'id' => $prefix . 'item_76',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 77', 'cmb2' ),
		'id' => $prefix . 'item_77',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 78', 'cmb2' ),
		'id' => $prefix . 'item_78',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 79', 'cmb2' ),
		'id' => $prefix . 'item_79',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 80', 'cmb2' ),
		'id' => $prefix . 'item_80',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 81', 'cmb2' ),
		'id' => $prefix . 'item_81',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 82', 'cmb2' ),
		'id' => $prefix . 'item_82',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 83', 'cmb2' ),
		'id' => $prefix . 'item_83',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 84', 'cmb2' ),
		'id' => $prefix . 'item_84',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 85', 'cmb2' ),
		'id' => $prefix . 'item_85',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 86', 'cmb2' ),
		'id' => $prefix . 'item_86',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 87', 'cmb2' ),
		'id' => $prefix . 'item_87',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 88', 'cmb2' ),
		'id' => $prefix . 'item_88',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 89', 'cmb2' ),
		'id' => $prefix . 'item_89',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 90', 'cmb2' ),
		'id' => $prefix . 'item_90',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 91', 'cmb2' ),
		'id' => $prefix . 'item_91',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 92', 'cmb2' ),
		'id' => $prefix . 'item_92',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 93', 'cmb2' ),
		'id' => $prefix . 'item_93',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 94', 'cmb2' ),
		'id' => $prefix . 'item_94',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 95', 'cmb2' ),
		'id' => $prefix . 'item_95',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 96', 'cmb2' ),
		'id' => $prefix . 'item_96',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 97', 'cmb2' ),
		'id' => $prefix . 'item_97',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 98', 'cmb2' ),
		'id' => $prefix . 'item_98',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 99', 'cmb2' ),
		'id' => $prefix . 'item_99',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Reactivo 100', 'cmb2' ),
		'id' => $prefix . 'item_100',
		'type' => 'text',
	) );

}