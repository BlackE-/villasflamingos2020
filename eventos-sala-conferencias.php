<html ⚡="">
<head>
  <?php include('header_meta.php');?>
  <script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.2.js"></script>
  <link rel="stylesheet" type="text/css" href="css/eventos-sala-de-conferencia.css">
</head>
<body>
  <?php include('header.php')?>
  <div class="indexContainer">
      <section class="sala_header">
      </section>
      <section class="sala_texto">
        <div class="container" id="text1">
          <h1>Sala de <b>CONFERENCIA</b></h1>
          <p>Te ayudamos a planear tu <b><i><span>evento perfecto y a medida de tus necesidades.</span></i></b> Desde áreas privadas para talleres hasta áreas libres en la arena y bajo las estrellas. <b><i>Ofrecemos diversos escenarios para que puedas llevar a cabo tu evento de manera inolvidable y creativa.</i></b> Contáctanos, nos encantará ayudarte a planear tu evento boutique en la playa. </p>
        </div>
      </section>
      <section class="carousel">
        <div class="container">
          <div class="carouselContainer">
           <amp-carousel id="carouselSala" type="slides" width="1080" height="720" layout="responsive" controls loop autoplay delay="5000" role="region" aria-label="Tipo Habitaciones">
              <?php
                for($i=1;$i<5;$i++){
                  echo '<div class="carouselDiv">
                          <div class="imgContainer">
                            <amp-img class="desktop" src="img/eventos-sala-de-conferencia-'.$i.'.webp" width="1080" height="720" layout="responsive">
                              <amp-img fallback src="img/eventos-sala-de-conferencia-'.$i.'.jpg" width="1080" height="720" layout="responsive"></amp-img>
                            </amp-img>
                            <amp-img class="mobile" src="img/eventos-sala-de-conferencia-'.$i.'-mobile.webp" width="360" height="240" layout="responsive">
                                <amp-img fallback src="img/eventos-sala-de-conferencia-'.$i.'-mobile.jpg" width="360" height="240" layout="responsive"></amp-img>
                              </amp-img>
                          </div>
                      </div>';
                }
              ?>
            </amp-carousel>
            <div class="button" id="" role="button"><a href="contacto"><span>CONTACTANOS</span></a></div>
          </div>
        </div>
      </section>
      
  </div>
  <?php include('footer.php')?>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/gsap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/ScrollTrigger.min.js"></script>
    <script type="text/javascript" src="script/eventos-sala-de-conferencia.js"></script>
</body>
</html>