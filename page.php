<?php get_header();?> <!--HEADER-->

     <!--Begin Main-->
     <main>
        
        <div id="content">

            <!-- the loop -->
            <? if(have_posts()) : while(have_posts()): the_post();?>
            <div class="entry">

                <h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>

                <?php the_content(''); ?>


            </div>
            
                <?php endwhile; else: ?>
                <p><?php ('Sorry no posts match your criteria');?></p>
                <?php endif;?>
                <!--end the loop-->
            
        </div>
        <?php get_sidebar();?>
    </main>
    <!--End Main-->
    
<?php get_footer();?><!--FOOTER-->