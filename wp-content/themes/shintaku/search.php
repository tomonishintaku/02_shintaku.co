<?php get_header(); ?>

<div id="content" class="search-results-inner">

    <div id="inner-content" class="wrap cf">

        <main id="main" class="m-all t-2of3 d-5of7 cf" role="main">
            <section class="search-results-inner__lead">
                <h1 class="archive-title">
                    素晴らしい！<span class="d-block d-md-inline">『<span
                            class="search-word"><?php echo esc_attr(get_search_query()); ?></span>』</span>
                    <span class="sub">
                        <?php _e( 'で検索されるとは！', 'bonestheme' ); ?>
                    </span>
                </h1>
                <?php if (have_posts()): ?>
                <p>ありがとうございます。このようなページにも手を抜かず、検索窓を設置した甲斐がありました。
                </p>
                <p>以下は検索結果の一覧ですが、検索いただいた心ばかりのお礼として、<u class="red">初回ご利用時に作業工数0.5時間分(1500円)の割引</u>をさせていただきます。</p>
                <p>その際は、検索結果画面をご覧になった旨をお申し出ください。
                </p>
                <?php endif; ?>
            </section>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class('cf, post-found'); ?> role="article">

                <header class="entry-header article-header">

                    <h3 class="search-title entry-title"><a href="<?php the_permalink() ?>" rel="bookmark"
                            title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

                    <p class="byline entry-meta vcard">
                        <?php printf( __( 'Posted %1$s', 'bonestheme' ),
                   							    /* the time the post was published */
                   							    '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>'
                    							); ?>
                    </p>
                </header>

                <section class="entry-content">
                    <?php the_excerpt( '<span class="read-more">' . __( 'Read more &raquo;', 'bonestheme' ) . '</span>' ); ?>

                    <?php if (get_post_type() === 'daily_report'): ?>
                    <p>
                        SHINTAKU。が手掛けている仕事内容を一般公開している<u><em>業務報告</em>の<?php echo get_the_time('Y年m月d日'); ?>分の記事内</u>にお探しのキーワード『<span
                            class="red"><?php echo esc_attr(get_search_query()); ?></span>』が含まれているようです。
                    </p>
                    <?php else : ?>
                    <!-- none -->
                    <?php endif; ?>
                </section>

                <footer class="article-footer">
                    <?php if(get_the_category_list(', ') != ''): ?>
                    <?php printf( __( '%1$s カテゴリーの記事', 'bonestheme' ), get_the_category_list(', ') ); ?>
                    <?php elseif (get_post_type() === 'daily_report'): ?>
                    <a href="/daily_report" rel="category tag">業務報告</a>の記事
                    <?php else : ?>
                        <span style="display: block;margin:-3rem 0;"></span>
                    <?php endif; ?>
                    <?php //the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>

                </footer> <!-- end article footer -->

            </article>

            <?php endwhile; ?>

            <?php bones_page_navi(); ?>

            <?php if (have_posts()): ?>
            <p>お探しの情報は見つかりましたでしょうか。もし見当違いの記事ばかりでしたり、探すのがご面倒な場合は<a href="/inquiry">お問い合わせ</a>よりお気軽にお問い合わせください。</p>
            <p>最短5分～24時間以内にご回答差し上げます。</p>
            <?php endif; ?>

            <?php else : ?>

            <article id="post-not-found" class="hentry cf">
                <header class="article-header">
                    <p><?php _e( '<em>しかしながら、さすがに想定外でした</em>。お探しのキーワードに最適な記事をお届けできないようです……。', 'bonestheme' ); ?>
                    </p>
                </header>
                <section class="entry-content">
                    <p><?php _e( 'ご面倒をおかけいたしますが、再度「料金」や「SEO」など、ご希望のキーワードで検索いただけませんでしょうか。' ); ?></p>
                    <p><?php get_search_form(); ?></p>
                </section>
                <footer class="article-footer">
                    <p><?php _e( 'もしお探しの情報が見つからない場合や、探すのがご面倒という方は<a
                    href="/inquiry">お問い合わせ</a>よりお気軽にお問い合わせください。<br><br>最短5分～24時間以内にご回答差し上げます。<br><br>また、ご不便をおかけしたお詫びとしまして、<u class="red">初回ご利用時に作業工数1時間分(3000円)の割引</u>をさせていただきます。その際は、検索結果画面をご覧になった旨をお申し出ください。', 'bonestheme' ); ?>
                    </p>
                </footer>
            </article>

            <?php endif; ?>

        </main>

        <?php get_sidebar(); ?>

    </div>

</div>

<?php get_footer(); ?>