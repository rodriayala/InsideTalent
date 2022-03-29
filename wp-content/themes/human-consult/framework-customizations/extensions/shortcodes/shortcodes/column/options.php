<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'column_align'     => array(
		'type'    => 'select',
		'value'   => '',
		'label'   => esc_html__( 'Text alignment in column', 'human-consult' ),
		'desc'    => esc_html__( 'Select text alignment inside your column', 'human-consult' ),
		'choices' => array(
			''            => esc_html__( 'Inherit', 'human-consult' ),
			'text-left'   => esc_html__( 'Left', 'human-consult' ),
			'text-center' => esc_html__( 'Center', 'human-consult' ),
			'text-right'  => esc_html__( 'Right', 'human-consult' ),
		),
	),
	'column_padding'   => array(
		'type'    => 'select',
		'value'   => '',
		'label'   => esc_html__( 'Column padding', 'human-consult' ),
		'desc'    => esc_html__( 'Select optional internal column paddings', 'human-consult' ),
		'choices' => array(
			''           => esc_html__( 'No padding', 'human-consult' ),
			'padding_10' => esc_html__( '10px', 'human-consult' ),
			'padding_20' => esc_html__( '20px', 'human-consult' ),
			'padding_30' => esc_html__( '30px', 'human-consult' ),
			'padding_40' => esc_html__( '40px', 'human-consult' ),

		),
	),
	'background_color' => array(
		'type'    => 'select',
		'value'   => '',
		'label'   => esc_html__( 'Background color', 'human-consult' ),
		'desc'    => esc_html__( 'Select background color', 'human-consult' ),
		'help'    => esc_html__( 'Select one of predefined background colors', 'human-consult' ),
		'choices' => array(
			''               => esc_html__( 'Transparent (No Background)', 'human-consult' ),
			'with_background'=> esc_html__( 'Highlight', 'human-consult' ),
			'muted_background'=> esc_html__( 'Muted', 'human-consult' ),
			'ds ms'          => esc_html__( 'Dark Grey', 'human-consult' ),
			'ds'             => esc_html__( 'Dark', 'human-consult' ),
			'cs'             => esc_html__( 'Main color', 'human-consult' ),
			'cs main_color2' => esc_html__( 'Second Main color', 'human-consult' ),
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
	'column_animation' => array(
		'type'    => 'select',
		'value'   => '',
		'label'   => esc_html__( 'Animation type', 'human-consult' ),
		'desc'    => esc_html__( 'Select one of predefined animations', 'human-consult' ),
		'choices' => array(
			''               => 'None',
			'slideDown'      => esc_html__( 'slideDown', 'human-consult' ),
			'scaleAppear'    => esc_html__( 'scaleAppear', 'human-consult' ),
			'fadeInLeft'     => esc_html__( 'fadeInLeft', 'human-consult' ),
			'fadeInUp'       => esc_html__( 'fadeInUp', 'human-consult' ),
			'fadeInRight'    => esc_html__( 'fadeInRight', 'human-consult' ),
			'fadeInDown'     => esc_html__( 'fadeInDown', 'human-consult' ),
			'fadeIn'         => esc_html__( 'fadeIn', 'human-consult' ),
			'slideRight'     => esc_html__( 'slideRight', 'human-consult' ),
			'slideUp'        => esc_html__( 'slideUp', 'human-consult' ),
			'slideLeft'      => esc_html__( 'slideLeft', 'human-consult' ),
			'expandUp'       => esc_html__( 'expandUp', 'human-consult' ),
			'slideExpandUp'  => esc_html__( 'slideExpandUp', 'human-consult' ),
			'expandOpen'     => esc_html__( 'expandOpen', 'human-consult' ),
			'bigEntrance'    => esc_html__( 'bigEntrance', 'human-consult' ),
			'hatch'          => esc_html__( 'hatch', 'human-consult' ),
			'tossing'        => esc_html__( 'tossing', 'human-consult' ),
			'pulse'          => esc_html__( 'pulse', 'human-consult' ),
			'floating'       => esc_html__( 'floating', 'human-consult' ),
			'bounce'         => esc_html__( 'bounce', 'human-consult' ),
			'pullUp'         => esc_html__( 'pullUp', 'human-consult' ),
			'pullDown'       => esc_html__( 'pullDown', 'human-consult' ),
			'stretchLeft'    => esc_html__( 'stretchLeft', 'human-consult' ),
			'stretchRight'   => esc_html__( 'stretchRight', 'human-consult' ),
			'fadeInUpBig'    => esc_html__( 'fadeInUpBig', 'human-consult' ),
			'fadeInDownBig'  => esc_html__( 'fadeInDownBig', 'human-consult' ),
			'fadeInLeftBig'  => esc_html__( 'fadeInLeftBig', 'human-consult' ),
			'fadeInRightBig' => esc_html__( 'fadeInRightBig', 'human-consult' ),
			'slideInDown'    => esc_html__( 'slideInDown', 'human-consult' ),
			'slideInLeft'    => esc_html__( 'slideInLeft', 'human-consult' ),
			'slideInRight'   => esc_html__( 'slideInRight', 'human-consult' ),
			'moveFromLeft'   => esc_html__( 'moveFromLeft', 'human-consult' ),
			'moveFromRight'  => esc_html__( 'moveFromRight', 'human-consult' ),
			'moveFromBottom' => esc_html__( 'moveFromBottom', 'human-consult' ),
		),
	),
	'custom_class' => array(
		'label' => esc_html__('Custom Class', 'human-consult'),
		'desc'  => esc_html__('Add custom class for section', 'human-consult'),
		'type'  => 'text',
	)
);
