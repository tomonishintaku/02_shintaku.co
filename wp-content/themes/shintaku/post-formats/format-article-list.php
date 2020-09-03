            <?php include TEMPLATEPATH . '/inc/blogmenu.php'; ?>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

                <header class="article-header">
                    <div class="row">
                        <div class="article-list__tag col-4">
                            <?php printf( get_the_category_list(', ') ); ?>
                        </div>
                        <div class="col-8">
                            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"
                                class="article-list__link">
                                <p class="byline entry-meta vcard">
                                    <?php printf( __( '').' %1$s',
                                '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>'
                            ); ?>
                                </p>
                        </div>
                    </div>
                    <section class="row article-list__unit">
                        <?php  include TEMPLATEPATH . '/post-formats/format-article-list-unit.php'; ?>
                    </section>
                </header>

                <?php //hidden article body <section class="entry-content cf"> ?>
                <?php //the_content(); ?>
                <?php //</section> hidden article body END ?>

                <!--footer class="article-footer cf">
                    <?php //hidden comment <p class="footer-comment-count"> ?>
                    <?php //comments_number( __( '<span>No</span> Comments', 'bonestheme' ), __( '<span>One</span> Comment', 'bonestheme' ), __( '<span>%</span> Comments', 'bonestheme' ) );?>
                    <?php //hidden comment END ?>

                    <?php //the_tags( '<p class="footer-tags tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>

                </footer-->
                </a>
            </article>

            <?php endwhile; ?>

            <?php bones_page_navi(); ?>

            <?php else : ?>

            <article id="post-not-found" class="hentry cf">
                <header class="article-header">
                    <h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
                </header>
                <section class="entry-content">
                    <p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
                </section>
                <footer class="article-footer">
                    <p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
                </footer>
            </article>

            <?php endif; ?>