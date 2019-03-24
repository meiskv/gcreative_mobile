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
    
    gpreload.to(".header_animation", 0.8, {text:"DIFFERENT",ease:Expo.easeInOut,delay: 0.4})
    .to(".header_animation", 0.8, {text:"ENTHUSIASTIC",ease:Expo.easeInOut})
    .to(".header_animation", 0.8, {text:"PASSIONATE",ease:Expo.easeInOut})
    .to(".header_animation", 0.8, {text:"CONNECTED",ease:Expo.easeInOut})
    .to(".header_animation", 0.8, {text:"VERSATILE",ease:Expo.easeInOut})
    .to(".header_animation", 0.8, {text:"EXPRESSIVE",ease:Expo.easeInOut})
    .to(".header_animation", 0.8, {text:"INNOVATIVE",ease:Expo.easeInOut})
    .to(".header_animation", 0.8, {text:"BOLD",ease:Expo.easeInOut});

    var contactText = new TimelineMax({repeat: -1, delay: 1});
    
    contactText.to(".hello-translate", 1.5, {text:"مرحبا",ease:Expo.easeInOut,delay: 0.3})
    .to(".hello-translate", 1.5, {text:"Bonjour",ease:Expo.easeInOut})
    .to(".hello-translate", 1.5, {text:"여보세요",ease:Expo.easeInOut})
    .to(".hello-translate", 1.5, {text:"Hola",ease:Expo.easeInOut})
    .to(".hello-translate", 1.5, {text:"こんにちは",ease:Expo.easeInOut})
    .to(".hello-translate", 1.5, {text:"你好",ease:Expo.easeInOut})
    .to(".hello-translate", 1.5, {text:"Hello",ease:Expo.easeInOut});


}); 