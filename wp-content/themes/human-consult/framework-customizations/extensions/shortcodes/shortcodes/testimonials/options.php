<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'title'              => array(
		'label' => esc_html__( 'Title', 'human-consult' ),
		'desc'  => esc_html__( 'Optional Testimonials Title', 'human-consult' ),
		'type'  => 'text',
	),
	'testimonials_group' => array(
		'type'    => 'multi-picker',
		'label'   => false,
		'desc'    => false,
		'picker'  => array(
			'testimonials_layout' => array(
				'type'    => 'select',
				'value'   => 'testimonials_carousel',
				'label'   => esc_html__( 'Testimonials Layout', 'human-consult' ),
				'desc'    => esc_html__( 'Select one of predefined testimonials layout', 'human-consult' ),
				'choices' => array(
					'testimonials_carousel'         => esc_html__( 'Testimonials Carousel', 'human-consult' ),
					'testimonials_grid' => esc_html__( 'Testimonials Grid', 'human-consult' ),
				),
			),
		),
		'choices' => array(
			'testimonials_carousel'         => array(
				'testimonials' => array(
					'label'         => esc_html__( 'Testimonials', 'human-consult' ),
					'popup-title'   => esc_html__( 'Add/Edit Testimonial', 'human-consult' ),
					'desc'          => esc_html__( 'Here you can add, remove and edit your Testimonials.', 'human-consult' ),
					'type'          => 'addable-popup',
					'template'      => '{{=author_name}}',
					'popup-options' => array(
						'author_avatar' => array(
							'label' => esc_html__( 'Image', 'human-consult' ),
							'desc'  => esc_html__( 'Either upload a new, or choose an existing image from your media library', 'human-consult' ),
							'type'  => 'upload',
						),
						'author_name'   => array(
							'label' => esc_html__( 'Name', 'human-consult' ),
							'desc'  => esc_html__( 'Enter the Name of the Person to quote', 'human-consult' ),
							'type'  => 'text'
						),
						'author_job'    => array(
							'label' => esc_html__( 'Position', 'human-consult' ),
							'desc'  => esc_html__( 'Can be used for a job description', 'human-consult' ),
							'type'  => 'text'
						),
						'site_name'     => array(
							'label' => esc_html__( 'Website Name', 'human-consult' ),
							'desc'  => esc_html__( 'Linktext for the above Link', 'human-consult' ),
							'type'  => 'text'
						),
						'site_url'      => array(
							'label' => esc_html__( 'Website Link', 'human-consult' ),
							'desc'  => esc_html__( 'Link to the Persons website', 'human-consult' ),
							'type'  => 'text'
						),
						'content'       => array(
							'label' => esc_html__( 'Quote', 'human-consult' ),
							'desc'  => esc_html__( 'Enter the testimonial here', 'human-consult' ),
							'type'  => 'textarea',
						),
					)
				),
			),
			'testimonials_grid'         => array(
				'testimonials' => array(
					'label'         => esc_html__( 'Testimonials', 'human-consult' ),
					'popup-title'   => esc_html__( 'Add/Edit Testimonial', 'human-consult' ),
					'desc'          => esc_html__( 'Here you can add, remove and edit your Testimonials.', 'human-consult' ),
					'type'          => 'addable-popup',
					'template'      => '{{=author_name}}',
					'popup-options' => array(
						'author_avatar' => array(
							'label' => esc_html__( 'Image', 'human-consult' ),
							'desc'  => esc_html__( 'Either upload a new, or choose an existing image from your media library', 'human-consult' ),
							'type'  => 'upload',
						),
						'author_name'   => array(
							'label' => esc_html__( 'Name', 'human-consult' ),
							'desc'  => esc_html__( 'Enter the Name of the Person to quote', 'human-consult' ),
							'type'  => 'text'
						),
						'author_job'    => array(
							'label' => esc_html__( 'Position', 'human-consult' ),
							'desc'  => esc_html__( 'Can be used for a job description', 'human-consult' ),
							'type'  => 'text'
						),
						'site_name'     => array(
							'label' => esc_html__( 'Website Name', 'human-consult' ),
							'desc'  => esc_html__( 'Linktext for the above Link', 'human-consult' ),
							'type'  => 'text'
						),
						'site_url'      => array(
							'label' => esc_html__( 'Website Link', 'human-consult' ),
							'desc'  => esc_html__( 'Link to the Persons website', 'human-consult' ),
							'type'  => 'text'
						),
						'content'       => array(
							'label' => esc_html__( 'Quote', 'human-consult' ),
							'desc'  => esc_html__( 'Enter the testimonial here', 'human-consult' ),
							'type'  => 'textarea',
						),
					)
				),
			),
		),
	),
);