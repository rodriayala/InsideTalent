<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
} ?>
<?php
if ( isset( $data['slides'] ) ):
	?>
	<section class="intro_section page_mainslider">
		<div class="flexslider">
			<ul class="slides">
				<?php foreach ( $data['slides'] as $id => $slide ):
				$slide_background = isset( $slide['extra']['slide_background'] ) ? $slide['extra']['slide_background'] : false;
				$slide_align      = isset( $slide['extra']['slide_align'] ) ? $slide['extra']['slide_align'] : false;
				$slide_layers     = isset( $slide['extra']['slide_layers'] ) ? $slide['extra']['slide_layers'] : false;

				$slide_button           = isset( $slide['extra']['slide_button'] ) ? $slide['extra']['slide_button'] : false;
				$slide_button_text      = isset( $slide['extra']['slide_button_text'] ) ? $slide['extra']['slide_button_text'] : false;
				$slide_button_animation = isset( $slide['extra']['slide_button_animation'] ) ? $slide['extra']['slide_button_animation'] : false;
				$slide_button_link      = isset( $slide['extra']['slide_button_link'] ) ? $slide['extra']['slide_button_link'] : false;
				?>
				<li class="<?php echo esc_attr( $slide_background ); ?> <?php echo esc_attr( $slide_align ); ?>">
					<img src="<?php echo esc_attr( $slide['src'] ); ?>" alt="<?php echo esc_attr( $slide['title'] ) ?>">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<div class="slide_description_wrapper">
									<?php if ( $slide_layers || $slide_button ) : ?>
									<div class="slide_description">
										<?php
										foreach ( $slide_layers as $layer ):
										?>
										<div class="intro-layer <?php echo esc_attr( $layer['custom_class'] ); ?>"
										     data-animation="<?php echo esc_attr( $layer['layer_animation'] ); ?>">
											<<?php echo esc_html( $layer['layer_tag'] ); ?>
											class="<?php echo ( $layer['layer_tag'] == 'p' ) ? 'small' : ''; ?> <?php echo esc_attr( $layer['layer_text_color'] ); ?> <?php echo esc_attr( $layer['layer_text_weight'] ); ?> <?php echo esc_attr( $layer['layer_text_transform'] ); ?>
											">
											<?php echo wp_kses_post( $layer['layer_text'] ) ?>
										</<?php echo esc_html( $layer['layer_tag'] ); ?>>
									</div>
								<?php
								endforeach;
								?>
									<div class="intro-layer"
									     data-animation="<?php echo esc_attr( $slide_button_animation ); ?>">
										<a href="<?php echo esc_url( $slide_button_link ); ?>"
										   class="<?php echo esc_attr( $slide_button ); ?>"><?php echo esc_html( $slide_button_text ); ?></a>
									</div>

								</div> <!-- eof .slide_description -->
								<?php endif; ?>
							</div> <!-- eof .slide_description_wrapper -->
						</div> <!-- eof .col-* -->
					</div><!-- eof .row -->
		</div><!-- eof .container -->
		</li>
		<?php endforeach; ?>
		</ul>
		</div> <!-- eof flexslider -->
	</section> <!-- eof intro_section -->
	<?php
	$show_bottomline       = isset( $data['settings']['extra']['slider_bottomline']['show_bottomline'] ) ? $data['settings']['extra']['slider_bottomline']['show_bottomline'] : false;
	if ( $show_bottomline == 'yes' ) :

		$bottomline_text_1 = isset( $data['settings']['extra']['slider_bottomline']['yes']['bottomline_text_1'] ) ? $data['settings']['extra']['slider_bottomline']['yes']['bottomline_text_1'] : false;
		$bottomline_subtext_1 = isset( $data['settings']['extra']['slider_bottomline']['yes']['bottomline_subtext_1'] ) ? $data['settings']['extra']['slider_bottomline']['yes']['bottomline_subtext_1'] : false;

		$bottomline_text_2 = isset( $data['settings']['extra']['slider_bottomline']['yes']['bottomline_text_2'] ) ? $data['settings']['extra']['slider_bottomline']['yes']['bottomline_text_2'] : false;
		$bottomline_subtext_2 = isset( $data['settings']['extra']['slider_bottomline']['yes']['bottomline_subtext_2'] ) ? $data['settings']['extra']['slider_bottomline']['yes']['bottomline_subtext_2'] : false;

		$bottomline_text_3 = isset( $data['settings']['extra']['slider_bottomline']['yes']['bottomline_text_3'] ) ? $data['settings']['extra']['slider_bottomline']['yes']['bottomline_text_3'] : false;
		$bottomline_subtext_3 = isset( $data['settings']['extra']['slider_bottomline']['yes']['bottomline_subtext_3'] ) ? $data['settings']['extra']['slider_bottomline']['yes']['bottomline_subtext_3'] : false;

		?>
		<section
			class="slider-bottomline ds section_padding_top_50 section_padding_bottom_50 columns_padding_0">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-6 text-center">
						<?php if ( ( ! empty( $bottomline_text_1 ) ) || ( ! empty( $bottomline_subtext_1 ) ) ) : ?>
							<div class="special-heading">
								<?php if ( $bottomline_text_1 ) : ?>
									<p class="highlight medium text-uppercase">
										<?php echo wp_kses_post( $bottomline_text_1 ); ?>
									</p>
								<?php endif; ?>
								<?php if ( $bottomline_subtext_1 ) : ?>
									<h4 class="lightfont extra-thin text-transform-none">
										<?php echo wp_kses_post( $bottomline_subtext_1 ); ?>
									</h4>
								<?php endif; ?>
							</div>
						<?php endif; ?>
					</div>
					<div class="col-md-4 col-sm-6 text-center">
						<?php if ( ( ! empty( $bottomline_text_2 ) ) || ( ! empty( $bottomline_subtext_2 ) ) ) : ?>
							<div class="special-heading">
								<?php if ( $bottomline_text_2 ) : ?>
									<p class="highlight medium text-uppercase">
										<?php echo wp_kses_post( $bottomline_text_2 ); ?>
									</p>
								<?php endif; ?>
								<?php if ( $bottomline_subtext_2 ) : ?>
									<h4 class="lightfont extra-thin text-transform-none">
										<?php echo wp_kses_post( $bottomline_subtext_2 ); ?>
									</h4>
								<?php endif; ?>
							</div>
						<?php endif; ?>
					</div>
					<div class="col-md-4 col-sm-6 text-center">
						<?php if ( ( ! empty( $bottomline_text_3 ) ) || ( ! empty( $bottomline_subtext_3 ) ) ) : ?>
							<div class="special-heading">
								<?php if ( $bottomline_text_3 ) : ?>
									<p class="highlight medium text-uppercase">
										<?php echo wp_kses_post( $bottomline_text_3 ); ?>
									</p>
								<?php endif; ?>
								<?php if ( $bottomline_subtext_3 ) : ?>
									<h4 class="lightfont extra-thin text-transform-none">
										<?php echo wp_kses_post( $bottomline_subtext_3 ); ?>
									</h4>
								<?php endif; ?>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>
<?php endif; ?>