<style type="text/css">
  h1.entry-title {
    display: none;
  }
  .page-title__name {
    text-align: center;
  }
</style>


<div class="container">
  <div class="shadow-frame menu-frame grand-menu">
    <div class="text-left">
      <a id="menu"></a>
      <h2 class="page-title__name ec-header-h1 text-center mb-5">Menu</h2>

 <!--START appetizer-->
      <?php if(have_rows('menu_appetizer')): ?>
        <?php while(have_rows('menu_appetizer')): the_row();
          // Vars
          // Category Name
          $menu_category = get_sub_field('menu_category');
          $extra_topping_title = get_sub_field('extra_topping_title'); 
        ?>

        <?php if(have_rows('menu_category')): ?>
          <?php while(have_rows('menu_category')): the_row();
            // Vars
            // Category Name
            $category_title = get_sub_field('category_title');
            $sub_text = get_sub_field('sub_text');
            $sub_text2 = get_sub_field('sub_text2');
            $leaf_icon = get_sub_field('leaf_icon');
            $spicy_icon = get_sub_field('spicy_icon');
          ?>

      <h3 class="menu-cate-title text-left mt-3 mb-5 border-bottom border-dark pb-3"><?php echo $category_title?><br class="d-inline d-md-none"> <small class="d-md-inline d-block">
        <?php
              if( in_array( 'Add Icon', (array)get_sub_field('leaf_icon') ) ) {
              echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
        } ?> <?php echo $sub_text ?><br class="d-inline d-md-none"><?php
              if( in_array( 'Add Icon', (array)get_sub_field('spicy_icon') ) ) {
              echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
        } ?> <?php echo $sub_text2 ?></small></h3>
    <?php endwhile; ?>
    <?php endif; ?>
      <div class="row">

        <div class="order-2 order-md-1 col-12 col-md-7">
        <?php if(have_rows('menu_names')): ?>
          <?php while(have_rows('menu_names')): the_row();
            // Vars
            $menu_name = get_sub_field('menu_name'); // Menu name
            $menu_desc = get_sub_field('menu_desc'); // Menu desc
            $menu_icons = get_sub_field('menu_icon'); // Menu icon
            $menu_price = get_sub_field('price'); // Menu price
            $menu_description = get_sub_field('menu_description'); // Menu Description
            $popularity = get_sub_field('popularity'); // popularity
            $menu_emphasis = get_sub_field('menu_emphasis'); // Menu Emphasis
          ?>
          <!--Menu Texts LOOP START-->
          <div class="row mt-3 mt-md-0">
            <div class="col-9">
              <h5><?php echo $menu_name ?>   <!-- Output Icons -->
                <?php
                      if( in_array( 'vegetables only', (array)get_sub_field('menu_icons') ) ) {
                      echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
                } ?>
                <?php
                      if( in_array( 'spicy', (array)get_sub_field('menu_icons') ) ) {
                      echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
                } ?>            <!--START POPULARITY list -->
                        
                        <?php
                              if( in_array( '#1 Top seller', (array)get_sub_field('popularity') ) ) {
                              echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Top seller</span>';
                        } ?>
                        <?php
                              if( in_array( '#2 Top seller', (array)get_sub_field('popularity') ) ) {
                              echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Top seller</span>';
                        } ?>
                        <?php
                              if( in_array( '#3 Top seller', (array)get_sub_field('popularity') ) ) {
                              echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Top seller</span>';
                        } ?>
                        <?php
                              if( in_array( '#4 Top seller', (array)get_sub_field('popularity') ) ) {
                              echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Top seller</span>';
                        } ?>
                        <?php
                              if( in_array( '#1 Most Popular', (array)get_sub_field('popularity') ) ) {
                              echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Most Popular</span>';
                        } ?>
                        <?php
                              if( in_array( '#2 Most Popular', (array)get_sub_field('popularity') ) ) {
                              echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Most Popular</span>';
                        } ?>
                        <?php
                              if( in_array( '#3 Most Popular', (array)get_sub_field('popularity') ) ) {
                              echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Most Popular</span>';
                        } ?>
                        <?php
                              if( in_array( '#4 Most Popular', (array)get_sub_field('popularity') ) ) {
                              echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Most Popular</span>';
                        } ?>
            
                         <!--END POPULARITY list -->  </h5>
                        <p><?php echo $menu_description ?>
                        <span class="text-danger font-weight font-weight-bold d-block">
                          <?php echo $menu_emphasis ?>
                        </span>
                      </p>
            </div>
            <div class="col-3">
              <span class="h6 text-nowrap">$ <?php echo $menu_price ?></span>
            </div>
            </div>
          <?php endwhile; ?>
          <?php endif; ?>
    
          <?php if(empty($extra_topping_title)):?>
            <!--空欄だった場合-->
        <?php else:?>
            <!--値が有る場合-->
  <div class="border-black">
<div class="col-12 pt-3"><span class="h4 font-weight-normal"><?php echo $extra_topping_title ?></span></div>
<div class="row p-3">

<?php if(have_rows('extra_topping')): ?>
  <?php while(have_rows('extra_topping')): the_row();
    // Vars
    $topping_names = get_sub_field('topping_names'); // Menu Emphasis
    $price = get_sub_field('price'); // Menu Emphasis
    $menu_description = get_sub_field('menu_description'); // Menu Description
  ?>
  <div class="col-12 col-md-6">
    <div class="row mb-2">
      <div class="col-8 font-weight-bold"><?php echo $topping_names ?><p class="font-weight-normal"><?php echo $menu_description ?></p></div>
      <div class="col-4 text-right"><?php echo $price ?></div>
    </div>
  </div>
<?php endwhile; ?>
<?php endif; ?>

</div>         
</div>
<?php endif;?>

        </div>
        <div class="order-1 order-md-2 col-12 col-md-5 text-center mb-0 mb-md-3">
                          <?php if(have_rows('menu_images')): ?>
                              <?php while(have_rows('menu_images')): the_row();
                              // Vars
                              $menu_img = get_sub_field('image'); // Menu thumbnail
                              $menu_cap = get_sub_field('image_caption'); // Menu caption
                            ?>
                                <?php if($menu_img): ?>
                                  <!-- Output the image/image caption -->
                                  <img src="<?php echo $menu_img['url']; ?>" alt="<?php echo $menu_img['alt'] ?>" class="w-100 pb-2" />
                                  <p class="mb-2"><span class="font-weight-bold"><?php echo $menu_cap?></span></p>
                            <?php endif ?>
                              <?php endwhile; ?>
                            <?php endif ?>
                      </div>
        </div>
        <!--text3 & image1 LOOP END-->
      <?php endwhile; ?>
    <?php endif; ?>
</div>
<!--END appetizer-->


