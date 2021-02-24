<?php
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: DENY');
header("X-XSS-Protection: 1; mode=block");
header("Referrer-Policy: strict-origin-when-cross-origin");
header("Permissions-Policy: fullscreen=(), geolocation=(), camera=(), microphone=()");
header("Content-Security-Policy:frame-ancestors 'none'; default-src 'self';img-src 'self' data:;style-src 'self' 'unsafe-inline';script-src 'self' 'sha256-ajGjo5eD0JzFPdnpuutKT6Sb5gLu+Q9ru594rwJogGQ=' 'sha256-vvt4KWwuNr51XfE5m+hzeNEGhiOfZzG97ccfqGsPwvE=' 'sha256-Mrs88g1byVkLHsPw+1FUhrKsHB9Qh7nyDJ7afahdX9s=' 'sha256-eGG8qgSAZWp6J3WOiPYNCznSvv4IDhyKZs5w6fwksLs=' https://maps.googleapis.com ;frame-src https://www.google.com ");
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<title>Centro Amaï - Centro de Apoyo a la Maternidad - La Serena</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Centro de Apoyo a la Maternidad y Alimentación Infantil. Contamos con profesionales altamente capacitadas en lactancia y alimentación." />
	<link rel="canonical" href="https://www.centroamai.cl/" />

	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/aos.css">

	<link rel="stylesheet" href="css/ionicons.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/flaticon/font/flaticon.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/custom.css">

	<!--FAvicon -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.ico">


</head>

