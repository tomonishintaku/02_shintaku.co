<?php get_header(); ?>

<div id="content">

<div class="wrap">

  <div id="main" <?php bzb_layout_main(); ?> role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
    <div class="main-inner">

    <h1 class="post-title" ><?php the_category(); ?></h1>
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
        <div class="row">
        <div class="col-4">
        <div class="cat-name">
          <span>
            <?php
              $category = get_the_category();
              echo $category[0]->cat_name;
            ?>
          </span>
        </div>
        </div>
        <div class="col-8 text-right text-gray">
          <span class="date" itemprop="datePublished" datetime="<?php the_time('c');?>"><?php the_time('Y.m.d');?></span>
        <!--ul class="post-meta-comment">
          <li class="author">
            by <?php the_author(); ?>
          </li>
          <li class="comments">
            <i class="fa fa-comments"></i> <span class="count"><?php comments_number('0', '1', '%'); ?></span>
          </li>
        </ul-->
      </div>
      </div>


        <h2 class="post-title" itemprop="headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      </header>


      <!--?php if( get_the_post_thumbnail() ) { ?-->
      <!--div class="post-thumbnail">
        <a href="<?php the_permalink(); ?>" rel="nofollow"><?php the_post_thumbnail('big_thumbnail'); ?></a>
      </div-->
      <!--?php } ?-->

      <!--section class="post-content" itemprop="text">
        <?php the_excerpt(); ?>
      </section-->

      <footer class="post-footer">
        <a class="morelink" href="<?php the_permalink(); ?>" rel="nofollow">続きを読む</a>
      </footer>

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


