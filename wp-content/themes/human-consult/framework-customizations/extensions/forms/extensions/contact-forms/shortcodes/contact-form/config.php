<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array();

$cfg['page_builder'] = array(
	'title'       => esc_html__( 'Contact form', 'human-consult' ),
	'description' => esc_html__( 'Build contact forms', 'human-consult' ),
	'tab'         => esc_html__( 'Content Elements', 'human-consult' ),
	'popup_size'  => 'large',
	'type'        => 'special'
);