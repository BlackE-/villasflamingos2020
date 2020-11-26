<html ⚡="">
<head>
  <?php include('header_meta.php');?>
   <script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.2.js"></script>
  <script async custom-element="amp-lightbox-gallery" src="https://cdn.ampproject.org/v0/amp-lightbox-gallery-0.1.js"></script>

  <link rel="stylesheet" type="text/css" href="/css/animate.css">
  <link rel="stylesheet" type="text/css" href="/css/galeria.css">
</head>
<body>
  <?php include('header_habitaciones.php')?>
  <div class="indexContainer">
      <section class="galeria_texto">
        <div class="container" id="text1">
          <h1><b><i>Gallery</i></b></h1>
        </div>
      </section>
      <section class="galeria_container">
        <div class="container">
          <div class="filter-gallery">
          <ul class="filter">
            <li class="active"><button data-filter="all">All</button></li>
            <li><button data-filter="hotel">Hotel</button></li>
            <li><button data-filter="habitaciones">Rooms</button></li>
          </ul>
          <div id="gallery">
            <ul class="list">
              <?php
                for($i = 1; $i<63; $i++){
                  switch ($i) {
                    case 3: case 4: case 15: case 35:
                    break;
                    default:
                    echo '<li>';
                    echo '<div class="listBox">';
                    switch($i){
                      case 10:case 17:case 24:case 34: case 39:case 44: 
                        echo '<p class="category">habitaciones</p>';
                        echo '<div class="button"><a href="rooms-vista-mar"><span>VISTA MAR</span></a></div>';
                      break;
                      case 43: case 48:
                        echo '<p class="category">habitaciones</p>';
                        echo '<div class="button"><a href="rooms-bungalow-jardin"><span>BUNGALOW JARDÍN</span></a></div>';
                      break;
                      case 16: case 32:
                        echo '<p class="category">habitaciones</p>';
                        echo '<div class="button"><a href="rooms-bungalow-arena"><span>BUNGALOW ARENA</span></a></div>';
                      break;
                      case 45: 
                        echo '<p class="category">habitaciones</p>';
                        echo '<div class="button"><a href="rooms-cacao"><span>CACAO</span></a></div>';
                      break;
                      case 22:  case 29:
                        echo '<p class="category">habitaciones</p>';
                        echo '<div class="button"><a href="rooms-honeymoon-suite"><span>HONEYMOON SUITE</span></a></div>';
                      break;
                      case 9: case 23: 
                        echo '<p class="category">habitaciones</p>';
                        echo '<div class="button"><a href="rooms-bungalow-cielo"><span>BUNGALOW CIELO</span></a></div>';
                      break;
                      case 28: case 47: 
                        echo '<p class="category">habitaciones</p>';
                        echo '<div class="button"><a href="rooms-master-suite-palapa"><span>MASTER SUITE PALAPA</span></a></div>';
                      break;
                      default:
                        echo '<p class="category">hotel</p>';
                    }
                    echo '<amp-img layout="responsive" role="button" width="360" height="240" lightbox="carouselcarousel-with-lightbox" on="tap:amp-lightbox-gallery.activate" src="/img/galeria-'.$i.'.jpg" alt="Galeria'.$i.'"></amp-img>';
                    echo '</div>';
                    echo '</li>';
                  }
                }
              ?>
            </ul>
          </div>
        </div>
        
      </section>
    </div>
  </div>
  <?php include('footer.php')?>
    <script type="text/javascript" src="/script/list.min.js"></script>
    <script type="text/javascript" src="/script/galeria.js"></script>
</body>
</html>