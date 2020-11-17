	let loading = document.getElementById('loading');
    window.addEventListener('load', (event) => {
        loading.classList.add('fadeout');setTimeout(()=>{loading.classList.add('zero');},2000);
        let tl = gsap.timeline();
        tl.from('.cenas_header',{duration:1.5,translateY:200,opacity:0}),
        tl.to('.cenas_header',{translateY:0,opacity:1});
    });

    gsap.to('#text1', {scrollTrigger: ".cenas_texto",opacity:1,x:0,duration:1.5}); 
    gsap.to('.carouselContainer', {scrollTrigger: ".gridContainer",opacity:1,x:0,duration:1.5}); 
    gsap.to('#text2', {scrollTrigger: ".gridContainer",opacity:1,y:0,duration:1.5});
    gsap.to('#gridContainer2 .imgContainer', {scrollTrigger: ".gridContainer2",opacity:1,x:0,duration:1.5});
    gsap.to('#text3', {scrollTrigger: ".gridContainer2",opacity:1,x:0,duration:1.5});