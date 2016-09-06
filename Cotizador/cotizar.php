<?php
	require_once './db_utilities.php';
	require_once 'menu.php';
	$productos=AllProductos();

	while($producto = $productos -> fetch_assoc()){
		echo $producto['Nombre'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cotizar</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<div class="row">
	<div class="col-md-3">
		
	</div>
	<div class="col-md-6">
		
	</div>
	<div class="col-md-3">
		
	</div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>