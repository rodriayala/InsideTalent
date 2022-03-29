<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$ext_team_settings = fw()->extensions->get( 'team' )->get_settings();
$taxonomy = $ext_team_settings['taxonomy_name'];

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
		)
	),
	'layout'        => array(
		'label'   => esc_html__( 'Layout', 'human-consult' ),
		'desc'    => esc_html__( 'Choose layout', 'human-consult' ),
		'value'   => 'carousel',
		'type'    => 'select',
		'choices' => array(
			'carousel' => esc_html__( 'Carousel', 'human-consult' ),
			'isotope'  => esc_html__( 'Masonry Grid', 'human-consult' ),
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
	'show_excerpt'  => array(
		'type'         => 'switch',
		'value'        => '',
		'label'        => esc_html__( 'Show excerpt', 'human-consult' ),
		'desc'         => esc_html__( 'Hide or show excerpt', 'human-consult' ),
		'left-choice'  => array(
			'value' => 'hide-excerpt',
			'label' => esc_html__( 'No', 'human-consult' ),
		),
		'right-choice' => array(
			'value' => '',
			'label' => esc_html__( 'Yes', 'human-consult' ),
		),
	),
	'show_socials'  => array(
		'type'         => 'switch',
		'value'        => '',
		'label'        => esc_html__( 'Show socials', 'human-consult' ),
		'desc'         => esc_html__( 'Hide or show socials icons', 'human-consult' ),
		'left-choice'  => array(
			'value' => 'hide-socials',
			'label' => esc_html__( 'No', 'human-consult' ),
		),
		'right-choice' => array(
			'value' => '',
			'label' => esc_html__( 'Yes', 'human-consult' ),
		),
	),
	'cat' => array(
		'type'  => 'multi-select',
		'label' => esc_html__('Select categories', 'human-consult'),
		'desc'  => esc_html__('You can select one or more categories', 'human-consult'),
		'population' => 'taxonomy',
		'source' => $taxonomy,
		'prepopulate' => 10,
		'limit' => 100,
	)
);