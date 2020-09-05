<section class="popular-articles">
    <h3>
        人気記事一覧
    </h3>
    <div class="row">
        <?php
                    // GEt PV data from function 
                    setPostViews(get_the_ID());

                    // ループ開始
                    query_posts('meta_key=post_views_count&orderby=meta_value_num&posts_per_page=5&order=DESC'); while(have_posts()) : the_post();
                    ?>

        <!-- Display Thumbnail -->
        <div class="col-4">
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
        <div class="col-8">
            <p>
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
            </p>
        </div>

        <?php endwhile; ?>
    </div>
</section>