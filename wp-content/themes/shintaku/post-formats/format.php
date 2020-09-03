<?php //CUSTOM FIELD VARS ?>
<?php $image = get_field('image'); ?>
<?php $book_star = get_field('book_star'); ?>
<?php $amazon_url = get_field('amazon_url'); ?>
<?php $author = get_field('author'); ?>
<?php $publisher = get_field('publisher'); ?>
<?php $summary = get_field('summary'); ?>
<?php $price = get_field('price'); ?>
<?php $no_price = get_field('no_price'); ?>
<?php $type = get_field('type'); ?>
<?php $reread = get_field('reread'); ?>
<?php $text = get_field('text'); ?>
<?php //CUSTOM FIELD VARS END?>

<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemprop="blogPost"
    itemtype="http://schema.org/BlogPosting">

    <header class="article-header entry-header">
        <h1 class="entry-title single-title" itemprop="headline" rel="bookmark">
            <?php the_title(); ?>
            <?php if(empty($author || $publisher)):?>
            <!-- none -->
            <?php else:?>
            <span class="entry-title__book-info">(<?php echo $author; ?>/<?php echo $publisher; ?>)</span>
            <?php endif;?>
        </h1>

        <p class="byline entry-meta vcard">

            <?php printf( __( '').' %1$s',
                       /* the time the post was published */
                       '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>'
                    ); ?>

        </p>

    </header> <?php // end article header ?>

    <section class="entry-content cf" itemprop="articleBody">

        <?php if( get_the_post_thumbnail() ) : //main image area ?>
        <div class="post-thumbnail mb-3">
            <?php the_post_thumbnail(array(1200, 630, true)); ?>
            <?php else:?>

            <?php if(empty($image)):?>
            <!-- none -->
            <?php else:?>
            <section class="type-post__main-image">
                <a href="<?php echo $amazon_url; ?>" target="_blank" rel="noopener noreferrer"><img
                        src="<?php echo $image; ?>" title="<?php the_title(); ?>"
                        alt="書籍<?php the_title(); ?>(<?php echo $author; ?>/<?php echo $publisher; ?>)」の表紙画像"></a>
            </section>
            <?php endif;?>

            <?php endif; //main image area END ?>

            <section class="book-info">
                <?php if(empty($author)):?>
                <!--none-->
                <?php else:?>
                <?php if(empty($price)):?>
                <!--none-->
                <p class="book-info__price"><span class="px-2"><?php echo $no_price; ?></span></p>
                <?php else:?>
                <p class="book-info__price">購入価格:<span class="px-2"><?php echo $price; ?></span>円</p>
                <?php endif;?>
                <p class="book-info__star">評価:<span><?php echo $book_star; ?></span></p>
                <?php endif;?>
            </section>
            <section class="post-outline">
                <p class="post-outline__reading_time"><i class="fa fa-eye"></i> <?php my_reading_time(); ?></p>
                <?php if(empty($summary)):?>
                <!--none-->
                <?php else:?>
                <aside class="post-outline__summary">
                    <strong>20文字でまとめると…</strong>
                    <p><?php echo $summary; ?></p>
                </aside>
                <?php endif;?>
            </section>
            <?php if( get_field('type') == "ForwardMain"): //change 'reread' generate place?>
            <?php require_once('formats-inc/reread.php');?>
            <?php endif; //change 'reread' generate place END ?>

            <?php
                    the_content();
                    wp_link_pages( array(
                      'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
                      'after'       => '</div>',
                      'link_before' => '<span>',
                      'link_after'  => '</span>',
                    ) );
                  ?>
            <?php if( has_tag('no_comment') ) : //if an article has "no_comment" tag will display fixed format/template ?>
            <p><?php the_time('Y年m月d日');?>に読了。</p>
            <p>感想なし。</p>
            <?php endif; ?>

            <?php if(empty($reread)):?>
            <!--none-->
            <?php else:?>

            <?php if( get_field('type') == "AfterMain"):  //change 'reread' generate place?>
            <?php require_once('formats-inc/reread.php');?>
            <?php endif; //change 'reread' generate place END ?>

            <?php endif;?>
            <!--END Conditional branch VAR-->

    </section> <?php // end article section ?>

    <footer class="article-footer">

        <?php printf( __( '記事カテゴリー', 'bonestheme' ).': %1$s', get_the_category_list(', ') ); ?>

    </footer> <?php // end article footer ?>

    <?php //comments_template(); ?>

</article> <?php // end article ?>