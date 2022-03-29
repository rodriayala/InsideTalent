<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'icon'       => array(
		'type'  => 'icon',
		'label' => esc_html__( 'Icon', 'human-consult' ),
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
		'value'   => 'default_icon',
		'label'   => esc_html__( 'Icon Style', 'human-consult' ),
		'desc'    => esc_html__( 'Select one of predefined icon styles.', 'human-consult' ),
		'help'    => esc_html__( 'If not set - no icon will appear.', 'human-consult' ),
		'choices' => array(
			'default_icon' => fw_get_template_customizations_directory_uri() . '/extensions/shortcodes/shortcodes/icon/static/img/icon_teaser_01.png',
			'border_icon round'        => fw_get_template_customizations_directory_uri() . '/extensions/shortcodes/shortcodes/icon/static/img/icon_teaser_02.png',
			'bg_color round'    => fw_get_template_customizations_directory_uri() . '/extensions/shortcodes/shortcodes/icon/static/img/icon_teaser_03.png',
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
	'title'      => array(
		'type'  => 'text',
		'value'   => '',
		'label' => esc_html__( 'Title', 'human-consult' ),
		'desc'  => esc_html__( 'Title near icon', 'human-consult' ),
	),
	'text'       => array(
		'type'  => 'text',
		'value'   => '',
		'label' => esc_html__( 'Text', 'human-consult' ),
		'desc'  => esc_html__( 'Text near title', 'human-consult' ),
	),
);