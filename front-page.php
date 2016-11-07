<?php get_header();?> <!--HEADER-->
    
    <!--Begin Banner-->
    <div id="banner">
        
        <img src="<?php bloginfo('template_directory'); ?>/images/main-logo.png" alt="main-logo">
        
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

                <a href=""><section>
                    <img src="<?php bloginfo('template_directory'); ?>/images/cta-recipies.png" alt="recipies">

                    <h2>Recipies</h2>
                </section></a>

                <a href=""><section>
                    <img src="<?php bloginfo('template_directory'); ?>/images/cta-gallery.png" alt="gallery">

                    <h2>Gallery</h2>
                </section></a>

                <a href=""><section>
                    <img src="<?php bloginfo('template_directory'); ?>/images/cta-contact.png" alt="contact">

                    <h2>Contact</h2>
                </section></a>
            
        </div>
        
            <?php
            // Get the last 2 posts.
            global $post;
            $args = array( 'posts_per_page' => 2 );
            $myposts = get_posts( $args );

            foreach( $myposts as $post ) :	setup_postdata($post); ?>
            <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2><br/>
            <?php the_excerpt(); ?>
            <?php endforeach; ?>
    </main>
    <!--End Main-->

<?php get_footer();?><!--FOOTER-->