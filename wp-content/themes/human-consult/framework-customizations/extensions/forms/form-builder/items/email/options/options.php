<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'icon' => array(
		'type' => 'icon',
		'label' => esc_html__( 'Icon', 'human-consult' ),
	),
	'icon_color'          => array(
		'label'   => esc_html__( 'Icon Color', 'human-consult' ),
		'desc'    => esc_html__( 'Choose a color for your button', 'human-consult' ),
		'type'    => 'select',
		'choices' => array(
			'color1'  => esc_html__( 'Color 1', 'human-consult' ),
			'color2'  => esc_html__( 'Color 2', 'human-consult' ),
		),
	),
);