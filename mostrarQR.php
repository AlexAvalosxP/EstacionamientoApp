<!DOCTYPE html>
<html>
<head>
	<title>Detalles</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<script src="js/funciones.js"></script>
</head>
<body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script type="text/javascript" src="jquery-qrcode-master/src/jquery.qrcode.js"></script>
<script type="text/javascript" src="jquery-qrcode-master/src/qrcode.js"></script>

	<div class="topBar">
		<button><</button>
	</div>
	<div class="QR" id="QR"></div>
	<div class="detalles">
		<h1>Nombre del Estacionamiento</h1>
		<h1>Dirección</h1>
		<h1>Código Postal</h1>
		<h1>Tarifa</h1>
		<h1>Detalles</h1>
	</div>
	<div class="bottomBar">
		<button>Aceptar</button>
	</div>

	<script>
	// Donde dice prueba va lo que quieras guardar en el QR 
	jQuery('#QR').qrcode({width: 700,height: 700,text: "Prueba"});	
</script>

</body>
</html>