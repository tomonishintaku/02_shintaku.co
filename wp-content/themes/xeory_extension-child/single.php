<?php get_header(); ?>

<div id="content">
<div class="wrap mt-3">
<div class="m-3 pt-3 pt-md-0">
<?php bzb_breadcrumb(); ?>
</div>
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
        <div class="row">
          <div class="col-12">
      <span class="category <?php $category = get_the_category(); $cat_slug = $category[0]->category_nicename; echo $cat_slug; ?>">
            <?php
              $category = get_the_category();
              echo $category[0]->cat_name;
            ?>
          </span>
          <span class="category <?php $category = get_the_category(); $cat_slug = $category[1]->category_nicename; echo $cat_slug; ?>">
            <?php
              $category = get_the_category();
              echo $category[1]->cat_name;
            ?>
          </span>
          <span class="date" itemprop="datePublished" datetime="<?php the_time('c');?>"> <?php the_time('Y.m.d');?></span>
          <!--div class="col-6">
          <div class="post-meta-area">
                   by <?php the_author(); ?>
         </div>
          </div-->
          </div>
        </div>
        <!--VAR-->
        <?php $image = get_field('image'); ?>
        <?php $book_star = get_field('book_star'); ?>
        <?php $amazon_url = get_field('amazon_url'); ?>
        <?php $author = get_field('author'); ?>
        <?php $publisher = get_field('publisher'); ?>
        <?php $summary = get_field('summary'); ?>
        <?php $price = get_field('price'); ?>
        <?php $no_price = get_field('no_price'); ?>

        <h1 class="post-title mt-3" itemprop="headline"><?php the_title(); ?>
        <?php if(empty($author)):?><!--Conditional branch VAR none-->
        <?php else:?><!--Conditional branch VAR-->
          <br><small class="font-weight-normal">(<?php echo $author; ?>/<?php echo $publisher; ?>)</small>
        <?php endif;?><!--END Conditional branch VAR-->
        </h1>
      </header>

      <!--div class="post-meta-area">
        <ul class="post-meta list-inline">
        </ul>
        <ul class="post-meta-comment">
        <li class="date" itemprop="datePublished" datetime="<?php the_time('c');?>"> <?php the_time('Y.m.d');?></li>

          <li class="author">
            by <?php the_author(); ?>
          </li>
          <li class="comments">
            <i class="fa fa-comments"></i> <span class="count"><?php comments_number('0', '1', '%'); ?></span>
          </li>
        </ul>
      </div-->
      
      <?php if( get_the_post_thumbnail() ) : ?>
      <div class="post-thumbnail">
        <?php the_post_thumbnail(array(1200, 630, true)); ?>
      </div>
      <?php endif; ?>

      <section class="post-content p-0 pl-md-4 pr-md-4" itemprop="text">
        <?php if(empty($image)):?><!--Conditional branch VAR none-->
        <?php else:?><!--Conditional branch VAR-->
        <div class="row text-center mb-3">
          <div class="col-12">
          <a href="<?php echo $amazon_url; ?>" target="_blank"><img src="<?php echo $image; ?>" alt="書籍<?php the_title(); ?>(<?php echo $author; ?>/<?php echo $publisher; ?>)」の表紙画像"></a>
          </div>
        </div>
        <?php endif;?><!--END Conditional branch VAR-->
        <?php if(empty($author)):?><!--Conditional branch VAR none-->
        <?php else:?><!--Conditional branch VAR-->
          <?php if(empty($price)):?><!--Conditional branch VAR none-->
            <p class="text-center mb-0"><span class="px-2"><?php echo $no_price; ?></span></p>
        <?php else:?><!--Conditional branch VAR-->
            <p class="text-center mb-0">購入価格:<span class="px-2"><?php echo $price; ?></span>円</p>
        <?php endif;?><!--END Conditional branch VAR-->
            <p class="book_star">評価:<span><?php echo $book_star; ?></span></p>
        <?php endif;?><!--END Conditional branch VAR-->
        <p class="reading_time"><i class="fa fa-eye"></i> <?php my_reading_time(); ?></p><!--reading time guide-->
        <?php if(empty($summary)):?><!--Conditional branch VAR none-->
        <?php else:?><!--Conditional branch VAR-->
            <div class="summary">
                <strong>20文字でまとめると…</strong>
                <p><?php echo $summary; ?></p>
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
        <div class="row amazon-link">
           <div class="col-12 col-md-8 px-0">
               <a href="<?php echo $amazon_url; ?>" target="_blank"><strong><?php the_title(); ?></strong>販売ページ</a>
           </div>
           <div class="col-12 col-md-4 text-center">
                <a href="<?php echo $amazon_url; ?>" target="_blank"><img src="/wp-content/uploads/common/shop_amazon-60d46fe34ec005ea5e127b67168d9ea73d5a168f41e905b961c3aa1844510c1a.svg" alt="Amazon販売ページへのリンク"></a>
           </div>
        </div>
        <?php endif;?><!--END Conditional branch VAR-->
      </section>

      <footer class="post-footer">
        <!--ul class="post-footer-list">
          <li class="cat">カテゴリー: <?php the_category(', ');?></li>
          <?php 
          $posttags = get_the_tags();
          if($posttags){ ?>
          <li class="tag"><?php the_tags('');?></li>
          <?php } ?>
        </ul-->
        <p class="mt-3" style="border:solid 1px #c71585;padding:1rem;">
        <a href="/service-and-price/" style="color:#000!important;display:block;">
        <strong style="display:block;"><i class="fa fa-hand-o-up pink" aria-hidden="true"></i> 国内外のIT企業でWebデザイナー歴10年超のWEBのプロ SHINTAKU。</strong>
	WEBサイト制作・ブログ設置(WordPress)やSNS運用・アクセス解析など最小15分750円～。詳細は<strong><span style="color:#2497cc;">サービスと料金</strong>をご覧下さい。</a>
</p>

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


