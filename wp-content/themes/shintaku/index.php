<?php get_header(); ?>

<div id="content">
    <div id="inner-content" class="wrap cf">
        <main id="main" class="article-list m-all d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage"
            itemtype="http://schema.org/Blog">
            <header class="article-header">
                <?php get_template_part( 'post-formats/format-article-list', get_post_format() ); ?>
        </main>

        <?php get_sidebar(); ?>

    </div>

</div>

<?php get_footer(); ?>