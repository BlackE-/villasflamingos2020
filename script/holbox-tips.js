	let loading = document.getElementById('loading');
    window.addEventListener('load', (event) => {
        loading.classList.add('fadeout');setTimeout(()=>{loading.classList.add('zero');},2000);
        let tl = gsap.timeline();
        tl.from('.tips_header',{duration:1.5,translateY:200,opacity:0}),
        tl.to('.tips_header',{translateY:0,opacity:1});
    });

    gsap.to('#pro_tip h2', {scrollTrigger: ".tips_texto_2",opacity:1,y:0,duration:1.5});
    gsap.to('#text1', {scrollTrigger: ".tips_texto",opacity:1,x:0,duration:1.0});
    gsap.to('#text2', {scrollTrigger: ".tips_texto_2",opacity:1,y:0,duration:1.0});
    



    let tlQueHacer = gsap.timeline({scrollTrigger: {trigger: "#quehacerContainer"}});
    tlQueHacer.to('#quehacer_title h2', {opacity:1,y:0,duration:1.5});

    tlQueHacer.to('#quehacer_1', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlQueHacer.to('#quehacer_3',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlQueHacer.to('#quehacer_4',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlQueHacer.to('#quehacer_5',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlQueHacer.to('#quehacer_6',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlQueHacer.to('#quehacer_7',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlQueHacer.to('#quehacer_8',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlQueHacer.to('#quehacer_9',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlQueHacer.to('#quehacer_10',{opacity:1,x:0,duration:0.5},"-=0.2");
    tlQueHacer.to('#quehacer_11',{opacity:1,x:0,duration:0.5},"-=0.2");


    let tlQueTraer = gsap.timeline({scrollTrigger: {trigger: "#quetraerContainer"}});
    tlQueTraer.to('#quetraer_title h2', {opacity:1,y:0,duration:1.5});

    tlQueTraer.to('#quetraer_1', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlQueTraer.to('#quetraer_2', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlQueTraer.to('#quetraer_3', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlQueTraer.to('#quetraer_4', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlQueTraer.to('#quetraer_5', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlQueTraer.to('#quetraer_6', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlQueTraer.to('#quetraer_7', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlQueTraer.to('#quetraer_8', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlQueTraer.to('#quetraer_9', {opacity:1,x:0,duration:0.5},"-=0.2");
