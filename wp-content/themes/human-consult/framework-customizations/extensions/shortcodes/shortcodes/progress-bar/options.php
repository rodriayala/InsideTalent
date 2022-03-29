<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(

	'title' => array(
		'type'       => 'text',
		'value'      => '',
		'label'      => esc_html__( 'Progress Bar title', 'human-consult' ),
	),
	'percent' => array(
		'type'       => 'slider',
		'value'      => 80,
		'properties' => array(
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		),
		'label'      => esc_html__( 'Count To', 'human-consult' ),
		'desc'       => esc_html__( 'Choose percent to count to', 'human-consult' ),
	),
	'background_class' => array(
		'type'    => 'select',
		'value'   => 'progress-bar-success',
		'label'   => esc_html__( 'Context background color', 'human-consult' ),
		'desc'    => esc_html__( 'Select one of predefined background colors', 'human-consult' ),
		'choices' => array(
			'' => esc_html__( 'Default', 'human-consult' ),
			'progress-bar-success' => esc_html__( 'Success', 'human-consult' ),
			'progress-bar-info'    => esc_html__( 'Info', 'human-consult' ),
			'progress-bar-warning' => esc_html__( 'Warning', 'human-consult' ),
			'progress-bar-danger'  => esc_html__( 'Danger', 'human-consult' ),
		),
	),
);