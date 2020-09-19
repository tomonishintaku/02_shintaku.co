<?php
/** 読むのにかかる時間を表示 */
function my_reading_time(){
  global $post;

  /** 1分間に読める文字数の平均 */
  $per_min = 600;

  $content = $post->post_content;
  $count = mb_strlen(strip_tags($content));
  $mins = round($count / $per_min);
  $secs = round($count % $per_min / ($per_min / 60));


 $locale = get_locale();
if ('en_US' == $locale ) { 

echo <<<EOM
You could read this article in {$mins} min and {$secs} sec approx.
EOM;

 } else { 

echo <<<EOM
この記事は約{$mins}分{$secs}秒で読めます
EOM;

} 
  
  
}

?>