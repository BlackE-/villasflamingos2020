<html ⚡="">
<head>
  <?php include('header_meta.php');?>
  <script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.2.js"></script>
  <script async custom-element="amp-lightbox-gallery" src="https://cdn.ampproject.org/v0/amp-lightbox-gallery-0.1.js"></script>
  <link rel="stylesheet" type="text/css" href="css/hotel-restaurante-el-mangle.css">
</head>
<body>
  <?php include('header.php')?>
  <div class="indexContainer">
      <section class="hotel_restaurante_header"></section>
      <section class="hotel_restaurante_texto">
        <div id="logoMangle">
          <img src="img/villas-logo-el-mangle.svg">
        </div>
        <div class="container" id="text1">
          <h1><span><b><i>cocina de autor</i></b></span><br>sobre la playa de Holbox</h1>
          <p>Nuestro restaurante en Holbox es perfecto para deleitarse de las creaciones de nuestro <b>Chef Santiago Cutz Pool</b>, además, es el único que está completamente climatizado y eso lo hace perfecto para <b><i>contemplar los maravillosos atardeceres</i></b> que ofrece la naturaleza.</p>
          <p>Es un lugar de encuentro para artistas, personalidades de glamour y gente como tú, que esta <b><i>dispuesta a sorprenderse por los grandes detalles</i></b>. Nuestro equipo está listo para consentirte.</p>
        </div>
      </section>
      <section class="carousel">
        <div class="container">
          <div class="carouselContainer">
           <amp-carousel lightbox id="carouselSala" type="slides" width="1080" height="720" layout="responsive" controls loop autoplay delay="5000" role="region" aria-label="Tipo Habitaciones">
              <?php
                for($i=1;$i<15;$i++){
                  echo '<div class="carouselDiv">
                          <div class="imgContainer">
                            <amp-img src="img/hotel-restaurante-el-mangle-'.$i.'.jpg" width="1080" height="720" layout="responsive"></amp-img>
                          </div>
                      </div>';
                }
              ?>
            </amp-carousel>
          </div>
          <div class="hotel_restaurante_texto_2" id="text2">
            <p>Somos los únicos en mezclar lo vanguardista y la comida típica de la isla. No te pierdas nuestros eventos exclusivos especialmente diseñados por nuestro Chef Santiago Cutz Pool que te guiarán por una <b><span>experiencia gastronómica inolvidable.</span></b><br><br>Restaurante abierto al <b><i><span>público</span></i></b>, para reservaciones comunicarse con el hotel.<br></p>
            <p><b><i><span>Horarios:</span></i></b><br>Desayuno 7 am a 11:30 am<br>Comida 12pm a 6 pm<br>Cena 7 pm a 10:30 pm</p>
          </div>
      </section>

      <section class="menuContainer">
        <div class="container" id="imgMenu">
          <a href="/menu">
            <amp-img class="desktop" layout="responsive" width="1920" height="1080" src="img/hotel-restaurante-el-mangle-menu-desktop.jpg"/></amp-img>
            <amp-img class="mobile" layout="responsive" width="360" height="640" src="img/hotel-restaurante-el-mangle-menu-mobile.jpg"/></amp-img>
          </a>
          <div class="button" id="" role="button"><a href="/menu"><span>VER MENÚ</span></a></div>
          <hr>
        </div>
      </section>
      <section class="BarPedalesContainer">
        <div class="container">
          <div class="boxContainer" id="BarPedalesBox">
            <div class="box">
              <amp-img  id="BarPedales_desktop" alt="Bar Pedales" src="img/hotel-restaurante-el-mangle-bar-los-pedales-1.webp"  width="1080" height="720"  layout="responsive">
                <amp-img fallback alt="Bar Pedales" src="img/hotel-restaurante-el-mangle-bar-los-pedales-1.jpg"  width="1080" height="720"  layout="responsive"></amp-img>
              </amp-img>
            </div>
            <div class="boxTextContainer">
              <p class="title" id="titleBarPedales">Bar <b>LOS PEDALES</b></p>
              <p class="boxText" id="textBarPedales">No encontrarás ninguna <b><i>mesa más cerca de la orilla de la playa</i></b> en todo Holbox. Perfecto para tomar alguna bebida exótica en nuestros columpios al igual de <b><i>disfrutar de buena música mientras al atardecer</i></b> se despide. Es la excusa perfecta para dejar tus sandalias en la habitación y disfrutar de la arena en tus pies mientras observas las aves pasar sobre el horizonte del mar.</p>
            </div>
          </div>

          <div class="boxContainer" id="BarPedalesBox2">
            <div class="box">
              <div class="carouselContainer" id="BarPedales_carousel">
               <amp-carousel lightbox id="carouselBar" type="slides" width="1080" height="720" layout="responsive" controls loop autoplay delay="5000" role="region" aria-label="Tipo Habitaciones">
                  <?php
                    for($i=2;$i<8;$i++){
                      echo '<div class="carouselDiv">
                              <div class="imgContainer">
                                <amp-img src="img/hotel-restaurante-el-mangle-bar-los-pedales-'.$i.'.jpg" width="1080" height="720" layout="responsive"></amp-img>
                              </div>
                          </div>';
                    }
                  ?>
                </amp-carousel>
              </div>
            </div>
            <div class="boxTextContainer">
              <p class="boxText" id="text2BarPedales">Si no te quieres mover de donde estás tomando el sol, nosotros te llevamos desde una rica hamburguesa hasta algo que nunca has comido antes. <br><b>Deja consentirte por nosotros.</b><br><br>Aquí las <b><span>impresionantes puestas del sol</span></b> serán una invitación a disfrutarlas en compañía o solo, mientras reflexionas con estos atardeceres imponentes.</p>
            </div>
          </div>
        </div>
      </section>
  </div>
  <?php include('footer.php')?>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/gsap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/ScrollTrigger.min.js"></script>
    <script type="text/javascript" src="script/hotel-restaurante-el-mangle.js"></script>
</body>
</html>