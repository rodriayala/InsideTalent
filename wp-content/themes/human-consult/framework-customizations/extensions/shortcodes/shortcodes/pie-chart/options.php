<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(

	'size' => array(
		'type'       => 'slider',
		'value'      => 240,
		'properties' => array(
			'min'  => 150,
			'max'  => 350,
			'step' => 10,
		),
		'label'      => esc_html__( 'Chart Size (px)', 'human-consult' ),
	),

	'line' => array(
		'type'       => 'slider',
		'value'      => 5,
		'properties' => array(
			'min'  => 1,
			'max'  => 40,
			'step' => 1,
		),
		'label'      => esc_html__( 'Chart Size (px)', 'human-consult' ),
	),

	'trackcolor' => array(
		'type'  => 'color-picker',
		'value' => '#736fb3',
		// palette colors array
		// 'palettes' => array( '#ba4e4e', '#0ce9ed', '#941940' ),
		'label' => esc_html__( 'Bar Color', 'human-consult' ),
	),

	'bgcolor' => array(
		'type'  => 'color-picker',
		'value' => '#e5e5e5',
		'label' => esc_html__( 'Track Color', 'human-consult' ),
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
	'speed'   => array(
		'type'       => 'slider',
		'value'      => 1000,
		'properties' => array(
			'min'  => 500,
			'max'  => 5000,
			'step' => 100,
		),
		'label'      => esc_html__( 'Percents Counter Speed', 'human-consult' ),
		'desc'       => esc_html__( 'Choose counter speed (in milliseconds)', 'human-consult' ),
	),
	'name'    => array(
		'type'  => 'text',
		'label' => esc_html__( 'Chart Name', 'human-consult' ),
		'desc'  => esc_html__( 'Appears below percents number', 'human-consult' ),
	),
);