<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
//get social icons to add in member item:
$icons_social = fw_ext( 'shortcodes' )->get_shortcode( 'icons_social' );

$options = array(
	'image' => array(
		'label' => esc_html__( 'Team Member Image', 'human-consult' ),
		'desc'  => esc_html__( 'Either upload a new, or choose an existing image from your media library', 'human-consult' ),
		'type'  => 'upload'
	),
	'name'  => array(
		'label' => esc_html__( 'Team Member Name', 'human-consult' ),
		'desc'  => esc_html__( 'Name of the person', 'human-consult' ),
		'type'  => 'text',
		'value' => ''
	),
	'job'   => array(
		'label' => esc_html__( 'Team Member Job Title', 'human-consult' ),
		'desc'  => esc_html__( 'Job title of the person.', 'human-consult' ),
		'type'  => 'text',
		'value' => ''
	),
	'desc'  => array(
		'label' => esc_html__( 'Team Member Description', 'human-consult' ),
		'desc'  => esc_html__( 'Enter a few words that describe the person', 'human-consult' ),
		'type'  => 'textarea',
		'value' => ''
	),
	$icons_social->get_options(),
);