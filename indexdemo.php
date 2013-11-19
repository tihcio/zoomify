<!DOCTYPE HTML>
<html lang="it-IT">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="zoomify/css/zoomify.css">
<link rel="stylesheet" href="zoomify/zoombox/jquery.fancybox.css" type="text/css" media="screen" />
<script src="zoomify/js/jquery.js" type="text/javascript"></script>
<script src="zoomify/zoombox/jquery.fancybox.pack.js"></script>
<script src="zoomify/js/zoomify.js" type="text/javascript"></script>
</head>
<body>

<!-- Inserire questo codice per caricare la galleria -->
	<div id="containerZoomify">
		<ul id="griglia">
<?php 
	include 'zoomify/zoomify.php';
	
	//Percorso immagini
	$Galleria = 'miagalleria';
	
	//Inserire la larghezza del thumbnail in pixel
	$larghezza = 180;
 	
	//Estensione da caricare, inserire all per caricare qualsiasi file (Sconsigliato)	
	$estensione = 'jpg';
	
	//avvio galleria
	zoomify($Galleria, $estensione, $larghezza);
?>
	</ul>
</div>
<!-- Fine codice di richiamo dello script -->
</body>
</html> 
