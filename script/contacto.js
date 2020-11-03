	let loading = document.getElementById('loading');
    window.addEventListener('load', (event) => {
        loading.classList.add('fadeout');
        setTimeout(()=>{loading.classList.add('zero');},2000);
        let tl = gsap.timeline();
        tl.from('.contacto_header',{duration:1.5,translateY:200,opacity:0}),
        tl.to('.contacto_header',{translateY:0,opacity:1});
    });

    gsap.to('#text1', {scrollTrigger: ".contacto_texto",opacity:1,x:0,duration:1.5});
    gsap.to('#leftContainer', {scrollTrigger: ".contactoContainer",opacity:1,x:0,duration:1.5});
    gsap.to('#rightContainer', {scrollTrigger: ".contactoContainer",opacity:1,x:0,duration:1.5});
    gsap.to('#uneteAlEquipoContainer', {scrollTrigger: ".unirseContainer",opacity:1,y:0,duration:1.5});