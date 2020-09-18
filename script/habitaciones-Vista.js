	let loading = document.getElementById('loading');
    window.addEventListener('load', (event) => {
        loading.classList.add('fadeout');
    });
    gsap.registerPlugin(ScrollTrigger);
    gsap.to('#text1', {scrollTrigger: ".habitaciones_cuartos_texto",opacity:1,x:0,duration:1.5}); 



    gsap.to('.controls', {scrollTrigger: ".Vista_carousel",opacity:1,duration:1.5}); 
    gsap.to('.carousel', {scrollTrigger: ".Vista_carousel",opacity:1,y:0,duration:1.5}); 
    let tlCarouselText = gsap.timeline({scrollTrigger: {trigger: ".carousel_text"}});
    tlCarouselText.to('.carousel_text h2',{opacity:1,x:0,duration:0.5});
    tlCarouselText.to('.carousel_text .amenidades',{opacity:1,x:0,duration:0.5},"-=0.2"); 

    /*  CAROUSEL  */
    let habitacionesSliderNumber = 0;
    let intervalHabitaciones = 7000;
    let habitacionesSliderButtons = document.getElementsByClassName('habitacionesSliderButton');
    let habitacionesSliderImgs = document.getElementsByClassName('carouselItem');
    habitacionesSliderF = (num) =>{
        for(let habitacionesSliderImg of habitacionesSliderImgs){habitacionesSliderImg.classList.remove('active');habitacionesSliderImg.classList.remove('next');}
        for(let habitacionesSliderButton of habitacionesSliderButtons){habitacionesSliderButton.classList.remove('active');}
        habitacionesSliderButtons[num].classList.add('active');
        habitacionesSliderImgs[num].classList.add('active');
        (num == 3) ? habitacionesSliderImgs[0].classList.add('next') : habitacionesSliderImgs[num+1].classList.add('next');
    }
    leftHabitaciones = () =>{
        // console.log('leftHabitaciones');
        habitacionesSliderNumber++;
        habitacionesSliderNumber = habitacionesSliderNumber%4;
        habitacionesSliderF(habitacionesSliderNumber);
    }
    rightHabitaciones = () =>{
        habitacionesSliderNumber--;
        (habitacionesSliderNumber == -1) ? habitacionesSliderNumber = 3 : habitacionesSliderNumber;
        habitacionesSliderF(habitacionesSliderNumber);
    }

    swipeLeft = () =>{
        habitacionesSliderNumber++;
        habitacionesSliderNumber = habitacionesSliderNumber%4;
        habitacionesSliderF(habitacionesSliderNumber);
        clearInterval(timerHabitacionesSlider);
        setInterval(leftHabitaciones,intervalHabitaciones);
    }

    swipeRight = ()=>{
        habitacionesSliderNumber--;
        (habitacionesSliderNumber == -1) ? habitacionesSliderNumber = 3 : habitacionesSliderNumber;
        habitacionesSliderF(habitacionesSliderNumber);
        clearInterval(timerHabitacionesSlider);
        setInterval(leftHabitaciones,intervalHabitaciones);
    }

    let timerHabitacionesSlider = setInterval(leftHabitaciones,intervalHabitaciones);
    for(let habitacionesSliderButton of habitacionesSliderButtons){
        habitacionesSliderButton.addEventListener('click',(e)=>{
            let num = habitacionesSliderButton.getAttribute('data-src');
            habitacionesSliderNumber = num;
            habitacionesSliderF(parseInt(num));
            clearInterval(timerHabitacionesSlider);
            setInterval(leftHabitaciones,intervalHabitaciones);
        });
    }

    //SWIPES
    document.addEventListener('swiped-left', function(e) {
      console.log(e.target.classList[0]); // element that was swiped
      switch(e.target.classList[0]){
        case 'carouselItem': case 'i-amphtml-fill-content':swipeLeft();break;
      }
    });
    document.addEventListener('swiped-right', function(e) {
        console.log(e.target.classList[0]); // element that was swiped
      switch(e.target.classList[0]){
        case 'carouselItem': case 'i-amphtml-fill-content':swipeRight();break;
      }
    });



    let tlReservar = gsap.timeline({scrollTrigger: {trigger: ".reservar_section"}});
    tlReservar.to('.reservar_section p',{opacity:1,y:0,duration:0.5});
    tlReservar.to('.reservar_section .button',{opacity:1,duration:0.5},"-=0.2"); 

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