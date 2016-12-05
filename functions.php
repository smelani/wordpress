<?php 


register_nav_menu("main_menu","Main Menu");


add_theme_support('post-thumbnails');
add_image_size('blog-thumb', 250, 150, false);

add_action('widgets_init', 'my_sidebar');

    function my_sidebar(){
    /* register primary sidebar */
    
        register_sidebar(
    
            array(
                'id'=> 'sb-primary',
                'name' => ('Primary'),
                'description' => ('This is the primary sidebar'),
                'before_widget' => '<div id="%1$s" class="widget%2$4">',
                'after_widget' => '</div>',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>'
                
            )
    
    ); 
    
}

?>