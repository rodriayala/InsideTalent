<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'style' => array(
		'type'     => 'multi-picker',
		'label'    => false,
		'desc'     => false,
		'picker' => array(
			'ruler_type' => array(
				'type'    => 'select',
				'label'   => esc_html__( 'Ruler Type', 'human-consult' ),
				'desc'    => esc_html__( 'Here you can set the styling and size of the HR element', 'human-consult' ),
				'choices' => array(
					'line'  => esc_html__( 'Line', 'human-consult' ),
					'space' => esc_html__( 'Whitespace', 'human-consult' ),
				)
			)
		),
		'choices'     => array(
			'space' => array(
				'height' => array(
					'label' => esc_html__( 'Height', 'human-consult' ),
					'desc'  => esc_html__( 'How much whitespace do you need? Enter a pixel value. Positive value will increase the whitespace, negative value will reduce it. eg: \'50\', \'-25\', \'200\'', 'human-consult' ),
					'type'  => 'text',
					'value' => '50'
				)
			),
		)
	),
	'responsive'         => array(
		'attr'          => array( 'class' => 'fw-advanced-button' ),
		'type'          => 'popup',
		'label'         => esc_html__( 'Responsive visibility', 'human-consult' ),
		'button'        => esc_html__( 'Settings', 'human-consult' ),
		'size'          => 'medium',
		'popup-options' => array(
			'hidden_lg'     => array(
				'type'    => 'multi-picker',
				'label'   => false,
				'desc'    => false,
				'picker'  => array(
					'selected' => array(
						'type'         => 'switch',
						'value'        => 'yes',
						'label'        => esc_html__( 'Large', 'human-consult' ),
						'desc'         => esc_html__( 'Display on large screen?', 'human-consult' ),
						'left-choice'  => array(
							'value' => 'no',
							'label' => esc_html__( 'No', 'human-consult' ),
						),
						'right-choice' => array(
							'value' => 'yes',
							'label' => esc_html__( 'Yes', 'human-consult' ),
						)
					),
				),
			),
			'hidden_md'     => array(
				'type'    => 'multi-picker',
				'label'   => false,
				'desc'    => false,
				'picker'  => array(
					'selected' => array(
						'type'         => 'switch',
						'value'        => 'yes',
						'label'        => esc_html__( 'Desktop', 'human-consult' ),
						'desc'         => esc_html__( 'Display on desktop?', 'human-consult' ),
						'left-choice'  => array(
							'value' => 'no',
							'label' => esc_html__( 'No', 'human-consult' ),
						),
						'right-choice' => array(
							'value' => 'yes',
							'label' => esc_html__( 'Yes', 'human-consult' ),
						)
					),
				),
			),
			'hidden_sm'     => array(
				'type'    => 'multi-picker',
				'label'   => false,
				'desc'    => false,
				'picker'  => array(
					'selected' => array(
						'type'         => 'switch',
						'value'        => 'yes',
						'label'        => esc_html__( 'Tablet', 'human-consult' ),
						'desc'         => esc_html__( 'Display on tablet?', 'human-consult' ),
						'left-choice'  => array(
							'value' => 'no',
							'label' => esc_html__( 'No', 'human-consult' ),
						),
						'right-choice' => array(
							'value' => 'yes',
							'label' => esc_html__( 'Yes', 'human-consult' ),
						)
					),
				),
			),
			'hidden_xs' => array(
				'type'    => 'multi-picker',
				'label'   => false,
				'desc'    => false,
				'picker'  => array(
					'selected' => array(
						'type'         => 'switch',
						'value'        => 'yes',
						'label'        => esc_html__( 'Small devices', 'human-consult' ),
						'desc'         => esc_html__( 'Display on small devices?', 'human-consult' ),
						'left-choice'  => array(
							'value' => 'no',
							'label' => esc_html__( 'No', 'human-consult' ),
						),
						'right-choice' => array(
							'value' => 'yes',
							'label' => esc_html__( 'Yes', 'human-consult' ),
						)
					),
				),
				'choices' => array(),
			),
		),
	),
);
