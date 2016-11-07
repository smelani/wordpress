<!--Begin Footer-->
    <footer>
        <div id="footer-content">
            
            <img src="<?php bloginfo('template_directory'); ?>/images/main-logo.png" alt="logo">

            <section id="social-footer">
                    <a href=""><img src="<?php bloginfo('template_directory'); ?>/images/fb-icon.png" alt="facebook"></a>
                    <a href=""><img src="<?php bloginfo('template_directory'); ?>/images/insta-icon.png" alt="instagram"></a>
                    <a href=""><img src="<?php bloginfo('template_directory'); ?>/images/tweet-icon.png" alt="twitter"></a>
                    <a href=""><img src="<?php bloginfo('template_directory'); ?>/images/linked-icon.png" alt="linkedin"></a>
            </section>

            <nav id="main_menu">
                <?php wp_nav_menu($mainMenu); ?>
            </nav>
            
        </div>
    </footer>
    <?php wp_footer();?>
    <!--End Footer-->
</body>
</html>