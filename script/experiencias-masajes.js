	let loading = document.getElementById('loading');
    window.addEventListener('load', (event) => {
        loading.classList.add('fadeout');setTimeout(()=>{loading.classList.add('zero');},2000);
        let tl = gsap.timeline();
        tl.from('.tips_header',{duration:1.5,translateY:200,opacity:0}),
        tl.to('.tips_header',{translateY:0,opacity:1});
    });


    gsap.registerPlugin(ScrollTrigger);
    gsap.to('#text1', {scrollTrigger: ".tips_texto",opacity:1,x:0,duration:1.5});

    let tlMasaje1 = gsap.timeline({scrollTrigger: {trigger: "#masaje1Container"}});
    tlMasaje1.to('#masaje1_title h2', {opacity:1,y:0,duration:1.5});
    tlMasaje1.to('#masaje1_1', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlMasaje1.to('#masaje1_2',{opacity:1,y:0,duration:0.5},"-=0.2");


    let tlMasaje2 = gsap.timeline({scrollTrigger: {trigger: "#masaje2Container"}});
    tlMasaje2.to('#masaje2_title h2', {opacity:1,y:0,duration:1.5});
    tlMasaje2.to('#masaje2_1', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlMasaje2.to('#masaje2_2', {opacity:1,y:0,duration:0.5},"-=0.2");


    let tlMasaje3 = gsap.timeline({scrollTrigger: {trigger: "#masaje3Container"}});
    tlMasaje3.to('#masaje3_title h2', {opacity:1,y:0,duration:1.5});
    tlMasaje3.to('#masaje3_1', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlMasaje3.to('#masaje3_2', {opacity:1,y:0,duration:0.5},"-=0.2");


    let tlMasaje4 = gsap.timeline({scrollTrigger: {trigger: "#masaje4Container"}});
    tlMasaje4.to('#masaje4_title h2', {opacity:1,y:0,duration:1.5});
    tlMasaje4.to('#masaje4_1', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlMasaje4.to('#masaje4_2', {opacity:1,y:0,duration:0.5},"-=0.2");

    let tlMasaje5 = gsap.timeline({scrollTrigger: {trigger: "#masaje5Container"}});
    tlMasaje5.to('#masaje5_title h2', {opacity:1,y:0,duration:1.5});
    tlMasaje5.to('#masaje5_1', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlMasaje5.to('#masaje5_2', {opacity:1,y:0,duration:0.5},"-=0.2");

    let tlMasaje6 = gsap.timeline({scrollTrigger: {trigger: "#masaje6Container"}});
    tlMasaje6.to('#masaje6_title h2', {opacity:1,y:0,duration:1.5});
    tlMasaje6.to('#masaje6_1', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlMasaje6.to('#masaje6_2', {opacity:1,y:0,duration:0.5},"-=0.2");

    let tlMasaje7 = gsap.timeline({scrollTrigger: {trigger: "#masaje7Container"}});
    tlMasaje7.to('#masaje7_title h2', {opacity:1,y:0,duration:1.5});
    tlMasaje7.to('#masaje7_1', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlMasaje7.to('#masaje7_2', {opacity:1,y:0,duration:0.5},"-=0.2");
