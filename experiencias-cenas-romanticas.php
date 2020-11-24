<html ⚡="">
<head>
  <?php include('header_meta.php');?>
  <script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.2.js"></script>
  <script async custom-element="amp-lightbox-gallery" src="https://cdn.ampproject.org/v0/amp-lightbox-gallery-0.1.js"></script>
  <link rel="stylesheet" type="text/css" href="css/experiencias-cenas-romanticas.css">
</head>
<body>
  <?php include('header.php')?>
  <div class="indexContainer">
      <section class="cenas_header">
      </section>
      <section class="cenas_texto">
        <div class="container" id="text1">
          <h1>Cenas <b>ROMÁNTICAS</b></h1>
          <p>Llegaste al lugar indicado. Te ofrecemos la experiencia más personalizada en Holbox, aquí la exclusividad es nuestra carta de presentación, pues <b><i>el mar, la brisa, los sonidos y el cielo,</i></b> son nuestros ingredientes principales para que tu celebración especial o ese momento íntimo, <b><i>lo vivas y lo guardes en tu corazón por siempre.</i></b> Nuestra mesa única, será la herramienta de nuestro Chef Santiago Cutz Pool que te tendrá listos <b><i><span>los más deliciosos platillos.</span></i></b> Podrás disfrutar sobre la cálida arena o bien con el mar a tus pies. Como es una experiencia exclusiva, <b><i>reserva tu cena romática</i></b> en Holbox</p>
        </div>
      </section>
      <section class="gridContainer">
        <div class="container"><h2>CENAS</h2></div>
        <div class="container" id="gridContainer">
          <div class="carouselContainer" id="carouselPlaya">
           <amp-carousel lightbox id="carouselPlayaAmp" type="slides" width="1080" height="720" layout="responsive" controls loop autoplay delay="5000" role="region" aria-label="Tipo Habitaciones">
              <div class="carouselDiv">
                  <div class="imgContainer">
                    <amp-img src="img/galeria-49.jpg" width="1080" height="720" layout="responsive"></amp-img>
                  </div>
              </div>
              <?php
                for($i=1;$i<4;$i++){
                  echo '<div class="carouselDiv">
                          <div class="imgContainer">
                            <amp-img src="img/experiencias-cenas-romanticas-'.$i.'.jpg" width="1080" height="720" layout="responsive"></amp-img>
                          </div>
                      </div>';
                }
              ?>
            </amp-carousel>
          </div>
          <div id="text2">
            <h1>en la Playa</h1>
            <ul>
              <li><p>Menú de tres tiempos</p></li>
              <li><p>Una botella de vino espumoso</p></li>
            </ul>
          </div>
        </div>
      </section>
      <section class="gridContainer2">
        <div class="container" id="gridContainer2">
          <div class="cenas_texto_3" id="text3">
            <h1>La palapita</h1>
            <ul>
              <li><p>Menú de tres tiempos</p></li>
              <li><p>Una botella de vino de la casa</p></li>
            </ul>
          </div>
          <div class="carouselContainer" id="carouselPalapa">
           <amp-carousel lightbox id="carouselPalapaAmp" type="slides" width="1080" height="720" layout="responsive" controls loop autoplay delay="5000" role="region" aria-label="Cena Palapa">
              <div class="carouselDiv">
                <div class="imgContainer">
                  <amp-img src="img/experiencias-cenas-romanticas-5.jpg" width="1080" height="720" layout="responsive"></amp-img>
                </div>
              </div>
              <div class="carouselDiv">
                <div class="imgContainer">
                  <amp-img src="img/experiencias-cenas-romanticas-4.jpg" width="1080" height="720" layout="responsive"></amp-img>
                </div>
              </div>
            </amp-carousel>
          </div>
        </div>
        <div class="button" id="" role="button"><a href=""><span>RESERVAR</span></a></div>
        <div class="container"><p class="note">Checa disponibilidad para reservar ya que solo se realiza una cena por categoría por noche.</p></div>
      </section>
      
  </div>
  <?php include('footer.php')?>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/gsap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/ScrollTrigger.min.js"></script>
    <script type="text/javascript" src="script/experiencias-cenas-romanticas.js"></script>
</body>
</html>