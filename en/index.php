<html ⚡="">
<head>
  <?php include('header_meta.php');?>
  <script async custom-element="amp-bind" src="https://cdn.ampproject.org/v0/amp-bind-0.1.js"></script>
  <script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.2.js"></script>
  <link rel="stylesheet" type="text/css" href="/css/index.css">
</head>
<body>
  <?php include('header.php')?>
  <div class="indexContainer">
      <section class="carouselHeader">
        <amp-carousel class="desktop" id="carouselHeader" type="slides" width="1920" height="1080" layout="responsive" role="region" controls loop autoplay delay="5000" role="region" aria-label="Header">
            <amp-img layout="responsive" role="button" width="1920" height="1080" src="/img/galeria-2.jpg" alt="Galeria2"></amp-img>
            <amp-img layout="responsive" role="button" width="1920" height="1080"     src="/img/galeria-6.jpg" alt="Galeria6"></amp-img>
            <amp-img layout="responsive" role="button" width="1920" height="1080"     src="/img/galeria-8.jpg" alt="Galeria2"></amp-img>
            <amp-img layout="responsive" role="button" width="1920" height="1080"     src="/img/galeria-16.jpg" alt="Galeria2"></amp-img>
            <amp-img layout="responsive" role="button" width="1920" height="1080"     src="/img/galeria-24.jpg" alt="Galeria2"></amp-img>
            <amp-img layout="responsive" role="button" width="1920" height="1080"     src="/img/galeria-20.jpg" alt="Galeria2"></amp-img>
            <amp-img layout="responsive" role="button" width="1920" height="1080"     src="/img/galeria-27.jpg" alt="Galeria2"></amp-img>
            <amp-img layout="responsive" role="button" width="1920" height="1080"     src="/img/galeria-1.jpg" alt="Galeria2"></amp-img>
            <amp-img layout="responsive" role="button" width="1920" height="1080"     src="/img/galeria-46.jpg" alt="Galeria2"></amp-img>
            <amp-img layout="responsive" role="button" width="1920" height="1080"     src="/img/galeria-54.jpg" alt="Galeria2"></amp-img>
            <amp-img layout="responsive" role="button" width="1920" height="1080"     src="/img/galeria-57.jpg" alt="Galeria2"></amp-img>
            <amp-img layout="responsive" role="button" width="1920" height="1080"     src="/img/galeria-58.jpg" alt="Galeria2"></amp-img>
            <amp-img layout="responsive" role="button" width="1920" height="1080"     src="/img/galeria-26.jpg" alt="Galeria2"></amp-img>
        </amp-carousel>
        <amp-carousel class="mobile" id="carouselHeaderMobile" type="slides" width="360" height="640" layout="responsive" role="region" controls loop autoplay delay="5000" role="region" aria-label="Header">
            <amp-img layout="responsive" role="button" width="360" height="640" src="/img/home-mobile-1.jpg" alt="Galeria2"></amp-img>
            <amp-img layout="responsive" role="button" width="360" height="640" src="/img/home-mobile-2.jpg" alt="Galeria6"></amp-img>
            <amp-img layout="responsive" role="button" width="360" height="640" src="/img/home-mobile-3.jpg" alt="Galeria2"></amp-img>
            <amp-img layout="responsive" role="button" width="360" height="640" src="/img/home-mobile-4.jpg" alt="Galeria2"></amp-img>
            <amp-img layout="responsive" role="button" width="360" height="640" src="/img/home-mobile-5.jpg" alt="Galeria2"></amp-img>
            <amp-img layout="responsive" role="button" width="360" height="640" src="/img/home-mobile-6.jpg" alt="Galeria2"></amp-img>
            <amp-img layout="responsive" role="button" width="360" height="640" src="/img/home-mobile-7.jpg" alt="Galeria2"></amp-img>
            <amp-img layout="responsive" role="button" width="360" height="640" src="/img/home-mobile-8.jpg" alt="Galeria2"></amp-img>
            <amp-img layout="responsive" role="button" width="360" height="640" src="/img/home-mobile-9.jpg" alt="Galeria2"></amp-img>
            <amp-img layout="responsive" role="button" width="360" height="640" src="/img/home-mobile-10.jpg" alt="Galeria2"></amp-img>
            <amp-img layout="responsive" role="button" width="360" height="640" src="/img/home-mobile-11.jpg" alt="Galeria2"></amp-img>
            <amp-img layout="responsive" role="button" width="360" height="640" src="/img/home-mobile-12.jpg" alt="Galeria2"></amp-img>
            <amp-img layout="responsive" role="button" width="360" height="640" src="/img/home-mobile-13.jpg" alt="Galeria2"></amp-img>
        </amp-carousel>
      </section>
      <section class="textContainerSection">
        <div class="container" id="text1">
          <p>There is a <b class="upper">PLACE WHERE NATURE REVEALS ITSELF</b>, as if inviting us to forget about everything, where we can come closer to ourselves and nature. That place is Hotel Villas Flamingos, a unique place <b><i>located within the natural reserve Yum-Balam</i></b> on Holbox island.</p>
          <p><b>WHAT ARE YOU WAITING TO COME VISIT?</b><br>Here you will discover that the beach, sea and air of Holbox are magical treasures you will cherish forever.</p>
          <p><b><i>Hotel Villas Flamingos</i></b> invites you to surrender to pleasure and relaxation, to stop time and enjoy.</p>
        </div>
      </section>
      <section class="habitacionesSection">
        <div class="container">
          <h2>Rooms</h2>
            <amp-carousel id="carouselHabitaciones" type="slides" width="1280" height="550" layout="responsive" controls loop autoplay delay="5000" role="region" aria-label="Tipo Habitaciones">
              <div class="carouselDiv vistaMar">
                  <div class="imgContainer">
                    <a href="rooms-vista-mar"><amp-img src="/img/habitaciones-vista-mar-1.webp" width="1080" height="720" layout="responsive">
                      <amp-img fallback src="/img/habitaciones-vista-mar-1.jpg" width="1080" height="720" layout="responsive"></amp-img>
                    </amp-img></a></a>
                  </div>
                  <div class="dataContainer">
                    <h3>Vista <b>Mar</b></h3>
                    <p>Each <b><i>Vista Mar</i></b> has a terrace with a wonderful sea view for an unforgettable Holbox experience. Due to its attractive price this room is one of the popular ones. With a king size bed and located on the ground floor or second level. </p>
                    <div class="reservaHabitaciones" on="tap:reservar" role="button"><span>BOOK NOW</span></div>
                  </div>
              </div>
              <div class="carouselDiv bungalowsJardin">
                  <div class="imgContainer">
                    <a href="rooms-bungalow-jardin"><amp-img src="/img/habitaciones-bungalow-jardin-1.webp" width="1080" height="720" layout="responsive">
                      <amp-img fallback src="/img/habitaciones-bungalow-jardin-1.jpg" width="1080" height="720" layout="responsive"></amp-img>
                    </amp-img></a>
                  </div>
                  <div class="dataContainer">
                    <h3>Bungalow <b>Jardín</b></h3>
                    <p>Surrounded by a tropical garden full of peace, each of the two <b><i>Bungalow Jardín</i></b> are located on the ground floor. Both have their own heated indoor pool, 2 queen size beds, an outdoor shower surrounded by nature and a perfect terrace to enjoy a good book. Ideal for families.</p>
                    <div class="reservaHabitaciones" on="tap:reservar" role="button"><span>BOOK NOW</span></div>
                  </div>
              </div>
              <div class="carouselDiv bungalowsArena">
                  <div class="imgContainer">
                    <a href="rooms-bungalow-arena"><amp-img src="/img/habitaciones-bungalow-arena-1.webp" width="1080" height="720" layout="responsive" alt="Bungalow Arena">
                      <amp-img fallback src="/img/habitaciones-bungalow-arena-1.jpg" width="1080" height="720" layout="responsive" alt="Bungalow Arena"></amp-img>
                    </amp-img></a>
                  </div>
                  <div class="dataContainer">
                    <h3>Bungalow <b>Arena</b></h3>
                    <p>These exclusive bungalows are the perfect hideout for sea enthusiasts, within a few steps from your room your feet will be caressed by the waves. Each of the 4 <b><i>Bungalow Arena</i></b> are located on the ground floor, equipped with a private heated indoor pool, 2 queen size beds, outdoor shower surrounded by nature and a deck for sunset watching. Ideal for families.</p>
                    <div class="reservaHabitaciones" on="tap:reservar" role="button"><span>BOOK NOW</span></div>
                  </div>
              </div>
              <div class="carouselDiv bungalowsMangle">
                  <div class="imgContainer">
                    <a href="rooms-bungalow-mangle"><amp-img src="/img/habitaciones-bungalow-mangle-1.webp" width="1080" height="720" layout="responsive" alt="Bungalow mangle">
                      <amp-img fallback src="/img/habitaciones-bungalow-mangle-1.jpg" width="1080" height="720" layout="responsive" alt="Bungalow mangle"></amp-img>
                    </amp-img></a>
                  </div>
                  <div class="dataContainer">
                    <h3>Bungalow <b>Mangle</b></h3>
                    <p>In these two-story bungalows you will enjoy the sea mist as well as views from the mangrove. Both of our <b><i>Bungalow Mangle</i></b> reflect the true spirit of Villas Flamingos. Each of the 2 bungalows are located on the second floor, equipped with private jacuzzi, hand woven hammocks crafted by local fishermen, and an outdoor shower to bathe as you enjoy the stars.</p>
                    <div class="reservaHabitaciones" on="tap:reservar" role="button"><span>BOOK NOW</span></div>
                  </div>
              </div>
              <div class="carouselDiv Cacao">
                  <div class="imgContainer">
                    <a href="rooms-cacao"><amp-img src="/img/habitaciones-cacao-1.webp" width="1080" height="720" layout="responsive" alt="Cacao">
                      <amp-img fallback src="/img/habitaciones-cacao-1.jpg" width="1080" height="720" layout="responsive" alt="Cacao"></amp-img>
                    </amp-img></a>
                  </div>
                  <div class="dataContainer">
                    <h3><b>Cacao</b></h3>
                    <p>We only have one <b><i>Cacao</i></b> room, thus this two-story room located on a second floor is always in high demand. The oceanfront private deck with an outdoor shower is one of the largest in the property. It has one king size bed and on the second level of the room you will find a Jacuzzi for 2. It has air conditioning, minibar, safe, support table and chairs, closet, reading lamp, luggage rack.</p>
                    <div class="reservaHabitaciones" on="tap:reservar" role="button"><span>BOOK NOW</span></div>
                  </div>
              </div>
              <div class="carouselDiv Coco">
                  <div class="imgContainer">
                    <a href="rooms-coco"><amp-img src="/img/habitaciones-coco-1.webp" width="1080" height="720" layout="responsive" alt="Cacao">
                      <amp-img fallback src="/img/habitaciones-coco-1.jpg" width="1080" height="720" layout="responsive" alt="Cacao"></amp-img>
                    </amp-img></a>
                  </div>
                  <div class="dataContainer">
                    <h3><b>Coco</b></h3>
                    <p>There is only one <b><i>Coco</i></b> room, with a privileged location on the ground floor, within a few steps from the seashore. It stands out for its indoor pool with a large panoramic window overlooking the sea. It also has a King size bed, an outdoor shower, private terrace with chairs and table, air conditioning, minibar, safe, support table and chairs, closet, reading lamp and luggage rack.</p>
                    <div class="reservaHabitaciones" on="tap:reservar" role="button"><span>BOOK NOW</span></div>
                  </div>
              </div>
              <div class="carouselDiv Miel">
                  <div class="imgContainer">
                    <a href="rooms-miel"><amp-img src="/img/habitaciones-miel-1.webp" width="1080" height="720" layout="responsive" alt="miel">
                      <amp-img fallback src="/img/habitaciones-miel-1.jpg" width="1080" height="720" layout="responsive" alt="miel"></amp-img>
                    </amp-img></a>
                  </div>
                  <div class="dataContainer">
                    <h3><b>Miel</b></h3>
                    <p>This is the only room where you can watch sunrise and sunset from your private jacuzzi inside the room. <b><i>Miel</i></b> is located on the second floor with a King size bed, a terrace with ocean views, an outdoor shower,a second terrace with views of the mangrove, air conditioning, minibar, safe, support table, chairs, closet, reading lamp and luggage rack.</p>
                    <div class="reservaHabitaciones" on="tap:reservar" role="button"><span>BOOK NOW</span></div>
                  </div>
              </div>
              <div class="carouselDiv SuiteLunaDeMiel">
                  <div class="imgContainer">
                    <a href="rooms-honeymoon-suite"><amp-img src="/img/habitaciones-suitelunademiel-1.webp" width="1080" height="720" layout="responsive" alt="suitelunademiel">
                      <amp-img fallback src="/img/habitaciones-suitelunademiel-1.jpg" width="1080" height="720" layout="responsive" alt="suitelunademiel"></amp-img>
                    </amp-img></a>
                  </div>
                  <div class="dataContainer">
                    <h3><b>Honeymoon</b> Suite</h3>
                    <p>Enjoy the most with your partner in our <b><i>Honeymoon Suite</i></b>, specially designed to celebrate with your significant other. Conveniently located onthe top floor for more privacy, they have an ocean view and an indoor Jacuzzi where you can spend hours relaxing while you listen to the sea and the birds of Holbox.</p>
                    <div class="reservaHabitaciones" on="tap:reservar" role="button"><span>BOOK NOW</span></div>
                  </div>
              </div>
              <div class="carouselDiv BungalowCielo">
                  <div class="imgContainer">
                    <a href="rooms-master-suite-palapa"><amp-img src="/img/habitaciones-bungalow-cielo-1.webp" width="1080" height="720" layout="responsive" alt="bungalow-cielo">
                      <amp-img fallback src="/img/habitaciones-bungalow-cielo-1.jpg" width="1080" height="720" layout="responsive" alt="bungalow-cielo"></amp-img>
                    </amp-img></a>
                  </div>
                  <div class="dataContainer">
                    <h3>Bungalow <b>Cielo</b></h3>
                    <p>In these exclusive two-story bungalows we guarantee you will have the best ocean view in all of Holbox. The <b><i>Cielo bungalows</i></b> reflect the spirit of Villas Flamingos. There are 4 and they are located on the top floor, ideal for receiving the sea breeze. With their own indoor Jacuzzi, surrounded by hammocks hand-woven by local fishermen, and an outdoor shower ideal to enjoy a good bath while watching the stars.</p>
                    <div class="reservaHabitaciones" on="tap:reservar" role="button"><span>BOOK NOW</span></div>
                  </div>
              </div>
              <div class="carouselDiv SuiteMasterPalapa">
                  <div class="imgContainer">
                    <a href="rooms-vista-mar"><amp-img src="/img/habitaciones-suitemasterpalapa-1.webp" width="1080" height="720" layout="responsive" alt="suitemasterpalapa">
                      <amp-img fallback src="/img/habitaciones-suitemasterpalapa-1.jpg" width="1080" height="720" layout="responsive" alt="SuiteMasterPalapa"></amp-img>
                    </amp-img></a>
                  </div>
                  <div class="dataContainer">
                    <h3>Master Suite <b>Palapa</b></h3>
                    <p>If you really want to surprise your partner then the <b><i>Master Suite Palapa</i></b> is your choice. Located on a third level for greater privacy, its two terraces will give you views of the sea as well as the mangrove. It has a jacuzzi and outdoor shower. With attractive architectural design, this spacious suite is unique in all of Holbox. It has a King size bed, air conditioning, minibar, safe, support table and chairs, closet, reading lamp, luggage rack.</p>
                    <div class="reservaHabitaciones" on="tap:reservar" role="button"><span>BOOK NOW</span></div>
                  </div>
              </div>
            </amp-carousel>
          </div>
        </div>
      </section>
      <section class="tripAdvisorSection">
        <div class="container" id="tripAdvisorContainer">
          <amp-img src="/img/tripadvisor_logo.png" width="149" height="23"></amp-img>
          <h3>OUR GUEST</h3>
          <div class="amp-carousel-container">
            <amp-state id="selected"><script type="application/json"> {"slide": 0} </script></amp-state>
            <amp-carousel type="slides" id="reviewsCarousel" width="360" height="100" layout="responsive" aria-label="Carousel reviews Trip Advisor" on="slideChange:AMP.setState({selected: {slide: event.index}})">
              <?php
                  $strJsonFileContents = file_get_contents("../script/reviews-en.json");
                    $array = json_decode($strJsonFileContents, true);
                  if(is_array($array)){
                      $count = 0;
                      foreach ($array as $key => $val) {
                        echo '<div class="tripadvisorReview"><blockquote>';
                        $string = substr($val['descripcion'],0,50).'...';
                        echo '"'.$string.'" ';
                        echo '<cite><b>@'.$val['author'].'</b></cite>';
                        echo '</blockquote></div>';
                        $count++;
                      }
                  }
              ?>
            </amp-carousel>
          </div>
          <div class="tripadvisorButtons">
            <button [class]="selected.slide == 0 ? 'active' : ''" class="tripadvisorButton active"  on="tap:reviewsCarousel.goToSlide(index=0)"></button>
            <button [class]="selected.slide == 1 ? 'active' : ''" class="tripadvisorButton" on="tap:reviewsCarousel.goToSlide(index=1)"></button>
            <button [class]="selected.slide == 2 ? 'active' : ''" class="tripadvisorButton" on="tap:reviewsCarousel.goToSlide(index=2)"></button>
            <button [class]="selected.slide == 3 ? 'active' : ''" class="tripadvisorButton" on="tap:reviewsCarousel.goToSlide(index=3)"></button>
          </div>
          
        </div>
      </section>
      <section class="serviciosSection">
        <div class="container">
          <h2>Our Services</h2>
          <div class="serviciosContainer">
            <div class="box trasladosContainer">
             <a href="hotel-traslados"><amp-img class="image" id="imageTraslados" alt="Villas traslados" src="/img/home-traslados-desktop.webp" width="720" height="720" layout="responsive">
                <amp-img fallback alt="Villas traslados" src="/img/home-traslados-desktop.jpg" width="720" height="720" layout="responsive"></amp-img>
              </amp-img></a>
              <div class="iconTextcontainer">
                <amp-img class="icon" id="iconTraslados" src="/img/home-traslados-icon.png" width="46" height="40"></amp-img>
                <p id="textTraslados"><b>TRANSFERS</b></p>
              </div>
              <div class="button" id="trasladosButton" role="button"><a href="hotel-transfers"><span>Find out more</span></a></div>
            </div>
            <div class="box sensacionesContainer">
              <a href="holbox-ubicacion"><amp-img class="image" id="imageSensaciones" alt="Villas Sensaciones" src="/img/home-holbox-desktop.webp"  width="720" height="720"  layout="responsive" >
                <amp-img fallback alt="Villas Sensaciones" src="/img/home-holbox-desktop.jpg"  width="720" height="720"  layout="responsive"></amp-img>
              </amp-img></a>
              <div class="iconTextcontainer">
                <p id="textSensaciones"><b>HOLBOX</b> and it’s <b><i>emmotions</i></b></p>
                <amp-img class="icon" id="iconSensaciones" src="/img/home-holbox-icon.png" width="47" height="53"></amp-img>
                <span id="textSensaciones2">Author: @Emileyc</span>
                </div>
              <div class="button" id="sensacionesButton" role="button"><a href="holbox-ubicacion"><span>Find out more</span></a></div>
            </div>
          </div>
          <div class="serviciosContainer">
            <div class="box toursContainer">
              <div class="iconTextcontainer">
                <amp-img class="icon" id="iconTours" src="/img/home-tours-icon.png" width="40" height="40"></amp-img>
                <p id="textTours"><b>TOURS</b></p>
              </div>
              <div class="button" id="toursButton" role="button"><a href="holbox-tours"><span>Find out more</span></a></div>
              <a href="holbox-tours"><amp-img class="image" id="imageTours" alt="Villas Tours" src="/img/home-tours-desktop.webp"  width="720" height="720"  layout="responsive">
                <amp-img fallback alt="Villas Tours" src="/img/home-tours-desktop.jpg"  width="720" height="720"  layout="responsive"></amp-img>
              </amp-img>
              </a>
            </div>
            <div class="box cenaContainer">
              <div class="iconTextcontainer">
                <p id="textCena"><b>Romantic <i>dinner</i></b></p>
                <amp-img class="icon" id="iconCena" src="/img/home-cenaromantica-icon.png" width="40" height="40"></amp-img>
              </div>
              <div class="button" id="cenaButton" role="button"><a href="experiencias-cenas-romanticas"><span>Find out more</span></a></div>
              <a href="experiencias-cenas-romanticas"><amp-img class="image" id="imageCena" alt="Villas Cena Romantica" src="/img/home-cenaromantica-desktop.webp"  width="720" height="541"  layout="responsive">
                <amp-img fallback alt="Villas Cena Romantica" src="/img/home-cenaromantica-desktop.jpg"  width="720" height="541"  layout="responsive"></amp-img>
              </amp-img>
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="ultimoRinconSection">
        <div class="container">
          <h2>The last nook in  <br><b><i>the Caribbean</i></b></h2>
          <div class=" mosaico">
            <div>
              <amp-img class="rinconImg" id="rincon_1_desktop" layout="responsive" src="/img/home-gallery-1-desktop.webp" width="500" height="723">
                <amp-img fallback src="/img/home-gallery-1-desktop.jpg" width="500" height="723"></amp-img>
              </amp-img>
              <amp-img class="rinconImg" id="rincon_3_desktop" layout="responsive" src="/img/home-gallery-3-desktop.webp" width="720" height="509">
                <amp-img fallback layout="responsive" src="/img/home-gallery-3-desktop.jpg" width="720" height="509"></amp-img>
              </amp-img>
            </div>
            <div>
              <amp-img class="rinconImg" id="rincon_2_desktop" layout="responsive" src="/img/home-gallery-2-desktop.webp" width="720" height="688">
                <amp-img fallback layout="responsive" src="/img/home-gallery-2-desktop.jpg" width="720" height="688"></amp-img>
              </amp-img>
              <amp-img class="rinconImg" id="rincon_4_desktop" layout="responsive" src="/img/home-gallery-4-desktop.webp" width="500" height="500">
                <amp-img fallback layout="responsive" src="/img/home-gallery-4-desktop.jpg" width="500" height="500"></amp-img>
              </amp-img>
            </div>
            <div>
              <amp-img class="rinconImg" id="rincon_5_desktop" layout="responsive" src="/img/home-gallery-5-desktop.webp" width="500" height="621">
                <amp-img fallback layout="responsive" src="/img/home-gallery-5-desktop.jpg" width="500" height="621"></amp-img>
              </amp-img>
              <amp-img class="rinconImg" id="rincon_6_desktop" layout="responsive" src="/img/home-gallery-6-desktop.webp" width="720" height="711">
                <amp-img fallback layout="responsive" src="/img/home-gallery-6-desktop.jpg" width="720" height="711"></amp-img>
              </amp-img>
            </div>
          </div>
        </div>
      </section>
  </div>
  <?php include('footer.php')?>
    <script type="text/javascript" src="/script/index.js"></script>
</body>
</html>