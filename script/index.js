    console.log('%cBy @Studio-SUB', 'font-size: 14px;color: #000; border:1px solid #000;');
    let loading = document.getElementById('loading');
    window.addEventListener('load', (event) => {
        setTimeout(()=>{
            loading.classList.add('fadeout');
            let tl = gsap.timeline();
            tl.from('.videoContainer',{duration:1.5,translateY:200,opacity:0}),
            tl.to('.videoContainer',{translateY:0,opacity:1});
        },2000);
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
        media_querie.matches ? (video.setAttribute("poster", "img/villas_vertical-poster.jpg")) : (video.setAttribute("poster", "img/villas_wide-poster.jpg"));
        video_source.removeAttribute("src");
        media_querie.matches ? (video_source.setAttribute("src", "img/villas_vertical.mp4")) : (video_source.setAttribute("src", "img/villas_wide.mp4"));

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
    // ScrollTrigger.matchMedia({
    //     //mobile 640
    //     "(max-width: 40.06rem)":function(){
    //         console.log('mobile');
            
    //     },
    //     //desktop
    //     "(max-width: 40.06rem)":function(){
    //         console.log('desktop');
    //     }
    // });
    gsap.to('#text1', {
      scrollTrigger:{
        trigger: ".textContainer"
      },
      opacity:1,
      x:0,
      duration:1.5
    });
    gsap.to('.habitacionesSection h2', {scrollTrigger: ".habitacionesSection",opacity:1,x:0,duration:1.5});
    gsap.to('.habitacionesSection .controls', {scrollTrigger: ".habitacionesSection",opacity:1,x:0,duration:1.5});
    gsap.to('.habitacionesSlider', {scrollTrigger: ".habitacionesSection",opacity:1,y:0,duration:1.5});
    gsap.to('.habitacionesText', {scrollTrigger: ".habitacionesSection",opacity:1,y:0,duration:1.5});



    




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
    tlTraslados.to("#imageTrasladosMobile", {opacity:1,x:0,duration:1.5});
    tlTraslados.to("#iconTraslados", {opacity:1,duration:0.5}, "-=0.2");
    tlTraslados.to("#textTraslados", {opacity:1,y:0,duration:0.5}, "-=0.2");
    tlTraslados.to("#trasladosButton", {opacity:1});
    let tlSensaciones = gsap.timeline({
        scrollTrigger: {
            trigger: ".sensacionesContainer"
        }
    });
    tlSensaciones.to("#imageSensaciones", {opacity:1,x:-50,duration:1.5});
    tlSensaciones.to("#imageSensacionesMobile", {opacity:1,x:0,duration:1.5});
    tlSensaciones.to("#iconSensaciones", {opacity:1,duration:0.5}, "-=0.2");
    tlSensaciones.to("#textSensaciones", {opacity:1,y:0,duration:0.5}, "-=0.2");
    tlSensaciones.to("#sensacionesButton", {opacity:1});
    let tlTours = gsap.timeline({
        scrollTrigger: {
            trigger: ".toursContainer"
        }
    });
    tlTours.to("#imageTours", {opacity:1,x:0,duration:1.5});
    tlTours.to("#imageToursMobile", {opacity:1,x:0,duration:1.5});
    tlTours.to("#iconTours", {opacity:1,duration:0.5}, "-=0.2");
    tlTours.to("#textTours", {opacity:1,y:0,duration:0.5}, "-=0.2");
    tlTours.to("#toursButton", {opacity:1});
    
    let tlCena = gsap.timeline({
        scrollTrigger: {
            trigger: ".cenaContainer"
        }
    });
    tlCena.to("#imageCena", {opacity:1,x:-50,duration:1.5});
    tlCena.to("#imageCenaMobile", {opacity:1,x:0,duration:1.5});
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

    let tlMosaico = gsap.timeline({
        scrollTrigger: {
            trigger: ".mosaico"
        }
    });

    tlMosaico.to("#rincon_1_desktop", {opacity:1,scale:1.0,duration:0.5},"-=0.2");
    tlMosaico.to("#rincon_2_desktop", {opacity:1,scale:1.0,duration:0.5},"-=0.2");
    tlMosaico.to("#rincon_3_desktop", {opacity:1,scale:1.0,duration:0.5},"-=0.2");
    tlMosaico.to("#rincon_4_desktop", {opacity:1,scale:1.0,duration:0.5},"-=0.2");
    tlMosaico.to("#rincon_5_desktop", {opacity:1,scale:1.0,duration:0.5},"-=0.2");
    tlMosaico.to("#rincon_6_desktop", {opacity:1,scale:1.0,duration:0.5},"-=0.2");



    //SWIPES
    document.addEventListener('swiped-left', function(e) {
      console.log(e.target.classList[0]); // element that was swiped
      switch(e.target.classList[0]){
        case 'habitacionesSlider':swipeLeft();break;
        case 'reviewList':leftReviews();break;
      }
    });
    document.addEventListener('swiped-right', function(e) {
        console.log(e.target.classList[0]); // element that was swiped
      switch(e.target.classList[0]){
        case 'habitacionesSlider':swipeRight();break;
        case 'reviewList':rightReviews();break;
      }
    });