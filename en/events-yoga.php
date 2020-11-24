<html ⚡="">
<head>
  <?php include('header_meta.php');?>
  <script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.2.js"></script>
  <script async custom-element="amp-lightbox-gallery" src="https://cdn.ampproject.org/v0/amp-lightbox-gallery-0.1.js"></script>
  <link rel="stylesheet" type="text/css" href="/css/eventos-yoga.css">
</head>
<body>
  <?php include('header.php')?>
  <div class="indexContainer">
      <section class="cenas_header">
      </section>
      <section class="cenas_texto">
        <div class="container" id="text1">
          <h1><b>YOGA</b></h1>
          <p><b><i><span>THE TRANQUILITY OF OUR TERRACE</span></i></b> inspires many internal voyages of discovery. <b>Villas Flamingos</b> opens its doors to those who seek the chance to attain perfect harmony. <br> We have <b><i>special packages</i></b>  for groups who wish to hold their retreats at our facilities.</p>
        </div>
      </section>
      <section class="carousel">
        <div class="container">
          <div class="carouselContainer">
           <amp-carousel lightbox id="carouselSala" type="slides" width="1080" height="720" layout="responsive" controls loop autoplay delay="5000" role="region" aria-label="Tipo Habitaciones">
              <?php
                for($i=1;$i<13;$i++){
                  echo '<div class="carouselDiv">
                          <div class="imgContainer">
                            <amp-img src="/img/eventos-yoga-'.$i.'.jpg" width="1080" height="720" layout="responsive"></amp-img>
                          </div>
                      </div>';
                }
              ?>
            </amp-carousel>
          </div>
          <div class="button" id="" role="button"><a href="contact"><span>CONTACT US</span></a></div>
        </div>
      </section>
  </div>
  <?php include('footer.php')?>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/gsap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/ScrollTrigger.min.js"></script>
    <script type="text/javascript" src="/script/eventos-yoga.js"></script>
</body>
</html>