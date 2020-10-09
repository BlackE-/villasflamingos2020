	let loading = document.getElementById('loading');
    window.addEventListener('load', (event) => {loading.classList.add('fadeout');});
    gsap.registerPlugin(ScrollTrigger);
    gsap.to('#text1', {scrollTrigger: ".habitaciones_cuartos_texto",opacity:1,x:0,duration:1.5}); 
    gsap.to('.carouselContainer', {scrollTrigger: ".Vista_carousel",opacity:1,x:0,duration:1.5}); 
    let tlCarouselText = gsap.timeline({scrollTrigger: {trigger: ".carousel_text"}});
    tlCarouselText.to('.carousel_text h2',{opacity:1,x:0,duration:0.5});
    tlCarouselText.to('.carousel_text .amenidades',{opacity:1,x:0,duration:0.5},"-=0.2"); 

    let tlReservar = gsap.timeline({scrollTrigger: {trigger: ".reservar_section"}});
    tlReservar.to('.reservar_section p',{opacity:1,y:0,duration:0.5});
    tlReservar.to('.reservar_section .button',{opacity:1,duration:0.5},"-=0.2"); 

    gsap.to('.habitaciones_container h2', {scrollTrigger: ".habitaciones_container",opacity:1,x:0,duration:1.5});

    let tlvistaMar = gsap.timeline({scrollTrigger: {trigger: "#vistaMar"}});
    tlvistaMar.to('#vistaMar_desktop', {opacity:1,x:0,duration:0.5});
    tlvistaMar.to('#vistaMar_mobile', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlvistaMar.to('#vistaMar_title', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlvistaMar.to('#vistaMar_Button', {opacity:1,duration:0.5},"-=0.2"); 

    let tlbungalowJardin = gsap.timeline({scrollTrigger: {trigger: "#bungalowJardin"}});
    tlbungalowJardin.to('#bungalowJardin_desktop', {opacity:1,x:0,duration:0.5});
    tlbungalowJardin.to('#bungalowJardin_mobile', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlbungalowJardin.to('#bungalowJardin_title', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlbungalowJardin.to('#bungalowJardin_Button', {opacity:1,duration:0.5},"-=0.2");

    let tlbungalowArena = gsap.timeline({scrollTrigger: {trigger: "#bungalowArena"}});
    tlbungalowArena.to('#bungalowArena_desktop', {opacity:1,x:0,duration:0.5});
    tlbungalowArena.to('#bungalowArena_mobile', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlbungalowArena.to('#bungalowArena_title', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlbungalowArena.to('#bungalowArena_Button', {opacity:1,duration:0.5},"-=0.2");

    let tlbungalowMangle = gsap.timeline({scrollTrigger: {trigger: "#bungalowMangle"}});
    tlbungalowMangle.to('#bungalowMangle_desktop', {opacity:1,x:0,duration:0.5});
    tlbungalowMangle.to('#bungalowMangle_mobile', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlbungalowMangle.to('#bungalowMangle_title', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlbungalowMangle.to('#bungalowMangle_Button', {opacity:1,duration:0.5},"-=0.2");

    let tlcacao = gsap.timeline({scrollTrigger: {trigger: "#cacao"}});
    tlcacao.to('#cacao_desktop', {opacity:1,x:0,duration:0.5});
    tlcacao.to('#cacao_mobile', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlcacao.to('#cacao_title', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlcacao.to('#cacao_Button', {opacity:1,duration:0.5},"-=0.2");

    let tlcoco = gsap.timeline({scrollTrigger: {trigger: "#coco"}});
    tlcoco.to('#coco_desktop', {opacity:1,x:0,duration:0.5});
    tlcoco.to('#coco_mobile', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlcoco.to('#coco_title', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlcoco.to('#coco_Button', {opacity:1,duration:0.5},"-=0.2");

    let tlmiel = gsap.timeline({scrollTrigger: {trigger: "#miel"}});
    tlmiel.to('#miel_desktop', {opacity:1,x:0,duration:0.5});
    tlmiel.to('#miel_mobile', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlmiel.to('#miel_title', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlmiel.to('#miel_Button', {opacity:1,duration:0.5},"-=0.2");

    let tlsuiteLunaDeMiel = gsap.timeline({scrollTrigger: {trigger: "#suiteLunaDeMiel"}});
    tlsuiteLunaDeMiel.to('#suiteLunaDeMiel_desktop', {opacity:1,x:0,duration:0.5});
    tlsuiteLunaDeMiel.to('#suiteLunaDeMiel_mobile', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlsuiteLunaDeMiel.to('#suiteLunaDeMiel_title', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlsuiteLunaDeMiel.to('#suiteLunaDeMiel_Button', {opacity:1,duration:0.5},"-=0.2");

    let tlbungalowCielo = gsap.timeline({scrollTrigger: {trigger: "#bungalowCielo"}});
    tlbungalowCielo.to('#bungalowCielo_desktop', {opacity:1,x:0,duration:0.5});
    tlbungalowCielo.to('#bungalowCielo_mobile', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlbungalowCielo.to('#bungalowCielo_title', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlbungalowCielo.to('#bungalowCielo_Button', {opacity:1,duration:0.5},"-=0.2");

    let tlmasterSuitePalapa = gsap.timeline({scrollTrigger: {trigger: "#masterSuitePalapa"}});
    tlmasterSuitePalapa.to('#masterSuitePalapa_desktop', {opacity:1,x:0,duration:0.5});
    tlmasterSuitePalapa.to('#masterSuitePalapa_mobile', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlmasterSuitePalapa.to('#masterSuitePalapa_title', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlmasterSuitePalapa.to('#masterSuitePalapa_Button', {opacity:1,duration:0.5},"-=0.2");

    let tlComparar = gsap.timeline({scrollTrigger: {trigger: "#compararContainer"}});
    tlComparar.to('.habitacionescompararContainer h1', {opacity:1,y:0,duration:0.5});
    tlComparar.to('.habitacionescompararContainer .button', {opacity:1,duration:0.5},"-=0.2");