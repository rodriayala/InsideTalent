<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'slider_bottomline' => array(
		'type'    => 'multi-picker',
		'label'   => esc_html__( 'Show slider bottom part', 'human-consult' ),
		'desc'    => false,
		'value'   => false,
		'picker'  => array(
			'show_bottomline' => array(
				'type'         => 'switch',
				'label'        => false,
				'left-choice'  => array(
					'value' => 'no',
					'label' => esc_html__( 'No', 'human-consult' ),
				),
				'right-choice' => array(
					'value' => 'yes',
					'label' => esc_html__( 'Yes', 'human-consult' ),
				),
			),
		),
		'choices' => array(
			'yes'       => array(
				'bottomline_text_1' => array(
					'type'  => 'text',
					'value' => esc_html__( 'Call Us 24/7', 'human-consult' ),
					'label' => esc_html__( 'Header text 1', 'human-consult' ),
					'desc'  => esc_html__( 'Location to appear in header', 'human-consult' ),
					'help'  => esc_html__( 'Not all headers display this info', 'human-consult' ),
				),
				'bottomline_subtext_1' => array(
					'type'  => 'text',
					'value' => esc_html__( '+123-456-7890', 'human-consult' ),
					'label' => false,
					'desc'  => false,
				),
				'bottomline_text_2' => array(
					'type'  => 'text',
					'value' => esc_html__( 'Email Address', 'human-consult' ),
					'label' => esc_html__( 'Header text 2', 'human-consult' ),
					'desc'  => esc_html__( 'Location to appear in header', 'human-consult' ),
					'help'  => esc_html__( 'Not all headers display this info', 'human-consult' ),
				),
				'bottomline_subtext_2' => array(
					'type'  => 'text',
					'value' => esc_html__( 'example@example.com', 'human-consult' ),
					'label' => false,
					'desc'  => false,
				),
				'bottomline_text_3' => array(
					'type'  => 'text',
					'value' => esc_html__( 'Open Hours', 'human-consult' ),
					'label' => esc_html__( 'Header text 3', 'human-consult' ),
					'desc'  => esc_html__( 'Location to appear in header', 'human-consult' ),
					'help'  => esc_html__( 'Not all headers display this info', 'human-consult' ),
				),
				'bottomline_subtext_3' => array(
					'type'  => 'text',
					'value' => esc_html__( 'Daily 9:00-20:00', 'human-consult' ),
					'label' => false,
					'desc'  => false,
				),
			),
		),
	),
);