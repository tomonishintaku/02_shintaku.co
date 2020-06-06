<?php
/**
 * Template part for displaying a frontpage section
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Portum
 */

$frontpage = Epsilon_Page_Generator::get_instance( 'portum_frontpage_sections_' . get_the_ID(), get_the_ID() );
$fields    = $frontpage->sections[ $section_id ];

$grouping = array(
	'values'   => $fields['google_map_grouping'],
	'group_by' => 'contact_title',
);

$fields['contact_boxes'] = $frontpage->get_repeater_field( $fields['google_map_repeater_field'], array(), $grouping );
$span                    = 12 / absint( $fields['google_map_column_group'] );
$api                     = get_theme_mod( 'portum_google_api_key', '' );

$attr_helper = new Epsilon_Section_Attr_Helper( $fields, 'google_map', Portum_Repeatable_Sections::get_instance() );

$parent_attr = array(
	'id'    => array(),
	'class' => array( 'section-map', 'ewf-section', 'ewf-section-' . $fields['google_map_section_visibility'] ),
	'style' => array( 'background-image', 'background-position', 'background-size', 'background-repeat' ),
);

$style_attr = array(
	'style' => array( 'background-image', 'background-position', 'background-size', 'background-repeat' ),
);

wp_enqueue_script( 'googlemaps' );
?>

