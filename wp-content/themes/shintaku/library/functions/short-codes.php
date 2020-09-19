<?php

// Make short code for FEE



function JA_fee($atts) {
    return '<a href="/blog/taro-award-plan-apply" class="detail-link" style="color:#59616d;"><span class="scrl-add-class_'.$atts['num'].'">3,000<span class="currency">円</span><span class="tax">(税込)</span></span></a>';
}
add_shortcode('JA_hourly_fee', 'JA_fee');

function JA_fee_sp($atts) {
    return '<span style="text-decoration: line-through;">3,000<span class="currency">円</span><span class="tax">(税込)</span></span><strong class="red">米一合</strong></a>';
}
add_shortcode('JA_hourly_fee_sp', 'JA_fee_sp');

function EN_fee($atts) {
    return '<span class="scrl-add-class_'.$atts['num'].'">3,000<span class="currency">JPY</span><span class="tax">(tax included)</span></span>';
}
add_shortcode('EN_hourly_fee', 'EN_fee');

function ENblog_link_daily_report($atts) {
    return '<a href="https://tomonishintaku.com/en/blog/" target="_blank" rel="noopener noreferrer">英語日記執筆、添削内容確認</a>';
}
add_shortcode('ENblog_link_dr', 'ENblog_link_daily_report');

function company() {
    return '<span class="cpny-name">SHINTAKU。</span>';
}
add_shortcode('cpny_name', 'company');

function company_name() {
    return '<span class="cpny-name">SHINTAKU。</span>';
}
add_shortcode('c_name', 'company_name');

//shortcode for article's featured image 
function show_post_thumbnail(){
    return get_the_post_thumbnail();
}
add_shortcode('featured_image','show_post_thumbnail');

?>