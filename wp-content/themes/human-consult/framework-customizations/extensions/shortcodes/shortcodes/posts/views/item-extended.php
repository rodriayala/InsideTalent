<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * Shortcode Posts - extended item layout
 */

$terms          = get_the_terms( get_the_ID(), 'category' );
$filter_classes = '';
foreach ( $terms as $term ) {
	$filter_classes .= ' filter-' . $term->slug;
}
?>
<article <?php post_class( "vertical-item content-padding with_shadow text-center overflow-hidden" . $filter_classes ); ?>>
	<?php if ( get_the_post_thumbnail() ) : ?>
		<div class="item-media">
			<?php
			echo get_the_post_thumbnail();
			?>
			<div class="media-links">
				<a class="abs-link" href="<?php the_permalink(); ?>"></a>
			</div>
		</div>
	<?php endif; //eof thumbnail check ?>
	<div class="item-content">
		<h5 class="item-title">
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
		</h5>
		<?php the_excerpt(); ?>

	</div>
	<div class="item-icons darklinks">
		<div>
			<i class="fa fa-user highlight"></i>
			<?php human_consult_posted_by(); ?>
		</div>
		<div>
			<i class="fa fa-calendar highlight"></i>
			<?php human_consult_posted_on(); ?>
		</div>
		<div>
			<i class="fa fa-tag highlight"></i>
			<?php the_tags( '<span class="tag-links">', ' ', '</span>' ); ?>
		</div>
	</div>
</article><!-- eof vertical-item -->
