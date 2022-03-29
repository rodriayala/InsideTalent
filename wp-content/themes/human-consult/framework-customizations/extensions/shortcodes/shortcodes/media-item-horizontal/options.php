<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
//get social icons to add in item:
$icon = fw_ext( 'shortcodes' )->get_shortcode( 'icon' );
//get social icons to add in item:
$icons_social = fw_ext( 'shortcodes' )->get_shortcode( 'icons_social' );

$options = array(
	'title'         => array(
		'type'  => 'text',
		'label' => esc_html__( 'Title of the Box', 'human-consult' ),
	),
	'title_tag'     => array(
		'type'    => 'select',
		'value'   => 'h3',
		'label'   => esc_html__( 'Title Tag', 'human-consult' ),
		'choices' => array(
			'h2' => esc_html__( 'H2', 'human-consult' ),
			'h3' => esc_html__( 'H3', 'human-consult' ),
			'h4' => esc_html__( 'H4', 'human-consult' ),
		)
	),
	'content'       => array(
		'type'          => 'wp-editor',
		'label'         => esc_html__( 'Item text', 'human-consult' ),
		'desc'          => esc_html__( 'Enter desired item content', 'human-consult' ),
		'size'          => 'small', // small, large
		'editor_height' => 400,
	),
	'item_style'    => array(
		'type'    => 'select',
		'label'   => esc_html__( 'Item Box Style', 'human-consult' ),
		'choices' => array(
			'no-content-padding'              => esc_html__( 'Default (no border or background)', 'human-consult' ),
			'content-padding with_border'     => esc_html__( 'Bordered', 'human-consult' ),
			'content-padding with_background' => esc_html__( 'Muted Background', 'human-consult' ),
			'content-padding ls ms'           => esc_html__( 'Grey background', 'human-consult' ),
			'content-padding ds'              => esc_html__( 'Darkgrey background', 'human-consult' ),
			'content-padding ds ms'           => esc_html__( 'Dark background', 'human-consult' ),
			'content-padding cs'              => esc_html__( 'Main color background', 'human-consult' ),
			'full-padding with_border'        => esc_html__( 'Bordered with Padding', 'human-consult' ),
			'full-padding with_background'    => esc_html__( 'Muted Background with Padding', 'human-consult' ),
			'full-padding ls ms'              => esc_html__( 'Grey background with Padding', 'human-consult' ),
			'full-padding ds'                 => esc_html__( 'Darkgrey background with Padding', 'human-consult' ),
			'full-padding ds ms'              => esc_html__( 'Dark background with Padding', 'human-consult' ),
			'full-padding cs'                 => esc_html__( 'Main color background with Padding', 'human-consult' ),
		)
	),
	'link'          => array(
		'type'  => 'text',
		'value' => '',
		'label' => esc_html__( 'Item link', 'human-consult' ),
		'desc'  => esc_html__( 'Link on title and optional button', 'human-consult' ),
	),
	'item_image'    => array(
		'type'        => 'upload',
		'value'       => '',
		'label'       => esc_html__( 'Item Image', 'human-consult' ),
		'image'       => esc_html__( 'Image for your item. Not all item layouts show image', 'human-consult' ),
		'help'        => 'Image for your item. Image can appear as an element, or background or even can be hidden depends from chosen item type',
		'images_only' => true,
	),
	'image_right'   => array(
		'type'         => 'switch',
		'label'        => esc_html__( 'Image to the right', 'human-consult' ),
		'left-choice'  => array(
			'value' => '',
			'label' => esc_html__( 'No', 'human-consult' ),
		),
		'right-choice' => array(
			'value' => 'true',
			'label' => esc_html__( 'Yes', 'human-consult' ),
		),
	),
	'responsive_lg' => array(
		'label'   => esc_html__( 'Image width on wide screens', 'human-consult' ),
		'desc'    => esc_html__( 'Select image column width on wide screens (>1200px)', 'human-consult' ),
		'value'   => '6',
		'type'    => 'select',
		'choices' => array(
			'12' => esc_html__( 'Full Width', 'human-consult' ),
			'6'  => esc_html__( '1/2', 'human-consult' ),
			'4'  => esc_html__( '1/3', 'human-consult' ),
			'3'  => esc_html__( '1/4', 'human-consult' ),
		)
	),
	'responsive_md' => array(
		'label'   => esc_html__( 'Image width on middle screens', 'human-consult' ),
		'desc'    => esc_html__( 'Select image column width on middle screens (>992px)', 'human-consult' ),
		'value'   => '4',
		'type'    => 'select',
		'choices' => array(
			'12' => esc_html__( 'Full Width', 'human-consult' ),
			'6'  => esc_html__( '1/2', 'human-consult' ),
			'4'  => esc_html__( '1/3', 'human-consult' ),
			'3'  => esc_html__( '1/4', 'human-consult' ),
		)
	),
	'responsive_sm' => array(
		'label'   => esc_html__( 'Image width on small screens', 'human-consult' ),
		'desc'    => esc_html__( 'Select image column width on small screens (>768px)', 'human-consult' ),
		'value'   => '2',
		'type'    => 'select',
		'choices' => array(
			'12' => esc_html__( 'Full Width', 'human-consult' ),
			'6'  => esc_html__( '1/2', 'human-consult' ),
			'4'  => esc_html__( '1/3', 'human-consult' ),
			'3'  => esc_html__( '1/4', 'human-consult' ),
		)
	),
	'responsive_xs' => array(
		'label'   => esc_html__( 'Image width on extra small screens', 'human-consult' ),
		'desc'    => esc_html__( 'Select image column width on extra small screens (<767px)', 'human-consult' ),
		'value'   => '1',
		'type'    => 'select',
		'choices' => array(
			'12' => esc_html__( 'Full Width', 'human-consult' ),
			'6'  => esc_html__( '1/2', 'human-consult' ),
			'4'  => esc_html__( '1/3', 'human-consult' ),
			'3'  => esc_html__( '1/4', 'human-consult' ),
		)
	),
	'icons'         => array(
		'type'            => 'addable-box',
		'value'           => '',
		'label'           => esc_html__( 'Additional info', 'human-consult' ),
		'desc'            => esc_html__( 'Add icons with title and text', 'human-consult' ),
		'box-options'     => $icon->get_options(),
		'add-button-text' => esc_html__( 'Add New', 'human-consult' ),
		'template'        => '{{=title}}',
		'sortable'        => true,
	),
	$icons_social->get_options(),

);