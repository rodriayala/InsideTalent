<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$teaser = fw_ext( 'shortcodes' )->get_shortcode( 'teaser' );

$options = array(
	'tabs'       => array(
		'type'          => 'addable-popup',
		'label'         => esc_html__( 'Tabs', 'human-consult' ),
		'popup-title'   => esc_html__( 'Add/Edit Tabs', 'human-consult' ),
		'desc'          => esc_html__( 'Create your tabs', 'human-consult' ),
		'template'      => '{{=tab_title}}',
		'popup-options' => array(
			'tab_title'           => array(
				'type'  => 'text',
				'label' => esc_html__( 'Title', 'human-consult' )
			),
			'tab_columns_width'   => array(
				'type'    => 'select',
				'label'   => esc_html__( 'Column width in tab content', 'human-consult' ),
				'value'   => 'col-sm-4',
				'desc'    => esc_html__( 'Choose teaser width inside tab content', 'human-consult' ),
				'choices' => array(
					'col-sm-12' => esc_html__( '1/1', 'human-consult' ),
					'col-sm-6'  => esc_html__( '1/2', 'human-consult' ),
					'col-sm-4'  => esc_html__( '1/3', 'human-consult' ),
					'col-sm-3'  => esc_html__( '1/4', 'human-consult' ),
				),
			),
			'tab_columns_padding' => array(
				'type'    => 'select',
				'value'   => 'columns_padding_15',
				'label'   => esc_html__( 'Column paddings', 'human-consult' ),
				'desc'    => esc_html__( 'Choose columns horizontal paddings value', 'human-consult' ),
				'choices' => array(
					'columns_padding_0'  => esc_html__( '0', 'human-consult' ),
					'columns_padding_1'  => esc_html__( '1 px', 'human-consult' ),
					'columns_padding_2'  => esc_html__( '2 px', 'human-consult' ),
					'columns_padding_5'  => esc_html__( '5 px', 'human-consult' ),
					'columns_padding_15' => esc_html__( '15 px - default', 'human-consult' ),
					'columns_padding_25' => esc_html__( '25 px', 'human-consult' ),
				),
			),
			'tab_teasers'         => array(
				'type'          => 'addable-popup',
				'label'         => esc_html__( 'Teasers in tabs', 'human-consult' ),
				'popup-title'   => esc_html__( 'Add/Edit Teasers in tabs', 'human-consult' ),
				'desc'          => esc_html__( 'Create your teasers in tabs', 'human-consult' ),
				'template'      => '{{=title}}',
				'popup-options' => $teaser->get_options(),

			),
		),

	),
	'top_border' => array(
		'type'         => 'switch',
		'value'        => '',
		'label'        => esc_html__( 'Top color border', 'human-consult' ),
		'desc'         => esc_html__( 'Add top color border to tab content', 'human-consult' ),
		'left-choice'  => array(
			'value' => '',
			'label' => esc_html__( 'No top border', 'human-consult' ),
		),
		'right-choice' => array(
			'value' => 'top-color-border',
			'label' => esc_html__( 'Color top border', 'human-consult' ),
		),
	),
	'id'         => array( 'type' => 'unique' ),
);