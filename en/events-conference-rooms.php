<html ⚡="">
<head>
  <?php include('header_meta.php');?>
  <script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.2.js"></script>
  <script async custom-element="amp-lightbox-gallery" src="https://cdn.ampproject.org/v0/amp-lightbox-gallery-0.1.js"></script>
  <link rel="stylesheet" type="text/css" href="/css/eventos-sala-de-conferencia.css">
</head>
<body>
  <?php include('header.php')?>
  <div class="indexContainer">
      <section class="sala_header">
      </section>
      <section class="sala_texto">
        <div class="container" id="text1">
          <h1><b>CONFERENCE</b> ROOM</h1>
          <p>We’ll help you plan the <b><i><span>PERFECT EVENT TAILORED TO YOUR NEEDS.</span></i></b> From private areas for workshops to open areas in the sand and under the stars. <b><i>We offer various options so that you can execute your event in an unforgettable and creative way.</i></b> Contact us, we would love to help you plan your boutique event on the beach.</p>
        </div>
      </section>
      <section class="carousel">
        <div class="container">
          <div class="carouselContainer">
           <amp-carousel lightbox id="carouselSala" type="slides" width="1080" height="720" layout="responsive" controls loop autoplay delay="5000" role="region" aria-label="Tipo Habitaciones">
              <?php
                for($i=1;$i<5;$i++){
                  echo '<div class="carouselDiv">
                          <div class="imgContainer">
                            <amp-img src="/img/eventos-sala-de-conferencia-'.$i.'.jpg" width="1080" height="720" layout="responsive"></amp-img>
                          </div>
                      </div>';
                }
              ?>
            </amp-carousel>
            <div class="button" id="" role="button"><a href="contact"><span>CONTACT US</span></a></div>
          </div>
        </div>
      </section>
      
  </div>
  <?php include('footer.php')?>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/gsap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/ScrollTrigger.min.js"></script>
    <script type="text/javascript" src="/script/eventos-sala-de-conferencia.js"></script>
</body>
</html>