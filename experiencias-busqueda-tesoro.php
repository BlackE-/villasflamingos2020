<html ⚡="">
<head>
  <?php include('header_meta.php');?>
  <script async custom-element="amp-video" src="https://cdn.ampproject.org/v0/amp-video-0.1.js"></script>
  <link rel="stylesheet" type="text/css" href="css/experiencias-busqueda-tesoro.css">
</head>
<body>
  <?php include('header.php')?>
  <div class="indexContainer">
      <section class="sorpresa_header">
      </section>
      <section class="sorpresa_texto">
        <div class="container" id="text1">
          <h1>Búsqueda del <b><span>TESORO</span></b></h1>
          <p><b><i>¿Te gusta la aventura?</i></b> Diviértete con nuestra búsqueda del tesoro. Con la ayuda de nuestras pistas, <b><i><span>supera las diferentes pruebas</span></i></b> hasta que llegues al tesoro escondido.</p>
        </div>
      </section>
      <section class="carousel">
        <div class="container">
          <div class="carouselContainer">
            <amp-video controls width="1280" height="720" layout="responsive" poster="img/experiencias-busqueda-tesoro-poster.jpg">
              <source src="img/experiencia-busqueda-tesoro.mp4" type="video/mp4" />
              <div fallback><p>This browser does not support the video element.</p></div>
            </amp-video>
          </div>
          <div class="button" id="" role="button"><a href="contacto"><span>CONTÁCTANOS</span></a></div>
        </div>
      </section>
      
  </div>
  <?php include('footer.php')?>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/gsap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/ScrollTrigger.min.js"></script>
    <script type="text/javascript" src="script/experiencias-busqueda-tesoro.js"></script>
</body>
</html>