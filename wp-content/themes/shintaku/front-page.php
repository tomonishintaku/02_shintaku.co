<?php get_header(); ?>

<article id="content" class="front-page full-width-content">

    <section class="rotate-line">
        <div class="rotate-line__bg-bold">
            <div class="rotate-line__title">
                <h1 class="front-page__tagline"><?php the_field('tagline'); ?></h1>
            </div>
        </div>
        <?php //the_post_thumbnail('full'); ?>
    </section>

    <div id="inner-content" class="wrap cf">

        <main id="main" class="m-all cf" role="main" itemscope itemprop="mainContentOfPage"
            itemtype="http://schema.org/Blog">
            <section class="entry-content cf" itemprop="articleBody">
                    <section class="front-page__lead">
                        <h2 class="title"><span>
                                <?php the_field('tagline_sub'); ?>
                            </span></h2>
                        <p><?php the_field('tagline_lead'); ?>
                        </p>
                    </section>


                <?php $locale = get_locale();
                if ('en_US' == $locale ) { ?>
                    
                <?php  // Display front page content
                    $page_id = 6451; // front page ID
                    $post = get_post( $page_id );
                    echo apply_filters('the_content', $post->post_content); 
                ?>
                <?php } else { ?>
                    <div class="row latest-posts">
                        <div class="col-12 col-lg-6">

                            <section class="news">
                                <h2 class="title line-desktop"><span>NEWS</span></h2>
                                <p><?php the_field('news_lead'); ?>
                                </p>
                                    <?php
                                    $locale = get_locale();
                                    if ('en_US' == $locale ) {
                                    $arg = array(
                                              'posts_per_page' => 3,
                                              'orderby' => 'date',
                                              'order' => 'DESC', // or ASC
                                              'category_name' => 'news_en'
                                          );
                                    } else { 
                                    $arg = array(
                                              'posts_per_page' => 3,
                                              'orderby' => 'date',
                                              'order' => 'DESC', // or ASC
                                              'category_name' => 'news'
                                          );
                                    } 
                                    $posts = get_posts( $arg );
                                    if( $posts ): ?>
                                <ul class="latest-posts__list">
                                    <?php
                                    foreach ( $posts as $post ) :
                                      setup_postdata( $post ); ?>
                                    <li><a href="<?php the_permalink(); ?>">
                                            <div class="row">
                                                <div class="col-4">
                                                    <span class="date"><?php the_time( 'Y.m.d' ); ?></span>
                                                </div>
                                                <div class="col-8">
                                                    <h4><?php the_title(); ?></h4>
                                                </div>
                                            </div>
                                        </a></li>
                                    <?php endforeach; ?>
                                </ul>
                                <?php
                                endif;
                                wp_reset_postdata();
                              ?>
                            </section><!-- news END -->
                        </div>
                        <div class="col-12 col-lg-6">
                            <section class="daily-report">
                                <h2 class="title line-desktop-none"><span>業務日報</span></h2>
                                <p><?php the_field('daily_report_lead'); ?>
                                </p>
                                <?php 
                                $arg = array(
                                          'posts_per_page' => 3,
                                          'orderby' => 'date',
                                          'order' => 'DESC', //or ASC
                                          'post_type' => array('daily_report'), 
                                      );
                                $posts = get_posts( $arg );
                                if( $posts ): ?>
                                <ul class="latest-posts__list">
                                    <?php
                                    foreach ( $posts as $post ) :
                                      setup_postdata( $post ); ?>
                                    <li>
                                        <?php the_time( 'Y年m月d日(D)' ); ?>の日報
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="text">
                                                <h4><?php the_title(); ?></h4>
                                            </div>
                                        </a>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                                <?php
                                endif;
                                wp_reset_postdata();
                              ?>
                            </section><!-- daily-report END -->

                        </div>
                    </div><!-- latest-post-list END -->

                <?php  // Display front page content
                    $page_id = 14; // front page ID
                    $post = get_post( $page_id );
                    echo apply_filters('the_content', $post->post_content); 
                ?>

                <?php } ?>

            </section>

            <footer class="article-footer">

                <?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>

            </footer>

        </main>
    </div>
</article>

<?php get_footer(); ?>