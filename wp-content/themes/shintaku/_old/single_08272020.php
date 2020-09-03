<?php get_header(); ?>

<?php
// if 'web category' or 'code tag' article, use highlight syntax
if (is_category('web') || in_category('web') || is_tag('code')):
?>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.6.0/styles/atom-one-dark.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.0/highlight.min.js"></script>
<script>
hljs.initHighlightingOnLoad();
</script>
<?php endif; ?>

<div id="content" class="full-width-content">

    <div id="inner-content" class="wrap cf">

        <main id="main" class="m-all cf" role="main" itemscope itemprop="mainContentOfPage"
            itemtype="http://schema.org/Blog">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php get_template_part( 'post-formats/format', get_post_format() ); ?>

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
                    <p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
                </footer>
            </article>

            <?php endif; ?>

            <aside class="post-footer">
                <?php include TEMPLATEPATH . '/inc/blogmessage.php'; ?>
                <?php comments_template(); ?>

                <!-- next and pre navigation -->
                <section class="pagination">
                    <?php if (get_previous_post()):?>
                    <?php previous_post_link('<i class="fas fa-angle-left"></i> 前の記事 %link'); ?>
                    <?php endif; ?>

                    <?php if (get_next_post()):?>
                    <?php next_post_link('次の記事 <i class="fas fa-angle-right"></i> %link'); ?>
                    <?php endif; ?>
                </section>
                <!-- next and pre navigation END-->

                <section class="popular-articles">
                    <h3>
                        人気記事一覧
                    </h3>
                    <div class="row">
                        <?php
                    // GEt PV data from function 
                    setPostViews(get_the_ID());

                    // ループ開始
                    query_posts('meta_key=post_views_count&orderby=meta_value_num&posts_per_page=5&order=DESC'); while(have_posts()) : the_post();
                    ?>

                        <!-- Display Thumbnail -->
                        <div class="col-4">
                            <a href="<?php echo get_permalink(); ?>">
                                <?php $ImgSize = 148; ?>
                                <?php if( get_the_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail(array($ImgSize, $ImgSize, true)); ?>
                                <?php else:?>
                                <img src="<?php the_field( 'image' ); ?>"
                                    alt="書籍<?php the_title(); ?>(<?php echo $author; ?>/<?php echo $publisher; ?>)」の表紙画像"
                                    width="<?php echo $ImgSize; ?>" height="<?php echo $ImgSize; ?>">
                                <?php endif;?>
                            </a>
                        </div>

                        <!-- Display Article Title -->
                        <div class="col-8">
                            <p>
                                <a href="<?php the_permalink(); ?>"
                                    title="<?php the_title(); ?>"><?php the_title(); ?></a>
                            </p>
                        </div>

                        <?php endwhile; ?>
                    </div>
                </section>


            </aside>
        </main>

    </div>

</div>

<?php get_footer(); ?>