<?php
require_once('template.php');
require_once('productos.php');



$ModeloProductos = new Productos();


?>






<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Calimamuelles</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="css/slick.css" />
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="Footer/css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>

<br/>
<br/><br/>
<br/><br/>
<br/>
	<div id="lista-productos" class="container">
		

		<div class="row">

			<?php
			$listarproductos = $ModeloProductos->verproducto();
			if ($listarproductos != Null) {
				foreach ($listarproductos as $productos) {
			?>
					<div class="four columns">
						<div class="card">
							<img src="img/producto.jpg" class="imagen-producto u-full-width">
							<div class="info-card">
								<h1><?= $productos['id_productos']; ?></h1>
								<h2><?= $productos['estado']; ?></h2>
								<h4><?= $productos['nombre_producto']; ?></h4>
								<p><?= $productos['precio']; ?></p>
								<p class="precio">$50 <span class="u-pull-right">$15</span> </p>
								<a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="nombre_producto">Agregar al carrito</a>
								
							</div>
						</div>
					</div>
			
					<?php
				}
			}
			?>

		</div>

	</div>

	

	<!-- FOOTER -->

	<!-- /FOOTER -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="footer-col">
					<h4>Calima Muelles</h4>
					<ul>
						<li><a href="#">about us</a></li>
						<li><a href="#">our services</a></li>
						<li><a href="#">privacy policy</a></li>
					</ul>
				</div>
				<div class="footer-col">
					<h4>get help</h4>
					<ul>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">shipping</a></li>
						<li><a href="#">returns</a></li>
						<li><a href="#">order status</a></li>
						<li><a href="#">payment options</a></li>
					</ul>
				</div>
				<div class="footer-col">
					<h4>categorias</h4>
					<ul>
						<li><a href="#">shock absorbers</a></li>
						<li><a href="#">brakes</a></li>
						<li><a href="#">springs</a></li>
						<li><a href="#">nuts and bolts</a></li>
					</ul>
				</div>
				<div class="footer-col">
					<h4>follow us</h4>
					<div class="social-links">
						<a href="#"><i class="fab fa-facebook-f"></i></a>
						<a href="#"><i class="fab fa-twitter"></i></a>
						<a href="#"><i class="fab fa-instagram"></i></a>
						<a href="#"><i class="fab fa-linkedin-in"></i></a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- jQuery Plugins -->
	<script src="js/carro.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>