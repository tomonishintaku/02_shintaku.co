<?php
/**
 * The sidebar containing the footer widget area.
 *
 * @package Portum
 */

/**
 * The defined sidebars
 */
$mysidebars = array(
	'footer-sidebar-1',
	'footer-sidebar-2',
	'footer-sidebar-3',
	'footer-sidebar-4',
);

/**
 * We create an empty array that will keep which one of them has any active sidebars
 */
$sidebars = array();
foreach ( $mysidebars as $column ) {
	if ( is_active_sidebar( $column ) ) {
		$sidebars[] = $column;
	}
};

/**
 * Handle the sizing of the footer columns based on the user selection
 */
$footer_layout = get_theme_mod( 'portum_footer_columns', false );
if ( ! $footer_layout ) {
	$footer_layout = Portum_Helper::get_footer_default();
}
if ( ! is_array( $footer_layout ) ) {
	$footer_layout = json_decode( $footer_layout, true );
}

$front = get_option( 'show_on_front' );
$cform = absint( get_theme_mod( 'portum_contact_form', 0 ) );
?>

<div id="footer"
<?php
if ( defined( 'WPCF7_VERSION' ) && 0 !== $cform ) {
	echo ' class="has-contact-form"'; }
?>
>
	<div class="container">
		<?php
		if ( 'page' === $front && is_front_page() ) {
			get_template_part( 'template-parts/footer/contact-form' );
		}
		?>

		<?php if ( ! empty( $sidebars ) ) { ?>
			<div class="row">
				<?php foreach ( $footer_layout['columns'] as $sidebar ) : ?>

					<?php if ( is_active_sidebar( 'footer-sidebar-' . $sidebar['index'] ) ) { ?>
					<div id="footer-widget-area-<?php echo esc_attr( $sidebar['index'] ); ?>" class="col-sm-<?php echo esc_attr( $sidebar['span'] ); ?>">
						<?php dynamic_sidebar( 'footer-sidebar-' . $sidebar['index'] ); ?>
					</div>
				<?php } ?>

				<?php endforeach; ?>
			</div><!--.row-->
		<?php } ?>


	</div>
	<?php get_template_part( 'template-parts/footer/copyright' ); ?>
</div>


