  <div id="side" <?php bzb_layout_side(); ?> role="complementary" itemscope="itemscope" itemtype="http://schema.org/WPSideBar">
    <div class="side-inner">
      <div class="side-widget-area">


      <?php 

      //ここのifで、dynamic_sidebarが読み込まれており、修正を繰り返した「クエリ」や「ループ」の箇所は、吐き出されていない。
        if( dynamic_sidebar('sidebar') ):
          dynamic_sidebar();
        else:
          $args = array(
            'post_type' => 'post',
            'post_count' => 10
          );
          // クエリ
          $the_query = new WP_Query( $args );
          echo '<div id="recent-posts-3" class="widget_recent_entries side-widget"><div class="side-widget-inner">';
          echo '<h4 class="side-title"><span class="widget-title-inner">最近の投稿</span></h4>';
          echo '<ul>';
          // ループ
          while ( $the_query->have_posts() ) : $the_query->the_post(); $category = get_the_category();
            echo '<li><span class="category">'.$category[0]->cat_name.'</span><a href="'.get_post_permalink().'">'.get_the_title().'</a></li>';
          endwhile;
          echo '</ul>';
          echo '</div></div>';
        endif;
      ?>


           <!--span class="category <?php $category = get_the_category(); $cat_slug = $category[0]->category_nicename; echo $cat_slug; ?>">
          <?php
            $category = get_the_category();
            echo $category[0]->cat_name;
          ?>
        </span-->



      <?php
      global $user_id;
      $original_avatar = get_the_author_meta('original_avatar', $user_id);
      ?>

      </div><!-- //side-widget-area -->
    </div>
  </div><!-- /side -->
  