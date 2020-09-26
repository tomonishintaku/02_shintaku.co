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

    <?php //breadcrumb(); ?>
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

                <?php if( in_category('30') ) : ?>
                    <!-- none -->
                <?php else: ?>
                    <?php include TEMPLATEPATH . '/inc/blogmessage.php'; ?>
                <?php endif; ?>
                <section class="entry-content">
                <p class="mb-3 text-center"> 質問やご感想など、匿名でコメント可能です。100％ご返信いたします。</p>
                <?php get_template_part( 'post-formats/format-comment', get_post_format() ); ?>
                </section>
                <!-- next and pre navigation -->
                <section class="pagination-pre-next">
                    <?php if (get_previous_post()):?>
                    <?php previous_post_link('<i class="fas fa-angle-left"></i> 前の記事 %link'); ?>
                    <?php endif; ?>

                    <?php if (get_next_post()):?>
                    <?php next_post_link('次の記事 <i class="fas fa-angle-right"></i> %link'); ?>
                    <?php endif; ?>
                </section>
                <!-- next and pre navigation END-->

                <?php get_template_part( 'post-formats/format-popular-article-list', get_post_format() ); ?>

            </aside>
        </main>

    </div>

</div>

<?php get_footer(); ?>