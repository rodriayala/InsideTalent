<?php
/**
 *    The Header Logo for our theme
 *
 *    Displays logo in header section
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
$logo_center = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_customizer_option( 'logo_center' ) : '';

$logo_image   = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_customizer_option( 'logo_image' ) : '';
$logo_text    = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_customizer_option( 'logo_text' ) : get_option( 'blogname' );
$logo_subtext = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_customizer_option( 'logo_subtext' ) : get_option( 'blogdescription' );
$logo_class   = 'logo';
if ( ! $logo_text ) {
	$logo_class .= ' logo_image_only';
}
if ( ! $logo_image ) {
	$logo_class .= ' logo_text_only';
}
if ( $logo_image && $logo_text ) {
	$logo_class .= ' logo_image_and_text';
}
?>
<?php if ( $logo_center == 'yes' ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>"
	   rel="home" class="logo_between_text <?php echo esc_attr( $logo_class ); ?>">
		<?php if ( $logo_text ) : ?>
			<span class="logo_text">
				<?php echo wp_kses_post( $logo_text ); ?>
			</span>
			<?php if ( $logo_image ) : ?>
				<img src="<?php echo esc_attr( $logo_image['url'] ); ?>" alt="<?php echo esc_attr( $logo_text ); ?>">
			<?php endif; //logo_image	?>
			<?php if ( $logo_subtext ) : ?>
				<span class="logo_subtext">
					<?php echo esc_html( $logo_subtext ); ?>
				</span>
			<?php endif; //logo_subtext	?>
		<?php endif; //logo_text ?>
	</a>
<?php else : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>"
	   rel="home" class="<?php echo esc_attr( $logo_class ); ?>">
		<?php if ( $logo_image ) : ?>
			<img src="<?php echo esc_attr( $logo_image['url'] ); ?>" alt="<?php echo esc_attr( $logo_text ); ?>">
		<?php endif; //logo_image	?>
		<?php if ( $logo_text ) : ?>
			<span class="logo_text">
			<?php echo wp_kses_post( $logo_text ); ?>
				<?php if ( $logo_subtext ) : ?>
					<span class="logo_subtext">
					<?php echo esc_html( $logo_subtext ); ?>
				</span>
				<?php endif; //logo_subtext	?>
		</span>
		<?php endif; //logo_text ?>
	</a>
<?php endif; ?>