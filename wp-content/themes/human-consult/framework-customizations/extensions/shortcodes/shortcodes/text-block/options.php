<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'text' => array(
		'type'   => 'wp-editor',
		'label'  => esc_html__( 'Content', 'human-consult' ),
		'desc'   => esc_html__( 'Enter some content for this texblock', 'human-consult' ),
		'reinit' => true,
		'teeny' => false,
	),
);
