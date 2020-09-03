<?php

/* 【管理画面】管理画面にもファビコンを表示 */
function admin_favicon() {
 echo '<link rel="shortcut icon" type="image/x-icon" href="/wp-content/uploads/common/favicon.ico" />';
}
add_action('admin_head', 'admin_favicon');


// Remove categroy title like this "カテゴリー: 仕事", you can remove 'カテゴリー:' 
add_filter( 'get_the_archive_title', function ($title) {

    if ( is_category() ) {
            $title = single_cat_title( '', false );
        } elseif ( is_tag() ) {
            $title = single_tag_title( '', false );
        } 
    return $title;

});


//bogo 国旗アイコンを削除
add_filter( 'bogo_use_flags','bogo_use_flags_false');
function bogo_use_flags_false(){
return false;
}

add_filter( 'bogo_language_switcher_links', 'custom_bogo_language_title_name', 10, 2 );
function custom_bogo_language_title_name( $links ) {
foreach ( $links as $code => $name ) {
if ( $name['lang'] === 'en-US' ) {
$links[$code]['title'] = 'EN';
$links[$code]['native_name'] = 'EN';
} elseif ( $name['lang'] === 'ja' ) {
$links[$code]['title'] = 'JP';
$links[$code]['native_name'] = 'JP';
}
}
return $links;
}

//Add template path short code
function shortcode_templateurl() {
    return get_bloginfo('template_url');
}
add_shortcode('template_url', 'shortcode_templateurl');


//delete generate default JS files to header
//function my_delete_local_jquery() {wp_deregister_script('jquery');}
//add_action( 'wp_enqueue_scripts', 'my_delete_local_jquery' );

//STOP generate auto P tag
add_action('init', function() {
remove_filter('the_excerpt', 'wpautop');
remove_filter('the_content', 'wpautop');
});
add_filter('tiny_mce_before_init', function($init) {
$init['wpautop'] = false;
$init['apply_source_formatting'] = ture;
return $init;
});

//add sidebar widget
if ( function_exists('register_sidebar') ) {
  
    register_sidebar(array(
        'name'          => 'サイドバー2',
        'id'            => 'sidebar-2',
        'description'   => 'for DAILY REPORT',
        'class'         => 's2',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));
  
}
// USE php code on the widget
function widget_text_exec_php( $widget_text ) {
    if( strpos( $widget_text, '<' . '?' ) !== false ) {
        ob_start();
        eval( '?>' . $widget_text );
$widget_text = ob_get_contents();
ob_end_clean();
}
return $widget_text;
}
add_filter( 'widget_text', 'widget_text_exec_php', 99 );

?>