<?php if ( ! defined( 'ABSPATH' ) ) {
	die();
}
if ( ( defined( 'FW' ) ) && ! ( class_exists( 'Human_Consult_Widget_Socials' ) ) ) :

	class Human_Consult_Widget_Socials extends WP_Widget {

		/**
		 * Widget constructor.
		 */
		private $options;
		private $prefix;

		function __construct() {

			$widget_ops = array(
				'classname'   => 'widget_socials',
				'description' => esc_html__( 'Add socials links', 'human-consult' ),
			);

			parent::__construct( false, esc_html__( 'Theme - Socials', 'human-consult' ), $widget_ops );

			//Create our options by using Unyson option types
			$this->options = array(
				'title'        => array(
					'type'  => 'text',
					'label' => esc_html__( 'Widget Title', 'human-consult' ),
				),
				'icon_style'        => array(
					'type'    => 'select',
					'value'   => 'border-icon rounded-icon',
					'label' => esc_html__( 'Icons style', 'human-consult' ),
					'choices' => array(
						'border-icon rounded-icon' => esc_html__( 'Bordered Icons', 'human-consult' ),
						'color-bg-icon rounded-icon' => esc_html__( 'Colorized Icons', 'human-consult' ),
					),
				),
				'social_icons' => array(
					'type'          => 'addable-popup',
					'label'         => esc_html__( 'Icons in list', 'human-consult' ),
					'popup-title'   => esc_html__( 'Add/Edit Icons in list', 'human-consult' ),
					'desc'          => esc_html__( 'Create your tabs', 'human-consult' ),
					'template'      => '{{=icon_title}}',
					'popup-options' => array(
						'icon_title'      => array(
							'label' => esc_html__( 'Social Title', 'human-consult' ),
							'desc'  => esc_html__( 'Enter the title', 'human-consult' ),
							'type'  => 'text',
							'value' => esc_html__( '', 'human-consult' ),
						),
						'icon_class' => array(
							'type'  => 'icon',
							'label' => esc_html__( 'Social Icon', 'human-consult' ),
							'set'   => 'social-icons',
						),
						'icon_link'  => array(
							'type'  => 'text',
							'value' => '',
							'label' => esc_html__( 'Social URL', 'human-consult' ),
						),
					),
				),
			);
			$this->prefix  = 'widget_socials';
		}

		function widget( $args, $instance ) {
			extract( wp_parse_args( $args ) );

			$params = array();

			foreach ( $instance as $key => $value ) {
				$params[ $key ] = $value;
			}

			$instance = $params;

			$filepath = get_template_directory() . '/inc/widgets/socials/views/widget.php';

			if ( file_exists( $filepath ) ) {
				include( $filepath );
			} else {
				_e( 'View not found', 'human-consult' );
			}
		}

		function update( $new_instance, $old_instance ) {
			return fw_get_options_values_from_input(
				$this->options,
				FW_Request::POST( fw_html_attr_name_to_array_multi_key( $this->get_field_name( $this->prefix ) ), array() )
			);
		}

		function form( $values ) {

			$prefix = $this->get_field_id( $this->prefix ); // Get unique prefix, preventing duplicated key
			$id     = 'fw-widget-options-' . $prefix;

			// Print our options
			echo '<div class="fw-force-xs fw-theme-admin-widget-wrap fw-framework-widget-options-widget" data-fw-widget-id="' . esc_attr( $id ) . '" id="' . esc_attr( $id ) . '">';

			echo fw()->backend->render_options( $this->options, $values, array(
				'id_prefix'   => $prefix . '-',
				'name_prefix' => $this->get_field_name( $this->prefix ),
			) );
			echo '</div>';

			return $values;
		}
	}

endif;