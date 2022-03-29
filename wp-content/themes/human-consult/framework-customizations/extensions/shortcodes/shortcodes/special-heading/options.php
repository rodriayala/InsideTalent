<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'heading_align' => array(
		'type'    => 'select',
		'value'   => 'text-left',
		'label'   => esc_html__( 'Text alignment', 'human-consult' ),
		'desc'    => esc_html__( 'Select heading text alignment', 'human-consult' ),
		'choices' => array(
			'text-left'   => esc_html__( 'Left', 'human-consult' ),
			'text-center' => esc_html__( 'Center', 'human-consult' ),
			'text-right'  => esc_html__( 'Right', 'human-consult' ),
		),
	),
	'headings'      => array(
		'type'        => 'addable-box',
		'value'       => '',
		'label'       => esc_html__( 'Headings', 'human-consult' ),
		'desc'        => esc_html__( 'Choose a tag and text inside it', 'human-consult' ),
		'box-options' => array(
			'heading_tag'            => array(
				'type'    => 'select',
				'value'   => 'h3',
				'label'   => esc_html__( 'Heading tag', 'human-consult' ),
				'desc'    => esc_html__( 'Select a tag for your ', 'human-consult' ),
				'choices' => array(
					'h2' => esc_html__( 'H2 tag', 'human-consult' ),
					'h3' => esc_html__( 'H3 tag', 'human-consult' ),
					'h4' => esc_html__( 'H4 tag', 'human-consult' ),
					'h5' => esc_html__( 'H5 tag', 'human-consult' ),
					'p'  => esc_html__( 'P tag', 'human-consult' ),

				),
			),
			'heading_text'           => array(
				'type'  => 'text',
				'value' => '',
				'label' => esc_html__( 'Heading text', 'human-consult' ),
				'desc'  => esc_html__( 'Text to appear in slide layer', 'human-consult' ),
			),
			'heading_text_color'     => array(
				'type'    => 'select',
				'value'   => '',
				'label'   => esc_html__( 'Heading text color', 'human-consult' ),
				'desc'    => esc_html__( 'Select a color for your text in layer', 'human-consult' ),
				'choices' => array(
					''           => 'Inherited',
					'highlight'  => esc_html__( 'First main color', 'human-consult' ),
					'highlight2' => esc_html__( 'Second main color', 'human-consult' ),
					'lightfont'  => esc_html__( 'Light color', 'human-consult' ),
					'black'      => esc_html__( 'Dark color', 'human-consult' ),
					'grey'       => esc_html__( 'Grey color', 'human-consult' ),
				),
			),
			'heading_text_weight'    => array(
				'type'    => 'select',
				'value'   => 'medium',
				'label'   => esc_html__( 'Heading text weight', 'human-consult' ),
				'desc'    => esc_html__( 'Select a weight for your text in layer', 'human-consult' ),
				'choices' => array(
					'extra-thin' => esc_html__( 'Extra Thin', 'human-consult' ),
					'thin' => esc_html__( 'Thin', 'human-consult' ),
					'regular'     => esc_html__( 'Normal', 'human-consult' ),
					'medium'     => esc_html__( 'Medium', 'human-consult' ),
					'bold' => esc_html__( 'Bold', 'human-consult' ),
				),
			),
			'heading_text_transform' => array(
				'type'    => 'select',
				'value'   => 'text-uppercase',
				'label'   => esc_html__( 'Heading text transform', 'human-consult' ),
				'desc'    => esc_html__( 'Select a weight for your text in layer', 'human-consult' ),
				'choices' => array(
					'text-transform-none'                => 'None',
					'text-lowercase'  => esc_html__( 'Lowercase', 'human-consult' ),
					'text-uppercase'  => esc_html__( 'Uppercase', 'human-consult' ),
					'text-capitalize' => esc_html__( 'Capitalize', 'human-consult' ),
				),
			),
			'heading_custom_class' => array(
				'type'  => 'text',
				'value' => '',
				'label' => esc_html__( 'Heading custom class', 'human-consult' ),
				'desc'  => esc_html__( 'Add heading custom css class', 'human-consult' ),
			),
		),
		'template'    => '{{- heading_text }}',
	)
);
