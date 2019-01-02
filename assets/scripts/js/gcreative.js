jQuery(document).ready(function() {
    // Remove empty P tags created by WP inside of Accordion and Orbit
    jQuery(".hamburger_trigger").click(function(){
        jQuery('.hamburger').toggleClass("is-active");
      });

      jQuery(".js-off-canvas-overlay").click(function(){
        jQuery('.hamburger').removeClass("is-active");
      });
    //   jQuery(window).on('load resize',function(){
    //     if(jQuery(window).width() > 414){
    //         window.location = "http://gcreativelab.com/"
    //     }
    // });

    var gpreload = new TimelineMax({repeat: -1, delay: 1});
    
    gpreload.to(".header_animation", 0.6, {text:"DIFFERENT",ease:Expo.easeInOut,delay: 0.3})
    .to(".header_animation", 0.6, {text:"ENTHUSIASTIC",ease:Expo.easeInOut})
    .to(".header_animation", 0.6, {text:"PASSIONATE",ease:Expo.easeInOut})
    .to(".header_animation", 0.6, {text:"CONNECTED",ease:Expo.easeInOut})
    .to(".header_animation", 0.6, {text:"VERSATILE",ease:Expo.easeInOut})
    .to(".header_animation", 0.6, {text:"EXPRESSIVE",ease:Expo.easeInOut})
    .to(".header_animation", 0.6, {text:"INNOVATIVE",ease:Expo.easeInOut})
    .to(".header_animation", 0.6, {text:"BOLD",ease:Expo.easeInOut});

    
}); 