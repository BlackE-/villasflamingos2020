	let loading = document.getElementById('loading');
    window.addEventListener('load', (event) => {
        loading.classList.add('fadeout');
    });
    gsap.registerPlugin(ScrollTrigger);
    gsap.to('#text1', {scrollTrigger: ".habitaciones_cuartos_texto",opacity:1,x:0,duration:1.5}); 

    const select_left = document.getElementById('habitacion_select_left');
    const items_left = document.getElementsByClassName('item_left');
    const texts_left = document.getElementsByClassName('text_left');

    const select_right = document.getElementById('habitacion_select_right');
    const items_right = document.getElementsByClassName('item_right');
    const texts_right = document.getElementsByClassName('text_right');
    select_left.addEventListener('change',function(e){
        let index = 0;
        let name_active = select_left.value;
        for(let item_left of items_left){
            if(item_left.getAttribute('name') == name_active){item_left.classList.add('active');texts_left[index].classList.add('active');}
            else{item_left.classList.remove('active');texts_left[index].classList.remove('active');}
            index++;
        }
    }); 
    select_right.addEventListener('change',function(e){
        let index = 0;
        let name_active = select_right.value;
        for(let item_right of items_right){
            if(item_right.getAttribute('name') == name_active){item_right.classList.add('active');texts_right[index].classList.add('active');}
            else{item_right.classList.remove('active');texts_right[index].classList.remove('active');}
            index++;
        }
    });  


    let tlReservar = gsap.timeline({scrollTrigger: {trigger: ".reservar_section"}});
    tlReservar.to('.reservar_section p',{opacity:1,y:0,duration:0.5});

    gsap.to('.habitaciones_container h2', {scrollTrigger: ".habitaciones_container",opacity:1,x:0,duration:1.5});

    let tlCuartos = gsap.timeline({scrollTrigger: {trigger: "#CuartosBox"}});
    tlCuartos.to('#Cuartos_desktop', {opacity:1,x:0,duration:0.5});
    tlCuartos.to('#Cuartos_mobile', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlCuartos.to('#titleCuartos', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlCuartos.to('#CuartosButton', {opacity:1,duration:0.5},"-=0.2"); 

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