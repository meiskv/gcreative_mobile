jQuery(document).ready(function() {
    // Remove empty P tags created by WP inside of Accordion and Orbit
    jQuery(".hamburger_trigger").click(function(){
        jQuery('.hamburger').toggleClass("is-active");
      });

      jQuery(".js-off-canvas-overlay").click(function(){
        jQuery('.hamburger').removeClass("is-active");
      });
}); 