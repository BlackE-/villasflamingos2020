<html ⚡="">
<head>
  <?php include('header_meta.php');?>
  <link rel="stylesheet" type="text/css" href="/css/holbox-ubicacion.css">
</head>
<body>
  <?php include('header.php')?>
  <div class="indexContainer">
      <section class="ubicacion_header">
      </section>
      <section class="ubicacion_texto">
        <div class="container" id="text1">
          <h1><b>Location</b></h1>
          <div class="title"><h2><b><i>Holbox</i></b> &harr; Downtown</h2></div>
          <p><b>One and a half kilometer or 0.9 miles</b><br>Approximately  <b> 20 minutes</b> on foot or <b>10 minutes</b> by bike.</p>
        </div>
      </section>
      <section class="mapaContainer">
        <div class="container" id="mapaContainer">
          <h1><i><b>HOLBOX</b> Map</i></h1>
          <div>
              <amp-img class="desktop" layout="responsive" width="1920" height="1080" src="/img/holbox-ubicacion-map.webp">
              <amp-img fallback layout="responsive" width="1080" height="720" src="/img/holbox-ubicacion-map.jpg"></amp-img>
            </amp-img>
            <amp-img class="mobile" layout="responsive" width="360" height="640" src="/img/holbox-ubicacion-map-mobile.webp">
              <amp-img fallback layout="responsive" width="360" height="640" src="/img/holbox-ubicacion-map-mobile.jpg"></amp-img>
            </amp-img>
          </div>  
        </div>
      </section>
      
  </div>
  <?php include('footer.php')?>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/gsap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/ScrollTrigger.min.js"></script>
    <script type="text/javascript" src="/script/holbox-ubicacion.js"></script>
</body>
</html>