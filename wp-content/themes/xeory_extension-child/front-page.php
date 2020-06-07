<?php get_header(); ?>

<div id="main_visual">
  <div class="wrap">
    <h2><?php echo nl2br(get_option('top_catchcopy'));?></h2>
    <p><?php echo nl2br(get_option('top_description'));?></p>
  </div><!-- .wrap -->
</div>

<div id="content">

<div id="main">
  <div class="main-inner">

<div id="recent_post_content" class="front-loop">

<h2>NEWS</h2>
<div class="wrap">
  <div class="front-loop-cont">
<?php
      $i = 1;
      wp_reset_query();

        $args=array(
            'meta_query'=>
            array(
              array(  'key'=>'bzb_show_toppage_flag',
                         'compare' => 'NOT EXISTS'
              ),
              array(  'key'=>'bzb_show_toppage_flag',
                        'value'=>'none',
                        'compare'=>'!='
              ),
             'relation'=>'OR'
          ),
            'showposts'=>5,
            'order'=>'DESC'
          );

      query_posts($args);
      
      if ( have_posts() ) :
        while ( have_posts() ) : the_post();

        $cf = get_post_meta($post->ID);
        $recent_class = 'popular_post_box recent-'.$i;
?>

  <article id="post-<?php echo the_ID(); ?>" <?php post_class($recent_class); ?>>
      <a href="<?php the_permalink(); ?>" class="wrap-a"><?php if( get_the_post_thumbnail() ) { ?>
        <div class="post-thumbnail">
        <?php the_post_thumbnail('loop_thumbnail'); ?>
        </div>
        <?php } else{ ?>
          <img src="<?php echo get_template_directory_uri(); ?>/lib/images/noimage.jpg" alt="noimage" width="800" height="533" />
        <?php } // get_the_post_thumbnail ?>
            <p class="p_category"><?php $cat = get_the_category(); $cat = $cat[0]; {
          echo $cat->cat_name;
        } ?></p>
            <h3><?php the_title(); ?></h3>
            <p class="p_date"><span class="date-y"><?php the_time('Y'); ?></span><span class="date-mj"><?php the_time('m/j'); ?></span></p></a>
  </article>

<?php
        $i++;
        endwhile;
      endif;
?>

</div><!-- /front-root-cont -->

</div><!-- /wrap -->
</div><!-- /recent_post_content -->








<div id="front-service" class="front-main-cont">

  <header class="category_title main_title front-cont-header">
    <div class="cont-icon"><i class="<?php echo $icon;?>"></i></div>
    <h2 class="cont-title"><?php echo $title;?></h2>
    <p class="cont-ruby"><?php echo $ruby;?></p>
    <div class="tri-border"><span></span></div>
  </header>



<!-- 会社概要 -->
<div id="front-company" class="front-main-cont">
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

  <header class="category_title main_title front-cont-header">
    <div class="cont-icon"><i class="<?php echo $icon;?>"></i></div>
    <h2 class="cont-title"><?php echo $title;?></h2>
    <p class="cont-ruby"><?php echo $ruby;?></p>
    <div class="tri-border"><span></span></div>
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

<!-- お問い合わせ -->
<div id="front-contact" class="front-main-cont">
  <?php 

  $icon = 0;
  $titile = '';
  $ruby = '';
  $bzb_contact_header_array = get_option('bzb_contact_header');
  if(is_array($bzb_contact_header_array)){
    extract($bzb_contact_header_array) ;
  }

  $bzb_contact_textarea = get_option('bzb_contact_textarea');
  ?>

  <header class="category_title main_title front-cont-header">
    <div class="cont-icon"><i class="<?php echo $icon;?>"></i></div>
    <h2 class="cont-title"><?php echo $title;?></h2>
    <p class="cont-ruby"><?php echo $ruby;?></p>
    <div class="tri-border"><span></span></div>
  </header>

  <section id="front-contents-1" class="c_box c_box_left">
    <div class="wrap">
      <div class="c_box_inner">
        <?php echo $content = apply_filters( 'the_content', $bzb_contact_textarea, 10 ); ?>
      </div>
    </div>
  </section>
</div><!-- front-contact -->


  </div><!-- /main-inner -->
</div><!-- /main -->
  
</div><!-- /content -->
<?php wp_reset_query(); ?>
<?php get_footer(); ?>


