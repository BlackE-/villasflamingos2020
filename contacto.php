<html ⚡="">

<head>
  <?php include('header_meta.php');?>
  <style amp-boilerplate="">body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate="">body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>

  <script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.2.js"></script>
  <script custom-element="amp-image-lightbox" src="https://cdn.ampproject.org/v0/amp-image-lightbox-0.1.js" async=""></script>
  <script custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js" async=""></script>

  <link rel="stylesheet" type="text/css" href="css/contacto.css">
</head>
<body>
  <?php include('header.php')?>
  <div class="indexContainer">
      <section class="contacto_header">
      </section>
      <section class="contacto_texto">
        <div class="container" id="text1">
          <h1><b>Contáctanos</b></h1>
          <p>Comentarios o preguntas <b><i><span>estamos siempre a la orden.</span></i></b></p>
          <div class="button" id="contactoButton" role="button"><a href=""><span>CONTÁCTANOS</span></a></div>
        </div>
      </section>
      <section class="contactoContainer">
        <div class="container">
          <div class="boxContainer" id="leftContainer">
                <div>
                  <amp-img src="img/villas-icono-email.svg" layout="responsive" width="57.7" height="39.51"></amp-img>
                </div>
                <div><a href="mailto:info@villasflamingos.com" target="_blank">info<b>@villasflamingos.</b>com</a></div>
                <div>
                  <amp-img layout="responsive" src="img/villas-icono-contacto.svg" width="40.83" height="46.53"></amp-img>
                </div>
                <div><a href="tel:1‑984‑875‑2167" target="_blank">1‑984‑875‑2167</a></div>
                <div>
                  <amp-img src="img/villas-icono-lugar.svg" layout="responsive" width="62.47" height="82.02"></amp-img>
                </div>
                <div>
                  <a href="" target="_blank"><i><b>Calle Paseo Kuka s/n,</b><br>Playa Norte Holbox,<br>Lazaro Cardenas,<br>Quintana Roo, 77310 México</i></a>
                </div>
          </div>
          <div class="boxContainer" id="rightContainer">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1855.6805133746448!2d-87.36628000000023!3d21.532734215771214!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fe5eb7580397%3A0xb0461ae527a5eba6!2sVillas+Flamingos!5e0!3m2!1sen!2suk!4v1409750295811" width="100%" height="350" frameborder="0" style="border:0"></iframe>
          </div>
      </section>
      <section class="unirseContainer">
        <div class="container">
          <div id="uneteAlEquipoContainer">
            <h1>Unete Al Equipo</h1>
            <p>Siempre estamos buscando a nuevo talento para entrar a nuestro equipo. Si quieres vivir y trabajar en el paraíso contáctanos con tu Curriculum Vitae y una carta del porqué te gustaría ser parte de Villas Flamingos.</p>
            <div class="button" id="uneteButton" role="button"><a href=""><span>CONTÁCTANOS</span></a></div>
          </div>
        </div>
      </section>
  </div>
  <?php include('footer.php')?>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/gsap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/ScrollTrigger.min.js"></script>
    <script type="text/javascript" src="script/contacto.js"></script>
</body>
</html>