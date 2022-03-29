<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$map_shortcode = fw_ext('shortcodes')->get_shortcode('map');
$options = array(
	'data_provider' => array(
		'type'  => 'multi-picker',
		'label' => false,
		'desc'  => false,
		'picker' => array(
			'population_method' => array(
				'label'   => esc_html__('Population Method', 'human-consult'),
				'desc'    => esc_html__( 'Select map population method (Ex: events, custom)', 'human-consult' ),
				'type'    => 'select',
				'choices' => $map_shortcode->_get_picker_dropdown_choices(),
			)
		),
		'choices' => $map_shortcode->_get_picker_choices(),
		'show_borders' => false,
	),
	'gmap-key' => array_merge(
		array(
			'label' => esc_html__( 'Google Maps API Key', 'human-consult' ),
			'desc' => sprintf(
				esc_html__( 'Create an application in %sGoogle Console%s and add the Key here.', 'human-consult' ),
				'<a href="https://console.developers.google.com/flows/enableapi?apiid=places_backend,maps_backend,geocoding_backend,directions_backend,distance_matrix_backend,elevation_backend&keyType=CLIENT_SIDE&reusekey=true">',
				'</a>'
			),
		),
		version_compare(fw()->manifest->get_version(), '2.5.7', '>=')
		? array(
			'type' => 'gmap-key',
		)
		: array(
			'type' => 'text',
			'fw-storage' => array(
				'type'      => 'wp-option',
				'wp_option' => 'fw-option-types:gmap-key',
			),
		)
	),
	'map_type' => array(
		'type'  => 'select',
		'label' => esc_html__('Map Type', 'human-consult'),
		'desc'  => esc_html__('Select map type', 'human-consult'),
		'choices' => array(
			'roadmap'   => esc_html__('Roadmap', 'human-consult'),
			'terrain' => esc_html__('Terrain', 'human-consult'),
			'satellite' => esc_html__('Satellite', 'human-consult'),
			'hybrid'    => esc_html__('Hybrid', 'human-consult')
		)
	),
	'map_height' => array(
		'label' => esc_html__('Map Height', 'human-consult'),
		'desc'  => esc_html__('Set map height (Ex: 300)', 'human-consult'),
		'type'  => 'text'
	),
	'disable_scrolling' => array(
		'type'  => 'switch',
		'value' => false,
		'label' => esc_html__('Disable zoom on scroll', 'human-consult'),
		'desc'  => esc_html__('Prevent the map from zooming when scrolling until clicking on the map', 'human-consult'),
		'left-choice' => array(
			'value' => false,
			'label' => esc_html__('Yes', 'human-consult'),
		),
		'right-choice' => array(
			'value' => true,
			'label' => esc_html__('No', 'human-consult'),
		),
	),
	'initial_zoom' => array(
		'label' => esc_html__('Initial Zoom', 'human-consult'),
		'desc'  => esc_html__('From 1 to 16', 'human-consult'),
		'type'  => 'text',
		'value' => '14',
	),
	'map_pin' => array(
		'type'        => 'upload',
		'value'       => '',
		'label'       => esc_html__( 'Map marker', 'human-consult' ),
		'help'        => esc_html__( 'It appears to the left from your content', 'human-consult' ),
		'images_only' => true,
	),
);