<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$manifest = array();

$manifest['id'] = 'human-consult';

$manifest['supported_extensions'] = array(

	// available extensions:
	//	'styling' => array(),
	//	'feedback' => array(),
	//	'views-count' => array(),
	//	'learning' => array(),
	//	'seo' => array(),

	'social' => array(),
	'page-builder' => array(),
	'slider'       => array(),
	'breadcrumbs'  => array(),
	'megamenu'     => array(),
	'portfolio'    => array(),
	'sidebars'     => array(),
	'backups'      => array(),
);
