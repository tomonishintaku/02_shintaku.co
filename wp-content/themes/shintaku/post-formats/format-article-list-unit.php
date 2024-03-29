    <div class="col-4">
        <!-- Set thumb image size -->
        <?php $image = get_field('image'); ?>
        <?php $ImgSize = 148; ?>
        <?php if( get_the_post_thumbnail() ) : ?>

        <?php the_post_thumbnail(array($ImgSize, $ImgSize, true)); ?>

        <?php elseif(empty($image)):?>

        <img src="<?php echo get_template_directory_uri(); ?>/library/images/blog-category-img_none.png" alt=""
            width="<?php echo $ImgSize; ?>" height="<?php echo $ImgSize; ?>" class="article-list__image">

        <?php else:  ?>

        <?php if(empty($author || $publisher)):?>
        <img src="<?php the_field( 'image' ); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>の画像"
            width="<?php echo $ImgSize; ?>" height="<?php echo $ImgSize; ?>" class="article-list__image">
        <?php else:?>
        <img src="<?php the_field( 'image' ); ?>" title="<?php the_title(); ?>"
            alt="書籍<?php the_title(); ?>(<?php the_field('author'); ?>/<?php the_field('publisher'); ?>)」の表紙画像"
            width="<?php echo $ImgSize; ?>" height="<?php echo $ImgSize; ?>" class="article-list__image">
        <?php endif;?>

        <?php endif;?>
    </div>
    <div class="col-8">

        <?php $author = get_field('author'); ?>
        <?php $publisher = get_field('publisher'); ?>

        <h3 class="article-list__title">
            <?php
            if(mb_strlen($post->post_title)>30) {
              $title= mb_substr($post->post_title,0,30) ;
                echo $title . '...';
              } else {
                echo $post->post_title;
              }
            ?>
            <?php if(empty($author || $publisher)):?>
            <!--none-->
            <?php else:?>
            <span class="article-list__books-info">(<?php echo $author; ?>/<?php echo $publisher; ?>)</span>
            <?php endif;?>
        </h3>
    </div>