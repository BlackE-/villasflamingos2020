<html ⚡="">
<head>
  <?php include('header_meta.php');?>
  <script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.2.js"></script>
  <script async custom-element="amp-lightbox-gallery" src="https://cdn.ampproject.org/v0/amp-lightbox-gallery-0.1.js"></script>
  <link rel="stylesheet" type="text/css" href="/css/habitaciones.css">
</head>
<body>
  <?php include('header_habitaciones.php')?>
  <div class="indexContainer">
      <section class="habitaciones_cuartos_texto">
        <div class="container" id="text1">
          <h1><span><b>Honeymoon</b></span> Suite</h1>
          <p><b><i>Enjoy the most</i></b> with your partner in our Honeymoon Suite, specially designed to <span><b><i>celebrate with your significant other</i></b></span>. Conveniently located on the top floor for maximum privacy, they have an <b><i>ocean view and an indoor Jacuzzi</i></b> where you can spend hours relaxing while you listen to the sea and the birds of Holbox.</p>
        </div>
      </section>

      <section class="habitacionTipo_carousel">
        <div class="container">
          <div class="carouselContainer">
            <amp-carousel lightbox id="carouselHabitaciones" type="slides" width="1080" height="720" layout="responsive" controls loop autoplay delay="5000" role="region" aria-label="Tipo Habitaciones">
              <div class="carouselDiv">
                  <div class="imgContainer">
                    <amp-img  src="/img/habitaciones-suitelunademiel-1.jpg" width="1080" height="720" layout="responsive"></amp-img>
                  </div>
              </div>
              <div class="carouselDiv">
                  <div class="imgContainer">
                    <amp-img  src="/img/habitaciones-suitelunademiel-2.jpg" width="1080" height="720" layout="responsive"></amp-img>
                  </div>
              </div>
              <div class="carouselDiv">
                  <div class="imgContainer">
                    <amp-img  src="/img/habitaciones-suitelunademiel-3.jpg" width="1080" height="720" layout="responsive"></amp-img>
                  </div>
              </div>
              <div class="carouselDiv">
                  <div class="imgContainer">
                    <amp-img  src="/img/habitaciones-suitelunademiel-4.jpg" width="1080" height="720" layout="responsive"></amp-img>
                  </div>
              </div>
              <div class="carouselDiv">
                  <div class="imgContainer">
                    <amp-img  src="/img/habitaciones-suitelunademiel-5.jpg" width="1080" height="720" layout="responsive"></amp-img>
                  </div>
              </div>
              <div class="carouselDiv">
                  <div class="imgContainer">
                    <amp-img  src="/img/habitaciones-suitelunademiel-6.jpg" width="1080" height="720" layout="responsive"></amp-img>
                  </div>
              </div>
              <div class="carouselDiv">
                  <div class="imgContainer">
                    <amp-img  src="/img/habitaciones-suitelunademiel-7.jpg" width="1080" height="720" layout="responsive"></amp-img>
                  </div>
              </div>
              <div class="carouselDiv">
                  <div class="imgContainer">
                    <amp-img  src="/img/habitaciones-suitelunademiel-8.jpg" width="1080" height="720" layout="responsive"></amp-img>
                  </div>
              </div>
              <div class="carouselDiv">
                  <div class="imgContainer">
                    <amp-img  src="/img/habitaciones-suitelunademiel-9-carousel.jpg" width="1080" height="720" layout="responsive"></amp-img>
                  </div>
              </div>
              <div class="carouselDiv">
                  <div class="imgContainer">
                    <amp-img  src="/img/habitaciones-suitelunademiel-10-carousel.jpg" width="1080" height="720" layout="responsive"></amp-img>
                  </div>
              </div>
            </amp-carousel>
          </div>
          <div class="carousel_text">
            <h2>AMENITIES</h2>
            <ul class="amenidades">
              <li><p>Ocean view</p></li>
              <li><p>Distance to the sea: 20m (22 yards)</p></li>
              <li><p>Surface: 40m² (430 ft²)</p></li>
              <li><p>1 King size bed</p></li>
              <li><p>Private terrace</p></li>
              <li><p>Outdoor shower</p></li>
              <li><p>Private jacuzzi</p></li>
              <li><p>Air conditioning</p></li>
              <li><p>Safe </p></li>
              <li><p>Minibar</p></li>
              <li><p>Smoke detector</p></li>
            </ul>
          </div>
        </div>
      </section>

      <section class="reservar_section">
        <div class="container">
          <p>Maximum capacity: 2 adult guests<br>No kids allowed | 2 Level<br>All our rooms include a daily breakfast buffet for the guests.</p>
          <div class="button" id="reservar" role="button"><a href="#"><span>BOOK</span></a></div>
        </div>
      </section>
      <div class="container"><hr></div>
      <section class="habitaciones_container">
            <div class="container">
              <h2>Other <b>ROOMS</b></h2>
              <div class="boxContainer" >
                <div class="boxGrid" id="room1">
                  <div class="box">
                    <a href="rooms-vista-mar"><amp-img  id="room1_desktop" alt="Villas CUARTOS" src="/img/habitaciones-vista-mar-1.webp"  width="1080" height="720"  layout="responsive" >
                      <amp-img fallback alt="Villas CUARTOS" src="/img/habitaciones-vista-mar-1.jpg"  width="1080" height="720"  layout="responsive" ></amp-img>
                    </amp-img></a>
                    <p class="title" id="room1_title">Vista <b><i>MAR</i></b></p>
                    <div class="button" id="room1_Button" role="button"><a href="rooms-vista-mar"><span>Find Out More</span></a></div>
                  </div>
                </div>
                <div class="boxGrid" id="room2">
                    <div class="box">
                      <a href="rooms-bungalow-jardin"><amp-img  id="room2_desktop" alt="Villas CUARTOS" src="/img/habitaciones-bungalow-jardin-1.webp"  width="1080" height="720"  layout="responsive" >
                        <amp-img fallback alt="Villas CUARTOS" src="/img/habitaciones-bungalow-jardin-1.jpg"  width="1080" height="720"  layout="responsive" ></amp-img>
                      </amp-img></a>
                      <p class="title" id="room2_title">Bungalow <b><i>JARDÍN</i></b></p>
                      <div class="button" id="room2_Button" role="button"><a href="rooms-bungalow-jardin"><span>Find Out More</span></a></div>
                    </div>
                </div>
              </div>
              <div class="boxContainer" >
                <div class="boxGrid" id="room3">
                 <div class="box">
                    <a href="rooms-bungalow-arena"><amp-img  id="room3_desktop" alt="Villas CUARTOS" src="/img/habitaciones-bungalow-arena-1.webp"  width="1080" height="720"  layout="responsive" >
                      <amp-img fallback alt="Villas CUARTOS" src="/img/habitaciones-bungalow-arena-1.jpg"  width="1080" height="720"  layout="responsive" ></amp-img>
                    </amp-img></a>
                    <p class="title" id="room3_title">Bungalow <b><i>ARENA</i></b></p>
                    <div class="button" id="room3_Button" role="button"><a href="rooms-bungalow-arena"><span>Find Out More</span></a></div>
                  </div>
                </div>
                <div class="boxGrid" id="room4">
                     <div class="box">
                      <a href="rooms-bungalow-mangle"><amp-img  id="room4_desktop" alt="Villas CUARTOS" src="/img/habitaciones-bungalow-mangle-1.webp"  width="1080" height="720"  layout="responsive" >
                        <amp-img fallback alt="Villas CUARTOS" src="/img/habitaciones-bungalow-mangle-1.jpg"  width="1080" height="720"  layout="responsive" ></amp-img>
                      </amp-img></a>
                      <p class="title" id="room4_title">Bungalow <b><i>MANGLE</i></b></p>
                      <div class="button" id="room4_Button" role="button"><a href="rooms-bungalow-mangle"><span>Find Out More</span></a></div>
                    </div>
                </div>
              </div>
              <div class="boxContainer" >
                <div class="boxGrid" id="room5">
                  <div class="box">
                    <a href="rooms-cacao"><amp-img  id="room5_desktop" alt="Villas CUARTOS" src="/img/habitaciones-cacao-1.webp"  width="1080" height="720"  layout="responsive" >
                      <amp-img fallback alt="Villas CUARTOS" src="/img/habitaciones-cacao-1.jpg"  width="1080" height="720"  layout="responsive" ></amp-img>
                    </amp-img></a>
                    <p class="title" id="room5_title"><b><i>CACAO</i></b></p>
                    <div class="button" id="room5_Button" role="button"><a href="rooms-cacao"><span>Find Out More</span></a></div>
                  </div>
                </div>
                <div class="boxGrid" id="room6">
                    <div class="box">
                      <a href="rooms-coco"><amp-img  id="room6_desktop" alt="Villas CUARTOS" src="/img/habitaciones-coco-1.webp"  width="1080" height="720"  layout="responsive" >
                        <amp-img fallback alt="Villas CUARTOS" src="/img/habitaciones-coco-1.jpg"  width="1080" height="720"  layout="responsive" ></amp-img>
                      </amp-img></a>
                      <p class="title" id="room6_title"><b><i>COCO</i></b></p>
                      <div class="button" id="room6_Button" role="button"><a href="rooms-coco"><span>Find Out More</span></a></div>
                    </div>
                </div>
              </div>
              <div class="boxContainer" >
                <div class="boxGrid" id="room7">
                  <div class="box">
                    <a href="rooms-miel"><amp-img  id="room7_desktop" alt="Villas CUARTOS" src="/img/habitaciones-miel-1.webp"  width="1080" height="720"  layout="responsive" >
                      <amp-img fallback alt="Villas CUARTOS" src="/img/habitaciones-miel-1.jpg"  width="1080" height="720"  layout="responsive" ></amp-img>
                    </amp-img></a>
                    <p class="title" id="room7_title"><b><i> MIEL</i></b></p>
                    <div class="button" id="room7_Button" role="button"><a href="rooms-miel"><span>Find Out More</span></a></div>
                  </div>
                </div>
                <div class="boxGrid" id="room8">
                    <div class="box">
                      <a href="rooms-bungalow-cielo"><amp-img  id="room8_desktop" alt="Villas CUARTOS" src="/img/habitaciones-bungalow-cielo-1.webp"  width="1080" height="720"  layout="responsive" >
                        <amp-img fallback alt="Villas CUARTOS" src="/img/habitaciones-bungalow-cielo-1.jpg"  width="1080" height="720"  layout="responsive" ></amp-img>
                      </amp-img></a>
                      <p class="title" id="room8_title">Bungalow<b><i>CIELO</i></b></p>
                      <div class="button" id="room8_Button" role="button"><a href="rooms-bungalow-cielo"><span>Find Out More</span></a></div>
                    </div>
                </div>
              </div>
              <div class="boxContainer" >
                <div class="boxGrid" id="room9">
                  <div class="box">
                    <a href="rooms-master-suite-palapa"><amp-img  id="room9_desktop" alt="Villas CUARTOS" src="/img/habitaciones-suitemasterpalapa-1.webp"  width="1080" height="720"  layout="responsive" >
                      <amp-img fallback alt="Villas CUARTOS" src="/img/habitaciones-suitemasterpalapa-1.jpg"  width="1080" height="720"  layout="responsive" ></amp-img>
                    </amp-img></a>
                    <p class="title" id="room9_title">Master <b><i>SUITE PALAPA</i></b></p>
                    <div class="button" id="room9_Button" role="button"><a href="rooms-master-suite-palapa"><span>Find Out More</span></a></div>
                  </div>
                </div>
              </div>
            </div>
      </section>
      <section class="habitacionescompararContainer">
        <div class="container" id="compararContainer">
          <div>
            <h1><b>Compare</b><br>our rooms</h1>
            <div class="button" id="compararButton" role="button"><a href="rooms-compare"><span>Find Out More</span></a></div>
          </div>
        </div>
      </section>

      </div>
  <?php include('footer.php')?>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/gsap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/ScrollTrigger.min.js"></script>
    <script type="text/javascript" src="/script/habitaciones.js"></script>
</body>
</html>