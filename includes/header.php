<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<title>Tienda Ámbar</title>
	<!-- BOOTSTRAP -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- FONT AWESOME -->
	<script src="https://kit.fontawesome.com/249169bd5b.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/font-awesome.css">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<!-- JAVASCRIPT -->
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/validardatos.js"></script>
	<!-- Icono WEB -->
	<link rel="icon" type="image/png" href="imagenes/icono.ico">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;400;600&display=swap" rel="stylesheet">
	<!-- IOconics WEB -->
	<script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
   
</head>
<body>

<header>
	
	<div class="infocovid container">
		<button type="button" class="infocovid" data-toggle="modal" data-target="#myModal">INFORMACIÓN COVID-19</button>
	</div>
	
	<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">
	    <!-- Modal content-->
	    <div class="modal-content">
	  		<img src="imagenes/infocovid.jpg">
	    </div>
	  </div>
	</div>
	<!-- Modal -->

	<nav class="navbar navbar-expand-lg">

	  <div class="container">

	  	<a class="navbar-brand" href="index.php"><img src="imagenes/logo.png" class="logo-brand" alt="logo"></a>
	  
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		    <ion-icon name="menu"></ion-icon>
		</button>

		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			
		    <div class="navbar-nav ml-auto">
		      <a class="nav-item nav-link" href="index.php">Inicio</a>

		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		         Productos
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="tazas.php">tazas</a>
		          <a class="dropdown-item" href="poleras.php">poleras</a>
		          <a class="dropdown-item" href="polerones.php">Polerones</a>
		          <a class="dropdown-item" href="cuadros.php">Cuadros</a>
		          <a class="dropdown-item" href="llaveros.php">Llaveros</a>
		          <!--
		          <div class="dropdown-divider"></div>
		          <a class="dropdown-item" href="#">Something else here</a>
		          -->
		        </div>
		      </li>

		      <!--<a class="nav-item nav-link" href="productos.php">Productos</a>-->
		      <a class="nav-item nav-link" href="como-comprar.php">¿Cómo comprar?</a>
		      <a class="nav-item nav-link" href="preguntas-frecuentes.php">Preguntas Frecuentes</a>
		      <a class="nav-item nav-link" href="contacto.php">Contacto</a>
		    </div>
		</div>
	  </div>
	</nav>
</header>
