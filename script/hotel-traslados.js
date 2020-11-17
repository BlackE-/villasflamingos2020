	let loading = document.getElementById('loading');
    window.addEventListener('load', (event) => {
        loading.classList.add('fadeout');
        setTimeout(()=>{loading.classList.add('zero');},2000);
        let tl = gsap.timeline();
        tl.from('.hotel_traslados_header',{duration:1.5,translateY:200,opacity:0}),
        tl.to('.hotel_traslados_header',{translateY:0,opacity:1});
    });


    gsap.registerPlugin(ScrollTrigger);
    gsap.to('#text1', {scrollTrigger: ".hotel_traslados_texto",opacity:1,x:0,duration:1.5});


    let tlHotelAeropuertoCancun = gsap.timeline({scrollTrigger: {trigger: "#holboxAeropuertoCancunBox"}});
    tlHotelAeropuertoCancun.to('#holboxAeropuertoCancuntitle h2', {opacity:1,y:0,duration:1.5});
    tlHotelAeropuertoCancun.to('#holboxAeropuertoCancunTipo', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlHotelAeropuertoCancun.to('#textholboxAeropuertoCancun', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlHotelAeropuertoCancun.to('#holboxAeropuertoCancunTipo2', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlHotelAeropuertoCancun.to('#textholboxAeropuertoCancun2',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlHotelAeropuertoCancun.to('#textholboxAeropuertoCancun3',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlHotelAeropuertoCancun.to('#textholboxAeropuertoCancun4',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlHotelAeropuertoCancun.to('#textholboxAeropuertoCancun5',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlHotelAeropuertoCancun.to('#textholboxAeropuertoCancun6',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlHotelAeropuertoCancun.to('#holboxAeropuertoCancunButton',{opacity:1,duration:0.5},"-=0.2");


    let tlholboxMerida = gsap.timeline({scrollTrigger: {trigger: "#holboxMeridaBox"}});
    tlholboxMerida.to('#holboxMeridatitle h2', {opacity:1,y:0,duration:1.5});
    tlholboxMerida.to('#holboxMeridaTipo', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlholboxMerida.to('#textholboxMerida', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlholboxMerida.to('#holboxMeridaTipo2', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlholboxMerida.to('#textholboxMerida2',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlholboxMerida.to('#textholboxMerida3',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlholboxMerida.to('#holboxMeridaButton',{opacity:1,duration:0.5},"-=0.2");


    let tlholboxRiviera = gsap.timeline({scrollTrigger: {trigger: "#holboxRivieraBox"}});
    tlholboxRiviera.to('#holboxRivieratitle h2', {opacity:1,y:0,duration:1.5});
    tlholboxRiviera.to('#textholboxRiviera', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlholboxRiviera.to('#textholboxRiviera2',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlholboxRiviera.to('#textholboxRiviera3',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlholboxRiviera.to('#textholboxRiviera4',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlholboxRiviera.to('#textholboxRiviera5',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlholboxRiviera.to('#textholboxRiviera6',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlholboxRiviera.to('#holboxRivieraButton',{opacity:1,duration:0.5},"-=0.2");