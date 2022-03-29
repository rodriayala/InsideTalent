<?php

if ( ! defined( 'ABSPATH' ) ) {
	die( 'Direct access forbidden.' );
}

//remove page title in shop page
add_filter( 'woocommerce_show_page_title', 'human_consult_filter_remove_shop_title_in_content' );
if ( ! function_exists( 'human_consult_filter_remove_shop_title_in_content' ) ) :
	function human_consult_filter_remove_shop_title_in_content() {
		return false;
	}
endif;

//remove wrappers
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

//wrap in col-sm- and .columns-2 all products on shop page
add_action( 'woocommerce_before_shop_loop', 'human_consult_action_echo_div_columns_before_shop_loop' );
if ( ! function_exists( 'human_consult_action_echo_div_columns_before_shop_loop' ) ) :
	function human_consult_action_echo_div_columns_before_shop_loop() {
		$column_classes = human_consult_get_columns_classes();
		echo '<div id="content_products" class="' . esc_attr( $column_classes[ 'main_column_class' ] ) . '">';
		echo '<div class="columns-3 ">';
	}
endif;

//before shop loop - removing breadcrumbs and results count
remove_filter( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
remove_filter( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
//wrapping sort form in div and adding view toggle button
add_action( 'woocommerce_before_shop_loop', 'human_consult_action_before_shop_loop_wrap_form', 15 );
if ( ! function_exists( 'human_consult_action_before_shop_loop_wrap_form' ) ) :
	function human_consult_action_before_shop_loop_wrap_form() {
		echo '<div class="storefront-sorting bottommargin_30 clearfix">';
	}
endif;

add_action( 'woocommerce_before_shop_loop', 'human_consult_action_before_shop_loop_wrap_form_close', 40 );
if ( ! function_exists( 'human_consult_action_before_shop_loop_wrap_form_close' ) ) :
	function human_consult_action_before_shop_loop_wrap_form_close() {
		woocommerce_result_count();
		echo '</div>';
	}
endif;

//start loop - adding classes to products ul
if ( ! function_exists( 'woocommerce_product_loop_start' ) ) :
	function woocommerce_product_loop_start( $echo = true ) {
		//id products is necessary for scripts
		$html                                    = '<ul class="products list-unstyled grid-view isotope_container">';
		$GLOBALS[ 'woocommerce_loop' ][ 'loop' ] = 0;
		if ( $echo ) {
			echo wp_kses_post( $html );
		} else {
			return $html;
		}
	}
endif;

//loop pagination
//closing main column and getting sidebar if exist
remove_action( 'woocommerce_after_shop_loop', 'woocommerce_pagination' );
add_action( 'woocommerce_after_shop_loop', 'human_consult_action_echo_div_columns_after_shop_loop' );
if ( ! function_exists( 'human_consult_action_echo_div_columns_after_shop_loop' ) ):
	function human_consult_action_echo_div_columns_after_shop_loop() {
		echo '</div><!-- eof .columns-2 -->';
		$pagination_html = human_consult_bootstrap_paginate_links();
		if ( $pagination_html ) {
			echo '<div class="text-center">';
			echo wp_kses_post( $pagination_html );
			echo '</div>';
		}
		echo '</div><!-- eof #content_products -->';
		$column_classes = human_consult_get_columns_classes();
		if ( $column_classes[ 'sidebar_class' ] ): ?>
			<!-- main aside sidebar -->
			<aside class="<?php echo esc_attr( $column_classes[ 'sidebar_class' ] ); ?>">
				<?php get_sidebar(); ?>
			</aside>
			<!-- eof main aside sidebar -->
			<?php
		endif;
	}
endif;

// single product in shop loop
remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );

//start of loop item
add_action( 'woocommerce_before_shop_loop_item', 'human_consult_action_echo_markup_before_shop_loop_item' );
if ( ! function_exists( 'human_consult_action_echo_markup_before_shop_loop_item' ) ):
	function human_consult_action_echo_markup_before_shop_loop_item() {
		echo '<div class="vertical-item content-padding text-center with_shadow">';
		echo '<div class="item-media with_background">';
		woocommerce_template_loop_product_link_open();
	}
endif;

add_action( 'woocommerce_after_shop_loop_item_title', 'human_consult_action_echo_markup_after_shop_loop_item_title' );
if ( ! function_exists( 'human_consult_action_echo_markup_after_shop_loop_item_title' ) ):
	function human_consult_action_echo_markup_after_shop_loop_item_title() {
		woocommerce_template_loop_product_link_close();
		echo '</div> <!-- eof .item-media -->';
		echo '<div class="item-content">';

		//product short description
		woocommerce_template_loop_product_link_open();
		woocommerce_template_loop_product_title();
		woocommerce_template_loop_product_link_close();
		woocommerce_template_loop_price();
		global $post;
		echo apply_filters( 'woocommerce_short_description', $post->post_excerpt );
		woocommerce_template_loop_add_to_cart();

		//Product rating
		if ( ! ( get_option( 'woocommerce_enable_review_rating' ) === 'no' ) ) {
			global $product;
			global $woocommerce;
			if ( version_compare( $woocommerce->version, '3.0', "<" ) ) {
				if ( $rating_html = $product->get_rating_html() ) :
					echo '<h4>' . esc_html__( 'Product Rating', 'human-consult' ) . '</h4>';
					echo wp_kses_post( $rating_html );
				endif;
			} else {
				if ( $rating_html = wc_get_rating_html( $product->get_average_rating() ) ) :
					echo '<h4>' . esc_html__( 'Product Rating', 'human-consult' ) . '</h4>';
					echo wp_kses_post( $rating_html );
				endif;
			}
		}
	}
endif;

//end of loop item
add_action( 'woocommerce_after_shop_loop_item', 'human_consult_action_echo_markup_after_shop_loop_item' );
if ( ! function_exists( 'human_consult_action_echo_markup_after_shop_loop_item' ) ):
	function human_consult_action_echo_markup_after_shop_loop_item() {
		echo '</div> <!-- eof .item-content -->';
		echo '</div> <!-- eof .side-item -->';
	}
endif;

//single product view
//single product image and summary layout
//wrap in col-sm- and .columns-2 all products on shop page
add_action( 'woocommerce_before_single_product', 'human_consult_action_echo_div_columns_before_single_product' );
if ( ! function_exists( 'human_consult_action_echo_div_columns_before_single_product' ) ):
	function human_consult_action_echo_div_columns_before_single_product() {
		$column_classes = human_consult_get_columns_classes();
		echo '<div id="content_product" class="' . esc_attr( $column_classes[ 'main_column_class' ] ) . '">';
	}
endif;

add_action( 'woocommerce_after_single_product', 'human_consult_action_echo_div_columns_after_single_product' );
if ( ! function_exists( 'human_consult_action_echo_div_columns_after_single_product' ) ):
	function human_consult_action_echo_div_columns_after_single_product() {
		echo '</div> <!-- eof .col- -->';
		$column_classes = human_consult_get_columns_classes();
		if ( $column_classes[ 'sidebar_class' ] ): ?>
			<!-- main aside sidebar -->
			<aside class="<?php echo esc_attr( $column_classes[ 'sidebar_class' ] ); ?>">
				<?php get_sidebar(); ?>
			</aside>
			<!-- eof main aside sidebar -->
			<?php
		endif;
	}
endif;

remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );
//add_action('woocommerce_product_thumbnails', 'woocommerce_show_product_sale_flash', 9 );
add_filter( 'woocommerce_single_product_image_html', 'human_consult_filter_put_onsale_span_in_main_image' );
if ( ! function_exists( 'human_consult_filter_put_onsale_span_in_main_image' ) ):
	function human_consult_filter_put_onsale_span_in_main_image( $html ) {
		return $html . woocommerce_show_product_sale_flash();
	}
