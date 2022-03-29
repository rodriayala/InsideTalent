<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'tabs'       => array(
		'type'          => 'addable-popup',
		'label'         => esc_html__( 'Tabs', 'human-consult' ),
		'popup-title'   => esc_html__( 'Add/Edit Tabs', 'human-consult' ),
		'desc'          => esc_html__( 'Create your tabs', 'human-consult' ),
		'template'      => '{{=tab_title}}',
		'popup-options' => array(
			'tab_title'          => array(
				'type'  => 'text',
				'label' => esc_html__( 'Tab Title', 'human-consult' )
			),
			'tab_content'        => array(
				'type'  => 'wp-editor',
				'label' => esc_html__( 'Tab Content', 'human-consult' ),
			),
			'tab_featured_image' => array(
				'type'        => 'upload',
				'value'       => '',
				'label'       => esc_html__( 'Tab Featured Image', 'human-consult' ),
				'image'       => esc_html__( 'Featured image for your tab', 'human-consult' ),
				'help'        => esc_html__( 'Image for your tab. It appears on the top of your tab content', 'human-consult' ),
				'images_only' => true,
			),
			'tab_icon'           => array(
				'type'  => 'icon',
				'label' => esc_html__( 'Icon in tab title', 'human-consult' ),
				'set'   => 'rt-icons-2',
			),
		),
	),
	'small_tabs' => array(
		'type'         => 'switch',
		'value'        => '',
		'label'        => esc_html__( 'Small Tabs', 'human-consult' ),
		'desc'         => esc_html__( 'Decrease tabs size', 'human-consult' ),
		'left-choice'  => array(
			'value' => '',
			'label' => esc_html__( 'No', 'human-consult' ),
		),
		'right-choice' => array(
			'value' => 'small-tabs',
			'label' => esc_html__( 'Yes', 'human-consult' ),
		),
	),
	'top_border' => array(
		'type'         => 'switch',
		'value'        => 'top-color-border',
		'label'        => esc_html__( 'Top color border', 'human-consult' ),
		'desc'         => esc_html__( 'Add top color border to tab content', 'human-consult' ),
		'left-choice'  => array(
			'value' => '',
			'label' => esc_html__( 'No top border', 'human-consult' ),
		),
		'right-choice' => array(
			'value' => 'top-color-border',
			'label' => esc_html__( 'Color top border', 'human-consult' ),
		),
	),
	'id'         => array( 'type' => 'unique' ),
);