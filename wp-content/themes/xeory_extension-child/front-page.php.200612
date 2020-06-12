<?php get_header(); ?>

<div id="main_visual">
  <div class="wrap">
    <h2><?php echo nl2br(get_option('top_catchcopy'));?></h2>
    <p><?php echo nl2br(get_option('top_description'));?></p>
  </div><!-- .wrap -->
</div>

<div id="content">

<div id="main">
  <div class="main-inner">

<div id="recent_post_content" class="front-loop">

<h2>NEWS</h2>
<div class="news-area">
<?php
  $arg = array(
             'posts_per_page' => 5, // 表示する件数
             'orderby' => 'date', // 日付でソート
             'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
             'category_name' => 'news' // 表示したいカテゴリーのスラッグを指定
         );
  $posts = get_posts( $arg );
  if( $posts ): ?>
    <ul>
  <?php
      foreach ( $posts as $post ) :
        setup_postdata( $post ); ?>
      <li><a href="<?php the_permalink(); ?>"><div class="image"><?php the_post_thumbnail('thumbnail'); ?></div><div class="text"><span class="date"><?php the_time( 'Y.m.d' ); ?></span><h4><?php the_title(); ?></h4></div></a></li>
<?php endforeach; ?>
    </ul>
<?php
  endif;
  wp_reset_postdata();
?>
</div><!-- /front-root-cont -->

</div><!-- /wrap -->
</div><!-- /recent_post_content -->
</div><!-- /main -->
  
</div><!-- /content -->
<?php wp_reset_query(); ?>
<?php get_footer(); ?>