endif;

add_action( 'woocommerce_product_thumbnails', 'human_consult_action_echo_closing_div_before_single_product_thumbnails', 9 );
if ( ! function_exists( 'human_consult_action_echo_closing_div_before_single_product_thumbnails' ) ):
	function human_consult_action_echo_closing_div_before_single_product_thumbnails() {
		echo '</div><!--eof .images -->';
		echo '<div class="thumbnails-wrap">';
	}
endif;

add_action( 'woocommerce_before_single_product_summary', 'human_consult_action_echo_div_columns_before_single_product_summary', 9 );
if ( ! function_exists( 'human_consult_action_echo_div_columns_before_single_product_summary' ) ):
	function human_consult_action_echo_div_columns_before_single_product_summary() {
		echo '<div class="row">';
		echo '<div class="col-sm-6">';
	}
endif;

add_action( 'woocommerce_before_single_product_summary', 'human_consult_action_echo_div_close_first_column_before_single_product_summary', 21 );
if ( ! function_exists( 'human_consult_action_echo_div_close_first_column_before_single_product_summary' ) ):
	function human_consult_action_echo_div_close_first_column_before_single_product_summary() {
		echo '</div><!-- eof .col-sm- with single product images -->';
		echo '<div class="col-sm-6">';
	}
endif;

add_action( 'woocommerce_after_single_product_summary', 'human_consult_action_echo_div_close_columns_after_single_product_summary', 9 );
if ( ! function_exists( 'human_consult_action_echo_div_close_columns_after_single_product_summary' ) ):
	function human_consult_action_echo_div_close_columns_after_single_product_summary() {
		echo '</div> <!--eof .col-sm- .summary -->';
		echo '</div> <!--eof .row -->';
	}
endif;

//elements in single product summary
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 8 );
add_action( 'woocommerce_single_product_summary', 'human_consult_action_echo_template_single_meta', 9 );
if ( ! function_exists( 'human_consult_action_echo_template_single_meta' ) ):
	function human_consult_action_echo_template_single_meta() {
		echo '<div class="grey theme_buttons small_buttons color1">';
		woocommerce_template_single_meta();
		echo '</div>';
	}
endif;

add_action( 'woocommerce_before_add_to_cart_button', 'human_consult_action_echo_open_div_before_add_to_cart_button' );
if ( ! function_exists( 'human_consult_action_echo_open_div_before_add_to_cart_button' ) ):
	function human_consult_action_echo_open_div_before_add_to_cart_button() {
		echo '<div class="add-to-cart theme_buttons color1">';
	}
endif;

add_action( 'woocommerce_after_add_to_cart_button', 'human_consult_action_echo_open_div_after_add_to_cart_button' );
if ( ! function_exists( 'human_consult_action_echo_open_div_after_add_to_cart_button' ) ):
	function human_consult_action_echo_open_div_after_add_to_cart_button() {
		echo '</div>';
	}
endif;

//account navigation
add_action( 'woocommerce_before_account_navigation', 'human_consult_action_woocommerce_before_account_navigation' );
if ( ! function_exists( 'human_consult_action_woocommerce_before_account_navigation' ) ):
	function human_consult_action_woocommerce_before_account_navigation() {
		echo '<div class="theme_buttons small_buttons">';
	}
endif;

add_action( 'woocommerce_after_account_navigation', 'human_consult_action_woocommerce_after_account_navigation' );
if ( ! function_exists( 'human_consult_action_woocommerce_after_account_navigation' ) ):
	function human_consult_action_woocommerce_after_account_navigation() {
		echo '</div><!-- eof theme_buttons -->';
	}
endif;