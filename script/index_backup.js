    let loading = document.getElementById('loading');
    window.addEventListener('load', (event) => {
        loading.classList.add('fadeout');
        let tl = gsap.timeline();
        tl.from('.videoContainer',{duration:1.5,translateY:200,opacity:0}),
        tl.to('.videoContainer',{translateY:0,opacity:1});
    });

    delay = (n) =>{
        n = n || 2000;
        return new Promise(done =>{
          setTimeout(()=>{
            done();
          },n);
        });
      }

    const video = document.getElementById("vid");
    const video_source = document.getElementById("hvid");
    const media_querie = window.matchMedia("(max-width: 700px)");
    let resizeTimer;
        
    changeVideo = () =>{
        media_querie.matches ? (video.setAttribute("poster", "img/poster-vertical-video.jpg")) : (video.setAttribute("poster", "img/poster-video.jpg"));
        video_source.removeAttribute("src");
        media_querie.matches ? (video_source.setAttribute("src", "img/video_vertical.mp4")) : (video_source.setAttribute("src", "img/video_wide.mp4"));

        video.load();
        video.play();

    }
    init = () =>{
        changeVideo();
    }
    init();    
    window.addEventListener("resize", function () {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {// Run code here, resizing has "stopped"
            changeVideo();
        }, 250);
    });



    gsap.registerPlugin(ScrollTrigger);
    gsap.set('#text1',{opacity:0,x:-300});
    gsap.to('#text1', {
      scrollTrigger:{
        trigger: ".textContainer",
        // onToggle:(self)=>{console.log('toogle',self.isActive);},
        // toogleActions:'play complete none none', // play resume none restart complete pause
        // start:'top center',
        // scrub: 1,
        // markers:true
      },
      opacity:1,
      x:0,
      duration:1.5
    });
    gsap.to('.habitacionesSection h2', {scrollTrigger: ".habitacionesSection",opacity:1,x:0,duration:1.5});
    gsap.to('.habitacionesSection .controls', {scrollTrigger: ".habitacionesSection",opacity:1,x:0,duration:1.5});
    gsap.to('.habitacionesSlider', {scrollTrigger: ".habitacionesSection",opacity:1,y:0,duration:1.5});
    gsap.to('.habitacionesText', {scrollTrigger: ".habitacionesSection",opacity:1,y:0,duration:1.5});

    let habitacionesSliderNumber = 0;
    let intervalHabitaciones = 7000;
    let habitacionesSliderButtons = document.getElementsByClassName('habitacionesSliderButton');
    let habitacionInputs = document.getElementsByClassName('habitacionInput');
    let habitacionesSliderImgs = document.getElementsByClassName('habitacionesSlideImg');
    let habitacionesSliderTitles = document.getElementsByClassName('habitacionesSliderh3');
    habitacionesSliderF = (num) =>{
        for(let habitacionesSliderImg of habitacionesSliderImgs){habitacionesSliderImg.classList.remove('active');habitacionesSliderImg.classList.remove('next');}
        for(let habitacionInput of habitacionInputs){habitacionInput.classList.remove('active');}
        for(let habitacionesSliderTitle of habitacionesSliderTitles){habitacionesSliderTitle.classList.remove('active');}
        for(let habitacionesSliderButton of habitacionesSliderButtons){habitacionesSliderButton.classList.remove('active');}
        habitacionInputs[num].classList.add('active');
        habitacionesSliderButtons[num].classList.add('active');
        habitacionesSliderImgs[num].classList.add('active');
        (num == 3) ? habitacionesSliderImgs[0].classList.add('next') : habitacionesSliderImgs[num+1].classList.add('next');
        habitacionesSliderTitles[num].classList.add('active');
    }
    leftHabitaciones = () =>{
        habitacionesSliderNumber++;
        habitacionesSliderNumber = habitacionesSliderNumber%4;
        habitacionesSliderF(habitacionesSliderNumber);
    }
    rightHabitaciones = () =>{
        habitacionesSliderNumber--;
        (habitacionesSliderNumber == -1) ? habitacionesSliderNumber = 3 : habitacionesSliderNumber;
        habitacionesSliderF(habitacionesSliderNumber);
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


    //TRIPADVIROS
    gsap.set('#tripAdvisorContainer',{opacity:0,x:-100});
    gsap.to('#tripAdvisorContainer', {scrollTrigger: ".tripAdvisorSection",opacity:1,x:0,duration:1.5});

    let reviewsNumber = 0;
    let reviewsInterval = 7000;
    let tripadvisorReviews = document.getElementsByClassName('tripadvisorReview');
    let tripadvisorButtons = document.getElementsByClassName('tripadvisorButton');
    reviewsSlider = (num) =>{
        for(let tripadvisorReview of tripadvisorReviews){tripadvisorReview.classList.remove('active');}
        for(let tripadvisorButton of tripadvisorButtons){tripadvisorButton.classList.remove('active');}
        tripadvisorButtons[num].classList.add('active');
        tripadvisorReviews[num].classList.add('active');
    }
    leftReviews = () =>{
        reviewsNumber++;
        reviewsNumber = reviewsNumber%4;
        reviewsSlider(reviewsNumber);
    }
    rightReviews = () =>{
        reviewsNumber--;
        (reviewsNumber == -1) ? reviewsNumber = 3 : reviewsNumber;
        reviewsSlider(reviewsNumber);
    }

    let timerTripadvisor = setInterval(leftReviews,reviewsInterval);
    for(let tripadvisorButton of tripadvisorButtons){
        tripadvisorButton.addEventListener('click',(e)=>{
            let num = tripadvisorButton.getAttribute('data-src');
            reviewsNumber = num;
            reviewsSlider(parseInt(num));
            clearInterval(timerTripadvisor);
            setInterval(leftReviews,reviewsInterval);
        });
    }


    //TRIPADVIROS
    let tlTraslados = gsap.timeline({
        scrollTrigger: {
            trigger: ".trasladosContainer"
        }
    });
    tlTraslados.to("#imageTraslados", {opacity:1,x:0,duration:1.5});
    tlTraslados.to("#iconTraslados", {opacity:1,duration:0.5}, "-=0.2");
    tlTraslados.to("#textTraslados", {opacity:1,y:0,duration:0.5}, "-=0.2");
    tlTraslados.to("#trasladosButton", {opacity:1});

    // gsap.set('#imageSensaciones',{opacity:0,x:-200});
    // gsap.set('#iconSensaciones',{opacity:0});
    // gsap.set('#textSensaciones',{opacity:0,y:50});
    // gsap.set('#sensacionesButton',{opacity:0});
    let tlSensaciones = gsap.timeline({
        scrollTrigger: {
            trigger: ".sensacionesContainer"
        }
    });
    tlSensaciones.to("#imageSensaciones", {opacity:1,x:-50,duration:1.5});
    tlSensaciones.to("#iconSensaciones", {opacity:1,duration:0.5}, "-=0.2");
    tlSensaciones.to("#textSensaciones", {opacity:1,y:0,duration:0.5}, "-=0.2");
    tlSensaciones.to("#sensacionesButton", {opacity:1});

    // gsap.set('#imageTours',{opacity:0,x:200});
    // gsap.set('#iconTours',{opacity:0});
    // gsap.set('#textTours',{opacity:0,y:-50});
    // gsap.set('#toursButton',{opacity:0});
    let tlTours = gsap.timeline({
        scrollTrigger: {
            trigger: ".toursContainer"
        }
    });
    tlTours.to("#imageTours", {opacity:1,x:0,duration:1.5});
    tlTours.to("#iconTours", {opacity:1,duration:0.5}, "-=0.2");
    tlTours.to("#textTours", {opacity:1,y:0,duration:0.5}, "-=0.2");
    tlTours.to("#toursButton", {opacity:1});

    // gsap.set('#imageCena',{opacity:0,x:-200});
    // gsap.set('#iconCena',{opacity:0});
    // gsap.set('#textCena',{opacity:0,y:50});
    // gsap.set('#cenaButton',{opacity:0});
    let tlCena = gsap.timeline({
        scrollTrigger: {
            trigger: ".cenaContainer"
        }
    });
    tlCena.to("#imageCena", {opacity:1,x:50,duration:1.5});
    tlCena.to("#iconCena", {opacity:1,duration:0.5}, "-=0.2");
    tlCena.to("#textCena", {opacity:1,y:0,duration:0.5}, "-=0.2");
    tlCena.to("#cenaButton", {opacity:1});
    



    let tlRincon = gsap.timeline({
        scrollTrigger: {
            trigger: ".gridImages"
        }
    });
    tlRincon.to("#rincon_1", {opacity:1,scale:1.0,duration:0.5},"-=0.2");
    tlRincon.to("#rincon_2", {opacity:1,scale:1.0,duration:0.5},"-=0.2");
    tlRincon.to("#rincon_3", {opacity:1,scale:1.0,duration:0.5},"-=0.2");
    tlRincon.to("#rincon_4", {opacity:1,scale:1.0,duration:0.5},"-=0.2");
    tlRincon.to("#rincon_5", {opacity:1,scale:1.0,duration:0.5},"-=0.2");
    tlRincon.to("#rincon_6", {opacity:1,scale:1.0,duration:0.5},"-=0.2");



    //SWIPES
    document.addEventListener('swiped-left', function(e) {
      console.log(e.target.classList[0]); // element that was swiped
      switch(e.target.classList[0]){
        case 'habitacionesSection':leftHabitaciones();break;
        case 'tripadvisorReview':leftReviews();break;
      }
    });
    document.addEventListener('swiped-right', function(e) {
        console.log(e.target.classList[0]); // element that was swiped
      switch(e.target.classList[0]){
        case 'habitacionesSection':rightHabitaciones();break;
        case 'tripadvisorReview':rightReviews();break;
      }
    });


    


        // window.addEventListener("DOMContentLoaded", function () {
        //     console.log("listener");
        //     var e = [].slice.call(document.querySelectorAll(".lazy-background"));
        //     if ("IntersectionObserver" in window) {
        //         console.log("intersectionobserver");
        //         let t = new IntersectionObserver(function (e, o) {
        //             e.forEach(function (e) {
        //                 e.isIntersecting && (e.target.classList.add("visible"), t.unobserve(e.target));
        //             });
        //         });
        //         e.forEach(function (e) {
        //             t.observe(e);
        //         });
        //     } else console.log("no intersectionobserver");
        // });