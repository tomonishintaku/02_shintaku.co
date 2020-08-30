<?php get_header(); ?>

<div id="content">

    <div id="inner-content" class="wrap cf">

        <ul class="row text-center">
            <li class="col-3"><a href="/category/web/"><?php echo $cat_name = get_the_category_by_ID( 29 ); ?></a>
            </li>
            <li class="col-3"><a href="/category/art/"><?php echo $cat_name = get_the_category_by_ID( 31 ); ?></a>
            </li>
            <li class="col-3"><a href="/category/work/"><?php echo $cat_name = get_the_category_by_ID( 27 ); ?></a>
            </li>
            <li class="col-3"><a
                    href="/category/book-review/"><?php echo $cat_name = get_the_category_by_ID( 12 ); ?></a>
            </li>
        </ul>

        <main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage"
            itemtype="http://schema.org/Blog">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

                <header class="article-header">
                    <?php printf( get_the_category_list(', ') ); ?>
                    <p class="byline entry-meta vcard">
                        <?php printf( __( 'Posted').' %1$s',
                       								/* the time the post was published */
                       								'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>'
													   /* the author of the post 
													   IF you want to display author name you should replace this line to first line 
													   *** <?php printf( __( 'Posted', 'bonestheme' ).' %1$s %2$s', ***
													   '<span class="by">'.__( 'by', 'bonestheme').'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
													   */
                    							); ?>
                    </p>

                    <!-- get custom field -->
                    <?php $image = get_field('image'); ?>
                    <!-- get custom field END-->

                    <div class="row">
                        <div class="col-4">
                            <!-- Set thumb image size -->
                            <?php $ImgSize = 148; ?>
                            <?php if( get_the_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail(array($ImgSize, $ImgSize, true)); ?>
                            <?php else:?>
                            <img src="<?php echo $image; ?>"
                                alt="書籍<?php the_title(); ?>(<?php echo $author; ?>/<?php echo $publisher; ?>)」の表紙画像"
                                width="<?php echo $ImgSize; ?>" height="<?php echo $ImgSize; ?>">
                            <?php endif;?>
                        </div>
                        <div class="col-8">
                            <h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark"
                                    title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                            </h1>
                        </div>
                    </div>
                </header>
                <!-- hidden article body__
                <section class="entry-content cf">
					<?php the_content(); ?>
				</section>
                __hidden article body END-->

                <footer class="article-footer cf">
                    <!--hidden comment__
                    <p class="footer-comment-count">
                        <?php comments_number( __( '<span>No</span> Comments', 'bonestheme' ), __( '<span>One</span> Comment', 'bonestheme' ), __( '<span>%</span> Comments', 'bonestheme' ) );?>
                    </p>
				__hidden comment  END-->

                    <?php the_tags( '<p class="footer-tags tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>

                </footer>

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

        </main>

        <?php get_sidebar(); ?>

    </div>

</div>

<?php get_footer(); ?>