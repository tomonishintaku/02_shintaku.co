
<style type="text/css">
  h1.entry-title {
    display: none;
  }

  .page-title__name {
    text-align: center;
  }
</style>
                
                     <!--START 1-top-menu-->
                      <div class="row pl-3 pr-3">
                     <?php if(have_rows('1_top_menu_1')): ?>
                     <?php while(have_rows('1_top_menu_1')): the_row();
                     $menu_images = get_sub_field('menu_images');
                     ?>
                     <div class="col-12 col-md-6 p-2 mb-md-4 pb-md-4 mt-md-3">
                     <div class="border-black p-2 line-2">
                     <div class="row pl-3 pr-3 text-left">
                                       <div class="row">
                                     <div class="col-12 col-md-6 pr-md-0 mb-2 mb-md-0">
                                       <?php if(have_rows('menu_images')): ?>
                                           <?php while(have_rows('menu_images')): the_row();
                                           // Vars
                                           $menu_img = get_sub_field('image'); // Menu thumbnail
                                           $menu_cap = get_sub_field('image_caption'); // Menu caption
                                         ?>
                                             <?php if($menu_img): ?>
                                               <!-- Output the image/image caption -->
                                               <img src="<?php echo $menu_img['url']; ?>" alt="<?php echo $menu_img['alt'] ?>" class="w-100" />
                                         <?php endif ?>
                                           <?php endwhile; ?>
                                         <?php endif ?>
                                       </div>
                                     <div class="col-12 col-md-6 pt-2">
                                       <?php if(have_rows('menu_names')): ?>
                                         <?php while(have_rows('menu_names')): the_row();
                                           // Vars
                                           $menu_name = get_sub_field('menu_name'); // Menu name
                                           $menu_price = get_sub_field('price'); // Menu price
                                           $menu_description = get_sub_field('menu_description'); // Menu Description
                                           $menu_emphasis = get_sub_field('menu_emphasis'); // Menu Emphasis
                                           $tag = get_sub_field('tag'); // popularity
                                           $recommended_toppings = get_sub_field('recommended_toppings');
                                           $menu_icons = get_sub_field('menu_icons'); // Menu icon
                                         ?>
                                         <?php if(empty($tag)):?>
                                           <!--空欄だった場合-->
                                       <?php else:?>
                                           <!--値が有る場合-->
                                         <span class="bg-second text-white p-2 h6 text-nowrap"><?php echo $tag ?></span>
                                       <?php endif; ?>
                                         <h4 class="mt-2"><?php echo $menu_name ?>               <?php
                                                              if( in_array( 'vegetables only', (array)get_sub_field('menu_icons') ) ) {
                                                              echo '<i class="h6 fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
                                                        } ?>
                                                        <?php
                                                              if( in_array( 'spicy', (array)get_sub_field('menu_icons') ) ) {
                                                              echo '<i class="h6 fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
                                                        } ?></h4>
                                         <span class="h4 font-weight-normal">$<?php echo $menu_price ?></span>
                                         <p><?php echo $menu_description ?></p>
                                         <p class="font-weight-bold"><?php echo $recommended_toppings ?></p>
                                         <?php if(empty($menu_emphasis)):?>
                                           <!--空欄だった場合-->
                                       <?php else:?>
                                           <!--値が有る場合-->
                                         <p class="border border-danger text-danger font-weight-bold p-2 mb-0"><?php echo $menu_emphasis ?></p>
                                       <?php endif ?>
                                       </div>
                                 </div>
                             </div>
                      </div>
                      </div>
                     <?php endwhile; ?>
                     <?php endif; ?>
                     <?php endwhile; ?>
                     <?php endif; ?>
                     
                     <?php if(have_rows('1_top_menu_2')): ?>
                     <?php while(have_rows('1_top_menu_2')): the_row();
                     $menu_images = get_sub_field('menu_images');
                     ?>
                     <div class="col-12 col-md-6 p-2 mb-md-4 pb-md-4 mt-md-3">
                     <div class="border-black p-2 line-2">
                     <div class="row pl-3 pr-3 text-left">
                                         <div class="row">
                                       <div class="col-12 col-md-6 pr-md-0 mb-2 mb-md-0">
                                         <?php if(have_rows('menu_images')): ?>
                                             <?php while(have_rows('menu_images')): the_row();
                                             // Vars
                                             $menu_img = get_sub_field('image'); // Menu thumbnail
                                             $menu_cap = get_sub_field('image_caption'); // Menu caption
                                           ?>
                                               <?php if($menu_img): ?>
                                                 <!-- Output the image/image caption -->
                                                 <img src="<?php echo $menu_img['url']; ?>" alt="<?php echo $menu_img['alt'] ?>" class="w-100" />
                                           <?php endif ?>
                                             <?php endwhile; ?>
                                           <?php endif ?>
                                         </div>
                                         
                                         
                                       <div class="col-12 col-md-6 pt-2">
                                         <?php if(have_rows('menu_names')): ?>
                                           <?php while(have_rows('menu_names')): the_row();
                                             // Vars
                                             $menu_name = get_sub_field('menu_name'); // Menu name
                                             $menu_price = get_sub_field('price'); // Menu price
                                             $menu_description = get_sub_field('menu_description'); // Menu Description
                                             $menu_emphasis = get_sub_field('menu_emphasis'); // Menu Emphasis
                                             $tag = get_sub_field('tag'); // popularity
                                             $recommended_toppings = get_sub_field('recommended_toppings');
                                             $menu_icons = get_sub_field('menu_icons'); // Menu icon  
                                           ?>
                                           <?php if(empty($tag)):?>
                                             <!--空欄だった場合-->
                                         <?php else:?>
                                             <!--値が有る場合-->
                                        <span class="bg-second text-white p-2 h6 text-nowrap"><?php echo $tag ?></span>               
                                      <?php endif; ?>
                                         <?php
                                              if( in_array( 'Vegan Ramen', (array)get_sub_field('category') ) ) {
                                              echo '<span class="bg-add-green text-white p-2 h6">Vegan Ramen</span>';
                                        } ?>
                                        <?php
                                             if( in_array( 'Appetizer', (array)get_sub_field('category') ) ) {
                                             echo '<span class="bg-add-purple text-white p-2 h6">Appetizer</span>';
                                       } ?>
                                       <?php
                                            if( in_array( 'Specialty', (array)get_sub_field('category') ) ) {
                                            echo '<span class="bg-add-orange text-white p-2 h6">Specialty</span>';
                                      } ?>
                                      <?php
                                           if( in_array( 'Rice bowl', (array)get_sub_field('category') ) ) {
                                           echo '<span class="bg-add-gray text-white p-2 h6">Rice bowl</span>';
                                     } ?>
                                           <h4 class="mt-2"><?php echo $menu_name ?>               <?php
                                                                if( in_array( 'vegetables only', (array)get_sub_field('menu_icons') ) ) {
                                                                echo '<i class="h6 fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
                                                          } ?>
                                                          <?php
                                                                if( in_array( 'spicy', (array)get_sub_field('menu_icons') ) ) {
                                                                echo '<i class="h6 fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
                                                          } ?></h4>
                                           <span class="h4 font-weight-normal">$<?php echo $menu_price ?></span>
                                           <p><?php echo $menu_description ?></p>
                                           <p class="font-weight-bold"><?php echo $recommended_toppings ?></p>
                                           <?php if(empty($menu_emphasis)):?>
                                             <!--空欄だった場合-->
                                         <?php else:?>
                                             <!--値が有る場合-->
                                           <p class="border border-danger text-danger font-weight-bold p-2 mb-0"><?php echo $menu_emphasis ?></p>
                                         <?php endif; ?>
                                         </div>
                                   </div>
                               </div>
                        </div>
                        </div>
                     <?php endwhile; ?>
                     <?php endif; ?>
                     <?php endwhile; ?>
                     <?php endif; ?>
                     
          
                     <!--END 1-top -menu-->
                    
               
