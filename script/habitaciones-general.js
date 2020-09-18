	let loading = document.getElementById('loading');
    window.addEventListener('load', (event) => {
        loading.classList.add('fadeout');
        let tl = gsap.timeline();
        tl.from('.habitaciones_general_header',{duration:1.5,translateY:200,opacity:0}),
        tl.to('.habitaciones_general_header',{translateY:0,opacity:1});
    });


    gsap.registerPlugin(ScrollTrigger);
    gsap.to('#text1', {scrollTrigger: ".hotel_restaurante_texto",opacity:1,x:0,duration:1.5}); 
    gsap.to('.habitaciones_container h2', {scrollTrigger: ".habitaciones_container",opacity:1,x:0,duration:1.5});
    

    let tlCuartos = gsap.timeline({scrollTrigger: {trigger: "#cuartosBox"}});
    tlCuartos.to('#Cuartos_desktop', {opacity:1,x:0,duration:0.5});
    tlCuartos.to('#Cuartos_mobile', {opacity:1,x:0,duration:0.5});
    tlCuartos.to('#titleCuartos', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlCuartos.to('#textCuartos',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlCuartos.to('#CuartosButton',{opacity:1,duration:0.5},"-=0.2");


    let tlBungalos = gsap.timeline({scrollTrigger: {trigger: "#bungalosBox"}});
    tlBungalos.to('#Bungalos_desktop', {opacity:1,x:0,duration:0.5});
    tlBungalos.to('#Bungalos_mobile', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlBungalos.to('#titleBungalos', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlBungalos.to('#textBungalos',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlBungalos.to('#BungalosButton', {opacity:1,duration:0.5},"-=0.2"); 



    let tlSuiteLuna = gsap.timeline({scrollTrigger: {trigger: "#SuiteLunaBox"}});
    tlSuiteLuna.to('#SuiteLuna_desktop', {opacity:1,x:0,duration:0.5});
    tlSuiteLuna.to('#SuiteLuna_mobile', {opacity:1,x:0,duration:0.5});
    tlSuiteLuna.to('#SuiteLuna_1_desktop', {opacity:1,x:0,duration:0.5});
    tlSuiteLuna.to('#SuiteLuna_1_mobile', {opacity:1,x:0,duration:0.5});
    tlSuiteLuna.to('#titleSuiteLuna', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlSuiteLuna.to('#textSuiteLuna',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlSuiteLuna.to('#SuiteLunaButton',{opacity:1,duration:0.5},"-=0.2");


     let tlMasterSuite = gsap.timeline({scrollTrigger: {trigger: "#MasterSuiteBox"}});
    tlMasterSuite.to('#MasterSuite_desktop', {opacity:1,x:0,duration:0.5});
    tlMasterSuite.to('#MasterSuite_mobile', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlMasterSuite.to('#titleMasterSuite', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlMasterSuite.to('#textMasterSuite',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlMasterSuite.to('#MasterSuiteButton', {opacity:1,duration:0.5},"-=0.2");


    let tlComparar = gsap.timeline({scrollTrigger: {trigger: "#compararContainer"}});
    tlComparar.to('.habitacionescompararContainer h1', {opacity:1,y:0,duration:0.5});
    tlComparar.to('.habitacionescompararContainer .button', {opacity:1,duration:0.5},"-=0.2");






