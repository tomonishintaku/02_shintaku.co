<?php
/*
 Template Name: Daily Report
*/
?>
<?php get_header(); ?>

<div id="content" class="two-column">
    <div id="inner-content" class="wrap cf">
        <main id="main" class="article-list t-2of3 d-5of7 cf daily-report-list" role="main" itemscope itemprop="mainContentOfPage"
            itemtype="http://schema.org/Blog">
            <section class="rotate-line">
                <div class="rotate-line__bg">
                    <div class="rotate-line__title">
                        <h1 class="page-title" itemprop="headline">業務日報</h1>
                    </div>
                </div>
            </section>
            <h2 class="title"><span>WEB業界を見える化する</span></h2>
                <p class="two-column__lead">
                <?php echo get_field('daily_report_lead',14); ?>
                </p>
                <ul>
                <?php 
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                        'post_type' => 'daily_report',
                        'posts_per_page' => '15',   
                        'paged' => $paged
		         );
			    $posts = get_posts( $args );
			    if( $posts ) : foreach( $posts as $post ) : setup_postdata( $post ); ?>
                    <li>
                        <?php the_time('Y年m月d日(D)'); ?><br>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </li>
                    <?php endforeach; ?>

                    <?php else : ?>
                    <li>
                        <p>記事はまだありません。</p>
                    </li>

                <?php endif;
			    wp_reset_postdata(); ?>

    <?php
    $wp_query = new WP_Query( $args );
    if ( $wp_query->have_posts() ) :
    while ( $wp_query->have_posts() ) :
        $wp_query->the_post();

    endwhile;
    if ( function_exists( 'bones_page_navi' ) ) {
        bones_page_navi(); 
    } else { 
        next_posts_link( __( '&laquo; Older Entries', 'bonestheme' ));
        previous_posts_link( __( 'Newer Entries &raquo;', 'bonestheme' ));
    }
    endif;
    ?>

                </ul>
        </main>

            <?php get_template_part( 'post-formats/sidebar-daily_report', get_post_format() ); ?>

    </div>

</div>

<?php get_footer(); ?>