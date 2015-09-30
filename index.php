<?php
		$dni = $_GET['dni'];
		
		$letra = substr("TRWAGMYFPDXBNJSQVHLCKE",strtr($dni,"XYZ","012")%23,1);
		?>
		
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<h1>CIF: <?php echo $dni; ?> - <?php echo $letra ; ?> </h1>

	
</body>
</html>