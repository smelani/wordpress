<?php get_header();?> <!--HEADER-->
    
    <!--Begin Banner-->
    <div id="banner" class="flexslider">
        
      <img class="main-logo" src="<?php bloginfo('template_directory'); ?>/images/main-logo.png" alt="main-logo">

      <ul class="slides">
        <li>
          <img src="<?php bloginfo('template_directory'); ?>/images/breakfast-main.jpg">
        </li>
        <li>
          <img src="<?php bloginfo('template_directory'); ?>/images/eggs-main.jpg">
        </li>
        <li>
          <img src="<?php bloginfo('template_directory'); ?>/images/burger-main.jpg">
        </li>
      </ul>
        
    </div>
    <!--End Banner-->
    
    <!--Begin Main-->
    <main>
        
        <!-- the loop -->
        <? if(have_posts()) : while(have_posts()): the_post();?>
        <div class="entry">
            
            <?php the_content(''); ?>
            
        <?php endwhile; else: ?>
        <p><?php ('Sorry no posts match your criteria');?></p>
        <?php endif;?>
        <!--end the loop-->
            
        </div>
        
        <div id="home-ctas">
                <a href="http://sethjamesdesign.com/wordpress/blog/"><section>
                    <img src="<?php bloginfo('template_directory'); ?>/images/cta-blog.png" alt="blog">

                    <h2>Blog</h2>
                </section></a>

                <a href="http://sethjamesdesign.com/wordpress/recipes/"><section>
                    <img src="<?php bloginfo('template_directory'); ?>/images/cta-recipies.png" alt="recipies">

                    <h2>Recipies</h2>
                </section></a>

                <a href="http://sethjamesdesign.com/wordpress/gallery/"><section>
                    <img src="<?php bloginfo('template_directory'); ?>/images/cta-gallery.png" alt="gallery">

                    <h2>Gallery</h2>
                </section></a>

                <a href="http://sethjamesdesign.com/wordpress/contact/"><section>
                    <img src="<?php bloginfo('template_directory'); ?>/images/cta-contact.png" alt="contact">

                    <h2>Contact</h2>
                </section></a>
            
        </div>
        <div id="frontpage-posts">    
            <!--Get the latest three posts-->
            <?php
            global $post;
            $args = array( 'posts_per_page' => 3 );
            $myposts = get_posts( $args );

            foreach( $myposts as $post ) :	setup_postdata($post); ?>
            <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
            <?php the_post_thumbnail('blog-thumb'); ?>
            <?php the_excerpt(); ?>
            <?php endforeach; ?>
        </div>
    </main>
    <!--End Main-->

<?php get_footer();?><!--FOOTER-->