<section data-customizer-section-id="portum_repeatable_section" data-section="<?php echo esc_attr( $section_id ); ?>" class="google-map-section" <?php echo ! empty( $fields['google_map_section_unique_id'] ) ? 'id="' . $fields['google_map_section_unique_id'] . '"' : ''; ?>>
	<?php Portum_Helper::generate_css_color_tabs( $section_id, 'google_map', $fields ); ?>
	<?php echo wp_kses( Portum_Helper::generate_pencil( 'Portum_Repeatable_Sections', 'google_map' ), Epsilon_Helper::allowed_kses_pencil() ); ?>
	<div <?php $attr_helper->generate_attributes( $parent_attr ); ?> >

		<?php if ( 'right' === $fields['google_map_row_title_align'] ) { ?>
			<?php
			$attr_helper->generate_color_overlay();
			$attr_helper->generate_video_overlay();

			$section_item_columns = 12 / intval( $fields['google_map_column_group'] );
			?>

			<div class="ewf-section__content">
				<div class="<?php echo esc_attr( Portum_Helper::container_class( 'google_map', $fields ) ); ?>">

					<div class="row">
						<div class="col-md-6">
							<?php if ( ! empty( $api ) ) : ?>
								<div class="map-canvas map-canvas-side" style="height:<?php echo esc_attr( $fields['google_map_height'] ); ?>px;" data-mapheight="<?php echo esc_attr( $fields['google_map_height'] ); ?>" data-zoom="<?php echo esc_attr( $fields['google_map_zoom'] ); ?>" data-address="<?php echo esc_attr( $fields['google_map_address'] ); ?>"></div>
							<?php endif; ?>
						</div>

						<div class="col-md-6">

							<?php echo wp_kses_post( Portum_Helper::generate_section_title( $fields['google_map_subtitle'], $fields['google_map_title'], array( 'bottom' => true ) ) ); ?>
							<div class="row">
								<?php
								if ( ! empty( $fields['contact_boxes'] ) ) {
									?>
									<?php foreach ( $fields['contact_boxes'] as $key => $field ) { ?>
										<div class="col-xs-12 col-md-<?php echo esc_attr( $section_item_columns ); ?>">
											<div class="map-info-item">
												<?php
												echo wp_kses( Epsilon_Helper::generate_field_repeater_pencil( $key, 'portum_contact_section', 'portum_contact_section' ), Epsilon_Helper::allowed_kses_pencil() );
												?>
												<h5>
													<i class="fa <?php echo esc_attr( $field['contact_icon'] ); ?>" aria-hidden="true"></i>
													<?php echo wp_kses_post( $field['contact_title'] ); ?>
												</h5>
												<?php echo wpautop( wp_kses_post( $field['contact_text'] ) ); ?>
											</div>
										</div>
									<?php } ?>
								<?php } ?>
							</div>
						</div>
					</div>

				</div>
			</div>

		<?php } elseif ( 'left' === $fields['google_map_row_title_align'] ) { ?>

			<?php
			$attr_helper->generate_video_overlay();
			$attr_helper->generate_color_overlay();

			$section_item_columns = 12 / intval( $fields['google_map_column_group'] );
			?>

			<div class="ewf-section__content">
				<div class="<?php echo esc_attr( Portum_Helper::container_class( 'google_map', $fields ) ); ?>">

					<div class="row">
						<div class="col-md-6">
							<?php echo wp_kses_post( Portum_Helper::generate_section_title( $fields['google_map_subtitle'], $fields['google_map_title'] ) ); ?>

							<div class="row">
								<?php
								if ( ! empty( $fields['contact_boxes'] ) ) {
									?>
									<?php foreach ( $fields['contact_boxes'] as $key => $field ) { ?>
										<div class="col-xs-12 col-md-<?php echo esc_attr( $section_item_columns ); ?>">
											<div class="map-info-item">
												<?php
												echo wp_kses( Epsilon_Helper::generate_field_repeater_pencil( $key, 'portum_contact_section', 'portum_contact_section' ), Epsilon_Helper::allowed_kses_pencil() );
												?>
												<h5>
													<i class="fa <?php echo esc_attr( $field['contact_icon'] ); ?>" aria-hidden="true"></i>
													<?php echo wp_kses_post( $field['contact_title'] ); ?>
												</h5>
												<?php echo wpautop( wp_kses_post( $field['contact_text'] ) ); ?>
											</div>
										</div>
									<?php } ?>
								<?php } ?>
							</div>
						</div>
						<div class="col-md-6">
							<?php if ( ! empty( $api ) ) : ?>
								<div class="map-canvas map-canvas-side" style="height:<?php echo esc_attr( $fields['google_map_height'] ); ?>px;" data-mapheight="<?php echo esc_attr( $fields['google_map_height'] ); ?>" data-zoom="<?php echo esc_attr( $fields['google_map_zoom'] ); ?>" data-address="<?php echo esc_attr( $fields['google_map_address'] ); ?>"></div>
							<?php endif; ?>
						</div>
					</div>

				</div>
			</div>

		<?php } else { ?>

			<?php if ( ! empty( $api ) ) : ?>
				<div class="map-overlay"></div>
				<div class="map-canvas" data-mapheight="<?php echo esc_attr( $fields['google_map_height'] ); ?>" data-zoom="<?php echo esc_attr( $fields['google_map_zoom'] ); ?>" data-address="<?php echo esc_attr( $fields['google_map_address'] ); ?>"></div>
			<?php endif; ?>

			<div class="ewf-section__content">
				<div class="<?php echo esc_attr( Portum_Helper::container_class( 'google_map', $fields ) ); ?>">

					<div class="map-info-wrapper" <?php $attr_helper->generate_attributes( $style_attr ); ?>>

						<?php
						$attr_helper->generate_video_overlay();
						$attr_helper->generate_color_overlay();
						?>

						<?php echo wp_kses_post( Portum_Helper::generate_section_title( $fields['google_map_subtitle'], $fields['google_map_title'] ) ); ?>
						<?php
						if ( ! empty( $fields['contact_boxes'] ) ) {
							?>
							<div class="row">
								<?php foreach ( $fields['contact_boxes'] as $key => $field ) { ?>
									<div class="col-xs-12 col-md-<?php echo esc_attr( absint( $span ) ); ?>">
										<div class="map-info-item">
											<?php
											echo wp_kses( Epsilon_Helper::generate_field_repeater_pencil( $key, 'portum_contact_section', 'portum_contact_section' ), Epsilon_Helper::allowed_kses_pencil() );
											?>
											<h5>
												<i class="fa <?php echo esc_attr( $field['contact_icon'] ); ?>" aria-hidden="true"></i>
												<?php echo wp_kses_post( $field['contact_title'] ); ?>
											</h5>
											<?php echo wpautop( wp_kses_post( $field['contact_text'] ) ); ?>
										</div>
									</div>
								<?php } ?>
							</div>
						<?php } ?>
					</div>

				</div>
			</div>

		<?php } ?>
	</div>
</section>
