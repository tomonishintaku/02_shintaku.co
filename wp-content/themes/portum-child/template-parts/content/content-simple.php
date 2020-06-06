<?php
/**
 * Template part for displaying single posts.
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Portum
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row">
		<div class="col-sm-12">
			<div class="post-thumbnail">
				<?php
				$thumbnail = get_theme_mod( 'portum_show_single_post_thumbnail', true );
				if ( $thumbnail ) {
					the_post_thumbnail( 'portum-blog-post-sticky' );
				}
				?>
				<div class="post-header">
					<h4 class="post-title">
						<?php echo esc_html( get_the_title() ); ?>
					</h4><!-- end .post-title -->
				</div><!-- .post-header -->
			</div>

			<div class="post-content">
				<?php
				the_content();
				wp_link_pages(
					array(
						'before'           => '<nav class="nav-links">',
						'after'            => '</nav>',
						'separator'        => '<span class="sep"></span>',
						'next_or_number'   => 'next',
						'nextpagelink'     => __( 'Next page', 'portum' ),
						'previouspagelink' => __( 'Previous page', 'portum' ),
					)
				);
				?>

			</div><!-- .post-content -->


		</div>
	</div>
</article>


<?php
if ( comments_open( get_the_ID() ) || get_comments_number( get_the_ID() ) ) :
	comments_template();
endif;
?>
