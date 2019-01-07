<!DOCTYPE HTML>
<!--
	TXT by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Página Municipal</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{asset('css/main.css')}}" />
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">
			<!-- Nav -->
				<nav id="nav">
					<ul>
						<li class="current"><a href="/">Inicio</a></li>
						<li>
							<a href="/#main">Quienes Somos</a>
						</li>
						<li><a href="/tramites">Trámites</a></li>
						<li><a href="/contacto">Contacto</a></li>
						<li><a href="/turismo">Turismo</a></li>
						<li><a href="/transparencia">Transparencia</a></li>
						<li><a href="/organigrama">Organigrama</a></li>
						@if(Auth::check())
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}} </a>
                              <ul class="dropdown-menu">
                                <li><a href="/inicio">inicio</a></li>
                                <li><a href="/lista-post">Ver post</a></li>
                                <li><a href="/password/email">Cambiar contraseña</a></li>
                                <li><a href="/auth/logout">Cerrar sesion</a></li>
                              </ul>
                            </li>
                        @endif
					</ul>
				</nav>

			<!-- Banner -->
				<section id="banner">
					<div class="content imagen">
						<h2>Ayuntamiento de Jalpan</h2>
						<p>Tierra de Cafetales y Riqueza Natural</p>
						<a href="#main" class="button scrolly">Quiénes Somos</a>
					</div>
				</section>

			<!-- Main -->
				<section id="main">
					<div class="container">
						<div class="row gtr-200">
							<div class="col-12">

								<!-- Highlight -->
									<section class="box highlight">
										<!--<ul class="special">
											<li><a href="#" class="icon fa-search"><span class="label">Magnifier</span></a></li>
											<li><a href="#" class="icon fa-tablet"><span class="label">Tablet</span></a></li>
											<li><a href="#" class="icon fa-flask"><span class="label">Flask</span></a></li>
											<li><a href="#" class="icon fa-cog"><span class="label">Cog?</span></a></li>
										</ul>-->
										<header>
											<h2>¿Quiénes Somos?</h2>
											<p>Jalpan Decidido al Cambio Verdadero</p>
										</header>
										<p>De origen totonaca y Otomí, cobijado por la sierra norte de Puebla, bañada por el aroma de sus cafetales <br> y acompañada por sus sabores poco convencionales de los frutos que ofrece la Tierra Poblana, como son la Yaca, Maracuya y Jobo.</p>
										<p style="text-alian:justify;">
										Pahual, Acoyotitla, Techalotla y Pahuatlán al poniente son los rios principales que recorren a Jalpan los cuales se unen al río Pantepec principal formador del Tuxpan, que sirve como límite con el estado de Hidalgo. El río San Marcos, afluente del Cazones, baña el sureste del municipio en un recorrido de más de 17 Kilómetros. Por último, la porción oriental es recorrida por numerosos arroyos intermitentes en dirección sureste-noroeste, destacando el María Andrea y el Tepetzala, ubicándose dentro de la cuenca de los ríos Tuxpan y Cazones.
										</p>
									</section>

							</div>
							<div class="col-12">

								<!-- Features -->
									<section class="box features">
										<h2 class="major"><span>Diversidad</span></h2>
										<div>
											<div class="row">
												<div class="col-3 col-6-medium col-12-small">

													<!-- Feature -->
														<section class="box feature">
															<a href="#" class="image featured"><img src="{{asset('images/fruta.jpg')}}" alt="" /></a>
															<h3><a href="#">El naranjo</a></h3>
															<p>
																Huertos de mandarina, naranja, naranga limon y cafe, ubicado entre "Cuarto de hora" y "El naranjo".
															</p>
														</section>

												</div>
												<div class="col-3 col-6-medium col-12-small">

													<!-- Feature -->
														<section class="box feature">
															<a href="#" class="image featured"><img src="{{asset('images/senor.jpg')}}" alt="" style="height: 200px;" /></a>
															<h3><a href="#">Mario Juaquinillo Márquez</a></h3>
															<p>
																Cronista del pueblo de Apapantilla.
															</p>
														</section>

												</div>
												<div class="col-3 col-6-medium col-12-small">

													<!-- Feature -->
														<section class="box feature">
															<a href="#" class="image featured"><img src="{{asset('images/jobo.jpg')}}" alt="" /></a>
															<h3><a href="#">Agua de Jobo</a></h3>
															<p>
																Hecho de fruta de Jobo, rica en sabor y nutriente.
															</p>
														</section>

												</div>
												<div class="col-3 col-6-medium col-12-small">

													<!-- Feature -->
														<section class="box feature">
															<a href="#" class="image featured"><img src="{{asset('images/senora.jpg')}}" alt="" style="height: 200px;" /></a>
															<h3><a href="#">El arte de Cocinar</a></h3>
															<p>
																Tortillas hechas a mano por personas del municipio.
															</p>
														</section>

												</div>
												<div class="col-12">
													<ul class="actions">
														<li><a href="/turismo" class="button large">Turismo</a></li>
														<li><a href="/turismo#portfolio" class="button alt large">Galería</a></li>
													</ul>
												</div>
											</div>
										</div>
									</section>

							</div>
						</div>
					</div>
				</section>

			<!-- Footer -->
				<footer id="footer">
					<div class="container">
						<div class="row gtr-200">
							<div class="col-12">

								<!-- Contact -->
									<section>
										<h2 class="major"><span>Redes Sociales</span></h2>
										<ul class="contact">
											<li><a class="icon fa-facebook" href="https://www.facebook.com/Ayuntamiento-Jalpan-2018-2021-340526706700657"><span class="label">Facebook</span></a></li>
											<li><a class="icon fa-instagram" href="https://www.instagram.com/ayuntamiento_jalpan.puebla"><span class="label">Instagram</span></a></li>
										</ul>
									</section>

							</div>
						</div>

						<!-- Copyright -->
							<div id="copyright">
								<ul class="menu">
									<li>H. Ayuntamiento de Jalpan, Puebla.<br> En colaboración con el Instituto Politécnico Nacional.<br>
									<img src="{{asset('turi/images/escudo.png')}}" title="H. Ayuntamiento de Jalpan, Puebla" style="height: 50px; padding-right: 2.5%;">
									<img src="{{asset('turi/images/logoipn.png')}}" title="Instituto Politécnico Nacional" style="height: 50px; padding-left: 2.5%;"> </li>
								</ul>
							</div>

					</div>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="{{asset('js/jquery.min.js')}}"></script>
			<script src="{{asset('js/jquery.dropotron.min.js')}}"></script>
			<script src="{{asset('js/jquery.scrolly.min.js')}}"></script>
			<script src="{{asset('js/browser.min.js')}}"></script>
			<script src="{{asset('js/breakpoints.min.js')}}"></script>
			<script src="{{asset('js/util.js')}}"></script>
			<script src="{{asset('js/main.js')}}"></script>

	</body>
</html>