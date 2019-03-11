jQuery(document).on("scroll", function() {
    if(jQuery(document).scrollTop() > 80){
        jQuery(".site-header").addClass("shrink");
    } else {
        jQuery(".site-header").removeClass("shrink");
    }
});