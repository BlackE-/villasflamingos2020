	let loading = document.getElementById('loading');
    window.addEventListener('load', (event) => {
        loading.classList.add('fadeout');
        let tl = gsap.timeline();
        tl.from('.hotel_traslados_header',{duration:1.5,translateY:200,opacity:0}),
        tl.to('.hotel_traslados_header',{translateY:0,opacity:1});
    });


    gsap.registerPlugin(ScrollTrigger);
    gsap.to('#text1', {scrollTrigger: ".hotel_traslados_texto",opacity:1,x:0,duration:1.5});


    let tlHotelAeropuertoCancun = gsap.timeline({scrollTrigger: {trigger: "#holboxAeropuertoCancunBox"}});
    tlHotelAeropuertoCancun.to('#holboxAeropuertoCancuntitle h2', {opacity:1,y:0,duration:1.5});
    tlHotelAeropuertoCancun.to('#textholboxAeropuertoCancun', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlHotelAeropuertoCancun.to('#textholboxAeropuertoCancun2',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlHotelAeropuertoCancun.to('#textholboxAeropuertoCancun3',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlHotelAeropuertoCancun.to('#textholboxAeropuertoCancun4',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlHotelAeropuertoCancun.to('#holboxAeropuertoCancunButton',{opacity:1,duration:0.5},"-=0.2");


    let tlHotelCancun = gsap.timeline({scrollTrigger: {trigger: "#holboxCancunBox"}});
    tlHotelCancun.to('#holboxCancuntitle h2', {opacity:1,y:0,duration:1.5});
    tlHotelCancun.to('#textholboxCancun', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlHotelCancun.to('#textholboxCancun2',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlHotelCancun.to('#textholboxCancun3',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlHotelCancun.to('#textholboxCancun4',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlHotelCancun.to('#holboxCancunButton',{opacity:1,duration:0.5},"-=0.2");


    let tlholboxPlayaCarmen = gsap.timeline({scrollTrigger: {trigger: "#holboxPlayaCarmenBox"}});
    tlholboxPlayaCarmen.to('#holboxPlayaCarmentitle h2', {opacity:1,y:0,duration:1.5});
    tlholboxPlayaCarmen.to('#textholboxPlayaCarmen', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlholboxPlayaCarmen.to('#textholboxPlayaCarmen2',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlholboxPlayaCarmen.to('#textholboxPlayaCarmen3',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlholboxPlayaCarmen.to('#textholboxPlayaCarmen4',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlholboxPlayaCarmen.to('#holboxPlayaCarmenButton',{opacity:1,duration:0.5},"-=0.2");


    let tlholboxTulum = gsap.timeline({scrollTrigger: {trigger: "#holboxTulumBox"}});
    tlholboxTulum.to('#holboxTulumtitle h2', {opacity:1,y:0,duration:1.5});
    tlholboxTulum.to('#textholboxTulum', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlholboxTulum.to('#textholboxTulum2',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlholboxTulum.to('#textholboxTulum3',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlholboxTulum.to('#textholboxTulum4',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlholboxTulum.to('#holboxTulumButton',{opacity:1,duration:0.5},"-=0.2");    

    let tlholboxMerida = gsap.timeline({scrollTrigger: {trigger: "#holboxMeridaBox"}});
    tlholboxMerida.to('#holboxMeridatitle h2', {opacity:1,y:0,duration:1.5});
    tlholboxMerida.to('#textholboxMerida', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlholboxMerida.to('#textholboxMerida2',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlholboxMerida.to('#textholboxMerida3',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlholboxMerida.to('#textholboxMerida4',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlholboxMerida.to('#holboxMeridaButton',{opacity:1,duration:0.5},"-=0.2");


    let tlholboxVilladolid = gsap.timeline({scrollTrigger: {trigger: "#holboxVilladolidBox"}});
    tlholboxVilladolid.to('#holboxVilladolidtitle h2', {opacity:1,y:0,duration:1.5});
    tlholboxVilladolid.to('#textholboxVilladolid', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlholboxVilladolid.to('#textholboxVilladolid2',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlholboxVilladolid.to('#textholboxVilladolid3',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlholboxVilladolid.to('#textholboxVilladolid4',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlholboxVilladolid.to('#holboxVilladolidButton',{opacity:1,duration:0.5},"-=0.2");