        <div id="sidebar1" class="sidebar m-all t-1of3 d-2of7 cf" role="complementary">

            <?php get_search_form(); ?>

            <?php get_template_part( 'post-formats/format-book-article-list', get_post_format() ); ?>

			<h4 class="widgettitle">最近の日報一覧</h4>
			<ul class="daily-report-side">
			<?php
			$posts = new WP_Query( array(
			'post_type' => 'daily_report',
			'posts_per_page' => 5
			)
			);
			if ( have_posts() ) : while ( $posts->have_posts() ) : $posts->the_post();
			?>
			<li>
			<span class="d-block"><?php the_time( 'Y年m月d日(D)' ); ?></span>
			<a href="<?php the_permalink(); ?>" class="daily-report-side__title"><?php the_title(); ?></a>
			</li>
			<?php endwhile; endif; wp_reset_query(); ?>
			</ul>

        </div><!-- sidebar END -->