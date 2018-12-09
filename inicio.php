<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<script src="js/funciones.js"></script>
</head>
<body>

	<?php 

	$usuario = $_GET['usuario'];

	 ?>

	<div class="formStyle">
	<h2>Inicio</h2>
	<br>
	<button>Buscar estacionamiento</button>
	<button>Registro de carros</button>
	<br>
	<button>Reportes</button>
	<button>Mas opciones</button>

	<h2><?php echo $usuario; ?></h2>

	</div>
</body>
</html>