<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * Framework options
 *
 * @var array $options Fill this array with options to generate framework settings form in WordPress customizer
 */

//find fw_ext
$shortcodes_extension = fw()->extensions->get( 'shortcodes' );
$header_social_icons  = array();
if ( ! empty( $shortcodes_extension ) ) {
	$header_social_icons = $shortcodes_extension->get_shortcode( 'icons_social' )->get_options();
}

//header button
$header_button  = array();
if ( ! empty( $shortcodes_extension ) ) {
	$header_button = $shortcodes_extension->get_shortcode( 'button' )->get_options();
}


$slider_extension = fw()->extensions->get( 'slider' );
$choices = '';
if ( ! empty ( $slider_extension ) ) {
	$choices = $slider_extension->get_populated_sliders_choices();
}

//adding empty value to disable slider
$choices['0'] = esc_html__( 'No Slider', 'human-consult' );

$options = array(
	'logo_section'    => array(
		'title'   => esc_html__( 'Site Logo', 'human-consult' ),
		'options' => array(
			'logo_image'             => array(
				'type'        => 'upload',
				'value'       => array(),
				'attr'        => array( 'class' => 'logo_image-class', 'data-logo_image' => 'logo_image' ),
				'label'       => esc_html__( 'Main logo image that appears in header', 'human-consult' ),
				'desc'        => esc_html__( 'Select your logo', 'human-consult' ),
				'help'        => esc_html__( 'Choose image to display as a site logo', 'human-consult' ),
				'images_only' => true,
				'files_ext'   => array( 'png', 'jpg', 'jpeg', 'gif', 'svg' ),
			),
			'logo_text' => array(
				'type'  => 'text',
				'value' => 'Human Consult',
				'attr'  => array( 'class' => 'logo_text-class', 'data-logo_text' => 'logo_text' ),
				'label' => esc_html__( 'Logo Text', 'human-consult' ),
				'desc'  => esc_html__( 'Text that appears near logo image', 'human-consult' ),
				'help'  => esc_html__( 'Type your text to show it in logo', 'human-consult' ),
			),
			'logo_subtext' => array(
				'type'  => 'text',
				'value' => 'WordPress Theme',
				'attr'  => array( 'class' => 'logo_subtext-class', 'data-logo_subtext' => 'logo_subtext' ),
				'label' => esc_html__( 'Logo Subtext', 'human-consult' ),
				'desc'  => esc_html__( 'Text that appears near logo text', 'human-consult' ),
			),
			'logo_center' => array(
				'label' => esc_html__( 'Logo center', 'human-consult' ),
				'desc' => esc_html__( 'Centered image logo between text and subtext', 'human-consult' ),
				'help' => esc_html__( 'Centered image logo after main logo text and before logo subtext. Use this option only for Header 1 type.', 'human-consult' ),
				'type' => 'switch',
				'right-choice' => array(
					'value' => 'yes',
					'label' => esc_html__( 'Yes', 'human-consult' )
				),
				'left-choice' => array(
					'value' => 'no',
					'label' => esc_html__( 'No', 'human-consult' )
				),
				'value' => 'no',
			),
		),
	),
	'version'         => array(
		'title'   => esc_html__( 'Theme Variant', 'human-consult' ),
		'options' => array(
			'version' => array(
				'type'    => 'radio',
				'value'   => 'light',
				'attr'    => array( 'class' => 'theme-layout-class', 'data-theme-layout' => 'layout' ),
				'label'   => esc_html__( 'Theme Version', 'human-consult' ),
				'desc'    => esc_html__( 'Light or dark version', 'human-consult' ),
				'help'    => esc_html__( 'Select one of predefined versions', 'human-consult' ),
				'choices' => array( // Note: Avoid bool or int keys http://bit.ly/1cQgVzk
					'light' => esc_html__( 'Light', 'human-consult' ),
					'dark'  => esc_html__( 'Dark', 'human-consult' ),
				),
				// Display choices inline instead of list
				'inline'  => true,
			),
		),
	),
	'color_scheme_number'     => array(
		'title'   => esc_html__( 'Theme Color Scheme', 'human-consult' ),
		'options' => array(
			'color_scheme_number' => array(
				'type'    => 'image-picker',
				'value'   => '',
				'label'   => esc_html__( 'Color scheme', 'human-consult' ),
				'desc'    => esc_html__( 'Select one of predefined theme main colors', 'human-consult' ),
				'choices' => array(
					'' => get_template_directory_uri() . '/img/theme-options/color_scheme1.png',
					'2' => get_template_directory_uri() . '/img/theme-options/color_scheme2.png',
					'3' => get_template_directory_uri() . '/img/theme-options/color_scheme3.png',
				),
				'blank'   => false, // (optional) if true, image can be deselected
			),

		),
	),
	'blog_posts' => array(
		'title'   => esc_html__( 'Theme Blog', 'human-consult' ),
		'options' => array(
			'post_categories'         => array(
				'label'        => esc_html__( 'Post Categories', 'human-consult' ),
				'desc'         => esc_html__( 'Show post categories?', 'human-consult' ),
				'type'         => 'switch',
				'right-choice' => array(
					'value' => 'yes',
					'label' => esc_html__( 'Yes', 'human-consult' )
				),
				'left-choice'  => array(
					'value' => 'no',
					'label' => esc_html__( 'No', 'human-consult' )
				),
				'value'        => 'yes',
			),
			'post_author'         => array(
				'label'        => esc_html__( 'Post Author', 'human-consult' ),
				'desc'         => esc_html__( 'Show post author?', 'human-consult' ),
				'type'         => 'switch',
				'right-choice' => array(
					'value' => 'yes',
					'label' => esc_html__( 'Yes', 'human-consult' )
				),
				'left-choice'  => array(
					'value' => 'no',
					'label' => esc_html__( 'No', 'human-consult' )
				),
				'value'        => 'yes',
			),
			'post_date'         => array(
				'label'        => esc_html__( 'Post Date', 'human-consult' ),
				'desc'         => esc_html__( 'Show post date?', 'human-consult' ),
				'type'         => 'switch',
				'right-choice' => array(
					'value' => 'yes',
					'label' => esc_html__( 'Yes', 'human-consult' )
				),
				'left-choice'  => array(
					'value' => 'no',
					'label' => esc_html__( 'No', 'human-consult' )
				),
				'value'        => 'yes',
			),
			'post_tags'         => array(
				'label'        => esc_html__( 'Post Tags', 'human-consult' ),
				'desc'         => esc_html__( 'Show post tags?', 'human-consult' ),
				'type'         => 'switch',
				'right-choice' => array(
					'value' => 'yes',
					'label' => esc_html__( 'Yes', 'human-consult' )
				),
				'left-choice'  => array(
					'value' => 'no',
					'label' => esc_html__( 'No', 'human-consult' )
				),
				'value'        => 'yes',
			),
			'blog_slider_switch' => array(
				'type'    => 'multi-picker',
				'label'   => false,
				'desc'    => false,
				'picker'  => array(
					'blog_slider_enabled' => array(
						'type'         => 'switch',
						'value'        => '',
						'label'        => esc_html__( 'Post slider', 'human-consult' ),
						'desc'         => esc_html__( 'Enable slider on blog page', 'human-consult' ),
						'left-choice'  => array(
							'value' => '',
							'label' => esc_html__( 'No', 'human-consult' ),
						),
						'right-choice' => array(
							'value' => 'yes',
							'label' => esc_html__( 'Yes', 'human-consult' ),
						),
					),
				),
				'choices' => array(
					'yes' => array(
						'slider_id' => array(
							'type'    => 'select',
							'value'   => '',
							'label'   => esc_html__( 'Select Slider', 'human-consult' ),
							'choices' => $choices
						),
					),
				),
			),
		)
	),
	'headers'     => array(
		'title'   => esc_html__( 'Theme Header', 'human-consult' ),
		'options' => array(

			'header'       => array(
				'type'    => 'image-picker',
				'value'   => '1',
				'attr'    => array(
					'class'    => 'header-thumbnail',
					'data-foo' => 'header',
				),
				'label'   => esc_html__( 'Template Header', 'human-consult' ),
				'desc'    => esc_html__( 'Select one of predefined theme headers', 'human-consult' ),
				'help'    => esc_html__( 'You can select one of predefined theme headers', 'human-consult' ),
				'choices' => array(
					'1' => get_template_directory_uri() . '/img/theme-options/header1.png',
					'2' => get_template_directory_uri() . '/img/theme-options/header2.png',
					'21' => get_template_directory_uri() . '/img/theme-options/header21.png',
					'22' => get_template_directory_uri() . '/img/theme-options/header22.png',
					'23' => get_template_directory_uri() . '/img/theme-options/header23.png',
					'24' => get_template_directory_uri() . '/img/theme-options/header24.png',
				),
				'blank'   => false, // (optional) if true, image can be deselected
			),
			'header_button' => array(
				'type'          => 'popup',
				'attr'    => array(
					'rel' => 'PageScroll2id',
				),
				'label'         => esc_html__( 'Header Button', 'human-consult' ),
				'popup-title'   => esc_html__( 'Edit Button', 'human-consult' ),
				'button'   => esc_html__( 'Edit Button', 'human-consult' ),
				'popup-options' => $header_button,
			),
			//'social_icons'
			$header_social_icons,
		),
	),
	'footer'          => array(
		'title'   => esc_html__( 'Theme Footer', 'human-consult' ),
		'options' => array(
			'footer'           => array(
				'label'   => esc_html__( 'Footer Columns', 'human-consult' ),
				'desc'    => esc_html__( 'Select the number of footer columns', 'human-consult' ),
				'type'    => 'short-select',
				'value'   => '1',
				'choices' => array(
					'1' => esc_html__( '3 columns', 'human-consult' ),
					'2' => esc_html__( '4 columns', 'human-consult' ),
				),
			),
			'footer_color'           => array(
				'label'   => esc_html__( 'Footer Color', 'human-consult' ),
				'desc'    => esc_html__( 'Select footer color', 'human-consult' ),
				'type'    => 'short-select',
				'value'   => 'ds',
				'choices' => array(
					'ds' => esc_html__( 'Dark', 'human-consult' ),
					'ls ms' => esc_html__( 'Light', 'human-consult' ),
				),
			),
			'footer_image'            => array(
				'label' => esc_html__( 'Footer Image', 'human-consult' ),
				'desc'  => esc_html__( 'Upload a footer image', 'human-consult' ),
				'help'  => esc_html__( "This default footer image will be used for all theme pages.", "human-consult" ),
				'type'  => 'upload'
			),
			'copyrights'      => array(
				'type'    => 'short-select',
				'value'   => '1',
				'label'   => esc_html__( 'Page copyrights', 'human-consult' ),
				'desc'    => esc_html__( 'Copyrights color.', 'human-consult' ),
				'help'    => esc_html__( 'You can select one of predefined background colors', 'human-consult' ),
				'choices' => array(
					'1' => esc_html__( 'Dark', 'human-consult' ),
					'2' => esc_html__( 'Light', 'human-consult' ),
					'3' => esc_html__( 'Color', 'human-consult' ),
				),
			),
			'copyrights_text' => array(
				'type'  => 'textarea',
				'value' => '&copy; Copyright 2017 All Rights Reserved',
				'label' => esc_html__( 'Copyrights text', 'human-consult' ),
				'desc'  => esc_html__( 'Please type your copyrights text', 'human-consult' ),
			),
		),
	),
	'fonts_panel'     => array(
		'title'   => esc_html__( 'Theme Fonts', 'human-consult' ),
		'options' => array(
			'body_fonts_section' => array(
				'title'   => esc_html__( 'Font for body', 'human-consult' ),
				'options' => array(
					'body_font_picker_switch' => array(
						'type'    => 'multi-picker',
						'label'   => false,
						'desc'    => false,
						'picker'  => array(
							'main_font_enabled' => array(
								'type'         => 'switch',
								'value'        => '',
								'label'        => esc_html__( 'Enable', 'human-consult' ),
								'desc'         => esc_html__( 'Enable custom body font', 'human-consult' ),
								'left-choice'  => array(
									'value' => '',
									'label' => esc_html__( 'Disabled', 'human-consult' ),
								),
								'right-choice' => array(
									'value' => 'main_font_options',
									'label' => esc_html__( 'Enabled', 'human-consult' ),
								),
							),
						),
						'choices' => array(
							'main_font_options' => array(
								'main_font' => array(
									'type'       => 'typography-v2',
									'value'      => array(
										'family'         => 'Montserrat',
										// For standard fonts, instead of subset and variation you should set 'style' and 'weight'.
										// 'style' => 'italic',
										// 'weight' => 700,
										'subset'         => 'latin-ext',
										'variation'      => 'regular',
										'size'           => 16,
										'line-height'    => 30,
										'letter-spacing' => 0,
										'color'          => '#323232'
									),
									'components' => array(
										'family'         => true,
										// 'style', 'weight', 'subset', 'variation' will appear and disappear along with 'family'
										'size'           => true,
										'line-height'    => true,
										'letter-spacing' => true,
										'color'          => false
									),
									'attr'       => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
									'label'      => esc_html__( 'Custom font', 'human-consult' ),
									'desc'       => esc_html__( 'Select custom font for headings', 'human-consult' ),
									'help'       => esc_html__( 'You should enable using custom heading fonts above at first', 'human-consult' ),
								),
							),
						),
					),
				),
			),

			'headings_fonts_section' => array(
				'title'   => esc_html__( 'Font for headings', 'human-consult' ),
				'options' => array(
					'h_font_picker_switch' => array(
						'type'    => 'multi-picker',
						'label'   => false,
						'desc'    => false,
						'picker'  => array(
							'h_font_enabled' => array(
								'type'         => 'switch',
								'value'        => '',
								'label'        => esc_html__( 'Enable', 'human-consult' ),
								'desc'         => esc_html__( 'Enable custom heading font', 'human-consult' ),
								'left-choice'  => array(
									'value' => '',
									'label' => esc_html__( 'Disabled', 'human-consult' ),
								),
								'right-choice' => array(
									'value' => 'h_font_options',
									'label' => esc_html__( 'Enabled', 'human-consult' ),
								),
							),
						),
						'choices' => array(
							'h_font_options' => array(
								'h_font' => array(
									'type'       => 'typography-v2',
									'value'      => array(
										'family'         => 'Montserrat',
										// For standard fonts, instead of subset and variation you should set 'style' and 'weight'.
										// 'style' => 'italic',
										// 'weight' => 700,
										'subset'         => 'latin-ext',
										'variation'      => 'regular',
										'size'           => 16,
										'line-height'    => 30,
										'letter-spacing' => 0,
										'color'          => '#323232'
									),
									'components' => array(
										'family'         => true,
										// 'style', 'weight', 'subset', 'variation' will appear and disappear along with 'family'
										'size'           => false,
										'line-height'    => false,
										'letter-spacing' => true,
										'color'          => false
									),
									'attr'       => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
									'label'      => esc_html__( 'Custom font', 'human-consult' ),
									'desc'       => esc_html__( 'Select custom font for headings', 'human-consult' ),
									'help'       => esc_html__( 'You should enable using custom heading fonts above at first', 'human-consult' ),
								),
							),
						),
					),
				),
			),

		),
	),
	'preloader_panel' => array(
		'title' => esc_html__( 'Theme Preloader', 'human-consult' ),

		'options' => array(
			'preloader_enabled' => array(
				'type'         => 'switch',
				'value'        => '1',
				'label'        => esc_html__( 'Enable Preloader', 'human-consult' ),
				'left-choice'  => array(
					'value' => '1',
					'label' => esc_html__( 'Enabled', 'human-consult' ),
				),
				'right-choice' => array(
					'value' => '0',
					'label' => esc_html__( 'Disabled', 'human-consult' ),
				),
			),

			'preloader_image' => array(
				'type'        => 'upload',
				'value'       => '',
				'label'       => esc_html__( 'Custom preloader image', 'human-consult' ),
				'help'        => esc_html__( 'GIF image recommended. Recommended maximum preloader width 150px, maximum preloader height 150px.', 'human-consult' ),
				'images_only' => true,
			),


		),
	),
	'share_buttons'   => array(
		'title' => esc_html__( 'Theme Share Buttons', 'human-consult' ),

		'options' => array(
			'share_facebook'    => array(
				'type'         => 'switch',
				'value'        => '1',
				'label'        => esc_html__( 'Enable Facebook Share Button', 'human-consult' ),
				'left-choice'  => array(
					'value' => '1',
					'label' => esc_html__( 'Enabled', 'human-consult' ),
				),
				'right-choice' => array(
					'value' => '0',
					'label' => esc_html__( 'Disabled', 'human-consult' ),
				),
			),
			'share_twitter'     => array(
				'type'         => 'switch',
				'value'        => '1',
				'label'        => esc_html__( 'Enable Twitter Share Button', 'human-consult' ),
				'left-choice'  => array(
					'value' => '1',
					'label' => esc_html__( 'Enabled', 'human-consult' ),
				),
				'right-choice' => array(
					'value' => '0',
					'label' => esc_html__( 'Disabled', 'human-consult' ),
				),
			),
			'share_google_plus' => array(
				'type'         => 'switch',
				'value'        => '1',
				'label'        => esc_html__( 'Enable Google+ Share Button', 'human-consult' ),
				'left-choice'  => array(
					'value' => '1',
					'label' => esc_html__( 'Enabled', 'human-consult' ),
				),
				'right-choice' => array(
					'value' => '0',
					'label' => esc_html__( 'Disabled', 'human-consult' ),
				),
			),
			'share_pinterest'   => array(
				'type'         => 'switch',
				'value'        => '1',
				'label'        => esc_html__( 'Enable Pinterest Share Button', 'human-consult' ),
				'left-choice'  => array(
					'value' => '1',
					'label' => esc_html__( 'Enabled', 'human-consult' ),
				),
				'right-choice' => array(
					'value' => '0',
					'label' => esc_html__( 'Disabled', 'human-consult' ),
				),
			),
			'share_linkedin'    => array(
				'type'         => 'switch',
				'value'        => '1',
				'label'        => esc_html__( 'Enable LinkedIn Share Button', 'human-consult' ),
				'left-choice'  => array(
					'value' => '1',
					'label' => esc_html__( 'Enabled', 'human-consult' ),
				),
				'right-choice' => array(
					'value' => '0',
					'label' => esc_html__( 'Disabled', 'human-consult' ),
				),
			),
			'share_tumblr'      => array(
				'type'         => 'switch',
				'value'        => '1',
				'label'        => esc_html__( 'Enable Tumblr Share Button', 'human-consult' ),
				'left-choice'  => array(
					'value' => '1',
					'label' => esc_html__( 'Enabled', 'human-consult' ),
				),
				'right-choice' => array(
					'value' => '0',
					'label' => esc_html__( 'Disabled', 'human-consult' ),
				),
			),
			'share_reddit'      => array(
				'type'         => 'switch',
				'value'        => '1',
				'label'        => esc_html__( 'Enable Reddit Share Button', 'human-consult' ),
				'left-choice'  => array(
					'value' => '1',
					'label' => esc_html__( 'Enabled', 'human-consult' ),
				),
				'right-choice' => array(
					'value' => '0',
					'label' => esc_html__( 'Disabled', 'human-consult' ),
				),
			),

		),
	),

);
