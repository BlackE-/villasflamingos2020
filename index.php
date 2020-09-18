<html ⚡="">

<head>
  <?php include('header_meta.php');?>
  <style amp-boilerplate="">body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate="">body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>

  <script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.2.js"></script>
  <script custom-element="amp-image-lightbox" src="https://cdn.ampproject.org/v0/amp-image-lightbox-0.1.js" async=""></script>
  <script custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js" async=""></script>
  <script async custom-element="amp-video" src="https://cdn.ampproject.org/v0/amp-video-0.1.js"></script>
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <style amp-custom="">
  </style>
</head>
<body>
  <?php include('header.php')?>
  <div class="indexContainer">
      <section class="videoSection">
          <div class="videoContainer">
            <video muted="" loop="" playsinline="" id="vid" poster="img/villas_wide-poster.jpg">
              <source id="hvid" type="video/mp4">
            </video>
          </div>
      </section>
      <section class="textContainerSection">
        <div class="container" id="text1">
          <p>Existe un <b class="upper">lugar donde la naturaleza se manifiesta</b> como si nos invitara a olvidarnos de todo, donde podemos acercarnos más a nosotros mismos y el medio ambiente. Esto es Hotel Villas Flamingos, un lugar único que se encuentra <b><i>ubicado en la reserva natural de Yum-Balam</i></b> en la isla de Holbox.</p>
          <p><b>¿Qué esperas para visitarnos?</b><br>Aquí descubrirás que la playa, el mar y el aire de Holbox, es algo mágico que guardarás para siempre.</p>
          <p><b><i>Hotel Villas Flamingos</i></b> te invita a entregarte al placer y la relajación, a parar el tiempo y disfrutar al máximo.</p>
        </div>
      </section>
      <section class="habitacionesSection">
        <div class="container">
          <h2>Habitaciones</h2>
          <div class="controls">
            <button class="habitacionesSliderButton active" data-src="0"></button>
            <button class="habitacionesSliderButton" data-src="1"></button>
            <button class="habitacionesSliderButton" data-src="2"></button>
            <button class="habitacionesSliderButton" data-src="3"></button>
          </div>
          <div class="gridCarousel">
            <div class="habitacionesSlider" id="swipezone">
              <p class="habitacionesSliderNumber">04</p>
              <div class="sliderContainer active" id="1">
                <p class="habitacionInput">01</p>
                <amp-img class="habitacionesSlideImg desktop" src="img/home-carousel-1-desktop.webp" width="720" height="720" layout="responsive" alt="Habitacion Suite Luna" media="(min-width: 645px)">
                  <amp-img fallback src="img/home-carousel-1-desktop.jpg" width="720" height="720" layout="responsive" alt="Habitacion Suite Luna" media="(min-width: 645px)"></amp-img>
                </amp-img>
                <amp-img class="habitacionesSlideImg mobile" src="img/home-carousel-1-mobile.webp" width="250" height="250" layout="responsive" alt="Habitacion Suite Luna" media="(max-width: 644px)">
                  <amp-img fallback src="img/home-carousel-1-mobile.jpg" width="250" height="250" layout="responsive" alt="Habitacion Suite Luna" media="(max-width: 644px)"></amp-img>
                </amp-img>
              </div>
              <div class="sliderContainer next" id="2">
                <p class="habitacionInput">02</p>
                <amp-img class="habitacionesSlideImg desktop" src="img/home-carousel-2-desktop.webp" width="720" height="720" layout="responsive" alt="Habitacion Master" media="(min-width: 645px)">
                  <amp-img fallback src="img/home-carousel-2-desktop.jpg" width="720" height="720" layout="responsive" alt="Habitacion Master" media="(min-width: 645px)"
                  ></amp-img>
                </amp-img>
                <amp-img class="habitacionesSlideImg mobile" src="img/home-carousel-2-mobile.webp" width="250" height="250" layout="responsive" alt="Habitacion Master">
                  <amp-img fallback src="img/home-carousel-2-mobile.jpg" width="250" height="250" layout="responsive" alt="Habitacion Master"
                  ></amp-img>
                </amp-img>
              </div>
              <div class="sliderContainer" id="3">
                <p class="habitacionInput">03</p>
                <amp-img class="habitacionesSlideImg desktop" src="img/home-carousel-3-desktop.webp" width="720" height="720" layout="responsive" alt="Habitacion Bungalow Mangle" media="(min-width: 645px)">
                  <amp-img fallback src="img/home-carousel-3-desktop.jgp" width="720" height="720" layout="responsive" alt="Habitacion Bungalow Mangle" media="(min-width: 645px)"
                  ></amp-img>
                </amp-img>
                <amp-img class="habitacionesSlideImg mobile" src="img/home-carousel-3-mobile.webp" width="250" height="250" layout="responsive" alt="Habitacion Bungalow Mangle" media="(max-width: 644px)">
                  <amp-img fallback src="img/home-carousel-3-mobile.jpg" width="250" height="250" layout="responsive" alt="Habitacion Bungalow Mangle" media="(max-width: 644px)"
                  ></amp-img>
                </amp-img>
              </div>
              <div class="sliderContainer" id="4">
                <p class="habitacionInput">04</p>
                <amp-img class="habitacionesSlideImg desktop" src="img/home-carousel-4-desktop.webp" width="720" height="720" layout="responsive" alt="Habitacion Vista Jardín" media="(min-width: 645px)">
                  <amp-img fallback src="img/home-carousel-4-desktop.jpg" width="720" height="720" layout="responsive" alt="Habitacion Vista Jardín" media="(min-width: 645px)"
                  ></amp-img>
                </amp-img>
                <amp-img class="habitacionesSlideImg mobile" src="img/home-carousel-4-mobile.webp" width="250" height="250" layout="responsive" alt="Habitacion Vista Jardin" media="(max-width: 644px)">
                  <amp-img fallback src="img/home-carousel-4-mobile.jpg" width="250" height="250" layout="responsive" alt="Habitacion Vista Jardin" media="(max-width: 644px)"
                  ></amp-img>
                </amp-img>
              </div>
            </div>
            <div class="habitacionesText">
              <h3 class="habitacionesSliderh3 active">Suite <b>Luna de miel</b></h3>
              <h3 class="habitacionesSliderh3">Master <b>SUITE</b></h3>
              <h3 class="habitacionesSliderh3">Bungalos</h3>
              <h3 class="habitacionesSliderh3">Cuartos</h3>
              <p>Envueltas en vegetación y tranquilidad nuestras habitaciones <b><i>Vista Jardín y Vista Mar</i></b> ofrecen los mejores precios de nuestro hotel. <b><i>Un lugar perfecto</i></b> para tus vacaciones en Holbox.</p>
              <div id="reservaHabitaciones"on="tap:bookingButton" role="button"><span>RESERVAR ahora</span></div>
            </div>
          </div>
        </div>
      </section>
      <section class="tripAdvisorSection">
        <div class="container tripAdvisorContainer" id="tripAdvisorContainer">
          <amp-img src="img/tripadvisor_logo.png" width="149" height="23" ></amp-img>
          <h3>NUESTROS HUÉSPEDES</h3>
          <ul class="reviewList"> 
            <?php
                $strJsonFileContents = file_get_contents("script/reviews.json");
                  $array = json_decode($strJsonFileContents, true);
                if(is_array($array)){
                    $count = 0;
                      foreach ($array as $key => $val) {
                        if($count == 0){ echo '<li class="tripadvisorReview active"><blockquote>';}
                        else{ echo '<li class="tripadvisorReview"><blockquote>';}
                          $string = substr($val['descripcion'],0,50).'...';
                          echo '"'.$string.'" ';
                          echo '<cite><b>@'.$val['author'].'</b></cite>';
                          echo '</blockquote></li>';
                          $count++;
                      }
                }
            ?>
          </ul>
          <div class="tripadvisorButtons">
            <button class="tripadvisorButton active" data-src="0"></button>
            <button class="tripadvisorButton" data-src="1"></button>
            <button class="tripadvisorButton" data-src="2"></button>
            <button class="tripadvisorButton" data-src="3"></button>
          </div>
          
        </div>
      </section>
      <section class="serviciosSection">
        <div class="container">
          <h2>Nuestros Servicios</h2>
          <div class="box trasladosContainer">
            <amp-img class="image desktop" id="imageTraslados" alt="Villas traslados" src="img/home-servicios-traslados-desktop.webp" width="720" height="720" layout="responsive" media="(min-width: 645px)">
              <amp-img fallback alt="Villas traslados" src="img/home-servicios-traslados-desktop.jpg" width="720" height="720" layout="responsive" media="(min-width: 645px)"></amp-img>
            </amp-img>
            <amp-img class="image mobile" id="imageTrasladosMobile" alt="Villas traslados" src="img/home-servicios-traslados-mobile.webp" width="257" height="257" layout="responsive" media="(max-width: 644px)">
              <amp-img fallback alt="Villas traslados" src="img/home-servicios-traslados-mobile.jpg" width="257" height="257" layout="responsive" media="(max-width: 644px)"></amp-img>
            </amp-img>
            <amp-img class="icon" id="iconTraslados" src="img/home-servicios-traslados-icon.png" width="46" height="40"></amp-img>
            <p id="textTraslados"><b>TRASLADOS</b></p>
            <div class="button" id="trasladosButton" role="button"><a href="hotel-traslados"><span>DESCUBRE MÁS</span></a></div>
          </div>
          <div class="box sensacionesContainer">
            <amp-img class="image desktop" id="imageSensaciones" alt="Villas Sensaciones" src="img/home-servicios-sensaciones-desktop.webp"  width="720" height="720"  layout="responsive" media="(min-width: 645px)">
              <amp-img fallback alt="Villas Sensaciones" src="img/home-servicios-sensaciones-desktop.jpg"  width="720" height="720"  layout="responsive" media="(min-width: 645px)"></amp-img>
            </amp-img>
            <amp-img class="image mobile" id="imageSensacionesMobile" alt="Villas Sensaciones" src="img/home-servicios-sensaciones-mobile.webp" width="257" height="257" layout="responsive" media="(max-width: 644px)">
              <amp-img fallback alt="Villas Sensaciones" src="img/home-servicios-sensaciones-mobile.jpg" width="257" height="257" layout="responsive" media="(max-width: 644px)"></amp-img>
            </amp-img>
            <amp-img class="icon" id="iconSensaciones" src="img/home-servicios-sensaciones-icon.png" width="47" height="53"></amp-img>
            <p id="textSensaciones"><b>HOLBOX</b> y sus <b><i>SENSACIONES</i></b></p>
            <div class="button" id="sensacionesButton" role="button"><a href="holbox-sensaciones"><span>DESCUBRE MÁS</span></a></div>
          </div>
          <div class="box toursContainer">
            <amp-img class="image desktop" id="imageTours" alt="Villas Tours" src="img/home-servicios-tours-desktop.webp"  width="720" height="720"  layout="responsive" media="(min-width: 645px)">
              <amp-img fallback alt="Villas Tours" src="img/home-servicios-tours-desktop.jpg"  width="720" height="720"  layout="responsive" media="(min-width: 645px)"></amp-img>
            </amp-img>
            <amp-img class="image mobile" id="imageToursMobile" alt="Villas Tours" src="img/home-servicios-tours-mobile.webp" width="255" height="255" layout="responsive" media="(max-width: 644px)">
              <amp-img fallback alt="Villas Tours" src="img/home-servicios-tours-mobile.jpg" width="255" height="255" layout="responsive" media="(max-width: 644px)"></amp-img>
            </amp-img>
            <amp-img class="icon" id="iconTours" src="img/home-servicios-tours-icon.png" width="40" height="40"></amp-img>
            <p id="textTours"><b>TOURS</b></p>
            <div class="button" id="toursButton" role="button"><a href="holbox-tours"><span>DESCUBRE MÁS</span></a></div>
          </div>
          <div class="box cenaContainer">
            <amp-img class="image desktop" id="imageCena" alt="Villas Cena Romantica" src="img/home-servicios-cenaromantica-desktop.webp"  width="720" height="541"  layout="responsive" media="(min-width: 645px)">
              <amp-img fallback
              alt="Villas Cena Romantica" src="img/home-servicios-cenaromantica-desktop.jpg"  width="720" height="541"  layout="responsive" media="(min-width: 645px)"
              ></amp-img>
            </amp-img>
            <amp-img class="image mobile" id="imageCenaMobile" alt="Villas Cena Romantica" src="img/home-servicios-cenaromantica-mobile.webp" width="257" height="243" layout="responsive" media="(max-width: 644px)">
              <amp-img fallback
                alt="Villas Cena Romantica" src="img/home-servicios-cenaromantica-mobile.jpg" width="257" height="243" layout="responsive" media="(max-width: 644px)"
              ></amp-img>
            </amp-img>
            <amp-img class="icon" id="iconCena" src="img/home-servicios-cenaromantica-icon.png" width="40" height="40"></amp-img>
            <p id="textCena"><b>CENA <i>ROMÁNTICA</i></b></p>
            <div class="button" id="cenaButton" role="button"><a href="hotel-restaurante"><span>DESCUBRE MÁS</span></a></div>
          </div>
        </div>
      </section>
      <section class="ultimoRinconSection">
        <div class="container">
          <h2>El Útimo <br><b><i>RINCON DEL CARIBE</i></b></h2>
          <div class="desktop mosaico">
            <div>
              <amp-img class="rinconImg" id="rincon_1_desktop" layout="responsive" src="img/home-gallery-1-desktop.webp" width="500" height="723" media="(min-width: 645px)">
                <amp-img fallback
                  src="img/home-gallery-1-desktop.jpg" width="500" height="723" media="(min-width: 645px)"
                ></amp-img>
              </amp-img>
              <amp-img class="rinconImg" id="rincon_3_desktop" layout="responsive" src="img/home-gallery-3-desktop.webp" width="720" height="509" media="(min-width: 645px)">
                <amp-img fallback layout="responsive" src="img/home-gallery-3-desktop.jpg" width="720" height="509" media="(min-width: 645px)"
                ></amp-img>
              </amp-img>
            </div>
            <div>
              <amp-img class="rinconImg" id="rincon_2_desktop" layout="responsive" src="img/home-gallery-2-desktop.webp" width="720" height="688" media="(min-width: 645px)">
                <amp-img fallback layout="responsive" src="img/home-gallery-2-desktop.jpg" width="720" height="688" media="(min-width: 645px)"></amp-img>
              </amp-img>
              <amp-img class="rinconImg" id="rincon_4_desktop" layout="responsive" src="img/home-gallery-4-desktop.webp" width="500" height="500" media="(min-width: 645px)">
                <amp-img fallback layout="responsive" src="img/home-gallery-4-desktop.jpg" width="500" height="500" media="(min-width: 645px)"></amp-img>
              </amp-img>
            </div>
            <div>
              <amp-img class="rinconImg" id="rincon_5_desktop" layout="responsive" src="img/home-gallery-5-desktop.webp" width="500" height="621" media="(min-width: 645px)">
                <amp-img fallback layout="responsive" src="img/home-gallery-5-desktop.jpg" width="500" height="621" media="(min-width: 645px)"></amp-img>
              </amp-img>
              <amp-img class="rinconImg" id="rincon_6_desktop" layout="responsive" src="img/home-gallery-6-desktop.webp" width="720" height="711" media="(min-width: 645px)">
                <amp-img fallback layout="responsive" src="img/home-gallery-6-desktop.jpg" width="720" height="711" media="(min-width: 645px)"></amp-img>
              </amp-img>
            </div>
          </div>
          <div class="mobile gridImages">
            <div>
              <amp-img class="rinconImg" id="rincon_1" src="img/home-gallery-1-mobile.webp" width="157" height="227" layout="responsive" media="(max-width: 644px)">
                <amp-img fallback
                  src="img/home-gallery-1-mobile.jpg" width="157" height="227" layout="responsive" media="(max-width: 644px)"
                ></amp-img>
              </amp-img>
              <amp-img class="rinconImg" id="rincon_3" src="img/home-gallery-3-mobile.webp" width="157" height="111" layout="responsive" media="(max-width: 644px)">
                <amp-img fallback src="img/home-gallery-3-mobile.jpg" width="157" height="111" layout="responsive" media="(max-width: 644px)"></amp-img>
              </amp-img>
              <amp-img class="rinconImg" id="rincon_5" src="img/home-gallery-5-mobile.webp" width="157" height="159" layout="responsive" media="(max-width: 644px)">
                <amp-img fallback src="img/home-gallery-5-mobile.jpg" width="157" height="159" layout="responsive" media="(max-width: 644px)"></amp-img>
              </amp-img>
            </div>
            <div>
              <amp-img class="rinconImg" id="rincon_2" src="img/home-gallery-2-mobile.webp" width="159" height="152" layout="responsive" media="(max-width: 644px)">
                <amp-img fallback src="img/home-gallery-2-mobile.jpg" width="159" height="152" layout="responsive" media="(max-width: 644px)"></amp-img>
              </amp-img>
              <amp-img class="rinconImg" id="rincon_4" src="img/home-gallery-4-mobile rincon_4.webp" width="159" height="152" layout="responsive" media="(max-width: 644px)">
                <amp-img fallback src="img/home-gallery-4-mobile rincon_4.jpg" width="159" height="152" layout="responsive" media="(max-width: 644px)"></amp-img>
              </amp-img>
              <amp-img class="rinconImg" id="rincon_6" src="img/home-gallery-6-mobile.webp" width="159" height="157" layout="responsive" media="(max-width: 644px)">
                <amp-img fallback src="img/home-gallery-6-mobile.jpg" width="159" height="157" layout="responsive" media="(max-width: 644px)"></amp-img>
              </amp-img>
            </div>
            
          </div>
        </div>
      </section>
  </div>
  <?php include('footer.php')?>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/gsap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/ScrollTrigger.min.js"></script>
    <script type="text/javascript" src="script/swiped-events.min.js"></script>
    <script type="text/javascript" src="script/index.js"></script>
</body>
</html>