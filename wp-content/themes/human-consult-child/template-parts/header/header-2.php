<?php
/**
 * The template part for selected header
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
$social_icons = function_exists( 'fw_get_db_customizer_option' ) ? fw_get_db_customizer_option( 'social_icons' ) : '';

$header_button = function_exists( 'fw_get_db_customizer_option' ) ? fw_get_db_customizer_option( 'header_button' ) : '';

//light or dark version
$version            = function_exists( 'fw_get_db_customizer_option' ) ? fw_get_db_customizer_option( 'version' ) : 'light';
$main_section_class = ( $version !== 'light' ) ? 'ds' : 'ls';

//get template style from ULR - for demo
if ( isset( $_GET['version'] ) ) {
	$main_section_class = esc_attr( $_GET['version'] );
}
?>
<section
	class="page_topline with_search <?php echo esc_html( $main_section_class ); ?> section_padding_25 table_section">
	<h3 class="hidden"><?php echo esc_html__( 'Page Topline', 'human-consult' ); ?></h3>
	<div class="container">
		<div class="row">
			<div class="col-md-4 text-center text-md-left">
				<div class="darklinks">
					<div class="page_social_icons">
						<?php
						//get icons-social shortcode to render icons in team member item
						$shortcodes_extension = defined( 'FW' ) ? fw()->extensions->get( 'shortcodes' ) : '';
						if ( ! empty( $shortcodes_extension ) ) {
							echo fw_ext( 'shortcodes' )->get_shortcode( 'icons_social' )->render( array( 'social_icons' => $social_icons ) );
						}
						?>
					</div><!-- eof social icons -->
				</div>
			</div>
			<div class="col-md-4 text-center">
				<div class="header_center_logo">
					<?php get_template_part( 'template-parts/header/header-logo' ); ?>
				</div><!-- eof .header_left_logo -->
			</div>
			<div class="col-md-4 header_right_buttons text-center text-md-right hidden-xs hidden-sm">
				<?php if ( ( ! empty( $header_button ) ) ) : ?>
						<?php
						if ( ! empty( $shortcodes_extension ) ) {
							echo fw_ext( 'shortcodes' )->get_shortcode( 'button' )->render( $header_button );
						}
						?>
				<?php endif; ?>
			</div><!-- eof .header_button -->
		</div>
	</div>
</section><!-- .page_topline -->
<header class="page_header <?php echo esc_html( $main_section_class ); ?> toggler_center with_top_border affix-top">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 display_table">
				<div class="header_mainmenu display_table_cell text-center">
					<nav class="mainmenu_wrapper primary-navigation">
						<?php wp_nav_menu( array(
							'theme_location' => 'primary',
							'menu_class'     => 'sf-menu nav-menu nav',
							'container'      => 'ul'
						) ); ?>
					</nav>
					<span class="toggle_menu"><span></span></span>
				</div><!--	eof .col-sm-* -->
			</div>
		</div><!--	eof .row-->
	</div> <!--	eof .container-->
</header><!-- eof .page_header -->