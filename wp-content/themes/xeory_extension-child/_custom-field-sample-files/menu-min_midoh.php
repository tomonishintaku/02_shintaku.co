  <?php 
    $args = array(
      'p' => 2547, // Specify the post ID
      'post_type' => 'location-min'
    );
    $the_query = new WP_Query( $args );
    if ($the_query->have_posts()) : 
      while ($the_query->have_posts()) : 
    $the_query->the_post();
  ?>
  <!-- Call the custom menu -->
  <?php include ('custom_menu_min.php'); ?>
  
  <?php
    endwhile;
    endif;
    wp_reset_postdata();
  ?>
