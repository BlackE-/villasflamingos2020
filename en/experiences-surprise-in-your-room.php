<html ⚡="">
<head>
  <?php include('header_meta.php');?>
  <script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.2.js"></script>
  <script async custom-element="amp-lightbox-gallery" src="https://cdn.ampproject.org/v0/amp-lightbox-gallery-0.1.js"></script>
  <link rel="stylesheet" type="text/css" href="/css/experiencias-sorpresa-en-habitacion.css">
</head>
<body>
  <?php include('header.php')?>
  <div class="indexContainer">
      <section class="sorpresa_header">
      </section>
      <section class="sorpresa_texto">
        <div class="container" id="text1">
          <h1>Surprise in <b><span>YOUR ROOM</span></b></h1>
          <p>If you want to experience the beach without leaving your room and <span><b>SURPRISE YOUR PARTNER</b></span> at the same time, don’t hesitate to book in advance this <b>special service</b> that includes a ceviche and beers in your room.</p>
        </div>
      </section>
      <section class="carousel">
        <div class="container">
          <div class="carouselContainer">
           <amp-carousel lightbox id="carouselSala" type="slides" width="1080" height="720" layout="responsive" controls loop autoplay delay="5000" role="region" aria-label="Tipo Habitaciones">
              <?php
                for($i=1;$i<4;$i++){
                  echo '<div class="carouselDiv">
                          <div class="imgContainer">
                            <amp-img src="/img/experiencias-sorpresa-en-habitacion-'.$i.'.jpg" width="1080" height="720" layout="responsive"></amp-img>
                          </div>
                      </div>';
                }
              ?>
            </amp-carousel>
          </div>
          <div class="button" id="" role="button"><a href=""><span>BOOK</span></a></div>
        </div>
      </section>
      
  </div>
  <?php include('footer.php')?>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/gsap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/ScrollTrigger.min.js"></script>
    <script type="text/javascript" src="/script/experiencias-sorpresa-en-habitacion.js"></script>
</body>
</html>