<?php


/* add comment..
* ---------------------------------------- */
function bzb_show_avatar(){
  global $post;
  $a_id = $post->post_author;

  $original_avatar = get_user_meta($a_id, 'original_avatar', true);

  $avatar_image = '';

  if( isset($original_avatar) && $original_avatar !== ''){
    $avatar_image = '<img src="'.$original_avatar .'" alt="アバター">';
  }else{
    $avatar_image = '<img src="'.get_template_directory_uri().'/lib/images/masman.png" alt="masman" width="100" height="100" />';
  }

  $author_meta_name = get_the_author_meta('display_name');
  $googleplus = get_the_author_meta('googleplus');
  $disp_author_description = get_the_author_meta('description');

  $disp_avatar =<<<eof
    <aside class="post-author" itemprop="author" itemscope="itemscope" itemtype="http://schema.org/Person">
      <div class="clearfix">
        <div class="post-author-img">
          <div class="inner">
          {$avatar_image}
          <p class="post-author__button_sns_noramal"> 
          <a class="pl-4 pr-2" target="_blank" href="https://twitter.com/tomonishintaku" rel="noopener noreferrer"><i class="fa fa-twitter-square"></i></a><a class="pr-2" href="https://www.facebook.com/tomoni.shintaku" target="_blank" rel="noopener noreferrer"><i class="fa fa-facebook-square"></i></a>
          </p>
          </div>
        </div>
        <div class="post-author-meta">
          <h4 itemprop="name">{$author_meta_name}</h4>
          <p itemprop="discription">{$disp_author_description}</p>
        </div>
      </div>
    </aside>
eof;

  echo $disp_avatar;
}
?>
