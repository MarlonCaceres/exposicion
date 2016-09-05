<?php
	require_once 'menu.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro Cliente</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<div class="row">
		<div class="col-md-12 col-xs-12">
			<div class="centrar inicio">Registro Clientes</div>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-4 col-xs-2"></div>
		<div class="col-md-6 col-xs-8 centrar">
			<form action="insertar.php" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<div class="row">
						<div class="col-md-3 col-xs-2">
							<label for="exampleInputEmail1">Nombre:</label>
						</div>
						<div class="col-md-5 col-xs-2">
							<input class="form-control" type="text" name="nombre" placeholder="Juan Zapata">
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<div class="row">
						<div class="col-md-3 col-xs-2">
							<label>Empresa:</label>
						</div>
						<div class="col-md-5 col-xs-2">
							<input class="form-control" type="text" name="empresa" placeholder="Systeltronik">
						</div>
					</div>				
				</div>
					
				<div class="form-group">
					<div class="row">
						<div class="col-md-3 col-xs-2">
							<label>Cargo:</label>	
						</div>
						<div class="col-md-5 col-xs-2">
							<input class="form-control" type="text" name="cargo" placeholder="Director">
						</div>
					</div>				
				</div>
				
				<div class="form-group">
					<div class="row">
						<div class="col-md-3 col-xs-2">
							<label>Direccion:</label>	
						</div>
						<div class="col-md-5 col-xs-2">
							<input class="form-control" type="text" name="direccion" placeholder="Av. 6 de Diciembre">
						</div>
					</div>				
				</div>
				
				<div class="form-group">
					<div class="row">
						<div class="col-md-3 col-xs-2">
							<label>Correo:</label>
						</div>
						<div class="col-md-5 col-xs-2">
							<input class="form-control" type="text" name="correo" placeholder="systeltronik@gmail.com">
						</div>
					</div>				
				</div>
				
				<div class="form-group">
					<div class="row">
						<div class="col-md-3 col-xs-2">
							<label>Telefono:</label>
						</div>
						<div class="col-md-5 col-xs-2">
							<input class="form-control" type="text" name="telefono" placeholder="098 555 5555">
						</div>
					</div>				
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-md-3 col-xs-2">
							<label>Producto Interes:</label>
						</div>
						<div class="col-md-5 col-xs-2">
							<select name="Pinteres" class="form-control">
								<option value="0">Seleccione</option>
								<option value="1">Videos 360°</option>
								<option value="2">Realidad Aumentada</option>
								<option value="3">Domotica</option>
							</select>
						</div>
					</div>				
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-md-12 col-xs-12">
							<input type="submit" class="btn btn-default" value="Registar">
						</div>
					</div>				
				</div>
			</form>
		</div>
		<div class="col-md-3 col-xs-2"></div>
	 </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>