<!--START 2-middle-menu-->

<?php if(have_rows('2_middle_menu_1')): ?>
  <?php while(have_rows('2_middle_menu_1')): the_row();
    $menu_images = get_sub_field('menu_images');
  ?>
      <div class="col-12 col-md-6 p-2 mb-md-4 pb-md-4 mt-md-3">
    <div class="border-black p-2 line-2">
    <div class="row pl-3 pr-3 text-left">
                                 <div class="row">
                               <div class="col-12 col-md-6 pr-md-0 mb-2 mb-md-0">
                                 <?php if(have_rows('menu_images')): ?>
                                     <?php while(have_rows('menu_images')): the_row();
                                     // Vars
                                     $menu_img = get_sub_field('image'); // Menu thumbnail
                                     $menu_cap = get_sub_field('image_caption'); // Menu caption
                                   ?>
                                       <?php if($menu_img): ?>
                                         <!-- Output the image/image caption -->
                                         <img src="<?php echo $menu_img['url']; ?>" alt="<?php echo $menu_img['alt'] ?>" class="w-100" />
                                   <?php endif ?>
                                     <?php endwhile; ?>
                                   <?php endif ?>
                                 </div>
                                 
                                 
                               <div class="col-12 col-md-6 pt-2">
                                 <?php if(have_rows('menu_names')): ?>
                                   <?php while(have_rows('menu_names')): the_row();
                                     // Vars
                                     $menu_name = get_sub_field('menu_name'); // Menu name
                                     $menu_price = get_sub_field('price'); // Menu price
                                     $menu_description = get_sub_field('menu_description'); // Menu Description
                                     $menu_emphasis = get_sub_field('menu_emphasis'); // Menu Emphasis
                                     $tag = get_sub_field('tag'); // popularity
                                     $recommended_toppings = get_sub_field('recommended_toppings');
                                     $menu_icons = get_sub_field('menu_icons'); // Menu icon
                                   ?>                                 
                                   <?php if(empty($tag)):?>
                                     <!--空欄だった場合-->
                                 <?php else:?>
                                     <!--値が有る場合-->
