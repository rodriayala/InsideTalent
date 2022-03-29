<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'main' => array(
		'type'    => 'box',
		'title'   => '',
		'options' => array(
			'id'       => array(
				'type' => 'unique',
			),
			'builder'  => array(
				'type'    => 'tab',
				'title'   => esc_html__( 'Form Fields', 'human-consult' ),
				'options' => array(
					'form' => array(
						'label'        => false,
						'type'         => 'form-builder',
						'value'        => array(
							'json' => apply_filters( 'fw:ext:forms:builder:load-item:form-header-title', true )
								? json_encode( array(
									array(
										'type'      => 'form-header-title',
										'shortcode' => 'form_header_title',
										'width'     => '',
										'options'   => array(
											'title'    => '',
											'subtitle' => '',
										)
									)
								) )
								: '[]'
						),
						'fixed_header' => true,
					),
				),
			),
			'settings' => array(
				'type'    => 'tab',
				'title'   => esc_html__( 'Settings', 'human-consult' ),
				'options' => array(
					'settings-options' => array(
						'title'   => esc_html__( 'Contact Form Options', 'human-consult' ),
						'type'    => 'tab',
						'options' => array(
							'background_color'    => array(
								'type'    => 'select',
								'value'   => 'ls',
								'label'   => esc_html__( 'Form Background color', 'human-consult' ),
								'desc'    => esc_html__( 'Select background color', 'human-consult' ),
								'help'    => esc_html__( 'Select one of predefined background colors', 'human-consult' ),
								'choices' => array(
									''                              => esc_html__( 'No background', 'human-consult' ),
									'with_padding overflow-hidden light_form'               => esc_html__( 'Light', 'human-consult' ),
									'with_padding overflow-hidden transp_black_bg'            => esc_html__( 'Dark', 'human-consult' ),
									'with_padding overflow-hidden color_form'               => esc_html__( 'Main color', 'human-consult' ),
								),
							),
							'field_text_align' => array(
								'type'    => 'select',
								'value'   => 'text-left',
								'label'   => esc_html__( 'Field text alignment', 'human-consult' ),
								'desc'    => esc_html__( 'Select field text alignment', 'human-consult' ),
								'choices' => array(
									'text-left'   => esc_html__( 'Left', 'human-consult' ),
									'text-center' => esc_html__( 'Center', 'human-consult' ),
									'text-right'  => esc_html__( 'Right', 'human-consult' ),
								),
							),
							'columns_padding'     => array(
								'type'    => 'select',
								'value'   => 'columns_padding_15',
								'label'   => esc_html__( 'Column paddings in form', 'human-consult' ),
								'desc'    => esc_html__( 'Choose columns horizontal paddings value', 'human-consult' ),
								'choices' => array(
									'columns_padding_15' => esc_html__( '15 px - default', 'human-consult' ),
									'columns_padding_0'  => esc_html__( '0', 'human-consult' ),
									'columns_padding_1'  => esc_html__( '1 px', 'human-consult' ),
									'columns_padding_2'  => esc_html__( '2 px', 'human-consult' ),
									'columns_padding_5'  => esc_html__( '5 px', 'human-consult' ),
									'columns_padding_10'  => esc_html__( '10 px', 'human-consult' ),
								),
							),
							'form_email_settings' => array(
								'type'    => 'group',
								'options' => array(
									'email_to' => array(
										'type'  => 'text',
										'label' => esc_html__( 'Email To', 'human-consult' ),
										'help'  => esc_html__( 'We recommend you to use an email that you verify often', 'human-consult' ),
										'desc'  => esc_html__( 'The form will be sent to this email address.', 'human-consult' ),
									),
								),
							),
							'form_text_settings'  => array(
								'type'    => 'group',
								'options' => array(
									'subject-group'       => array(
										'type'    => 'group',
										'options' => array(
											'subject_message' => array(
												'type'  => 'text',
												'label' => esc_html__( 'Subject Message', 'human-consult' ),
												'desc'  => esc_html__( 'This text will be used as subject message for the email', 'human-consult' ),
												'value' => esc_html__( 'Contact Form', 'human-consult' ),
											),
										)
									),
									'submit-button-group' => array(
										'type'    => 'group',
										'options' => array(
											'submit_button_text' => array(
												'type'  => 'text',
												'label' => esc_html__( 'Submit Button', 'human-consult' ),
												'desc'  => esc_html__( 'This text will appear in submit button', 'human-consult' ),
												'value' => esc_html__( 'Send', 'human-consult' ),
											),
											'reset_button_text'  => array(
												'type'  => 'text',
												'label' => esc_html__( 'Reset Button', 'human-consult' ),
												'desc'  => esc_html__( 'This text will appear in reset button. Leave blank if reset button not needed', 'human-consult' ),
												'value' => esc_html__( 'Clear', 'human-consult' ),
											),
											'button_size'      => array(
												'type'         => 'switch',
												'label'        => esc_html__( 'Button size', 'human-consult' ),
												'value'        => '',
												'right-choice' => array(
													'value' => 'wide_button',
													'label' => esc_html__( 'Large', 'human-consult' ),
												),
												'left-choice'  => array(
													'value' => '',
													'label' => esc_html__( 'Normal', 'human-consult' ),
												),
											),
											'button_color'  => array(
												'label'   => esc_html__( 'Button Color', 'human-consult' ),
												'desc'    => esc_html__( 'Choose a color for your button', 'human-consult' ),
												'type'    => 'select',
												'choices' => array(
													'color1'  => esc_html__( 'Color 1', 'human-consult' ),
													'color2'  => esc_html__( 'Color 2', 'human-consult' ),
													'inverse color1'  => esc_html__( 'Inverse Color 1', 'human-consult' ),
													'inverse color2'  => esc_html__( 'Inverse Color 2', 'human-consult' ),
												),
											),
											'button_align' => array(
												'type'    => 'select',
												'value'   => 'text-left',
												'label'   => esc_html__( 'Button alignment', 'human-consult' ),
												'desc'    => esc_html__( 'Select button alignment', 'human-consult' ),
												'choices' => array(
													'text-left'   => esc_html__( 'Left', 'human-consult' ),
													'text-center' => esc_html__( 'Center', 'human-consult' ),
													'text-right'  => esc_html__( 'Right', 'human-consult' ),
												),
											),
										)
									),
									'success-group'       => array(
										'type'    => 'group',
										'options' => array(
											'success_message' => array(
												'type'  => 'text',
												'label' => esc_html__( 'Success Message', 'human-consult' ),
												'desc'  => esc_html__( 'This text will be displayed when the form will successfully send', 'human-consult' ),
												'value' => esc_html__( 'Message sent!', 'human-consult' ),
											),
										)
									),
									'failure_message'     => array(
										'type'  => 'text',
										'label' => esc_html__( 'Failure Message', 'human-consult' ),
										'desc'  => esc_html__( 'This text will be displayed when the form will fail to be sent', 'human-consult' ),
										'value' => esc_html__( 'Oops something went wrong.', 'human-consult' ),
									),
								),
							),
						)
					),
					'mailer-options'   => array(
						'title'   => esc_html__( 'Mailer Options', 'human-consult' ),
						'type'    => 'tab',
						'options' => array(
							'mailer' => array(
								'label' => false,
								'type'  => 'mailer'
							)
						)
					)
				),
			),
		),
	)
);