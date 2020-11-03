<html ⚡="">
<head>
  <?php include('header_meta.php');?>
  <link rel="stylesheet" type="text/css" href="css/holbox-ubicacion.css">
</head>
<body>
  <?php include('header.php')?>
  <div class="indexContainer">
      <section class="ubicacion_header">
      </section>
      <section class="ubicacion_texto">
        <div class="container" id="text1">
          <h1><b>Ubicación</b></h1>
          <div class="title"><h2><b><i>Holbox</i></b> &harr; Centro del pueblo</h2></div>
          <p><b>1 kilometro y medio</b><br><b>20 minutos</b> caminando o <b>10 minutos</b> en bici aproximado. </p>
        </div>
      </section>
      <section class="mapaContainer">
        <div class="container" id="mapaContainer">
          <h1><i>Mapa de <b>HOLBOX</b></i></h1>
          <div>
              <amp-img class="desktop" layout="responsive" width="1920" height="1080" src="img/holbox-ubicacion-mapa.webp">
              <amp-img fallback layout="responsive" width="1080" height="720" src="img/holbox-ubicacion-mapa.jpg"></amp-img>
            </amp-img>
            <amp-img class="mobile" layout="responsive" width="360" height="640" src="img/holbox-ubicacion-mapa-mobile.webp">
              <amp-img fallback layout="responsive" width="360" height="640" src="img/holbox-ubicacion-mapa-mobile.jpg"></amp-img>
            </amp-img>
          </div>  
        </div>
      </section>
      
  </div>
  <?php include('footer.php')?>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/gsap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/ScrollTrigger.min.js"></script>
    <script type="text/javascript" src="script/holbox-ubicacion.js"></script>
</body>
</html>