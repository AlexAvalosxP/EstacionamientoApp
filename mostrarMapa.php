<!DOCTYPE html>
<html>
<head>
	<title>Detalles</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<script src="js/funciones.js"></script>
</head>
<body>
	<div class="topBar">
		<button><</button>
	</div>
	<div class="mapa" id="mapa"></div>
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
      function initMap() {
        var miLugar = {lat: 20.703124, lng: -100.4438385}; //AQUÍ VAN LAS COORDENADAS
        var miMapa = new google.maps.Map(document.getElementById('mapa'), {
          zoom: 18,
          StreetViewControl: false,
          fullscreenControl: false,
          mapTypeControl: false,
          zoomControl: false,
          center: miLugar
        });
        var miMarcador = new google.maps.Marker({
          position: miLugar,
          draggable: false,
          animation: google.maps.Animation.DROP,
          map: miMapa
        });

        google.maps.event.addListener(miMarcador, 'dragend', function(evt){
        console.log('<p>Marker dropped: Current Lat: ' + evt.latLng.lat().toFixed(3) + ' Current Lng: ' + evt.latLng.lat().toFixed(3) + '</p>');
        setCords(evt.latLng.lat().toFixed(3), evt.latLng.lat().toFixed(3));
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnfTXWevfoSTIAHkevecg6lIl_YECcZQM&callback=initMap"
    async defer></script>

</body>
</html>