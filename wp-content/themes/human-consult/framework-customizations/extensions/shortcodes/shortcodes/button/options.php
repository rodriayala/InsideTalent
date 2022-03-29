<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'label'       => array(
		'label' => esc_html__( 'Button Label', 'human-consult' ),
		'desc'  => esc_html__( 'This is the text that appears on your button', 'human-consult' ),
		'type'  => 'text',
		'value' => 'Submit'
	),
	'link'        => array(
		'label' => esc_html__( 'Button Link', 'human-consult' ),
		'desc'  => esc_html__( 'Where should your button link to', 'human-consult' ),
		'type'  => 'text',
		'value' => '#'
	),
	'target'      => array(
		'type'         => 'switch',
		'label'        => esc_html__( 'Open Link in New Window', 'human-consult' ),
		'desc'         => esc_html__( 'Select here if you want to open the linked page in a new window', 'human-consult' ),
		'right-choice' => array(
			'value' => '_blank',
			'label' => esc_html__( 'Yes', 'human-consult' ),
		),
		'left-choice'  => array(
			'value' => '_self',
			'label' => esc_html__( 'No', 'human-consult' ),
		),
	),
	'size'      => array(
		'type'         => 'switch',
		'label'        => esc_html__( 'Button size', 'human-consult' ),
		'desc'         => esc_html__( 'Select button size', 'human-consult' ),
		'value' => '',
		'right-choice' => array(
			'value' => '',
			'label' => esc_html__( 'Normal', 'human-consult' ),
		),
		'left-choice'  => array(
			'value' => 'wide_button',
			'label' => esc_html__( 'Large', 'human-consult' ),
		),
	),
	'type'       => array(
		'label'   => esc_html__( 'Button Type', 'human-consult' ),
		'desc'    => esc_html__( 'Choose a type for your button', 'human-consult' ),
		'type'    => 'select',
		'choices' => array(
			'theme_button'  => esc_html__( 'Color', 'human-consult' ),
			'theme_button inverse' => esc_html__( 'Inverse', 'human-consult' ),
			'simple_link'          => esc_html__( 'Just link', 'human-consult' ),
		)
	),
	'color'       => array(
		'label'   => esc_html__( 'Button Color', 'human-consult' ),
		'desc'    => esc_html__( 'Choose a type for your button', 'human-consult' ),
		'type'    => 'select',
		'choices' => array(
			'color1'  => esc_html__( 'Color 1', 'human-consult' ),
			'color2'  => esc_html__( 'Color 2', 'human-consult' ),
		)
	),
);