	<div id="loading">
		<div class="container">
			<div class="spinner2">
				<!-- <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 viewBox="0 0 200 200" style="enable-background:new 0 0 200 200;" xml:space="preserve">
						<g id="wave">
							<path id="wave-2" fill="#fff" d="M0,100c140.6-5.8,45.1,6.3,200,0c0,55.2-44.8,100-100,100S0,155.2,0,100z	">
								<animate  accumulate="none" additive="replace" attributeName="d" attributeType="XML" calcMode="linear" dur="5s" fill="remove" repeatCount="indefinite" restart="always" 
									values="M0 100 C90 28, 92 179, 200 100 A95 95 0 0 1 0 100 Z;
											M0 100 C145 100, 41 100, 200 100 A95 95 0 0 1 0 100 Z;
											M0 100 C90 28, 92 179, 200 100 A95 95 0 0 1 0 100 Z;
											">
									</animate>
							</path>
						</g>
				</svg> -->
				

			</div>

			<!-- 
			<div class="spinner2">
				<div class="double-bounce1"></div>
		  		<div class="double-bounce2"></div>
			</div> -->
		</div>
	</div>
	<!-- Start Navbar -->
  <header>
  	<div class="container ampstart-headerbar">
  		<div role="button" aria-label="open sidebar" on="tap:header-sidebar.toggle" tabindex="0" class="ampstart-navbar-trigger">☰</div>
	    <div class="center"><a href="index"><amp-img layout="fixed" width="67" height="45" src="img/villasflamingos-logo.svg"></amp-img></amp-layout></a></div>
	    <div class="buttonContainer"><div class="available" on="tap:bookingButton" role="button"><span>RESERVAR</span></div></div>
  	</div>
  </header>

  	<!-- <amp-lightbox id="bookingButton" layout="nodisplay">
  		<iframe id="booking_modal" src="https://www.thebookingbutton.co.uk/hotel-villas-flamingos-holbox/properties/vflamingosdirect/widget?number_of_days=12&amp;locale=es" height="700" width="100%" frameborder="0" scrolling="no" allowtransparency="true"></iframe>
	  <button on="tap:bookingButton.close">✕</button>
	</amp-lightbox> -->

  	<!-- Start Sidebar -->
	<amp-sidebar id="header-sidebar" class="ampstart-sidebar px3  " layout="nodisplay">
		<div class="flex justify-start items-center ampstart-sidebar-header">
			<div role="button" aria-label="close sidebar" on="tap:header-sidebar.toggle" tabindex="0" class="ampstart-navbar-trigger items-start">✕</div>
		</div>
		<nav class="ampstart-sidebar-nav ampstart-nav">
			<ul class="list-reset m0 p0 ampstart-label">
		      <li><div class="ampstart-nav-item"><a class="ampstart-nav-link" on="tap:header-sidebar.close" href="index">Inicio</a></div></li>
		      <li><div class="ampstart-nav-item"><a class="ampstart-nav-link" on="tap:header-sidebar.close" href="habitaciones-general">Habitaciones</a></div>
		      	<ul>
		      		<li class="ampstart-subnav-link"><a href="habitaciones-cuartos">Cuartos</a></li>
		      		<ul>
		      			<li class="ampstart-subnav-link"><a href="habitaciones-vista-jardin">Vista Jardín</a></li>
		      			<li class="ampstart-subnav-link"><a href="habitaciones-vista-mar">Vista Mar</a></li>
		      		</ul>
		      		<li class="ampstart-subnav-link"><a href="habitaciones-bungalows">Búngalos</a></li>
		      		<ul>
		      			<li class="ampstart-subnav-link"><a href="habitaciones-bungalow-arena">Arena</a></li>
		      			<li class="ampstart-subnav-link"><a href="habitaciones-bungalow-cielo">Cielo</a></li>
		      			<li class="ampstart-subnav-link"><a href="habitaciones-bungalow-jardin">Jardín</a></li>
		      			<li class="ampstart-subnav-link"><a href="habitaciones-bungalow-mangle">Mangle</a></li>
		      		</ul>
		      		<li class="ampstart-subnav-link"><a href="habitaciones-suite-luna-de-miel">Suite Luna de Miel</a></li>
		      		<li class="ampstart-subnav-link"><a href="habitaciones-master-suite">Master Suite Palapa</a></li>
		      		<li class="ampstart-subnav-link"><a href="habitaciones-comparar">Comparar</a></li>
		      	</ul>
		      </li>
		      <li><p>Hotel</p>
		      	<ul>
		      		<li class="ampstart-subnav-link"><a href="hotel-restaurante">Restaurante</a></li>
		      		<li class="ampstart-subnav-link"><a href="hotel-traslados">Traslados</a></li>
		      		<li class="ampstart-subnav-link"><a href="hotel-anfitriones">Anfitriones</a></li>
		      	</ul>
		      </li>
		      <li><p>Holbox</p>
		      	<ul>
		      		<li class="ampstart-subnav-link"><a href="holbox-sensaciones">Sensaciones</a></li>
		      		<li class="ampstart-subnav-link"><a href="holbox-tips">Tips</a></li>
		      		<li class="ampstart-subnav-link"><a href="holbox-tours">Tours</a></li>
		      	</ul>
		      </li>
		      <li class="ampstart-nav-item"><a class="ampstart-nav-link" on="tap:header-sidebar.close" href="contacto">Contacto</a></li>
			</ul>
		</nav>
	</amp-sidebar>