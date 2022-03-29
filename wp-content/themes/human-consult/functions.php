<?php if ( ! defined( 'ABSPATH' ) ) {
	die( 'Direct access forbidden.' );
}


// for customers who not familiar with Loco Translate or similar plugins
define ( 'CUSTOM_NAME_PROJECTS', '' );

/**
 * Theme Includes
 *
 * https://github.com/ThemeFuse/Theme-Includes
 */
require_once get_template_directory() . '/inc/init.php';

/**
 * TGM Plugin Activation
 */
if ( ! class_exists( 'TGM_Plugin_Activation' ) ) {
	/**
	 * Include the TGM_Plugin_Activation class.
	 */
	require_once get_template_directory() . '/inc/TGM-Plugin-Activation/class-tgm-plugin-activation.php';
}

add_action( 'tgmpa_register', 'human_consult_action_register_required_plugins' );


if ( ! function_exists( 'human_consult_action_register_required_plugins' ) ):
	/** @internal */
	function human_consult_action_register_required_plugins() {
		$plugins = array (
			array (
				'name'             => 'Unyson',
				'slug'             => 'unyson',
				'required'         => true,
			),
			array (
				'name'             => 'MailChimp',
				'slug'             => 'mailchimp-for-wp',
				'required'         => true,
			),
			array (
				'name'             => 'MWTemplates Theme Addons',
				'slug'             => 'mwt-addons',
				'source'           => 'http://webdesign-finder.com/human-consult/demo/plugins/mwt-addons.zip',
				'required'         => true,
				'version'          => '1.0',
			),
			array(
				'name'     => 'Contact Form 7',
				'slug'     => 'contact-form-7',
				'required' => true,
			),
			array (
				'name'      => 'MWT Unyson Extension',
				'slug'      => 'mwt-unyson-extensions',
				'source'    => 'http://webdesign-finder.com/human-consult/demo/plugins/mwt-unyson-extensions.zip',
				'required'  => false,
			),
			array (
				'name'      => 'Booked',
				'slug'      => 'booked',
				'source'            => esc_url('http://webdesign-finder.com/remote-demo-content/common-plugins-original/booked.zip'),
				'required'          => false,
			),
			array (
				'name'      => 'Envato Market',
				'slug'      => 'envato-market',
				'source'    => esc_url('http://webdesign-finder.com/remote-demo-content/common-plugins-original/envato-market.zip'),
				'required'  => true,
			),
			array(
				'name'     				=> 'Instagram Feed',
				'slug'     				=> 'instagram-feed',
				'required'              => false,
			),
			array(
				'name'     				=> 'User custom avatar',
				'slug'     				=> 'wp-user-avatar',
				'required'              => false,
			),
			array(
				'name'     				=> 'AccessPress Social Counter',
				'slug'     				=> 'accesspress-social-counter',
				'required'              => true
			),
			array(
				'name'     				=> 'Snazzy Maps',
				'slug'     				=> 'snazzy-maps',
				'required'              => true,
			),
			array(
				'name'     				=> 'Widget CSS Classes',
				'slug'     				=> 'widget-css-classes',
				'required'              => false,
			),
		);
		$config = array(
			'domain'       => 'human-consult',
			'dismissable'  => false,
			'is_automatic' => false
		);
		tgmpa( $plugins, $config );
	}
endif;
