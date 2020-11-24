<html ⚡="">
<head>
  <?php include('header_meta.php');?>
  <script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.2.js"></script>
  <script async custom-element="amp-lightbox-gallery" src="https://cdn.ampproject.org/v0/amp-lightbox-gallery-0.1.js"></script>
  <link rel="stylesheet" type="text/css" href="/css/eventos-bodas.css">
</head>
<body>
  <?php include('header.php')?>
  <div class="indexContainer">
      <section class="cenas_header">
      </section>
      <section class="cenas_texto">
        <div class="container" id="text1">
          <h1><b>BODAS</b></h1>
            <p>Such a special celebration deserves a unique setting. During your ceremony<b><i><span> IMAGINE THE SUNSET OVER THE TURQUOISE SEA</span></i></b> as it slowly changes its hue. There is no more perfect combination than the natural landscape of the Holbox Sea and the most important day of your life. <b><i>Let us be part of that special day</i></b> that will last forever in your memory. <b><i><span>Also, with an unbeatable service.</span></i></b></p>
        </div>
      </section>
      <section class="carousel">
        <div class="container">
          <div class="carouselContainer">
           <amp-carousel lightbox id="carouselSala" type="slides" width="1080" height="720" layout="responsive" controls loop autoplay delay="5000" role="region" aria-label="Tipo Habitaciones">
              <?php
                for($i=1;$i<11;$i++){
                  echo '<div class="carouselDiv">
                          <div class="imgContainer">
                            <amp-img src="/img/eventos-boda-'.$i.'.jpg" width="1080" height="720" layout="responsive"></amp-img>
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
          <p>If you have any other <b>SPECIAL</b> event, we will gladly organize it for you.</p>
        </div>
        <div class="button" id="" role="button"><a href="contact"><span>CONTACT US</span></a></div>
      </section>
      
  </div>
  <?php include('footer.php')?>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/gsap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/ScrollTrigger.min.js"></script>
    <script type="text/javascript" src="/script/eventos-bodas.js"></script>
</body>
</html>