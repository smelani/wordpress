<?php get_header(); ?><!--HEADER-->

    <!--Begin Main-->
    <main>

        <div id="content">
            
            <!-- the loop -->
            <?php if(have_posts()):while(have_posts()):the_post();?>
            <article class="full-post">

                <h1><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h1>
                
                <?php the_post_thumbnail(); ?>
                
                <div class="full-content">
                    
                    <?php the_content();?>
                    
                    <p>Listed in <?php the_category(",");?></p>
                    <?php if(get_the_tags()):?>
                        <p><?php the_tags(); ?></p>
                    <?php endif; ?>

                    <?php comments_number("0 comments", "1 comment", "% comments");?>

                    <?php comments_template();?>

                    <ul class="postnav">
                        <?php previous_post_link("<li class='prev'>%link</li>", "&lt; previous");?>
                        <?php next_post_link("<li class='next'>%link</li>", "next &gt;");?>
                    </ul>

                </div>

            </article>
            <?php endwhile; else: ?>
                <p>Sorry, no posts</p>
            <?php endif; ?>
            <!--end the loop-->
        </div>

        <?php get_sidebar();?><!--SIDEBAR-->

    </main>
    <!--End Main-->

<?php get_footer(); ?><!--FOOTER-->