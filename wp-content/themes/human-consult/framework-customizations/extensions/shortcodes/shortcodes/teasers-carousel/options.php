<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
//get teaser to add in teasers carousel:
$teaser = fw_ext( 'shortcodes' )->get_shortcode( 'teaser' );

$options = array(
	'number'        => array(
		'type'       => 'slider',
		'value'      => 6,
		'properties' => array(
			'min'  => 1,
			'max'  => 12,
			'step' => 1, // Set slider step. Always > 0. Could be fractional.

		),
		'label'      => esc_html__( 'Items number', 'human-consult' ),
		'desc'       => esc_html__( 'Number of posts to display', 'human-consult' ),
	),
	'margin'        => array(
		'label'   => esc_html__( 'Horizontal item margin (px)', 'human-consult' ),
		'desc'    => esc_html__( 'Select horizontal item margin', 'human-consult' ),
		'value'   => '30',
		'type'    => 'select',
		'choices' => array(
			'0'  => esc_html__( '0', 'human-consult' ),
			'1'  => esc_html__( '1px', 'human-consult' ),
			'2'  => esc_html__( '2px', 'human-consult' ),
			'10' => esc_html__( '10px', 'human-consult' ),
			'30' => esc_html__( '30px', 'human-consult' ),
			'60' => esc_html__( '60px', 'human-consult' ),
		)
	),
	'responsive_lg' => array(
		'label'   => esc_html__( 'Columns on large screens', 'human-consult' ),
		'desc'    => esc_html__( 'Select items number on wide screens (>1200px)', 'human-consult' ),
		'value'   => '4',
		'type'    => 'select',
		'choices' => array(
			'1' => esc_html__( '1', 'human-consult' ),
			'2' => esc_html__( '2', 'human-consult' ),
			'3' => esc_html__( '3', 'human-consult' ),
			'4' => esc_html__( '4', 'human-consult' ),
			'6' => esc_html__( '6', 'human-consult' ),
		)
	),
	'responsive_md' => array(
		'label'   => esc_html__( 'Columns on middle screens', 'human-consult' ),
		'desc'    => esc_html__( 'Select items number on middle screens (>992px)', 'human-consult' ),
		'value'   => '3',
		'type'    => 'select',
		'choices' => array(
			'1' => esc_html__( '1', 'human-consult' ),
			'2' => esc_html__( '2', 'human-consult' ),
			'3' => esc_html__( '3', 'human-consult' ),
			'4' => esc_html__( '4', 'human-consult' ),
			'6' => esc_html__( '6', 'human-consult' ),
		)
	),
	'responsive_sm' => array(
		'label'   => esc_html__( 'Columns on small screens', 'human-consult' ),
		'desc'    => esc_html__( 'Select items number on small screens (>768px)', 'human-consult' ),
		'value'   => '2',
		'type'    => 'select',
		'choices' => array(
			'1' => esc_html__( '1', 'human-consult' ),
			'2' => esc_html__( '2', 'human-consult' ),
			'3' => esc_html__( '3', 'human-consult' ),
			'4' => esc_html__( '4', 'human-consult' ),
			'6' => esc_html__( '6', 'human-consult' ),
		)
	),
	'responsive_xs' => array(
		'label'   => esc_html__( 'Columns on extra small screens', 'human-consult' ),
		'desc'    => esc_html__( 'Select items number on extra small screens (<767px)', 'human-consult' ),
		'value'   => '1',
		'type'    => 'select',
		'choices' => array(
			'1' => esc_html__( '1', 'human-consult' ),
			'2' => esc_html__( '2', 'human-consult' ),
			'3' => esc_html__( '3', 'human-consult' ),
			'4' => esc_html__( '4', 'human-consult' ),
			'6' => esc_html__( '6', 'human-consult' ),
		)
	),
	'show_nav'      => array(
		'type'         => 'switch',
		'label'        => esc_html__( 'Show navigation', 'human-consult' ),
		'desc'         => esc_html__( 'Show teasers carousel navigation', 'human-consult' ),
		'value'        => 'true',
		'right-choice' => array(
			'value' => 'true',
			'label' => esc_html__( 'Yes', 'human-consult' ),
		),
		'left-choice'  => array(
			'value' => 'false',
			'label' => esc_html__( 'No', 'human-consult' ),
		),
	),
	'teasers'                => array(
		'type'          => 'addable-popup',
		'label'         => esc_html__( 'Add Teasers', 'human-consult' ),
		'popup-title'   => esc_html__( 'Add/Edit Teasers in tabs', 'human-consult' ),
		'desc'          => esc_html__( 'Create your tabs', 'human-consult' ),
		'template'      => '{{=title}}',
		'popup-options' => $teaser->get_options(),
	),

);