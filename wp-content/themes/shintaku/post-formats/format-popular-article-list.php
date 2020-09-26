<section class="popular-articles">
    <h4 class="widgettitle">
        人気記事一覧
    </h4>
    <div class="row">
        <?php
                    // GEt PV data from function 
                    setPostViews(get_the_ID());

                    // ループ開始
                    query_posts('meta_key=post_views_count&orderby=meta_value_num&posts_per_page=5&order=DESC'); while(have_posts()) : the_post();
                    ?>

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

                <!-- check this if condition 
                                <?php if(is_category('book-review') || get_the_post_thumbnail() || empty($image))  : ?>

                                <img src="<?php echo get_template_directory_uri(); ?>/library/images/blog-category-img_book.png"
                                    alt="<?php $category = get_the_category(); $cat_name = $category[12]->cat_name; echo $cat_name; ?>"
                                    width="<?php echo $ImgSize; ?>" height="<?php echo $ImgSize; ?>">

                                <?php elseif(is_category('art') || get_the_post_thumbnail() || empty($image))  : ?>

                                <img src="<?php echo get_template_directory_uri(); ?>/library/images/blog-category-img_art.png"
                                    alt="<?php $category = get_the_category(); $cat_name = $category[31]->cat_name; echo $cat_name; ?>"
                                    width="<?php echo $ImgSize; ?>" height="<?php echo $ImgSize; ?>">
                                <?php endif; ?>
                            -->

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

        <?php endwhile; ?>
    </div>
</section>