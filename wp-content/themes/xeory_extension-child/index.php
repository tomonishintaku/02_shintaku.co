<?php get_header(); ?>

<div id="content">

<div class="wrap">

  <div id="main" <?php bzb_layout_main(); ?> role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
    <div class="main-inner">
    <?php bzb_breadcrumb(); ?>

    <?php if( !is_front_page()){?>
          <h1 class="post-title" ><?php echo get_the_title(get_option('page_for_posts')); ?></h1>
          <ul class="row text-center">
              <li class="col-3"><a href="/category/web/"><?php echo $cat_name = get_the_category_by_ID( 29 ); ?></a><!--web--></li>
              <li class="col-3"><a href="/category/art/"><?php echo $cat_name = get_the_category_by_ID( 31 ); ?></a><!--art--></li>
              <li class="col-3"><a href="/category/work/"><?php echo $cat_name = get_the_category_by_ID( 27 ); ?></a><!--work--></li>
              <li class="col-3"><a href="/category/book-review/"><?php echo $cat_name = get_the_category_by_ID( 12 ); ?></a><!--book-review--></li>
          </ul>      
    <?php } ?>
        <div class="post-loop-wrap">

    <?php if( is_category() ) { ?>
        <?php bzb_category_description(); ?>
    <?php } ?>

    <?php

			if ( have_posts() ) :

				while ( have_posts() ) : the_post();
        $cf = get_post_meta($post->ID); ?>
    <article id="post-<?php echo the_ID(); ?>" <?php post_class(); ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting">

    <header class="post-header">
    <a class="article-block-link" href="<?php the_permalink(); ?>">
        <div class="row">
        <div class="col-12">
          <span class="category <?php $category = get_the_category(); $cat_slug = $category[0]->category_nicename; echo $cat_slug; ?>">
            <?php
              $category = get_the_category();
              echo $category[0]->cat_name;
            ?>
          </span>
          <span class="date" itemprop="datePublished" datetime="<?php the_time('c');?>"><?php the_time('Y.m.d');?></span>
        </div>
      </div>
        <h2 class="post-title mt-3" itemprop="headline"><?php the_title(); ?></h2>
        </a>
      </header>


      <!--?php if( get_the_post_thumbnail() ) { ?-->
      <!--div class="post-thumbnail">
        <a href="<?php the_permalink(); ?>" rel="nofollow"><?php the_post_thumbnail('big_thumbnail'); ?></a>
      </div-->
      <!--?php } ?-->

      <!--section class="post-content" itemprop="text">
        <?php the_excerpt(); ?>
      </section-->

      <!--footer class="post-footer">
        <a class="morelink" href="<?php the_permalink(); ?>" rel="nofollow">続きを読む</a>
      </footer-->

    </article>

    <?php

				endwhile;

			else :
		?>

    <article id="post-404"class="cotent-none post" itemscope="itemscope" itemtype="http://schema.org/BlogPosting">
      <section class="post-content" itemprop="text">
        <?php echo get_template_part('content', 'none'); ?>
      </section>
    </article>
    <?php
			endif;
		?>

<?php if (function_exists("pagination")) {
    pagination($wp_query->max_num_pages);
} ?>

    </div><!-- /post-loop-wrap -->



    </div><!-- /main-inner -->
  </div><!-- /main -->

<?php get_sidebar(); ?>

</div><!-- /wrap -->

</div><!-- /content -->

<?php get_footer(); ?>