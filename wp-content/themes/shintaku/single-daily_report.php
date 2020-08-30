<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article">

								<section class="entry-content cf">
								
<?php 

$name = get_field_object('name');
$label_name = $name['label'];  

$start_time = get_field_object('start_time');
$label_start_time = $start_time['label'];  

$leaving_time = get_field_object('leaving_time');
$label_leaving_time = $leaving_time['label'];  

$business_overview = get_field_object('business_overview');
$label_business_overview = $business_overview['label'];  

$tomorrows_goal = get_field_object('tomorrows_goal');
$label_tomorrows_goal = $tomorrows_goal['label'];  

$notes = get_field_object('notes');
$label_notes = $notes['label'];  

 ?>


<table class="daily-report-form">
  <tr>
    <td width="80%" colspan="2" class="daily-report-form__title"><h1>業務日報</h1></td>
  <td width="20%">
<div class="daily-report-form__seal-area" ><span>承認者</span><img src="/wp-content/uploads/2020/08/seal-shintaku.png" alt="新宅の承認印"></div>
</td>
</tr>
<tr>
<td width="60%">
  &nbsp;
</td>
<td colspan="2" width="40%" class="daily-report-form__date-area">
  <section>
      <span><?php echo get_the_date('Y'); ?></span>
      <span class="fix">年</span>
      <span><?php echo get_the_date('n'); ?></span>
      <span class="fix">月</span>
      <span><?php echo get_the_date('j'); ?></span>
      <span class="fix">日</span>
      <span><?php echo get_the_date('(D)'); ?></span>
</section>
</td>
</tr>
<tr>
<th width="50%"><?php echo $label_name; ?></th>
<th width="25%"><?php echo $label_start_time; ?></th>
<th width="25%"><?php echo $label_leaving_time; ?></th>
</tr>
<tr>
<td><?php the_field('name'); ?></td>
<td><?php the_field('start_time'); ?></td>
<td><?php the_field('leaving_time'); ?></td>
</tr>
<tr>
<th colspan="3"><?php echo $label_business_overview; ?></th>
</tr>
<tr>
<td colspan="3" class="daily-report-form__text-area"><?php the_field('business_overview'); ?></td>
</tr>
<tr>
<th colspan="3"><?php echo $label_tomorrows_goal; ?></th>
</tr>
<tr>
<td colspan="3" class="daily-report-form__text-area"><?php the_field('tomorrows_goal'); ?></td>
</tr>
<tr>
<th colspan="3"><?php echo $label_notes; ?></th>
</tr>
<tr>
<td colspan="3" class="daily-report-form__text-area"><?php the_field('notes'); ?></td>
</tr>
</table>

								</section> <!-- end article section -->

							</article>

							<?php endwhile; ?>
							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
											<p><?php _e( 'This is the error message in the single-custom_type.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>
            <!-- comments area -->
            <?php comments_template(); ?>

						</main>

						<?php get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>