<span class="bg-second text-white p-2 h6 text-nowrap"><?php echo $tag ?></span>
<?php endif;?>
                                   <h4 class="mt-2"><?php echo $menu_name ?>               <?php
                                                        if( in_array( 'vegetables only', (array)get_sub_field('menu_icons') ) ) {
                                                        echo '<i class="h6 fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
                                                  } ?>
                                                  <?php
                                                        if( in_array( 'spicy', (array)get_sub_field('menu_icons') ) ) {
                                                        echo '<i class="h6 fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
                                                  } ?></h4>
                                   <span class="h4 font-weight-normal">$<?php echo $menu_price ?></span>
                                   <p><?php echo $menu_description ?></p>
                                   <p class="font-weight-bold"><?php echo $recommended_toppings ?></p>
                                   <?php if(empty($menu_emphasis)):?>
                                     <!--空欄だった場合-->
                                 <?php else:?>
                                     <!--値が有る場合-->
                                   <p class="border border-danger text-danger font-weight-bold p-2 mb-0"><?php echo $menu_emphasis ?></p>
                                 <?php endif;?>
                                 </div>
                           </div>
                       </div>
                </div>
                </div>
       <?php endwhile; ?>
       <?php endif; ?>
       <?php endwhile; ?>
       <?php endif; ?>
  
  <?php if(have_rows('2_middle_menu_2')): ?>
    <?php while(have_rows('2_middle_menu_2')): the_row();
      $menu_images = get_sub_field('menu_images');
    ?>
        <div class="col-12 col-md-6 p-2 mb-md-4 pb-md-4 mt-md-3">
      <div class="border-black p-2 line-2">
      <div class="row pl-3 pr-3 text-left">
                                   <div class="row">
                                 <div class="col-12 col-md-6 pr-md-0 mb-2 mb-md-0">
                                   <?php if(have_rows('menu_images')): ?>
                                       <?php while(have_rows('menu_images')): the_row();
                                       // Vars
                                       $menu_img = get_sub_field('image'); // Menu thumbnail
                                       $menu_cap = get_sub_field('image_caption'); // Menu caption
                                     ?>
                                         <?php if($menu_img): ?>
                                           <!-- Output the image/image caption -->
                                           <img src="<?php echo $menu_img['url']; ?>" alt="<?php echo $menu_img['alt'] ?>" class="w-100" />
                                     <?php endif ?>
                                       <?php endwhile; ?>
                                     <?php endif ?>
                                   </div>
                                   
                                   
                                 <div class="col-12 col-md-6 pt-2">
                                   <?php if(have_rows('menu_names')): ?>
                                     <?php while(have_rows('menu_names')): the_row();
                                       // Vars
                                       $menu_name = get_sub_field('menu_name'); // Menu name
                                       $menu_price = get_sub_field('price'); // Menu price
                                       $menu_description = get_sub_field('menu_description'); // Menu Description
                                       $menu_emphasis = get_sub_field('menu_emphasis'); // Menu Emphasis
                                       $tag = get_sub_field('tag'); // popularity
                                       $recommended_toppings = get_sub_field('recommended_toppings');
                                       $menu_icons = get_sub_field('menu_icons'); // Menu icon  
                                     ?>
                                     <?php if(empty($tag)):?>
                                       <!--空欄だった場合-->
                                   <?php else:?>
                                       <!--値が有る場合-->                                 
                              <span class="bg-second text-white p-2 h6 text-nowrap"><?php echo $tag ?></span>
                            <?php endif; ?>
                                     <h4 class="mt-2"><?php echo $menu_name ?>               <?php
                                                          if( in_array( 'vegetables only', (array)get_sub_field('menu_icons') ) ) {
                                                          echo '<i class="h6 fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
                                                    } ?>
                                                    <?php
                                                          if( in_array( 'spicy', (array)get_sub_field('menu_icons') ) ) {
                                                          echo '<i class="h6 fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
                                                    } ?></h4>
                                     <span class="h4 font-weight-normal">$<?php echo $menu_price ?></span>
                                     <p><?php echo $menu_description ?></p>
                                     <p class="font-weight-bold"><?php echo $recommended_toppings ?></p>
                                     <?php if(empty($menu_emphasis)):?>
                                       <!--空欄だった場合-->
                                   <?php else:?>
                                       <!--値が有る場合-->
                                     <p class="border border-danger text-danger font-weight-bold p-2 mb-0"><?php echo $menu_emphasis ?></p>
                                   <?php endif;?>
                                   </div>
                             </div>
                         </div>
                  </div>
                  </div>
         <?php endwhile; ?>
         <?php endif; ?>
         <?php endwhile; ?>
         <?php endif; ?>
  
              </div>
    </div>
