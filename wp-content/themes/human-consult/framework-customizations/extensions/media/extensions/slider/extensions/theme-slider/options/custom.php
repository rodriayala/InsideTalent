<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'slide_background' => array(
		'type'        => 'select',
		'value'       => 'ls',
		'label'       => esc_html__( 'Slide background', 'human-consult' ),
		'desc'        => esc_html__( 'Select slide background color', 'human-consult' ),
		'choices'     => array(
			'ls'    => esc_html__( 'Light', 'human-consult' ),
			'ls ms' => esc_html__( 'Light Muted', 'human-consult' ),
			'ds'    => esc_html__( 'Dark', 'human-consult' ),
			'ds ms' => esc_html__( 'Dark Muted', 'human-consult' ),
			'color_1'    => esc_html__( 'Color 1', 'human-consult' ),
			'color_2'    => esc_html__( 'Color 2', 'human-consult' ),
			'color_3'    => esc_html__( 'Color 3', 'human-consult' ),
		),
		/**
		 * Allow save not existing choices
		 * Useful when you use the select to populate it dynamically from js
		 */
		'no-validate' => false,
	),
	'slide_align'      => array(
		'type'        => 'select',
		'value'       => 'text-left',
		'label'       => esc_html__( 'Slide text alignment', 'human-consult' ),
		'desc'        => esc_html__( 'Select slide text alignment', 'human-consult' ),
		'choices'     => array(
			'text-left'   => esc_html__( 'Left', 'human-consult' ),
			'text-center' => esc_html__( 'Center', 'human-consult' ),
			'text-right'  => esc_html__( 'Right', 'human-consult' ),
		),
		/**
		 * Allow save not existing choices
		 * Useful when you use the select to populate it dynamically from js
		 */
		'no-validate' => false,
	),
	'slide_layers'     => array(
		'type'        => 'addable-box',
		'value'       => '',
		'label'       => esc_html__( 'Slide Layers', 'human-consult' ),
		'desc'        => esc_html__( 'Choose a tag and text inside it', 'human-consult' ),
		'box-options' => array(
			'layer_tag'            => array(
				'type'    => 'select',
				'value'   => 'h3',
				'label'   => esc_html__( 'Layer tag', 'human-consult' ),
				'desc'    => esc_html__( 'Select a tag for your ', 'human-consult' ),
				'choices' => array(
					'h3' => esc_html__( 'H3 tag', 'human-consult' ),
					'h2' => esc_html__( 'H2 tag', 'human-consult' ),
					'h4' => esc_html__( 'H4 tag', 'human-consult' ),
					'p'  => esc_html__( 'P tag', 'human-consult' ),
				),
			),
			'layer_animation'      => array(
				'type'    => 'select',
				'value'   => 'fadeIn',
				'label'   => esc_html__( 'Animation type', 'human-consult' ),
				'desc'    => esc_html__( 'Select one of predefined animations', 'human-consult' ),
				'choices' => array(
					''               => 'Default',
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
			'layer_text'           => array(
				'type'  => 'text',
				'value' => '',
				'label' => esc_html__( 'Layer text', 'human-consult' ),
				'desc'  => esc_html__( 'Text to appear in slide layer', 'human-consult' ),
			),
			'layer_text_color'     => array(
				'type'    => 'select',
				'value'   => '',
				'label'   => esc_html__( 'Layer text color', 'human-consult' ),
				'desc'    => esc_html__( 'Select a color for your text in layer', 'human-consult' ),
				'choices' => array(
					''           => 'Inherited',
					'highlight'  => esc_html__( 'First theme main color', 'human-consult' ),
					'highlight2' => esc_html__( 'Second theme main color', 'human-consult' ),
					'grey'       => esc_html__( 'Grey color', 'human-consult' ),
					'black'      => esc_html__( 'Dark color', 'human-consult' ),
					'light'      => esc_html__( 'Light color', 'human-consult' ),
				),
			),
			'layer_text_weight'    => array(
				'type'    => 'select',
				'value'   => 'normal',
				'label'   => esc_html__( 'Layer text weight', 'human-consult' ),
				'desc'    => esc_html__( 'Select a weight for your text in layer', 'human-consult' ),
				'choices' => array(
					'extra-thin' => esc_html__( 'Extra Thin', 'human-consult' ),
					'thin'       => esc_html__( 'Thin', 'human-consult' ),
					'normal'     => esc_html__( 'Normal', 'human-consult' ),
					'medium'     => esc_html__( 'Medium', 'human-consult' ),
					'bold'       => esc_html__( 'Bold', 'human-consult' ),
				),
			),
			'layer_text_transform' => array(
				'type'    => 'select',
				'value'   => 'text-transform-none',
				'label'   => esc_html__( 'Layer text transform', 'human-consult' ),
				'desc'    => esc_html__( 'Select a text transformation for your layer', 'human-consult' ),
				'choices' => array(
					'text-transform-none'  => 'None',
					'text-lowercase'  => esc_html__( 'Lowercase', 'human-consult' ),
					'text-uppercase'  => esc_html__( 'Uppercase', 'human-consult' ),
					'text-capitalize' => esc_html__( 'Capitalize', 'human-consult' ),

				),
			),
			'custom_class' => array(
				'type'  => 'text',
				'value' => '',
				'label' => esc_html__( 'Layer custom class', 'human-consult' ),
				'desc'  => esc_html__( 'Set layer custom class', 'human-consult' ),
			),
		),
		'template'    => esc_html__( 'Slider Layer', 'human-consult' ),

		'limit'           => 5, // limit the number of boxes that can be added
		'add-button-text' => esc_html__( 'Add', 'human-consult' ),
//		'sortable' => true,
	),
	'slide_button'     => array(
		'type'        => 'select',
		'value'       => '',
		'label'       => esc_html__( 'Slide button', 'human-consult' ),
		'desc'        => esc_html__( 'Select slide button. Leave empty if no button needed', 'human-consult' ),
		'choices'     => array(
			''                     => esc_html__( 'None', 'human-consult' ),
			'theme_button color1'  => esc_html__( 'Color 1 button', 'human-consult' ),
			'theme_button color2'  => esc_html__( 'Color 2 button', 'human-consult' ),
			'theme_button inverse color1'  => esc_html__( 'Color 1 inverse button', 'human-consult' ),
			'theme_button inverse color2'  => esc_html__( 'Color 2 inverse button', 'human-consult' ),
		),
		/**
		 * Allow save not existing choices
		 * Useful when you use the select to populate it dynamically from js
		 */
		'no-validate' => false,
	),

	'slide_button_text'      => array(
		'type'  => 'text',
		'value' => '',
		'label' => esc_html__( 'Slide button text', 'human-consult' ),
		'desc'  => esc_html__( 'Text in button', 'human-consult' ),
	),
	'slide_button_link'      => array(
		'type'  => 'text',
		'value' => '',
		'label' => esc_html__( 'Slide button link', 'human-consult' ),
		'desc'  => esc_html__( 'Paste a link', 'human-consult' ),
	),
	'slide_button_animation' => array(
		'type'    => 'select',
		'value'   => 'fadeIn',
		'label'   => esc_html__( 'Button animation type', 'human-consult' ),
		'desc'    => esc_html__( 'Select one of predefined animations', 'human-consult' ),
		'choices' => array(
			''               => 'Default',
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
);