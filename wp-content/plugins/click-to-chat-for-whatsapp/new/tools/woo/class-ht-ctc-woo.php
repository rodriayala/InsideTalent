<?php
/**
 * woocommerce related front end.
 * 
 * @package ctc
 * @since 2.9
 */

if ( ! defined( 'ABSPATH' ) ) exit;

if ( ! class_exists( 'HT_CTC_WOO_Pages' ) ) :

class HT_CTC_WOO_Pages {

    public function __construct() {
        $this->woo_hooks();
    }
    
    // Hooks
    public function woo_hooks() {

        $woo = get_option('ht_ctc_woo_options');
        
        // chat - woo values
        add_filter( 'ht_ctc_fh_chat', array($this, 'chat') );

        // woo places
        $woo_position = ( isset( $woo['woo_position']) ) ? esc_attr( $woo['woo_position'] ) : 'select';
        if ('select' !== $woo_position) {
            add_action( $woo_position, [$this, 'call_add_styles'] );
        }

    }


    // call add styles if its woo single product page..
    function call_add_styles() {

        if ( function_exists( 'is_product' ) && function_exists( 'wc_get_product' )) {
            if ( is_product() ) {
                $this->add_styles();
            }
        }

    }

    /**
     * woo places - add styles..
     */
    function add_styles() {
        
        $woo_options = get_option('ht_ctc_woo_options');
        $chat = get_option('ht_ctc_chat_options');
        $page_id = get_the_ID();
        $ht_ctc_pagelevel = get_post_meta( $page_id, 'ht_ctc_pagelevel', true );


        $type = 'chat';
        $style = ( isset( $woo_options['woo_style']) ) ? esc_attr( $woo_options['woo_style'] ) : '8';

        // $side_2 = 'right';

        // call to action
        $call_to_action = (isset($ht_ctc_pagelevel['call_to_action'])) ? esc_attr($ht_ctc_pagelevel['call_to_action']) : esc_attr( $chat['call_to_action'] );
        if ( !isset($ht_ctc_pagelevel['call_to_action']) && isset( $woo_options['woo_call_to_action'] ) && '' !== $woo_options['woo_call_to_action'] ) {
            $call_to_action = esc_attr( $woo_options['woo_call_to_action'] );
        }

        include_once HT_CTC_PLUGIN_DIR .'new/inc/commons/ht-ctc-formatting.php';
        if ( function_exists('ht_ctc_woo_single_product_page_variables') ) {
            $call_to_action = ht_ctc_woo_single_product_page_variables( $call_to_action );
        }

        $woo_single_position_center = ( isset( $woo_options['woo_single_position_center']) ) ? esc_attr( $woo_options['woo_single_position_center'] ) : '';
        $woo_single_margin_top = ( isset( $woo_options['woo_single_margin_top']) ) ? esc_attr( $woo_options['woo_single_margin_top'] ) : '';
        $woo_single_margin_right = ( isset( $woo_options['woo_single_margin_right']) ) ? esc_attr( $woo_options['woo_single_margin_right'] ) : '';
        $woo_single_margin_bottom = ( isset( $woo_options['woo_single_margin_bottom']) ) ? esc_attr( $woo_options['woo_single_margin_bottom'] ) : '';
        $woo_single_margin_left = ( isset( $woo_options['woo_single_margin_left']) ) ? esc_attr( $woo_options['woo_single_margin_left'] ) : '';
        
        $woo_single_block_type = ( isset( $woo_options['woo_single_block_type']) ) ? esc_attr( $woo_options['woo_single_block_type'] ) : 'inline-block';

        $css = '';
        $css .= "display: $woo_single_block_type;cursor:pointer;";

        if ( isset($woo_options['woo_single_position_center']) ) {
            $css .= "text-align: center;";
        }


        if ('' !== $woo_single_margin_left) {
            $css .= "margin-left:$woo_single_margin_left;";
        }
        if ('' !== $woo_single_margin_right) {
            $css .= "margin-right:$woo_single_margin_right;";
        }
        if ('' !== $woo_single_margin_top) {
            $css .= "margin-top:$woo_single_margin_top;";
        }
        if ('' !== $woo_single_margin_bottom) {
            $css .= "margin-bottom:$woo_single_margin_bottom;";
        }


        $path = plugin_dir_path( HT_CTC_PLUGIN_FILE ) . 'new/inc/styles/style-' . $style. '.php';

        if ( is_file( $path ) ) {
            ?>
            <div class="ctc_chat ctc_woo_place" style="<?= $css ?>">
                <?php include $path; ?>
            </div>
            <?php
        }
    }



    function chat( $ht_ctc_chat ) {
        
        $woo_options = get_option('ht_ctc_woo_options');

        // $chat = get_option('ht_ctc_chat_options');

        // if woocommerce single product page
        if ( function_exists( 'is_product' ) && function_exists( 'wc_get_product' )) {
            if ( is_product() ) {

                $product = wc_get_product();

                $name = $product->get_name();
                // $title = $product->get_title();
                $price = $product->get_price();
                $regular_price = $product->get_regular_price();
                $sku = $product->get_sku();

                $page_id = get_the_ID();
                $ht_ctc_pagelevel = get_post_meta( $page_id, 'ht_ctc_pagelevel', true );


                // pre-filled
                if ( isset( $woo_options['woo_pre_filled'] ) && '' !== $woo_options['woo_pre_filled'] ) {
                    $ht_ctc_chat['pre_filled'] = esc_attr( $woo_options['woo_pre_filled'] );
                    $ht_ctc_chat['pre_filled'] = apply_filters( 'wpml_translate_single_string', $ht_ctc_chat['pre_filled'], 'Click to Chat for WhatsApp', 'woo_pre_filled' );
                }

                // page level settings - woo 
                if ( isset($ht_ctc_pagelevel['pre_filled']) ) {
                    $ht_ctc_chat['pre_filled'] = esc_attr($ht_ctc_pagelevel['pre_filled']);
                }

                // variables works in default pre_filled also for woo pages.
                $ht_ctc_chat['pre_filled'] = str_replace( array('{product}', '{price}', '{regular_price}', '{sku}' ),  array( $name, $price, $regular_price, $sku ), $ht_ctc_chat['pre_filled'] );

                // call to action
                if ( isset( $woo_options['woo_call_to_action'] ) && '' !== $woo_options['woo_call_to_action'] ) {
                    $ht_ctc_chat['call_to_action'] = esc_attr( $woo_options['woo_call_to_action'] );
                    $ht_ctc_chat['call_to_action'] = apply_filters( 'wpml_translate_single_string', $ht_ctc_chat['call_to_action'], 'Click to Chat for WhatsApp', 'woo_call_to_action' );
                }
                
                // page level settings - woo 
                if ( isset($ht_ctc_pagelevel['call_to_action']) ) {
                    $ht_ctc_chat['call_to_action'] = esc_attr($ht_ctc_pagelevel['call_to_action']);
                }

                $ht_ctc_chat['call_to_action'] = str_replace( array('{product}', '{price}', '{regular_price}', '{sku}' ),  array( $name, $price, $regular_price, $sku ), $ht_ctc_chat['call_to_action'] );

            }
        }

        return $ht_ctc_chat;
    }


    








}

new HT_CTC_WOO_Pages();

endif; // END class_exists check