<?php get_header(); ?>

<div id="content">

    <div id="inner-content" class="wrap cf">

        <main id="main" class="m-all cf" role="main" itemscope itemprop="mainContentOfPage"
            itemtype="http://schema.org/Blog">

            <article id="post-not-found" class="hentry cf">

                <header class="article-header">
                    <h1>404エラー(0<span style="font-size:1.5rem;font-weight:bold;">円</span>)のご注文ありがとうございます
                        <?php // _e( 'Epic 404 - Article Not Found', 'bonestheme' ); ?></h1>

                </header>
                <section class="entry-content">

                    <p>お世話になっております。シンタクです。
                    </p>
                    <p>このたびは404エラーページ(0円)のご注文をいただき誠にありがとうございます。
                    </p>
                    <p>
                        404エラーは、存在しないURLを入力されたり、すでに削除されたページにご訪問されたお客様にご提供する<u>世界標準のサービス</u>です。
                    </p>
                    <p>特に<u>費用等は発生いたしません</u>ので、どうぞご安心ください。また、<u>スパムやウイルスの心配もありません</u>。
                    </p>
                    <p>WEBのプロフェッショナルSHINTAKU。では、このようなエラーページまで、きめ細かなサービスをご提供いたします。
                    </p>
                    <p>不明点等ございましたら、以下の検索窓からお探しいただくか、お気軽に<a href="/inquiry">お問い合わせ</a>よりご連絡いただければ幸いです。
                    </p>
                    <?php //_e( 'The article you were looking for was not found, but maybe try looking again!', 'bonestheme' ); ?>
                    </p>

                </section>

                <section class="search">

                    <div style="width:70%;margin:0 auto;"><?php get_search_form(); ?></div>

                </section>

                <footer class="article-footer">

                    <p><?php //_e( 'This is the 404.php template.', 'bonestheme' ); ?></p>

                </footer>

            </article>

        </main>

    </div>

</div>

<?php get_footer(); ?>