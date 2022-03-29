<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'tab_main_options'          => array(
		'type'    => 'tab',
		'title'   => esc_html__( 'Main Options', 'human-consult' ),
		'options' => array(
			'section_name' => array(
				'label' => esc_html__( 'Section Name', 'human-consult' ),
				'desc'  => esc_html__( 'Enter a name (it is for internal use and will not appear on the front end)', 'human-consult' ),
				'help'  => esc_html__( 'Use this option to name your sections. It will help you go through the structure a lot easier.', 'human-consult' ),
				'type'  => 'text',
			),
			'is_fullwidth' => array(
				'label' => esc_html__( 'Full Width', 'human-consult' ),
				'type'  => 'switch',
			),
			'horizontal_paddings' => array(
				'type'         => 'switch',
				'value'        => '',
				'label'        => esc_html__( 'Disable horizontal paddings', 'human-consult' ),
				'desc'         => esc_html__( 'Disable section horizontal paddings', 'human-consult' ),
				'left-choice'  => array(
					'value' => '',
					'label' => esc_html__( 'No', 'human-consult' ),
				),
				'right-choice' => array(
					'value' => 'horizontal-paddings-0',
					'label' => esc_html__( 'Yes', 'human-consult' ),
				)
			),
			'background_color' => array(
				'type'    => 'select',
				'value'   => 'ls',
				'label'   => esc_html__( 'Background color', 'human-consult' ),
				'desc'    => esc_html__( 'Select background color', 'human-consult' ),
				'help'    => esc_html__( 'Select one of predefined background colors', 'human-consult' ),
				'choices' => array(
					'ls'             => esc_html__( 'Light', 'human-consult' ),
					'ls ms'          => esc_html__( 'Light Grey', 'human-consult' ),
					'ds ms'          => esc_html__( 'Dark Grey', 'human-consult' ),
					'ds'             => esc_html__( 'Dark', 'human-consult' ),
					'cs'             => esc_html__( 'Main color', 'human-consult' ),
					'cs main_color2' => esc_html__( 'Second Main color', 'human-consult' ),
					'section_gradient' => esc_html__( 'Gradient background', 'human-consult' ),
				),
			),
			'top_padding'      => array(
				'type'    => 'select',
				'value'   => 'section_padding_top_50',
				'label'   => esc_html__( 'Top padding', 'human-consult' ),
				'desc'    => esc_html__( 'Choose top padding value', 'human-consult' ),
				'choices' => array(
					'section_padding_top_0'   => esc_html__( '0', 'human-consult' ),
					'section_padding_top_5'   => esc_html__( '5 px', 'human-consult' ),
					'section_padding_top_15'  => esc_html__( '15 px', 'human-consult' ),
					'section_padding_top_25'  => esc_html__( '25 px', 'human-consult' ),
					'section_padding_top_30'  => esc_html__( '30 px', 'human-consult' ),
					'section_padding_top_40'  => esc_html__( '40 px', 'human-consult' ),
					'section_padding_top_50'  => esc_html__( '50 px', 'human-consult' ),
					'section_padding_top_65'  => esc_html__( '65 px', 'human-consult' ),
					'section_padding_top_75'  => esc_html__( '75 px', 'human-consult' ),
					'section_padding_top_100' => esc_html__( '100 px', 'human-consult' ),
					'section_padding_top_130' => esc_html__( '130 px', 'human-consult' ),
					'section_padding_top_150' => esc_html__( '150 px', 'human-consult' ),
				),
			),
			'bottom_padding'   => array(
				'type'    => 'select',
				'value'   => 'section_padding_bottom_50',
				'label'   => esc_html__( 'Bottom padding', 'human-consult' ),
				'desc'    => esc_html__( 'Choose bottom padding value', 'human-consult' ),
				'choices' => array(
					'section_padding_bottom_0'   => esc_html__( '0', 'human-consult' ),
					'section_padding_bottom_5'   => esc_html__( '5 px', 'human-consult' ),
					'section_padding_bottom_15'  => esc_html__( '15 px', 'human-consult' ),
					'section_padding_bottom_25'  => esc_html__( '25 px', 'human-consult' ),
					'section_padding_bottom_30'  => esc_html__( '30 px', 'human-consult' ),
					'section_padding_bottom_40'  => esc_html__( '40 px', 'human-consult' ),
					'section_padding_bottom_50'  => esc_html__( '50 px', 'human-consult' ),
					'section_padding_bottom_65'  => esc_html__( '65 px', 'human-consult' ),
					'section_padding_bottom_75'  => esc_html__( '75 px', 'human-consult' ),
					'section_padding_bottom_100' => esc_html__( '100 px', 'human-consult' ),
					'section_padding_bottom_130' => esc_html__( '130 px', 'human-consult' ),
					'section_padding_bottom_150' => esc_html__( '150 px', 'human-consult' ),
				),
			),
			'columns_padding'  => array(
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
					'columns_padding_80' => esc_html__( '80 px - extra large', 'human-consult' ),
				),
			),
			'background_image' => array(
				'label'   => esc_html__( 'Background Image', 'human-consult' ),
				'desc'    => esc_html__( 'Please select the background image', 'human-consult' ),
				'type'    => 'background-image',
				'choices' => array(//	in future may will set predefined images
				)
			),
			'background_cover' => array(
				'label' => esc_html__( 'Background Cover', 'human-consult' ),
				'type'  => 'switch',
			),
			'parallax'         => array(
				'label' => esc_html__( 'Parallax', 'human-consult' ),
				'type'  => 'switch',
			),
			'section_overlay'  => array(
				'label' => esc_html__( 'Section overlay', 'human-consult' ),
				'type'  => 'switch',
			),
			'is_table'         => array(
				'label' => esc_html__( 'Vertical align content', 'human-consult' ),
				'desc'  => esc_html__( 'Align columns content vertically on wide screens', 'human-consult' ),
				'type'  => 'switch',
			),
			'section_id'       => array(
				'type'  => 'text',
				'value' => '',
				'label' => esc_html__( 'ID attribute', 'human-consult' ),
				'desc'  => esc_html__( 'Add ID attribute to section. Useful for single page menu', 'human-consult' ),
			),
			'custom_class'     => array(
				'label' => esc_html__( 'Custom Class', 'human-consult' ),
				'desc'  => esc_html__( 'Add custom class for section', 'human-consult' ),
				'type'  => 'text',
			),
		),
	),
	'tab_onehalf_media_options' => array(
		'type'    => 'tab',
		'title'   => esc_html__( 'One half width Media', 'human-consult' ),
		'options' => array(
			'enable_onehalf_media' => array(
				'type'         => 'switch',
				'value'        => '',
				'label'        => esc_html__( 'Enable onehalf media', 'human-consult' ),
				'left-choice'  => array(
					'value' => '',
					'label' => esc_html__( 'No', 'human-consult' ),
				),
				'right-choice' => array(
					'value' => 'half_section',
					'label' => esc_html__( 'Yes', 'human-consult' ),
				)
			),
			'side_media_image'    => array(
				'type'        => 'upload',
				'value'       => array(),
				'label'       => esc_html__( 'Side media image', 'human-consult' ),
				'desc'        => esc_html__( 'Select image that you want to appear as one half side image', 'human-consult' ),
				'images_only' => true,
			),
			'side_media_link'     => array(
				'type'  => 'text',
				'value' => '',
				'label' => esc_html__( 'Link to your side media', 'human-consult' ),
				'desc'  => esc_html__( 'You can add a link to your side media. If YouTube link will be provided, video will play in LightBox', 'human-consult' ),
			),
			'side_media_video'    => array(
				'type'    => 'oembed',
				'value'   => '',
				'label'   => esc_html__( 'Video', 'human-consult' ),
				'desc'    => esc_html__( 'Adds video player', 'human-consult' ),
				'help'    => esc_html__( 'Leave blank if no needed', 'human-consult' ),
				'preview' => array(
					'width'      => 278, // optional, if you want to set the fixed width to iframe
					'height'     => 185, // optional, if you want to set the fixed height to iframe
					/**
					 * if is set to false it will force to fit the dimensions,
					 * because some widgets return iframe with aspect ratio and ignore applied dimensions
					 */
					'keep_ratio' => true
				),
			),
			'side_media_position' => array(
				'type'         => 'switch',
				'value'        => 'image_cover_left',
				'label'        => esc_html__( 'Media position', 'human-consult' ),
				'desc'         => esc_html__( 'Left or right media position', 'human-consult' ),
				'left-choice'  => array(
					'value' => 'image_cover_left',
					'label' => esc_html__( 'Left', 'human-consult' ),
				),
				'right-choice' => array(
					'value' => 'image_cover_right',
					'label' => esc_html__( 'Right', 'human-consult' ),
				),
			),
		),
	),
);
