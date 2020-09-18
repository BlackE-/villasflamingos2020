	let loading = document.getElementById('loading');
    window.addEventListener('load', (event) => {
        loading.classList.add('fadeout');
    });


    gsap.registerPlugin(ScrollTrigger);
    gsap.to('#text1', {scrollTrigger: ".habitaciones_cuartos_texto",opacity:1,x:0,duration:1.5}); 


    let tlBungalowsArena = gsap.timeline({scrollTrigger: {trigger: "#BungalowsArenaBox"}});
    tlBungalowsArena.to('#BungalowsArena_desktop', {opacity:1,x:0,duration:0.5});
    tlBungalowsArena.to('#BungalowsArena_mobile', {opacity:1,x:0,duration:0.5});
    tlBungalowsArena.to('#titleBungalowsArena', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlBungalowsArena.to('#textBungalowsArena',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlBungalowsArena.to('#BungalowsArenaButton',{opacity:1,duration:0.5},"-=0.2"); 

    let tlBungalowsCielo = gsap.timeline({scrollTrigger: {trigger: "#BungalowsCieloBox"}});
    tlBungalowsCielo.to('#BungalowsCielo_desktop', {opacity:1,x:0,duration:0.5});
    tlBungalowsCielo.to('#BungalowsCielo_mobile', {opacity:1,x:0,duration:0.5});
    tlBungalowsCielo.to('#titleBungalowsCielo', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlBungalowsCielo.to('#textBungalowsCielo',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlBungalowsCielo.to('#BungalowsCieloButton',{opacity:1,duration:0.5},"-=0.2");


    let tlBungalowsJardin = gsap.timeline({scrollTrigger: {trigger: "#BungalowsJardinBox"}});
    tlBungalowsJardin.to('#BungalowsJardin_desktop', {opacity:1,x:0,duration:0.5});
    tlBungalowsJardin.to('#BungalowsJardin_mobile', {opacity:1,x:0,duration:0.5});
    tlBungalowsJardin.to('#titleBungalowsJardin', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlBungalowsJardin.to('#textBungalowsJardin',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlBungalowsJardin.to('#BungalowsJardinButton',{opacity:1,duration:0.5},"-=0.2");


    let tlBungalowsMangle = gsap.timeline({scrollTrigger: {trigger: "#BungalowsMangleBox"}});
    tlBungalowsMangle.to('#BungalowsMangle_desktop', {opacity:1,x:0,duration:0.5});
    tlBungalowsMangle.to('#BungalowsMangle_mobile', {opacity:1,x:0,duration:0.5});
    tlBungalowsMangle.to('#titleBungalowsMangle', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlBungalowsMangle.to('#textBungalowsMangle',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlBungalowsMangle.to('#BungalowsMangleButton',{opacity:1,duration:0.5},"-=0.2");




    gsap.to('.habitaciones_container h2', {scrollTrigger: ".habitaciones_container",opacity:1,x:0,duration:1.5});

    let tlBungalos = gsap.timeline({scrollTrigger: {trigger: "#bungalosBox"}});
    tlBungalos.to('#Bungalos_desktop', {opacity:1,x:0,duration:0.5});
    tlBungalos.to('#Bungalos_mobile', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlBungalos.to('#titleBungalos', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlBungalos.to('#BungalosButton', {opacity:1,duration:0.5},"-=0.2"); 

    let tlSuiteLuna = gsap.timeline({scrollTrigger: {trigger: "#SuiteLunaBox"}});
    tlSuiteLuna.to('#SuiteLuna_desktop', {opacity:1,x:0,duration:0.5});
    tlSuiteLuna.to('#SuiteLuna_mobile', {opacity:1,x:0,duration:0.5});
    tlSuiteLuna.to('#titleSuiteLuna', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlSuiteLuna.to('#SuiteLunaButton',{opacity:1,duration:0.5},"-=0.2");

     let tlMasterSuite = gsap.timeline({scrollTrigger: {trigger: "#MasterSuiteBox"}});
    tlMasterSuite.to('#MasterSuite_desktop', {opacity:1,x:0,duration:0.5});
    tlMasterSuite.to('#MasterSuite_mobile', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlMasterSuite.to('#titleMasterSuite', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlMasterSuite.to('#MasterSuiteButton', {opacity:1,duration:0.5},"-=0.2");

    let tlComparar = gsap.timeline({scrollTrigger: {trigger: "#compararContainer"}});
    tlComparar.to('.habitacionescompararContainer h1', {opacity:1,y:0,duration:0.5});
    tlComparar.to('.habitacionescompararContainer .button', {opacity:1,duration:0.5},"-=0.2");