<body data-spy="scroll" data-target="navbar" data-offset="20" style="position: relative;">
	<!--<div class="py-2 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
			    		<div class="col-md-5 pr-4 d-flex topper align-items-center">
			    			<div class="icon bg-fifth mr-2 d-flex justify-content-center align-items-center"><span class="icon-map"></span></div>
						    <span class="text">198 West 21th Street, Suite 721 New York NY 10016</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon bg-secondary mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">youremail@email.com</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon bg-tertiary mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+ 1235 2355 98</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>-->
	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="navbar">

		<div class="container d-flex align-items-center">

			<a class="navbar-brand" href="index.php">
				<picture>
					<source srcset="images/amai_logo_navbar.webp" type="image/webp">
					<source srcset="images/amai_logo_navbar.png" type="image/png">
					<img src="amai_logo.png" height="60">
				</picture>
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle Navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="https://www.centroamai.cl/#inicio" class="nav-link pl-0">Inicio</a></li>
					<li class="nav-item"><a href="https://www.centroamai.cl/#servicios" class="nav-link">Servicios</a></li>
					<li class="nav-item"><a href="https://www.centroamai.cl/#especialistas" class="nav-link">Especialistas</a></li>
					<li class="nav-item"><a href="https://www.centroamai.cl/#contacto" class="nav-link">Contacto</a></li>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->

	<section class="home-slider owl-carousel" id="inicio">

		<div class="slider-item" id="item1" data-stellar-background-ratio="0.3">
			<div class="overlay" style="opacity: 0.6;"></div>
			<div class="container">
				<div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="false">
					<div class="col-md-8 text-center ftco-animate">
						<h1 class="h1-responsive mb-4">Centro de Apoyo a la Maternidad y Alimentación Infantil</h1>
						<!--<p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">Read More</a></p>-->
					</div>
				</div>
			</div>
		</div>

		<div class="slider-item" id="item2" data-stellar-background-ratio="0.3">
			<div class="overlay" style="opacity: 0.6;"></div>
			<div class="container">
				<div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="false">
					<div class="col-md-8 text-center ftco-animate">
						<h1 class="h1-responsive mb-4">Centro Amaï - La Serena</h1>
						<!--<p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">Read More</a></p>-->
					</div>
				</div>
			</div>
		</div>

		<div class="slider-item" id="item3" data-stellar-background-ratio="0.3">
			<div class="overlay" style="opacity: 0.6;"></div>
			<div class="container">
				<div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="false">
					<div class="col-md-8 text-center ftco-animate">
						<h1 class="h1-responsive mb-4">Apoyo a la Maternidad y Alimentación Infantil</h1>
						<!--<p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">Read More</a></p>-->
					</div>
				</div>
			</div>
		</div>


	</section>

	<!--<section class="ftco-services ftco-no-pb">
		<div class="container-wrap">
			<div class="row no-gutters">
				<div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-primary">
					<div class="media block-6 d-block text-center">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-teacher"></span>
						</div>
						<div class="media-body p-2 mt-3">
							<h3 class="heading">Pediatría</h3>
							<p>Even the all-powerful Pointing has no control about the blind texts it is an almost
								unorthographic.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-tertiary">
					<div class="media block-6 d-block text-center">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-reading"></span>
						</div>
						<div class="media-body p-2 mt-3">
							<h3 class="heading">Special Education</h3>
							<p>Even the all-powerful Pointing has no control about the blind texts it is an almost
								unorthographic.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-fifth">
					<div class="media block-6 d-block text-center">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-books"></span>
						</div>
						<div class="media-body p-2 mt-3">
							<h3 class="heading">Book &amp; Library</h3>
							<p>Even the all-powerful Pointing has no control about the blind texts it is an almost
								unorthographic.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-quarternary">
					<div class="media block-6 d-block text-center">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-diploma"></span>
						</div>
						<div class="media-body p-2 mt-3">
							<h3 class="heading">Certification</h3>
							<p>Even the all-powerful Pointing has no control about the blind texts it is an almost
								unorthographic.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>-->

	<section class="ftco-section ftco-no-pt ftc-no-pb" id="servicios">
		<div class="container">
			<div class="row">
				<div class="col-md-12 wrap-about py-5 pr-md-4 ftco-animate">
					<div class="col-md-12 pt-4 text-center heading-section ftco-animate">
						<h2 class="mb-4"><span>Nuestros</span> Servicios</h2>
						<!--<p>Separated they live in. A small river named Duden flows by their place and supplies it with the
							necessary regelialia. It is a paradisematic country</p>-->
					</div>
					<div class="row mt-5">
						<div class="col-lg-6">
							<div class="services-2 d-flex">
								<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-medal"></span></div>
								<div class="text">
									<h3>Pediatría</h3>
									<ul>
										<li>Pro lactancia materna</li>
										<li>Pro crianza respetuosa</li>
										<li>Asesores de BLW</li>
										<li>Uso racional de medicamentos</li>
									</ul>
									<!--<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>-->
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="services-2 d-flex">
								<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-medal"></span></div>
								<div class="text">
									<h3>Consejería en Lactancia Materna</h3>
									<ul>
										<li>Profesionales de la salud certificados en lactancia materna
										<li>Consejerías pre natales</li>
										<li>Consejería post natales</li>
										<li>Asesoría en destete respetuoso</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="services-2 d-flex">
								<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-medal"></span></div>
								<div class="text">
									<h3>Nutrición</h3>
									<ul>
										<li>Materno infantil</li>
										<li>Nutrición vegetariana</li>
										<li>Consejero de Lactancia</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="services-2 d-flex">
								<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-medal"></span></div>
								<div class="text">
									<h3>Psicología</h3>
									<ul>
										<li>Psicología infanto-juvenil</li>
										<li>Experiencia en TEA</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="services-2 d-flex">
								<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-medal"></span></div>
								<div class="text">
									<h3>Fonoaudiología</h3>
									<ul>
										<li>Consejería en Lactancia Materna</li>
										<li>Experiencia en TEA</li>
										<li>Trastornos de lenguaje, habla y deglución</li>
										<li>Rechazo alimentario</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="services-2 d-flex">
								<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-medal"></span></div>
								<div class="text">
									<h3>Terapia Ocupacional</h3>
									<ul>
										<li>AVD (actividades de la vida diaria)</li>
										<li>Integración sensorial</li>
										<li>Rechazo alimentario</li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-lg-6">
							<div class="services-2 d-flex">
								<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-medal"></span></div>
								<div class="text">
									<h3>Matrona</h3>
									<ul>
										<li>Ginecología natural</li>
										<li>Consejería en salud sexual y reproductiva</li>
										<li>Consejería en anticoncepción </li>
										<li>Acompañamiento integral (prenatal, parto, postparto)</li>
										<li>Asesoría parto respetado (plan de parto)</li>
										<li>Medicina Placentaria</li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-lg-6">
							<div class="services-2 d-flex">
								<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-medal"></span></div>
								<div class="text">
									<h3>Medicina General</h3>
									<ul>
										<li>Medicina de Biorregulación</li>
										<li>Fisioterapia clínica</li>
										<li>Medicina Ortomolecular</li>
										<li>Alimentación y Nutrición Ayurvédica</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--<section class="ftco-intro" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<h2>Teaching Your Child Some Good Manners</h2>
					<p class="mb-0">A small river named Duden flows by their place and supplies it with the necessary
						regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your
						mouth.</p>
				</div>
				<div class="col-md-3 d-flex align-items-center">
					<p class="mb-0"><a href="#" class="btn btn-secondary px-4 py-3">Take a Course</a></p>
				</div>
			</div>
		</div>
	</section>-->

	<!-- Galeria-->
	<section class="ftco-gallery">
		<div class="container-wrap">
			<div class="row no-gutters">
				<div class="col-md-3 ftco-animate">
					<a href="https://www.centroamai.cl/images/fotos_amai.jpeg" class="gallery image-popup img d-flex align-items-center" id="foto1">
					</a>
				</div>

				<div class="col-md-3 ftco-animate">
					<a href="https://www.centroamai.cl/images/fotos_portada1.jpeg" class="gallery image-popup img d-flex align-items-center" id="foto2">
					</a>
				</div>
				<div class="col-md-3 ftco-animate">
					<a href="https://www.centroamai.cl/images/amai_logo.jpg" class="gallery image-popup img d-flex align-items-center" id="foto3">
					</a>
				</div>

				<div class="col-md-3 ftco-animate">
					<a href="https://www.centroamai.cl/images/fotos_amai3.jpeg" class="gallery image-popup img d-flex align-items-center" id="foto4">
					</a>
				</div>
				<div class="col-md-3 ftco-animate">
					<a href="https://www.centroamai.cl/images/fotos_portada3.jpeg" class="gallery image-popup img d-flex align-items-center" id="foto5">
					</a>
				</div>
				<div class="col-md-3 ftco-animate">
					<a href="https://www.centroamai.cl/images/fotos_amai4.jpeg" class="gallery image-popup img d-flex align-items-center" id="foto6">
					</a>
				</div>
				<div class="col-md-3 ftco-animate">
					<a href="https://www.centroamai.cl/images/fotos_portada2.jpeg" class="gallery image-popup img d-flex align-items-center" id="foto7">
					</a>
				</div>

				<div class="col-md-3 ftco-animate">
					<a href="https://www.centroamai.cl/images/fotos_amai1.jpeg" class="gallery image-popup img d-flex align-items-center" id="foto8">
					</a>
				</div>

			</div>
		</div>
	</section>

	<!-- ESPECIALISTAS -->
	<section class="ftco-section ftco-no-pb" id="especialistas">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-8 text-center heading-section ftco-animate">
					<h2 class="mb-4"><span>Nuestros</span> Especialistas</h2>
					<!--<p>Separated they live in. A small river named Duden flows by their place and supplies it with the
						necessary regelialia. It is a paradisematic country</p>-->
				</div>
			</div>
			<div class="row mb-5">
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" id="item1">
							</div>
						</div>
						<div class="text pt-3 text-center">
							<h3>Mauro Rivera</h3>
							<span class="position">Médico Cirujano</span>
							<!--<span class="position mb-2">Medicina de Bioregulación</span>-->
							<!--<div class="faded">
								<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
								<ul class="ftco-social text-center">
									<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
								</ul>
							</div>-->
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" id="item2">
							</div>
						</div>
						<div class="text pt-3 text-center">
							<h3>Carmina Nicolai</h3>
							<span class="position">Matrona Proparto</span>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" id="item4">
							</div>
						</div>
						<div class="text pt-3 text-center">
							<h3>Daniel Oliva</h3>
							<span class="position">Nutricionista</span>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" id="item5">
							</div>
						</div>
						<div class="text pt-3 text-center">
							<h3>Pía Espejo</h3>
							<span class="position">Psicóloga</span>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" id="item7">
							</div>
						</div>
						<div class="text pt-3 text-center">
							<h3>Paulette Tohá</h3>
							<span class="position">Psicóloga Infantil</span>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" id="item8">
							</div>
						</div>
						<div class="text pt-3 text-center">
							<h3>Karla López</h3>
							<span class="position">Fonoaudióloga</span>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" id="item9">
							</div>
						</div>
						<div class="text pt-3 text-center">
							<h3>Claudia Salas</h3>
							<span class="position">Médico Infanto Juvenil</span>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" id="item10">
							</div>
						</div>
						<div class="text pt-3 text-center">
							<h3>Scarlett Orellana</h3>
							<span class="position">Médico Infanto Juvenil</span>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" id="item11">
							</div>
						</div>
						<div class="text pt-3 text-center">
							<h3>Francisca Gutiérrez</h3>
							<span class="position">Terapeuta Ocupacional</span>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" id="item12">
							</div>
						</div>
						<div class="text pt-3 text-center">
							<h3>Stefania Rigotti</h3>
							<span class="position">Nutricionista Infantil</span>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" id="item13">
							</div>
						</div>
						<div class="text pt-3 text-center">
							<h3>Francisca Muñoz</h3>
							<span class="position">Nutricionista Adulto</span>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" id="item14">
							</div>
						</div>
						<div class="text pt-3 text-center">
							<h3>Mª Valentina Olivier</h3>
							<span class="position">Psicóloga Infantil</span>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" id="item15">
							</div>
						</div>
						<div class="text pt-3 text-center">
							<h3>Charnelle Galleguillos</h3>
							<span class="position">Fonoaudióloga</span>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" id="item16">
							</div>
						</div>
						<div class="text pt-3 text-center">
							<h3>Constanza Retamal</h3>
							<span class="position">Terapeuta Ocupacional</span>
						</div>
					</div>
				</div>


				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" id="item17">
							</div>
						</div>
						<div class="text pt-3 text-center">
							<h3>Mariflor Martínez</h3>
							<span class="position">Endocrinóloga Infantil</span>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" id="item18">
							</div>
						</div>
						<div class="text pt-3 text-center">
							<h3>Gabriela Araya</h3>
							<span class="position">Psicopedagoga</span>
						</div>
					</div>
				</div>


			</div>
		</div>
	</section>

	<!-- MISION & VISION-->
	<section class="ftco-section ftco-counter img" id="section-counter" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row mb-5 pb-2">
				<div class="col-md-6 text-center heading-section heading-section-black ftco-animate">
					<h2 class="mt-4" style="color: white;">Nuestra <span>visión</span></h2>
					<h6 class="font-weight-normal px-3" style="color: white;">"Ser el primer y mejor centro integral de apoyo
						a la maternidad y la alimentación infantil de la región de Coquimbo".</h6>
				</div>

				<div class="col-md-6 text-center heading-section heading-section-black ftco-animate">
					<h2 class="mt-4" style="color: white;">Nuestra <span>misión</span></h2>
					<h6 class="font-weight-normal px-3" style="color: white;">"Acompañar a las familias en el proceso de
						maternidad, desarrollo infantil, establecimiento de vínculo afectivo seguro y alimentación,
						siendo la red de apoyo multidisciplinaria de la región".</h6>
				</div>
			</div>
			<!--
			<div class="row d-md-flex align-items-center justify-content-center">
				<div class="col-lg-10">
					<div class="row d-md-flex align-items-center">
						<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18">
								<div class="icon"><span class="flaticon-doctor"></span></div>
								<div class="text">
									<strong class="number" data-number="18">0</strong>
									<span>Certified Teachers</span>
								</div>
							</div>
						</div>
						<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18">
								<div class="icon"><span class="flaticon-doctor"></span></div>
								<div class="text">
									<strong class="number" data-number="351">0</strong>
									<span>Successful Kids</span>
								</div>
							</div>
						</div>
						<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18">
								<div class="icon"><span class="flaticon-doctor"></span></div>
								<div class="text">
									<strong class="number" data-number="564">0</strong>
									<span>Happy Parents</span>
								</div>
							</div>
						</div>
						<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18">
								<div class="icon"><span class="flaticon-doctor"></span></div>
								<div class="text">
									<strong class="number" data-number="300">0</strong>
									<span>Awards Won</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>-->
		</div>
	</section>

	<!-- TESTIMONIOS-->
	<!--<section class="ftco-section testimony-section bg-light">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-8 text-center heading-section ftco-animate">
					<h2 class="mb-4"><span>What Parents</span> Says About Us</h2>
					<p>Separated they live in. A small river named Duden flows by their place and supplies it with the
						necessary regelialia. It is a paradisematic country</p>
				</div>
			</div>
			<div class="row ftco-animate justify-content-center">
				<div class="col-md-12">
					<div class="carousel-testimony owl-carousel">
						<div class="item">
							<div class="testimony-wrap d-flex">
								<div class="user-img mr-4" style="background-image: url(images/teacher-1.jpg)">
								</div>
								<div class="text ml-2 bg-light">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and
										Consonantia, there live the blind texts.</p>
									<p class="name">Racky Henderson</p>
									<span class="position">Father</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap d-flex">
								<div class="user-img mr-4" style="background-image: url(images/teacher-2.jpg)">
								</div>
								<div class="text ml-2 bg-light">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and
										Consonantia, there live the blind texts.</p>
									<p class="name">Henry Dee</p>
									<span class="position">Mother</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap d-flex">
								<div class="user-img mr-4" style="background-image: url(images/teacher-3.jpg)">
								</div>
								<div class="text ml-2 bg-light">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and
										Consonantia, there live the blind texts.</p>
									<p class="name">Mark Huff</p>
									<span class="position">Mother</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap d-flex">
								<div class="user-img mr-4" style="background-image: url(images/teacher-4.jpg)">
								</div>
								<div class="text ml-2 bg-light">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and
										Consonantia, there live the blind texts.</p>
									<p class="name">Rodel Golez</p>
									<span class="position">Mother</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap d-flex">
								<div class="user-img mr-4" style="background-image: url(images/teacher-1.jpg)">
								</div>
								<div class="text ml-2 bg-light">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and
										Consonantia, there live the blind texts.</p>
									<p class="name">Ken Bosh</p>
									<span class="position">Mother</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>-->

	<!-- FOOTER-->
	<footer class="ftco-footer ftco-bg-dark ftco-section" id="contacto">
		<div class="container">
			<div class="row mb-0">
				<div class="col-md-4 col-lg-4">
					<div class="ftco-footer-widget clearfix">

						<div class="row d-flex flex-column mb-5 ml-auto">
							<h2 class="ftco-heading-2  mb-3">Contacto</h2>
							<hr class="hr-light" style="max-width: 25%;margin: 0;">
						</div>
						<div class="block-23 mb-3">
							<ul>
								<li>
									<span class="icon icon-map-marker"></span><span class="text">Las Rojas Poniente
										#236,
										La Serena, Chile</span>
								</li>
								<li>
									<span class="icon icon-clock-o"></span>
									<div class="d-flex flex-column">
										<div>
											<span class="text">Lunes a Viernes</span>
										</div>
										<div>
											<span class="text">9:00 a 13:00 hrs</span>
										</div>
										<div>
											<span class="text">14:00 a 19:00 hrs</span>
										</div>
									</div>
								</li>
								<li>
									<span class="icon icon-phone"></span>
									<div class="d-flex flex-column">
										<div>
											<span class="text">+56 9 5990 5385</span>
										</div>
										<div>
											<span class="text">+56 9 5687 6165</span>
										</div>
									</div>
								</li>
								<li>
									<span class="icon icon-envelope"></span>
									<span class="text">amaicentro@gmail.com</span>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-lg-4">
					<div class="ftco-footer-widget">
						<div class="row d-flex flex-column mb-5 ml-auto">
							<h2 class="ftco-heading-2 mb-3">Links</h2>
							<hr class="hr-light" style="max-width: 25%;margin: 0;">
						</div>
						<ul class="list-unstyled">
							<li><a href="https://www.centroamai.cl/#inicio"><span class="ion-ios-arrow-round-forward mr-2"></span>Inicio</a>
							</li>
							<li><a href="https://www.centroamai.cl/#servicios"><span class="ion-ios-arrow-round-forward mr-2"></span>Servicios</a>
							</li>
							<li>
								<a href="https://www.centroamai.cl/#especialistas"><span class="ion-ios-arrow-round-forward mr-2"></span>Especialistas</a>
							</li>
							<li><a href="https://www.centroamai.cl/#contacto"><span class="ion-ios-arrow-round-forward mr-2"></span>Contacto</a>
							</li>

						</ul>
					</div>
				</div>
				<div class="col-md-4 col-lg-4">
					<div class="ftco-footer-widget">
						<div class="row d-flex flex-column mb-5 ml-auto">
							<h2 class="ftco-heading-2 mb-3">Redes Sociales</h2>
							<hr class="hr-light" style="max-width: 25%;	margin: 0;">
						</div>
						<div>
							<ul class="ftco-footer-social list-unstyled float-md-left float-lft">
								<li class="ftco-animate"><a href="https://www.facebook.com/centroamai/" target="_blank"><span class="icon-facebook"></span></a></li>
								<li class="ftco-animate"><a href="https://www.instagram.com/centroamai/" target="_blank"><span class="icon-instagram"></span></a></li>
							</ul>
						</div>

					</div>
				</div>
			</div>
			<hr class="mb-5">
			<div class="row mb-5 d-flex justify-content-center">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1028.1569422444134!2d-71.25612644271442!3d-29.913438628768006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9691cbd655a180cb%3A0xe7db50e14c040b93!2sCentro%20Amai!5e0!3m2!1sen!2scl!4v1609260296618!5m2!1sen!2scl" width="1200" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
		</div>
		<div class="text-center pt-4 ftco-footer-copyright">
			<p class="mb-0  px-2">
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				Copyright &copy;
				<script>
					document.write(new Date().getFullYear());
				</script> Centro AMAI
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			</p>

		</div>

		<div class="text-center pb-1 ftco-footer-copyright">
			<p class="px-2">Esta plantilla está hecha con <i class="icon-heart" aria-hidden="true"></i> por <a href="https://colorlib.com" target="_blank"><b>Colorlib</b></a>
				y adaptada por <a href="https://figonzal.cl"><b>figonzal.cl</b></a>
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			</p>
		</div>
	</footer>



	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
		</svg></div>


	<!-- SCRIPTS -->
	<!-- JQuery -->
	<!-- JQuery -->
	<!-- JQuery -->
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/scrollax.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/modernizr-custom.js"></script>
	<script>
		Modernizr.on('webp', function(result) {
			if (result) {
				// supported
			} else {
				// not-supported
			}
		});
	</script>

</body>

</html>