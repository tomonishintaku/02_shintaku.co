    <!doctype html>
    <!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
    <!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
    <!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->

    <!--[if gt IE 8]><!-->

    <html <?php language_attributes(); ?> class="no-js">

    <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <?php wp_head(); ?>
        <meta name="viewport" content="width=device-width" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="apple-touch-icon"
            href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
        <link href="https://fonts.googleapis.com/css?family=Sawarabi+Mincho" rel="stylesheet">
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
        <!--[if IE]>
    			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    	<![endif]-->
        <?php // or, set /favicon.ico for IE10 win ?>
        <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/library/css/all.min.css' />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-168564223-1"></script>
        <script>
        document.addEventListener( 'wpcf7mailsent', function( event ) {
            ga('send', 'event', 'Contact Form', 'submit');
        }, false );
        </script>
        <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-168564223-1');
        </script>
    </head>

    <body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage" id="top">
        <div id="container">
            <header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
                <div id="inner-header" class="wrap cf">
                    <div class="row">
                        <div class="col-12 col-lg-3">
                            <p id="logo" class="header__logo" itemscope itemtype="http://schema.org/Organization">
                                <a href="<?php echo home_url(); ?>" rel="nofollow">
                                    <img src="<?php echo get_template_directory_uri(); ?>/library/images/common/web-design-shintaku-logo.png"
                                        alt="<?php bloginfo('name'); ?>" class="header__logo__image">
                                </a>
                            </p>
                        </div>
                        <div class="col-12 col-md-9">
                            <nav class="menu global-nav navigation" role="navigation" itemscope
                                itemtype="http://schema.org/SiteNavigationElement">
                                <div class="row">
                                    <div class="col-12 col-lg-9">
                                        <?php wp_nav_menu(array(

        					         'container' => false,                           // remove nav container
        					         'container_class' => 'menu cf',                 // class of container (should you choose to use it)
        					         'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
        					         'menu_class' => 'nav top-nav cf',               // adding custom nav class
        					         'theme_location' => 'main-nav',                 // where it's located in the theme
        					         'before' => '',                                 // before the menu
            			             'after' => '',                                  // after the menu
            			             'link_before' => '',                            // before each link
            			             'link_after' => '',                             // after each link
            			             'depth' => 0,                                   // limit the depth of the nav
        					         'fallback_cb' => ''                             // fallback function (if there is one)
                            )); ?>
                                    </div>
                                    <div class="d-md-none d-block">
                                        <aside class='header__biz-info'>

                <?php $locale = get_locale();
                if ('en_US' == $locale ) { ?>
                        <span class="d-block d-md-inline mr-0 mr-md-4"><i class="fas fa-yen-sign pr-1"></i> Fee: <?php echo do_shortcode('[EN_hourly_fee num=null]'); ?>(1h)</span>
                        <span class="d-block d-md-inline mr-0 mr-md-4"><i class="fa fa-clock" aria-hidden="true"></i> Open:
                            10:00am-5:00pm(JST)<br>(Closed on Sat, Sun, PH)</span><i class="fa fa-envelope" aria-hidden="true"></i> Contact Us: <a
                            href="mailto:info@shintaku.co">info@shintaku.co</a>
                    <?php } else { ?>
                            <span class="d-block"><i class="fas fa-yen-sign pr-1"></i> 料金一律:
                                <?php echo do_shortcode('[JA_hourly_fee_sp]'); ?>(1h)</span>
                            <span class="d-block"><i class="fa fa-clock" aria-hidden="true"></i> 営業時間:
                                10:00-17:00(土日祝休み)</span><i class="fa fa-envelope"
                                aria-hidden="true"></i> お問い合わせ: <a
                                href="mailto:info@shintaku.co">info@shintaku.co</a>
                    <?php } ?>               
                                        </aside>
                                    </div>
                                    <div class="col-12 col-lg-3">
                                        <?php include TEMPLATEPATH . '/inc/sns.php'; ?><?php echo do_shortcode( '[bogo]' ); ?>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div><!-- HUMBURGER menu  -->

                    <?php /*parts: (1) {_mobile-menu.scss}, (2) "HUMBURGER menu" section in {scripts.js}, (3) "HUMBURGER menu" section in {header.php}  */ ?>

                    <div class="hamburger" id="js-hamburger">
                        <span class="hamburger__line hamburger__line--1"></span>
                        <span class="hamburger__line hamburger__line--2"></span>
                        <span class="hamburger__line hamburger__line--3"></span>
                    </div>
                    <div class="black-bg" id="js-black-bg"></div>
                    <!-- HUMBURGER menu  END-->

                    <!-- search-window for blog-->
                    <section class="search-window">
                        <div class="modal-button">
                            <a class="js-modal-open" href=""><i class="fas fa-search"></i></a>
                        </div>
                        <div class="modal js-modal">
                            <div class="modal__bg js-modal-close"></div>
                            <div class="modal__content">
                                <p><?php get_search_form(); ?></p>
                                <a class="js-modal-close" href=""><i class="fas fa-times"></i></a>
                            </div>
                            <!--modal__inner-->
                        </div>
                        <!--modal-->
                    </section><!-- search-window for blog END-->
                </div>
            </header>