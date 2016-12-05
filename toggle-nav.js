//make sure page is ready
$(function(){ 

    //get menu icon element 
    $('#menu-icon').click(function(){
        
    //on click toggle nav ul
        $('.mobile-menu').slideToggle();              
    });
    
    //remove style not displaying nav on resize
    $(window).resize(function(){
    
    if ( $(window).width() > 800 ) {
        $('.mobile-menu').removeAttr('style');
        }
    });
    
});