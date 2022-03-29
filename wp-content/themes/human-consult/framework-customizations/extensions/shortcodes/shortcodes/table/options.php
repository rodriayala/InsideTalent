<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'table'      => array(
		'type'  => 'table',
		'label' => false,
		'desc'  => false,
	),
	'table_type' => array(
		'type'    => 'select',
		'value'   => 'table',
		'label'   => esc_html__( 'Tabular table style', 'human-consult' ),
		'choices' => array(
			'table'                => esc_html__( 'Bootstrap Default', 'human-consult' ),
			'table table-striped'  => esc_html__( 'Bootstrap Striped', 'human-consult' ),
			'table table-bordered' => esc_html__( 'Bootstrap Bordered', 'human-consult' ),
			'table_template grey'  => esc_html__( 'Theme style', 'human-consult' ),

		),
	),
);