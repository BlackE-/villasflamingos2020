	let loading = document.getElementById('loading');
    window.addEventListener('load', (event) => {
        loading.classList.add('fadeout');
        let tl = gsap.timeline();
        tl.from('.sensaciones_header',{duration:1.5,translateY:200,opacity:0}),
        tl.to('.sensaciones_header',{translateY:0,opacity:1});
    });


    gsap.registerPlugin(ScrollTrigger);
    gsap.to('#text1', {scrollTrigger: ".sensaciones_texto",opacity:1,x:0,duration:1.5});
    gsap.to('.sensaciones_atracciones h2', {scrollTrigger: ".sensaciones_atracciones",opacity:1,x:0,duration:1.5});
    

  //   gsap.to('#muelle_desktop', {
  //   	scrollTrigger:{
		//     trigger: "#muelleBox",
		//     markers:true
		// },
		// opacity:1,x:0,duration:1.5});

    let tlMuelle = gsap.timeline({scrollTrigger: {trigger: "#muelleBox"}});
    tlMuelle.to('#muelle_desktop', {opacity:1,x:0,duration:1.5});
    tlMuelle.to('#muelle_mobile', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlMuelle.to('#titleMuelle', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlMuelle.to('#textMuelle',{opacity:1,x:0,duration:0.5},"-=0.2");


    let tlPuntaCoco = gsap.timeline({scrollTrigger: {trigger: "#puntaCocoBox"}});
    tlPuntaCoco.to('#puntacoco_desktop', {opacity:1,x:0,duration:1.5});
    tlPuntaCoco.to('#puntacoco_mobile', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlPuntaCoco.to('#titlePuntaCoco', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlPuntaCoco.to('#textPuntaCoco', {opacity:1,x:0,duration:0.5},"-=0.2");


    let tlPuntaMosquito = gsap.timeline({scrollTrigger: {trigger: "#puntaMosquito"}});
    tlPuntaMosquito.to('#puntamosquito_desktop', {opacity:1,x:0,duration:1.5});
    tlPuntaMosquito.to('#puntamosquito_mobile', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlPuntaMosquito.to('#titlePuntaMosquito', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlPuntaMosquito.to('#textPuntaMosquito', {opacity:1,x:0,duration:0.5},"-=0.2");


    let tlCentro = gsap.timeline({scrollTrigger: {trigger: "#centroBox"}});
    tlCentro.to('#centro_desktop', {opacity:1,x:0,duration:1.5});
    tlCentro.to('#centro_mobile', {opacity:1,x:0,duration:0.5},"-=0.2");
    tlCentro.to('#titleCentro', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlCentro.to('#textCentro', {opacity:1,x:0,duration:0.5},"-=0.2");



    let tlTours = gsap.timeline({scrollTrigger: {trigger: ".toursContainer"}});
    tlTours.to("#imageTours", {opacity:1,x:0,duration:1.5});
    tlTours.to("#imageToursMobile", {opacity:1,x:0,duration:1.5});
    tlTours.to("#iconTours", {opacity:1,duration:0.5}, "-=0.2");
    tlTours.to("#textTours", {opacity:1,y:0,duration:0.5}, "-=0.2");
    tlTours.to("#toursButton", {opacity:1});


    let tlTips = gsap.timeline({scrollTrigger: {trigger: ".tipsContainer"}});
    tlTips.to("#imageTips", {opacity:1,x:0,duration:1.5});
    tlTips.to("#imageTipsMobile", {opacity:1,x:0,duration:1.5});
    tlTips.to("#iconTips", {opacity:1,duration:0.5}, "-=0.2");
    tlTips.to("#textTips", {opacity:1,y:0,duration:0.5}, "-=0.2");
    tlTips.to("#tipsButton", {opacity:1});