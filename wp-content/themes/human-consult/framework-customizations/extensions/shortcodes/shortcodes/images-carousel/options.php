<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(

	'items'         => array(
		'type'            => 'addable-box',
		'value'           => '',
		'label'           => esc_html__( 'Carousel items', 'human-consult' ),
		'box-options'     => array(
			'image' => array(
				'type'        => 'upload',
				'value'       => '',
				'label'       => esc_html__( 'Image', 'human-consult' ),
				'images_only' => true,
			),
			'url'   => array(
				'type'  => 'text',
				'value' => '',
				'label' => esc_html__( 'Image link', 'human-consult' ),
			),
			'title' => array(
				'type'  => 'text',
				'value' => '',
				'label' => esc_html__( 'Title and Alt text', 'human-consult' ),
			),
		),
		'template'        => '{{=image.url}}',
		'limit'           => 0, // limit the number of boxes that can be added
		'add-button-text' => esc_html__( 'Add', 'human-consult' ),
		'sortable'        => true,
	),
	'loop'          => array(
		'type'         => 'switch',
		'value'        => 'false',
		'label'        => esc_html__( 'Loop carousel', 'human-consult' ),
		'left-choice'  => array(
			'value' => 'false',
			'label' => esc_html__( 'No', 'human-consult' ),
		),
		'right-choice' => array(
			'value' => 'true',
			'label' => esc_html__( 'Yes', 'human-consult' ),
		),
	),
	'nav'           => array(
		'type'         => 'switch',
		'value'        => 'false',
		'label'        => esc_html__( 'Show Arrows', 'human-consult' ),
		'left-choice'  => array(
			'value' => 'false',
			'label' => esc_html__( 'No', 'human-consult' ),
		),
		'right-choice' => array(
			'value' => 'true',
			'label' => esc_html__( 'Yes', 'human-consult' ),
		),
	),
	'dots'          => array(
		'type'         => 'switch',
		'value'        => 'false',
		'label'        => esc_html__( 'Show Nav', 'human-consult' ),
		'left-choice'  => array(
			'value' => 'false',
			'label' => esc_html__( 'No', 'human-consult' ),
		),
		'right-choice' => array(
			'value' => 'true',
			'label' => esc_html__( 'Yes', 'human-consult' ),
		),
	),
	'center'        => array(
		'type'         => 'switch',
		'value'        => 'false',
		'label'        => esc_html__( 'Center carousel', 'human-consult' ),
		'left-choice'  => array(
			'value' => 'false',
			'label' => esc_html__( 'No', 'human-consult' ),
		),
		'right-choice' => array(
			'value' => 'true',
			'label' => esc_html__( 'Yes', 'human-consult' ),
		),
	),
	'autoplay'      => array(
		'type'         => 'switch',
		'value'        => 'false',
		'label'        => esc_html__( 'Autoplay', 'human-consult' ),
		'left-choice'  => array(
			'value' => 'false',
			'label' => esc_html__( 'No', 'human-consult' ),
		),
		'right-choice' => array(
			'value' => 'true',
			'label' => esc_html__( 'Yes', 'human-consult' ),
		),
	),
	'responsive_lg' => array(
		'type'        => 'select',
		'value'       => '4',
		'label'       => esc_html__( 'Items count on <1200px', 'human-consult' ),
		'choices'     => array(
			'4' => '4',
			'3' => '3',
			'2' => '2',
			'5' => '5',
			'6' => '6',
			'7' => '7',
			'8' => '8',
			'9' => '9',
			'1' => '1',

		),
		'no-validate' => false,
	),
	'responsive_md' => array(
		'type'        => 'select',
		'value'       => '4',
		'label'       => esc_html__( 'Items count on 992px-1200px', 'human-consult' ),
		'choices'     => array(
			'3' => '3',
			'4' => '4',
			'2' => '2',
			'5' => '5',
			'6' => '6',
			'1' => '1',

		),
		'no-validate' => false,
	),
	'responsive_sm' => array(
		'type'        => 'select',
		'value'       => '3',
		'label'       => esc_html__( 'Items count on 768px-992px', 'human-consult' ),
		'choices'     => array(
			'3' => '3',
			'2' => '2',
			'1' => '1',
			'4' => '4',
			'5' => '5',
			'6' => '6',

		),
		'no-validate' => false,
	),
	'responsive_xs' => array(
		'type'        => 'select',
		'value'       => '2',
		'label'       => esc_html__( 'Items count on >768px', 'human-consult' ),
		'choices'     => array(
			'2' => '2',
			'1' => '1',
			'3' => '3',
			'4' => '4',
			'5' => '5',
			'6' => '6',

		),
		'no-validate' => false,
	),
	'margin'        => array(
		'type'        => 'select',
		'value'       => '30',
		'label'       => esc_html__( 'Margin between items', 'human-consult' ),
		'choices'     => array(
			'30' => '30px',
			'0'  => '0px',
			'5'  => '5px',
			'10' => '10px',
			'15' => '15px',
			'20' => '20px',

		),
		'no-validate' => false,
	),

);