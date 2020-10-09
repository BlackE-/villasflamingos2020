<html ⚡="">

<head>
  <?php include('header_meta.php');?>
  <script async custom-element="amp-bind" src="https://cdn.ampproject.org/v0/amp-bind-0.1.js"></script>
  <script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.2.js"></script>
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
<amp-carousel id="carouselHabitaciones" type="slides" width="1280" height="550" layout="responsive" controls loop autoplay  delay="5000" role="region" aria-label="Tipo Habitaciones">
  <div class="carouselDiv vista-jardin">
      <div class="imgContainer">
        <amp-img class="desktop" src="img/habitaciones-vista-jardin-1.webp" width="1080" height="720" layout="responsive">
          <amp-img fallback src="img/habitaciones-vista-jardin-1.jpg" width="1080" height="720" layout="responsive"></amp-img>
        </amp-img>
        <amp-img class="mobile" src="img/habitaciones-vista-jardin-1-mobile.webp" width="360" height="240" layout="responsive">
                    <amp-img fallback src="img/habitaciones-vista-jardin-1-mobile.jpg" width="360" height="240" layout="responsive"></amp-img>
                  </amp-img>
      </div>
      <div class="dataContainer">
        <h3>Vista <b>Jardín</b></h3>
        <p>Envueltas en vegetación y tranquilidad nuestras habitaciones <b><i>Vista Jardín</i></b> ofrecen los mejores precios de nuestro hotel. <b><i>Un lugar perfecto</i></b> para tus vacaciones en Holbox.</p>
        <div class="reservaHabitaciones" on="tap:reservar" role="button"><span>RESERVAR ahora</span></div>
      </div>
  </div>
  <div class="carouselDiv vistaMar">
      <div class="imgContainer">
        <amp-img class="desktop" src="img/habitaciones-vista-mar-1.webp" width="1080" height="720" layout="responsive">
          <amp-img fallback src="img/habitaciones-vista-mar-1.jpg" width="1080" height="720" layout="responsive"></amp-img>
        </amp-img>
        <amp-img class="mobile" src="img/habitaciones-vista-mar-1-mobile.webp" width="360" height="240" layout="responsive">
                    <amp-img fallback src="img/habitaciones-vista-mar-1-mobile.jpg" width="360" height="240" layout="responsive"></amp-img>
                  </amp-img>
      </div>
      <div class="dataContainer">
        <h3>Vista <b>Mar</b></h3>
        <p>Dotadas de terrazas, nuestras habitaciones <b>Vista Mar</b> de nuestras más habitaciones más populares ofrecen los mejores precios de nuestro hotel. <b><i>Un lugar perfecto</i></b> para tus vacaciones en Holbox.</p>
        <div class="reservaHabitaciones" on="tap:reservar" role="button"><span>RESERVAR ahora</span></div>
      </div>
  </div>
  <div class="carouselDiv bungalowsJardin">
      <div class="imgContainer">
        <amp-img class="desktop" src="img/habitaciones-bungalow-jardin-1.webp" width="1080" height="720" layout="responsive">
          <amp-img fallback src="img/habitaciones-bungalow-jardin-1.jpg" width="1080" height="720" layout="responsive"></amp-img>
        </amp-img>
        <amp-img class="mobile" src="img/habitaciones-bungalow-jardin-1-mobile.webp" width="360" height="240" layout="responsive">
                    <amp-img fallback src="img/habitaciones-bungalow-jardin-1-mobile.jpg" width="360" height="240" layout="responsive"></amp-img>
                  </amp-img>
      </div>
      <div class="dataContainer">
        <h3>Bungalow <b>Jardín</b></h3>
        <p>Rodeados de un jardín tropical <b>Bungalow Jardín</b> cuenta con <i>piscina interior</i> con agua caliente. <b><i>Un lugar perfecto</i></b> para tus vacaciones en Holbox.</p>
        <div class="reservaHabitaciones" on="tap:reservar" role="button"><span>RESERVAR ahora</span></div>
      </div>
  </div>
  <div class="carouselDiv bungalowsArena">
      <div class="imgContainer">
        <amp-img class="desktop" src="img/habitaciones-bungalow-arena-1.webp" width="1080" height="720" layout="responsive" alt="Bungalow Arena">
          <amp-img fallback src="img/habitaciones-bungalow-arena-1.jpg" width="1080" height="720" layout="responsive" alt="Bungalow Arena"></amp-img>
        </amp-img>
        <amp-img class="mobile" src="img/habitaciones-bungalow-arena-1-mobile.webp" width="360" height="240" layout="responsive" alt="Bungalow Arena">
                    <amp-img fallback src="img/habitaciones-bungalow-arena-1-mobile.jpg" width="360" height="240" layout="responsive" alt="Bungalow Arena"></amp-img>
                  </amp-img>
      </div>
      <div class="dataContainer">
        <h3>Bungalow <b>Arena</b></h3>
        <p>El lugar perfecto para los amantes del mar, <b>Bungalow Arena</b>, ya que a tan sólo unos pasos, podrás sumergir tus pies en él. <b><i>Un lugar perfecto</i></b> para tus vacaciones en Holbox.</p>
        <div class="reservaHabitaciones" on="tap:reservar" role="button"><span>RESERVAR ahora</span></div>
      </div>
  </div>
  <div class="carouselDiv bungalowsMangle">
      <div class="imgContainer">
        <amp-img class="desktop" src="img/habitaciones-bungalow-mangle-1.webp" width="1080" height="720" layout="responsive" alt="Bungalow mangle">
          <amp-img fallback src="img/habitaciones-bungalow-mangle-1.jpg" width="1080" height="720" layout="responsive" alt="Bungalow mangle"></amp-img>
        </amp-img>
        <amp-img class="mobile" src="img/habitaciones-bungalow-mangle-1-mobile.webp" width="360" height="240" layout="responsive" alt="Bungalow mangle">
                    <amp-img fallback src="img/habitaciones-bungalow-mangle-1-mobile.jpg" width="360" height="240" layout="responsive" alt="Bungalow mangle"></amp-img>
                  </amp-img>
      </div>
      <div class="dataContainer">
        <h3>Bungalow <b>Mangle</b></h3>
        <p>Exclusivos bungalows de dos niveles, <b>Bungalow mangle</b>, podras disfrutar la brisa del mar y la vista al manglar. <b><i>Un lugar perfecto</i></b> para tus vacaciones en Holbox.</p>
        <div class="reservaHabitaciones" on="tap:reservar" role="button"><span>RESERVAR ahora</span></div>
      </div>
  </div>
  <div class="carouselDiv Cacao">
      <div class="imgContainer">
        <amp-img class="desktop" src="img/habitaciones-cacao-1.webp" width="1080" height="720" layout="responsive" alt="Cacao">
          <amp-img fallback src="img/habitaciones-cacao-1.jpg" width="1080" height="720" layout="responsive" alt="Cacao"></amp-img>
        </amp-img>
        <amp-img class="mobile" src="img/habitaciones-cacao-1-mobile.webp" width="360" height="240" layout="responsive" alt="Cacao">
                    <amp-img fallback src="img/habitaciones-cacao-1-mobile.jpg" width="360" height="240" layout="responsive" alt="Cacao"></amp-img>
                  </amp-img>
      </div>
      <div class="dataContainer">
        <h3><b>Cacao</b></h3>
        <p>Solamente hay una habitación de esta categoría por lo cual la hace muy codiciada <b>Cacao</b> está ubicada en un segundo nivel. <b><i>Un lugar perfecto</i></b> para tus vacaciones en Holbox.</p>
        <div class="reservaHabitaciones" on="tap:reservar" role="button"><span>RESERVAR ahora</span></div>
      </div>
  </div>
  <div class="carouselDiv Coco">
      <div class="imgContainer">
        <amp-img class="desktop" src="img/habitaciones-coco-1.webp" width="1080" height="720" layout="responsive" alt="Cacao">
          <amp-img fallback src="img/habitaciones-coco-1.jpg" width="1080" height="720" layout="responsive" alt="Cacao"></amp-img>
        </amp-img>
        <amp-img class="mobile" src="img/habitaciones-coco-1-mobile.webp" width="360" height="240" layout="responsive" alt="Cacao">
              <amp-img fallback src="img/habitaciones-coco-1-mobile.jpg" width="360" height="240" layout="responsive" alt="Cacao"></amp-img>
          </amp-img>
      </div>
      <div class="dataContainer">
        <h3><b>Coco</b></h3>
        <p>Solo hay una en su categoría, <b>Coco</b> su ubicación es privilegiada en planta baja y a escasos pasos de la orilla del mar. <b><i>Un lugar perfecto</i></b> para tus vacaciones en Holbox.</p>
        <div class="reservaHabitaciones" on="tap:reservar" role="button"><span>RESERVAR ahora</span></div>
      </div>
  </div>
  <div class="carouselDiv Miel">
      <div class="imgContainer">
        <amp-img class="desktop" src="img/habitaciones-miel-1.webp" width="1080" height="720" layout="responsive" alt="miel">
          <amp-img fallback src="img/habitaciones-miel-1.jpg" width="1080" height="720" layout="responsive" alt="miel"></amp-img>
        </amp-img>
        <amp-img class="mobile" src="img/habitaciones-miel-1-mobile.webp" width="360" height="240" layout="responsive" alt="miel">
              <amp-img fallback src="img/habitaciones-miel-1-mobile.jpg" width="360" height="240" layout="responsive" alt="miel"></amp-img>
          </amp-img>
      </div>
      <div class="dataContainer">
        <h3><b>Miel</b></h3>
        <p>Esta es la única habitación en donde podrás observar el amanecer y el atardecer desde tu jacuzzi localizado convenientemente al interior de la habitación para mayor privacidad. <b>Miel</b>. <b><i>Un lugar perfecto</i></b> para tus vacaciones en Holbox.</p>
        <div class="reservaHabitaciones" on="tap:reservar" role="button"><span>RESERVAR ahora</span></div>
      </div>
  </div>
  <div class="carouselDiv SuiteLunaDeMiel">
      <div class="imgContainer">
        <amp-img class="desktop" src="img/habitaciones-suitelunademiel-1.webp" width="1080" height="720" layout="responsive" alt="suitelunademiel">
          <amp-img fallback src="img/habitaciones-suitelunademiel-1.jpg" width="1080" height="720" layout="responsive" alt="suitelunademiel"></amp-img>
        </amp-img>
        <amp-img class="mobile" src="img/habitaciones-suitelunademiel-1-mobile.webp" width="360" height="240" layout="responsive" alt="suitelunademiel">
              <amp-img fallback src="img/habitaciones-suitelunademiel-1-mobile.jpg" width="360" height="240" layout="responsive" alt="suitelunademiel"></amp-img>
          </amp-img>
      </div>
      <div class="dataContainer">
        <h3>Suite Luna <b>de Miel</b></h3>
        <p>Esta es la única habitación están especialmente diseñadas para celebrar con tu persona especial. <b>Suite Luna de Miel</b>. <b><i>Un lugar perfecto</i></b> para tus vacaciones en Holbox.</p>
        <div class="reservaHabitaciones" on="tap:reservar" role="button"><span>RESERVAR ahora</span></div>
      </div>
  </div>
  <div class="carouselDiv BungalowCielo">
      <div class="imgContainer">
        <amp-img class="desktop" src="img/habitaciones-bungalow-cielo-1.webp" width="1080" height="720" layout="responsive" alt="bungalow-cielo">
          <amp-img fallback src="img/habitaciones-bungalow-cielo-1.jpg" width="1080" height="720" layout="responsive" alt="bungalow-cielo"></amp-img>
        </amp-img>
        <amp-img class="mobile" src="img/habitaciones-bungalow-cielo-1-mobile.webp" width="360" height="240" layout="responsive" alt="bungalow-cielo">
              <amp-img fallback src="img/habitaciones-bungalow-cielo-1-mobile.jpg" width="360" height="240" layout="responsive" alt="bungalow-cielo"></amp-img>
          </amp-img>
      </div>
      <div class="dataContainer">
        <h3>Bungalow <b>Cielo</b></h3>
        <p><b>Bungalow Cielo</b> es el reflejo del espíritu de Villas Flamingos, te garantizamos la mejor vista al mar de todo Holbox. <b><i>Un lugar perfecto</i></b> para tus vacaciones en Holbox.</p>
        <div class="reservaHabitaciones" on="tap:reservar" role="button"><span>RESERVAR ahora</span></div>
      </div>
  </div>
  <div class="carouselDiv SuiteMasterPalapa">
      <div class="imgContainer">
        <amp-img class="desktop" src="img/habitaciones-suitemasterpalapa-1.webp" width="1080" height="720" layout="responsive" alt="suitemasterpalapa">
          <amp-img fallback src="img/habitaciones-suitemasterpalapa-1.jpg" width="1080" height="720" layout="responsive" alt="SuiteMasterPalapa"></amp-img>
        </amp-img>
        <amp-img class="mobile" src="img/habitaciones-suitemasterpalapa-1-mobile.webp" width="360" height="240" layout="responsive" alt="SuiteMasterPalapa">
              <amp-img fallback src="img/habitaciones-suitemasterpalapa-1-mobile.jpg" width="360" height="240" layout="responsive" alt="SuiteMasterPalapa"></amp-img>
          </amp-img>
      </div>
      <div class="dataContainer">
        <h3>Suite Master <b>Palapa</b></h3>
        <p>Si quieres realmente sorprender a tu pareja entonces la <b>Master Suite Palapa</b> es tu elección<b><i>Un lugar perfecto</i></b> para tus vacaciones en Holbox.</p>
        <div class="reservaHabitaciones" on="tap:reservar" role="button"><span>RESERVAR ahora</span></div>
      </div>
  </div>
