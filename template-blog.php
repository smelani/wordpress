<?php /* Template Name: Blog Template */ ?> 

<?php get_header();?><!--HEADER-->

<!--Begin Main-->
     <main>
    
        <div id="content">

            <!-- the loop -->
            <?php if(have_posts()) : while(have_posts()): the_post();?>

            <h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
            <?php the_content(''); ?>

        
            <?php endwhile; else: ?>
            <p><?php ('Sorry no posts match your criteria');?></p>
            <?php endif;?>
            <!--end the loop-->
        
            
            <!-- Get the posts for the page based on category-->
            <?php
                if (is_page()) {
                  $cat=get_cat_ID($post->post_title); //use page title to get a category ID
                  $posts = get_posts ("cat=$cat&showposts=5");
                  if ($posts) {
                    foreach ($posts as $post):
                      setup_postdata($post); ?>
                      <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                      <?php the_post_thumbnail(); ?>
                      <?php the_excerpt(); ?>
                    <?php endforeach;
                  }
                }
            ?>
            
        </div>
        
        <?php get_sidebar();?><!--SIDEBAR-->
         
    </main>
    <!--End Main-->

<?php get_footer();?><!--FOOTER-->