<!--START menu_group_specialty-->
     <?php if(have_rows('menu_group_specialty')): ?>
       <?php while(have_rows('menu_group_specialty')): the_row();
         // Vars
         // Category Name
         $menu_category = get_sub_field('menu_category');
         $extra_topping_title = get_sub_field('extra_topping_title'); 
       ?>

       <?php if(have_rows('menu_category')): ?>
         <?php while(have_rows('menu_category')): the_row();
           // Vars
           // Category Name
           $category_title = get_sub_field('category_title');
           $sub_text = get_sub_field('sub_text');
           $sub_text2 = get_sub_field('sub_text2');
           $leaf_icon = get_sub_field('leaf_icon');
           $spicy_icon = get_sub_field('spicy_icon');
         ?>

     <h3 class="menu-cate-title text-left mt-3 mb-5 border-bottom border-dark pb-3"><?php echo $category_title?><br class="d-inline d-md-none"> <small class="d-md-inline d-block mt-2">
       <?php
             if( in_array( 'Add Icon', (array)get_sub_field('leaf_icon') ) ) {
             echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text ?><br class="d-inline d-md-none"><?php
             if( in_array( 'Add Icon', (array)get_sub_field('spicy_icon') ) ) {
             echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text2 ?></small></h3>
   <?php endwhile; ?>
   <?php endif; ?>
     <div class="row">
       <div class="col-12 col-md-5 text-center mb-0 mb-md-3">
                         <?php if(have_rows('menu_images')): ?>
                             <?php while(have_rows('menu_images')): the_row();
                             // Vars
                             $menu_img = get_sub_field('image'); // Menu thumbnail
                             $menu_cap = get_sub_field('image_caption'); // Menu caption
                           ?>
                               <?php if($menu_img): ?>
                                 <!-- Output the image/image caption -->
                                 <img src="<?php echo $menu_img['url']; ?>" alt="<?php echo $menu_img['alt'] ?>" class="w-100 pb-2" />
                                 <p class="mb-2"><span class="font-weight-bold"><?php echo $menu_cap?></span></p>
                           <?php endif ?>
                             <?php endwhile; ?>
                           <?php endif ?>
                     </div>
       <div class="col-12 col-md-7">
       <?php if(have_rows('menu_names')): ?>
         <?php while(have_rows('menu_names')): the_row();
           // Vars
           $menu_name = get_sub_field('menu_name'); // Menu name
           $menu_icons = get_sub_field('menu_icons'); // Menu icon
           $menu_price = get_sub_field('price'); // Menu price
           $menu_description = get_sub_field('menu_description'); // Menu Description
           $menu_emphasis = get_sub_field('menu_emphasis'); // Menu Emphasis
           $popularity = get_sub_field('popularity'); // popularity
           $recommended_toppings = get_sub_field('recommended_toppings');
         ?>
         <!--Menu Texts LOOP START-->
         <div class="row">
           <div class="col-9">
             <h5><?php echo $menu_name ?>   <!-- Output Icons -->
               <?php
                     if( in_array( 'vegetables only', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>
               <?php
                     if( in_array( 'spicy', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>                <!--START POPULARITY list -->
                       
                       <?php
                             if( in_array( '#1 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#1 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Most Popular</span>';
                       } ?>
                        <!--END POPULARITY list -->  </h5>
                       <p><?php echo $menu_description ?>
                     </p>
                     <?php if(empty($recommended_toppings)):?>
                       <!--空欄だった場合-->
                   <?php else:?>
                       <!--値が有る場合-->
                     <p class="mt-3 font-weight-bold">Recommended toppings: <?php echo $recommended_toppings ?></p>
                   <?php endif ?>
                     
                     <?php if(empty($menu_emphasis)):?>
                       <!--空欄だった場合-->
                   <?php else:?>
                       <!--値が有る場合-->
                     <p class="text-danger font-weight font-weight-bold d-block" style="margin-top:-0.8rem;">
                       <?php echo $menu_emphasis ?>
                     </p>
                   <?php endif ?>
           </div>
           <div class="col-3">
             <span class="h6 text-nowrap">$ <?php echo $menu_price ?></span>
             </div>
           </div>
         <?php endwhile; ?>
         <?php endif; ?>


         <?php if(empty($extra_topping_title)):?>
           <!--空欄だった場合-->
       <?php else:?>
           <!--値が有る場合-->  
<div class="border-black">
<div class="col-12 pt-3"><span class="h4 font-weight-normal"><?php echo $extra_topping_title ?></span></div>
<div class="row p-3">

<?php if(have_rows('extra_topping')): ?>
  <?php while(have_rows('extra_topping')): the_row();
    // Vars
    $topping_names = get_sub_field('topping_names'); // Menu Emphasis
    $price = get_sub_field('price'); // Menu Emphasis
    $menu_description = get_sub_field('menu_description'); // Menu Description
  ?>
  <div class="col-12 col-md-6">
    <div class="row mb-2">
      <div class="col-8 font-weight-bold"><?php echo $topping_names ?><p class="font-weight-normal"><?php echo $menu_description ?></p></div>
      <div class="col-4 text-right"><?php echo $price ?></div>
    </div>
  </div>
<?php endwhile; ?>
<?php endif; ?>

</div>         
</div>
<?php endif;?><!--条件分岐終わり-->

</div>
</div>
       <!--text3 & image1 LOOP END-->
     <?php endwhile; ?>
   <?php endif; ?>
<!--END menu_group_specialty-->

 <!--START menu_specialties_and_rice_bowls-->
      <?php if(have_rows('menu_specialties_and_rice_bowls')): ?>
        <?php while(have_rows('menu_specialties_and_rice_bowls')): the_row();
          // Vars
          // Category Name
          $menu_category = get_sub_field('menu_category');
          $extra_topping_title = get_sub_field('extra_topping_title'); 
        ?>

        <?php if(have_rows('menu_category')): ?>
          <?php while(have_rows('menu_category')): the_row();
            // Vars
            // Category Name
            $category_title = get_sub_field('category_title');
            $sub_text = get_sub_field('sub_text');
            $sub_text2 = get_sub_field('sub_text2');
            $leaf_icon = get_sub_field('leaf_icon');
            $spicy_icon = get_sub_field('spicy_icon');
          ?>

      <h3 class="menu-cate-title text-left mt-3 mb-5 border-bottom border-dark pb-3"><?php echo $category_title?><br class="d-inline d-md-none"> <small class="d-md-inline d-block">
        <?php
              if( in_array( 'Add Icon', (array)get_sub_field('leaf_icon') ) ) {
              echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
        } ?> <?php echo $sub_text ?><br class="d-inline d-md-none"><?php
              if( in_array( 'Add Icon', (array)get_sub_field('spicy_icon') ) ) {
              echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
        } ?> <?php echo $sub_text2 ?></small></h3>
    <?php endwhile; ?>
    <?php endif; ?>
      <div class="row">
        <div class="order-2 order-md-1 col-12 col-md-7">
        <?php if(have_rows('menu_names')): ?>
          <?php while(have_rows('menu_names')): the_row();
            // Vars
            $menu_name = get_sub_field('menu_name'); // Menu name
            $menu_desc = get_sub_field('menu_desc'); // Menu desc
            $menu_icons = get_sub_field('menu_icons'); // Menu icon
            $menu_price = get_sub_field('price'); // Menu price
            $menu_description = get_sub_field('menu_description'); // Menu Description
            $menu_emphasis = get_sub_field('menu_emphasis'); // Menu Emphasis
            $popularity = get_sub_field('popularity'); // Menu Emphasis
          ?>
          <!--Menu Texts LOOP START-->
          <div class="row mt-3 mt-md-0">
            <div class="col-9 col-md-10">
              <h5><?php echo $menu_name ?>   <!-- Output Icons -->
                <?php
                      if( in_array( 'vegetables only', (array)get_sub_field('menu_icons') ) ) {
                      echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
                } ?>
                <?php
                      if( in_array( 'spicy', (array)get_sub_field('menu_icons') ) ) {
                      echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
                } ?>
                <!--START POPULARITY list -->
                        
                        <?php
                              if( in_array( '#1 Top seller', (array)get_sub_field('popularity') ) ) {
                              echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Top seller</span>';
                        } ?>
                        <?php
                              if( in_array( '#2 Top seller', (array)get_sub_field('popularity') ) ) {
                              echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Top seller</span>';
                        } ?>
                        <?php
                              if( in_array( '#3 Top seller', (array)get_sub_field('popularity') ) ) {
                              echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Top seller</span>';
                        } ?>
                        <?php
                              if( in_array( '#4 Top seller', (array)get_sub_field('popularity') ) ) {
                              echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Top seller</span>';
                        } ?>
                        <?php
                              if( in_array( '#1 Most Popular', (array)get_sub_field('popularity') ) ) {
                              echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Most Popular</span>';
                        } ?>
                        <?php
                              if( in_array( '#2 Most Popular', (array)get_sub_field('popularity') ) ) {
                              echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Most Popular</span>';
                        } ?>
                        <?php
                              if( in_array( '#3 Most Popular', (array)get_sub_field('popularity') ) ) {
                              echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Most Popular</span>';
                        } ?>
                        <?php
                              if( in_array( '#4 Most Popular', (array)get_sub_field('popularity') ) ) {
                              echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Most Popular</span>';
                        } ?>
                
                         <!--END POPULARITY list -->  
                        </h5>
                        <p><?php echo $menu_description ?>
                        <span class="text-danger font-weight font-weight-bold d-block">
                          <?php echo $menu_emphasis ?>
                        </span>
                      </p>
            </div>
            <div class="col-3 col-md-2">
              <span class="h6 text-nowrap">$ <?php echo $menu_price ?></span>
            </div>
            </div>
          <?php endwhile; ?>
          <?php endif; ?>
          
          <?php if(empty($extra_topping_title)):?>
            <!--空欄だった場合-->
        <?php else:?>
            <!--値が有る場合-->  
          
          <div class="border-black">
<div class="col-12 pt-3"><span class="h4 font-weight-normal"><?php echo $extra_topping_title ?></span></div>
<div class="row p-3">

<?php if(have_rows('extra_topping')): ?>
<?php while(have_rows('extra_topping')): the_row();
  // Vars
  $topping_names = get_sub_field('topping_names'); // Menu Emphasis
  $price = get_sub_field('price'); // Menu Emphasis
  $menu_description = get_sub_field('menu_description'); // Menu Description
?>
<div class="col-12 col-md-6">
  <div class="row mb-2">
    <div class="col-8 font-weight-bold"><?php echo $topping_names ?><p class="font-weight-normal"><?php echo $menu_description ?></p></div>
    <div class="col-4 text-right"><?php echo $price ?></div>
  </div>
</div>
<?php endwhile; ?>
<?php endif; ?>

</div>         
</div>
            <?php endif;?><!--条件分岐終わり-->
        </div>
        <div class="order-1 order-md-2 col-12 col-md-5 text-center mb-0 mb-md-3">
                          <?php if(have_rows('menu_images')): ?>
                              <?php while(have_rows('menu_images')): the_row();
                              // Vars
                              $menu_img = get_sub_field('image'); // Menu thumbnail
                              $menu_cap = get_sub_field('image_caption'); // Menu caption
                            ?>
                                <?php if($menu_img): ?>
                                  <!-- Output the image/image caption -->
                                  <img src="<?php echo $menu_img['url']; ?>" alt="<?php echo $menu_img['alt'] ?>" class="w-100 pb-2" />
                                  <p class="mb-2"><span class="font-weight-bold"><?php echo $menu_cap?></span></p>
                            <?php endif ?>
                              <?php endwhile; ?>
                            <?php endif ?>
                      </div>
        </div>
        <!--text3 & image1 LOOP END-->
      <?php endwhile; ?>
    <?php endif; ?>
<!--END menu_specialties_and_rice_bowls-->



<!--START menu_4　テキスト右-->
     <?php if(have_rows('menu_4')): ?>
       <?php while(have_rows('menu_4')): the_row();
         // Vars
         // Category Name
         $menu_category = get_sub_field('menu_category');
         $extra_topping_title = get_sub_field('extra_topping_title'); 
       ?>

       <?php if(have_rows('menu_category')): ?>
         <?php while(have_rows('menu_category')): the_row();
           // Vars
           // Category Name
           $category_title = get_sub_field('category_title');
           $sub_text = get_sub_field('sub_text');
           $sub_text2 = get_sub_field('sub_text2');
           $leaf_icon = get_sub_field('leaf_icon');
           $spicy_icon = get_sub_field('spicy_icon');
         ?>

     <h3 class="menu-cate-title text-left mt-3 mb-5 border-bottom border-dark pb-3"><?php echo $category_title?><br class="d-inline d-md-none"> <small class="d-md-inline d-block mt-2">
       <?php
             if( in_array( 'Add Icon', (array)get_sub_field('leaf_icon') ) ) {
             echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text ?><br class="d-inline d-md-none"><?php
             if( in_array( 'Add Icon', (array)get_sub_field('spicy_icon') ) ) {
             echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text2 ?></small></h3>
   <?php endwhile; ?>
   <?php endif; ?>
     <div class="row">
       <div class="col-12 col-md-5 text-center mb-0 mb-md-3">
                         <?php if(have_rows('menu_images')): ?>
                             <?php while(have_rows('menu_images')): the_row();
                             // Vars
                             $menu_img = get_sub_field('image'); // Menu thumbnail
                             $menu_cap = get_sub_field('image_caption'); // Menu caption
                           ?>
                               <?php if($menu_img): ?>
                                 <!-- Output the image/image caption -->
                                 <img src="<?php echo $menu_img['url']; ?>" alt="<?php echo $menu_img['alt'] ?>" class="w-100 pb-2" />
                                 <p class="mb-2"><span class="font-weight-bold"><?php echo $menu_cap?></span></p>
                           <?php endif ?>
                             <?php endwhile; ?>
                           <?php endif ?>
                     </div>
       <div class="col-12 col-md-7">
       <?php if(have_rows('menu_names')): ?>
         <?php while(have_rows('menu_names')): the_row();
           // Vars
           $menu_name = get_sub_field('menu_name'); // Menu name
           $menu_icons = get_sub_field('menu_icons'); // Menu icon
           $menu_price = get_sub_field('price'); // Menu price
           $menu_description = get_sub_field('menu_description'); // Menu Description
           $menu_emphasis = get_sub_field('menu_emphasis'); // Menu Emphasis
           $popularity = get_sub_field('popularity'); // popularity
           $recommended_toppings = get_sub_field('recommended_toppings');
         ?>
         <!--Menu Texts LOOP START-->
         <div class="row">
           <div class="col-9">
             <h5><?php echo $menu_name ?>   <!-- Output Icons -->
               <?php
                     if( in_array( 'vegetables only', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>
               <?php
                     if( in_array( 'spicy', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>                <!--START POPULARITY list -->
                       
                       <?php
                             if( in_array( '#1 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#1 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Most Popular</span>';
                       } ?>
                        <!--END POPULARITY list -->  </h5>
                       <p><?php echo $menu_description ?>
                     </p>
                     <?php if(empty($recommended_toppings)):?>
                       <!--空欄だった場合-->
                   <?php else:?>
                       <!--値が有る場合-->
                     <p class="mt-3 font-weight-bold">Recommended toppings: <?php echo $recommended_toppings ?></p>
                   <?php endif ?>
                     
                     <?php if(empty($menu_emphasis)):?>
                       <!--空欄だった場合-->
                   <?php else:?>
                       <!--値が有る場合-->
                     <p class="text-danger font-weight font-weight-bold d-block" style="margin-top:-0.8rem;">
                       <?php echo $menu_emphasis ?>
                     </p>
                   <?php endif ?>
           </div>
           <div class="col-3">
             <span class="h6 text-nowrap">$ <?php echo $menu_price ?></span>
             </div>
           </div>
         <?php endwhile; ?>
         <?php endif; ?>


         <?php if(empty($extra_topping_title)):?>
           <!--空欄だった場合-->
       <?php else:?>
           <!--値が有る場合-->  
<div class="border-black">
<div class="col-12 pt-3"><span class="h4 font-weight-normal"><?php echo $extra_topping_title ?></span></div>
<div class="row p-3">

<?php if(have_rows('extra_topping')): ?>
  <?php while(have_rows('extra_topping')): the_row();
    // Vars
    $topping_names = get_sub_field('topping_names'); // Menu Emphasis
    $price = get_sub_field('price'); // Menu Emphasis
    $menu_description = get_sub_field('menu_description'); // Menu Description
  ?>
  <div class="col-12 col-md-6">
    <div class="row mb-2">
      <div class="col-8 font-weight-bold"><?php echo $topping_names ?><p class="font-weight-normal"><?php echo $menu_description ?></p></div>
      <div class="col-4 text-right"><?php echo $price ?></div>
    </div>
  </div>
<?php endwhile; ?>
<?php endif; ?>

</div>         
</div>
<?php endif;?><!--条件分岐終わり-->

</div>
</div>
       <!--text3 & image1 LOOP END-->
     <?php endwhile; ?>
   <?php endif; ?>
<!--END menu_4 テキスト右-->

<!--START menu_5 左テキスト-->
     <?php if(have_rows('menu_5')): ?>
       <?php while(have_rows('menu_5')): the_row();
         // Vars
         // Category Name
         $menu_category = get_sub_field('menu_category');
         $extra_topping_title = get_sub_field('extra_topping_title'); 
       ?>

       <?php if(have_rows('menu_category')): ?>
         <?php while(have_rows('menu_category')): the_row();
           // Vars
           // Category Name
           $category_title = get_sub_field('category_title');
           $sub_text = get_sub_field('sub_text');
           $sub_text2 = get_sub_field('sub_text2');
           $leaf_icon = get_sub_field('leaf_icon');
           $spicy_icon = get_sub_field('spicy_icon');
         ?>

     <h3 class="menu-cate-title text-left mt-3 mb-5 border-bottom border-dark pb-3"><?php echo $category_title?><br class="d-inline d-md-none"> <small class="d-md-inline d-block">
       <?php
             if( in_array( 'Add Icon', (array)get_sub_field('leaf_icon') ) ) {
             echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text ?><br class="d-inline d-md-none"><?php
             if( in_array( 'Add Icon', (array)get_sub_field('spicy_icon') ) ) {
             echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text2 ?></small></h3>
   <?php endwhile; ?>
   <?php endif; ?>
     <div class="row">

       <div class="order-2 order-md-1 col-12 col-md-7">
       <?php if(have_rows('menu_names')): ?>
         <?php while(have_rows('menu_names')): the_row();
           // Vars
           $menu_name = get_sub_field('menu_name'); // Menu name
           $menu_desc = get_sub_field('menu_desc'); // Menu desc
           $menu_icons = get_sub_field('menu_icon'); // Menu icon
           $menu_price = get_sub_field('price'); // Menu price
           $menu_description = get_sub_field('menu_description'); // Menu Description
           $popularity = get_sub_field('popularity'); // popularity
           $menu_emphasis = get_sub_field('menu_emphasis'); // Menu Emphasis
         ?>
         <!--Menu Texts LOOP START-->
         <div class="row mt-3 mt-md-0">
           <div class="col-9">
             <h5><?php echo $menu_name ?>   <!-- Output Icons -->
               <?php
                     if( in_array( 'vegetables only', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>
               <?php
                     if( in_array( 'spicy', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>            <!--START POPULARITY list -->
                       
                       <?php
                             if( in_array( '#1 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#1 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Most Popular</span>';
                       } ?>
           
                        <!--END POPULARITY list -->  </h5>
                       <p><?php echo $menu_description ?>
                       <span class="text-danger font-weight font-weight-bold d-block">
                         <?php echo $menu_emphasis ?>
                       </span>
                     </p>
           </div>
           <div class="col-3">
             <span class="h6 text-nowrap">$ <?php echo $menu_price ?></span>
           </div>
           </div>
         <?php endwhile; ?>
         <?php endif; ?>
   
         <?php if(empty($extra_topping_title)):?>
           <!--空欄だった場合-->
       <?php else:?>
           <!--値が有る場合-->
 <div class="border-black">
<div class="col-12 pt-3"><span class="h4 font-weight-normal"><?php echo $extra_topping_title ?></span></div>
<div class="row p-3">

<?php if(have_rows('extra_topping')): ?>
 <?php while(have_rows('extra_topping')): the_row();
   // Vars
   $topping_names = get_sub_field('topping_names'); // Menu Emphasis
   $price = get_sub_field('price'); // Menu Emphasis
   $menu_description = get_sub_field('menu_description'); // Menu Description
 ?>
 <div class="col-12 col-md-6">
   <div class="row mb-2">
     <div class="col-8 font-weight-bold"><?php echo $topping_names ?><p class="font-weight-normal"><?php echo $menu_description ?></p></div>
     <div class="col-4 text-right"><?php echo $price ?></div>
   </div>
 </div>
<?php endwhile; ?>
<?php endif; ?>

</div>         
</div>
<?php endif;?>

       </div>
       <div class="order-1 order-md-2 col-12 col-md-5 text-center mb-0 mb-md-3">
                         <?php if(have_rows('menu_images')): ?>
                             <?php while(have_rows('menu_images')): the_row();
                             // Vars
                             $menu_img = get_sub_field('image'); // Menu thumbnail
                             $menu_cap = get_sub_field('image_caption'); // Menu caption
                           ?>
                               <?php if($menu_img): ?>
                                 <!-- Output the image/image caption -->
                                 <img src="<?php echo $menu_img['url']; ?>" alt="<?php echo $menu_img['alt'] ?>" class="w-100 pb-2" />
                                 <p class="mb-2"><span class="font-weight-bold"><?php echo $menu_cap?></span></p>
                           <?php endif ?>
                             <?php endwhile; ?>
                           <?php endif ?>
                     </div>
       </div>
       <!--text3 & image1 LOOP END-->
     <?php endwhile; ?>
   <?php endif; ?>
<!--END menu_5 左テキスト-->

<!--START menu_6 テキスト右-->
     <?php if(have_rows('menu_6')): ?>
       <?php while(have_rows('menu_6')): the_row();
         // Vars
         // Category Name
         $menu_category = get_sub_field('menu_category');
         $extra_topping_title = get_sub_field('extra_topping_title'); 
       ?>

       <?php if(have_rows('menu_category')): ?>
         <?php while(have_rows('menu_category')): the_row();
           // Vars
           // Category Name
           $category_title = get_sub_field('category_title');
           $sub_text = get_sub_field('sub_text');
           $sub_text2 = get_sub_field('sub_text2');
           $leaf_icon = get_sub_field('leaf_icon');
           $spicy_icon = get_sub_field('spicy_icon');
         ?>

     <h3 class="menu-cate-title text-left mt-3 mb-5 border-bottom border-dark pb-3"><?php echo $category_title?><br class="d-inline d-md-none"> <small class="d-md-inline d-block mt-2">
       <?php
             if( in_array( 'Add Icon', (array)get_sub_field('leaf_icon') ) ) {
             echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text ?><br class="d-inline d-md-none"><?php
             if( in_array( 'Add Icon', (array)get_sub_field('spicy_icon') ) ) {
             echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text2 ?></small></h3>
   <?php endwhile; ?>
   <?php endif; ?>
     <div class="row">
       <div class="col-12 col-md-5 text-center mb-0 mb-md-3">
                         <?php if(have_rows('menu_images')): ?>
                             <?php while(have_rows('menu_images')): the_row();
                             // Vars
                             $menu_img = get_sub_field('image'); // Menu thumbnail
                             $menu_cap = get_sub_field('image_caption'); // Menu caption
                           ?>
                               <?php if($menu_img): ?>
                                 <!-- Output the image/image caption -->
                                 <img src="<?php echo $menu_img['url']; ?>" alt="<?php echo $menu_img['alt'] ?>" class="w-100 pb-2" />
                                 <p class="mb-2"><span class="font-weight-bold"><?php echo $menu_cap?></span></p>
                           <?php endif ?>
                             <?php endwhile; ?>
                           <?php endif ?>
                     </div>
       <div class="col-12 col-md-7">
       <?php if(have_rows('menu_names')): ?>
         <?php while(have_rows('menu_names')): the_row();
           // Vars
           $menu_name = get_sub_field('menu_name'); // Menu name
           $menu_icons = get_sub_field('menu_icons'); // Menu icon
           $menu_price = get_sub_field('price'); // Menu price
           $menu_description = get_sub_field('menu_description'); // Menu Description
           $menu_emphasis = get_sub_field('menu_emphasis'); // Menu Emphasis
           $popularity = get_sub_field('popularity'); // popularity
           $recommended_toppings = get_sub_field('recommended_toppings');
         ?>
         <!--Menu Texts LOOP START-->
         <div class="row">
           <div class="col-9">
             <h5><?php echo $menu_name ?>   <!-- Output Icons -->
               <?php
                     if( in_array( 'vegetables only', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>
               <?php
                     if( in_array( 'spicy', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>                <!--START POPULARITY list -->
                       
                       <?php
                             if( in_array( '#1 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#1 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Most Popular</span>';
                       } ?>
                        <!--END POPULARITY list -->  </h5>
                       <p><?php echo $menu_description ?>
                     </p>
                     <?php if(empty($recommended_toppings)):?>
                       <!--空欄だった場合-->
                   <?php else:?>
                       <!--値が有る場合-->
                     <p class="mt-3 font-weight-bold">Recommended toppings: <?php echo $recommended_toppings ?></p>
                   <?php endif ?>
                     
                     <?php if(empty($menu_emphasis)):?>
                       <!--空欄だった場合-->
                   <?php else:?>
                       <!--値が有る場合-->
                     <p class="text-danger font-weight font-weight-bold d-block" style="margin-top:-0.8rem;">
                       <?php echo $menu_emphasis ?>
                     </p>
                   <?php endif ?>
           </div>
           <div class="col-3">
             <span class="h6 text-nowrap">$ <?php echo $menu_price ?></span>
             </div>
           </div>
         <?php endwhile; ?>
         <?php endif; ?>


         <?php if(empty($extra_topping_title)):?>
           <!--空欄だった場合-->
       <?php else:?>
           <!--値が有る場合-->  
<div class="border-black">
<div class="col-12 pt-3"><span class="h4 font-weight-normal"><?php echo $extra_topping_title ?></span></div>
<div class="row p-3">

<?php if(have_rows('extra_topping')): ?>
  <?php while(have_rows('extra_topping')): the_row();
    // Vars
    $topping_names = get_sub_field('topping_names'); // Menu Emphasis
    $price = get_sub_field('price'); // Menu Emphasis
    $menu_description = get_sub_field('menu_description'); // Menu Description
  ?>
  <div class="col-12 col-md-6">
    <div class="row mb-2">
      <div class="col-8 font-weight-bold"><?php echo $topping_names ?><p class="font-weight-normal"><?php echo $menu_description ?></p></div>
      <div class="col-4 text-right"><?php echo $price ?></div>
    </div>
  </div>
<?php endwhile; ?>
<?php endif; ?>

</div>         
</div>
<?php endif;?><!--条件分岐終わり-->

</div>
</div>
       <!--text3 & image1 LOOP END-->
     <?php endwhile; ?>
   <?php endif; ?>
<!--END menu_6 テキスト右-->

<!--START menu_7 左テキスト-->
     <?php if(have_rows('menu_7')): ?>
       <?php while(have_rows('menu_7')): the_row();
         // Vars
         // Category Name
         $menu_category = get_sub_field('menu_category');
         $extra_topping_title = get_sub_field('extra_topping_title'); 
       ?>

       <?php if(have_rows('menu_category')): ?>
         <?php while(have_rows('menu_category')): the_row();
           // Vars
           // Category Name
           $category_title = get_sub_field('category_title');
           $sub_text = get_sub_field('sub_text');
           $sub_text2 = get_sub_field('sub_text2');
           $leaf_icon = get_sub_field('leaf_icon');
           $spicy_icon = get_sub_field('spicy_icon');
         ?>

     <h3 class="menu-cate-title text-left mt-3 mb-5 border-bottom border-dark pb-3"><?php echo $category_title?><br class="d-inline d-md-none"> <small class="d-md-inline d-block">
       <?php
             if( in_array( 'Add Icon', (array)get_sub_field('leaf_icon') ) ) {
             echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text ?><br class="d-inline d-md-none"><?php
             if( in_array( 'Add Icon', (array)get_sub_field('spicy_icon') ) ) {
             echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text2 ?></small></h3>
   <?php endwhile; ?>
   <?php endif; ?>
     <div class="row">

       <div class="order-2 order-md-1 col-12 col-md-7">
       <?php if(have_rows('menu_names')): ?>
         <?php while(have_rows('menu_names')): the_row();
           // Vars
           $menu_name = get_sub_field('menu_name'); // Menu name
           $menu_desc = get_sub_field('menu_desc'); // Menu desc
           $menu_icons = get_sub_field('menu_icon'); // Menu icon
           $menu_price = get_sub_field('price'); // Menu price
           $menu_description = get_sub_field('menu_description'); // Menu Description
           $popularity = get_sub_field('popularity'); // popularity
           $menu_emphasis = get_sub_field('menu_emphasis'); // Menu Emphasis
         ?>
         <!--Menu Texts LOOP START-->
         <div class="row mt-3 mt-md-0">
           <div class="col-9">
             <h5><?php echo $menu_name ?>   <!-- Output Icons -->
               <?php
                     if( in_array( 'vegetables only', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>
               <?php
                     if( in_array( 'spicy', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>            <!--START POPULARITY list -->
                       
                       <?php
                             if( in_array( '#1 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#1 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Most Popular</span>';
                       } ?>
           
                        <!--END POPULARITY list -->  </h5>
                       <p><?php echo $menu_description ?>
                       <span class="text-danger font-weight font-weight-bold d-block">
                         <?php echo $menu_emphasis ?>
                       </span>
                     </p>
           </div>
           <div class="col-3">
             <span class="h6 text-nowrap">$ <?php echo $menu_price ?></span>
           </div>
           </div>
         <?php endwhile; ?>
         <?php endif; ?>
   
         <?php if(empty($extra_topping_title)):?>
           <!--空欄だった場合-->
       <?php else:?>
           <!--値が有る場合-->
 <div class="border-black">
<div class="col-12 pt-3"><span class="h4 font-weight-normal"><?php echo $extra_topping_title ?></span></div>
<div class="row p-3">

<?php if(have_rows('extra_topping')): ?>
 <?php while(have_rows('extra_topping')): the_row();
   // Vars
   $topping_names = get_sub_field('topping_names'); // Menu Emphasis
   $price = get_sub_field('price'); // Menu Emphasis
   $menu_description = get_sub_field('menu_description'); // Menu Description
 ?>
 <div class="col-12 col-md-6">
   <div class="row mb-2">
     <div class="col-8 font-weight-bold"><?php echo $topping_names ?><p class="font-weight-normal"><?php echo $menu_description ?></p></div>
     <div class="col-4 text-right"><?php echo $price ?></div>
   </div>
 </div>
<?php endwhile; ?>
<?php endif; ?>

</div>         
</div>
<?php endif;?>

       </div>
       <div class="order-1 order-md-2 col-12 col-md-5 text-center mb-0 mb-md-3">
                         <?php if(have_rows('menu_images')): ?>
                             <?php while(have_rows('menu_images')): the_row();
                             // Vars
                             $menu_img = get_sub_field('image'); // Menu thumbnail
                             $menu_cap = get_sub_field('image_caption'); // Menu caption
                           ?>
                               <?php if($menu_img): ?>
                                 <!-- Output the image/image caption -->
                                 <img src="<?php echo $menu_img['url']; ?>" alt="<?php echo $menu_img['alt'] ?>" class="w-100 pb-2" />
                                 <p class="mb-2"><span class="font-weight-bold"><?php echo $menu_cap?></span></p>
                           <?php endif ?>
                             <?php endwhile; ?>
                           <?php endif ?>
                     </div>
       </div>
       <!--text3 & image1 LOOP END-->
     <?php endwhile; ?>
   <?php endif; ?>
<!--END menu_7 左テキスト-->




<!--START menu_8 テキスト右-->
     <?php if(have_rows('menu_8')): ?>
       <?php while(have_rows('menu_8')): the_row();
         // Vars
         // Category Name
         $menu_category = get_sub_field('menu_category');
         $extra_topping_title = get_sub_field('extra_topping_title'); 
       ?>

       <?php if(have_rows('menu_category')): ?>
         <?php while(have_rows('menu_category')): the_row();
           // Vars
           // Category Name
           $category_title = get_sub_field('category_title');
           $sub_text = get_sub_field('sub_text');
           $sub_text2 = get_sub_field('sub_text2');
           $leaf_icon = get_sub_field('leaf_icon');
           $spicy_icon = get_sub_field('spicy_icon');
         ?>

     <h3 class="menu-cate-title text-left mt-3 mb-5 border-bottom border-dark pb-3"><?php echo $category_title?><br class="d-inline d-md-none"> <small class="d-md-inline d-block mt-2">
       <?php
             if( in_array( 'Add Icon', (array)get_sub_field('leaf_icon') ) ) {
             echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text ?><br class="d-inline d-md-none"><?php
             if( in_array( 'Add Icon', (array)get_sub_field('spicy_icon') ) ) {
             echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text2 ?></small></h3>
   <?php endwhile; ?>
   <?php endif; ?>
     <div class="row">
       <div class="col-12 col-md-5 text-center mb-0 mb-md-3">
                         <?php if(have_rows('menu_images')): ?>
                             <?php while(have_rows('menu_images')): the_row();
                             // Vars
                             $menu_img = get_sub_field('image'); // Menu thumbnail
                             $menu_cap = get_sub_field('image_caption'); // Menu caption
                           ?>
                               <?php if($menu_img): ?>
                                 <!-- Output the image/image caption -->
                                 <img src="<?php echo $menu_img['url']; ?>" alt="<?php echo $menu_img['alt'] ?>" class="w-100 pb-2" />
                                 <p class="mb-2"><span class="font-weight-bold"><?php echo $menu_cap?></span></p>
                           <?php endif ?>
                             <?php endwhile; ?>
                           <?php endif ?>
                     </div>
       <div class="col-12 col-md-7">
       <?php if(have_rows('menu_names')): ?>
         <?php while(have_rows('menu_names')): the_row();
           // Vars
           $menu_name = get_sub_field('menu_name'); // Menu name
           $menu_icons = get_sub_field('menu_icons'); // Menu icon
           $menu_price = get_sub_field('price'); // Menu price
           $menu_description = get_sub_field('menu_description'); // Menu Description
           $menu_emphasis = get_sub_field('menu_emphasis'); // Menu Emphasis
           $popularity = get_sub_field('popularity'); // popularity
           $recommended_toppings = get_sub_field('recommended_toppings');
         ?>
         <!--Menu Texts LOOP START-->
         <div class="row">
           <div class="col-9">
             <h5><?php echo $menu_name ?>   <!-- Output Icons -->
               <?php
                     if( in_array( 'vegetables only', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>
               <?php
                     if( in_array( 'spicy', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>                <!--START POPULARITY list -->
                       
                       <?php
                             if( in_array( '#1 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#1 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Most Popular</span>';
                       } ?>
                        <!--END POPULARITY list -->  </h5>
                       <p><?php echo $menu_description ?>
                     </p>
                     <?php if(empty($recommended_toppings)):?>
                       <!--空欄だった場合-->
                   <?php else:?>
                       <!--値が有る場合-->
                     <p class="mt-3 font-weight-bold">Recommended toppings: <?php echo $recommended_toppings ?></p>
                   <?php endif ?>
                     
                     <?php if(empty($menu_emphasis)):?>
                       <!--空欄だった場合-->
                   <?php else:?>
                       <!--値が有る場合-->
                     <p class="text-danger font-weight font-weight-bold d-block" style="margin-top:-0.8rem;">
                       <?php echo $menu_emphasis ?>
                     </p>
                   <?php endif ?>
           </div>
           <div class="col-3">
             <span class="h6 text-nowrap">$ <?php echo $menu_price ?></span>
             </div>
           </div>
         <?php endwhile; ?>
         <?php endif; ?>


         <?php if(empty($extra_topping_title)):?>
           <!--空欄だった場合-->
       <?php else:?>
           <!--値が有る場合-->  
<div class="border-black">
<div class="col-12 pt-3"><span class="h4 font-weight-normal"><?php echo $extra_topping_title ?></span></div>
<div class="row p-3">

<?php if(have_rows('extra_topping')): ?>
  <?php while(have_rows('extra_topping')): the_row();
    // Vars
    $topping_names = get_sub_field('topping_names'); // Menu Emphasis
    $price = get_sub_field('price'); // Menu Emphasis
    $menu_description = get_sub_field('menu_description'); // Menu Description
  ?>
  <div class="col-12 col-md-6">
    <div class="row mb-2">
      <div class="col-8 font-weight-bold"><?php echo $topping_names ?><p class="font-weight-normal"><?php echo $menu_description ?></p></div>
      <div class="col-4 text-right"><?php echo $price ?></div>
    </div>
  </div>
<?php endwhile; ?>
<?php endif; ?>

</div>         
</div>
<?php endif;?><!--条件分岐終わり-->

</div>
</div>
       <!--text3 & image1 LOOP END-->
     <?php endwhile; ?>
   <?php endif; ?>
<!--END menu_8 テキスト右-->

<!--START menu_9 左テキスト-->
     <?php if(have_rows('menu_9')): ?>
       <?php while(have_rows('menu_9')): the_row();
         // Vars
         // Category Name
         $menu_category = get_sub_field('menu_category');
         $extra_topping_title = get_sub_field('extra_topping_title'); 
       ?>

       <?php if(have_rows('menu_category')): ?>
         <?php while(have_rows('menu_category')): the_row();
           // Vars
           // Category Name
           $category_title = get_sub_field('category_title');
           $sub_text = get_sub_field('sub_text');
           $sub_text2 = get_sub_field('sub_text2');
           $leaf_icon = get_sub_field('leaf_icon');
           $spicy_icon = get_sub_field('spicy_icon');
         ?>

     <h3 class="menu-cate-title text-left mt-3 mb-5 border-bottom border-dark pb-3"><?php echo $category_title?><br class="d-inline d-md-none"> <small class="d-md-inline d-block">
       <?php
             if( in_array( 'Add Icon', (array)get_sub_field('leaf_icon') ) ) {
             echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text ?><br class="d-inline d-md-none"><?php
             if( in_array( 'Add Icon', (array)get_sub_field('spicy_icon') ) ) {
             echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text2 ?></small></h3>
   <?php endwhile; ?>
   <?php endif; ?>
     <div class="row">

       <div class="order-2 order-md-1 col-12 col-md-7">
       <?php if(have_rows('menu_names')): ?>
         <?php while(have_rows('menu_names')): the_row();
           // Vars
           $menu_name = get_sub_field('menu_name'); // Menu name
           $menu_desc = get_sub_field('menu_desc'); // Menu desc
           $menu_icons = get_sub_field('menu_icon'); // Menu icon
           $menu_price = get_sub_field('price'); // Menu price
           $menu_description = get_sub_field('menu_description'); // Menu Description
           $popularity = get_sub_field('popularity'); // popularity
           $menu_emphasis = get_sub_field('menu_emphasis'); // Menu Emphasis
         ?>
         <!--Menu Texts LOOP START-->
         <div class="row mt-3 mt-md-0">
           <div class="col-9">
             <h5><?php echo $menu_name ?>   <!-- Output Icons -->
               <?php
                     if( in_array( 'vegetables only', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>
               <?php
                     if( in_array( 'spicy', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>            <!--START POPULARITY list -->
                       
                       <?php
                             if( in_array( '#1 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#1 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Most Popular</span>';
                       } ?>
           
                        <!--END POPULARITY list -->  </h5>
                       <p><?php echo $menu_description ?>
                       <span class="text-danger font-weight font-weight-bold d-block">
                         <?php echo $menu_emphasis ?>
                       </span>
                     </p>
           </div>
           <div class="col-3">
             <span class="h6 text-nowrap">$ <?php echo $menu_price ?></span>
           </div>
           </div>
         <?php endwhile; ?>
         <?php endif; ?>
   
         <?php if(empty($extra_topping_title)):?>
           <!--空欄だった場合-->
       <?php else:?>
           <!--値が有る場合-->
 <div class="border-black">
<div class="col-12 pt-3"><span class="h4 font-weight-normal"><?php echo $extra_topping_title ?></span></div>
<div class="row p-3">

<?php if(have_rows('extra_topping')): ?>
 <?php while(have_rows('extra_topping')): the_row();
   // Vars
   $topping_names = get_sub_field('topping_names'); // Menu Emphasis
   $price = get_sub_field('price'); // Menu Emphasis
   $menu_description = get_sub_field('menu_description'); // Menu Description
 ?>
 <div class="col-12 col-md-6">
   <div class="row mb-2">
     <div class="col-8 font-weight-bold"><?php echo $topping_names ?><p class="font-weight-normal"><?php echo $menu_description ?></p></div>
     <div class="col-4 text-right"><?php echo $price ?></div>
   </div>
 </div>
<?php endwhile; ?>
<?php endif; ?>

</div>         
</div>
<?php endif;?>

       </div>
       <div class="order-1 order-md-2 col-12 col-md-5 text-center mb-0 mb-md-3">
                         <?php if(have_rows('menu_images')): ?>
                             <?php while(have_rows('menu_images')): the_row();
                             // Vars
                             $menu_img = get_sub_field('image'); // Menu thumbnail
                             $menu_cap = get_sub_field('image_caption'); // Menu caption
                           ?>
                               <?php if($menu_img): ?>
                                 <!-- Output the image/image caption -->
                                 <img src="<?php echo $menu_img['url']; ?>" alt="<?php echo $menu_img['alt'] ?>" class="w-100 pb-2" />
                                 <p class="mb-2"><span class="font-weight-bold"><?php echo $menu_cap?></span></p>
                           <?php endif ?>
                             <?php endwhile; ?>
                           <?php endif ?>
                     </div>
       </div>
       <!--text3 & image1 LOOP END-->
     <?php endwhile; ?>
   <?php endif; ?>
<!--END menu_9 左テキスト-->



<!--START menu_10 テキスト右-->
     <?php if(have_rows('menu_10')): ?>
       <?php while(have_rows('menu_10')): the_row();
         // Vars
         // Category Name
         $menu_category = get_sub_field('menu_category');
         $extra_topping_title = get_sub_field('extra_topping_title'); 
       ?>

       <?php if(have_rows('menu_category')): ?>
         <?php while(have_rows('menu_category')): the_row();
           // Vars
           // Category Name
           $category_title = get_sub_field('category_title');
           $sub_text = get_sub_field('sub_text');
           $sub_text2 = get_sub_field('sub_text2');
           $leaf_icon = get_sub_field('leaf_icon');
           $spicy_icon = get_sub_field('spicy_icon');
         ?>

     <h3 class="menu-cate-title text-left mt-3 mb-5 border-bottom border-dark pb-3"><?php echo $category_title?><br class="d-inline d-md-none"> <small class="d-md-inline d-block mt-2">
       <?php
             if( in_array( 'Add Icon', (array)get_sub_field('leaf_icon') ) ) {
             echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text ?><br class="d-inline d-md-none"><?php
             if( in_array( 'Add Icon', (array)get_sub_field('spicy_icon') ) ) {
             echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text2 ?></small></h3>
   <?php endwhile; ?>
   <?php endif; ?>
     <div class="row">
       <div class="col-12 col-md-5 text-center mb-0 mb-md-3">
                         <?php if(have_rows('menu_images')): ?>
                             <?php while(have_rows('menu_images')): the_row();
                             // Vars
                             $menu_img = get_sub_field('image'); // Menu thumbnail
                             $menu_cap = get_sub_field('image_caption'); // Menu caption
                           ?>
                               <?php if($menu_img): ?>
                                 <!-- Output the image/image caption -->
                                 <img src="<?php echo $menu_img['url']; ?>" alt="<?php echo $menu_img['alt'] ?>" class="w-100 pb-2" />
                                 <p class="mb-2"><span class="font-weight-bold"><?php echo $menu_cap?></span></p>
                           <?php endif ?>
                             <?php endwhile; ?>
                           <?php endif ?>
                     </div>
       <div class="col-12 col-md-7">
       <?php if(have_rows('menu_names')): ?>
         <?php while(have_rows('menu_names')): the_row();
           // Vars
           $menu_name = get_sub_field('menu_name'); // Menu name
           $menu_icons = get_sub_field('menu_icons'); // Menu icon
           $menu_price = get_sub_field('price'); // Menu price
           $menu_description = get_sub_field('menu_description'); // Menu Description
           $menu_emphasis = get_sub_field('menu_emphasis'); // Menu Emphasis
           $popularity = get_sub_field('popularity'); // popularity
           $recommended_toppings = get_sub_field('recommended_toppings');
         ?>
         <!--Menu Texts LOOP START-->
         <div class="row">
           <div class="col-9">
             <h5><?php echo $menu_name ?>   <!-- Output Icons -->
               <?php
                     if( in_array( 'vegetables only', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>
               <?php
                     if( in_array( 'spicy', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>                <!--START POPULARITY list -->
                       
                       <?php
                             if( in_array( '#1 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#1 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Most Popular</span>';
                       } ?>
                        <!--END POPULARITY list -->  </h5>
                       <p><?php echo $menu_description ?>
                     </p>
                     <?php if(empty($recommended_toppings)):?>
                       <!--空欄だった場合-->
                   <?php else:?>
                       <!--値が有る場合-->
                     <p class="mt-3 font-weight-bold">Recommended toppings: <?php echo $recommended_toppings ?></p>
                   <?php endif ?>
                     
                     <?php if(empty($menu_emphasis)):?>
                       <!--空欄だった場合-->
                   <?php else:?>
                       <!--値が有る場合-->
                     <p class="text-danger font-weight font-weight-bold d-block" style="margin-top:-0.8rem;">
                       <?php echo $menu_emphasis ?>
                     </p>
                   <?php endif ?>
           </div>
           <div class="col-3">
             <span class="h6 text-nowrap">$ <?php echo $menu_price ?></span>
             </div>
           </div>
         <?php endwhile; ?>
         <?php endif; ?>


         <?php if(empty($extra_topping_title)):?>
           <!--空欄だった場合-->
       <?php else:?>
           <!--値が有る場合-->  
<div class="border-black">
<div class="col-12 pt-3"><span class="h4 font-weight-normal"><?php echo $extra_topping_title ?></span></div>
<div class="row p-3">

<?php if(have_rows('extra_topping')): ?>
  <?php while(have_rows('extra_topping')): the_row();
    // Vars
    $topping_names = get_sub_field('topping_names'); // Menu Emphasis
    $price = get_sub_field('price'); // Menu Emphasis
    $menu_description = get_sub_field('menu_description'); // Menu Description
  ?>
  <div class="col-12 col-md-6">
    <div class="row mb-2">
      <div class="col-8 font-weight-bold"><?php echo $topping_names ?><p class="font-weight-normal"><?php echo $menu_description ?></p></div>
      <div class="col-4 text-right"><?php echo $price ?></div>
    </div>
  </div>
<?php endwhile; ?>
<?php endif; ?>

</div>         
</div>
<?php endif;?><!--条件分岐終わり-->

</div>
</div>
       <!--text3 & image1 LOOP END-->
     <?php endwhile; ?>
   <?php endif; ?>
<!--END menu_10 テキスト右-->

<!--START menu_11 左テキスト-->
     <?php if(have_rows('menu_11')): ?>
       <?php while(have_rows('menu_11')): the_row();
         // Vars
         // Category Name
         $menu_category = get_sub_field('menu_category');
         $extra_topping_title = get_sub_field('extra_topping_title'); 
       ?>

       <?php if(have_rows('menu_category')): ?>
         <?php while(have_rows('menu_category')): the_row();
           // Vars
           // Category Name
           $category_title = get_sub_field('category_title');
           $sub_text = get_sub_field('sub_text');
           $sub_text2 = get_sub_field('sub_text2');
           $leaf_icon = get_sub_field('leaf_icon');
           $spicy_icon = get_sub_field('spicy_icon');
         ?>

     <h3 class="menu-cate-title text-left mt-3 mb-5 border-bottom border-dark pb-3"><?php echo $category_title?><br class="d-inline d-md-none"> <small class="d-md-inline d-block">
       <?php
             if( in_array( 'Add Icon', (array)get_sub_field('leaf_icon') ) ) {
             echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text ?><br class="d-inline d-md-none"><?php
             if( in_array( 'Add Icon', (array)get_sub_field('spicy_icon') ) ) {
             echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text2 ?></small></h3>
   <?php endwhile; ?>
   <?php endif; ?>
     <div class="row">

       <div class="order-2 order-md-1 col-12 col-md-7">
       <?php if(have_rows('menu_names')): ?>
         <?php while(have_rows('menu_names')): the_row();
           // Vars
           $menu_name = get_sub_field('menu_name'); // Menu name
           $menu_desc = get_sub_field('menu_desc'); // Menu desc
           $menu_icons = get_sub_field('menu_icon'); // Menu icon
           $menu_price = get_sub_field('price'); // Menu price
           $menu_description = get_sub_field('menu_description'); // Menu Description
           $popularity = get_sub_field('popularity'); // popularity
           $menu_emphasis = get_sub_field('menu_emphasis'); // Menu Emphasis
         ?>
         <!--Menu Texts LOOP START-->
         <div class="row mt-3 mt-md-0">
           <div class="col-9">
             <h5><?php echo $menu_name ?>   <!-- Output Icons -->
               <?php
                     if( in_array( 'vegetables only', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>
               <?php
                     if( in_array( 'spicy', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>            <!--START POPULARITY list -->
                       
                       <?php
                             if( in_array( '#1 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#1 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Most Popular</span>';
                       } ?>
           
                        <!--END POPULARITY list -->  </h5>
                       <p><?php echo $menu_description ?>
                       <span class="text-danger font-weight font-weight-bold d-block">
                         <?php echo $menu_emphasis ?>
                       </span>
                     </p>
           </div>
           <div class="col-3">
             <span class="h6 text-nowrap">$ <?php echo $menu_price ?></span>
           </div>
           </div>
         <?php endwhile; ?>
         <?php endif; ?>
   
         <?php if(empty($extra_topping_title)):?>
           <!--空欄だった場合-->
       <?php else:?>
           <!--値が有る場合-->
 <div class="border-black">
<div class="col-12 pt-3"><span class="h4 font-weight-normal"><?php echo $extra_topping_title ?></span></div>
<div class="row p-3">

<?php if(have_rows('extra_topping')): ?>
 <?php while(have_rows('extra_topping')): the_row();
   // Vars
   $topping_names = get_sub_field('topping_names'); // Menu Emphasis
   $price = get_sub_field('price'); // Menu Emphasis
   $menu_description = get_sub_field('menu_description'); // Menu Description
 ?>
 <div class="col-12 col-md-6">
   <div class="row mb-2">
     <div class="col-8 font-weight-bold"><?php echo $topping_names ?><p class="font-weight-normal"><?php echo $menu_description ?></p></div>
     <div class="col-4 text-right"><?php echo $price ?></div>
   </div>
 </div>
<?php endwhile; ?>
<?php endif; ?>

</div>         
</div>
<?php endif;?>

       </div>
       <div class="order-1 order-md-2 col-12 col-md-5 text-center mb-0 mb-md-3">
                         <?php if(have_rows('menu_images')): ?>
                             <?php while(have_rows('menu_images')): the_row();
                             // Vars
                             $menu_img = get_sub_field('image'); // Menu thumbnail
                             $menu_cap = get_sub_field('image_caption'); // Menu caption
                           ?>
                               <?php if($menu_img): ?>
                                 <!-- Output the image/image caption -->
                                 <img src="<?php echo $menu_img['url']; ?>" alt="<?php echo $menu_img['alt'] ?>" class="w-100 pb-2" />
                                 <p class="mb-2"><span class="font-weight-bold"><?php echo $menu_cap?></span></p>
                           <?php endif ?>
                             <?php endwhile; ?>
                           <?php endif ?>
                     </div>
       </div>
       <!--text3 & image1 LOOP END-->
     <?php endwhile; ?>
   <?php endif; ?>
<!--END menu11 左テキスト-->

<!--START menu_12 テキスト右-->
     <?php if(have_rows('menu_12')): ?>
       <?php while(have_rows('menu_12')): the_row();
         // Vars
         // Category Name
         $menu_category = get_sub_field('menu_category');
         $extra_topping_title = get_sub_field('extra_topping_title'); 
       ?>

       <?php if(have_rows('menu_category')): ?>
         <?php while(have_rows('menu_category')): the_row();
           // Vars
           // Category Name
           $category_title = get_sub_field('category_title');
           $sub_text = get_sub_field('sub_text');
           $sub_text2 = get_sub_field('sub_text2');
           $leaf_icon = get_sub_field('leaf_icon');
           $spicy_icon = get_sub_field('spicy_icon');
         ?>

     <h3 class="menu-cate-title text-left mt-3 mb-5 border-bottom border-dark pb-3"><?php echo $category_title?><br class="d-inline d-md-none"> <small class="d-md-inline d-block mt-2">
       <?php
             if( in_array( 'Add Icon', (array)get_sub_field('leaf_icon') ) ) {
             echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text ?><br class="d-inline d-md-none"><?php
             if( in_array( 'Add Icon', (array)get_sub_field('spicy_icon') ) ) {
             echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text2 ?></small></h3>
   <?php endwhile; ?>
   <?php endif; ?>
     <div class="row">
       <div class="col-12 col-md-5 text-center mb-0 mb-md-3">
                         <?php if(have_rows('menu_images')): ?>
                             <?php while(have_rows('menu_images')): the_row();
                             // Vars
                             $menu_img = get_sub_field('image'); // Menu thumbnail
                             $menu_cap = get_sub_field('image_caption'); // Menu caption
                           ?>
                               <?php if($menu_img): ?>
                                 <!-- Output the image/image caption -->
                                 <img src="<?php echo $menu_img['url']; ?>" alt="<?php echo $menu_img['alt'] ?>" class="w-100 pb-2" />
                                 <p class="mb-2"><span class="font-weight-bold"><?php echo $menu_cap?></span></p>
                           <?php endif ?>
                             <?php endwhile; ?>
                           <?php endif ?>
                     </div>
       <div class="col-12 col-md-7">
       <?php if(have_rows('menu_names')): ?>
         <?php while(have_rows('menu_names')): the_row();
           // Vars
           $menu_name = get_sub_field('menu_name'); // Menu name
           $menu_icons = get_sub_field('menu_icons'); // Menu icon
           $menu_price = get_sub_field('price'); // Menu price
           $menu_description = get_sub_field('menu_description'); // Menu Description
           $menu_emphasis = get_sub_field('menu_emphasis'); // Menu Emphasis
           $popularity = get_sub_field('popularity'); // popularity
           $recommended_toppings = get_sub_field('recommended_toppings');
         ?>
         <!--Menu Texts LOOP START-->
         <div class="row">
           <div class="col-9">
             <h5><?php echo $menu_name ?>   <!-- Output Icons -->
               <?php
                     if( in_array( 'vegetables only', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>
               <?php
                     if( in_array( 'spicy', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>                <!--START POPULARITY list -->
                       
                       <?php
                             if( in_array( '#1 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#1 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Most Popular</span>';
                       } ?>
                        <!--END POPULARITY list -->  </h5>
                       <p><?php echo $menu_description ?>
                     </p>
                     <?php if(empty($recommended_toppings)):?>
                       <!--空欄だった場合-->
                   <?php else:?>
                       <!--値が有る場合-->
                     <p class="mt-3 font-weight-bold">Recommended toppings: <?php echo $recommended_toppings ?></p>
                   <?php endif ?>
                     
                     <?php if(empty($menu_emphasis)):?>
                       <!--空欄だった場合-->
                   <?php else:?>
                       <!--値が有る場合-->
                     <p class="text-danger font-weight font-weight-bold d-block" style="margin-top:-0.8rem;">
                       <?php echo $menu_emphasis ?>
                     </p>
                   <?php endif ?>
           </div>
           <div class="col-3">
             <span class="h6 text-nowrap">$ <?php echo $menu_price ?></span>
             </div>
           </div>
         <?php endwhile; ?>
         <?php endif; ?>


         <?php if(empty($extra_topping_title)):?>
           <!--空欄だった場合-->
       <?php else:?>
           <!--値が有る場合-->  
<div class="border-black">
<div class="col-12 pt-3"><span class="h4 font-weight-normal"><?php echo $extra_topping_title ?></span></div>
<div class="row p-3">

<?php if(have_rows('extra_topping')): ?>
  <?php while(have_rows('extra_topping')): the_row();
    // Vars
    $topping_names = get_sub_field('topping_names'); // Menu Emphasis
    $price = get_sub_field('price'); // Menu Emphasis
    $menu_description = get_sub_field('menu_description'); // Menu Description
  ?>
  <div class="col-12 col-md-6">
    <div class="row mb-2">
      <div class="col-8 font-weight-bold"><?php echo $topping_names ?><p class="font-weight-normal"><?php echo $menu_description ?></p></div>
      <div class="col-4 text-right"><?php echo $price ?></div>
    </div>
  </div>
<?php endwhile; ?>
<?php endif; ?>

</div>         
</div>
<?php endif;?><!--条件分岐終わり-->

</div>
</div>
       <!--text3 & image1 LOOP END-->
     <?php endwhile; ?>
   <?php endif; ?>
<!--END menu_12 テキスト右-->

<!--START menu_13 左テキスト-->
     <?php if(have_rows('menu_13')): ?>
       <?php while(have_rows('menu_13')): the_row();
         // Vars
         // Category Name
         $menu_category = get_sub_field('menu_category');
         $extra_topping_title = get_sub_field('extra_topping_title'); 
       ?>

       <?php if(have_rows('menu_category')): ?>
         <?php while(have_rows('menu_category')): the_row();
           // Vars
           // Category Name
           $category_title = get_sub_field('category_title');
           $sub_text = get_sub_field('sub_text');
           $sub_text2 = get_sub_field('sub_text2');
           $leaf_icon = get_sub_field('leaf_icon');
           $spicy_icon = get_sub_field('spicy_icon');
         ?>

     <h3 class="menu-cate-title text-left mt-3 mb-5 border-bottom border-dark pb-3"><?php echo $category_title?><br class="d-inline d-md-none"> <small class="d-md-inline d-block">
       <?php
             if( in_array( 'Add Icon', (array)get_sub_field('leaf_icon') ) ) {
             echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text ?><br class="d-inline d-md-none"><?php
             if( in_array( 'Add Icon', (array)get_sub_field('spicy_icon') ) ) {
             echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text2 ?></small></h3>
   <?php endwhile; ?>
   <?php endif; ?>
     <div class="row">

       <div class="order-2 order-md-1 col-12 col-md-7">
       <?php if(have_rows('menu_names')): ?>
         <?php while(have_rows('menu_names')): the_row();
           // Vars
           $menu_name = get_sub_field('menu_name'); // Menu name
           $menu_desc = get_sub_field('menu_desc'); // Menu desc
           $menu_icons = get_sub_field('menu_icon'); // Menu icon
           $menu_price = get_sub_field('price'); // Menu price
           $menu_description = get_sub_field('menu_description'); // Menu Description
           $popularity = get_sub_field('popularity'); // popularity
           $menu_emphasis = get_sub_field('menu_emphasis'); // Menu Emphasis
         ?>
         <!--Menu Texts LOOP START-->
         <div class="row mt-3 mt-md-0">
           <div class="col-9">
             <h5><?php echo $menu_name ?>   <!-- Output Icons -->
               <?php
                     if( in_array( 'vegetables only', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>
               <?php
                     if( in_array( 'spicy', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>            <!--START POPULARITY list -->
                       
                       <?php
                             if( in_array( '#1 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#1 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Most Popular</span>';
                       } ?>
           
                        <!--END POPULARITY list -->  </h5>
                       <p><?php echo $menu_description ?>
                       <span class="text-danger font-weight font-weight-bold d-block">
                         <?php echo $menu_emphasis ?>
                       </span>
                     </p>
           </div>
           <div class="col-3">
             <span class="h6 text-nowrap">$ <?php echo $menu_price ?></span>
           </div>
           </div>
         <?php endwhile; ?>
         <?php endif; ?>
   
         <?php if(empty($extra_topping_title)):?>
           <!--空欄だった場合-->
       <?php else:?>
           <!--値が有る場合-->
 <div class="border-black">
<div class="col-12 pt-3"><span class="h4 font-weight-normal"><?php echo $extra_topping_title ?></span></div>
<div class="row p-3">

<?php if(have_rows('extra_topping')): ?>
 <?php while(have_rows('extra_topping')): the_row();
   // Vars
   $topping_names = get_sub_field('topping_names'); // Menu Emphasis
   $price = get_sub_field('price'); // Menu Emphasis
   $menu_description = get_sub_field('menu_description'); // Menu Description
 ?>
 <div class="col-12 col-md-6">
   <div class="row mb-2">
     <div class="col-8 font-weight-bold"><?php echo $topping_names ?><p class="font-weight-normal"><?php echo $menu_description ?></p></div>
     <div class="col-4 text-right"><?php echo $price ?></div>
   </div>
 </div>
<?php endwhile; ?>
<?php endif; ?>

</div>         
</div>
<?php endif;?>

       </div>
       <div class="order-1 order-md-2 col-12 col-md-5 text-center mb-0 mb-md-3">
                         <?php if(have_rows('menu_images')): ?>
                             <?php while(have_rows('menu_images')): the_row();
                             // Vars
                             $menu_img = get_sub_field('image'); // Menu thumbnail
                             $menu_cap = get_sub_field('image_caption'); // Menu caption
                           ?>
                               <?php if($menu_img): ?>
                                 <!-- Output the image/image caption -->
                                 <img src="<?php echo $menu_img['url']; ?>" alt="<?php echo $menu_img['alt'] ?>" class="w-100 pb-2" />
                                 <p class="mb-2"><span class="font-weight-bold"><?php echo $menu_cap?></span></p>
                           <?php endif ?>
                             <?php endwhile; ?>
                           <?php endif ?>
                     </div>
       </div>
       <!--text3 & image1 LOOP END-->
     <?php endwhile; ?>
   <?php endif; ?>
<!--END menu13 左テキスト-->


<!--START menu_14 テキスト右-->
     <?php if(have_rows('menu_14')): ?>
       <?php while(have_rows('menu_14')): the_row();
         // Vars
         // Category Name
         $menu_category = get_sub_field('menu_category');
         $extra_topping_title = get_sub_field('extra_topping_title'); 
       ?>

       <?php if(have_rows('menu_category')): ?>
         <?php while(have_rows('menu_category')): the_row();
           // Vars
           // Category Name
           $category_title = get_sub_field('category_title');
           $sub_text = get_sub_field('sub_text');
           $sub_text2 = get_sub_field('sub_text2');
           $leaf_icon = get_sub_field('leaf_icon');
           $spicy_icon = get_sub_field('spicy_icon');
         ?>

     <h3 class="menu-cate-title text-left mt-3 mb-5 border-bottom border-dark pb-3"><?php echo $category_title?><br class="d-inline d-md-none"> <small class="d-md-inline d-block mt-2">
       <?php
             if( in_array( 'Add Icon', (array)get_sub_field('leaf_icon') ) ) {
             echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text ?><br class="d-inline d-md-none"><?php
             if( in_array( 'Add Icon', (array)get_sub_field('spicy_icon') ) ) {
             echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text2 ?></small></h3>
   <?php endwhile; ?>
   <?php endif; ?>
     <div class="row">
       <div class="col-12 col-md-5 text-center mb-0 mb-md-3">
                         <?php if(have_rows('menu_images')): ?>
                             <?php while(have_rows('menu_images')): the_row();
                             // Vars
                             $menu_img = get_sub_field('image'); // Menu thumbnail
                             $menu_cap = get_sub_field('image_caption'); // Menu caption
                           ?>
                               <?php if($menu_img): ?>
                                 <!-- Output the image/image caption -->
                                 <img src="<?php echo $menu_img['url']; ?>" alt="<?php echo $menu_img['alt'] ?>" class="w-100 pb-2" />
                                 <p class="mb-2"><span class="font-weight-bold"><?php echo $menu_cap?></span></p>
                           <?php endif ?>
                             <?php endwhile; ?>
                           <?php endif ?>
                     </div>
       <div class="col-12 col-md-7">
       <?php if(have_rows('menu_names')): ?>
         <?php while(have_rows('menu_names')): the_row();
           // Vars
           $menu_name = get_sub_field('menu_name'); // Menu name
           $menu_icons = get_sub_field('menu_icons'); // Menu icon
           $menu_price = get_sub_field('price'); // Menu price
           $menu_description = get_sub_field('menu_description'); // Menu Description
           $menu_emphasis = get_sub_field('menu_emphasis'); // Menu Emphasis
           $popularity = get_sub_field('popularity'); // popularity
           $recommended_toppings = get_sub_field('recommended_toppings');
         ?>
         <!--Menu Texts LOOP START-->
         <div class="row">
           <div class="col-9">
             <h5><?php echo $menu_name ?>   <!-- Output Icons -->
               <?php
                     if( in_array( 'vegetables only', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>
               <?php
                     if( in_array( 'spicy', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>                <!--START POPULARITY list -->
                       
                       <?php
                             if( in_array( '#1 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#1 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Most Popular</span>';
                       } ?>
                        <!--END POPULARITY list -->  </h5>
                       <p><?php echo $menu_description ?>
                     </p>
                     <?php if(empty($recommended_toppings)):?>
                       <!--空欄だった場合-->
                   <?php else:?>
                       <!--値が有る場合-->
                     <p class="mt-3 font-weight-bold">Recommended toppings: <?php echo $recommended_toppings ?></p>
                   <?php endif ?>
                     
                     <?php if(empty($menu_emphasis)):?>
                       <!--空欄だった場合-->
                   <?php else:?>
                       <!--値が有る場合-->
                     <p class="text-danger font-weight font-weight-bold d-block" style="margin-top:-0.8rem;">
                       <?php echo $menu_emphasis ?>
                     </p>
                   <?php endif ?>
           </div>
           <div class="col-3">
             <span class="h6 text-nowrap">$ <?php echo $menu_price ?></span>
             </div>
           </div>
         <?php endwhile; ?>
         <?php endif; ?>


         <?php if(empty($extra_topping_title)):?>
           <!--空欄だった場合-->
       <?php else:?>
           <!--値が有る場合-->  
<div class="border-black">
<div class="col-12 pt-3"><span class="h4 font-weight-normal"><?php echo $extra_topping_title ?></span></div>
<div class="row p-3">

<?php if(have_rows('extra_topping')): ?>
  <?php while(have_rows('extra_topping')): the_row();
    // Vars
    $topping_names = get_sub_field('topping_names'); // Menu Emphasis
    $price = get_sub_field('price'); // Menu Emphasis
    $menu_description = get_sub_field('menu_description'); // Menu Description
  ?>
  <div class="col-12 col-md-6">
    <div class="row mb-2">
      <div class="col-8 font-weight-bold"><?php echo $topping_names ?><p class="font-weight-normal"><?php echo $menu_description ?></p></div>
      <div class="col-4 text-right"><?php echo $price ?></div>
    </div>
  </div>
<?php endwhile; ?>
<?php endif; ?>

</div>         
</div>
<?php endif;?><!--条件分岐終わり-->

</div>
</div>
       <!--text3 & image1 LOOP END-->
     <?php endwhile; ?>
   <?php endif; ?>
<!--END menu_14 テキスト右-->

<!--START menu_15 左テキスト-->
     <?php if(have_rows('menu_15')): ?>
       <?php while(have_rows('menu_15')): the_row();
         // Vars
         // Category Name
         $menu_category = get_sub_field('menu_category');
         $extra_topping_title = get_sub_field('extra_topping_title'); 
       ?>

       <?php if(have_rows('menu_category')): ?>
         <?php while(have_rows('menu_category')): the_row();
           // Vars
           // Category Name
           $category_title = get_sub_field('category_title');
           $sub_text = get_sub_field('sub_text');
           $sub_text2 = get_sub_field('sub_text2');
           $leaf_icon = get_sub_field('leaf_icon');
           $spicy_icon = get_sub_field('spicy_icon');
         ?>

     <h3 class="menu-cate-title text-left mt-3 mb-5 border-bottom border-dark pb-3"><?php echo $category_title?><br class="d-inline d-md-none"> <small class="d-md-inline d-block">
       <?php
             if( in_array( 'Add Icon', (array)get_sub_field('leaf_icon') ) ) {
             echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text ?><br class="d-inline d-md-none"><?php
             if( in_array( 'Add Icon', (array)get_sub_field('spicy_icon') ) ) {
             echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text2 ?></small></h3>
   <?php endwhile; ?>
   <?php endif; ?>
     <div class="row">

       <div class="order-2 order-md-1 col-12 col-md-7">
       <?php if(have_rows('menu_names')): ?>
         <?php while(have_rows('menu_names')): the_row();
           // Vars
           $menu_name = get_sub_field('menu_name'); // Menu name
           $menu_desc = get_sub_field('menu_desc'); // Menu desc
           $menu_icons = get_sub_field('menu_icon'); // Menu icon
           $menu_price = get_sub_field('price'); // Menu price
           $menu_description = get_sub_field('menu_description'); // Menu Description
           $popularity = get_sub_field('popularity'); // popularity
           $menu_emphasis = get_sub_field('menu_emphasis'); // Menu Emphasis
         ?>
         <!--Menu Texts LOOP START-->
         <div class="row mt-3 mt-md-0">
           <div class="col-9">
             <h5><?php echo $menu_name ?>   <!-- Output Icons -->
               <?php
                     if( in_array( 'vegetables only', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>
               <?php
                     if( in_array( 'spicy', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>            <!--START POPULARITY list -->
                       
                       <?php
                             if( in_array( '#1 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#1 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Most Popular</span>';
                       } ?>
           
                        <!--END POPULARITY list -->  </h5>
                       <p><?php echo $menu_description ?>
                       <span class="text-danger font-weight font-weight-bold d-block">
                         <?php echo $menu_emphasis ?>
                       </span>
                     </p>
           </div>
           <div class="col-3">
             <span class="h6 text-nowrap">$ <?php echo $menu_price ?></span>
           </div>
           </div>
         <?php endwhile; ?>
         <?php endif; ?>
   
         <?php if(empty($extra_topping_title)):?>
           <!--空欄だった場合-->
       <?php else:?>
           <!--値が有る場合-->
 <div class="border-black">
<div class="col-12 pt-3"><span class="h4 font-weight-normal"><?php echo $extra_topping_title ?></span></div>
<div class="row p-3">

<?php if(have_rows('extra_topping')): ?>
 <?php while(have_rows('extra_topping')): the_row();
   // Vars
   $topping_names = get_sub_field('topping_names'); // Menu Emphasis
   $price = get_sub_field('price'); // Menu Emphasis
   $menu_description = get_sub_field('menu_description'); // Menu Description
 ?>
 <div class="col-12 col-md-6">
   <div class="row mb-2">
     <div class="col-8 font-weight-bold"><?php echo $topping_names ?><p class="font-weight-normal"><?php echo $menu_description ?></p></div>
     <div class="col-4 text-right"><?php echo $price ?></div>
   </div>
 </div>
<?php endwhile; ?>
<?php endif; ?>

</div>         
</div>
<?php endif;?>

       </div>
       <div class="order-1 order-md-2 col-12 col-md-5 text-center mb-0 mb-md-3">
                         <?php if(have_rows('menu_images')): ?>
                             <?php while(have_rows('menu_images')): the_row();
                             // Vars
                             $menu_img = get_sub_field('image'); // Menu thumbnail
                             $menu_cap = get_sub_field('image_caption'); // Menu caption
                           ?>
                               <?php if($menu_img): ?>
                                 <!-- Output the image/image caption -->
                                 <img src="<?php echo $menu_img['url']; ?>" alt="<?php echo $menu_img['alt'] ?>" class="w-100 pb-2" />
                                 <p class="mb-2"><span class="font-weight-bold"><?php echo $menu_cap?></span></p>
                           <?php endif ?>
                             <?php endwhile; ?>
                           <?php endif ?>
                     </div>
       </div>
       <!--text3 & image1 LOOP END-->
     <?php endwhile; ?>
   <?php endif; ?>
<!--END menu15 左テキスト-->


<!--START menu_16 テキスト右-->
     <?php if(have_rows('menu_16')): ?>
       <?php while(have_rows('menu_16')): the_row();
         // Vars
         // Category Name
         $menu_category = get_sub_field('menu_category');
         $extra_topping_title = get_sub_field('extra_topping_title'); 
       ?>

       <?php if(have_rows('menu_category')): ?>
         <?php while(have_rows('menu_category')): the_row();
           // Vars
           // Category Name
           $category_title = get_sub_field('category_title');
           $sub_text = get_sub_field('sub_text');
           $sub_text2 = get_sub_field('sub_text2');
           $leaf_icon = get_sub_field('leaf_icon');
           $spicy_icon = get_sub_field('spicy_icon');
         ?>

     <h3 class="menu-cate-title text-left mt-3 mb-5 border-bottom border-dark pb-3"><?php echo $category_title?><br class="d-inline d-md-none"> <small class="d-md-inline d-block mt-2">
       <?php
             if( in_array( 'Add Icon', (array)get_sub_field('leaf_icon') ) ) {
             echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text ?><br class="d-inline d-md-none"><?php
             if( in_array( 'Add Icon', (array)get_sub_field('spicy_icon') ) ) {
             echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text2 ?></small></h3>
   <?php endwhile; ?>
   <?php endif; ?>
     <div class="row">
       <div class="col-12 col-md-5 text-center mb-0 mb-md-3">
                         <?php if(have_rows('menu_images')): ?>
                             <?php while(have_rows('menu_images')): the_row();
                             // Vars
                             $menu_img = get_sub_field('image'); // Menu thumbnail
                             $menu_cap = get_sub_field('image_caption'); // Menu caption
                           ?>
                               <?php if($menu_img): ?>
                                 <!-- Output the image/image caption -->
                                 <img src="<?php echo $menu_img['url']; ?>" alt="<?php echo $menu_img['alt'] ?>" class="w-100 pb-2" />
                                 <p class="mb-2"><span class="font-weight-bold"><?php echo $menu_cap?></span></p>
                           <?php endif ?>
                             <?php endwhile; ?>
                           <?php endif ?>
                     </div>
       <div class="col-12 col-md-7">
       <?php if(have_rows('menu_names')): ?>
         <?php while(have_rows('menu_names')): the_row();
           // Vars
           $menu_name = get_sub_field('menu_name'); // Menu name
           $menu_icons = get_sub_field('menu_icons'); // Menu icon
           $menu_price = get_sub_field('price'); // Menu price
           $menu_description = get_sub_field('menu_description'); // Menu Description
           $menu_emphasis = get_sub_field('menu_emphasis'); // Menu Emphasis
           $popularity = get_sub_field('popularity'); // popularity
           $recommended_toppings = get_sub_field('recommended_toppings');
         ?>
         <!--Menu Texts LOOP START-->
         <div class="row">
           <div class="col-9">
             <h5><?php echo $menu_name ?>   <!-- Output Icons -->
               <?php
                     if( in_array( 'vegetables only', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>
               <?php
                     if( in_array( 'spicy', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>                <!--START POPULARITY list -->
                       
                       <?php
                             if( in_array( '#1 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#1 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Most Popular</span>';
                       } ?>
                        <!--END POPULARITY list -->  </h5>
                       <p><?php echo $menu_description ?>
                     </p>
                     <?php if(empty($recommended_toppings)):?>
                       <!--空欄だった場合-->
                   <?php else:?>
                       <!--値が有る場合-->
                     <p class="mt-3 font-weight-bold">Recommended toppings: <?php echo $recommended_toppings ?></p>
                   <?php endif ?>
                     
                     <?php if(empty($menu_emphasis)):?>
                       <!--空欄だった場合-->
                   <?php else:?>
                       <!--値が有る場合-->
                     <p class="text-danger font-weight font-weight-bold d-block" style="margin-top:-0.8rem;">
                       <?php echo $menu_emphasis ?>
                     </p>
                   <?php endif ?>
           </div>
           <div class="col-3">
             <span class="h6 text-nowrap">$ <?php echo $menu_price ?></span>
             </div>
           </div>
         <?php endwhile; ?>
         <?php endif; ?>


         <?php if(empty($extra_topping_title)):?>
           <!--空欄だった場合-->
       <?php else:?>
           <!--値が有る場合-->  
<div class="border-black">
<div class="col-12 pt-3"><span class="h4 font-weight-normal"><?php echo $extra_topping_title ?></span></div>
<div class="row p-3">

<?php if(have_rows('extra_topping')): ?>
  <?php while(have_rows('extra_topping')): the_row();
    // Vars
    $topping_names = get_sub_field('topping_names'); // Menu Emphasis
    $price = get_sub_field('price'); // Menu Emphasis
    $menu_description = get_sub_field('menu_description'); // Menu Description
  ?>
  <div class="col-12 col-md-6">
    <div class="row mb-2">
      <div class="col-8 font-weight-bold"><?php echo $topping_names ?><p class="font-weight-normal"><?php echo $menu_description ?></p></div>
      <div class="col-4 text-right"><?php echo $price ?></div>
    </div>
  </div>
<?php endwhile; ?>
<?php endif; ?>

</div>         
</div>
<?php endif;?><!--条件分岐終わり-->

</div>
</div>
       <!--text3 & image1 LOOP END-->
     <?php endwhile; ?>
   <?php endif; ?>
<!--END menu_16 テキスト右-->

<!--START menu_17 左テキスト-->
     <?php if(have_rows('menu_17')): ?>
       <?php while(have_rows('menu_17')): the_row();
         // Vars
         // Category Name
         $menu_category = get_sub_field('menu_category');
         $extra_topping_title = get_sub_field('extra_topping_title'); 
       ?>

       <?php if(have_rows('menu_category')): ?>
         <?php while(have_rows('menu_category')): the_row();
           // Vars
           // Category Name
           $category_title = get_sub_field('category_title');
           $sub_text = get_sub_field('sub_text');
           $sub_text2 = get_sub_field('sub_text2');
           $leaf_icon = get_sub_field('leaf_icon');
           $spicy_icon = get_sub_field('spicy_icon');
         ?>

     <h3 class="menu-cate-title text-left mt-3 mb-5 border-bottom border-dark pb-3"><?php echo $category_title?><br class="d-inline d-md-none"> <small class="d-md-inline d-block">
       <?php
             if( in_array( 'Add Icon', (array)get_sub_field('leaf_icon') ) ) {
             echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text ?><br class="d-inline d-md-none"><?php
             if( in_array( 'Add Icon', (array)get_sub_field('spicy_icon') ) ) {
             echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text2 ?></small></h3>
   <?php endwhile; ?>
   <?php endif; ?>
     <div class="row">

       <div class="order-2 order-md-1 col-12 col-md-7">
       <?php if(have_rows('menu_names')): ?>
         <?php while(have_rows('menu_names')): the_row();
           // Vars
           $menu_name = get_sub_field('menu_name'); // Menu name
           $menu_desc = get_sub_field('menu_desc'); // Menu desc
           $menu_icons = get_sub_field('menu_icon'); // Menu icon
           $menu_price = get_sub_field('price'); // Menu price
           $menu_description = get_sub_field('menu_description'); // Menu Description
           $popularity = get_sub_field('popularity'); // popularity
           $menu_emphasis = get_sub_field('menu_emphasis'); // Menu Emphasis
         ?>
         <!--Menu Texts LOOP START-->
         <div class="row mt-3 mt-md-0">
           <div class="col-9">
             <h5><?php echo $menu_name ?>   <!-- Output Icons -->
               <?php
                     if( in_array( 'vegetables only', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>
               <?php
                     if( in_array( 'spicy', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>            <!--START POPULARITY list -->
                       
                       <?php
                             if( in_array( '#1 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#1 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Most Popular</span>';
                       } ?>
           
                        <!--END POPULARITY list -->  </h5>
                       <p><?php echo $menu_description ?>
                       <span class="text-danger font-weight font-weight-bold d-block">
                         <?php echo $menu_emphasis ?>
                       </span>
                     </p>
           </div>
           <div class="col-3">
             <span class="h6 text-nowrap">$ <?php echo $menu_price ?></span>
           </div>
           </div>
         <?php endwhile; ?>
         <?php endif; ?>
   
         <?php if(empty($extra_topping_title)):?>
           <!--空欄だった場合-->
       <?php else:?>
           <!--値が有る場合-->
 <div class="border-black">
<div class="col-12 pt-3"><span class="h4 font-weight-normal"><?php echo $extra_topping_title ?></span></div>
<div class="row p-3">

<?php if(have_rows('extra_topping')): ?>
 <?php while(have_rows('extra_topping')): the_row();
   // Vars
   $topping_names = get_sub_field('topping_names'); // Menu Emphasis
   $price = get_sub_field('price'); // Menu Emphasis
   $menu_description = get_sub_field('menu_description'); // Menu Description
 ?>
 <div class="col-12 col-md-6">
   <div class="row mb-2">
     <div class="col-8 font-weight-bold"><?php echo $topping_names ?><p class="font-weight-normal"><?php echo $menu_description ?></p></div>
     <div class="col-4 text-right"><?php echo $price ?></div>
   </div>
 </div>
<?php endwhile; ?>
<?php endif; ?>

</div>         
</div>
<?php endif;?>

       </div>
       <div class="order-1 order-md-2 col-12 col-md-5 text-center mb-0 mb-md-3">
                         <?php if(have_rows('menu_images')): ?>
                             <?php while(have_rows('menu_images')): the_row();
                             // Vars
                             $menu_img = get_sub_field('image'); // Menu thumbnail
                             $menu_cap = get_sub_field('image_caption'); // Menu caption
                           ?>
                               <?php if($menu_img): ?>
                                 <!-- Output the image/image caption -->
                                 <img src="<?php echo $menu_img['url']; ?>" alt="<?php echo $menu_img['alt'] ?>" class="w-100 pb-2" />
                                 <p class="mb-2"><span class="font-weight-bold"><?php echo $menu_cap?></span></p>
                           <?php endif ?>
                             <?php endwhile; ?>
                           <?php endif ?>
                     </div>
       </div>
       <!--text3 & image1 LOOP END-->
     <?php endwhile; ?>
   <?php endif; ?>
<!--END menu17 左テキスト-->

<!--START menu_18 テキスト右-->
     <?php if(have_rows('menu_18')): ?>
       <?php while(have_rows('menu_18')): the_row();
         // Vars
         // Category Name
         $menu_category = get_sub_field('menu_category');
         $extra_topping_title = get_sub_field('extra_topping_title'); 
       ?>

       <?php if(have_rows('menu_category')): ?>
         <?php while(have_rows('menu_category')): the_row();
           // Vars
           // Category Name
           $category_title = get_sub_field('category_title');
           $sub_text = get_sub_field('sub_text');
           $sub_text2 = get_sub_field('sub_text2');
           $leaf_icon = get_sub_field('leaf_icon');
           $spicy_icon = get_sub_field('spicy_icon');
         ?>

     <h3 class="menu-cate-title text-left mt-3 mb-5 border-bottom border-dark pb-3"><?php echo $category_title?><br class="d-inline d-md-none"> <small class="d-md-inline d-block mt-2">
       <?php
             if( in_array( 'Add Icon', (array)get_sub_field('leaf_icon') ) ) {
             echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text ?><br class="d-inline d-md-none"><?php
             if( in_array( 'Add Icon', (array)get_sub_field('spicy_icon') ) ) {
             echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text2 ?></small></h3>
   <?php endwhile; ?>
   <?php endif; ?>
     <div class="row">
       <div class="col-12 col-md-5 text-center mb-0 mb-md-3">
                         <?php if(have_rows('menu_images')): ?>
                             <?php while(have_rows('menu_images')): the_row();
                             // Vars
                             $menu_img = get_sub_field('image'); // Menu thumbnail
                             $menu_cap = get_sub_field('image_caption'); // Menu caption
                           ?>
                               <?php if($menu_img): ?>
                                 <!-- Output the image/image caption -->
                                 <img src="<?php echo $menu_img['url']; ?>" alt="<?php echo $menu_img['alt'] ?>" class="w-100 pb-2" />
                                 <p class="mb-2"><span class="font-weight-bold"><?php echo $menu_cap?></span></p>
                           <?php endif ?>
                             <?php endwhile; ?>
                           <?php endif ?>
                     </div>
       <div class="col-12 col-md-7">
       <?php if(have_rows('menu_names')): ?>
         <?php while(have_rows('menu_names')): the_row();
           // Vars
           $menu_name = get_sub_field('menu_name'); // Menu name
           $menu_icons = get_sub_field('menu_icons'); // Menu icon
           $menu_price = get_sub_field('price'); // Menu price
           $menu_description = get_sub_field('menu_description'); // Menu Description
           $menu_emphasis = get_sub_field('menu_emphasis'); // Menu Emphasis
           $popularity = get_sub_field('popularity'); // popularity
           $recommended_toppings = get_sub_field('recommended_toppings');
         ?>
         <!--Menu Texts LOOP START-->
         <div class="row">
           <div class="col-9">
             <h5><?php echo $menu_name ?>   <!-- Output Icons -->
               <?php
                     if( in_array( 'vegetables only', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>
               <?php
                     if( in_array( 'spicy', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>                <!--START POPULARITY list -->
                       
                       <?php
                             if( in_array( '#1 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#1 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Most Popular</span>';
                       } ?>
                        <!--END POPULARITY list -->  </h5>
                       <p><?php echo $menu_description ?>
                     </p>
                     <?php if(empty($recommended_toppings)):?>
                       <!--空欄だった場合-->
                   <?php else:?>
                       <!--値が有る場合-->
                     <p class="mt-3 font-weight-bold">Recommended toppings: <?php echo $recommended_toppings ?></p>
                   <?php endif ?>
                     
                     <?php if(empty($menu_emphasis)):?>
                       <!--空欄だった場合-->
                   <?php else:?>
                       <!--値が有る場合-->
                     <p class="text-danger font-weight font-weight-bold d-block" style="margin-top:-0.8rem;">
                       <?php echo $menu_emphasis ?>
                     </p>
                   <?php endif ?>
           </div>
           <div class="col-3">
             <span class="h6 text-nowrap">$ <?php echo $menu_price ?></span>
             </div>
           </div>
         <?php endwhile; ?>
         <?php endif; ?>


         <?php if(empty($extra_topping_title)):?>
           <!--空欄だった場合-->
       <?php else:?>
           <!--値が有る場合-->  
<div class="border-black">
<div class="col-12 pt-3"><span class="h4 font-weight-normal"><?php echo $extra_topping_title ?></span></div>
<div class="row p-3">

<?php if(have_rows('extra_topping')): ?>
  <?php while(have_rows('extra_topping')): the_row();
    // Vars
    $topping_names = get_sub_field('topping_names'); // Menu Emphasis
    $price = get_sub_field('price'); // Menu Emphasis
    $menu_description = get_sub_field('menu_description'); // Menu Description
  ?>
  <div class="col-12 col-md-6">
    <div class="row mb-2">
      <div class="col-8 font-weight-bold"><?php echo $topping_names ?><p class="font-weight-normal"><?php echo $menu_description ?></p></div>
      <div class="col-4 text-right"><?php echo $price ?></div>
    </div>
  </div>
<?php endwhile; ?>
<?php endif; ?>

</div>         
</div>
<?php endif;?><!--条件分岐終わり-->

</div>
</div>
       <!--text3 & image1 LOOP END-->
     <?php endwhile; ?>
   <?php endif; ?>
<!--END menu_18 テキスト右-->

<!--START menu_19 左テキスト-->
     <?php if(have_rows('menu_19')): ?>
       <?php while(have_rows('menu_19')): the_row();
         // Vars
         // Category Name
         $menu_category = get_sub_field('menu_category');
         $extra_topping_title = get_sub_field('extra_topping_title'); 
       ?>

       <?php if(have_rows('menu_category')): ?>
         <?php while(have_rows('menu_category')): the_row();
           // Vars
           // Category Name
           $category_title = get_sub_field('category_title');
           $sub_text = get_sub_field('sub_text');
           $sub_text2 = get_sub_field('sub_text2');
           $leaf_icon = get_sub_field('leaf_icon');
           $spicy_icon = get_sub_field('spicy_icon');
         ?>

     <h3 class="menu-cate-title text-left mt-3 mb-5 border-bottom border-dark pb-3"><?php echo $category_title?><br class="d-inline d-md-none"> <small class="d-md-inline d-block">
       <?php
             if( in_array( 'Add Icon', (array)get_sub_field('leaf_icon') ) ) {
             echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text ?><br class="d-inline d-md-none"><?php
             if( in_array( 'Add Icon', (array)get_sub_field('spicy_icon') ) ) {
             echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text2 ?></small></h3>
   <?php endwhile; ?>
   <?php endif; ?>
     <div class="row">

       <div class="order-2 order-md-1 col-12 col-md-7">
       <?php if(have_rows('menu_names')): ?>
         <?php while(have_rows('menu_names')): the_row();
           // Vars
           $menu_name = get_sub_field('menu_name'); // Menu name
           $menu_desc = get_sub_field('menu_desc'); // Menu desc
           $menu_icons = get_sub_field('menu_icon'); // Menu icon
           $menu_price = get_sub_field('price'); // Menu price
           $menu_description = get_sub_field('menu_description'); // Menu Description
           $popularity = get_sub_field('popularity'); // popularity
           $menu_emphasis = get_sub_field('menu_emphasis'); // Menu Emphasis
         ?>
         <!--Menu Texts LOOP START-->
         <div class="row mt-3 mt-md-0">
           <div class="col-9">
             <h5><?php echo $menu_name ?>   <!-- Output Icons -->
               <?php
                     if( in_array( 'vegetables only', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>
               <?php
                     if( in_array( 'spicy', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>            <!--START POPULARITY list -->
                       
                       <?php
                             if( in_array( '#1 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#1 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Most Popular</span>';
                       } ?>
           
                        <!--END POPULARITY list -->  </h5>
                       <p><?php echo $menu_description ?>
                       <span class="text-danger font-weight font-weight-bold d-block">
                         <?php echo $menu_emphasis ?>
                       </span>
                     </p>
           </div>
           <div class="col-3">
             <span class="h6 text-nowrap">$ <?php echo $menu_price ?></span>
           </div>
           </div>
         <?php endwhile; ?>
         <?php endif; ?>
   
         <?php if(empty($extra_topping_title)):?>
           <!--空欄だった場合-->
       <?php else:?>
           <!--値が有る場合-->
 <div class="border-black">
<div class="col-12 pt-3"><span class="h4 font-weight-normal"><?php echo $extra_topping_title ?></span></div>
<div class="row p-3">

<?php if(have_rows('extra_topping')): ?>
 <?php while(have_rows('extra_topping')): the_row();
   // Vars
   $topping_names = get_sub_field('topping_names'); // Menu Emphasis
   $price = get_sub_field('price'); // Menu Emphasis
   $menu_description = get_sub_field('menu_description'); // Menu Description
 ?>
 <div class="col-12 col-md-6">
   <div class="row mb-2">
     <div class="col-8 font-weight-bold"><?php echo $topping_names ?><p class="font-weight-normal"><?php echo $menu_description ?></p></div>
     <div class="col-4 text-right"><?php echo $price ?></div>
   </div>
 </div>
<?php endwhile; ?>
<?php endif; ?>

</div>         
</div>
<?php endif;?>

       </div>
       <div class="order-1 order-md-2 col-12 col-md-5 text-center mb-0 mb-md-3">
                         <?php if(have_rows('menu_images')): ?>
                             <?php while(have_rows('menu_images')): the_row();
                             // Vars
                             $menu_img = get_sub_field('image'); // Menu thumbnail
                             $menu_cap = get_sub_field('image_caption'); // Menu caption
                           ?>
                               <?php if($menu_img): ?>
                                 <!-- Output the image/image caption -->
                                 <img src="<?php echo $menu_img['url']; ?>" alt="<?php echo $menu_img['alt'] ?>" class="w-100 pb-2" />
                                 <p class="mb-2"><span class="font-weight-bold"><?php echo $menu_cap?></span></p>
                           <?php endif ?>
                             <?php endwhile; ?>
                           <?php endif ?>
                     </div>
       </div>
       <!--text3 & image1 LOOP END-->
     <?php endwhile; ?>
   <?php endif; ?>
<!--END menu19 左テキスト-->



<!--START menu_20 テキスト右-->
     <?php if(have_rows('menu_20')): ?>
       <?php while(have_rows('menu_20')): the_row();
         // Vars
         // Category Name
         $menu_category = get_sub_field('menu_category');
         $extra_topping_title = get_sub_field('extra_topping_title'); 
       ?>

       <?php if(have_rows('menu_category')): ?>
         <?php while(have_rows('menu_category')): the_row();
           // Vars
           // Category Name
           $category_title = get_sub_field('category_title');
           $sub_text = get_sub_field('sub_text');
           $sub_text2 = get_sub_field('sub_text2');
           $leaf_icon = get_sub_field('leaf_icon');
           $spicy_icon = get_sub_field('spicy_icon');
         ?>

     <h3 class="menu-cate-title text-left mt-3 mb-5 border-bottom border-dark pb-3"><?php echo $category_title?><br class="d-inline d-md-none"> <small class="d-md-inline d-block mt-2">
       <?php
             if( in_array( 'Add Icon', (array)get_sub_field('leaf_icon') ) ) {
             echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text ?><br class="d-inline d-md-none"><?php
             if( in_array( 'Add Icon', (array)get_sub_field('spicy_icon') ) ) {
             echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text2 ?></small></h3>
   <?php endwhile; ?>
   <?php endif; ?>
     <div class="row">
       <div class="col-12 col-md-5 text-center mb-0 mb-md-3">
                         <?php if(have_rows('menu_images')): ?>
                             <?php while(have_rows('menu_images')): the_row();
                             // Vars
                             $menu_img = get_sub_field('image'); // Menu thumbnail
                             $menu_cap = get_sub_field('image_caption'); // Menu caption
                           ?>
                               <?php if($menu_img): ?>
                                 <!-- Output the image/image caption -->
                                 <img src="<?php echo $menu_img['url']; ?>" alt="<?php echo $menu_img['alt'] ?>" class="w-100 pb-2" />
                                 <p class="mb-2"><span class="font-weight-bold"><?php echo $menu_cap?></span></p>
                           <?php endif ?>
                             <?php endwhile; ?>
                           <?php endif ?>
                     </div>
       <div class="col-12 col-md-7">
       <?php if(have_rows('menu_names')): ?>
         <?php while(have_rows('menu_names')): the_row();
           // Vars
           $menu_name = get_sub_field('menu_name'); // Menu name
           $menu_icons = get_sub_field('menu_icons'); // Menu icon
           $menu_price = get_sub_field('price'); // Menu price
           $menu_description = get_sub_field('menu_description'); // Menu Description
           $menu_emphasis = get_sub_field('menu_emphasis'); // Menu Emphasis
           $popularity = get_sub_field('popularity'); // popularity
           $recommended_toppings = get_sub_field('recommended_toppings');
         ?>
         <!--Menu Texts LOOP START-->
         <div class="row">
           <div class="col-9">
             <h5><?php echo $menu_name ?>   <!-- Output Icons -->
               <?php
                     if( in_array( 'vegetables only', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>
               <?php
                     if( in_array( 'spicy', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>                <!--START POPULARITY list -->
                       
                       <?php
                             if( in_array( '#1 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#1 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Most Popular</span>';
                       } ?>
                        <!--END POPULARITY list -->  </h5>
                       <p><?php echo $menu_description ?>
                     </p>
                     <?php if(empty($recommended_toppings)):?>
                       <!--空欄だった場合-->
                   <?php else:?>
                       <!--値が有る場合-->
                     <p class="mt-3 font-weight-bold">Recommended toppings: <?php echo $recommended_toppings ?></p>
                   <?php endif ?>
                     
                     <?php if(empty($menu_emphasis)):?>
                       <!--空欄だった場合-->
                   <?php else:?>
                       <!--値が有る場合-->
                     <p class="text-danger font-weight font-weight-bold d-block" style="margin-top:-0.8rem;">
                       <?php echo $menu_emphasis ?>
                     </p>
                   <?php endif ?>
           </div>
           <div class="col-3">
             <span class="h6 text-nowrap">$ <?php echo $menu_price ?></span>
             </div>
           </div>
         <?php endwhile; ?>
         <?php endif; ?>


         <?php if(empty($extra_topping_title)):?>
           <!--空欄だった場合-->
       <?php else:?>
           <!--値が有る場合-->  
<div class="border-black">
<div class="col-12 pt-3"><span class="h4 font-weight-normal"><?php echo $extra_topping_title ?></span></div>
<div class="row p-3">

<?php if(have_rows('extra_topping')): ?>
  <?php while(have_rows('extra_topping')): the_row();
    // Vars
    $topping_names = get_sub_field('topping_names'); // Menu Emphasis
    $price = get_sub_field('price'); // Menu Emphasis
    $menu_description = get_sub_field('menu_description'); // Menu Description
  ?>
  <div class="col-12 col-md-6">
    <div class="row mb-2">
      <div class="col-8 font-weight-bold"><?php echo $topping_names ?><p class="font-weight-normal"><?php echo $menu_description ?></p></div>
      <div class="col-4 text-right"><?php echo $price ?></div>
    </div>
  </div>
<?php endwhile; ?>
<?php endif; ?>

</div>         
</div>
<?php endif;?><!--条件分岐終わり-->

</div>
</div>
       <!--text3 & image1 LOOP END-->
     <?php endwhile; ?>
   <?php endif; ?>
<!--END menu_20 テキスト右-->

<!--START menu_21 左テキスト-->
     <?php if(have_rows('menu_21')): ?>
       <?php while(have_rows('menu_21')): the_row();
         // Vars
         // Category Name
         $menu_category = get_sub_field('menu_category');
         $extra_topping_title = get_sub_field('extra_topping_title'); 
       ?>

       <?php if(have_rows('menu_category')): ?>
         <?php while(have_rows('menu_category')): the_row();
           // Vars
           // Category Name
           $category_title = get_sub_field('category_title');
           $sub_text = get_sub_field('sub_text');
           $sub_text2 = get_sub_field('sub_text2');
           $leaf_icon = get_sub_field('leaf_icon');
           $spicy_icon = get_sub_field('spicy_icon');
         ?>

     <h3 class="menu-cate-title text-left mt-3 mb-5 border-bottom border-dark pb-3"><?php echo $category_title?><br class="d-inline d-md-none"> <small class="d-md-inline d-block">
       <?php
             if( in_array( 'Add Icon', (array)get_sub_field('leaf_icon') ) ) {
             echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text ?><br class="d-inline d-md-none"><?php
             if( in_array( 'Add Icon', (array)get_sub_field('spicy_icon') ) ) {
             echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text2 ?></small></h3>
   <?php endwhile; ?>
   <?php endif; ?>
     <div class="row">

       <div class="order-2 order-md-1 col-12 col-md-7">
       <?php if(have_rows('menu_names')): ?>
         <?php while(have_rows('menu_names')): the_row();
           // Vars
           $menu_name = get_sub_field('menu_name'); // Menu name
           $menu_desc = get_sub_field('menu_desc'); // Menu desc
           $menu_icons = get_sub_field('menu_icon'); // Menu icon
           $menu_price = get_sub_field('price'); // Menu price
           $menu_description = get_sub_field('menu_description'); // Menu Description
           $popularity = get_sub_field('popularity'); // popularity
           $menu_emphasis = get_sub_field('menu_emphasis'); // Menu Emphasis
         ?>
         <!--Menu Texts LOOP START-->
         <div class="row mt-3 mt-md-0">
           <div class="col-9">
             <h5><?php echo $menu_name ?>   <!-- Output Icons -->
               <?php
                     if( in_array( 'vegetables only', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>
               <?php
                     if( in_array( 'spicy', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>            <!--START POPULARITY list -->
                       
                       <?php
                             if( in_array( '#1 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#1 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Most Popular</span>';
                       } ?>
           
                        <!--END POPULARITY list -->  </h5>
                       <p><?php echo $menu_description ?>
                       <span class="text-danger font-weight font-weight-bold d-block">
                         <?php echo $menu_emphasis ?>
                       </span>
                     </p>
           </div>
           <div class="col-3">
             <span class="h6 text-nowrap">$ <?php echo $menu_price ?></span>
           </div>
           </div>
         <?php endwhile; ?>
         <?php endif; ?>
   
         <?php if(empty($extra_topping_title)):?>
           <!--空欄だった場合-->
       <?php else:?>
           <!--値が有る場合-->
 <div class="border-black">
<div class="col-12 pt-3"><span class="h4 font-weight-normal"><?php echo $extra_topping_title ?></span></div>
<div class="row p-3">

<?php if(have_rows('extra_topping')): ?>
 <?php while(have_rows('extra_topping')): the_row();
   // Vars
   $topping_names = get_sub_field('topping_names'); // Menu Emphasis
   $price = get_sub_field('price'); // Menu Emphasis
   $menu_description = get_sub_field('menu_description'); // Menu Description
 ?>
 <div class="col-12 col-md-6">
   <div class="row mb-2">
     <div class="col-8 font-weight-bold"><?php echo $topping_names ?><p class="font-weight-normal"><?php echo $menu_description ?></p></div>
     <div class="col-4 text-right"><?php echo $price ?></div>
   </div>
 </div>
<?php endwhile; ?>
<?php endif; ?>

</div>         
</div>
<?php endif;?>

       </div>
       <div class="order-1 order-md-2 col-12 col-md-5 text-center mb-0 mb-md-3">
                         <?php if(have_rows('menu_images')): ?>
                             <?php while(have_rows('menu_images')): the_row();
                             // Vars
                             $menu_img = get_sub_field('image'); // Menu thumbnail
                             $menu_cap = get_sub_field('image_caption'); // Menu caption
                           ?>
                               <?php if($menu_img): ?>
                                 <!-- Output the image/image caption -->
                                 <img src="<?php echo $menu_img['url']; ?>" alt="<?php echo $menu_img['alt'] ?>" class="w-100 pb-2" />
                                 <p class="mb-2"><span class="font-weight-bold"><?php echo $menu_cap?></span></p>
                           <?php endif ?>
                             <?php endwhile; ?>
                           <?php endif ?>
                     </div>
       </div>
       <!--text3 & image1 LOOP END-->
     <?php endwhile; ?>
   <?php endif; ?>
<!--END menu21 左テキスト-->


<!--START menu_22 テキスト右-->
     <?php if(have_rows('menu_22')): ?>
       <?php while(have_rows('menu_22')): the_row();
         // Vars
         // Category Name
         $menu_category = get_sub_field('menu_category');
         $extra_topping_title = get_sub_field('extra_topping_title'); 
       ?>

       <?php if(have_rows('menu_category')): ?>
         <?php while(have_rows('menu_category')): the_row();
           // Vars
           // Category Name
           $category_title = get_sub_field('category_title');
           $sub_text = get_sub_field('sub_text');
           $sub_text2 = get_sub_field('sub_text2');
           $leaf_icon = get_sub_field('leaf_icon');
           $spicy_icon = get_sub_field('spicy_icon');
         ?>

     <h3 class="menu-cate-title text-left mt-3 mb-5 border-bottom border-dark pb-3"><?php echo $category_title?><br class="d-inline d-md-none"> <small class="d-md-inline d-block mt-2">
       <?php
             if( in_array( 'Add Icon', (array)get_sub_field('leaf_icon') ) ) {
             echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text ?><br class="d-inline d-md-none"><?php
             if( in_array( 'Add Icon', (array)get_sub_field('spicy_icon') ) ) {
             echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text2 ?></small></h3>
   <?php endwhile; ?>
   <?php endif; ?>
     <div class="row">
       <div class="col-12 col-md-5 text-center mb-0 mb-md-3">
                         <?php if(have_rows('menu_images')): ?>
                             <?php while(have_rows('menu_images')): the_row();
                             // Vars
                             $menu_img = get_sub_field('image'); // Menu thumbnail
                             $menu_cap = get_sub_field('image_caption'); // Menu caption
                           ?>
                               <?php if($menu_img): ?>
                                 <!-- Output the image/image caption -->
                                 <img src="<?php echo $menu_img['url']; ?>" alt="<?php echo $menu_img['alt'] ?>" class="w-100 pb-2" />
                                 <p class="mb-2"><span class="font-weight-bold"><?php echo $menu_cap?></span></p>
                           <?php endif ?>
                             <?php endwhile; ?>
                           <?php endif ?>
                     </div>
       <div class="col-12 col-md-7">
       <?php if(have_rows('menu_names')): ?>
         <?php while(have_rows('menu_names')): the_row();
           // Vars
           $menu_name = get_sub_field('menu_name'); // Menu name
           $menu_icons = get_sub_field('menu_icons'); // Menu icon
           $menu_price = get_sub_field('price'); // Menu price
           $menu_description = get_sub_field('menu_description'); // Menu Description
           $menu_emphasis = get_sub_field('menu_emphasis'); // Menu Emphasis
           $popularity = get_sub_field('popularity'); // popularity
           $recommended_toppings = get_sub_field('recommended_toppings');
         ?>
         <!--Menu Texts LOOP START-->
         <div class="row">
           <div class="col-9">
             <h5><?php echo $menu_name ?>   <!-- Output Icons -->
               <?php
                     if( in_array( 'vegetables only', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>
               <?php
                     if( in_array( 'spicy', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>                <!--START POPULARITY list -->
                       
                       <?php
                             if( in_array( '#1 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#1 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Most Popular</span>';
                       } ?>
                        <!--END POPULARITY list -->  </h5>
                       <p><?php echo $menu_description ?>
                     </p>
                     <?php if(empty($recommended_toppings)):?>
                       <!--空欄だった場合-->
                   <?php else:?>
                       <!--値が有る場合-->
                     <p class="mt-3 font-weight-bold">Recommended toppings: <?php echo $recommended_toppings ?></p>
                   <?php endif ?>
                     
                     <?php if(empty($menu_emphasis)):?>
                       <!--空欄だった場合-->
                   <?php else:?>
                       <!--値が有る場合-->
                     <p class="text-danger font-weight font-weight-bold d-block" style="margin-top:-0.8rem;">
                       <?php echo $menu_emphasis ?>
                     </p>
                   <?php endif ?>
           </div>
           <div class="col-3">
             <span class="h6 text-nowrap">$ <?php echo $menu_price ?></span>
             </div>
           </div>
         <?php endwhile; ?>
         <?php endif; ?>


         <?php if(empty($extra_topping_title)):?>
           <!--空欄だった場合-->
       <?php else:?>
           <!--値が有る場合-->  
<div class="border-black">
<div class="col-12 pt-3"><span class="h4 font-weight-normal"><?php echo $extra_topping_title ?></span></div>
<div class="row p-3">

<?php if(have_rows('extra_topping')): ?>
  <?php while(have_rows('extra_topping')): the_row();
    // Vars
    $topping_names = get_sub_field('topping_names'); // Menu Emphasis
    $price = get_sub_field('price'); // Menu Emphasis
    $menu_description = get_sub_field('menu_description'); // Menu Description
  ?>
  <div class="col-12 col-md-6">
    <div class="row mb-2">
      <div class="col-8 font-weight-bold"><?php echo $topping_names ?><p class="font-weight-normal"><?php echo $menu_description ?></p></div>
      <div class="col-4 text-right"><?php echo $price ?></div>
    </div>
  </div>
<?php endwhile; ?>
<?php endif; ?>

</div>         
</div>
<?php endif;?><!--条件分岐終わり-->

</div>
</div>
       <!--text3 & image1 LOOP END-->
     <?php endwhile; ?>
   <?php endif; ?>
<!--END menu_22 テキスト右-->

<!--START menu_23 左テキスト-->
     <?php if(have_rows('menu_23')): ?>
       <?php while(have_rows('menu_23')): the_row();
         // Vars
         // Category Name
         $menu_category = get_sub_field('menu_category');
         $extra_topping_title = get_sub_field('extra_topping_title'); 
       ?>

       <?php if(have_rows('menu_category')): ?>
         <?php while(have_rows('menu_category')): the_row();
           // Vars
           // Category Name
           $category_title = get_sub_field('category_title');
           $sub_text = get_sub_field('sub_text');
           $sub_text2 = get_sub_field('sub_text2');
           $leaf_icon = get_sub_field('leaf_icon');
           $spicy_icon = get_sub_field('spicy_icon');
         ?>

     <h3 class="menu-cate-title text-left mt-3 mb-5 border-bottom border-dark pb-3"><?php echo $category_title?><br class="d-inline d-md-none"> <small class="d-md-inline d-block">
       <?php
             if( in_array( 'Add Icon', (array)get_sub_field('leaf_icon') ) ) {
             echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text ?><br class="d-inline d-md-none"><?php
             if( in_array( 'Add Icon', (array)get_sub_field('spicy_icon') ) ) {
             echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text2 ?></small></h3>
   <?php endwhile; ?>
   <?php endif; ?>
     <div class="row">

       <div class="order-2 order-md-1 col-12 col-md-7">
       <?php if(have_rows('menu_names')): ?>
         <?php while(have_rows('menu_names')): the_row();
           // Vars
           $menu_name = get_sub_field('menu_name'); // Menu name
           $menu_desc = get_sub_field('menu_desc'); // Menu desc
           $menu_icons = get_sub_field('menu_icon'); // Menu icon
           $menu_price = get_sub_field('price'); // Menu price
           $menu_description = get_sub_field('menu_description'); // Menu Description
           $popularity = get_sub_field('popularity'); // popularity
           $menu_emphasis = get_sub_field('menu_emphasis'); // Menu Emphasis
         ?>
         <!--Menu Texts LOOP START-->
         <div class="row mt-3 mt-md-0">
           <div class="col-9">
             <h5><?php echo $menu_name ?>   <!-- Output Icons -->
               <?php
                     if( in_array( 'vegetables only', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>
               <?php
                     if( in_array( 'spicy', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>            <!--START POPULARITY list -->
                       
                       <?php
                             if( in_array( '#1 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#1 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Most Popular</span>';
                       } ?>
           
                        <!--END POPULARITY list -->  </h5>
                       <p><?php echo $menu_description ?>
                       <span class="text-danger font-weight font-weight-bold d-block">
                         <?php echo $menu_emphasis ?>
                       </span>
                     </p>
           </div>
           <div class="col-3">
             <span class="h6 text-nowrap">$ <?php echo $menu_price ?></span>
           </div>
           </div>
         <?php endwhile; ?>
         <?php endif; ?>
   
         <?php if(empty($extra_topping_title)):?>
           <!--空欄だった場合-->
       <?php else:?>
           <!--値が有る場合-->
 <div class="border-black">
<div class="col-12 pt-3"><span class="h4 font-weight-normal"><?php echo $extra_topping_title ?></span></div>
<div class="row p-3">

<?php if(have_rows('extra_topping')): ?>
 <?php while(have_rows('extra_topping')): the_row();
   // Vars
   $topping_names = get_sub_field('topping_names'); // Menu Emphasis
   $price = get_sub_field('price'); // Menu Emphasis
   $menu_description = get_sub_field('menu_description'); // Menu Description
 ?>
 <div class="col-12 col-md-6">
   <div class="row mb-2">
     <div class="col-8 font-weight-bold"><?php echo $topping_names ?><p class="font-weight-normal"><?php echo $menu_description ?></p></div>
     <div class="col-4 text-right"><?php echo $price ?></div>
   </div>
 </div>
<?php endwhile; ?>
<?php endif; ?>

</div>         
</div>
<?php endif;?>

       </div>
       <div class="order-1 order-md-2 col-12 col-md-5 text-center mb-0 mb-md-3">
                         <?php if(have_rows('menu_images')): ?>
                             <?php while(have_rows('menu_images')): the_row();
                             // Vars
                             $menu_img = get_sub_field('image'); // Menu thumbnail
                             $menu_cap = get_sub_field('image_caption'); // Menu caption
                           ?>
                               <?php if($menu_img): ?>
                                 <!-- Output the image/image caption -->
                                 <img src="<?php echo $menu_img['url']; ?>" alt="<?php echo $menu_img['alt'] ?>" class="w-100 pb-2" />
                                 <p class="mb-2"><span class="font-weight-bold"><?php echo $menu_cap?></span></p>
                           <?php endif ?>
                             <?php endwhile; ?>
                           <?php endif ?>
                     </div>
       </div>
       <!--text3 & image1 LOOP END-->
     <?php endwhile; ?>
   <?php endif; ?>
<!--END menu23 左テキスト-->


<!--START menu_24 テキスト右-->
     <?php if(have_rows('menu_24')): ?>
       <?php while(have_rows('menu_24')): the_row();
         // Vars
         // Category Name
         $menu_category = get_sub_field('menu_category');
         $extra_topping_title = get_sub_field('extra_topping_title'); 
       ?>

       <?php if(have_rows('menu_category')): ?>
         <?php while(have_rows('menu_category')): the_row();
           // Vars
           // Category Name
           $category_title = get_sub_field('category_title');
           $sub_text = get_sub_field('sub_text');
           $sub_text2 = get_sub_field('sub_text2');
           $leaf_icon = get_sub_field('leaf_icon');
           $spicy_icon = get_sub_field('spicy_icon');
         ?>

     <h3 class="menu-cate-title text-left mt-3 mb-5 border-bottom border-dark pb-3"><?php echo $category_title?><br class="d-inline d-md-none"> <small class="d-md-inline d-block mt-2">
       <?php
             if( in_array( 'Add Icon', (array)get_sub_field('leaf_icon') ) ) {
             echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text ?><br class="d-inline d-md-none"><?php
             if( in_array( 'Add Icon', (array)get_sub_field('spicy_icon') ) ) {
             echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text2 ?></small></h3>
   <?php endwhile; ?>
   <?php endif; ?>
     <div class="row">
       <div class="col-12 col-md-5 text-center mb-0 mb-md-3">
                         <?php if(have_rows('menu_images')): ?>
                             <?php while(have_rows('menu_images')): the_row();
                             // Vars
                             $menu_img = get_sub_field('image'); // Menu thumbnail
                             $menu_cap = get_sub_field('image_caption'); // Menu caption
                           ?>
                               <?php if($menu_img): ?>
                                 <!-- Output the image/image caption -->
                                 <img src="<?php echo $menu_img['url']; ?>" alt="<?php echo $menu_img['alt'] ?>" class="w-100 pb-2" />
                                 <p class="mb-2"><span class="font-weight-bold"><?php echo $menu_cap?></span></p>
                           <?php endif ?>
                             <?php endwhile; ?>
                           <?php endif ?>
                     </div>
       <div class="col-12 col-md-7">
       <?php if(have_rows('menu_names')): ?>
         <?php while(have_rows('menu_names')): the_row();
           // Vars
           $menu_name = get_sub_field('menu_name'); // Menu name
           $menu_icons = get_sub_field('menu_icons'); // Menu icon
           $menu_price = get_sub_field('price'); // Menu price
           $menu_description = get_sub_field('menu_description'); // Menu Description
           $menu_emphasis = get_sub_field('menu_emphasis'); // Menu Emphasis
           $popularity = get_sub_field('popularity'); // popularity
           $recommended_toppings = get_sub_field('recommended_toppings');
         ?>
         <!--Menu Texts LOOP START-->
         <div class="row">
           <div class="col-9">
             <h5><?php echo $menu_name ?>   <!-- Output Icons -->
               <?php
                     if( in_array( 'vegetables only', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>
               <?php
                     if( in_array( 'spicy', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>                <!--START POPULARITY list -->
                       
                       <?php
                             if( in_array( '#1 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#1 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Most Popular</span>';
                       } ?>
                        <!--END POPULARITY list -->  </h5>
                       <p><?php echo $menu_description ?>
                     </p>
                     <?php if(empty($recommended_toppings)):?>
                       <!--空欄だった場合-->
                   <?php else:?>
                       <!--値が有る場合-->
                     <p class="mt-3 font-weight-bold">Recommended toppings: <?php echo $recommended_toppings ?></p>
                   <?php endif ?>
                     
                     <?php if(empty($menu_emphasis)):?>
                       <!--空欄だった場合-->
                   <?php else:?>
                       <!--値が有る場合-->
                     <p class="text-danger font-weight font-weight-bold d-block" style="margin-top:-0.8rem;">
                       <?php echo $menu_emphasis ?>
                     </p>
                   <?php endif ?>
           </div>
           <div class="col-3">
             <span class="h6 text-nowrap">$ <?php echo $menu_price ?></span>
             </div>
           </div>
         <?php endwhile; ?>
         <?php endif; ?>


         <?php if(empty($extra_topping_title)):?>
           <!--空欄だった場合-->
       <?php else:?>
           <!--値が有る場合-->  
<div class="border-black">
<div class="col-12 pt-3"><span class="h4 font-weight-normal"><?php echo $extra_topping_title ?></span></div>
<div class="row p-3">

<?php if(have_rows('extra_topping')): ?>
  <?php while(have_rows('extra_topping')): the_row();
    // Vars
    $topping_names = get_sub_field('topping_names'); // Menu Emphasis
    $price = get_sub_field('price'); // Menu Emphasis
    $menu_description = get_sub_field('menu_description'); // Menu Description
  ?>
  <div class="col-12 col-md-6">
    <div class="row mb-2">
      <div class="col-8 font-weight-bold"><?php echo $topping_names ?><p class="font-weight-normal"><?php echo $menu_description ?></p></div>
      <div class="col-4 text-right"><?php echo $price ?></div>
    </div>
  </div>
<?php endwhile; ?>
<?php endif; ?>

</div>         
</div>
<?php endif;?><!--条件分岐終わり-->

</div>
</div>
       <!--text3 & image1 LOOP END-->
     <?php endwhile; ?>
   <?php endif; ?>
<!--END menu_24 テキスト右-->

<!--START menu_25 左テキスト-->
     <?php if(have_rows('menu_25')): ?>
       <?php while(have_rows('menu_25')): the_row();
         // Vars
         // Category Name
         $menu_category = get_sub_field('menu_category');
         $extra_topping_title = get_sub_field('extra_topping_title'); 
       ?>

       <?php if(have_rows('menu_category')): ?>
         <?php while(have_rows('menu_category')): the_row();
           // Vars
           // Category Name
           $category_title = get_sub_field('category_title');
           $sub_text = get_sub_field('sub_text');
           $sub_text2 = get_sub_field('sub_text2');
           $leaf_icon = get_sub_field('leaf_icon');
           $spicy_icon = get_sub_field('spicy_icon');
         ?>

     <h3 class="menu-cate-title text-left mt-3 mb-5 border-bottom border-dark pb-3"><?php echo $category_title?><br class="d-inline d-md-none"> <small class="d-md-inline d-block">
       <?php
             if( in_array( 'Add Icon', (array)get_sub_field('leaf_icon') ) ) {
             echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text ?><br class="d-inline d-md-none"><?php
             if( in_array( 'Add Icon', (array)get_sub_field('spicy_icon') ) ) {
             echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text2 ?></small></h3>
   <?php endwhile; ?>
   <?php endif; ?>
     <div class="row">

       <div class="order-2 order-md-1 col-12 col-md-7">
       <?php if(have_rows('menu_names')): ?>
         <?php while(have_rows('menu_names')): the_row();
           // Vars
           $menu_name = get_sub_field('menu_name'); // Menu name
           $menu_desc = get_sub_field('menu_desc'); // Menu desc
           $menu_icons = get_sub_field('menu_icon'); // Menu icon
           $menu_price = get_sub_field('price'); // Menu price
           $menu_description = get_sub_field('menu_description'); // Menu Description
           $popularity = get_sub_field('popularity'); // popularity
           $menu_emphasis = get_sub_field('menu_emphasis'); // Menu Emphasis
         ?>
         <!--Menu Texts LOOP START-->
         <div class="row mt-3 mt-md-0">
           <div class="col-9">
             <h5><?php echo $menu_name ?>   <!-- Output Icons -->
               <?php
                     if( in_array( 'vegetables only', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>
               <?php
                     if( in_array( 'spicy', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>            <!--START POPULARITY list -->
                       
                       <?php
                             if( in_array( '#1 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#1 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Most Popular</span>';
                       } ?>
           
                        <!--END POPULARITY list -->  </h5>
                       <p><?php echo $menu_description ?>
                       <span class="text-danger font-weight font-weight-bold d-block">
                         <?php echo $menu_emphasis ?>
                       </span>
                     </p>
           </div>
           <div class="col-3">
             <span class="h6 text-nowrap">$ <?php echo $menu_price ?></span>
           </div>
           </div>
         <?php endwhile; ?>
         <?php endif; ?>
   
         <?php if(empty($extra_topping_title)):?>
           <!--空欄だった場合-->
       <?php else:?>
           <!--値が有る場合-->
 <div class="border-black">
<div class="col-12 pt-3"><span class="h4 font-weight-normal"><?php echo $extra_topping_title ?></span></div>
<div class="row p-3">

<?php if(have_rows('extra_topping')): ?>
 <?php while(have_rows('extra_topping')): the_row();
   // Vars
   $topping_names = get_sub_field('topping_names'); // Menu Emphasis
   $price = get_sub_field('price'); // Menu Emphasis
   $menu_description = get_sub_field('menu_description'); // Menu Description
 ?>
 <div class="col-12 col-md-6">
   <div class="row mb-2">
     <div class="col-8 font-weight-bold"><?php echo $topping_names ?><p class="font-weight-normal"><?php echo $menu_description ?></p></div>
     <div class="col-4 text-right"><?php echo $price ?></div>
   </div>
 </div>
<?php endwhile; ?>
<?php endif; ?>

</div>         
</div>
<?php endif;?>

       </div>
       <div class="order-1 order-md-2 col-12 col-md-5 text-center mb-0 mb-md-3">
                         <?php if(have_rows('menu_images')): ?>
                             <?php while(have_rows('menu_images')): the_row();
                             // Vars
                             $menu_img = get_sub_field('image'); // Menu thumbnail
                             $menu_cap = get_sub_field('image_caption'); // Menu caption
                           ?>
                               <?php if($menu_img): ?>
                                 <!-- Output the image/image caption -->
                                 <img src="<?php echo $menu_img['url']; ?>" alt="<?php echo $menu_img['alt'] ?>" class="w-100 pb-2" />
                                 <p class="mb-2"><span class="font-weight-bold"><?php echo $menu_cap?></span></p>
                           <?php endif ?>
                             <?php endwhile; ?>
                           <?php endif ?>
                     </div>
       </div>
       <!--text3 & image1 LOOP END-->
     <?php endwhile; ?>
   <?php endif; ?>
<!--END menu25 左テキスト-->

<!--START menu_26 テキスト右-->
     <?php if(have_rows('menu_26')): ?>
       <?php while(have_rows('menu_26')): the_row();
         // Vars
         // Category Name
         $menu_category = get_sub_field('menu_category');
         $extra_topping_title = get_sub_field('extra_topping_title'); 
       ?>

       <?php if(have_rows('menu_category')): ?>
         <?php while(have_rows('menu_category')): the_row();
           // Vars
           // Category Name
           $category_title = get_sub_field('category_title');
           $sub_text = get_sub_field('sub_text');
           $sub_text2 = get_sub_field('sub_text2');
           $leaf_icon = get_sub_field('leaf_icon');
           $spicy_icon = get_sub_field('spicy_icon');
         ?>

     <h3 class="menu-cate-title text-left mt-3 mb-5 border-bottom border-dark pb-3"><?php echo $category_title?><br class="d-inline d-md-none"> <small class="d-md-inline d-block mt-2">
       <?php
             if( in_array( 'Add Icon', (array)get_sub_field('leaf_icon') ) ) {
             echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text ?><br class="d-inline d-md-none"><?php
             if( in_array( 'Add Icon', (array)get_sub_field('spicy_icon') ) ) {
             echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text2 ?></small></h3>
   <?php endwhile; ?>
   <?php endif; ?>
     <div class="row">
       <div class="col-12 col-md-5 text-center mb-0 mb-md-3">
                         <?php if(have_rows('menu_images')): ?>
                             <?php while(have_rows('menu_images')): the_row();
                             // Vars
                             $menu_img = get_sub_field('image'); // Menu thumbnail
                             $menu_cap = get_sub_field('image_caption'); // Menu caption
                           ?>
                               <?php if($menu_img): ?>
                                 <!-- Output the image/image caption -->
                                 <img src="<?php echo $menu_img['url']; ?>" alt="<?php echo $menu_img['alt'] ?>" class="w-100 pb-2" />
                                 <p class="mb-2"><span class="font-weight-bold"><?php echo $menu_cap?></span></p>
                           <?php endif ?>
                             <?php endwhile; ?>
                           <?php endif ?>
                     </div>
       <div class="col-12 col-md-7">
       <?php if(have_rows('menu_names')): ?>
         <?php while(have_rows('menu_names')): the_row();
           // Vars
           $menu_name = get_sub_field('menu_name'); // Menu name
           $menu_icons = get_sub_field('menu_icons'); // Menu icon
           $menu_price = get_sub_field('price'); // Menu price
           $menu_description = get_sub_field('menu_description'); // Menu Description
           $menu_emphasis = get_sub_field('menu_emphasis'); // Menu Emphasis
           $popularity = get_sub_field('popularity'); // popularity
           $recommended_toppings = get_sub_field('recommended_toppings');
         ?>
         <!--Menu Texts LOOP START-->
         <div class="row">
           <div class="col-9">
             <h5><?php echo $menu_name ?>   <!-- Output Icons -->
               <?php
                     if( in_array( 'vegetables only', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>
               <?php
                     if( in_array( 'spicy', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>                <!--START POPULARITY list -->
                       
                       <?php
                             if( in_array( '#1 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#1 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Most Popular</span>';
                       } ?>
                        <!--END POPULARITY list -->  </h5>
                       <p><?php echo $menu_description ?>
                     </p>
                     <?php if(empty($recommended_toppings)):?>
                       <!--空欄だった場合-->
                   <?php else:?>
                       <!--値が有る場合-->
                     <p class="mt-3 font-weight-bold">Recommended toppings: <?php echo $recommended_toppings ?></p>
                   <?php endif ?>
                     
                     <?php if(empty($menu_emphasis)):?>
                       <!--空欄だった場合-->
                   <?php else:?>
                       <!--値が有る場合-->
                     <p class="text-danger font-weight font-weight-bold d-block" style="margin-top:-0.8rem;">
                       <?php echo $menu_emphasis ?>
                     </p>
                   <?php endif ?>
           </div>
           <div class="col-3">
             <span class="h6 text-nowrap">$ <?php echo $menu_price ?></span>
             </div>
           </div>
         <?php endwhile; ?>
         <?php endif; ?>


         <?php if(empty($extra_topping_title)):?>
           <!--空欄だった場合-->
       <?php else:?>
           <!--値が有る場合-->  
<div class="border-black">
<div class="col-12 pt-3"><span class="h4 font-weight-normal"><?php echo $extra_topping_title ?></span></div>
<div class="row p-3">

<?php if(have_rows('extra_topping')): ?>
  <?php while(have_rows('extra_topping')): the_row();
    // Vars
    $topping_names = get_sub_field('topping_names'); // Menu Emphasis
    $price = get_sub_field('price'); // Menu Emphasis
    $menu_description = get_sub_field('menu_description'); // Menu Description
  ?>
  <div class="col-12 col-md-6">
    <div class="row mb-2">
      <div class="col-8 font-weight-bold"><?php echo $topping_names ?><p class="font-weight-normal"><?php echo $menu_description ?></p></div>
      <div class="col-4 text-right"><?php echo $price ?></div>
    </div>
  </div>
<?php endwhile; ?>
<?php endif; ?>

</div>         
</div>
<?php endif;?><!--条件分岐終わり-->

</div>
</div>
       <!--text3 & image1 LOOP END-->
     <?php endwhile; ?>
   <?php endif; ?>
<!--END menu_26 テキスト右-->

<!--START menu_27 左テキスト-->
     <?php if(have_rows('menu_27')): ?>
       <?php while(have_rows('menu_27')): the_row();
         // Vars
         // Category Name
         $menu_category = get_sub_field('menu_category');
         $extra_topping_title = get_sub_field('extra_topping_title'); 
       ?>

       <?php if(have_rows('menu_category')): ?>
         <?php while(have_rows('menu_category')): the_row();
           // Vars
           // Category Name
           $category_title = get_sub_field('category_title');
           $sub_text = get_sub_field('sub_text');
           $sub_text2 = get_sub_field('sub_text2');
           $leaf_icon = get_sub_field('leaf_icon');
           $spicy_icon = get_sub_field('spicy_icon');
         ?>

     <h3 class="menu-cate-title text-left mt-3 mb-5 border-bottom border-dark pb-3"><?php echo $category_title?><br class="d-inline d-md-none"> <small class="d-md-inline d-block">
       <?php
             if( in_array( 'Add Icon', (array)get_sub_field('leaf_icon') ) ) {
             echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text ?><br class="d-inline d-md-none"><?php
             if( in_array( 'Add Icon', (array)get_sub_field('spicy_icon') ) ) {
             echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text2 ?></small></h3>
   <?php endwhile; ?>
   <?php endif; ?>
     <div class="row">

       <div class="order-2 order-md-1 col-12 col-md-7">
       <?php if(have_rows('menu_names')): ?>
         <?php while(have_rows('menu_names')): the_row();
           // Vars
           $menu_name = get_sub_field('menu_name'); // Menu name
           $menu_desc = get_sub_field('menu_desc'); // Menu desc
           $menu_icons = get_sub_field('menu_icon'); // Menu icon
           $menu_price = get_sub_field('price'); // Menu price
           $menu_description = get_sub_field('menu_description'); // Menu Description
           $popularity = get_sub_field('popularity'); // popularity
           $menu_emphasis = get_sub_field('menu_emphasis'); // Menu Emphasis
         ?>
         <!--Menu Texts LOOP START-->
         <div class="row mt-3 mt-md-0">
           <div class="col-9">
             <h5><?php echo $menu_name ?>   <!-- Output Icons -->
               <?php
                     if( in_array( 'vegetables only', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>
               <?php
                     if( in_array( 'spicy', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>            <!--START POPULARITY list -->
                       
                       <?php
                             if( in_array( '#1 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#1 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Most Popular</span>';
                       } ?>
           
                        <!--END POPULARITY list -->  </h5>
                       <p><?php echo $menu_description ?>
                       <span class="text-danger font-weight font-weight-bold d-block">
                         <?php echo $menu_emphasis ?>
                       </span>
                     </p>
           </div>
           <div class="col-3">
             <span class="h6 text-nowrap">$ <?php echo $menu_price ?></span>
           </div>
           </div>
         <?php endwhile; ?>
         <?php endif; ?>
   
         <?php if(empty($extra_topping_title)):?>
           <!--空欄だった場合-->
       <?php else:?>
           <!--値が有る場合-->
 <div class="border-black">
<div class="col-12 pt-3"><span class="h4 font-weight-normal"><?php echo $extra_topping_title ?></span></div>
<div class="row p-3">

<?php if(have_rows('extra_topping')): ?>
 <?php while(have_rows('extra_topping')): the_row();
   // Vars
   $topping_names = get_sub_field('topping_names'); // Menu Emphasis
   $price = get_sub_field('price'); // Menu Emphasis
   $menu_description = get_sub_field('menu_description'); // Menu Description
 ?>
 <div class="col-12 col-md-6">
   <div class="row mb-2">
     <div class="col-8 font-weight-bold"><?php echo $topping_names ?><p class="font-weight-normal"><?php echo $menu_description ?></p></div>
     <div class="col-4 text-right"><?php echo $price ?></div>
   </div>
 </div>
<?php endwhile; ?>
<?php endif; ?>

</div>         
</div>
<?php endif;?>

       </div>
       <div class="order-1 order-md-2 col-12 col-md-5 text-center mb-0 mb-md-3">
                         <?php if(have_rows('menu_images')): ?>
                             <?php while(have_rows('menu_images')): the_row();
                             // Vars
                             $menu_img = get_sub_field('image'); // Menu thumbnail
                             $menu_cap = get_sub_field('image_caption'); // Menu caption
                           ?>
                               <?php if($menu_img): ?>
                                 <!-- Output the image/image caption -->
                                 <img src="<?php echo $menu_img['url']; ?>" alt="<?php echo $menu_img['alt'] ?>" class="w-100 pb-2" />
                                 <p class="mb-2"><span class="font-weight-bold"><?php echo $menu_cap?></span></p>
                           <?php endif ?>
                             <?php endwhile; ?>
                           <?php endif ?>
                     </div>
       </div>
       <!--text3 & image1 LOOP END-->
     <?php endwhile; ?>
   <?php endif; ?>
<!--END menu27 左テキスト-->



<!--START menu_28 テキスト右-->
     <?php if(have_rows('menu_28')): ?>
       <?php while(have_rows('menu_28')): the_row();
         // Vars
         // Category Name
         $menu_category = get_sub_field('menu_category');
         $extra_topping_title = get_sub_field('extra_topping_title'); 
       ?>

       <?php if(have_rows('menu_category')): ?>
         <?php while(have_rows('menu_category')): the_row();
           // Vars
           // Category Name
           $category_title = get_sub_field('category_title');
           $sub_text = get_sub_field('sub_text');
           $sub_text2 = get_sub_field('sub_text2');
           $leaf_icon = get_sub_field('leaf_icon');
           $spicy_icon = get_sub_field('spicy_icon');
         ?>

     <h3 class="menu-cate-title text-left mt-3 mb-5 border-bottom border-dark pb-3"><?php echo $category_title?><br class="d-inline d-md-none"> <small class="d-md-inline d-block mt-2">
       <?php
             if( in_array( 'Add Icon', (array)get_sub_field('leaf_icon') ) ) {
             echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text ?><br class="d-inline d-md-none"><?php
             if( in_array( 'Add Icon', (array)get_sub_field('spicy_icon') ) ) {
             echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text2 ?></small></h3>
   <?php endwhile; ?>
   <?php endif; ?>
     <div class="row">
       <div class="col-12 col-md-5 text-center mb-0 mb-md-3">
                         <?php if(have_rows('menu_images')): ?>
                             <?php while(have_rows('menu_images')): the_row();
                             // Vars
                             $menu_img = get_sub_field('image'); // Menu thumbnail
                             $menu_cap = get_sub_field('image_caption'); // Menu caption
                           ?>
                               <?php if($menu_img): ?>
                                 <!-- Output the image/image caption -->
                                 <img src="<?php echo $menu_img['url']; ?>" alt="<?php echo $menu_img['alt'] ?>" class="w-100 pb-2" />
                                 <p class="mb-2"><span class="font-weight-bold"><?php echo $menu_cap?></span></p>
                           <?php endif ?>
                             <?php endwhile; ?>
                           <?php endif ?>
                     </div>
       <div class="col-12 col-md-7">
       <?php if(have_rows('menu_names')): ?>
         <?php while(have_rows('menu_names')): the_row();
           // Vars
           $menu_name = get_sub_field('menu_name'); // Menu name
           $menu_icons = get_sub_field('menu_icons'); // Menu icon
           $menu_price = get_sub_field('price'); // Menu price
           $menu_description = get_sub_field('menu_description'); // Menu Description
           $menu_emphasis = get_sub_field('menu_emphasis'); // Menu Emphasis
           $popularity = get_sub_field('popularity'); // popularity
           $recommended_toppings = get_sub_field('recommended_toppings');
         ?>
         <!--Menu Texts LOOP START-->
         <div class="row">
           <div class="col-9">
             <h5><?php echo $menu_name ?>   <!-- Output Icons -->
               <?php
                     if( in_array( 'vegetables only', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>
               <?php
                     if( in_array( 'spicy', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>                <!--START POPULARITY list -->
                       
                       <?php
                             if( in_array( '#1 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#1 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Most Popular</span>';
                       } ?>
                        <!--END POPULARITY list -->  </h5>
                       <p><?php echo $menu_description ?>
                     </p>
                     <?php if(empty($recommended_toppings)):?>
                       <!--空欄だった場合-->
                   <?php else:?>
                       <!--値が有る場合-->
                     <p class="mt-3 font-weight-bold">Recommended toppings: <?php echo $recommended_toppings ?></p>
                   <?php endif ?>
                     
                     <?php if(empty($menu_emphasis)):?>
                       <!--空欄だった場合-->
                   <?php else:?>
                       <!--値が有る場合-->
                     <p class="text-danger font-weight font-weight-bold d-block" style="margin-top:-0.8rem;">
                       <?php echo $menu_emphasis ?>
                     </p>
                   <?php endif ?>
           </div>
           <div class="col-3">
             <span class="h6 text-nowrap">$ <?php echo $menu_price ?></span>
             </div>
           </div>
         <?php endwhile; ?>
         <?php endif; ?>


         <?php if(empty($extra_topping_title)):?>
           <!--空欄だった場合-->
       <?php else:?>
           <!--値が有る場合-->  
<div class="border-black">
<div class="col-12 pt-3"><span class="h4 font-weight-normal"><?php echo $extra_topping_title ?></span></div>
<div class="row p-3">

<?php if(have_rows('extra_topping')): ?>
  <?php while(have_rows('extra_topping')): the_row();
    // Vars
    $topping_names = get_sub_field('topping_names'); // Menu Emphasis
    $price = get_sub_field('price'); // Menu Emphasis
    $menu_description = get_sub_field('menu_description'); // Menu Description
  ?>
  <div class="col-12 col-md-6">
    <div class="row mb-2">
      <div class="col-8 font-weight-bold"><?php echo $topping_names ?><p class="font-weight-normal"><?php echo $menu_description ?></p></div>
      <div class="col-4 text-right"><?php echo $price ?></div>
    </div>
  </div>
<?php endwhile; ?>
<?php endif; ?>

</div>         
</div>
<?php endif;?><!--条件分岐終わり-->

</div>
</div>
       <!--text3 & image1 LOOP END-->
     <?php endwhile; ?>
   <?php endif; ?>
<!--END menu_28 テキスト右-->

<!--START menu_29 左テキスト-->
     <?php if(have_rows('menu_29')): ?>
       <?php while(have_rows('menu_29')): the_row();
         // Vars
         // Category Name
         $menu_category = get_sub_field('menu_category');
         $extra_topping_title = get_sub_field('extra_topping_title'); 
       ?>

       <?php if(have_rows('menu_category')): ?>
         <?php while(have_rows('menu_category')): the_row();
           // Vars
           // Category Name
           $category_title = get_sub_field('category_title');
           $sub_text = get_sub_field('sub_text');
           $sub_text2 = get_sub_field('sub_text2');
           $leaf_icon = get_sub_field('leaf_icon');
           $spicy_icon = get_sub_field('spicy_icon');
         ?>

     <h3 class="menu-cate-title text-left mt-3 mb-5 border-bottom border-dark pb-3"><?php echo $category_title?><br class="d-inline d-md-none"> <small class="d-md-inline d-block">
       <?php
             if( in_array( 'Add Icon', (array)get_sub_field('leaf_icon') ) ) {
             echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text ?><br class="d-inline d-md-none"><?php
             if( in_array( 'Add Icon', (array)get_sub_field('spicy_icon') ) ) {
             echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text2 ?></small></h3>
   <?php endwhile; ?>
   <?php endif; ?>
     <div class="row">

       <div class="order-2 order-md-1 col-12 col-md-7">
       <?php if(have_rows('menu_names')): ?>
         <?php while(have_rows('menu_names')): the_row();
           // Vars
           $menu_name = get_sub_field('menu_name'); // Menu name
           $menu_desc = get_sub_field('menu_desc'); // Menu desc
           $menu_icons = get_sub_field('menu_icon'); // Menu icon
           $menu_price = get_sub_field('price'); // Menu price
           $menu_description = get_sub_field('menu_description'); // Menu Description
           $popularity = get_sub_field('popularity'); // popularity
           $menu_emphasis = get_sub_field('menu_emphasis'); // Menu Emphasis
         ?>
         <!--Menu Texts LOOP START-->
         <div class="row mt-3 mt-md-0">
           <div class="col-9">
             <h5><?php echo $menu_name ?>   <!-- Output Icons -->
               <?php
                     if( in_array( 'vegetables only', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>
               <?php
                     if( in_array( 'spicy', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>            <!--START POPULARITY list -->
                       
                       <?php
                             if( in_array( '#1 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#1 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Most Popular</span>';
                       } ?>
           
                        <!--END POPULARITY list -->  </h5>
                       <p><?php echo $menu_description ?>
                       <span class="text-danger font-weight font-weight-bold d-block">
                         <?php echo $menu_emphasis ?>
                       </span>
                     </p>
           </div>
           <div class="col-3">
             <span class="h6 text-nowrap">$ <?php echo $menu_price ?></span>
           </div>
           </div>
         <?php endwhile; ?>
         <?php endif; ?>
   
         <?php if(empty($extra_topping_title)):?>
           <!--空欄だった場合-->
       <?php else:?>
           <!--値が有る場合-->
 <div class="border-black">
<div class="col-12 pt-3"><span class="h4 font-weight-normal"><?php echo $extra_topping_title ?></span></div>
<div class="row p-3">

<?php if(have_rows('extra_topping')): ?>
 <?php while(have_rows('extra_topping')): the_row();
   // Vars
   $topping_names = get_sub_field('topping_names'); // Menu Emphasis
   $price = get_sub_field('price'); // Menu Emphasis
   $menu_description = get_sub_field('menu_description'); // Menu Description
 ?>
 <div class="col-12 col-md-6">
   <div class="row mb-2">
     <div class="col-8 font-weight-bold"><?php echo $topping_names ?><p class="font-weight-normal"><?php echo $menu_description ?></p></div>
     <div class="col-4 text-right"><?php echo $price ?></div>
   </div>
 </div>
<?php endwhile; ?>
<?php endif; ?>

</div>         
</div>
<?php endif;?>

       </div>
       <div class="order-1 order-md-2 col-12 col-md-5 text-center mb-0 mb-md-3">
                         <?php if(have_rows('menu_images')): ?>
                             <?php while(have_rows('menu_images')): the_row();
                             // Vars
                             $menu_img = get_sub_field('image'); // Menu thumbnail
                             $menu_cap = get_sub_field('image_caption'); // Menu caption
                           ?>
                               <?php if($menu_img): ?>
                                 <!-- Output the image/image caption -->
                                 <img src="<?php echo $menu_img['url']; ?>" alt="<?php echo $menu_img['alt'] ?>" class="w-100 pb-2" />
                                 <p class="mb-2"><span class="font-weight-bold"><?php echo $menu_cap?></span></p>
                           <?php endif ?>
                             <?php endwhile; ?>
                           <?php endif ?>
                     </div>
       </div>
       <!--text3 & image1 LOOP END-->
     <?php endwhile; ?>
   <?php endif; ?>
<!--END menu29 左テキスト-->



<!--START menu_30 テキスト右-->
     <?php if(have_rows('menu_30')): ?>
       <?php while(have_rows('menu_30')): the_row();
         // Vars
         // Category Name
         $menu_category = get_sub_field('menu_category');
         $extra_topping_title = get_sub_field('extra_topping_title'); 
       ?>

       <?php if(have_rows('menu_category')): ?>
         <?php while(have_rows('menu_category')): the_row();
           // Vars
           // Category Name
           $category_title = get_sub_field('category_title');
           $sub_text = get_sub_field('sub_text');
           $sub_text2 = get_sub_field('sub_text2');
           $leaf_icon = get_sub_field('leaf_icon');
           $spicy_icon = get_sub_field('spicy_icon');
         ?>

     <h3 class="menu-cate-title text-left mt-3 mb-5 border-bottom border-dark pb-3"><?php echo $category_title?><br class="d-inline d-md-none"> <small class="d-md-inline d-block mt-2">
       <?php
             if( in_array( 'Add Icon', (array)get_sub_field('leaf_icon') ) ) {
             echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text ?><br class="d-inline d-md-none"><?php
             if( in_array( 'Add Icon', (array)get_sub_field('spicy_icon') ) ) {
             echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text2 ?></small></h3>
   <?php endwhile; ?>
   <?php endif; ?>
     <div class="row">
       <div class="col-12 col-md-5 text-center mb-0 mb-md-3">
                         <?php if(have_rows('menu_images')): ?>
                             <?php while(have_rows('menu_images')): the_row();
                             // Vars
                             $menu_img = get_sub_field('image'); // Menu thumbnail
                             $menu_cap = get_sub_field('image_caption'); // Menu caption
                           ?>
                               <?php if($menu_img): ?>
                                 <!-- Output the image/image caption -->
                                 <img src="<?php echo $menu_img['url']; ?>" alt="<?php echo $menu_img['alt'] ?>" class="w-100 pb-2" />
                                 <p class="mb-2"><span class="font-weight-bold"><?php echo $menu_cap?></span></p>
                           <?php endif ?>
                             <?php endwhile; ?>
                           <?php endif ?>
                     </div>
       <div class="col-12 col-md-7">
       <?php if(have_rows('menu_names')): ?>
         <?php while(have_rows('menu_names')): the_row();
           // Vars
           $menu_name = get_sub_field('menu_name'); // Menu name
           $menu_icons = get_sub_field('menu_icons'); // Menu icon
           $menu_price = get_sub_field('price'); // Menu price
           $menu_description = get_sub_field('menu_description'); // Menu Description
           $menu_emphasis = get_sub_field('menu_emphasis'); // Menu Emphasis
           $popularity = get_sub_field('popularity'); // popularity
           $recommended_toppings = get_sub_field('recommended_toppings');
         ?>
         <!--Menu Texts LOOP START-->
         <div class="row">
           <div class="col-9">
             <h5><?php echo $menu_name ?>   <!-- Output Icons -->
               <?php
                     if( in_array( 'vegetables only', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>
               <?php
                     if( in_array( 'spicy', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>                <!--START POPULARITY list -->
                       
                       <?php
                             if( in_array( '#1 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#1 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Most Popular</span>';
                       } ?>
                        <!--END POPULARITY list -->  </h5>
                       <p><?php echo $menu_description ?>
                     </p>
                     <?php if(empty($recommended_toppings)):?>
                       <!--空欄だった場合-->
                   <?php else:?>
                       <!--値が有る場合-->
                     <p class="mt-3 font-weight-bold">Recommended toppings: <?php echo $recommended_toppings ?></p>
                   <?php endif ?>
                     
                     <?php if(empty($menu_emphasis)):?>
                       <!--空欄だった場合-->
                   <?php else:?>
                       <!--値が有る場合-->
                     <p class="text-danger font-weight font-weight-bold d-block" style="margin-top:-0.8rem;">
                       <?php echo $menu_emphasis ?>
                     </p>
                   <?php endif ?>
           </div>
           <div class="col-3">
             <span class="h6 text-nowrap">$ <?php echo $menu_price ?></span>
             </div>
           </div>
         <?php endwhile; ?>
         <?php endif; ?>


         <?php if(empty($extra_topping_title)):?>
           <!--空欄だった場合-->
       <?php else:?>
           <!--値が有る場合-->  
<div class="border-black">
<div class="col-12 pt-3"><span class="h4 font-weight-normal"><?php echo $extra_topping_title ?></span></div>
<div class="row p-3">

<?php if(have_rows('extra_topping')): ?>
  <?php while(have_rows('extra_topping')): the_row();
    // Vars
    $topping_names = get_sub_field('topping_names'); // Menu Emphasis
    $price = get_sub_field('price'); // Menu Emphasis
    $menu_description = get_sub_field('menu_description'); // Menu Description
  ?>
  <div class="col-12 col-md-6">
    <div class="row mb-2">
      <div class="col-8 font-weight-bold"><?php echo $topping_names ?><p class="font-weight-normal"><?php echo $menu_description ?></p></div>
      <div class="col-4 text-right"><?php echo $price ?></div>
    </div>
  </div>
<?php endwhile; ?>
<?php endif; ?>

</div>         
</div>
<?php endif;?><!--条件分岐終わり-->

</div>
</div>
       <!--text3 & image1 LOOP END-->
     <?php endwhile; ?>
   <?php endif; ?>
<!--END menu_30 テキスト右-->













 <!--START menu_group_combinations-->
      <?php if(have_rows('menu_group_combinations')): ?>
        <?php while(have_rows('menu_group_combinations')): the_row();
          // Vars
          // Category Name
          $menu_category = get_sub_field('menu_category');
          $main_menu = get_sub_field('main_menu');
          $selections_title = get_sub_field('selections_title');
          $extra_topping_title = get_sub_field('extra_topping_title'); 
        ?>
        <?php if(have_rows('menu_category')): ?>
          <?php while(have_rows('menu_category')): the_row();
            // Vars
            // Category Name
            $category_title = get_sub_field('category_title');
            $sub_text = get_sub_field('sub_text');
            $sub_text2 = get_sub_field('sub_text2');
            $leaf_icon = get_sub_field('leaf_icon');
            $spicy_icon = get_sub_field('spicy_icon');
          ?>

      <h3 class="menu-cate-title text-left mt-3 mb-5 border-bottom border-dark pb-3"><?php echo $category_title?><br class="d-inline d-md-none"> <small class="d-md-inline d-block">
        <?php
              if( in_array( 'Add Icon', (array)get_sub_field('leaf_icon') ) ) {
              echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
        } ?> <?php echo $sub_text ?><br class="d-inline d-md-none"><?php
              if( in_array( 'Add Icon', (array)get_sub_field('spicy_icon') ) ) {
              echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
        } ?> <?php echo $sub_text2 ?></small></h3>
    <?php endwhile; ?>
    <?php endif; ?>
      <div class="row">
        <div class="col-12 col-md-5 text-center mb-0 mb-md-3">
                          <?php if(have_rows('menu_images')): ?>
                              <?php while(have_rows('menu_images')): the_row();
                              // Vars
                              $menu_img = get_sub_field('image'); // Menu thumbnail
                              $menu_cap = get_sub_field('image_caption'); // Menu caption
                            ?>
                                <?php if($menu_img): ?>
                                  <!-- Output the image/image caption -->
                                  <img src="<?php echo $menu_img['url']; ?>" alt="<?php echo $menu_img['alt'] ?>" class="w-100 pb-2" />
                                  <p class="mb-2"><span class="font-weight-bold"><?php echo $menu_cap?></span></p>
                            <?php endif ?>
                              <?php endwhile; ?>
                            <?php endif ?>
                      </div>
        <div class="col-12 col-md-7">
          <?php if(have_rows('main_menu')): ?>
            <?php while(have_rows('main_menu')): the_row();
              $main_menu_name = get_sub_field('main_menu_name');
              $note = get_sub_field('note');
              $price = get_sub_field('price');
            ?>
            <div class="row">
              <div class="col-9 col-md-10">
                <h5 class="mb-4"><?php echo $main_menu_name ?> <small class="text-danger font-weight-bold"><?php echo $note ?></small></h5>
              </div>
            <div class="col-3 col-md-2">
              <?php if(empty($price)):?>
                <!--空欄だった場合-->
            <?php else:?>
                <!--値が有る場合-->
              <span class="h6 text-nowrap">$ <?php echo $price ?></span>
            <?php endif ?>
            </div>
            </div>
      <?php endwhile; ?>
      <?php endif; ?>
      <h5 class="mb-4"><?php echo $selections_title ?></h5>
        <?php if(have_rows('menu_names')): ?>
          <?php while(have_rows('menu_names')): the_row();
            // Vars
            $menu_name = get_sub_field('menu_name'); // Menu name
            $menu_icons = get_sub_field('menu_icons'); // Menu icon
            $menu_price = get_sub_field('price'); // Menu price
            $popularity = get_sub_field('popularity'); // Menu Emphasis
          ?>
          <!--Menu Texts LOOP START-->
          <div class="row">
            <div class="col-9 col-md-10">
              <h5 class="mb-4">+ <?php echo $menu_name ?>   <!-- Output Icons -->
                <?php
                      if( in_array( 'vegetables only', (array)get_sub_field('menu_icons') ) ) {
                      echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
                } ?>
                <?php
                      if( in_array( 'spicy', (array)get_sub_field('menu_icons') ) ) {
                      echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
                } ?>
                
                
                <!--START POPULARITY list -->
            
            <?php
                  if( in_array( '#1 Top seller', (array)get_sub_field('popularity') ) ) {
                  echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Top seller</span>';
            } ?>
            <?php
                  if( in_array( '#2 Top seller', (array)get_sub_field('popularity') ) ) {
                  echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Top seller</span>';
            } ?>
            <?php
                  if( in_array( '#3 Top seller', (array)get_sub_field('popularity') ) ) {
                  echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Top seller</span>';
            } ?>
            <?php
                  if( in_array( '#4 Top seller', (array)get_sub_field('popularity') ) ) {
                  echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Top seller</span>';
            } ?>
            <?php
                  if( in_array( '#1 Most Popular', (array)get_sub_field('popularity') ) ) {
                  echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Most Popular</span>';
            } ?>
            <?php
                  if( in_array( '#2 Most Popular', (array)get_sub_field('popularity') ) ) {
                  echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Most Popular</span>';
            } ?>
            <?php
                  if( in_array( '#3 Most Popular', (array)get_sub_field('popularity') ) ) {
                  echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Most Popular</span>';
            } ?>
            <?php
                  if( in_array( '#4 Most Popular', (array)get_sub_field('popularity') ) ) {
                  echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Most Popular</span>';
            } ?>

             <!--END POPULARITY list -->  

                </h5>
            </div>
            <div class="col-3 col-md-2">
              <?php if(empty($menu_price)):?>
      <!--空欄だった場合-->
    <?php else:?>
      <!--値が有る場合-->
              <span class="h6 text-nowrap">$ <?php echo $menu_price ?></span>
            <?php endif ?>
            </div>
            </div>
          <?php endwhile; ?>
          <?php endif; ?>
          
          <?php if(empty($extra_topping_title)):?>
  <!--空欄だった場合-->
<?php else:?>
  <!--値が有る場合-->
          <div class="border-black">
<div class="col-12 pt-3"><span class="h4 font-weight-normal"><?php echo $extra_topping_title ?></span></div>
<div class="row p-3">

<?php if(have_rows('extra_topping')): ?>
<?php while(have_rows('extra_topping')): the_row();
  // Vars
  $topping_names = get_sub_field('topping_names'); // Menu Emphasis
  $price = get_sub_field('price'); // Menu Emphasis
  $menu_description = get_sub_field('menu_description'); // Menu Description
?>
<div class="col-12 col-md-6">
  <div class="row mb-2">
    <div class="col-8 font-weight-bold"><?php echo $topping_names ?><p class="font-weight-normal"><?php echo $menu_description ?></p></div>
    <div class="col-4 text-right"><?php echo $price ?></div>
  </div>
</div>
<?php endwhile; ?>
<?php endif; ?>

</div>         
</div>
  <?php endif;?><!--条件分岐終わり-->
        </div>
        
        </div>
        <!--text3 & image1 LOOP END-->
      <?php endwhile; ?>
    <?php endif; ?>
<!--END menu_group_combinations-->








<!--START menu_31 左テキスト-->
     <?php if(have_rows('menu_31')): ?>
       <?php while(have_rows('menu_31')): the_row();
         // Vars
         // Category Name
         $menu_category = get_sub_field('menu_category');
         $extra_topping_title = get_sub_field('extra_topping_title'); 
       ?>

       <?php if(have_rows('menu_category')): ?>
         <?php while(have_rows('menu_category')): the_row();
           // Vars
           // Category Name
           $category_title = get_sub_field('category_title');
           $sub_text = get_sub_field('sub_text');
           $sub_text2 = get_sub_field('sub_text2');
           $leaf_icon = get_sub_field('leaf_icon');
           $spicy_icon = get_sub_field('spicy_icon');
         ?>

     <h3 class="menu-cate-title text-left mt-3 mb-5 border-bottom border-dark pb-3"><?php echo $category_title?><br class="d-inline d-md-none"> <small class="d-md-inline d-block">
       <?php
             if( in_array( 'Add Icon', (array)get_sub_field('leaf_icon') ) ) {
             echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text ?><br class="d-inline d-md-none"><?php
             if( in_array( 'Add Icon', (array)get_sub_field('spicy_icon') ) ) {
             echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
       } ?> <?php echo $sub_text2 ?></small></h3>
   <?php endwhile; ?>
   <?php endif; ?>
     <div class="row">

       <div class="order-2 order-md-1 col-12 col-md-7">
       <?php if(have_rows('menu_names')): ?>
         <?php while(have_rows('menu_names')): the_row();
           // Vars
           $menu_name = get_sub_field('menu_name'); // Menu name
           $menu_desc = get_sub_field('menu_desc'); // Menu desc
           $menu_icons = get_sub_field('menu_icon'); // Menu icon
           $menu_price = get_sub_field('price'); // Menu price
           $menu_description = get_sub_field('menu_description'); // Menu Description
           $popularity = get_sub_field('popularity'); // popularity
           $menu_emphasis = get_sub_field('menu_emphasis'); // Menu Emphasis
         ?>
         <!--Menu Texts LOOP START-->
         <div class="row mt-3 mt-md-0">
           <div class="col-9">
             <h5><?php echo $menu_name ?>   <!-- Output Icons -->
               <?php
                     if( in_array( 'vegetables only', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>
               <?php
                     if( in_array( 'spicy', (array)get_sub_field('menu_icons') ) ) {
                     echo '<i class="fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
               } ?>            <!--START POPULARITY list -->
                       
                       <?php
                             if( in_array( '#1 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Top seller', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Top seller</span>';
                       } ?>
                       <?php
                             if( in_array( '#1 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-add-red text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#1 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#2 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-second text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#2 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#3 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-third text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#3 Most Popular</span>';
                       } ?>
                       <?php
                             if( in_array( '#4 Most Popular', (array)get_sub_field('popularity') ) ) {
                             echo '<span class="bg-fouth text-white pr-2 pl-2 pt-0 pb-1 h6 text-nowrap">#4 Most Popular</span>';
                       } ?>
           
                        <!--END POPULARITY list -->  </h5>
                       <p><?php echo $menu_description ?>
                       <span class="text-danger font-weight font-weight-bold d-block">
                         <?php echo $menu_emphasis ?>
                       </span>
                     </p>
           </div>
           <div class="col-3">
             <span class="h6 text-nowrap">$ <?php echo $menu_price ?></span>
           </div>
           </div>
         <?php endwhile; ?>
         <?php endif; ?>
   
         <?php if(empty($extra_topping_title)):?>
           <!--空欄だった場合-->
       <?php else:?>
           <!--値が有る場合-->
 <div class="border-black">
<div class="col-12 pt-3"><span class="h4 font-weight-normal"><?php echo $extra_topping_title ?></span></div>
<div class="row p-3">

<?php if(have_rows('extra_topping')): ?>
 <?php while(have_rows('extra_topping')): the_row();
   // Vars
   $topping_names = get_sub_field('topping_names'); // Menu Emphasis
   $price = get_sub_field('price'); // Menu Emphasis
   $menu_description = get_sub_field('menu_description'); // Menu Description
 ?>
 <div class="col-12 col-md-6">
   <div class="row mb-2">
     <div class="col-8 font-weight-bold"><?php echo $topping_names ?><p class="font-weight-normal"><?php echo $menu_description ?></p></div>
     <div class="col-4 text-right"><?php echo $price ?></div>
   </div>
 </div>
<?php endwhile; ?>
<?php endif; ?>

</div>         
</div>
<?php endif;?>

       </div>
       <div class="order-1 order-md-2 col-12 col-md-5 text-center mb-0 mb-md-3">
                         <?php if(have_rows('menu_images')): ?>
                             <?php while(have_rows('menu_images')): the_row();
                             // Vars
                             $menu_img = get_sub_field('image'); // Menu thumbnail
                             $menu_cap = get_sub_field('image_caption'); // Menu caption
                           ?>
                               <?php if($menu_img): ?>
                                 <!-- Output the image/image caption -->
                                 <img src="<?php echo $menu_img['url']; ?>" alt="<?php echo $menu_img['alt'] ?>" class="w-100 pb-2" />
                                 <p class="mb-2"><span class="font-weight-bold"><?php echo $menu_cap?></span></p>
                           <?php endif ?>
                             <?php endwhile; ?>
                           <?php endif ?>
                     </div>
       </div>
       <!--text3 & image1 LOOP END-->
     <?php endwhile; ?>
   <?php endif; ?>
<!--END menu31 左テキスト-->





 <!--START menu_group_beverages-->
   <div class="beverages_frame">
      <?php if(have_rows('menu_group_beverages')): ?>
        <?php while(have_rows('menu_group_beverages')): the_row();
          // Vars
          // Category Name
          $menu_category = get_sub_field('menu_category');
        ?>

      <h3 class="menu-cate-title text-left mt-3 mb-5 border-bottom border-dark pb-3"><?php echo $menu_category?></h3>
      <div class="row beverages_none">

        <div class="col-12 col-md-7">
        <?php if(have_rows('menu_group_beverages_sub')): ?>
          <?php while(have_rows('menu_group_beverages_sub')): the_row();
            // Vars
            $category_title = get_sub_field('category_title'); // Menu name
            $menu_name = get_sub_field('menu_names'); 

            
          ?>
          <h5><?php echo $category_title ?></h5>
          <div class="row mb-3">
            <?php if(have_rows('menu_names')): ?>
            <?php while(have_rows('menu_names')): the_row();
              // Vars
              $menu_price = get_sub_field('price'); // Menu price
              $menu_name = get_sub_field('menu_name'); 
              $menu_description = get_sub_field('menu_description'); // Menu Description

            ?>
          <!--Menu Texts LOOP START-->
          <div class="col-12 col-md-6">
              <div class="row">

                  <div class="col-8 font-weight-bold pb-1"><?php echo $menu_name ?><p class="font-weight-normal"><?php echo $menu_description ?></p></div>
                  <div class="col-4 text-right pb-1">$ <?php echo $menu_price ?></div>
              </div>
              </div>
          <?php endwhile; ?>
          <?php endif; ?>
          </div>
        <?php endwhile; ?>
        <?php endif; ?>
        </div>
        <div class="col-12 col-md-5 text-center mb-0 mb-md-3">
                          <?php if(have_rows('menu_images')): ?>
                              <?php while(have_rows('menu_images')): the_row();
                              // Vars
                              $menu_img = get_sub_field('image'); // Menu thumbnail
                              $menu_cap = get_sub_field('image_caption'); // Menu caption
                            ?>
                                <?php if($menu_img): ?>
                                  <!-- Output the image/image caption -->
                                  <img src="<?php echo $menu_img['url']; ?>" alt="<?php echo $menu_img['alt'] ?>" class="w-100 pb-2" />
                                  <p class="mb-2"><span class="font-weight-bold"><?php echo $menu_cap?></span></p>
                            <?php endif ?>
                              <?php endwhile; ?>
                            <?php endif ?>
                      </div>
        </div>
        <!--text3 & image1 LOOP END-->
      <?php endwhile; ?>
    <?php endif; ?>
    </div>
<!--END menu_group_beverages-->




</div>
</div>
</div>
</div>
