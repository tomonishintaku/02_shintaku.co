<?php
/*
 Template Name: Daily Report
*/
?>
<?php get_header(); ?>

<div id="content">
    <div id="inner-content" class="wrap cf">
        <main id="main" class="article-list m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage"
            itemtype="http://schema.org/Blog">

            <section class="daily-report-list">
                <ul>
                    <?php $args = array(
			        'numberposts' =>15,
			        'post_type' => 'daily_report'
			    );
			    $posts = get_posts( $args );
			    if( $posts ) : foreach( $posts as $post ) : setup_postdata( $post ); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_time('Y年m月d日(D)'); ?>の日報
                        </a>
                    </li>
                    <?php endforeach; ?>
                    <?php else : ?>
                    <li>
                        <p>記事はまだありません。</p>
                    </li>
                    <?php endif;
			    wp_reset_postdata(); ?>
                </ul>
            </section>
        </main>

        <div id="sidebar1" class="sidebar m-all t-1of3 d-2of7 last-col cf" role="complementary">
            <?php if ( is_active_sidebar('sidebar-2') ) : ?>
            <?php dynamic_sidebar('sidebar-2'); ?>
            <?php endif; ?>
        </div><!-- sidebar END -->

    </div>

</div>

<?php get_footer(); ?>