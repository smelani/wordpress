<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    
    <meta charset="<?php bloginfo('charset');?>"/>
    
    <title><?php bloginfo('name');?><?php wp_title();?></title>
    
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url');?>"/>
    
    <?php wp_head();?> <!--NEEDED FOR SCRIPTS-->
    
    
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Cedarville+Cursive" rel="stylesheet">
    
    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/bf85faea57.js"></script>
    
</head>
<body <?php body_class();?>>
    
    <!--Begin Header-->
    <header>
        <div id="header-content">
            <nav id="main_menu">
                <?php wp_nav_menu($mainMenu); ?>
            </nav>
            <h1><a href="<?php echo get_option('home')?>"><img src="
                <?php bloginfo('template_directory'); ?>/images/header-logo.png" alt="header-logo"></a></h1>
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
    
   
    