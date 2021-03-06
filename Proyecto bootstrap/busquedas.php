<?php 
	include("dll/conexion.php");
 ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Sistema de Audios UTPL</title>
	<!-- Meta-Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="audios, utpl" />
	<!--<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>-->
	<!-- //Meta-Tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!--bootstrap-css-->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!--font-awesome-css-->
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	<!--flexslider-css-->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" type="text/css" href="icons/font.css">
	<!--style-sheet-->
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Raleway:200,300,400,600,700,800,900" rel="stylesheet">
	<!--//fonts-->

</head>

<body>
	<!--banner start here-->
	<div class="principal">
		<div class="container">
		    <div class="login caja-login">
		      	<div class="login-header">
		      		Login
		      		<a class="btnCerrar icon-close" href="index.php"></a>
		  		</div>
		      <div class="login-body">
		        <form method="post" action="dll/login.php">
		          <div class="form-group">
		            <label for="label_email">Email address</label>
		            <input class="form-control" name="txtEmail" type="email" placeholder="Enter email" required>
		          </div>
		          <div class="form-group">
		            <label for="label_contraseña">Password</label>
		            <input class="form-control" name="txtContraseña" type="password" placeholder="Password" required>
		          </div>
		          <div class="form-group">
		            <div class="form-check">
		              <label class="form-check-label">
		                <input class="form-check-input" type="checkbox"> Recordar contraseña</label>
		            </div>
		          </div>
		         	<button class="btn btn-primary btn-block" type="submit">Login</button>
		        </form>
		        <div class="text-center acceso">
		          <a class="small btnRegistrar" href="#home">Registrarse ahora</a>
		          <a class="small" href="">Olvidaste tu contraseña?</a>
		        </div>
		      </div>
		    </div>
		</div>
	</div>
	<div class="principal2">
		 <div class="container">
		    <div class="registro caja-registro">
		      <div class="registro-header">Registrar una Cuenta</div>
		      <div class="registro-body">
		        <form method="post" action="dll/registro.php">
		          <div class="form-group">
		            <div class="form-row">
		              <div class="col-md-6">
		                <label for="exampleInputName">Nombres</label>
		                <input class="form-control" name="txtNombre" type="text" placeholder="Ingrese sus nombres" required="">
		              </div>
		              <div class="col-md-6">
		                <label for="exampleInputLastName">Apellidos</label>
		                <input class="form-control" name="txtApellido" type="text" placeholder="Ingrese sus apellidos" required="">
		              </div>
		            </div>
		            <div class="form-group">
		            	<div class="form-row">
				            <div class="col-md-6">
				               <label for="exampleInputCedula">Cedula</label>
				               <input class="form-control" name="txtCedula" type="text" placeholder="Ingrese su cedula" required="">
				            </div>
				            <div class="col-md-6">
				               <label for="exampleInputNacimiento">Fecha de Nacimiento</label>
				               <input class="form-control" name="txtNacimiento" type="date" placeholder="Ingrese su cedula" required="">
				            </div>
			            </div>
		            </div>
		          </div>
		          <div class="form-group">
		            <label for="exampleInputEmail1">Dirección e-mail</label>
		            <input class="form-control" name="txtCorreo" type="email" placeholder="Ingresar email" required="">
		          </div>
		          <div class="form-group">
		            <div class="form-row">
		              <div class="col-md-6">
		                <label for="exampleInputPassword1">Contraseña</label>
		                <input class="form-control" name="txtPassword" type="password" placeholder="Contraseña" required="">
		              </div>
		              <div class="col-md-6">
		                <label for="exampleConfirmPassword">Confirmar contraseña</label>
		                <input class="form-control" name="txtCoPassword" type="password" placeholder="Confirmar contraseña" required="">
		              </div>
		            </div>
		          </div>
		          <input type="submit" name="" class="btn btn-primary btn-block" value="Registrar">
		        </form>
		        <div class="text-center acceso">
		          <a class="small btnVlogueo" href="#home">Página de Logueo</a>
		          <a class="small" href="forgot-password.html">Olvidaste tu contraseña?</a>
		        </div>
		      </div>
		    </div>
  		</div>
  	</div>
	<div class="inicio" id="home">
		<div class="contenedor-cab">
			<div class="header">
				<div id="header-main" class="">
					<div class="container">
						<nav class="navbar barra-navegacion">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<h1>
									<a href="index.php"><b>SISTEMA </b><span class="subt">Audios</span></a>
								</h1>
							</div>
							<!-- navbar-header -->
							<div class="collapse navbar-collapse cl-effect-13" id="bs-example-navbar-collapse-1">

								<ul class="nav navbar-nav navbar-right">
									<li>
										<a href="index.php" class="">Inicio</a>
									</li>
									<li>
										<a href="index.php #audios" class="scroll">Audios</a>
									</li>
									<li>
										<a href="categorias.php" class="">Categorias</a>
									</li>
									<li>
										<a href="#about" class="scroll">Acerca de</a>
									</li>
									<li>
										<a href="#contact" class="scroll">Contactos</a>
									</li>
								</ul>

							</div>

							<div class="seccion-buscar">
								<div class="seccion-buscar-boton">
									<ul class="boton-buscar">
										<li>
											<a class="cd-search-trigger" href="#cd-search">
												<span></span>
											</a>
										</li>
									</ul>
									<!-- cd-header-buttons -->
								</div>
								<div id="cd-search" class="cd-search">
									<form action="dll/buscar.php" method="post">
										<input name="busqueda" type="search" placeholder="Ingrese para buscar">
									</form>
								</div>
							</div>
							<div class="clearfix"> </div>
						</nav>
						<div class="seccion-logueo">
							<a id="login" class="btnLogin" href="#home">LogIn</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--banner end here-->
	<!-- about -->
	<div class="audios">
		<div class="container">
			<div class="row">
				<!--PRUEBA-->
				<h3 class="titulo-seccion">Resultado de Búsqueda ...</h3>
						<?php
							if(isset($_POST['search']))
						{?>	
					<div class="col-sm-12 caja-resultado">	
						<div class="col-sm-12">	
						<?php	
								  $busqueda=$_POST['search'];
								  $cadbusca=$conexion->query("SELECT * FROM audio WHERE MATCH(autor, titulo, descripcion) AGAINST ('$busqueda*')"); 
									while ($audio=$cadbusca->fetch(PDO::FETCH_ASSOC)){

										?>
										<table>
											<thead>
												<th>PORTADA</th>
												<th>AUDIO</th>

											</thead>
										   	<tr>
										      <td><?php echo '<img class="buscarAudio" src="data:image/jpg;base64, '.base64_encode($audio['portada']).'">'; ?></td>
										    </tr>
										    <tr>
										      <td><?php echo '
						  							<b>Título: </b>'.$audio['titulo'].'
						  							<br><br><b>Autor: </b>'.$audio['autor'].'
						  							<br><br><b>Descripción: </b>'.$audio['descripcion'].'
						  							<br><br><b>Fech.Publicación: </b>'.$audio['fechaPublicacion'].'
						  							<br><br><audio controls><source src="data:audio/mp3;base64,'.base64_encode($audio['audio']).'"></audio controls>'; 
						  						?></td>
										   	</tr>
										</table>
			  						<?php		
			  						}
							?>	
						</div>
		  			</div>
		  					<?php 
		  						}else if($buscar=$_GET['buscar']){
		  					?>	
		  					<div class="col-sm-12 caja-resultado">	
							<div class="col-sm-12">	
							<?php
									  $cadbusca=$conexion->query("SELECT * FROM audio WHERE MATCH(autor, titulo, descripcion) AGAINST ('$buscar*')"); 
										while ($audio=$cadbusca->fetch(PDO::FETCH_ASSOC)){
											?>
										<table class="table">
											<thead>
											</thead>
										   	<tr>
										      <td><?php echo '<img class="buscarAudio" src="data:image/jpg;base64, '.base64_encode($audio['portada']).'">'; ?></td>
										      <td><?php echo '
						  							<b>Título: </b>'.$audio['titulo'].'
						  							<br><br><b>Autor: </b>'.$audio['autor'].'
						  							<br><br><b>Descripción: </b>'.$audio['descripcion'].'
						  							<br><br><b>Fech.Publicación: </b>'.$audio['fechaPublicacion'].'
						  							<br><br><audio controls><source src="data:audio/mp3;base64,'.base64_encode($audio['audio']).'"></audio controls>'; 
						  						?></td>
										   	</tr>
										</table>
			  						<?php		
			  						}
							?>	
							</div>
			  					<?php 
			  						}else{
			  					?>
			  					<div class="col-sm-12">	
								</div>
								<?php 
									} 
								?>
							</div>	
					
			</div>
		</div>
	</div>
	<div class="about" id="about">
		<div class="seccion-acerca-de">
			<div class="container">
				<h3 class="titulo-seccion">Acerca
					<span>De</span>
				</h3>
				<div class="contenedor-datos">
					<div class="col-md-4 cuadro-datos">
						<div class="dato vista-principal ab1">
							<div class="caja-texto">
								<span class="fa fa-bullhorn" aria-hidden="true"></span>
								<h3>Fernando Alvarez</h3>
								<p class="paragraph-w3l">Desarrollador nato, experto en lenguajes como Java, Python, Php, C#</p>
							</div>
							<div class="mask ab1">
								<br> 
								<h3>Informacion de contacto</h3>
								<br>
								<p class="paragraph-w3l">Correo: lfalvarez2@utpl.edu.ec <br> Telefono: 0959240843<br> Twitter <a href="https://twitter.com/fercho011094">@fercho011094</a> <br> Facebook: <a href="https://www.facebook.com/luisfernando.alvarezcastillo">luisfernando.alvarezcastillo</a></p><br>
							</div>
						</div>
					</div>
					<div class="col-md-4 cuadro-datos">
						<div class="dato vista-principal ab2">
							<div class="caja-texto">
								<span class="fa fa-cubes" aria-hidden="true"></span>
								<h3>Daniela Paladines</h3>
								<p class="paragraph-w3l">Experta en diseño de proyectos, especializada en base de datos semanticas. Scrum master.</p>
							</div>
							<div class="mask ab2">
								<br> 
								<h3>Informacion de contacto</h3>
								<br>
								<p class="paragraph-w3l">Correo: edpaladines@utpl.edu.ec <br> Telefono: 0994532538<br> Twitter <a href="https://twitter.com/">@dani</a> <br> Facebook: <a href="https://www.facebook.com/evelyndaniela.paladinesavila">evelyndaniela.paladinesavila</a></p><br>
							</div>
						</div>
					</div>

					<div class="col-md-4 cuadro-datos">
						<div class="dato vista-principal ab3">
							<div class="caja-texto">
								<span class="fa fa-camera-retro" aria-hidden="true"></span>
								<h3>Rocio Jaramillo</h3>
								<p class="paragraph-w3l">Ingeniera en Sistemas Informaticos, cepilla del curso, ganadora del premio humanistico Tomas Moro</p>
							</div>
							<div class="mask ab3">
								<br> 
								<h3>Informacion de contacto</h3>
								<br>
								<p class="paragraph-w3l">Correo: rcjaramillo2@utpl.edu.ec <br> Telefono: 079630617<br> Twitter <a href="https://twitter.com/RocioJaramilloR">@RocioJaramilloR</a> <br> Facebook: <a href="https://www.facebook.com/rocio.jaramillorosales">rocio.jaramillorosales</a></p><br>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- about-bottom-->
	<div class="seccion-contacto" id="contact">
		<div class="container">
			<h3 class="titulo-seccion white-title">Contactanos
			</h3>
			<div class="w3-agile_mail_grids">
				<div class="col-md-5 contact-left-w3-agile-sectn">
					<h2>Informacion de contacto</h2>
					<div class="visit">
						<div class="col-md-2 col-sm-2 col-xs-2 contact-icon">
							<span class="fa fa-home" aria-hidden="true"></span>
						</div>
						<div class="col-md-10 col-sm-10 col-xs-10 contact-text-w3-agile">
							<h4>Visitanos</h4>
							<p>San Cayetano Alto, Calle Paris, Loja</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="mail-w3ls">
						<div class="col-md-2 col-sm-2 col-xs-2 contact-icon">
							<span class="fa fa-envelope" aria-hidden="true"></span>
						</div>
						<div class="col-md-10 col-sm-10 col-xs-10 contact-text-w3-agile">
							<h4>Escribenos</h4>
							<p>
								<a href="mailto:info@example.com">@utpl.edu.ec</a>
							</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="call">
						<div class="col-md-2 col-sm-2 col-xs-2 contact-icon">
							<span class="fa fa-phone" aria-hidden="true"></span>
						</div>
						<div class="col-md-10 col-sm-10 col-xs-10 contact-text-w3-agile">
							<h4>Llamanos</h4>
							<p>+12345678</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //mail -->
	<!-- map -->
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.1625784740722!2d-79.20152538573846!3d-3.9869566971004566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91cb47fe833955bd%3A0xfd3e8617b7393995!2sUniversidad+T%C3%A9cnica+Particular+de+Loja!5e0!3m2!1ses!2sec!4v1530168179814"></iframe>
	</div>
	<!-- //map -->
	<!-- /contact -->
	<div class="footer">
		<p>© CreativeConmons Todos los derechos reservados | Diseñado por
			<a href="http://w3layouts.com/">@rcjaramillo2</a>
		</p>
	</div>
	<!--/footer -->

	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!--search-bar-->
	<script src="js/main.js"></script>
	<!--//search-bar-->
	<!-- FlexSlider -->
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		function Presionar(){
		document.write("hh");
		document.getElementById('login').click();
	};
	</script>
	<script type="text/javascript">
		$(function () {});
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<!-- FlexSlider -->
	<!-- about-section-flexisel-slider-->
	<script type="text/javascript">
		$(window).load(function () {
			$("#flexiselDemo1").flexisel({
				visibleItems: 3,
				animationSpeed: 1000,
				autoPlay: false,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 1
					},
					landscape: {
						changePoint: 640,
						visibleItems: 2
					},
					tablet: {
						changePoint: 768,
						visibleItems: 2
					}
				}
			});

		});
	</script>
	<script type="text/javascript" src="js/jquery.flexisel.js"></script>
	<!-- //about-section-flexisel-slider-->
	<script src="js/jzBox.js"></script>
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>
	<!--boton para regresar al inicio-->
	<a href="#home" class="arriba icon-expand_less">
		<span id="toTopHover" style="opacity: 1;"> </span>
	</a>
	<!-- //smooth scrolling -->
	<script src="js/bootstrap.js"></script>

</body>

</html>