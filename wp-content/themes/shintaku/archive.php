<?php get_header(); ?>

<div id="content">

    <div id="inner-content" class="wrap cf">

        <main id="main" class="article-list m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage"
            itemtype="http://schema.org/Blog">
            <!--section class="category__title-wrap">
                <?php /*
							the_archive_title( '<h1>', '</h1>' );
							the_archive_description( '<div class="taxonomy-description">', '</div>' );
                          */  ?>
            </section-->

            <?php get_template_part( 'post-formats/format-article-list', get_post_format() ); ?>

        </main>

        <?php get_sidebar(); ?>

    </div>

</div>

<?php get_footer(); ?>