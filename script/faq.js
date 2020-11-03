	let loading = document.getElementById('loading');
    window.addEventListener('load', (event) => {loading.classList.add('fadeout');setTimeout(()=>{loading.classList.add('zero');},2000);});

    gsap.registerPlugin(ScrollTrigger);
    gsap.to('#text1', {scrollTrigger: ".indexContainer",opacity:1,x:0,duration:1.5});