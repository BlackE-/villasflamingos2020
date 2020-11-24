<html ⚡="">
<head>
  <?php include('header_meta.php');?>
  <script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.2.js"></script>
  <script async custom-element="amp-lightbox-gallery" src="https://cdn.ampproject.org/v0/amp-lightbox-gallery-0.1.js"></script>
  <link rel="stylesheet" type="text/css" href="/css/hotel-restaurante-el-mangle.css">
</head>
<body>
  <?php include('header.php')?>
  <div class="indexContainer">
      <section class="hotel_restaurante_header"></section>
      <section class="hotel_restaurante_texto">
        <div id="logoMangle">
          <img src="/img/villas-logo-el-mangle.svg">
        </div>
        <div class="container" id="text1">
          <h1><span><b><i>Signature cuisine</i></b></span><br>on the beach of Holbox</h1>
          <p>Our restaurant is the perfect place to enjoy Holbox, with the creations of our <b>Chef Santiago Cutz Pool.</b> Additionally, it is the only venue in the island that is fully air-conditioned, making it the perfect spot to contemplate the wonderful sunsets that nature offers.</p>
          <p>It is a meeting place for artists, glamorous personalities and people like you, who are <b><i>willing to be surprised by our great details.</i></b> Our team is fully ready to pamper you.</p>
        </div>
      </section>
      <section class="carousel">
        <div class="container">
          <div class="carouselContainer">
           <amp-carousel lightbox id="carouselSala" type="slides" width="1080" height="720" layout="responsive" controls loop autoplay delay="5000" role="region" aria-label="Tipo Habitaciones">
              <?php
                for($i=1;$i<15;$i++){
                  echo '<div class="carouselDiv">
                          <div class="imgContainer">
                            <amp-img src="/img/hotel-restaurante-el-mangle-'.$i.'.jpg" width="1080" height="720" layout="responsive"></amp-img>
                          </div>
                      </div>';
                }
              ?>
            </amp-carousel>
          </div>
          <div class="hotel_restaurante_texto_2" id="text2">
            <p>We are the only ones to mix the avant-garde and the typical food of the island. Don&#39;t miss out on our exclusive events specially designed by our Chef Santiago Cutz Pool who will guide you through an <b><span>unforgettable gastronomic experience.</span></b><br><br>Our restaurant is open to the public, for reservations contact the hotel.</p>
            <p><b><i><span>Opening hours:</span></i></b><br>Breakfast 7 am to 11:30 am<br>Lunch 12pm to 6 pm<br>Dinner 7 pm to 10:30 pm</p>
          </div>
      </section>

      <section class="menuContainer">
        <div class="container" id="imgMenu">
          <a href="/menu">
            <amp-img class="desktop" layout="responsive" width="1920" height="1080" src="/img/hotel-restaurante-el-mangle-menu-desktop.jpg"/></amp-img>
            <amp-img class="mobile" layout="responsive" width="360" height="640" src="/img/hotel-restaurante-el-mangle-menu-mobile.jpg"/></amp-img>
          </a>
          <div class="button" id="" role="button"><a href="/menu"><span>Check menu</span></a></div>
          <hr>
        </div>
      </section>
      <section class="BarPedalesContainer">
        <div class="container">
          <div class="boxContainer" id="BarPedalesBox">
            <div class="box">
              <amp-img  id="BarPedales_desktop" alt="Bar Pedales" src="/img/hotel-restaurante-el-mangle-bar-los-pedales-1.webp"  width="1080" height="720"  layout="responsive">
                <amp-img fallback alt="Bar Pedales" src="/img/hotel-restaurante-el-mangle-bar-los-pedales-1.jpg"  width="1080" height="720"  layout="responsive"></amp-img>
              </amp-img>
            </div>
            <div class="boxTextContainer">
              <p class="title" id="titleBarPedales">Bar <b>LOS PEDALES</b></p>
              <p class="boxText" id="textBarPedales">You will not find a <b><i>table closer to the seashore</i></b> in all of Holbox. Perfect for having an exotic drink on our swings as well as <b><i>enjoying good music while saying goodbye to the sunset.</i></b> It is the perfect excuse to leave your sandals in the room and enjoy the sand on your feet while watching the birds pass over the horizon of the sea.</p>
            </div>
          </div>

          <div class="boxContainer" id="BarPedalesBox2">
            <div class="box">
              <div class="carouselContainer" id="BarPedales_carousel">
               <amp-carousel lightbox id="carouselBar" type="slides" width="1080" height="720" layout="responsive" controls loop autoplay delay="5000" role="region" aria-label="Tipo Habitaciones">
                  <?php
                    for($i=2;$i<8;$i++){
                      echo '<div class="carouselDiv">
                              <div class="imgContainer">
                                <amp-img src="/img/hotel-restaurante-el-mangle-bar-los-pedales-'.$i.'.jpg" width="1080" height="720" layout="responsive"></amp-img>
                              </div>
                          </div>';
                    }
                  ?>
                </amp-carousel>
              </div>
            </div>
            <div class="boxTextContainer">
              <p class="boxText" id="text2BarPedales">
                If you don&#39;t want to move from where you are sunbathing, we will take you a delicious hamburger or something unexpected you have never tryed before. <br><b> Let us pamper you.</b><br><br>Immerse yourself in the <b><span>IMPRESSIVE SUNSETS</span></b>, enjoy accompanied or alone, reflect along Holbox’s imposing sunsets.</p>
            </div>
          </div>
        </div>
      </section>
  </div>
  <?php include('footer.php')?>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/gsap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/ScrollTrigger.min.js"></script>
    <script type="text/javascript" src="/script/hotel-restaurante-el-mangle.js"></script>
</body>
</html>