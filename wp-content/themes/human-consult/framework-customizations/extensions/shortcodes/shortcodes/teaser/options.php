<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

//get button to add in a teaser:
$button         = fw_ext( 'shortcodes' )->get_shortcode( 'button' );
$button_options = $button->get_options();
unset( $button_options['link'] );
unset( $button_options['target'] );
$button_array = array(
	'button' => array(
		'type'    => 'multi-picker',
		'label'   => false,
		'desc'    => false,
		'value'   => false,
		'picker'  => array(
			'show_button' => array(
				'type'         => 'switch',
				'label'        => esc_html__( 'Show teaser button', 'human-consult' ),
				'left-choice'  => array(
					'value' => '',
					'label' => esc_html__( 'No', 'human-consult' ),
				),
				'right-choice' => array(
					'value' => 'button',
					'label' => esc_html__( 'Yes', 'human-consult' ),
				),
			),
		),
		'choices' => array(
			''       => array(),
			'button' => $button_options,
		),
	)
);

$teaser_center_array = array(
	'teaser_center' => array(
		'type'         => 'switch',
		'value'        => '',
		'label'        => esc_html__( 'Center teaser contents', 'human-consult' ),
		'left-choice'  => array(
			'value' => '',
			'label' => esc_html__( 'No', 'human-consult' ),
		),
		'right-choice' => array(
			'value' => 'text-center',
			'label' => esc_html__( 'Yes', 'human-consult' ),
		),
	),
);

$icon_options = array(
	'type'    => 'group',
	'options' => array(
		'icon'       => array(
			'type'  => 'icon',
			'label' => esc_html__( 'Choose an Icon', 'human-consult' ),
			'set'   => 'rt-icons-2',
		),
		'icon_size'  => array(
			'type'    => 'select',
			'value'   => 'size_normal',
			'label'   => esc_html__( 'Icon Size', 'human-consult' ),
			'choices' => array(
				'size_small'  => esc_html__( 'Small', 'human-consult' ),
				'size_normal' => esc_html__( 'Normal', 'human-consult' ),
				'size_big'    => esc_html__( 'Big', 'human-consult' ),
			)
		),
		'icon_style' => array(
			'type'    => 'image-picker',
			'value'   => '',
			'label'   => esc_html__( 'Icon Style', 'human-consult' ),
			'desc'    => esc_html__( 'Select one of predefined icon styles. If not set - no icon will appear.', 'human-consult' ),
			'help'    => esc_html__( 'If not set - no icon will appear.', 'human-consult' ),
			'choices' => array(
				''                    => fw_get_template_customizations_directory_uri() . '/extensions/shortcodes/shortcodes/teaser/static/img/icon_teaser_00.png',
				'default_icon'        => fw_get_template_customizations_directory_uri() . '/extensions/shortcodes/shortcodes/teaser/static/img/icon_teaser_01.png',
				'border_icon round'   => fw_get_template_customizations_directory_uri() . '/extensions/shortcodes/shortcodes/teaser/static/img/icon_teaser_02.png',
				'bg_color round' => fw_get_template_customizations_directory_uri() . '/extensions/shortcodes/shortcodes/teaser/static/img/icon_teaser_03.png',
				'bg_color round teaser_gradient' => fw_get_template_customizations_directory_uri() . '/extensions/shortcodes/shortcodes/teaser/static/img/icon_teaser_04.png',
			),

			'blank' => false, // (optional) if true, images can be deselected
		),
		'icon_color'     => array(
			'type'    => 'select',
			'value'   => '',
			'label'   => esc_html__( 'Icon color', 'human-consult' ),
			'desc'    => esc_html__( 'Select a color for your icon', 'human-consult' ),
			'choices' => array(
				''           => 'Inherited',
				'color_1'  => esc_html__( 'First main color', 'human-consult' ),
				'color_2' => esc_html__( 'Second main color', 'human-consult' ),
			),
		),
	),
);

$image_options = array(
	'type'        => 'upload',
	'value'       => '',
	'label'       => esc_html__( 'Teaser Image', 'human-consult' ),
	'image'       => esc_html__( 'Image for your teaser.', 'human-consult' ),
	'help'        => 'Image for your teaser. Image can appear as an element, or background or even can be hidden depends from chosen teaser type',
	'images_only' => true,
);

$option_teaser_icon = array(
	'icon_options' => $icon_options,
);

$option_teaser_image = array(
	'teaser_image' => $image_options,
);

$option_teaser_square = array(
	'teaser_image' => $image_options,
	'icon'         => array(
		'type'  => 'icon',
		'label' => esc_html__( 'Choose an Icon', 'human-consult' ),
		'set'   => 'rt-icons-2',
	),
);

