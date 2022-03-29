<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'social_icons' => array(
		'type'            => 'addable-box',
		'value'           => '',
		'label'           => esc_html__( 'Social Buttons', 'human-consult' ),
		'desc'            => esc_html__( 'Optional social buttons', 'human-consult' ),
		'template'        => '{{=icon}}',
		'box-options'     => array(
			'icon'       => array(
				'type'  => 'icon',
				'label' => esc_html__( 'Social Icon', 'human-consult' ),
				'set'   => 'social-icons',
			),
			'icon_class' => array(
				'type'        => 'select',
				'value'       => '',
				'label'       => esc_html__( 'Icon type', 'human-consult' ),
				'desc'        => esc_html__( 'Select one of predefined social button types', 'human-consult' ),
				'choices'     => array(
					''                                    => 'Default',
					'border-icon'                         => esc_html__( 'Simple Bordered Icon', 'human-consult' ),
					'border-icon rounded-icon'            => esc_html__( 'Rounded Bordered Icon', 'human-consult' ),
					'bg-icon'                             => esc_html__( 'Simple Background Icon', 'human-consult' ),
					'bg-icon rounded-icon'                => esc_html__( 'Rounded Background Icon', 'human-consult' ),
					'color-icon bg-icon'                  => esc_html__( 'Color Light Background Icon', 'human-consult' ),
					'color-icon bg-icon rounded-icon'     => esc_html__( 'Color Light Background Rounded Icon', 'human-consult' ),
					'color-icon'                          => esc_html__( 'Color Icon', 'human-consult' ),
					'color-icon border-icon'              => esc_html__( 'Color Bordered Icon', 'human-consult' ),
					'color-icon border-icon rounded-icon' => esc_html__( 'Rounded Color Bordered Icon', 'human-consult' ),
					'color-bg-icon'                       => esc_html__( 'Color Background Icon', 'human-consult' ),
					'color-bg-icon rounded-icon'          => esc_html__( 'Rounded Color Background Icon', 'human-consult' ),

				),
				/**
				 * Allow save not existing choices
				 * Useful when you use the select to populate it dynamically from js
				 */
				'no-validate' => false,
			),
			'icon_url'   => array(
				'type'  => 'text',
				'value' => '',
				'label' => esc_html__( 'Icon Link', 'human-consult' ),
				'desc'  => esc_html__( 'Provide a URL to your icon', 'human-consult' ),
			)
		),
		'limit'           => 0, // limit the number of boxes that can be added
		'add-button-text' => esc_html__( 'Add', 'human-consult' ),
		'sortable'        => true,
	)
);