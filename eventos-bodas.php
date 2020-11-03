<html ⚡="">
<head>
  <?php include('header_meta.php');?>
  <script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.2.js"></script>
  <link rel="stylesheet" type="text/css" href="css/eventos-bodas.css">
</head>
<body>
  <?php include('header.php')?>
  <div class="indexContainer">
      <section class="cenas_header">
      </section>
      <section class="cenas_texto">
        <div class="container" id="text1">
          <h1><b>BODAS</b></h1>
          <p>Una celebración tan especial merece un lugar único. Durante tu ceremonia <b><i><span>imagina una puesta de sol sobre el mar turquesa</span></i></b> cambiando de tonalidad; no existe una combinación más perfecta que el paisaje natural del mar de Holbox y el día más importante de tu vida. <b><i>Déjanos ser parte de ese día tan especial</i></b> que perdurará para siempre en tu memoria. <b><i><span>Además, con un servicio inmejorable.</span></i></b></p>
        </div>
      </section>
      <section class="carousel">
        <div class="container">
          <div class="carouselContainer">
           <amp-carousel id="carouselSala" type="slides" width="1080" height="720" layout="responsive" controls loop autoplay delay="5000" role="region" aria-label="Tipo Habitaciones">
              <?php
                for($i=1;$i<11;$i++){
                  echo '<div class="carouselDiv">
                          <div class="imgContainer">
                            <amp-img class="desktop" src="img/eventos-boda-'.$i.'.webp" width="1080" height="720" layout="responsive">
                              <amp-img fallback src="img/eventos-boda-'.$i.'.jpg" width="1080" height="720" layout="responsive"></amp-img>
                            </amp-img>
                            <amp-img class="mobile" src="img/eventos-boda-'.$i.'-mobile.webp" width="360" height="240" layout="responsive">
                                <amp-img fallback src="img/eventos-boda-'.$i.'-mobile.jpg" width="360" height="240" layout="responsive"></amp-img>
                              </amp-img>
                          </div>
                      </div>';
                }
              ?>
            </amp-carousel>
          </div>
        </div>
      </section>
      <section class="cenas_texto_2">
        <div class="container" id="text2">
          <p>Si tienes algún evento en <b>ESPECIAL</b> con mucho gusto te lo organizamos.</p>
        </div>
        <div class="button" id="" role="button"><a href="contacto"><span>CONTÁCTANOS</span></a></div>
      </section>
      
  </div>
  <?php include('footer.php')?>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/gsap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/ScrollTrigger.min.js"></script>
    <script type="text/javascript" src="script/eventos-bodas.js"></script>
</body>
</html>