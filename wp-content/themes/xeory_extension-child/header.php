<!DOCTYPE HTML>
<html lang="ja" prefix="og: http://ogp.me/ns#">
<head>
	<meta charset="UTF-8">
	<title><?php bzb_title(); ?></title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

<?php 
wp_head();
?>
<link rel="icon" href="/wp-content/uploads/common/favicon.ico">
<link rel='stylesheet' href='/wp-content/themes/xeory_extension-child/lib/css/bootstrap-grid.min.css' type='text/css' media='all' />
<?php echo get_option('analytics_tracking_code');?>


<!--公開時には削除するCSS-->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>">

</head>

<body <?php body_class();?> itemschope="itemscope" itemtype="http://schema.org/WebPage">

<?php bzb_show_facebook_block(); ?>

<?php if( is_singular('lp') ) { ?>

<div class="lp-wrap">

<header id="lp-header">
  <h1 class="lp-title"><?php wp_title(''); ?></h1>
</header>

<?php }else{ ?>
<header id="header" role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
  <div class="wrap clearfix">
    <?php
      $logo_image = get_option('logo_image');
      $logo_text = get_option('logo_text');
      $logo_class = '';
      if( !empty($logo_image) && get_option('toppage_logo_type') == 'logo_image') :
        $logo_inner = '<img src="'. get_option('logo_image') .'" alt="'.get_bloginfo('name').'" />';
        $logo_class = 'class="imagelogo"';
      else:
        if (!empty($logo_text) && get_option('toppage_logo_type') == 'logo_text') :
          $logo_inner = get_option('logo_text');
        else:
          $logo_inner = get_bloginfo('name');
        endif;
        $logo_inner_desc = '<p class="header-description">'.get_bloginfo('description').'</p>';
      endif;
      $logo_wrap = ( is_front_page() || is_home() ) ? 'h1' : 'p' ;
    ?>
    <<?php echo $logo_wrap; ?> id="logo" <?php echo $logo_class ?> itemprop="headline">
      <a href="<?php echo home_url(); ?>"><?php echo $logo_inner; ?></a><br />
    </<?php echo $logo_wrap; ?>>    <!-- start global nav  -->

    <div id="header-right" class="clearfix">

    <?php if( has_nav_menu( 'footer_nav' ) ){ ?>
    
    <?php } // if footer_nav ?>
    
    <?php if( has_nav_menu( 'global_nav' ) ){ ?>
    <div id="header-gnav-area">
      <nav id="gnav" role="navigation" itemscope="itemscope" itemtype="http://scheme.org/SiteNavigationElement">
      <?php
        wp_nav_menu(
          array(
            'theme_location'  => 'global_nav',
            'menu_class'      => 'clearfix',
            'menu_id'         => 'gnav-ul',
            'container'       => 'div',
            'container_id'    => 'gnav-container',
            'container_class' => 'gnav-container'
          )
        );?>  
      </nav>
    </div>
    <?php } ?>
    
    </div><!-- /header-right -->
    
    <?php if( has_nav_menu('global_nav') || has_nav_menu('footer_nav') ){ ?>
      

      <div id="header-nav-btn">
        <a href="#"><i class="fa fa-align-justify"></i></a>
      </div>
      
    <?php } ?>
  </div>
</header>
<?php } // if is_singular('lp') ?>


  <nav id="gnav-sp">
    <div class="wrap">
    
    <div class="grid-wrap">
            <div id="header-cont-about" class="grid-3">
          <?php if( has_nav_menu( 'footer_nav' ) ){ 
          
            wp_nav_menu(
              array(
                'theme_location'  => 'footer_nav',
                'menu_class'      => '',
                'menu_id'         => 'fnav',
                'container'       => 'nav',
                'items_wrap'      => '<ul id="footer-nav" class="%2$s">%3$s</ul>'
              )
            );
          } //if footer_nav 
          ?>
        </div>
    </div>
    
    </div>
  </nav>




