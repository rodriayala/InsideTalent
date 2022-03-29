<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'message' => array(
		'label' => esc_html__( 'Message', 'human-consult' ),
		'desc'  => esc_html__( 'Notification message', 'human-consult' ),
		'type'  => 'text',
		'value' => esc_html__( 'Message!', 'human-consult' ),
	),
	'type'    => array(
		'label'   => esc_html__( 'Type', 'human-consult' ),
		'desc'    => esc_html__( 'Notification type', 'human-consult' ),
		'type'    => 'select',
		'choices' => array(
			'success' => esc_html__( 'Congratulations', 'human-consult' ),
			'info'    => esc_html__( 'Information', 'human-consult' ),
			'warning' => esc_html__( 'Alert', 'human-consult' ),
			'danger'  => esc_html__( 'Error', 'human-consult' ),
		)
	),
);