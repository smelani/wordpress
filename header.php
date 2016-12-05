<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    
    <meta charset="<?php bloginfo('charset');?>"/>
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width"/>
    
    <title><?php bloginfo('name');?><?php wp_title();?></title>
    
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url');?>"/>
    
    <?php wp_head();?> <!--NEEDED FOR SCRIPTS-->
    
    
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Cedarville+Cursive" rel="stylesheet">
    
    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/bf85faea57.js"></script>
    
    <!-- jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    
    <!-- Flexslider css and js -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/flexslider.css" type="text/css">
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.flexslider.js"></script>
    
    <!-- Flexslider Call -->
    <script type="text/javascript" charset="utf-8">
        $(window).load(function() {
            $('.flexslider').flexslider();
        });
    </script>
    
    <!--Toggle nav js-->
    <script src="<?php bloginfo('template_directory'); ?>/js/toggle-nav.js"></script>
    
</head>
<body <?php body_class();?>>
    
    <!--Begin Header-->
    <header>
        <div id="header-content">
            
            <!-- Menu button of mobil-->
            <a href="#" id="menu-icon"><span>&#8801;</span></a>
            
            <nav id="main_menu" class="mobile-menu">
                <?php wp_nav_menu($mainMenu); ?>
            </nav>
            <a href="<?php echo get_option('home')?>"><img src="
                <?php bloginfo('template_directory'); ?>/images/header-logo.png" alt="header-logo"></a>
        </div>
    </header>
    <!--End Header-->
        
    <!--Begin Social-->
    <div id="header-social">
        <section id="social">
            <a href=""><img src="<?php bloginfo('template_directory'); ?>/images/fb-icon.png" alt="facebook"></a>
            <a href=""><img src="<?php bloginfo('template_directory'); ?>/images/insta-icon.png" alt="instagram"></a>
            <a href=""><img src="<?php bloginfo('template_directory'); ?>/images/tweet-icon.png" alt="twitter"></a>
            <a href=""><img src="<?php bloginfo('template_directory'); ?>/images/linked-icon.png" alt="linkedin"></a>
         </section>
    </div>
    <!--End Social-->
    
   
    