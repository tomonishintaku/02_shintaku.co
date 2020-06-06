<?php
/*
Template Name: Full Width
*/
?>

<?php
/**
 * The template for displaying single pages
 *
 * @package Portum
 */

get_header();

/**
 * Custom Image handling
 */
$img = get_custom_header();
$img = $img->url;

$layout       = Portum_Helper::get_layout();
$show_welcome = get_theme_mod( 'portum_show_blog_welcome', false );

?>
<div id="content">
	<div class="custom-header">
		<img src="<?php echo esc_url( $img ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"/>
	</div>


	<div class="container">


		<div class="row">
			<div class="col">
								<!-- /// MAIN CONTENT  ////////////////////////////////////////////////////////////////////////////////////// -->
				<?php
				if ( have_posts() ) :
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content/content', 'simple' );
					endwhile;
				else :
					get_template_part( 'template-parts/content/content', 'none' );
				endif;
				?>
				<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////// -->

			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
