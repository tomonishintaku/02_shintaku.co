<?php
/*
Template Name: single-with-Highlight
Template Post Type: post
*/
?>

<?php get_header(); ?>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.6.0/styles/atom-one-dark.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.0/highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
<style type="text/css">
  .post-content pre {
    padding: 0px;
    overflow: auto;
} 
code {
    padding: 2px 4px;
    font-size: 90%;
    color: #c7254e;
    background-color: #f9f2f4;
    border-radius: 4px;
}
</style>
<div id="content">

<div class="wrap mt-5">

  

  <div id="main" <?php bzb_layout_main(); ?> role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
    
    <div class="main-inner">

    <?php
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
    ?>
        
    <?php 
    global $post;
    $cf = get_post_meta($post->ID);
    $facebook_page_url = '';
    $facebook_page_url = get_option('facebook_page_url');
    $post_cat = '';
    ?>
    <article id="post-<?php the_id(); ?>" <?php post_class(); ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting">

      <header class="post-header pt-4 pl-md-4 pr-md-4">
        <span class="category <?php $category = get_the_category(); $cat_slug = $category[0]->category_nicename; echo $cat_slug; ?>">
            <?php
              $category = get_the_category();
              echo $category[0]->cat_name;
            ?>
          </span>

        <!--VAR-->
        <?php $image = get_field('image'); ?>
        <?php $book_star = get_field('book_star'); ?>
        <?php $amazon_url = get_field('amazon_url'); ?>
        <?php $author = get_field('author'); ?>
        <?php $publisher = get_field('publisher'); ?>
        <?php $summary = get_field('summary'); ?>
        
        <h1 class="post-title" itemprop="headline"><?php the_title(); ?>
        <?php if(empty($author)):?><!--Conditional branch VAR none-->
        <?php else:?><!--Conditional branch VAR-->
          <br><small>(<?php echo $author; ?>/<?php echo $publisher; ?>)</small>
        <?php endif;?><!--END Conditional branch VAR-->
        </h1>
        <div class="post-sns">
          <?php bzb_social_buttons();?>
        </div>
      </header>

      <div class="post-meta-area">
        <ul class="post-meta list-inline">
          <li class="date" itemprop="datePublished" datetime="<?php the_time('c');?>"><i class="fa fa-clock-o"></i> <?php the_time('Y.m.d');?></li>
        </ul>
        <ul class="post-meta-comment">
          <li class="author">
            by <?php the_author(); ?>
          </li>
          <li class="comments">
            <i class="fa fa-comments"></i> <span class="count"><?php comments_number('0', '1', '%'); ?></span>
          </li>
        </ul>
      </div>
      
      <?php if( get_the_post_thumbnail() ) : ?>
      <div class="post-thumbnail">
        <?php the_post_thumbnail(array(1200, 630, true)); ?>
      </div>
      <?php endif; ?>

      <section class="post-content p-0 pl-md-4 pr-md-4" itemprop="text">
      <?php if(empty($summary)):?><!--Conditional branch VAR none-->
        <?php else:?><!--Conditional branch VAR-->
            <div class="summary">
                <strong><i class="fa fa-rocket pink" aria-hidden="true"></i> 20文字でまとめると…</strong>
                <p><?php echo $summary; ?></p>
            </div>
        <?php endif;?><!--END Conditional branch VAR-->
        <?php if(empty($image)):?><!--Conditional branch VAR none-->
        <?php else:?><!--Conditional branch VAR-->
        <div class="row text-center mb-5">
          <div class="col-12">
            <img src="<?php echo $image; ?>" alt="書籍「<?php the_title(); ?>(<?php echo $author; ?>/<?php echo $publisher; ?>)」の表紙画像">
          </div>
        </div>
        <?php endif;?><!--END Conditional branch VAR-->

        <?php
          the_content(); 

          $args = array(
            'before' => '<div class="pagination text-left">',
            'after' => '</div>',
            'link_before' => '<span>',
            'link_after' => '</span>'
          );

          wp_link_pages($args);
        ?>

        <?php if(empty($amazon_url)):?><!--Conditional branch VAR none-->
        <?php else:?><!--Conditional branch VAR-->
        <div class="row">
           <div class="col-12 col-md-8">
               <a href="<?php echo $amazon_url; ?>" target="_blank">Amazon <strong><?php the_title(); ?>(<?php echo $author; ?>/<?php echo $publisher; ?>)</strong> 販売ページへ</a>
           </div>
           <div class="col-12 col-md-4 text-center">
                <a href="<?php echo $amazon_url; ?>" target="_blank"><img src="/wp-content/uploads/common/shop_amazon-60d46fe34ec005ea5e127b67168d9ea73d5a168f41e905b961c3aa1844510c1a.svg" alt="Amazon販売ページへのリンク"></a>
           </div>
        </div>
        <?php endif;?><!--END Conditional branch VAR-->
      </section>

      <footer class="post-footer">
      
        
        <?php echo bzb_social_buttons();?>
        <ul class="post-footer-list">
          <li class="cat"><i class="fa fa-folder"></i> <?php the_category(', ');?></li>
          <?php 
          $posttags = get_the_tags();
          if($posttags){ ?>
          <li class="tag"><i class="fa fa-tag"></i> <?php the_tags('');?></li>
          <?php } ?>
        </ul>
      </footer>

      <?php echo bzb_get_cta($post->ID); ?>
      
    <?php if( is_active_sidebar('under_post_area') ){ ?>
    <div class="post-share">
      <?php dynamic_sidebar('under_post_area');?>
    </div>
    <?php } ?>
      
    </article>
      
 <?php bzb_show_avatar();?>
    
    
    <?php comments_template( '', true ); ?>

        <?php

				endwhile;

			else :
		?>
    
    <p>投稿が見つかりません。</p>
				
    <?php
			endif;
		?>


    </div><!-- /main-inner -->
  </div><!-- /main -->
  
<?php get_sidebar(); ?>

</div><!-- /wrap -->

</div><!-- /content -->

<?php get_footer(); ?>


