<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till main content section
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; //is_singular && pings_open ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php
//page preloader
$preloader_enabled = function_exists( 'fw_get_db_customizer_option' ) ? fw_get_db_customizer_option( 'preloader_enabled' ) : true;
$preloader_image   = function_exists( 'fw_get_db_customizer_option' ) ? fw_get_db_customizer_option( 'preloader_image' ) : false;
if ( $preloader_enabled ) : ?>
	<!-- page preloader -->
	<div class="preloader">
		<div class="preloader_image"<?php echo ( esc_attr($preloader_image )) ? ' style="background-image: url(' . esc_url( $preloader_image['url'] ) . ')"' : '' ?>></div>
	</div>
<?php endif; //preloader_enabled ?>

<!-- search modal -->
<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">
			<i class="rt-icon2-cross2"></i>
		</span>
	</button>
	<div class="widget widget_search">
		<?php get_search_form(); ?>
	</div>
</div>
<?php if (defined('FW')) : ?>
	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls with_padding">
			<?php FW_Flash_Messages::_print_frontend(); ?>
		</div>
	</div><!-- eof .modal -->
<?php endif; ?>

<!-- wrappers for visual page editor and boxed version of template -->
<?php
//light or dark version
$version            = function_exists( 'fw_get_db_customizer_option' ) ? fw_get_db_customizer_option( 'version' ) : 'light';
$main_section_class = ( $version !== 'light' ) ? 'ds' : 'ls';

//get template style from ULR - for demo
if ( isset( $_GET[ 'version' ] ) ) {
	$main_section_class = esc_attr($_GET[ 'version' ]);
}
?>
<div id="canvas" class="wide">
	<div id="box_wrapper">
		<!-- template sections -->
		<?php

		$header = human_consult_get_predefined_template_part( 'header' );
		get_template_part( 'template-parts/header/' . esc_attr( $header ) );

		if ( ! is_front_page() &  ! isset($_GET[ 'home_demo' ])) {
			$breadcrumbs = human_consult_get_predefined_template_part( 'breadcrumbs' );
			get_template_part( 'template-parts/breadcrumbs/' . esc_attr( $breadcrumbs ) );
		}

		if ( ! is_home() ) {
			do_action( 'human_consult_slider' );
		}

		if ( ! is_page_template( 'page-templates/full-width.php' )
			//not opening section if is single post with video format
			&& ! ( is_singular()
			&& ( get_post_format( get_queried_object_id() ) == 'video' ) )
		) : ?>
		<section class="<?php echo esc_attr( $main_section_class ); ?> page_content section_padding_top_140 section_padding_bottom_130 columns_padding_25">
			<div class="container">
				<div class="row">
					<?php if ( is_home() ) { ?>
						<div class="blog-slider col-xs-12">
							<?php do_action( 'human_consult_blog_slider') ; ?>
						</div>
					<?php } ?>
<?php endif; //!full-width ?>