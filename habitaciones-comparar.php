<html ⚡="">
<head>
  <?php include('header_meta.php');?>
  <link rel="stylesheet" type="text/css" href="css/habitaciones-comparar.css">
</head>
<body>
  <?php include('header_habitaciones.php')?>
  <div class="indexContainer">
      <section class="habitaciones_cuartos_texto">
        <div class="container" id="text1">
          <h1>Compara las <span><b>habitaciones</b></span></h1>
          <p>Nuestras categorías cuentan con amenidades diferentes. <span><b><i>Selecciona la ideal para ti.</i></b></span></p>
        </div>
      </section>
      <section class="comparar_section">
        <div class="container">
          <div class="habitacion_container habitacion_left">
            <select class="habitacion_select" id="habitacion_select_left">
              <option value="suitemasterpalapa" selected="">Master Suite Palapa</option>
              <option value="bungalow-cielo">Bungalow Cielo</option>
              <option value="suitelunademiel">Suite Luna de Miel</option>
              <option value="miel">Miel</option>
              <option value="coco">Coco</option>
              <option value="cacao">Cacao</option>
              <option value="bungalow-mangle">Bungalow Mangle</option>
              <option value="bungalow-arena">Bungalow Arena</option>
              <option value="bungalow-jardin">Bungalow Jardín</option>
              <option value="vista-mar">Vista Mar</option>
              <option value="vista-jardin">Vista Jardín</option>
            </select>
            <div class="habitacion_img" id="leftimg"></div>
            <div class="habitacion_amenidades" id="left"></div>
          </div>
          <div class="habitacion_container habitacion_right">
            <select class="habitacion_select" id="habitacion_select_right">
              <option value="suitemasterpalapa">Master Suite Palapa</option>
              <option value="bungalow-cielo" selected="">Bungalow Cielo</option>
              <option value="suitelunademiel">Suite Luna de Miel</option>
              <option value="miel">Miel</option>
              <option value="coco">Coco</option>
              <option value="cacao">Cacao</option>
              <option value="bungalow-mangle">Bungalow Mangle</option>
              <option value="bungalow-arena">Bungalow Arena</option>
              <option value="bungalow-jardin">Bungalow Jardín</option>
              <option value="vista-mar">Vista Mar</option>
              <option value="vista-jardin">Vista Jardín</option>
            </select>
            <div class="habitacion_amenidades" id="right"></div>
            <div class="habitacion_img" id="rightimg"></div>
          </div>
        </div>
      </section>

      <section class="reservar_section">
        <div class="container">
          <p><b>Todos nuestras habitaciones:</b><br>Incluyen desayuno bufete.</p>
        </div>
      </section>
      <div class="container"><hr></div>

      <section class="habitaciones_container">
            <div class="container">
              <h2>Otras <b>HABITACIONES</b></h2>
              <div class="boxContainer" >
                <div class="boxGrid" id="room1">
                  <div class="box">
                    <amp-img class="desktop" id="room1_desktop" alt="Villas CUARTOS" src="img/habitaciones-vista-jardin-1.webp"  width="1080" height="720"  layout="responsive" media="(min-width: 645px)">
                      <amp-img fallback alt="Villas CUARTOS" src="img/habitaciones-vista-jardin-1.jpg"  width="1080" height="720"  layout="responsive" media="(min-width: 645px)"></amp-img>
                    </amp-img>
                    <amp-img class="mobile" id="room1_mobile" alt="Villas CUARTOS" src="img/habitaciones-vista-jardin-1-mobile.webp" width="360" height="240" layout="responsive" media="(max-width: 644px)">
                      <amp-img fallback alt="Villas CUARTOS" src="img/habitaciones-vista-jardin-1-mobile.jpg" width="292" height="240" layout="responsive" media="(max-width: 644px)"></amp-img>
                    </amp-img>
                    <p class="title" id="room1_title">Vista <b><i>JARDÍN</i></b></p>
                    <div class="button" id="room1_Button" role="button"><a href="habitaciones-vista-jardin"><span>DESCUBRE MÁS</span></a></div>
                  </div>
                </div>
                <div class="boxGrid" id="room2">
                    <div class="box">
                      <amp-img class="desktop" id="room2_desktop" alt="Villas CUARTOS" src="img/habitaciones-vista-mar-1.webp"  width="1080" height="720"  layout="responsive" media="(min-width: 645px)">
                        <amp-img fallback alt="Villas CUARTOS" src="img/habitaciones-vista-mar-1.jpg"  width="1080" height="720"  layout="responsive" media="(min-width: 645px)"></amp-img>
                      </amp-img>
                      <amp-img class="mobile" id="room2_mobile" alt="Villas CUARTOS" src="img/habitaciones-vista-mar-1-mobile.webp" width="360" height="240" layout="responsive" media="(max-width: 644px)">
                        <amp-img fallback alt="Villas CUARTOS" src="img/habitaciones-vista-mar-1-mobile.jpg" width="292" height="240" layout="responsive" media="(max-width: 644px)"></amp-img>
                      </amp-img>
                      <p class="title" id="room2_title">Vista <b><i>MAR</i></b></p>
                      <div class="button" id="room2_Button" role="button"><a href="habitaciones-vista-mar"><span>DESCUBRE MÁS</span></a></div>
                    </div>
                </div>
              </div>
              <div class="boxContainer" >
                <div class="boxGrid" id="room3">
                  <div class="box">
                    <amp-img class="desktop" id="room3_desktop" alt="Villas CUARTOS" src="img/habitaciones-bungalow-jardin-1.webp"  width="1080" height="720"  layout="responsive" media="(min-width: 645px)">
                      <amp-img fallback alt="Villas CUARTOS" src="img/habitaciones-bungalow-jardin-1.jpg"  width="1080" height="720"  layout="responsive" media="(min-width: 645px)"></amp-img>
                    </amp-img>
                    <amp-img class="mobile" id="room3_mobile" alt="Villas CUARTOS" src="img/habitaciones-bungalow-jardin-1-mobile.webp" width="360" height="240" layout="responsive" media="(max-width: 644px)">
                      <amp-img fallback alt="Villas CUARTOS" src="img/habitaciones-bungalow-jardin-1-mobile.jpg" width="292" height="240" layout="responsive" media="(max-width: 644px)"></amp-img>
                    </amp-img>
                    <p class="title" id="room3_title">Bungalow <b><i>JARDÍN</i></b></p>
                    <div class="button" id="room3_Button" role="button"><a href="habitaciones-bungalow-jardin"><span>DESCUBRE MÁS</span></a></div>
                  </div>
                </div>
                <div class="boxGrid" id="room4">
                    <div class="box">
                      <amp-img class="desktop" id="room4_desktop" alt="Villas CUARTOS" src="img/habitaciones-bungalow-arena-1.webp"  width="1080" height="720"  layout="responsive" media="(min-width: 645px)">
                        <amp-img fallback alt="Villas CUARTOS" src="img/habitaciones-bungalow-arena-1.jpg"  width="1080" height="720"  layout="responsive" media="(min-width: 645px)"></amp-img>
                      </amp-img>
                      <amp-img class="mobile" id="room4_mobile" alt="Villas CUARTOS" src="img/habitaciones-bungalow-arena-1-mobile.webp" width="360" height="240" layout="responsive" media="(max-width: 644px)">
                        <amp-img fallback alt="Villas CUARTOS" src="img/habitaciones-bungalow-arena-1-mobile.jpg" width="360" height="240" layout="responsive" media="(max-width: 644px)"></amp-img>
                      </amp-img>
                      <p class="title" id="room4_title">Bungalow <b><i>ARENA</i></b></p>
                      <div class="button" id="room4_Button" role="button"><a href="habitaciones-bungalow-arena"><span>DESCUBRE MÁS</span></a></div>
                    </div>
                </div>
              </div>
              <div class="boxContainer" >
                <div class="boxGrid" id="room5">
                  <div class="box">
                    <amp-img class="desktop" id="room5_desktop" alt="Villas CUARTOS" src="img/habitaciones-bungalow-mangle-1.webp"  width="1080" height="720"  layout="responsive" media="(min-width: 645px)">
                      <amp-img fallback alt="Villas CUARTOS" src="img/habitaciones-bungalow-mangle-1.jpg"  width="1080" height="720"  layout="responsive" media="(min-width: 645px)"></amp-img>
                    </amp-img>
                    <amp-img class="mobile" id="room5_mobile" alt="Villas CUARTOS" src="img/habitaciones-bungalow-mangle-1-mobile.webp" width="360" height="240" layout="responsive" media="(max-width: 644px)">
                      <amp-img fallback alt="Villas CUARTOS" src="img/habitaciones-bungalow-mangle-1-mobile.jpg" width="292" height="240" layout="responsive" media="(max-width: 644px)"></amp-img>
                    </amp-img>
                    <p class="title" id="room5_title">Bungalow <b><i>MANGLE</i></b></p>
                    <div class="button" id="room5_Button" role="button"><a href="habitaciones-bungalow-mangle"><span>DESCUBRE MÁS</span></a></div>
                  </div>
                </div>
                <div class="boxGrid" id="room6">
                    <div class="box">
                      <amp-img class="desktop" id="room6_desktop" alt="Villas CUARTOS" src="img/habitaciones-cacao-1.webp"  width="1080" height="720"  layout="responsive" media="(min-width: 645px)">
                        <amp-img fallback alt="Villas CUARTOS" src="img/habitaciones-cacao-1.jpg"  width="1080" height="720"  layout="responsive" media="(min-width: 645px)"></amp-img>
                      </amp-img>
                      <amp-img class="mobile" id="room6_mobile" alt="Villas CUARTOS" src="img/habitaciones-cacao-1-mobile.webp" width="360" height="240" layout="responsive" media="(max-width: 644px)">
                        <amp-img fallback alt="Villas CUARTOS" src="img/habitaciones-cacao-1-mobile.jpg" width="360" height="240" layout="responsive" media="(max-width: 644px)"></amp-img>
                      </amp-img>
                      <p class="title" id="room6_title"><b><i>CACAO</i></b></p>
                      <div class="button" id="room6_Button" role="button"><a href="habitaciones-cacao"><span>DESCUBRE MÁS</span></a></div>
                    </div>
                </div>
              </div>
              <div class="boxContainer" >
                <div class="boxGrid" id="room7">
                  <div class="box">
                    <amp-img class="desktop" id="room7_desktop" alt="Villas CUARTOS" src="img/habitaciones-coco-1.webp"  width="1080" height="720"  layout="responsive" media="(min-width: 645px)">
                      <amp-img fallback alt="Villas CUARTOS" src="img/habitaciones-coco-1.jpg"  width="1080" height="720"  layout="responsive" media="(min-width: 645px)"></amp-img>
                    </amp-img>
                    <amp-img class="mobile" id="room7_mobile" alt="Villas CUARTOS" src="img/habitaciones-coco-1-mobile.webp" width="360" height="240" layout="responsive" media="(max-width: 644px)">
                      <amp-img fallback alt="Villas CUARTOS" src="img/habitaciones-coco-1-mobile.jpg" width="292" height="240" layout="responsive" media="(max-width: 644px)"></amp-img>
                    </amp-img>
                    <p class="title" id="room7_title"><b><i>COCO</i></b></p>
                    <div class="button" id="room7_Button" role="button"><a href="habitaciones-coco"><span>DESCUBRE MÁS</span></a></div>
                  </div>
                </div>
                <div class="boxGrid" id="room8">
                    <div class="box">
                      <amp-img class="desktop" id="room8_desktop" alt="Villas CUARTOS" src="img/habitaciones-miel-1.webp"  width="1080" height="720"  layout="responsive" media="(min-width: 645px)">
                        <amp-img fallback alt="Villas CUARTOS" src="img/habitaciones-miel-1.jpg"  width="1080" height="720"  layout="responsive" media="(min-width: 645px)"></amp-img>
                      </amp-img>
                      <amp-img class="mobile" id="room8_mobile" alt="Villas CUARTOS" src="img/habitaciones-miel-1-mobile.webp" width="360" height="240" layout="responsive" media="(max-width: 644px)">
                        <amp-img fallback alt="Villas CUARTOS" src="img/habitaciones-miel-1-mobile.jpg" width="360" height="240" layout="responsive" media="(max-width: 644px)"></amp-img>
                      </amp-img>
                      <p class="title" id="room8_title"><b><i>MIEL</i></b></p>
                      <div class="button" id="room8_Button" role="button"><a href="habitaciones-suite-luna-de-miel"><span>DESCUBRE MÁS</span></a></div>
                    </div>
                </div>
              </div>
              <div class="boxContainer" >
                <div class="boxGrid" id="room9">
                  <div class="box">
                    <amp-img class="desktop" id="room9_desktop" alt="Villas CUARTOS" src="img/habitaciones-suitelunademiel-1.webp"  width="1080" height="720"  layout="responsive" media="(min-width: 645px)">
                      <amp-img fallback alt="Villas CUARTOS" src="img/habitaciones-suitelunademiel-1.jpg"  width="1080" height="720"  layout="responsive" media="(min-width: 645px)"></amp-img>
                    </amp-img>
                    <amp-img class="mobile" id="room9_mobile" alt="Villas CUARTOS" src="img/habitaciones-suitelunademiel-1-mobile.webp" width="360" height="240" layout="responsive" media="(max-width: 644px)">
                      <amp-img fallback alt="Villas CUARTOS" src="img/habitaciones-suitelunademiel-1-mobile.jpg" width="292" height="240" layout="responsive" media="(max-width: 644px)"></amp-img>
                    </amp-img>
                    <p class="title" id="room9_title">Suite <b><i>LUNA DE MIEL</i></b></p>
                    <div class="button" id="room9_Button" role="button"><a href="habitaciones-suite-luna-de-miel"><span>DESCUBRE MÁS</span></a></div>
                  </div>
                </div>
                <div class="boxGrid" id="room10">
                    <div class="box">
                      <amp-img class="desktop" id="room10_desktop" alt="Villas CUARTOS" src="img/habitaciones-bungalow-cielo-1.webp"  width="1080" height="720"  layout="responsive" media="(min-width: 645px)">
                        <amp-img fallback alt="Villas CUARTOS" src="img/habitaciones-bungalow-cielo-1.jpg"  width="1080" height="720"  layout="responsive" media="(min-width: 645px)"></amp-img>
                      </amp-img>
                      <amp-img class="mobile" id="room10_mobile" alt="Villas CUARTOS" src="img/habitaciones-bungalow-cielo-1-mobile.webp" width="360" height="240" layout="responsive" media="(max-width: 644px)">
                        <amp-img fallback alt="Villas CUARTOS" src="img/habitaciones-bungalow-cielo-1-mobile.jpg" width="360" height="240" layout="responsive" media="(max-width: 644px)"></amp-img>
                      </amp-img>
                      <p class="title" id="room10_title">Bungalow <b><i>CIELO</i></b></p>
                      <div class="button" id="room10_Button" role="button"><a href="habitaciones-bungalow-cielo"><span>DESCUBRE MÁS</span></a></div>
                    </div>
                </div>
              </div>
              <div class="boxContainer" id="lastBox">
                <div class="boxGrid" id="room11">
                  <div class="box">
                    <amp-img class="desktop" id="room11_desktop" alt="Villas CUARTOS" src="img/habitaciones-suitemasterpalapa-1.webp"  width="1080" height="720"  layout="responsive" media="(min-width: 645px)">
                      <amp-img fallback alt="Villas CUARTOS" src="img/habitaciones-suitemasterpalapa-1.jpg"  width="1080" height="720"  layout="responsive" media="(min-width: 645px)"></amp-img>
                    </amp-img>
                    <amp-img class="mobile" id="room11_mobile" alt="Villas CUARTOS" src="img/habitaciones-suitemasterpalapa-1-mobile.webp" width="360" height="240" layout="responsive" media="(max-width: 644px)">
                      <amp-img fallback alt="Villas CUARTOS" src="img/habitaciones-suitemasterpalapa-1-mobile.jpg" width="292" height="240" layout="responsive" media="(max-width: 644px)"></amp-img>
                    </amp-img>
                    <p class="title" id="room9_title">Master <b><i>SUITE PALAPA</i></b></p>
                    <div class="button" id="room9_Button" role="button"><a href="habitaciones-master-suite-palapa"><span>DESCUBRE MÁS</span></a></div>
                  </div>
                </div>
              </div>
            </div>
      </section>
      
  </div>
  <?php include('footer.php')?>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/gsap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/ScrollTrigger.min.js"></script>
    <script type="text/javascript" src="script/habitaciones-comparar.js"></script>
</body>
</html>