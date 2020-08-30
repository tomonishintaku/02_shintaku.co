<!--
Template Name: Full Width
-->

<?php get_header(); ?>

<div id="content" class="full-width">
  
<?php if( !(is_home() || is_front_page() || is_singular('lp') ) ){ ?>
  
  <div class="breadcrumb-area">
    <div class="wrap">
      <?php bzb_breadcrumb(); ?>
    </div>
  </div>
    
<?php } ?>

<div class="wrap">

  <div id="main" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
    
    <div class="main-inner">
    
    <?php
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
    ?>
        

    <?php 
    global $post;
    $cf = get_post_meta($post->ID);
    $facebook_page_url = '';
    $facebook_page_url = get_option('facebook_page_url');
    $post_cat = '';
    ?>
    <article id="post-<?php the_id(); ?>" <?php post_class(); ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting">
      
      <?php if( get_the_post_thumbnail() ) : ?>
      <div class="post-thumbnail">
        <?php the_post_thumbnail(array(1200, 630, true)); ?>
      </div>
      <?php endif; ?>

      <section class="post-content p-2 p-md-5" itemprop="text">

     
        <?php
          the_content(); 

          $args = array(
            'before' => '<div class="pagination">',
            'after' => '</div>',
            'link_before' => '<span>',
            'link_after' => '</span>'
          );

          wp_link_pages($args);
        ?>

<?php 

$name = get_field_object('name');
$label_name = $name['label'];  

$start_time = get_field_object('start_time');
$label_start_time = $start_time['label'];  

$leaving_time = get_field_object('leaving_time');
$label_leaving_time = $leaving_time['label'];  

$business_overview = get_field_object('business_overview');
$label_business_overview = $business_overview['label'];  

$tomorrows_goal = get_field_object('tomorrows_goal');
$label_tomorrows_goal = $tomorrows_goal['label'];  

$notes = get_field_object('notes');
$label_notes = $notes['label'];  

 ?>



  <style>
    .table-wrap{
        overflow: hidden;
    }
    .daily-report-form h1{
      text-align: center;
    }

.post-content .daily-report-form{
  background: #fff;
  overflow: hidden;
  border: none;
}
 .post-content .daily-report-form th{
    background: #fff;
    font-weight: bold;
    color: #000;
}

.daily-report-form td{
  height: 80px;

}
.daily-report-form .text-area{
  height:280px;
  vertical-align: top;
}


.seal-area{
  border: 1px solid #e5e5e5;
  text-align: center;
  width: 120px;
    height: 140px;
}
.seal-area span{
  display: block;
  border-bottom: 1px solid #e5e5e5;
}
.seal-area img{
  display: block;
  width: 50%;
      margin: 20px auto;
}
.post-content .daily-report-form .date-area,
.post-content .daily-report-form .date-area td{
  border: 0;
}
.date-area{
  text-align: right;
  
}

  </style>




<table class="daily-report-form">
  <tr>
    <td colspan="2"><h1>業務日報</h1></td>
    <th><div class="seal-area"><span>承認者</span><img src="/wp-content/uploads/2020/08/seal-shintaku.png" alt="新宅の承認印"></div></th>
  </tr>
<tr>
<td width="60%">
    </td>
<td colspan="2" width="40%">
  <section class="date-area">
      <span><?php echo get_the_date('Y'); ?></span>
      <span class="fix">年</span>
      <span><?php echo get_the_date('n'); ?></span>
      <span class="fix">月</span>
      <span><?php echo get_the_date('j'); ?></span>
      <span class="fix">日</span>
      <span><?php echo get_the_date('(D)'); ?></span>
</section>
</td>
</tr>
<tr>
<th width="50%"><?php echo $label_name; ?></th>
<th width="25%"><?php echo $label_start_time; ?></th>
<th width="25%"><?php echo $label_leaving_time; ?></th>
</tr>
<tr>
<td><?php the_field('name'); ?></td>
<td><?php the_field('start_time'); ?></td>
<td><?php the_field('leaving_time'); ?></td>
</tr>
<tr>
<th colspan="3"><?php echo $label_business_overview; ?></th>
</tr>
<tr>
<td colspan="3" class="text-area"><?php the_field('business_overview'); ?></td>
</tr>
<tr>
<th colspan="3"><?php echo $label_tomorrows_goal; ?></th>
</tr>
<tr>
<td colspan="3" class="text-area"><?php the_field('tomorrows_goal'); ?></td>
</tr>
<tr>
<th colspan="3"><?php echo $label_notes; ?></th>
</tr>
<tr>
<td colspan="3" class="text-area"><?php the_field('notes'); ?></td>
</tr>
</table>



      </section>

      <?php echo bzb_get_cta($post->ID); ?>
      
    <?php if( is_active_sidebar('under_post_area') ){ ?>
    <div class="post-share">
      <?php dynamic_sidebar('under_post_area');?>
    </div>
    <?php } ?>
      
    </article>    

        <?php

				endwhile;

			else :
		?>
    
    <p>投稿が見つかりません。</p>
				
    <?php
			endif;
		?>


    </div><!-- /main-inner -->
  </div><!-- /main -->
  

</div><!-- /wrap -->

</div><!-- /content -->

<?php get_footer(); ?>