<!--END 2-middle-menu-->

         
    
         
  
         
<!--START 3-bottom-menu-->
  <div class="row pl-3 pr-3 text-left">

<?php if(have_rows('3_bottom_menu_1')): ?>
  <?php while(have_rows('3_bottom_menu_1')): the_row();
    $menu_images = get_sub_field('menu_images');
  ?>
           <div class="col-12 col-md-4 p-2 mb-2">
               <div class="border-black p-2 line-3">
                   <div class="row">
                       <div class="col-12 col-md-6 pr-md-0 mb-2 mb-md-0">
                         <?php if(have_rows('menu_images')): ?>
                             <?php while(have_rows('menu_images')): the_row();
                             // Vars
                             $menu_img = get_sub_field('image'); // Menu thumbnail
                             $menu_cap = get_sub_field('image_caption'); // Menu caption
                           ?>
                               <?php if($menu_img): ?>
                                 <!-- Output the image/image caption -->
                                 <img src="<?php echo $menu_img['url']; ?>" alt="<?php echo $menu_img['alt'] ?>" class="w-100" />
                           <?php endif ?>
                             <?php endwhile; ?>
                           <?php endif ?>
                       </div>
                       
                       <?php if(have_rows('menu_names')): ?>
                         <?php while(have_rows('menu_names')): the_row();
                           // Vars
                           $menu_name = get_sub_field('menu_name'); // Menu name
                           $menu_price = get_sub_field('price'); // Menu price
                           $menu_description = get_sub_field('menu_description'); // Menu Description
                           $menu_emphasis = get_sub_field('menu_emphasis'); // Menu Emphasis
                           $tag = get_sub_field('tag'); // popularity
                           $menu_icons = get_sub_field('menu_icons'); // Menu icon
                         ?>   
                       <div class="col-12 col-md-6 pt-2">
                         <?php if(empty($tag)):?>
                           <!--空欄だった場合-->
                       <?php else:?>
                           <!--値が有る場合-->