$option_teaser_counter = array(
	'icon_options'    => $icon_options,
	'counter_options' => array(
		'type'    => 'group',
		'options' => array(

			'number'                  => array(
				'type'  => 'text',
				'value' => 10,
				'label' => esc_html__( 'Count To Number', 'human-consult' ),
				'desc'  => esc_html__( 'Choose value to count to', 'human-consult' ),
			),
			'counter_additional_text' => array(
				'type'  => 'text',
				'value' => '',
				'label' => esc_html__( 'Add some text after counter', 'human-consult' ),
				'desc'  => esc_html__( 'You can add "+", "%", decimal values etc.', 'human-consult' ),
			),
			'speed'                   => array(
				'type'       => 'slider',
				'value'      => 1000,
				'properties' => array(
					'min'  => 500,
					'max'  => 5000,
					'step' => 100,
				),
				'label'      => esc_html__( 'Counter Speed (counter teaser only)', 'human-consult' ),
				'desc'       => esc_html__( 'Choose counter speed (in milliseconds)', 'human-consult' ),
			),
		),
	),
);

$options = array(
	'title'        => array(
		'type'  => 'text',
		'label' => esc_html__( 'Teaser Title', 'human-consult' ),
	),
	'link'         => array(
		'type'  => 'text',
		'value' => '',
		'label' => esc_html__( 'Teaser link', 'human-consult' ),
		'desc'  => esc_html__( 'Link on title and optional button', 'human-consult' ),
	),
	'teaser_types' => array(
		'type'         => 'multi-picker',
		'label'        => false,
		'desc'         => false,
		'picker'       => array(
			'teaser_type' => array(
				'type'    => 'image-picker',
				'value'   => 'icon_top',
				'label'   => esc_html__( 'Teaser Type', 'human-consult' ),
				'desc'    => esc_html__( 'Select one of predefined teaser types', 'human-consult' ),
				'choices' => array(
					'icon_top'      => fw_get_template_customizations_directory_uri() . '/extensions/shortcodes/shortcodes/teaser/static/img/icon_top.png',
					'icon_left'     => fw_get_template_customizations_directory_uri() . '/extensions/shortcodes/shortcodes/teaser/static/img/icon_left.png',
					'icon_right'    => fw_get_template_customizations_directory_uri() . '/extensions/shortcodes/shortcodes/teaser/static/img/icon_right.png',
					'image_top'     => fw_get_template_customizations_directory_uri() . '/extensions/shortcodes/shortcodes/teaser/static/img/image_top.png',
					'image_left'    => fw_get_template_customizations_directory_uri() . '/extensions/shortcodes/shortcodes/teaser/static/img/image_left.png',
					'image_right'   => fw_get_template_customizations_directory_uri() . '/extensions/shortcodes/shortcodes/teaser/static/img/image_right.png',
					'icon_image_bg' => fw_get_template_customizations_directory_uri() . '/extensions/shortcodes/shortcodes/teaser/static/img/icon_image_bg.png',
					'counter'       => fw_get_template_customizations_directory_uri() . '/extensions/shortcodes/shortcodes/teaser/static/img/icon_counter.png',
				),
				'blank'   => false, // (optional) if true, images can be deselected
			),

		),
		'choices'      => array(
			'icon_top'      => array_merge( $option_teaser_icon, $teaser_center_array, $button_array ),
			'icon_left'     => $option_teaser_icon,
			'icon_right'    => $option_teaser_icon,
			'image_top'     => array_merge( $option_teaser_image, $teaser_center_array, $button_array ),
			'image_left'    => $option_teaser_image,
			'image_right'   => $option_teaser_image,
			'icon_image_bg' => $option_teaser_square,
			'counter'       => $option_teaser_counter
		),
		'show_borders' => true,
	),
	'teaser_style' => array(
		'type'    => 'select',
		'label'   => esc_html__( 'Teaser Box Style', 'human-consult' ),
		'choices' => array(
			''                             => esc_html__( 'Default (no border or background)', 'human-consult' ),
			'with_padding with_border'     => esc_html__( 'Bordered', 'human-consult' ),
			'with_padding with_shadow'     => esc_html__( 'With Shadow', 'human-consult' ),
			'with_padding with_background with_shadow' => esc_html__( 'Muted Background', 'human-consult' ),
			'with_padding with_background ls with_shadow'              => esc_html__( 'Light background', 'human-consult' ),
			'with_padding with_background ls ms with_shadow'           => esc_html__( 'Grey background', 'human-consult' ),
			'with_padding with_background ds'              => esc_html__( 'Dark background', 'human-consult' ),
			'with_padding with_background ds ms'           => esc_html__( 'Darkgrey background', 'human-consult' ),
			'with_padding with_background cs'              => esc_html__( 'Main color background', 'human-consult' ),
		)
	),
	'content'      => array(
		'type'  => 'textarea',
		'label' => esc_html__( 'Teaser text', 'human-consult' ),
		'desc'  => esc_html__( 'Enter desired teaser content', 'human-consult' ),
	),

	'title_tag' => array(
		'type'    => 'select',
		'value'   => 'h3',
		'label'   => esc_html__( 'Title Tag', 'human-consult' ),
		'choices' => array(
			'h2' => esc_html__( 'H2', 'human-consult' ),
			'h3' => esc_html__( 'H3', 'human-consult' ),
			'h4' => esc_html__( 'H4', 'human-consult' ),
		)
	),
);