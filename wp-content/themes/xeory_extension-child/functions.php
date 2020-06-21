<?php

/*親テーマで修正したファイル一覧
C:\Dropbox\02_web\02_shintaku.co\wp-content\themes\xeory_extension\lib\functions\bzb-functions.php
C:\Dropbox\02_web\02_shintaku.co\wp-content\themes\xeory_extension\lib\functions\show_avatar.php

*/

/* ファンクション 子テーマを優先して読み込む
get_template_directory_uri関数は親テーマのディレクトリURIを返し、get_stylesheet_directory_uri関数はそのテーマのスタイルシートがあるディレクトリのURIを返します。

https://dainashiyesterday.com/post-4254/

//親テーマのstyle.css
  wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );

    //子テーマのstyle.css
    wp_enqueue_style( 'style-child', get_stylesheet_directory_uri() . '/style.css', array( 'style' ) );

//親テーマのfunctions.js
  wp_enqueue_script( 'functions', get_template_directory_uri() . '/js/functions.js' );

    //子テーマのfunctions.js
    wp_enqueue_script( 'functions-child', get_stylesheet_directory_uri() . '/js/functions.js', array( 'functions' ) );
*/
//require_once('lib/admin/init.php');
//require_once('lib/admin/manual.php');
//require_once('lib/functions/asset.php');
//require_once('lib/functions/head.php');
//require_once('lib/functions/custom-header.php');
//require_once('lib/functions/custom-post.php');
//require_once('lib/functions/bzb-functions.php');
//require_once('lib/functions/setting.php');
//require_once('lib/functions/custom-fields.php');
//require_once('lib/functions/category-custom-fields.php');
//require_once('lib/functions/widget.php');
//require_once('lib/functions/postviews.php');
//require_once('lib/admin/extension.php');
//require_once('lib/functions/shortcodes.php');
//require_once('lib/functions/social_btn.php');
//require_once(get_stylesheet_directory_uri.'lib/functions/show_avatar.php');
wp_enqueue_script( 'show_avatar-child', get_stylesheet_directory_uri() . 'lib/functions/show_avatar.php', array( 'show_avatar' ) );
//require_once('lib/functions/category-custom-fields-ex.php');



add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style')
);
}
add_action('wp_enqueue_scripts', 'prfx_frontend_enqueue');
function prfx_frontend_enqueue() {
  wp_enqueue_script( 'parent-style', plugins_url('/lib/js/jquery.pagetop.js', __FILE__) );
  wp_enqueue_script( 'child-style', plugins_url('/lib/js/jquery.pagetop.js', __FILE__), array('parent-style'));
}

/** 読むのにかかる時間を表示 */
function my_reading_time(){
  global $post;

  /** 1分間に読める文字数の平均 */
  $per_min = 600;

  $content = $post->post_content;
  $count = mb_strlen(strip_tags($content));
  $mins = round($count / $per_min);
  $secs = round($count % $per_min / ($per_min / 60));
  
  echo <<<EOM

この記事は約{$mins}分{$secs}秒で読めます

EOM;
}


/* 【管理画面】管理画面にもファビコンを表示 */
function admin_favicon() {
 echo '<link rel="shortcut icon" type="image/x-icon" href="/wp-content/uploads/common/favicon.ico" />';
}
add_action('admin_head', 'admin_favicon');

//最初の全体作成が終わり次第削除。CSSやJSのバージョン管理をしない設定
function vc_remove_wp_ver_css_js( $src ) {
if ( strpos( $src, 'ver=' ) )
$src = remove_query_arg( 'ver', $src );
return $src;
}
add_filter( 'style_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'vc_remove_wp_ver_css_js', 9999 ); 
//ここまで。最初の全体作成が終わり次第削除