<span class="bg-second text-white p-2 h6 text-nowrap"><?php echo $tag ?></span>
<?php endif; ?>
                           <h4 class="mt-2"><?php echo $menu_name ?><?php
      if( in_array( 'vegetables only', (array)get_sub_field('menu_icons') ) ) {
      echo '<i class="h6 fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
} ?>
<?php
      if( in_array( 'spicy', (array)get_sub_field('menu_icons') ) ) {
      echo '<i class="h6 fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
} ?></h4>
                           <span class="h4 font-weight-normal">$<?php echo $menu_price ?></span>
                           <p><?php echo $menu_description ?></p>
                           <p class="font-weight-bold mb-0"><?php echo $menu_emphasis ?></p></div>                           
                           
                   </div>
               </div>
           </div>
         <?php endwhile; ?>
         <?php endif; ?>
         <?php endwhile; ?>
         <?php endif; ?>
    
         
         <?php if(have_rows('3_bottom_menu_second')): ?>
           <?php while(have_rows('3_bottom_menu_second')): the_row();
             $menu_images = get_sub_field('menu_images');
           ?>
                    <div class="col-12 col-md-4 p-2 mb-2">
                        <div class="border-black p-2 line-3">
                            <div class="row">
                                <div class="col-12 col-md-6 pr-md-0 mb-2 mb-md-0">
                                  <?php if(have_rows('menu_images')): ?>
                                      <?php while(have_rows('menu_images')): the_row();
                                      // Vars
                                      $menu_img = get_sub_field('image'); // Menu thumbnail
                                      $menu_cap = get_sub_field('image_caption'); // Menu caption
                                    ?>
                                        <?php if($menu_img): ?>
                                          <!-- Output the image/image caption -->
                                          <img src="<?php echo $menu_img['url']; ?>" alt="<?php echo $menu_img['alt'] ?>" class="w-100" />
                                    <?php endif ?>
                                      <?php endwhile; ?>
                                    <?php endif ?>
                                </div>
                                
                                <?php if(have_rows('menu_names')): ?>
                                  <?php while(have_rows('menu_names')): the_row();
                                    // Vars
                                    $menu_name = get_sub_field('menu_name'); // Menu name
                                    $menu_price = get_sub_field('price'); // Menu price
                                    $menu_description = get_sub_field('menu_description'); // Menu Description
                                    $menu_emphasis = get_sub_field('menu_emphasis'); // Menu Emphasis
                                    $tag = get_sub_field('tag'); // popularity
                                    $menu_icons = get_sub_field('menu_icons'); // Menu icon
                                  ?>   
                                <div class="col-12 col-md-6 pt-2">
                                  <?php if(empty($tag)):?>
                                    <!--空欄だった場合-->
                                <?php else:?>
                                    <!--値が有る場合-->
