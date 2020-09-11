    <div class="col-4">
        <!-- Set thumb image size -->
        <?php $ImgSize = 148; ?>
        <?php if( get_the_post_thumbnail() ) : ?>
        <?php the_post_thumbnail(array($ImgSize, $ImgSize, true)); ?>
        <?php elseif( the_field( 'image' )) :  ?>
        <img src="<?php the_field( 'image' ); ?>" title="<?php the_title(); ?>"
            alt="書籍<?php the_title(); ?>(<?php the_field('author'); ?>/<?php the_field('publisher'); ?>)」の表紙画像"
            width="<?php echo $ImgSize; ?>" height="<?php echo $ImgSize; ?>" class="article-list__image">
        <?php else:  ?>
        <img src="<?php echo get_template_directory_uri(); ?>/library/images/blog-category-img_none.png" alt=""
            width="<?php echo $ImgSize; ?>" height="<?php echo $ImgSize; ?>">
        <?php endif;?>
    </div>
    <div class="col-8">

        <?php $author = get_field('author'); ?>
        <?php $publisher = get_field('publisher'); ?>

        <h3 class="article-list__title"><?php the_title(); ?>
            <?php if(empty($author || $publisher)):?>
            <!--none-->
            <?php else:?>
            <span class="article-list__books-info">(<?php echo $author; ?>/<?php echo $publisher; ?>)</span>
            <?php endif;?>
        </h3>
    </div>