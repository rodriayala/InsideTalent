<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$id = uniqid( 'testimonials-' );

switch ( $atts['testimonials_group']['testimonials_layout'] ):
	//flexslider layout
	case 'testimonials_carousel':
		?>
		<?php if ( ! empty( $atts['title'] ) ): ?>
			<h3 class="fw-testimonials-title text-center"><?php echo esc_html( $atts['title'] ); ?></h3>
		<?php endif; ?>
		<div class="testimonials owl-carousel testimonials-carousel" data-nav="0" data-loop="1" data-responsive-xs="1" data-responsive-sm="1"
		     data-responsive-md="1" data-responsive-lg="1" data-dots="true">
			<?php
			$testimonials = $atts['testimonials_group']['testimonials_carousel']['testimonials'];
			foreach ( $testimonials as $testimonial ): ?>
				<blockquote>
					<?php
					$author_image_url = ! empty( $testimonial['author_avatar']['url'] )
						? $testimonial['author_avatar']['url']
						: fw_get_framework_directory_uri( '/static/img/no-image.png' );
					?>
					<div class="avatar">
						<img src="<?php echo esc_attr( $author_image_url ); ?>"
						     alt="<?php echo wp_kses_post( $testimonial['author_name'] ); ?>"/>
					</div>
					<h5	class="author-name"><?php echo wp_kses_post( $testimonial['author_name'] ); ?></h5>
					<span class="blockqoute-meta">
						<span
							class="author-job small-text highlight2"><?php echo esc_html( $testimonial['author_job'] || $testimonial['site_name'] ) ? '' : ''; ?>
							<?php echo esc_html( $testimonial['author_job'] ); ?>
							<?php echo esc_html( $testimonial['author_job'] && $testimonial['site_name'] ) ? ',' : ''; ?>
							<?php if ( $testimonial['site_url'] ) : ?>
							<a href="<?php echo esc_attr( $testimonial['site_url'] ); ?>">
								<?php endif; //site_url
								?>
								<?php echo esc_html( $testimonial['site_name'] ); ?>
								<?php if ( $testimonial['site_url'] ) : ?>
							</a>
							<?php endif; //site_url ?>
						</span>
					</span>
					<div class="blockqoute-content">
						<?php echo esc_html( $testimonial['content'] ); ?>
					</div>
				</blockquote>
			<?php endforeach; ?>
		</div>
		<?php
		break; //eof big owl-carousel testimonials layout

	//grid layout
	case 'testimonials_grid':
		?>
		<?php if ( ! empty( $atts['title'] ) ): ?>
			<h3 class="fw-testimonials-title text-center"><?php echo esc_html( $atts['title'] ); ?></h3>
		<?php endif; ?>
		<div class="testimonials testimonials-grid isotope_container isotope row masonry-layout">
			<?php
			$testimonials = $atts['testimonials_group']['testimonials_grid']['testimonials'];
			foreach ( $testimonials as $testimonial ): ?>
				<div class="fw-testimonials-item isotope-item col-sm-6 col-md-4">
					<blockquote class="blockquote-big">
						<?php
						$author_image_url = ! empty( $testimonial['author_avatar']['url'] )
							? $testimonial['author_avatar']['url']
							: fw_get_framework_directory_uri( '/static/img/no-image.png' );
						?>
						<div class="avatar">
							<img src="<?php echo esc_attr( $author_image_url ); ?>"
							     alt="<?php echo wp_kses_post( $testimonial['author_name'] ); ?>"/>
						</div>
						<h5 class="author-name"><?php echo wp_kses_post( $testimonial['author_name'] ); ?></h5>
						<span class="blockqoute-meta">
							<span
								class="author-job"><?php echo esc_html( $testimonial['author_job'] || $testimonial['site_name'] ) ? '' : ''; ?>
								<?php echo esc_html( $testimonial['author_job'] ); ?>
								<?php echo esc_html( $testimonial['author_job'] && $testimonial['site_name'] ) ? ',' : ''; ?>
								<?php if ( $testimonial['site_url'] ) : ?>
								<a href="<?php echo esc_attr( $testimonial['site_url'] ); ?>">
									<?php endif; //site_url
									?>
									<?php echo esc_html( $testimonial['site_name'] ); ?>
									<?php if ( $testimonial['site_url'] ) : ?>
								</a>
							<?php endif; //site_url ?>
							</span>
						</span>
						<div class="blockqoute-content">
							<?php echo esc_html( $testimonial['content'] ); ?>
						</div>
					</blockquote>
				</div>
			<?php endforeach; ?>
		</div>
		<?php
		break; //eof testimonials grid layout
endswitch;

