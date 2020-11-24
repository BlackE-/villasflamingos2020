<html ⚡="">
<head>
  <?php include('header_meta.php');?>
  <script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.2.js"></script>
  <script async custom-element="amp-lightbox-gallery" src="https://cdn.ampproject.org/v0/amp-lightbox-gallery-0.1.js"></script>
  <link rel="stylesheet" type="text/css" href="/css/experiencias-cenas-romanticas.css">
</head>
<body>
  <?php include('header.php')?>
  <div class="indexContainer">
      <section class="cenas_header">
      </section>
      <section class="cenas_texto">
        <div class="container" id="text1">
          <h1><b>ROMANTIC</b> Dinners</h1>
          <p>You have come to the right place. We offer the most personalized experience in Holbox, where exclusivity is our mark. <b><i>The sea, the breeze, the sounds and the sky</i></b> are the main ingredients for your special celebration or intimate moment, for you <b><i>to live cherish forever.</i></b> Our Chef Santiago Cutz Pool will have ready <b><i><span>THE MOST DELICIOUS DISHES</span></i></b> for you and your significant other at our unique table. You can choose to enjoy the warm sand or the sea at your feet. <b><i>Book your romantic dinner</i></b> in Holbox ahead, for it is an exclusive experience.</p>
        </div>
      </section>
      <section class="gridContainer">
        <div class="container"><h2>DINNERS</h2></div>
        <div class="container" id="gridContainer">
          <div class="carouselContainer" id="carouselPlaya">
           <amp-carousel lightbox id="carouselPlayaAmp" type="slides" width="1080" height="720" layout="responsive" controls loop autoplay delay="5000" role="region" aria-label="Tipo Habitaciones">
              <div class="carouselDiv">
                  <div class="imgContainer">
                    <amp-img src="/img/galeria-49.jpg" width="1080" height="720" layout="responsive"></amp-img>
                  </div>
              </div>
              <?php
                for($i=1;$i<4;$i++){
                  echo '<div class="carouselDiv">
                          <div class="imgContainer">
                            <amp-img src="/img/experiencias-cenas-romanticas-'.$i.'.jpg" width="1080" height="720" layout="responsive"></amp-img>
                          </div>
                      </div>';
                }
              ?>
            </amp-carousel>
          </div>
          <div id="text2">
            <h1>ON THE BEACH</h1>
            <ul>
              <li><p>Three course menu</p></li>
              <li><p>One bottle of sparkling wine</p></li>
            </ul>
          </div>
        </div>
      </section>
      <section class="gridContainer2">
        <div class="container" id="gridContainer2">
          <div class="cenas_texto_3" id="text3">
            <h1>LA PALAPITA</h1>
            <ul>
              <li><p>Three course menu</p></li>
              <li><p>One bottle of house wine</p></li>
            </ul>
          </div>
          <div class="carouselContainer" id="carouselPalapa">
           <amp-carousel lightbox id="carouselPalapaAmp" type="slides" width="1080" height="720" layout="responsive" controls loop autoplay delay="5000" role="region" aria-label="Cena Palapa">
              <div class="carouselDiv">
                <div class="imgContainer">
                  <amp-img src="/img/experiencias-cenas-romanticas-5.jpg" width="1080" height="720" layout="responsive"></amp-img>
                </div>
              </div>
              <div class="carouselDiv">
                <div class="imgContainer">
                  <amp-img src="/img/experiencias-cenas-romanticas-4.jpg" width="1080" height="720" layout="responsive"></amp-img>
                </div>
              </div>
            </amp-carousel>
          </div>
        </div>
        <div class="button" id="" role="button"><a href=""><span>Book</span></a></div>
        <div class="container"><p class="note">Check availability before booking, since we can only house one dinner per category per night.</p></div>
      </section>
      
  </div>
  <?php include('footer.php')?>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/gsap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/ScrollTrigger.min.js"></script>
    <script type="text/javascript" src="/script/experiencias-cenas-romanticas.js"></script>
</body>
</html>