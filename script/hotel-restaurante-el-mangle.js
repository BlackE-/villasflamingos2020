	let loading = document.getElementById('loading');
    window.addEventListener('load', (event) => {
        loading.classList.add('fadeout');setTimeout(()=>{loading.classList.add('zero');},2000);
        let tl = gsap.timeline();
        tl.from('.hotel_restaurante_header',{duration:1.5,translateY:200,opacity:0}),
        tl.to('.hotel_restaurante_header',{translateY:0,opacity:1});
    });

    

    gsap.to('#logoMangle', {scrollTrigger: ".hotel_restaurante_texto",opacity:1,duration:2.5});
    gsap.to('#text1', {scrollTrigger: ".hotel_restaurante_texto",opacity:1,x:0,duration:1.5});
	gsap.to('.carouselContainer', {scrollTrigger: ".carousel",opacity:1,x:0,duration:1.5}); 
    gsap.to('#text2', {scrollTrigger: ".carousel",opacity:1,x:0,duration:1.5}); 


    let tlImg = gsap.timeline({scrollTrigger: {trigger: ".menuContainer"}});
    tlImg.to('#imgMenu', {opacity:1,duration:1.5});

    let tlBarPedales = gsap.timeline({scrollTrigger: {trigger: "#BarPedalesBox"}});
    tlBarPedales.to('#BarPedales_desktop', {opacity:1,x:0,duration:0.5});
    tlBarPedales.to('#titleBarPedales', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlBarPedales.to('#textBarPedales',{opacity:1,x:0,duration:0.5},"-=0.2");


    let tlBarPedales2 = gsap.timeline({scrollTrigger: {trigger: "#BarPedalesBox2"}});
    tlBarPedales2.to('#BarPedales_carousel', {opacity:1,x:0,duration:0.5});
    tlBarPedales2.to('#text2BarPedales',{opacity:1,x:0,duration:0.5},"-=0.2");

