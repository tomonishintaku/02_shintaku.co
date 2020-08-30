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
<div class="container">
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
</div><!-- /container -->
</div><!-- /front-root-cont -->

<div class="container">
<h2>全国どこでも無料見積もり</h2>
<div class="row my-5">
<div class="col-12">
<?php echo get_option('footer-address');?>
</div>
</div>

<!-- /START past-works -->
<article class="front-past-works">
<div class="container">
<h2>豊富なWEBサイト制作実績</h2>
<div class="row my-5">
  <div class="col-4 col-md-2 mb-4 mb-md-0">
    <a href="/user-registration/"><img src="/wp-content/themes/xeory_extension-child/lib/images/past-works_01.png" alt="食品メーカーWEBサイトの制作実績のサムネイル画像"></a>
  </div>
  <div class="col-4 col-md-2 mb-4 mb-md-0">
    <a href="/user-registration/"><img src="/wp-content/themes/xeory_extension-child/lib/images/past-works_02.png" alt="飲食系WEBサイトの制作実績のサムネイル画像"></a>
  </div>
  <div class="col-4 col-md-2 mb-4 mb-md-0">
    <a href="/user-registration/"><img src="/wp-content/themes/xeory_extension-child/lib/images/past-works_03.png" alt="健康食品通信販売ECサイトの制作実績のサムネイル画像"></a>
  </div>
  <div class="col-4 col-md-2">
    <a href="/user-registration/"><img src="/wp-content/themes/xeory_extension-child/lib/images/past-works_04.png" alt="自動車保険サービスWEBサイトの制作実績のサムネイル画像"></a>
  </div>
  <div class="col-4 col-md-2">
    <a href="/user-registration/"><img src="/wp-content/themes/xeory_extension-child/lib/images/past-works_05.png" alt="大手建築会社WEBサイトの制作実績のサムネイル画像"></a>
  </div>
  <div class="col-4 col-md-2">
    <a href="/user-registration/"><img src="/wp-content/themes/xeory_extension-child/lib/images/past-works_06.png" alt="一般IT企業のWEBサイトの制作実績のサムネイル画像"></a>
  </div>  
</div>
<p>飲食、建築、サプリメント、医療、エンターテイメント、一般企業、あらゆる業界のWEBサイトの制作経験があります。<a href="/user-registration/">ユーザー登録</a>していただくと、詳細な内容をご覧いただけます。
</p>
</div>
</article>
<!-- /past-works END-->

</><!-- /wrap -->
</div><!-- /recent_post_content -->
</div><!-- /main -->
  
</div><!-- /content -->
<?php wp_reset_query(); ?>
<?php get_footer(); ?>


