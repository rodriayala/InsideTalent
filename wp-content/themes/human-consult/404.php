<?php
/**
 * The template for displaying 404 pages (Not Found)
 */

get_header();
?>
	<div id="content" class="content-404 col-md-6 col-md-offset-3 text-center">
		<p class="not_found">
			<span class="highlight"><?php esc_html_e( '404', 'human-consult' ); ?></span>
		</p>
		<h3><?php esc_html_e( 'Oops, page not found!', 'human-consult' ); ?></h3>
		<p>
			<?php esc_html_e( 'You can search what interested:', 'human-consult' ); ?>
		</p>

		<div class="widget widget_search">
			<?php get_search_form(); ?>
		</div>

		<p class="divider_20">
			<?php esc_html_e( 'or', 'human-consult' ); ?><br>
		</p>
		<p>
			<a href="<?php echo get_home_url(); ?>" class="theme_button color2">
				<?php esc_html_e( 'Back To Homepage', 'human-consult' ); ?>
			</a>
		</p>

	</div><!--eof #content -->
<?php
get_footer();