</amp-carousel>
          </div>
        </div>
      </section>
      <section class="tripAdvisorSection">
        <div class="container" id="tripAdvisorContainer">
          <amp-img src="img/tripadvisor_logo.png" width="149" height="23"></amp-img>
          <h3>NUESTROS HUÉSPEDES</h3>
          <div class="amp-carousel-container">
            <amp-state id="selected"><script type="application/json"> {"slide": 0} </script></amp-state>
            <amp-carousel type="slides" id="reviewsCarousel" width="360" height="100" layout="responsive" aria-label="Carousel reviews Trip Advisor" on="slideChange:AMP.setState({selected: {slide: event.index}})">
              <?php
                  $strJsonFileContents = file_get_contents("script/reviews.json");
                    $array = json_decode($strJsonFileContents, true);
                  if(is_array($array)){
                      $count = 0;
                      foreach ($array as $key => $val) {
                        echo '<div class="tripadvisorReview"><blockquote>';
                        $string = substr($val['descripcion'],0,50).'...';
                        echo '"'.$string.'" ';
                        echo '<cite><b>@'.$val['author'].'</b></cite>';
                        echo '</blockquote></div>';
                        $count++;
                      }
                  }
              ?>
            </amp-carousel>
          </div>
          <div class="tripadvisorButtons">
            <button [class]="selected.slide == 0 ? 'active' : ''" class="tripadvisorButton active"  on="tap:reviewsCarousel.goToSlide(index=0)"></button>
            <button [class]="selected.slide == 1 ? 'active' : ''" class="tripadvisorButton" on="tap:reviewsCarousel.goToSlide(index=1)"></button>
            <button [class]="selected.slide == 2 ? 'active' : ''" class="tripadvisorButton" on="tap:reviewsCarousel.goToSlide(index=2)"></button>
            <button [class]="selected.slide == 3 ? 'active' : ''" class="tripadvisorButton" on="tap:reviewsCarousel.goToSlide(index=3)"></button>
          </div>
          
        </div>
      </section>
      <section class="serviciosSection">
        <div class="container">
          <h2>Nuestros Servicios</h2>
          <div class="serviciosContainer">
            <div class="box trasladosContainer">
              <amp-img class="image desktop" id="imageTraslados" alt="Villas traslados" src="img/home-servicios-traslados-desktop.webp" width="720" height="720" layout="responsive" media="(min-width: 645px)">
                <amp-img fallback alt="Villas traslados" src="img/home-servicios-traslados-desktop.jpg" width="720" height="720" layout="responsive" media="(min-width: 645px)"></amp-img>
              </amp-img>
              <amp-img class="image mobile" id="imageTrasladosMobile" alt="Villas traslados" src="img/home-servicios-traslados-mobile.webp" width="257" height="257" layout="responsive" media="(max-width: 644px)">
                <amp-img fallback alt="Villas traslados" src="img/home-servicios-traslados-mobile.jpg" width="257" height="257" layout="responsive" media="(max-width: 644px)"></amp-img>
              </amp-img>
              <div class="iconTextcontainer">
                <amp-img class="icon" id="iconTraslados" src="img/home-servicios-traslados-icon.png" width="46" height="40"></amp-img>
                <p id="textTraslados"><b>TRASLADOS</b></p>
              </div>
              <div class="button" id="trasladosButton" role="button"><a href="hotel-traslados"><span>DESCUBRE MÁS</span></a></div>
            </div>
            <div class="box sensacionesContainer">
              <amp-img class="image desktop" id="imageSensaciones" alt="Villas Sensaciones" src="img/home-servicios-sensaciones-desktop.webp"  width="720" height="720"  layout="responsive" media="(min-width: 645px)">
                <amp-img fallback alt="Villas Sensaciones" src="img/home-servicios-sensaciones-desktop.jpg"  width="720" height="720"  layout="responsive" media="(min-width: 645px)"></amp-img>
              </amp-img>
              <amp-img class="image mobile" id="imageSensacionesMobile" alt="Villas Sensaciones" src="img/home-servicios-sensaciones-mobile.webp" width="257" height="257" layout="responsive" media="(max-width: 644px)">
                <amp-img fallback alt="Villas Sensaciones" src="img/home-servicios-sensaciones-mobile.jpg" width="257" height="257" layout="responsive" media="(max-width: 644px)"></amp-img>
              </amp-img>
              <div class="iconTextcontainer">
                <p id="textSensaciones"><b>HOLBOX</b> y sus <b><i>SENSACIONES</i></b></p>
                <amp-img class="icon" id="iconSensaciones" src="img/home-servicios-sensaciones-icon.png" width="47" height="53"></amp-img>
                </div>
              <div class="button" id="sensacionesButton" role="button"><a href="holbox-sensaciones"><span>DESCUBRE MÁS</span></a></div>
            </div>
          </div>
          <div class="serviciosContainer">
            <div class="box toursContainer">
              <div class="iconTextcontainer">
                <amp-img class="icon" id="iconTours" src="img/home-servicios-tours-icon.png" width="40" height="40"></amp-img>
                <p id="textTours"><b>TOURS</b></p>
              </div>
              <div class="button" id="toursButton" role="button"><a href="holbox-tours"><span>DESCUBRE MÁS</span></a></div>
              <amp-img class="image desktop" id="imageTours" alt="Villas Tours" src="img/home-servicios-tours-desktop.webp"  width="720" height="720"  layout="responsive" media="(min-width: 645px)">
                <amp-img fallback alt="Villas Tours" src="img/home-servicios-tours-desktop.jpg"  width="720" height="720"  layout="responsive" media="(min-width: 645px)"></amp-img>
              </amp-img>
              <amp-img class="image mobile" id="imageToursMobile" alt="Villas Tours" src="img/home-servicios-tours-mobile.webp" width="255" height="255" layout="responsive" media="(max-width: 644px)">
                <amp-img fallback alt="Villas Tours" src="img/home-servicios-tours-mobile.jpg" width="255" height="255" layout="responsive" media="(max-width: 644px)"></amp-img>
              </amp-img>
              
            </div>
            <div class="box cenaContainer">
              <div class="iconTextcontainer">
                <p id="textCena"><b>CENA <i>ROMÁNTICA</i></b></p>
                <amp-img class="icon" id="iconCena" src="img/home-servicios-cenaromantica-icon.png" width="40" height="40"></amp-img>
              </div>
              <div class="button" id="cenaButton" role="button"><a href="hotel-restaurante"><span>DESCUBRE MÁS</span></a></div>
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
              
            </div>
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
              <amp-img class="rinconImg" id="rincon_4" src="img/home-gallery-4-mobile.webp" width="159" height="152" layout="responsive" media="(max-width: 644px)">
                <amp-img fallback src="img/home-gallery-4-mobile.jpg" width="159" height="152" layout="responsive" media="(max-width: 644px)"></amp-img>
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
    <script type="text/javascript" src="script/index.js"></script>
</body>
</html>