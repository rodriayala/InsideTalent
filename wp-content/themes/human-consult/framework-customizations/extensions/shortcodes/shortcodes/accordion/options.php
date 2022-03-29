<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'tabs' => array(
		'type'          => 'addable-popup',
		'label'         => esc_html__( 'Panels', 'human-consult' ),
		'popup-title'   => esc_html__( 'Add/Edit Accordion Panels', 'human-consult' ),
		'desc'          => esc_html__( 'Create your accordion panels', 'human-consult' ),
		'template'      => '{{=tab_title}}',
		'popup-options' => array(
			'tab_title'          => array(
				'type'  => 'text',
				'label' => esc_html__( 'Title', 'human-consult' )
			),
			'tab_content'        => array(
				'type'  => 'textarea',
				'label' => esc_html__( 'Content', 'human-consult' )
			),
			'tab_featured_image' => array(
				'type'        => 'upload',
				'value'       => '',
				'label'       => esc_html__( 'Panel Featured Image', 'human-consult' ),
				'image'       => esc_html__( 'Image for your panel.', 'human-consult' ),
				'help'        => esc_html__( 'It appears to the left from your content', 'human-consult' ),
				'images_only' => true,
			),
			'tab_icon'           => array(
				'type'  => 'icon',
				'label' => esc_html__( 'Icon in panel title', 'human-consult' ),
				'set'   => 'rt-icons-2',
			),
		)
	),
	'id'   => array( 'type' => 'unique' ),
);