<?php if ( ! defined( 'ABSPATH' ) ) {
	die( 'Direct access forbidden.' );
}
/**
 * Widget Portfolio - title item layout
 */

//wrapping in div for carousel layout
?>
<div class="widget_portfolio-item">
	<div class="vertical-item ">
		<div class="item-media">
			<?php
			$full_image_src = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
			human_consult_post_thumbnail();
			?>
			<div class="media-links">
				<div class="links-wrap">
					<a class="p-view prettyPhoto " title=""
					   data-gal="prettyPhoto[gal-<?php echo esc_attr( $unique_id ); ?>]"
					   href="<?php echo esc_attr( $full_image_src ); ?>"></a>
					<a class="p-link" title="" href="<?php the_permalink(); ?>"></a>
				</div>
			</div>
		</div>
	</div>
	<div class="item-title text-center">
		<div class="categories-links small-text spacing-text-small">
			<?php
			echo get_the_term_list( get_the_ID(), 'fw-portfolio-category', '', ' ', '' );
			?>
		</div>
		<h3>
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
		</h3>
	</div><!-- eof vertical-item -->
</div><!-- eof widget item -->