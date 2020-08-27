<?php include("includes/header.php") ?>


<hr class="linea">

<div class="container contacto">
	
  <h2 class="titulo-contacto">CONTACTO</h2>

 	<form action="correo.php" method="post">
	  	<div class="form-group">
	  	
		  	<div class="form-group">
			    <input type="text" class="form-control" id="nombre" placeholder="Nombre y apellido" name="nombre" required>
		  	</div>
			
			<div class="form-group">
			    <input type="text" class="form-control" id="telefono" placeholder="Teléfono" name="telefono" required>
		  	</div>

		  	<div class="form-group">
			    <input type="email" class="form-control" id="correo" placeholder="Correo electrónico" name="correo" required>
			    <small class="form-text">Nunca compartiremos su correo electrónico.</small>
		  	</div>
			
			<div class="form-group">
			    <textarea class="form-control" id="mensaje" rows="3" placeholder="Mensaje" name="mensaje" required></textarea>
			</div>
		  		
		  	<button type="submit" class="btn boton-rosado" name="enviar" id="enviar">Enviar</button>
			
			<br>


	 	</div>
	</form>

</div>


<?php include("includes/footer.php") ?>