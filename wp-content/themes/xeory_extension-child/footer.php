<footer id="footer">
  <div class="footer-01">
    <div class="wrap">

      <div id="footer-brand-area" class="row">
        <div class="footer-logo gr6">
        <?php
        $logo_image = get_option('footer-logo');
          if( isset($logo_image) && $logo_image !== '' ){
        ?>
          <img src="<?php echo get_option('footer-logo');?>" alt="<?php echo get_bloginfo('name'); ?>" />
        <?php
          }else{
            echo get_bloginfo('name');
          }
        ?>
        </div>
        <div class="footer-address gr6">
          <?php echo get_option('footer-address');?>
        </div>
      </div><!-- /footer-brand-area -->

      <div id="footer-content-area" class="row">
        <div id="footer-list-area" class="gr6">
          <div class="row">

      <?php if( has_nav_menu( 'footer_nav' ) ){
      //bzb_get_nav_menu_name();
        echo '<div id="footer-cont-about" class="gr4">';
        echo "<h4>" . get_option('footer_menu_title') . "</ph4>";
        wp_nav_menu(
          array(
            'theme_location'  => 'footer_nav',
            'menu_class'      => '',
            'menu_id'         => 'fnav',
            'container'       => 'nav',
            'items_wrap'      => '<ul id="footer-nav" class="%2$s">%3$s</ul>'
          )
        );
        echo '</div>';
      } //if footer_nav
      ?>
            <div id="footer-cont-sns" class="gr4">
              <?php footer_social_buttons();?>
              
              <!--今後移行すること-->
              <ul><li><a target="_blank" href="https://www.linkedin.com/in/tomonishintaku/"><i class="fa fa-linkedin" aria-hidden="true"></i>Linkedin</a></li><li><a href="https://www.youtube.com/channel/UCDnt1pKShw7vYrD1JavHBkg" target="_blank"><i class="fa fa-youtube-square"></i>Youtube</a></li><li class="header-feedly"><a target="_blank" href="https://www.instagram.com/tomonishintaku/"><i class="fa fa-instagram" aria-hidden="true"></i>Instagram</a></li></ul>
              <!--今後移行すること-->
              
            </div>
          </div>
        </div>
        <div class="gr6">
          <div class="row">


<!-- 会社概要 -->
<div class="front-main-cont">
  <?php 
    $companies = get_option('company');
    $use_company_map = get_option('use_company_map');
    $company_map = "";
    $company_map_class = '';
    
    if(isset($use_company_map) && $use_company_map !== ''){
      $company_map = get_option('company_map');
    }else{
      $company_map_class='no-company-map';
    }

  $icon = 'none';
  $titile = '';
  $ruby = '';
  $bzb_company_header_array = get_option('bzb_company_header');
  if(is_array($bzb_company_header_array)){
    extract($bzb_company_header_array) ;
  }

  ?>

  <header class="main_title">
    <div class="cont-icon"><i class="<?php echo $icon;?>"></i></div>
    <h2 class="cont-title"><?php echo $title;?></h2>
    <p class="cont-ruby"><?php echo $ruby;?></p>
  </header>


  <section id="front-contents-1" class="c_box c_box_left <?php echo $company_map_class; ?>">
    <div class="c_img_box">
      <?php echo $company_map;?>
    </div>

    <div class="wrap">
      <div class="c_box_inner">
        <?php 
        if(isset($companies) && $companies !== ''){
          $i = 1;
          foreach((array)$companies as $key => $company){
            echo '<dl id="front-company-'.$i.'">';
            echo "<dt><span>" . $company['name'] . "</span></dt><dd><span>" . $company['val'] . "</span></dd>";
            echo "</dl>";
            $i++;
          }
        }
        ?>
      </div>
    </div>
  </section>
</div><!-- front-company -->


          </div>
        </div>
      </div>



    </div><!-- /wrap -->
  </div><!-- /footer-01 -->
  <div class="footer-02">
    <div class="wrap">
      <p class="footer-copy">
        © Copyright <?php echo date('Y'); ?> SHINTAKU。. All rights reserved.
      </p>
    </div><!-- /wrap -->
  </div><!-- /footer-02 -->
  <?php
  // }
  ?>
</footer>

<a href="#" class="pagetop"><span><i class="fa fa-angle-up"></i></span></a>
<?php wp_footer(); ?>

<script>
(function($){

$(function() {
    $("#header-fnav").hide();
  $("#header-fnav-area").hover(function(){
    $("#header-fnav").fadeIn('fast');
  }, function(){
    $("#header-fnav").fadeOut('fast');
  });
});


// グローバルナビ-サブメニュー
$(function(){
  $(".sub-menu").css('display', 'none');
  $("#gnav-ul li").hover(function(){
    $(this).children('ul').fadeIn('fast');
  }, function(){
    $(this).children('ul').fadeOut('fast');
  });
});

// トップページメインビジュアル
$(function(){
  h = $(window).height();
  hp = h * .3;
  $('#main_visual').css('height', h + 'px');
  $('#main_visual .wrap').css('padding-top', hp + 'px');
});

$(function(){
	if(window.innerWidth < 768) {
  h = $(window).height();
  hp = h * .2;
  $('#main_visual').css('height', h + 'px');
  $('#main_visual .wrap').css('padding-top', hp + 'px');
	}
});

// sp-nav
$(function(){
  var header_h = $('#header').height();
  $('#gnav-sp').hide();

    $(window).resize(function(){
      var w = $(window).width();
      var x = 991;
      if (w >= x) {
          $('#gnav-sp').hide();
      }
  });

  $('#gnav-sp').css('top', header_h);
  $('#header-nav-btn a').click(function(){
    $('#gnav-sp').slideToggle();
    $('body').append('<p class="dummy"></p>');
  });
  $('body').on('click touchend', '.dummy', function() {
    $('#gnav-sp').slideUp();
    $('p.dummy').remove();
    return false;
  });
});

})(jQuery);

</script>


</body>
</html>
