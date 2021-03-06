	let loading = document.getElementById('loading');
    window.addEventListener('load', (event) => {
        loading.classList.add('fadeout');setTimeout(()=>{loading.classList.add('zero');},2000);
        let tl = gsap.timeline();
        tl.from('.holbox_tour_header',{duration:1.5,translateY:200,opacity:0}),
        tl.to('.holbox_tour_header',{translateY:0,opacity:1});
    });


    gsap.registerPlugin(ScrollTrigger);
    gsap.to('#text1', {scrollTrigger: ".holbox_tour_texto",opacity:1,x:0,duration:1.5});
    gsap.to('.holbox_tours_container h2', {scrollTrigger: {trigger:".holbox_tours_container"},opacity:1,x:0,duration:1.5});


    let tlTiburonBallena = gsap.timeline({scrollTrigger: {trigger: "#tiburonBallenaBox"}});
    tlTiburonBallena.to('#TiburonBallena_desktop', {opacity:1,x:0,duration:0.5});
    tlTiburonBallena.to('#titleTiburonBallena', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlTiburonBallena.to('#textTiburonBallena',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlTiburonBallena.to('#textTiburonBallena2',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlTiburonBallena.to('#textTiburonBallena3',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlTiburonBallena.to('#textTiburonBallena4',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlTiburonBallena.to('#textTiburonBallena5',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlTiburonBallena.to('#textTiburonBallena6',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlTiburonBallena.to('#tiburonBallenaButton',{opacity:1,duration:0.5},"-=0.2");


    let tlTresIslas = gsap.timeline({scrollTrigger: {trigger: "#tresIslasBox"}});
    tlTresIslas.to('#TresIslas_desktop', {opacity:1,x:0,duration:0.5});
    tlTresIslas.to('#titleTresIslas', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlTresIslas.to('#textTresIslas1', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlTresIslas.to('#textTresIslas2', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlTresIslas.to('#textTresIslas3', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlTresIslas.to('#textTresIslas4', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlTresIslas.to('#textTresIslas5', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlTresIslas.to('#textTresIslas6', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlTresIslas.to('#textTresIslas7', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlTresIslas.to('#TresIslasButton', {opacity:1,duration:0.5},"-=0.2");


    let tlChichenItza= gsap.timeline({scrollTrigger: {trigger: "#chichenItzaBox"}});
    tlChichenItza.to('#chichenItza_desktop', {opacity:1,x:0,duration:0.5});
    tlChichenItza.to('#titlechichenItza', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlChichenItza.to('#textchichenItza1', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlChichenItza.to('#textchichenItza2', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlChichenItza.to('#textchichenItza3', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlChichenItza.to('#ChichenItzaButton', {opacity:1,duration:0.5},"-=0.2");


    let tlPescaAltura = gsap.timeline({scrollTrigger: {trigger: "#pescaDeAlturaBox"}});
    tlPescaAltura.to('#pescaDeAltura_desktop', {opacity:1,x:0,duration:0.5});
    tlPescaAltura.to('#titlePescaDeAltura', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlPescaAltura.to('#textPescaAltura1', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlPescaAltura.to('#textPescaAltura2', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlPescaAltura.to('#textPescaAltura3', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlPescaAltura.to('#textPescaAltura4', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlPescaAltura.to('#PescaAlturaButton', {opacity:1,duration:0.5},"-=0.2");


    let tlMiniPesca = gsap.timeline({scrollTrigger: {trigger: "#MiniPescaBox"}});
    tlMiniPesca.to('#MiniPesca_desktop', {opacity:1,x:0,duration:0.5});
    tlMiniPesca.to('#titleMiniPesca', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlMiniPesca.to('#textMiniPesca1', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlMiniPesca.to('#textMiniPesca2', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlMiniPesca.to('#MiniPescaButton', {opacity:1,duration:0.5},"-=0.2");

    let tlKayaks= gsap.timeline({scrollTrigger: {trigger: "#KayaksBox"}});
    tlKayaks.to('#Kayaks_desktop', {opacity:1,x:0,duration:0.5});
    tlKayaks.to('#titleKayaks', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlKayaks.to('#textKayaks', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlKayaks.to('#textKayaks2', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlKayaks.to('#KayaksButton', {opacity:1,duration:0.5},"-=0.2");


    let tlCarritoGolf = gsap.timeline({scrollTrigger: {trigger: "#CarritoGolfBox"}});
    tlCarritoGolf.to('#CarritoGolf_desktop', {opacity:1,x:0,duration:0.5});
    tlCarritoGolf.to('#titleCarritoGolf', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlCarritoGolf.to('#textCarritoGolf', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlCarritoGolf.to('#textCarritoGolf2', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlCarritoGolf.to('#CarritoGolfButton', {opacity:1,duration:0.5},"-=0.2");


    let tlBio= gsap.timeline({scrollTrigger: {trigger: "#BioBox"}});
    tlBio.to('#Bio_desktop', {opacity:1,x:0,duration:0.5});
    tlBio.to('#titleBio', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlBio.to('#textBio', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlBio.to('#textBio2', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlBio.to('#BioButton', {opacity:1,duration:0.5},"-=0.2");



    let tlAire = gsap.timeline({scrollTrigger: {trigger: "#AireBox"}});
    tlAire.to('#Aire_desktop', {opacity:1,x:0,duration:0.5});
    tlAire.to('#titleAire', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlAire.to('#textAire', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlAire.to('#textAire2', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlAire.to('#AireButton', {opacity:1,duration:0.5},"-=0.2");