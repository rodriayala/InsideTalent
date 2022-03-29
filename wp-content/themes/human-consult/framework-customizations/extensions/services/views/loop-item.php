<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * Single service loop item layout
 * also using as a default service view in a shortcode
 */

$ext_services_settings = fw()->extensions->get( 'services' )->get_settings();
$taxonomy_name = $ext_services_settings['taxonomy_name'];

$icon_array = fw_ext_services_get_icon_array();

?>
<div class="service_item vertical-item content-padding with_shadow text-center overflow-hidden">
	<?php if ( $icon_array['icon_type'] ) : ?>
		<?php if ( $icon_array['icon_type'] === 'image' ) : ?>
			<?php echo wp_kses_post( $icon_array['icon_html']); ?>
		<?php else: //icon ?>
			<div class="teaser_icon black size_big border_icon">
				<?php echo wp_kses_post( $icon_array['icon_html']); ?>
			</div>
		<?php endif; ?>
	<?php else: //post featured image ?>
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="item-media">
				<?php
				$full_image_src = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
				the_post_thumbnail('human-consult-services');
				?>
			</div>
		<?php endif; //has_post_thumbnail ?>
	<?php endif; //end of icon_type check ?>
	<div class="item-content">
		<h5 class="entry-title medium">
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
		</h5>
		<div class="excerpt">
			<?php the_excerpt(); ?>
		</div>
	</div><!-- eof .item-content -->
</div><!-- eof .teaser -->
