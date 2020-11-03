	<!-- Start Navbar -->
	<header id="header_habitaciones">
	  	<div class="container ampstart-headerbar header_habitaciones">
	  		<div class="leftContainer">
	  			<div role="button" aria-label="open sidebar" on="tap:header-sidebar.toggle" tabindex="0" class="ampstart-navbar-trigger habitaciones">☰</div>
	  			<div class="whatsappContainer">
	  				<a href="https://wa.me/5219841250102" target="_blank">
	  					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 70.37 70.4"><defs><clipPath id="clip-path" transform="translate(0)"><rect width="70.37" height="70.4" style="fill:none"/></clipPath></defs><title>whatsapp-black</title><g id="Capa_2" data-name="Capa 2"><g id="Capa_1-2" data-name="Capa 1"><g style="clip-path:url(#clip-path)"><path d="M16.75,63.54l1.23.73A33.71,33.71,0,0,0,35.17,69h0A33.77,33.77,0,1,0,6.58,53.16l.8,1.28L4,66.9Z" transform="translate(0)" style="fill:none;stroke:#211915;stroke-linecap:round;stroke-miterlimit:10;stroke-width:2.8350000381469727px"/><path d="M53.48,43.53c-.23-.38-.83-.61-1.74-1.06s-5.38-2.65-6.21-3-1.44-.45-2,.45-2.35,3-2.88,3.56-1.06.68-2,.23a24.84,24.84,0,0,1-7.31-4.51,27.44,27.44,0,0,1-5.06-6.3c-.53-.91-.06-1.4.4-1.86S27.57,30,28,29.5A6.18,6.18,0,0,0,28.93,28a1.67,1.67,0,0,0-.08-1.59c-.23-.46-2-4.93-2.8-6.75s-1.49-1.53-2-1.56-1.14,0-1.74,0a3.34,3.34,0,0,0-2.42,1.14,10.19,10.19,0,0,0-3.18,7.58c0,4.48,3.26,8.8,3.71,9.41S26.78,46,35.9,49.9a52.3,52.3,0,0,0,5.18,1.91,12.46,12.46,0,0,0,5.73.36c1.75-.26,5.38-2.2,6.14-4.32A7.61,7.61,0,0,0,53.48,43.53Z" transform="translate(0)" style="fill:none;stroke:#211915;stroke-linecap:round;stroke-miterlimit:10;stroke-width:2.8350000381469727px"/></g></g></g></svg>
	  				</a>
	  			</div>
	  			<div class="chatContainer">
	  				<a id="chat" href="javascript:$zopim.livechat.window.show()">
	  					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 82.95 64.57"><title>chat-black</title><g id="Capa_2" data-name="Capa 2"><g id="Capa_1-2" data-name="Capa 1"><path d="M35,55.26a3.69,3.69,0,0,1,2.11-.66H73a8.89,8.89,0,0,0,8.89-8.89V10A8.89,8.89,0,0,0,73,1.06H10A8.89,8.89,0,0,0,1.06,10V45.7A8.89,8.89,0,0,0,10,54.59h8.28a1.83,1.83,0,0,1,1.83,1.82v4.75a2.34,2.34,0,0,0,3.67,1.92Z" style="fill:none;stroke:#211915;stroke-linecap:round;stroke-miterlimit:10;stroke-width:2.12598419189453px"/><circle cx="24.32" cy="27.75" r="4.46" style="fill:none;stroke:#211915;stroke-linecap:round;stroke-miterlimit:10;stroke-width:2.12598419189453px"/><circle cx="41.48" cy="27.75" r="4.46" style="fill:none;stroke:#211915;stroke-linecap:round;stroke-miterlimit:10;stroke-width:2.12598419189453px"/><circle cx="58.63" cy="27.75" r="4.46" style="fill:none;stroke:#211915;stroke-linecap:round;stroke-miterlimit:10;stroke-width:2.12598419189453px"/></g></g></svg>
	  				</a>
	  			</div>
	  		</div>
		    <div class="center"><a href="index"><amp-img layout="responsive" width="67" height="45" src="img/villasflamingos-logo-black.svg"></amp-img></amp-layout></a></div>
		    <div class="buttonContainer"><div class="available habitaciones blackBorder" on="tap:reservar" role="button"><span>RESERVAR</span></div></div>
	  	</div>
	</header>
  	<amp-lightbox id="reservar" layout="nodisplay">
  		<button class="close" on="tap:reservar.close">✕</button>
  		<div class="container"><h1>RESERVAR MODAL</h1></div>
  		<div data-mirai-engine="mirai_be" data-lang="es" data-idhotel="100376918"></div>
		<div data-mirai-engine="mirai_rs"></div>
	</amp-lightbox>

  	<!-- Start Sidebar -->
	<amp-sidebar id="header-sidebar" class="ampstart-sidebar px3  " layout="nodisplay">
		<div class="flex justify-start items-center ampstart-sidebar-header">
			<div role="button" aria-label="close sidebar" on="tap:header-sidebar.toggle" tabindex="0" class="ampstart-navbar-trigger items-start">✕</div>
		</div>
		<nav class="ampstart-sidebar-nav ampstart-nav">
			<ul class="list-reset m0 p0 ampstart-label">
		      <li><div class="ampstart-nav-item"><a class="ampstart-nav-link" on="tap:header-sidebar.close" href="index">Inicio</a></div></li>
		    </ul>
		    <details class="firstOrder" title="Click para ver opciones">
		    	<summary><div>Habitaciones</div></summary>
		    	<ul>
		      		<li class="ampstart-nav-item"><a href="habitaciones-vista-jardin"><p>Vista Jardín</p><img src="img/h2.svg"/></a></li>
		      		<li class="ampstart-nav-item"><a href="habitaciones-vista-mar"><p>Vista Mar</p><img src="img/h2.svg"/></a></li>
		      		<li class="ampstart-nav-item"><a href="habitaciones-bungalow-jardin"><p>Bungalow Jardín</p><img src="img/h4.svg"/></a></li>
		      		<li class="ampstart-nav-item"><a href="habitaciones-bungalow-arena"><p>Bungalow Arena</p><img src="img/h4.svg"/></a></li>
		      		<li class="ampstart-nav-item"><a href="habitaciones-bungalow-mangle"><p>Bungalow Mangle</p><img src="img/h2.svg"/></a></li>
		      		<li class="ampstart-nav-item"><a href="habitaciones-cacao"><p>Cacao</p><img src="img/h2.svg"/></a></li>
		      		<li class="ampstart-nav-item"><a href="habitaciones-coco"><p>Coco</p><img src="img/h2.svg"/></a></li>
		      		<li class="ampstart-nav-item"><a href="habitaciones-miel"><p>Miel</p><img src="img/h2.svg"/></a></li>
		      		<li class="ampstart-nav-item"><a href="habitaciones-suite-luna-de-miel"><p>Suite Luna de Miel</p><img src="img/h2.svg"/></a></li>
		      		<li class="ampstart-nav-item"><a href="habitaciones-bungalow-cielo"><p>Bungalow Cielo</p><img src="img/h2.svg"/></a></li>
		      		<li class="ampstart-nav-item"><a href="habitaciones-master-suite-palapa"><p>Master Suite Palapa</p><img src="img/h2.svg"/></a></li>
		      		<li class="ampstart-nav-item"><a href="habitaciones-comparar">Comparar habitaciones</a></li>
		      	</ul>
		    </details>
		    <details class="firstOrder" title="Click para ver opciones">
		    	<summary><div>Hotel</div></summary>
		    	<ul>
		    		<li class="ampstart-nav-item"><a href="hotel-restaurante-el-mangle">Restaurante El Mangle</a></li>
		      		<li class="ampstart-nav-item"><a href="hotel-traslados">Traslados</a></li>
		      		<li >
		      			<details class="secondOrder" title="Click para ver opciones">
					    	<summary><div>Experiencias</div></summary>
					    	<ul>
					    		<li class="ampstart-nav-item"><a href="experiencias-cenas-romanticas">Cenas Romanticas</a></li>
					    		<li class="ampstart-nav-item"><a href="experiencias-propuesta-matrimonio">Propuesta de Matrimonio</a></li>
					    		<li class="ampstart-nav-item"><a href="experiencias-busqueda-tesoro">Búsqueda de Tesoro</a></li>
					    		<li class="ampstart-nav-item"><a href="experiencias-sorpresa-en-habitacion">Sorpresa en tu habitación</a></li>
					    		<li class="ampstart-nav-item"><a href="experiencias-masajes">Masajes</a></li>
					    		<li class="ampstart-nav-item"><a href="experiencias-paddleboard-bicicletas">Paddle Board y Bicicletas</a></li>
					    	</ul>
					    </details>
		      		</li>
		      		<li >
		      			<details class="secondOrder" title="Click para ver opciones">
					    	<summary><div>Eventos</div></summary>
					    	<ul>
					    		<li class="ampstart-nav-item"><a href="eventos-bodas">Bodas</a></li>
					    		<li class="ampstart-nav-item"><a href="eventos-sala-conferencias">Sala de Conferencias</a></li>
					    		<li class="ampstart-nav-item"><a href="eventos-yoga">Yoga</a></li>
					    	</ul>
					    </details>
		      		</li>
		      	</ul>
		    </details>
		    <ul>
		      <li class="ampstart-nav-item"><a class="ampstart-nav-link" on="tap:header-sidebar.close" href="galeria">Galería</a></li>
			</ul>
		    <details class="firstOrder" title="Click para ver opciones">
		    	<summary><div>Holbox</div></summary>
		    	<ul>
		    		<li class="ampstart-nav-item"><a href="holbox-ubicacion">Ubicación</a></li>
		      		<li class="ampstart-nav-item"><a href="holbox-tips">Tips</a></li>
		      		<li class="ampstart-nav-item"><a href="holbox-tours">Tours</a></li>
		      	</ul>
		    </details>
		   	<ul>
		      <li class="ampstart-nav-item"><a class="ampstart-nav-link" on="tap:header-sidebar.close" href="contacto">Contacto</a></li>
		      <li class="ampstart-nav-item"><a class="ampstart-nav-link" on="tap:header-sidebar.close" href="faq">Preguntas Frecuentes</a></li>
			</ul>
		</nav>
	</amp-sidebar>