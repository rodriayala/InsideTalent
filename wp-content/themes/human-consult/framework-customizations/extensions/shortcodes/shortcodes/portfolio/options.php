<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$portfolio = fw()->extensions->get( 'portfolio' );
if ( empty( $portfolio ) ) {
	return;
}

$options = array(
	'layout'        => array(
		'label'   => esc_html__( 'Portfolio Layout', 'human-consult' ),
		'desc'    => esc_html__( 'Choose projects layout', 'human-consult' ),
		'value'   => 'isotope',
		'type'    => 'select',
		'choices' => array(
			'carousel' => esc_html__( 'Carousel', 'human-consult' ),
			'isotope'  => esc_html__( 'Masonry Grid', 'human-consult' ),
		)
	),
	'item_layout'   => array(
		'label'   => esc_html__( 'Item layout', 'human-consult' ),
		'desc'    => esc_html__( 'Choose Item layout', 'human-consult' ),
		'value'   => 'item-regular',
		'type'    => 'select',
		'choices' => array(
			'item-regular'  => esc_html__( 'Regular (just image)', 'human-consult' ),
			'item-title'    => esc_html__( 'Image with title', 'human-consult' ),
			'item-extended' => esc_html__( 'Image with title and excerpt', 'human-consult' ),
		)
	),
	'number'        => array(
		'type'       => 'slider',
		'value'      => 6,
		'properties' => array(
			'min'  => 1,
			'max'  => 12,
			'step' => 1, // Set slider step. Always > 0. Could be fractional.

		),
		'label'      => esc_html__( 'Items number', 'human-consult' ),
		'desc'       => esc_html__( 'Number of portfolio projects tu display', 'human-consult' ),
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
		)
	),
	'responsive_lg' => array(
		'label'   => esc_html__( 'Columns on wide screens', 'human-consult' ),
		'desc'    => esc_html__( 'Select items number on wide screens (>1200px)', 'human-consult' ),
		'value'   => '4',
		'type'    => 'select',
		'choices' => array(
			'1' => esc_html__( '1', 'human-consult' ),
			'2' => esc_html__( '2', 'human-consult' ),
			'3' => esc_html__( '3', 'human-consult' ),
			'4' => esc_html__( '4', 'human-consult' ),
			'6' => esc_html__( '6', 'human-consult' ),
			'8' => esc_html__( '8', 'human-consult' ),
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
	'show_filters'  => array(
		'type'         => 'switch',
		'value'        => false,
		'label'        => esc_html__( 'Show filters', 'human-consult' ),
		'desc'         => esc_html__( 'Hide or show categories filters', 'human-consult' ),
		'left-choice'  => array(
			'value' => false,
			'label' => esc_html__( 'No', 'human-consult' ),
		),
		'right-choice' => array(
			'value' => true,
			'label' => esc_html__( 'Yes', 'human-consult' ),
		),
	),
);