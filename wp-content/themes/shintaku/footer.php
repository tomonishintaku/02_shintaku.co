<?php //breadcrumb(); ?>
<a href="#top" id="PageTop" class="page-top" ><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
    <div class="footer__inner">
        <nav class="navigation" role="navigation">
            <div class="row">
                <div class="col-12 col-lg-9">
                    <?php wp_nav_menu(array(
    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
    					'after' => '',                                  // after the menu
    					'l ink_before' => '',                            // before each link
    					'link_after' => '',                             // after each link
    					'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
                </div>
                <div class="col-12 col-lg-3">
                    <?php include TEMPLATEPATH . '/inc/sns.php'; ?><?php echo do_shortcode( '[bogo]' ); ?>
                </div>
            </div>
        </nav>
        <aside class="footer__biz-info">
<?php $locale = get_locale();
if ('en_US' == $locale ) { ?>
            <span class="d-block d-md-inline mr-0 mr-md-4"><i class="fas fa-yen-sign pr-1"></i> Flat Rate:
                <?php echo do_shortcode('[EN_hourly_fee num=null]'); ?>(1h)</span>
            <span class="d-block d-md-inline mr-0 mr-md-4"><i class="fa fa-clock" aria-hidden="true"></i> Business Hours:
                10:00am - 5:00pm(JST)(Closed on Saturday, Sundays, and Public Holidays)</span><i class="fa fa-envelope" aria-hidden="true"></i> Contact Us: <a
                href="mailto:info@shintaku.co">info@shintaku.co</a>
<?php } else { ?>
            <span class="d-block d-md-inline mr-0 mr-md-4"><i class="fas fa-yen-sign pr-1"></i> 料金一律:
                <?php echo do_shortcode('[JA_hourly_fee_sp]'); ?>(1h)</span>
            <span class="d-block d-md-inline mr-0 mr-md-4"><i class="fa fa-clock" aria-hidden="true"></i> 営業時間:
                10:00-17:00(土日祝休み)</span><i class="fa fa-envelope" aria-hidden="true"></i> お問い合わせ: <a
                href="mailto:info@shintaku.co">info@shintaku.co</a>
<?php } ?>
        </aside>
        <p class="source-org copyright">&copy;
            <!--2020- --><?php echo date('Y'); ?> SHINTAKU。All Rights Reserved.
        </p>
    </div>
</footer>
</div>
<?php // all js scripts are loaded in library/bones.php ?>
<?php wp_footer(); ?>


<script>
    // add top link button
    $(window).on("scroll", function() {
    var scrollHeight = $(document).height();
    var scrollPosition = $(window).height() + $(window).scrollTop();
    console.log(scrollPosition + ":" + scrollHeight);

    if (scrollPosition >= scrollHeight * 0.9) {
        $('#PageTop').addClass('is-show');
    } else {
        $('#PageTop').removeClass('is-show');
    }
});
    // add top link button END
</script>


</body>

</html> <!-- end of site. what a ride! -->