	let loading = document.getElementById('loading');
    window.addEventListener('load', (event) => {
        loading.classList.add('fadeout');
        let tl = gsap.timeline();
        tl.from('.hotel_anfitriones_header',{duration:1.5,translateY:200,opacity:0}),
        tl.to('.hotel_anfitriones_header',{translateY:0,opacity:1});
    });


    gsap.registerPlugin(ScrollTrigger);
    gsap.to('.hotel_anfitriones_container h2', {scrollTrigger: {trigger:".hotel_anfitriones_container"},opacity:1,x:0,duration:1.5});



    let tlBodas = gsap.timeline({scrollTrigger: {trigger: "#BodasBox"}});
    tlBodas.to('#Bodas_desktop', {opacity:1,x:0,duration:0.5});
    tlBodas.to('#Bodas_mobile', {opacity:1,x:0,duration:0.5});
    tlBodas.to('#titleBodas', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlBodas.to('#textBodas',{opacity:1,x:0,duration:0.5},"-=0.2");

    let tlRetiros = gsap.timeline({scrollTrigger: {trigger: "#RetirosBox"}});
    tlRetiros.to('#Retiros_desktop', {opacity:1,x:0,duration:0.5});
    tlRetiros.to('#Retiros_mobile', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlRetiros.to('#titleRetiros', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlRetiros.to('#textRetiros', {opacity:1,x:0,duration:0.5},"-=0.2");

    let tlEventosEspeciales= gsap.timeline({scrollTrigger: {trigger: "#EventosEspecialesBox"}});
    tlEventosEspeciales.to('#EventosEspeciales_desktop', {opacity:1,x:0,duration:0.5});
    tlEventosEspeciales.to('#EventosEspeciales_mobile', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlEventosEspeciales.to('#titleEventosEspeciales', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlEventosEspeciales.to('#textEventosEspeciales', {opacity:1,x:0,duration:0.5},"-=0.2");


    gsap.to('.hotel_otrasattracciones_container h2', {scrollTrigger: {trigger:".hotel_otrasattracciones_container"},opacity:1,x:0,duration:1.5});

    let tlholboxSensaciones = gsap.timeline({scrollTrigger: {trigger: "#holboxSensacionesBox"}});
    tlholboxSensaciones.to('#imageSensaciones_desktop', {opacity:1,x:0,duration:0.5});
    tlholboxSensaciones.to('#imageSensaciones_mobile', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlholboxSensaciones.to('#titleSensaciones', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlholboxSensaciones.to('#iconSensaciones', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlholboxSensaciones.to('#sensacionesButton', {opacity:1,duration:0.5},"-=0.2");



    let tlTours = gsap.timeline({scrollTrigger: {trigger: "#toursBox"}});
    tlTours.to('#imageTours_desktop', {opacity:1,x:0,duration:0.5});
    tlTours.to('#imageTours_mobile', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlTours.to('#titleTours', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlTours.to('#iconTours', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlTours.to('#toursButton', {opacity:1,duration:0.5},"-=0.2");



    let tlTips = gsap.timeline({scrollTrigger: {trigger: "#tipsBox"}});
    tlTips.to('#imageTips_desktop', {opacity:1,x:0,duration:0.5});
    tlTips.to('#titleTips', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlTips.to('#iconTips', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlTips.to('#tipsButton', {opacity:1,duration:0.5},"-=0.2");