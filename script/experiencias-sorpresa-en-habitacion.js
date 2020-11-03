	let loading = document.getElementById('loading');
    window.addEventListener('load', (event) => {
        loading.classList.add('fadeout');setTimeout(()=>{loading.classList.add('zero');},2000);
        let tl = gsap.timeline();
        tl.from('.sorpresa_header',{duration:1.5,translateY:200,opacity:0}),
        tl.to('.sorpresa_header',{translateY:0,opacity:1});
    });

    gsap.to('#text1', {scrollTrigger: ".sorpresa_texto",opacity:1,x:0,duration:1.5}); 
    gsap.to('.carouselContainer', {scrollTrigger: ".carousel",opacity:1,x:0,duration:1.5}); 