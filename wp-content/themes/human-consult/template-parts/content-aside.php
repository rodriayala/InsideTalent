<?php
/**
 * The default template for displaying aside content
 *
 * Used for both single and index/archive/search.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$show_post_thumbnail = ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) ? false : true;
$post_categories   = function_exists( 'fw_get_db_customizer_option' ) ? fw_get_db_customizer_option( 'post_categories' ) : false;
$post_author   = function_exists( 'fw_get_db_customizer_option' ) ? fw_get_db_customizer_option( 'post_author' ) : false;
$post_date   = function_exists( 'fw_get_db_customizer_option' ) ? fw_get_db_customizer_option( 'post_date' ) : false;
$post_tags   = function_exists( 'fw_get_db_customizer_option' ) ? fw_get_db_customizer_option( 'post_tags' ) : false;

//single item layout
if ( is_singular() ) :
	?>
	<article id="post-<?php the_ID(); ?>" <?php post_class( 'vertical-item content-padding with_shadow big-padding overflow-hidden' ); ?>>
		<?php human_consult_post_thumbnail(); ?>
		<div class="item-content">
			<header class="entry-header">
				<div class="item-meta">

					<?php if ( ! defined( 'FW' ) ) : ?>
						<?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) && human_consult_categorized_blog() ) : ?>
							<div
								class="categories-links color1"><?php echo get_the_category_list( _x( ' ', 'Used between list items, there is a space after the comma.', 'human-consult' ) ); ?></div>
						<?php endif; ?>
					<?php else: ?>
						<?php if ( $post_categories == 'yes' ) : ?>
							<?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) && human_consult_categorized_blog() ) : ?>
								<div
									class="categories-links color1"><?php echo get_the_category_list( _x( ' ', 'Used between list items, there is a space after the comma.', 'human-consult' ) ); ?></div>
							<?php endif; ?>
						<?php endif; ?>
					<?php endif; ?>
					<!-- .item cats -->
				</div>
			</header><!-- .entry-header -->

			<?php
			the_content();
			?>
			<div class="entry-meta darklinks">
				<?php if ( $post_author == 'yes' ) : ?>
				<div class="entry-author">
					<?php if ( 'post' == get_post_type() ) {
						human_consult_posted_by();
					} ?>
				</div>
				<?php endif; ?><!-- .entry-author -->

				<?php if ( $post_date == 'yes' ) : ?>
				<div class="entry-date">
					<?php if ( 'post' == get_post_type() ) {
						human_consult_posted_on();
					} ?>
				</div>
				<?php endif; ?><!-- .entry-date -->

				<?php if ( ! defined( 'FW' ) ) : ?>
					<div class="entry-tags">
						<?php the_tags( '<span class="tag-links">', ' ', '</span>' ); ?>
					</div>
				<?php else: ?>
					<?php if ( $post_tags == 'yes' ) : ?>
						<div class="entry-tags">
							<?php the_tags( '<span class="tag-links">', ' ', '</span>' ); ?>
						</div>
					<?php endif; ?>
				<?php endif; ?><!-- .item tags -->
			</div><!-- .entry-meta -->
			<?php
			wp_link_pages( array(
				'before'      => '<div class="page-links topmargin_30"><span class="page-links-title">' . esc_html__( 'Pages:', 'human-consult' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );
			?>
		</div><!-- .entry-content -->
	</article><!-- #post-## -->
	<?php
//eof single page layout
//blog feed layout
else:
	$post_categories   = function_exists( 'fw_get_db_customizer_option' ) ? fw_get_db_customizer_option( 'post_categories' ) : false;
	$post_author   = function_exists( 'fw_get_db_customizer_option' ) ? fw_get_db_customizer_option( 'post_author' ) : false;
	$post_date   = function_exists( 'fw_get_db_customizer_option' ) ? fw_get_db_customizer_option( 'post_date' ) : false;
	$post_tags   = function_exists( 'fw_get_db_customizer_option' ) ? fw_get_db_customizer_option( 'post_tags' ) : false;

	$show_readmore = false;
	if (function_exists( 'fw_get_db_post_option' )) {
		$show_readmore = fw_get_db_post_option( $post->ID, 'show-readmore', 'readmore-hidden' );
	}
	?>
	<article id="post-<?php the_ID(); ?>" <?php post_class( 'vertical-item content-padding with_shadow big-padding overflow-hidden '. $show_readmore .'' ); ?>>
		<div class="item-content">
			<header class="entry-header">
				<div class="item-meta">
					<?php if ( ! defined( 'FW' ) ) : ?>
						<?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) && human_consult_categorized_blog() ) : ?>
							<div
								class="categories-links color1"><?php echo get_the_category_list( _x( ' ', 'Used between list items, there is a space after the comma.', 'human-consult' ) ); ?></div>
						<?php endif; ?>
					<?php else: ?>
						<?php if ( $post_categories == 'yes' ) : ?>
							<?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) && human_consult_categorized_blog() ) : ?>
								<div
									class="categories-links color1"><?php echo get_the_category_list( _x( ' ', 'Used between list items, there is a space after the comma.', 'human-consult' ) ); ?></div>
							<?php endif; ?>
						<?php endif; ?>
					<?php endif; ?>
					<!-- .item cats -->
				</div>
				<?php
				the_title( '<h5 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h5>' );
				?>
			</header><!-- .entry-header -->

			<?php if ( is_search() ) : ?>
				<div class="entry-summary">
					<?php the_excerpt(); ?>
				</div><!-- .entry-summary -->
			<?php else : ?>
				<div class="entry-content">
					<?php
					//hidding "more link" in content
					the_content( esc_html__( 'Read more', 'human-consult' ) );
					?>
					<div class="entry-meta darklinks">
						<?php if ( $post_author == 'yes' ) : ?>
						<div class="entry-author">
							<?php if ( 'post' == get_post_type() ) {
								human_consult_posted_by();
							} ?>
						</div>
						<?php endif; ?><!-- .entry-author -->

						<?php if ( $post_date == 'yes' ) : ?>
						<div class="entry-date">
							<?php if ( 'post' == get_post_type() ) {
								human_consult_posted_on();
							} ?>
						</div>
						<?php endif; ?><!-- .entry-date -->

						<?php if ( $post_tags == 'yes' ) : ?>
							<div class="entry-tags">
								<?php the_tags( '<span class="tag-links">', ' ', '</span>' ); ?>
							</div>
						<?php endif; ?>	<!-- .item tags -->

					</div><!-- .entry-meta -->
					<?php
					wp_link_pages( array(
						'before'      => '<div class="page-links topmargin_30"><span class="page-links-title">' . esc_html__( 'Pages:', 'human-consult' ) . '</span>',
						'after'       => '</div>',
						'link_before' => '<span>',
						'link_after'  => '</span>',
					) );
					?>
				</div><!-- .entry-content -->
			<?php endif; //is_search 
			?>
		</div><!-- eof .item-content -->
	</article><!-- #post-## -->
<?php endif;  //is singular