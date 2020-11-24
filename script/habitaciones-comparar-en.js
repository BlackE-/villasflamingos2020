	
    gsap.registerPlugin(ScrollTrigger);
    gsap.to('#text1', {scrollTrigger: ".habitaciones_cuartos_texto",opacity:1,x:0,duration:1.5});
    
    const select_left = document.getElementById('habitacion_select_left');
    const select_right = document.getElementById('habitacion_select_right');
    let stringData = ``;
    const setClass = (container,status) =>{(status) ? document.getElementById(container).classList.add('loaded') : document.getElementById(container).classList.remove('loaded') ;}
    const isRoom = (type,name) => {return type.room === name;}
    const request = async (type,container) => {
        setClass(`${container}img`,0);
        const response = await fetch('/script/habitaciones-en.json');
        const json = await response.json();
        let habitacion = json.find(element =>{
            return isRoom(element,type)
        });
        setContainer(habitacion,container);
        setTimeout(function(){setImages(habitacion,`${container}img`);},500);
        setTimeout(function(){setClass(`${container}img`,1);},1000);
    }

    const setContainer = (data,container) =>{
        stringData = ``;
        stringData += `<div class="habitacion_text">`;
        stringData += `     <div class="amenitades_box breakfast"><p class="title">`;
        stringData += (data.breakfast) ? `Breakfast included` : `Breakfast NOT included`;
        stringData += `     </p></div>`;
        stringData += `     <div class="amenitades_box vista"><img layout="responsive" `;
        stringData += (data.view) ? `src="/img/villas-icono-vistamar.svg"` : `src="/img/villas-icono-vistaparcial.svg"`;
        stringData += `width="106" height="100"/><p class="title">`;
        stringData += (data.view) ? `Ocean view"` : `Partial ocean view`;     
        stringData += `     </p></div>`;
        stringData += `     <div class="amenitades_box distanciaalmar"><p class="number">${data.distance} m</p><p class="title">Distance <br>to sea</p></div>`;
        stringData += `     <div class="amenitades_box superficie"><p class="number">${data.surface} m²</p><p class="title">Surface</p></div>`;
        stringData += `     <div class="amenitades_box planta"><p class="title">${data.Planta}</p></div>`;
        stringData += `     <div class="amenitades_box niveles"><p class="number">`;
        stringData += (!data.levels) ? `<hr>` : data.levels; 
        stringData += `     </p><p class="title">Levels</p></div>`;
        stringData += `     <div class="amenitades_box cama">`;
        stringData += (data.bed == 'King Size (1)') ? `<img src="/img/villas-icono-cama.svg" width="106" height="100"/>`: `<img src="/img/villas-icono-cama2.svg" width="106" height="100"/>` ;
        stringData += `     <p class="title">${data.bed}</p></div>`;
        stringData += `     <div class="amenitades_box capacidad"><p class="number">${data.capacity}</p><p class="title">Maximum <br>capacity</p></div>`;
        stringData += `     <div class="amenitades_box terrazaprivada">`;
        stringData += (data.terrance) ? `<img src="/img/villas-icono-terraza.svg"  width="106" height="100"/>` : `<hr>`;
        stringData += `     <p class="title">Private terrace</p></div>`;
        stringData += `     <div class="amenitades_box regaderaexterior"> `;
        stringData += (data.shower) ? `<img src="/img/villas-icono-regaderaexterior.svg"  width="106" height="100"/>` : `<hr>`;
        stringData += `     <p class="title">Outdoor<br>shower</p></div>`;
        stringData += `      <div class="amenitades_box albercaprivada">`;
        stringData += (data.pool) ? `<img src="/img/villas-icono-albercaprivada.svg" width="106" height="100"/>` : `<hr>`;
        stringData += `    <p class="title">Private<br>pool</p></div>`;
        stringData += `     <div class="amenitades_box jacuzziprivado">`;
        stringData += (data.jacuzzi) ? `<img src="/img/villas-icono-jacuzziprivado.svg" width="106" height="100"/>` : `<hr>`;
        stringData += `    <p class="title">Private <br>jacuzzi</p></div>`;
        stringData += `    <div class="amenitades_box aireacondicionado"><img src="/img/villas-icono-aire.svg" width="106" height="100"/><p class="title">Air <br>conditioning</p></div>`;
        stringData += `    <div class="amenitades_box cajafuerte"><img src="/img/villas-icono-cajafuerte.svg" width="106" height="100"/><p class="title">Safe</p></div>`;
        stringData += `    <div class="amenitades_box hamacas">`;
        stringData += (data.hammock) ? `<img src="/img/villas-icono-hamacas.svg" width="106" height="100"/>` : `<hr>`;
        stringData += `    <p class="title">Hammocks</p></div>`;
        stringData += `    <div class="amenitades_box frigobar"><img src="/img/villas-icono-frigobar.svg" width="106" height="100"/><p class="title">Minibar</p></div>`;
        stringData += `    <div class="amenitades_box detectorhumo"><img src="/img/villas-icono-detectorhumo.svg" width="106" height="100"/><p class="title">Smoke <br>detector</p></div>`;
        stringData += `    <div class="amenitades_box television"><hr><p class="title">Television</p></div>`;
        stringData += `    <div class="reservarButtonContainer"><div class="button" id="reservarBangalowJardinLeft" on="tap:reservar" role="button"><span>Book</span></div></div>`;
        stringData += `</div>`;
        document.getElementById(container).innerHTML = stringData;
    }

    const setImages = (data,container) =>{
        let roomNum = 1;
        let xLoop = 1;
        switch(data.room){
            case "cacao":xLoop = 2;break;
        }
        stringData = ``;
        roomNum = xLoop;
        for(let x = xLoop;x<=data.num;x++){stringData += `<div class="imgBox"><amp-img class='active' alt="${data.room}" src="/img/habitaciones-${data.room}-${x}.jpg"  width="1080" height="720"  layout="responsive"></amp-img></div>`;roomNum++;}
        if(data.num2 != '0'){
            let stringData2 = ``;
            for(let x = 1;x<=data.num2;x++){stringData2 += `<div class="imgBox vertical"><amp-img class='active' alt="${data.room}" src="/img/habitaciones-${data.room}-${roomNum}.jpg"  width="720" height="1080"  layout="responsive"></amp-img></div>`;roomNum++;}
            stringData += stringData2;   
        }
        document.getElementById(container).innerHTML = stringData;
    }

    request('suitemasterpalapa','left');
    request('bungalow-cielo','right');
    select_left.addEventListener('change',function(e){request(select_left.value,'left');}); 
    select_right.addEventListener('change',function(e){request(select_right.value,'right');}); 
     

    let tlReservar = gsap.timeline({scrollTrigger: {trigger: ".reservar_section"}});
    tlReservar.to('.reservar_section p',{opacity:1,y:0,duration:0.5});
    gsap.to('.habitaciones_container h2', {scrollTrigger: ".habitaciones_container",opacity:1,x:0,duration:1.5});


    let tlroom1 = gsap.timeline({scrollTrigger: {trigger: "#room1"}});
    tlroom1.to('#room1_desktop', {opacity:1,x:0,duration:0.5});
    tlroom1.to('#room1_title', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlroom1.to('#room1_Button', {opacity:1,duration:0.5},"-=0.2"); 

    let tltlroom2 = gsap.timeline({scrollTrigger: {trigger: "#room2"}});
    tltlroom2.to('#room2_desktop', {opacity:1,x:0,duration:0.5});
    tltlroom2.to('#room2_title', {opacity:1,y:0,duration:0.5},"-=0.2");
    tltlroom2.to('#room2_Button', {opacity:1,duration:0.5},"-=0.2");

    let tlroom3 = gsap.timeline({scrollTrigger: {trigger: "#room3"}});
    tlroom3.to('#room3_desktop', {opacity:1,x:0,duration:0.5});
    tlroom3.to('#room3_title', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlroom3.to('#room3_Button', {opacity:1,duration:0.5},"-=0.2");

    let tlroom4 = gsap.timeline({scrollTrigger: {trigger: "#room4"}});
    tlroom4.to('#room4_desktop', {opacity:1,x:0,duration:0.5});
    tlroom4.to('#room4_title', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlroom4.to('#room4_Button', {opacity:1,duration:0.5},"-=0.2");

    let tlroom5 = gsap.timeline({scrollTrigger: {trigger: "#room5"}});
    tlroom5.to('#room5_desktop', {opacity:1,x:0,duration:0.5});
    tlroom5.to('#room5_title', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlroom5.to('#room5_Button', {opacity:1,duration:0.5},"-=0.2");

    let tlroom6 = gsap.timeline({scrollTrigger: {trigger: "#room6"}});
    tlroom6.to('#room6_desktop', {opacity:1,x:0,duration:0.5});
    tlroom6.to('#room6_title', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlroom6.to('#room6_Button', {opacity:1,duration:0.5},"-=0.2");

    let tlroom7 = gsap.timeline({scrollTrigger: {trigger: "#room7"}});
    tlroom7.to('#room7_desktop', {opacity:1,x:0,duration:0.5});
    tlroom7.to('#room7_title', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlroom7.to('#room7_Button', {opacity:1,duration:0.5},"-=0.2");

    let tlsuiteLunaDeMiel = gsap.timeline({scrollTrigger: {trigger: "#room8"}});
    tlsuiteLunaDeMiel.to('#room8_desktop', {opacity:1,x:0,duration:0.5});
    tlsuiteLunaDeMiel.to('#room8_title', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlsuiteLunaDeMiel.to('#room8_Button', {opacity:1,duration:0.5},"-=0.2");

    let tlroom9 = gsap.timeline({scrollTrigger: {trigger: "#room9"}});
    tlroom9.to('#room9_desktop', {opacity:1,x:0,duration:0.5});
    tlroom9.to('#room9_title', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlroom9.to('#room9_Button', {opacity:1,duration:0.5},"-=0.2");

    let tlroom10 = gsap.timeline({scrollTrigger: {trigger: "#room10"}});
    tlroom10.to('#room10_desktop', {opacity:1,x:0,duration:0.5});
    tlroom10.to('#room10_title', {opacity:1,y:0,duration:0.5},"-=0.2");
    tlroom10.to('#room10_Button', {opacity:1,duration:0.5},"-=0.2");