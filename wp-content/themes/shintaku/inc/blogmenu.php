<!-- /*USE for {index.php} and {archive.php}*/ -->

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