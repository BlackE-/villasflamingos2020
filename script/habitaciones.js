	gsap.registerPlugin(ScrollTrigger);
    gsap.to('#text1', {scrollTrigger: ".habitaciones_cuartos_texto",opacity:1,x:0,duration:1.5}); 
    gsap.to('.carouselContainer', {scrollTrigger: ".habitaciones_cuartos_texto",opacity:1,x:0,duration:1.5}); 
    let tlCarouselText = gsap.timeline({scrollTrigger: {trigger: ".carousel_text"}});
    tlCarouselText.to('.carousel_text h2',{opacity:1,x:0,duration:0.5});
    tlCarouselText.to('.carousel_text .amenidades',{opacity:1,x:0,duration:0.5},"-=0.2"); 

    let tlReservar = gsap.timeline({scrollTrigger: {trigger: ".reservar_section"}});
    tlReservar.to('.reservar_section p',{opacity:1,y:0,duration:0.5});
    tlReservar.to('.reservar_section .button',{opacity:1,duration:0.5},"-=0.2"); 

    gsap.to('.habitaciones_container h2', {scrollTrigger: ".habitaciones_container",opacity:1,x:0,duration:1.5});

    let tlroom1 = gsap.timeline({scrollTrigger: {trigger: "#room1"}});
    tlroom1.to('#room1_desktop', {opacity:1,x:0,duration:0.5});
    tlroom1.to('#room1_mobile', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlroom1.to('#room1_title', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlroom1.to('#room1_Button', {opacity:1,duration:0.5},"-=0.2"); 

    let tltlroom2 = gsap.timeline({scrollTrigger: {trigger: "#room2"}});
    tltlroom2.to('#room2_desktop', {opacity:1,x:0,duration:0.5});
    tltlroom2.to('#room2_mobile', {opacity:1,x:0,duration:0.5},"-=0.2");
    tltlroom2.to('#room2_title', {opacity:1,y:0,duration:0.5},"-=0.2");
    tltlroom2.to('#room2_Button', {opacity:1,duration:0.5},"-=0.2");

    let tlroom3 = gsap.timeline({scrollTrigger: {trigger: "#room3"}});
    tlroom3.to('#room3_desktop', {opacity:1,x:0,duration:0.5});
    tlroom3.to('#room3_mobile', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlroom3.to('#room3_title', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlroom3.to('#room3_Button', {opacity:1,duration:0.5},"-=0.2");

    let tlroom4 = gsap.timeline({scrollTrigger: {trigger: "#room4"}});
    tlroom4.to('#room4_desktop', {opacity:1,x:0,duration:0.5});
    tlroom4.to('#room4_mobile', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlroom4.to('#room4_title', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlroom4.to('#room4_Button', {opacity:1,duration:0.5},"-=0.2");

    let tlroom5 = gsap.timeline({scrollTrigger: {trigger: "#room5"}});
    tlroom5.to('#room5_desktop', {opacity:1,x:0,duration:0.5});
    tlroom5.to('#room5_mobile', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlroom5.to('#room5_title', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlroom5.to('#room5_Button', {opacity:1,duration:0.5},"-=0.2");

    let tlroom6 = gsap.timeline({scrollTrigger: {trigger: "#room6"}});
    tlroom6.to('#room6_desktop', {opacity:1,x:0,duration:0.5});
    tlroom6.to('#room6_mobile', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlroom6.to('#room6_title', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlroom6.to('#room6_Button', {opacity:1,duration:0.5},"-=0.2");

    let tlroom7 = gsap.timeline({scrollTrigger: {trigger: "#room7"}});
    tlroom7.to('#room7_desktop', {opacity:1,x:0,duration:0.5});
    tlroom7.to('#room7_mobile', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlroom7.to('#room7_title', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlroom7.to('#room7_Button', {opacity:1,duration:0.5},"-=0.2");

    let tlsuiteLunaDeMiel = gsap.timeline({scrollTrigger: {trigger: "#room8"}});
    tlsuiteLunaDeMiel.to('#room8_desktop', {opacity:1,x:0,duration:0.5});
    tlsuiteLunaDeMiel.to('#room8_mobile', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlsuiteLunaDeMiel.to('#room8_title', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlsuiteLunaDeMiel.to('#room8_Button', {opacity:1,duration:0.5},"-=0.2");

    let tlroom9 = gsap.timeline({scrollTrigger: {trigger: "#room9"}});
    tlroom9.to('#room9_desktop', {opacity:1,x:0,duration:0.5});
    tlroom9.to('#room9_mobile', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlroom9.to('#room9_title', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlroom9.to('#room9_Button', {opacity:1,duration:0.5},"-=0.2");

    let tlroom10 = gsap.timeline({scrollTrigger: {trigger: "#room10"}});
    tlroom10.to('#room10_desktop', {opacity:1,x:0,duration:0.5});
    tlroom10.to('#room10_mobile', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlroom10.to('#room10_title', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlroom10.to('#room10_Button', {opacity:1,duration:0.5},"-=0.2");

    let tlComparar = gsap.timeline({scrollTrigger: {trigger: "#compararContainer"}});
    tlComparar.to('.habitacionescompararContainer h1', {opacity:1,y:0,duration:0.5});
    tlComparar.to('.habitacionescompararContainer .button', {opacity:1,duration:0.5},"-=0.2");