<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$button         = fw_ext( 'shortcodes' )->get_shortcode( 'button' );

$options = array(
	'title'         => array(
		'type'  => 'text',
		'label' => esc_html__( 'Title', 'human-consult' ),
		'desc'  => esc_html__( 'This can be left blank', 'human-consult' )
	),
	'message'       => array(
		'type'  => 'textarea',
		'label' => esc_html__( 'Content', 'human-consult' ),
		'desc'  => esc_html__( 'Enter some content for this Info Box', 'human-consult' )
	),
	'button' => array(
		'type'          => 'popup',
		'label'         => esc_html__( 'Button', 'human-consult' ),
		'popup-title'   => esc_html__( 'Edit Button', 'human-consult' ),
		'popup-options' => $button->get_options(),
	),
);