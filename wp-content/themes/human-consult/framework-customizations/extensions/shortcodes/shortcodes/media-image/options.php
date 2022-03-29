<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'image'            => array(
		'type'  => 'upload',
		'label' => esc_html__( 'Choose Image', 'human-consult' ),
		'desc'  => esc_html__( 'Either upload a new, or choose an existing image from your media library', 'human-consult' )
	),
	'size'             => array(
		'type'    => 'group',
		'options' => array(
			'width'  => array(
				'type'  => 'text',
				'label' => esc_html__( 'Width', 'human-consult' ),
				'desc'  => esc_html__( 'Set image width', 'human-consult' ),
				'value' => 300
			),
			'height' => array(
				'type'  => 'text',
				'label' => esc_html__( 'Height', 'human-consult' ),
				'desc'  => esc_html__( 'Set image height', 'human-consult' ),
				'value' => 200
			)
		)
	),
	'image-link-group' => array(
		'type'    => 'group',
		'options' => array(
			'link'   => array(
				'type'  => 'text',
				'label' => esc_html__( 'Image Link', 'human-consult' ),
				'desc'  => esc_html__( 'Where should your image link to?', 'human-consult' )
			),
			'target' => array(
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

