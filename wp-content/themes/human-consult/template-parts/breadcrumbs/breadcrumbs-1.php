<?php
/**
 * The template part for selected title (breadcrubms) section
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>
<section class="page_breadcrumbs vertical_gradient parallax background_cover section_padding_70">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center breadcrumbs_inner">
				<h3>
					<?php get_template_part( 'template-parts/breadcrumbs/page-title-text' ); ?>
				</h3>
				<?php
				if ( function_exists( 'woocommerce_breadcrumb123' ) ) {
					woocommerce_breadcrumb( array(
						'delimiter'   => '',
						'wrap_before' => '<nav class="woocommerce-breadcrumb" ' . ( is_single() ? 'itemprop="breadcrumb"' : '' ) . '><ol class="breadcrumb">',
						'wrap_after'  => '</ol></nav>',
						'before'      => '<li>',
						'after'       => '</li>',
						'home'        => _x( 'Homepage', 'breadcrumb', 'human-consult' )
					) );
				} elseif ( function_exists( 'fw_ext_breadcrumbs' ) ) {
					fw_ext_breadcrumbs();
				}
				?>
			</div>
		</div>
	</div>
</section>