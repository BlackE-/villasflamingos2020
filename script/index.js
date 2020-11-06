    let loading = document.getElementById('loading');
    window.addEventListener('load', (event) => {
        setTimeout(()=>{
            loading.classList.add('fadeout');
            setTimeout(()=>{loading.classList.add('zero');},2000);
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

    //declare in header
    // gsap.registerPlugin(ScrollTrigger);
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
    

    gsap.to('#text1', {scrollTrigger:{trigger: ".textContainerSection"},opacity:1,x:0,duration:1.5});
    gsap.to('.habitacionesSection h2', {scrollTrigger: ".habitacionesSection",opacity:1,x:0,duration:1.5});
    gsap.to('#carouselHabitaciones', {scrollTrigger: ".habitacionesSection",opacity:1,y:0,duration:1.5});
    

    //TRIPADVIROS
    gsap.set('#tripAdvisorContainer',{opacity:0,x:-100});
    gsap.to('#tripAdvisorContainer', {scrollTrigger: ".tripAdvisorSection",opacity:1,x:0,duration:1.5});


    //servicios
    let tlTraslados = gsap.timeline({scrollTrigger: {trigger: ".trasladosContainer"}});
    tlTraslados.to("#imageTraslados", {opacity:1,x:0,duration:1.5});
    tlTraslados.to("#imageTrasladosMobile", {opacity:1,x:0,duration:1.5});
    tlTraslados.to("#iconTraslados", {opacity:1,duration:0.5}, "-=0.2");
    tlTraslados.to("#textTraslados", {opacity:1,y:0,duration:0.5}, "-=0.2");
    tlTraslados.to("#trasladosButton", {opacity:1});
    let tlSensaciones = gsap.timeline({scrollTrigger: {trigger: ".sensacionesContainer"}});
    tlSensaciones.to("#imageSensaciones", {opacity:1,x:0,duration:1.5});
    tlSensaciones.to("#imageSensacionesMobile", {opacity:1,x:0,duration:1.5});
    tlSensaciones.to("#iconSensaciones", {opacity:1,duration:0.5}, "-=0.2");
    tlSensaciones.to("#textSensaciones", {opacity:1,y:0,duration:0.5}, "-=0.2");
    tlSensaciones.to("#sensacionesButton", {opacity:1});
    let tlTours = gsap.timeline({scrollTrigger: {trigger: ".toursContainer"}});
    tlTours.to("#imageTours", {opacity:1,x:0,duration:1.5});
    tlTours.to("#imageToursMobile", {opacity:1,x:0,duration:1.5});
    tlTours.to("#iconTours", {opacity:1,duration:0.5}, "-=0.2");
    tlTours.to("#textTours", {opacity:1,y:0,duration:0.5}, "-=0.2");
    tlTours.to("#toursButton", {opacity:1});
    let tlCena = gsap.timeline({scrollTrigger: {trigger: ".cenaContainer"}});
    tlCena.to("#imageCena", {opacity:1,x:0,duration:1.5});
    tlCena.to("#imageCenaMobile", {opacity:1,x:0,duration:1.5});
    tlCena.to("#iconCena", {opacity:1,duration:0.5}, "-=0.2");
    tlCena.to("#textCena", {opacity:1,y:0,duration:0.5}, "-=0.2");
    tlCena.to("#cenaButton", {opacity:1});
    

    //galeria
    let tlRincon = gsap.timeline({scrollTrigger: {trigger: ".gridImages"}});
    tlRincon.to("#rincon_1", {opacity:1,scale:1.0,duration:0.5},"-=0.2");
    tlRincon.to("#rincon_2", {opacity:1,scale:1.0,duration:0.5},"-=0.2");
    tlRincon.to("#rincon_3", {opacity:1,scale:1.0,duration:0.5},"-=0.2");
    tlRincon.to("#rincon_4", {opacity:1,scale:1.0,duration:0.5},"-=0.2");
    tlRincon.to("#rincon_5", {opacity:1,scale:1.0,duration:0.5},"-=0.2");
    tlRincon.to("#rincon_6", {opacity:1,scale:1.0,duration:0.5},"-=0.2");

    let tlMosaico = gsap.timeline({scrollTrigger: {trigger: ".mosaico"}});
    tlMosaico.to("#rincon_1_desktop", {opacity:1,scale:1.0,duration:0.5},"-=0.2");
    tlMosaico.to("#rincon_2_desktop", {opacity:1,scale:1.0,duration:0.5},"-=0.2");
    tlMosaico.to("#rincon_3_desktop", {opacity:1,scale:1.0,duration:0.5},"-=0.2");
    tlMosaico.to("#rincon_4_desktop", {opacity:1,scale:1.0,duration:0.5},"-=0.2");
    tlMosaico.to("#rincon_5_desktop", {opacity:1,scale:1.0,duration:0.5},"-=0.2");
    tlMosaico.to("#rincon_6_desktop", {opacity:1,scale:1.0,duration:0.5},"-=0.2");
