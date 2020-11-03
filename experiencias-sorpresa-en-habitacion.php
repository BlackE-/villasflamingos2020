<html ⚡="">
<head>
  <?php include('header_meta.php');?>
  <script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.2.js"></script>
  <link rel="stylesheet" type="text/css" href="css/experiencias-sorpresa-en-habitacion.css">
</head>
<body>
  <?php include('header.php')?>
  <div class="indexContainer">
      <section class="sorpresa_header">
      </section>
      <section class="sorpresa_texto">
        <div class="container" id="text1">
          <h1>Sorpresa en <b><span>tu habitación</span></b></h1>
          <p>Si te quieres sentir en la playa sin salirte de tu habitación y <span><b>SORPRENDER A TU PAREJA</b></span> no dudes en solicitar anticipadamente este <b>detalle</b> que incluye un ceviche y cervezas en tu habitación.</p>
        </div>
      </section>
      <section class="carousel">
        <div class="container">
          <div class="carouselContainer">
           <amp-carousel id="carouselSala" type="slides" width="1080" height="720" layout="responsive" controls loop autoplay delay="5000" role="region" aria-label="Tipo Habitaciones">
              <?php
                for($i=1;$i<4;$i++){
                  echo '<div class="carouselDiv">
                          <div class="imgContainer">
                            <amp-img class="desktop" src="img/experiencias-sorpresa-en-habitacion-'.$i.'.webp" width="1080" height="720" layout="responsive">
                              <amp-img fallback src="img/experiencias-sorpresa-en-habitacion-'.$i.'.jpg" width="1080" height="720" layout="responsive"></amp-img>
                            </amp-img>
                            <amp-img class="mobile" src="img/experiencias-sorpresa-en-habitacion-'.$i.'-mobile.webp" width="360" height="240" layout="responsive">
                                <amp-img fallback src="img/experiencias-sorpresa-en-habitacion-'.$i.'-mobile.jpg" width="360" height="240" layout="responsive"></amp-img>
                              </amp-img>
                          </div>
                      </div>';
                }
              ?>
            </amp-carousel>
          </div>
          <div class="button" id="" role="button"><a href=""><span>RESERVAR</span></a></div>
        </div>
      </section>
      
  </div>
  <?php include('footer.php')?>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/gsap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/ScrollTrigger.min.js"></script>
    <script type="text/javascript" src="script/experiencias-sorpresa-en-habitacion.js"></script>
</body>
</html>