<span class="bg-second text-white p-2 h6 text-nowrap"><?php echo $tag ?></span>
<?php endif; ?>
                                    <h4 class="mt-2"><?php echo $menu_name ?><?php
      if( in_array( 'vegetables only', (array)get_sub_field('menu_icons') ) ) {
      echo '<i class="h6 fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
} ?>
<?php
      if( in_array( 'spicy', (array)get_sub_field('menu_icons') ) ) {
      echo '<i class="h6 fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
} ?></h4>
                                    <span class="h4 font-weight-normal">$<?php echo $menu_price ?></span>
                                    <p><?php echo $menu_description ?></p>
                                    <p class="font-weight-bold mb-0"><?php echo $menu_emphasis ?></p></div>                           
                                    
                            </div>
                        </div>
                    </div>
                  <?php endwhile; ?>
                  <?php endif; ?>
                  <?php endwhile; ?>
                  <?php endif; ?>
                           
                           
                           <?php if(have_rows('3_bottom_menu_3')): ?>
                             <?php while(have_rows('3_bottom_menu_3')): the_row();
                               $menu_images = get_sub_field('menu_images');
                             ?>
                                      <div class="col-12 col-md-4 p-2 mb-2">
                                          <div class="border-black p-2 line-3">
                                              <div class="row">
                                                  <div class="col-12 col-md-6 pr-md-0 mb-2 mb-md-0">
                                                    <?php if(have_rows('menu_images')): ?>
                                                        <?php while(have_rows('menu_images')): the_row();
                                                        // Vars
                                                        $menu_img = get_sub_field('image'); // Menu thumbnail
                                                        $menu_cap = get_sub_field('image_caption'); // Menu caption
                                                      ?>
                                                          <?php if($menu_img): ?>
                                                            <!-- Output the image/image caption -->
                                                            <img src="<?php echo $menu_img['url']; ?>" alt="<?php echo $menu_img['alt'] ?>" class="w-100" />
                                                      <?php endif ?>
                                                        <?php endwhile; ?>
                                                      <?php endif ?>
                                                  </div>
                                                  
                                                  <?php if(have_rows('menu_names')): ?>
                                                    <?php while(have_rows('menu_names')): the_row();
                                                      // Vars
                                                      $menu_name = get_sub_field('menu_name'); // Menu name
                                                      $menu_price = get_sub_field('price'); // Menu price
                                                      $menu_description = get_sub_field('menu_description'); // Menu Description
                                                      $menu_emphasis = get_sub_field('menu_emphasis'); // Menu Emphasis
                                                      $tag = get_sub_field('tag'); // popularity
                                                      $menu_icons = get_sub_field('menu_icons'); // Menu icon
                                                    ?>   
                                                  <div class="col-12 col-md-6 pt-2">
                                                    <?php if(empty($tag)):?>
                                                      <!--空欄だった場合-->
                                                  <?php else:?>
                                                      <!--値が有る場合-->  
                <span class="bg-second text-white p-2 h6 text-nowrap"><?php echo $tag ?></span>
              <?php endif; ?>
                                                      <h4 class="mt-2"><?php echo $menu_name ?>  <?php
      if( in_array( 'vegetables only', (array)get_sub_field('menu_icons') ) ) {
      echo '<i class="h6 fas fa-leaf text-add-green mt-2 mt-md-0 pl-0 pl-md-2"></i>';
} ?>
<?php
      if( in_array( 'spicy', (array)get_sub_field('menu_icons') ) ) {
      echo '<i class="h6 fas fa-pepper-hot text-add-red mt-2 mt-md-0 pl-0 pl-md-2"></i>';
} ?></h4>
                                                      <span class="h4 font-weight-normal">$<?php echo $menu_price ?></span>
                                                      <p><?php echo $menu_description ?></p>
                                                      <p class="font-weight-bold mb-0"><?php echo $menu_emphasis ?></p></div>                           
                                                      
                                              </div>
                                          </div>
                                      </div>
                                    <?php endwhile; ?>
                                    <?php endif; ?>
                                    <?php endwhile; ?>
                                    <?php endif; ?> 
                           
           <!--END 3-bottom-menu-->
</div>


  