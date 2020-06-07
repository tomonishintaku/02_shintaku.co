<!--
Template Name: Full Width
-->

<?php get_header(); ?>

<div id="content" class="full-width">
  
<?php if( !(is_home() || is_front_page() || is_singular('lp') ) ){ ?>
  
  <div class="breadcrumb-area">
    <div class="wrap">
      <?php bzb_breadcrumb(); ?>
    </div>
  </div>
    
<?php } ?>

<div class="wrap">

  <div id="main" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
    
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
      
      <?php if( get_the_post_thumbnail() ) : ?>
      <div class="post-thumbnail">
        <?php the_post_thumbnail(array(1200, 630, true)); ?>
      </div>
      <?php endif; ?>

      <section class="post-content p-2 p-md-5" itemprop="text">

      <h1><?php the_title(); ?></h1>
        <?php
          the_content(); 

          $args = array(
            'before' => '<div class="pagination">',
            'after' => '</div>',
            'link_before' => '<span>',
            'link_after' => '</span>'
          );

          wp_link_pages($args);
        ?>
      </section>

   

      <?php echo bzb_get_cta($post->ID); ?>
      
    <?php if( is_active_sidebar('under_post_area') ){ ?>
    <div class="post-share">
      <?php dynamic_sidebar('under_post_area');?>
    </div>
    <?php } ?>
      
    </article>    

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
  

</div><!-- /wrap -->

</div><!-- /content -->

<?php get_footer(); ?>


