<!DOCTYPE html>
<html>
<head>
	<title>Estacionamiento</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<script src="js/funciones.js"></script>
</head>
<body>
	
	<?php 

	$var1 = "ASDFG";

	 ?>


	<div class="formStyle">

		<form action="inicio.php" method="GET">
			<h2>Inicia Sesión</h2>
			<input type="text" name="usuario" placeholder="Usuario">
			<input type="password" name="contrasena" placeholder="Contraseña">
			<button>Iniciar Sesión</button>
		</form>

		<form action="" method="GET">
			<h2>Regístrate</h2>
			<input type="text" name="nombre" placeholder="Nombre">
			<input type="text" name="apellido" placeholder="Apellido">
			<input type="email" name="email" placeholder="Email">
			<input type="text" name="telefono" placeholder="Telefono">
			<input type="password" name="contrasena" placeholder="Contraseña">
			<input type="password" name="contrasena2" placeholder="Confirma contraseña">
			<button>Registrarse</button>


			<h2><?php echo $var1; ?></h2>
		</form>
	</div>
</body>
</html>