	let loading = document.getElementById('loading');
    window.addEventListener('load', (event) => {
        loading.classList.add('fadeout');
    });


    gsap.registerPlugin(ScrollTrigger);
    gsap.to('#text1', {scrollTrigger: ".habitaciones_cuartos_texto",opacity:1,x:0,duration:1.5}); 

    let tlVistaJardin = gsap.timeline({scrollTrigger: {trigger: "#VistaJardinBox"}});
    tlVistaJardin.to('#VistaJardin_desktop', {opacity:1,x:0,duration:0.5});
    tlVistaJardin.to('#VistaJardin_mobile', {opacity:1,x:0,duration:0.5});
    tlVistaJardin.to('#titleVistaJardin', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlVistaJardin.to('#textVistaJardin',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlVistaJardin.to('#VistaJardinButton',{opacity:1,duration:0.5},"-=0.2"); 

    let tlVistaMar = gsap.timeline({scrollTrigger: {trigger: "#VistaMarBox"}});
    tlVistaMar.to('#VistaMar_desktop', {opacity:1,x:0,duration:0.5});
    tlVistaMar.to('#VistaMar_mobile', {opacity:1,x:0,duration:0.5});
    tlVistaMar.to('#titleVistaMar', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlVistaMar.to('#textVistaMar',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlVistaMar.to('#VistaMarButton',{opacity:1,duration:0.5},"-=0.2");

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