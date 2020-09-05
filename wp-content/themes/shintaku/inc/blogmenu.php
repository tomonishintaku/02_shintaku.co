<!-- /*USE for {index.php} and {archive.php}*/ -->

<section class="rotate-line">
    <div class="rotate-line__bg">
        <div class="rotate-line__title">
            <h1 class="page-title" itemprop="headline">
                <?php if( is_category( 29 ) ) : 
		echo $cat_name = get_the_category_by_ID( 29 ); 	  
 	elseif( is_category( 31 ) ) :

		echo $cat_name = get_the_category_by_ID( 31 );

	elseif( is_category( 27 ) ) :

                echo $cat_name = get_the_category_by_ID( 27 );
                
	elseif( is_category( 12 ) ) :
		
                echo $cat_name = get_the_category_by_ID( 12 );
        else :                
                echo 'ブログ';
        endif; ?>
            </h1>
        </div>
    </div>
</section>

<?php if( is_category( 29 ) ) : 
		$current_web = '-current';
 	  
 	elseif( is_category( 31 ) ) :

		$current_art = '-current';

	elseif( is_category( 27 ) ) :

		$current_work = '-current';

	elseif( is_category( 12 ) ) :
		
		$current_bookreview = '-current';

endif; ?>
<nav class="blog-category-nav">
    <ul class="row text-center">
        <li class="col-3 book-review<?php echo $current_bookreview ?>"><a
                href="/blog/category/book-review/"><?php echo $cat_name = get_the_category_by_ID( 12 ); ?></a>
        </li>
        <li class="col-3 art<?php echo $current_art ?>"><a
                href="/blog/category/art/"><?php echo $cat_name = get_the_category_by_ID( 31 ); ?></a>
        </li>
        <li class="col-3 work<?php echo $current_work ?>"><a
                href="/blog/category/work/"><?php echo $cat_name = get_the_category_by_ID( 27 ); ?></a>
        </li>
        <li class="col-3 web<?php echo $current_web ?>"><a
                href="/blog/category/web/"><?php echo $current_cat_name = get_the_category_by_ID( 29 ); ?></a>
        </li>
    </ul>
</nav>