<?php
/**
 * Template part for displaying the copyright footer
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Portum
 */

if ( get_theme_mod( 'portum_enable_copyright', true ) || has_nav_menu( 'copyright' ) ) : ?>
	<div id="footer-bottom" class="row footer-sub">
		<!-- /// FOOTER-BOTTOM  ////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div class="container">
			<div class="row">
				<?php if ( get_theme_mod( 'portum_enable_copyright', true ) ) : ?>
					<div id="footer-bottom-widget-area-1" class="col-sm-6 ol-xs-12">
<p class="public_caution">当サイト内の文章・画像等の内容の無断転載及び複製等の行為はご遠慮ください。</p><address> Copyright <span class="cpy">&copy;</span> 2020-<?php echo date("Y"); ?> SHINTAKU. All Rights Reserved. </address> 
					</div><!-- end .col -->
				<?php endif; ?>

				<div id="footer-bottom-widget-area-2" class="col-sm-6 col-xs-12">
					<?php
					wp_nav_menu(
						array(
							'menu'           => 'footer',
							'theme_location' => 'footer',
							'depth'          => 1,
							'container'      => 'ul',
							'menu_class'     => 'nav',
						)
					);
					?>
				</div><!-- end .col -->
			</div><!-- end .row -->
		</div><!-- end .container -->
		<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
	</div><!-- end #footer-bottom -->
<?php endif; ?>
