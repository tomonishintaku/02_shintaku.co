<section class="img-article-list">
    <h4 class="widgettitle">
        最近読んだWEB関連書籍
    </h4>
    <div class="row">

<?php
  $arg = array(
             'posts_per_page' => 5, // 表示する件数
             'orderby' => 'date', // 日付でソート
             'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
             'category_name' => 'web' // 表示したいカテゴリーのスラッグを指定
         );
  $posts = get_posts( $arg );
  if( $posts ): ?>
  <?php
      foreach ( $posts as $post ) :
        setup_postdata( $post ); ?>


        <!-- Display Thumbnail -->
        <div class="col-4 mb-3">
            <a href="<?php echo get_permalink(); ?>">
                <?php $ImgSize = 148; ?>
                <?php if( get_the_post_thumbnail() ) : ?>
                <?php the_post_thumbnail(array($ImgSize, $ImgSize, true)); ?>
                <?php else:?>
                <img src="<?php $image = get_field('image'); echo $image; ?>"
                    alt="書籍<?php the_title(); ?>(<?php echo $author; ?>/<?php echo $publisher; ?>)」の表紙画像"
                    width="<?php echo $ImgSize; ?>" height="<?php echo $ImgSize; ?>">
                <?php endif;?>
            </a>
        </div>
        <!-- Display Article Title -->
        <div class="col-8 mb-3">
            <p>
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php
            if(mb_strlen($post->post_title)>30) {
              $title= mb_substr($post->post_title,0,30) ;
                echo $title . '...';
              } else {
                echo $post->post_title;
              }
            ?>
            </a>
            </p>
        </div>

        <?php endforeach; ?>
        <?php
          endif;
          wp_reset_postdata();
        ?>


    </div>
</section>