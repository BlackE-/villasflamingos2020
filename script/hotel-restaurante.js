	let loading = document.getElementById('loading');
    window.addEventListener('load', (event) => {
        loading.classList.add('fadeout');
        let tl = gsap.timeline();
        tl.from('.hotel_restaurante_header',{duration:1.5,translateY:200,opacity:0}),
        tl.to('.hotel_restaurante_header',{translateY:0,opacity:1});
    });


    gsap.registerPlugin(ScrollTrigger);
    gsap.to('#logoMangle', {scrollTrigger: ".hotel_restaurante_texto",opacity:1,duration:1.5});
    gsap.to('#text1', {scrollTrigger: ".hotel_restaurante_texto",opacity:1,x:0,duration:1.5});
    gsap.to('#cocinaAutor1_desktop', {scrollTrigger: ".activadorTexto2",opacity:1,x:0,duration:1.5});
    gsap.to('#cocinaAutor1_mobile', {scrollTrigger: ".activadorTexto2",opacity:1,x:0,duration:1.5});
    gsap.to('#cocinaAutor2_desktop', {scrollTrigger: ".activadorTexto2",opacity:1,x:0,duration:1.5});
    gsap.to('#cocinaAutor2_mobile', {scrollTrigger: ".activadorTexto2",opacity:1,x:0,duration:1.5});
    gsap.to('#text2', {scrollTrigger: ".activadorTexto2",opacity:1,x:0,duration:1.5});


    gsap.to('#experiencia_desktop', {scrollTrigger: ".activadorExperiencia",opacity:1,duration:1.5});
    gsap.to('#experiencia_mobile', {scrollTrigger: ".activadorExperiencia",opacity:1,duration:1.5});
    gsap.to('#text3', {scrollTrigger: ".activadorTexto3",opacity:1,x:0,duration:1.5});




    let tlBarPedales = gsap.timeline({scrollTrigger: {trigger: "#BarPedalesBox"}});
    tlBarPedales.to('#BarPedales_desktop', {opacity:1,x:0,duration:0.5});
    tlBarPedales.to('#BarPedales_mobile', {opacity:1,x:0,duration:0.5});
    tlBarPedales.to('#titleBarPedales', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlBarPedales.to('#textBarPedales1',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlBarPedales.to('#textBarPedales2',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlBarPedales.to('#textBarPedales3',{opacity:1,x:0,duration:0.5},"-=0.2");


    let tlCenaRomantica = gsap.timeline({scrollTrigger: {trigger: "#CenaRomanticaBox"}});
    tlCenaRomantica.to('#CenaRomantica_desktop', {opacity:1,x:0,duration:0.5});
    tlCenaRomantica.to('#CenaRomantica_mobile', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlCenaRomantica.to('#titleCenaRomantica', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlCenaRomantica.to('#textCenaRomantica', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlCenaRomantica.to('#CenaRomanticaButton', {opacity:1,duration:0.5},"-=0.2");

