<?php

// デフォルトの投稿の記事詳細に`/blog/`(アーカイブ名)を追加する: THIS IS IMPORTANT!!!!
function add_article_post_permalink( $permalink ) {
    $permalink = '/blog' . $permalink;
    return $permalink;
}
add_filter( 'pre_post_link', 'add_article_post_permalink' );

// カスタム投稿タイプの追加

add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type( 'daily_report', [ // 投稿タイプ名の定義
        'labels' => [
            'name'          => '業務日報', // 管理画面上で表示する投稿タイプ名
            'singular_name' => 'daily-report',    // カスタム投稿の識別名
        ],
        'public'        => true,  // 投稿タイプをpublicにするか
        'has_archive'   => false, // アーカイブ機能ON/OFF
        'menu_position' => 5,     // 管理画面上での配置場所
        'show_in_rest'  => true,  // 5系から出てきた新エディタ「Gutenberg」を有効にする
        'supports' => array( 'title', 'custom-fields', 'comments', 'revisions') // control what elements display

// 'supports' option is here
// 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky'


    ]);
}

?>