<?php
	require_once './db_utilities.php';
	require_once 'menu.php';
	$productos=AllProductos();
	$clientes=AllClientes();
	$proformas=AllProforma();
	$flag=false;
	$fecha= date('Y-m-d');

	$prod='';
	$PrEs=[];
	$Us=[];
	$name= '';
	$address='';
	$mail='';
	$phone='';

	if($_POST){	
		$user=($_POST['usuarios'])?$_POST['usuarios']:'1';
		$Us=Ver_Cliente($user);
		while($U = $Us -> fetch_assoc()){
			$name= $U['Nombre'];
			$address=$U['Direccion'];
			$mail=$U['Correo'];
			$phone=$U['Telefono'];
			$pe=$U['IdProducto'];
		}
		$flag=true;
		$PrEs=Ver_Producto($pe);
		while($productoE = $PrEs -> fetch_assoc()){
			$prod=$productoE['Nombre'];
		}	
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
		<div class="col-md-4 col-xs-4"></div>
		<div class="col-md-4 col-xs-4 centrar">
		<br>
		<span class="btn btn-lg" > Seleccione un Cliente</span>
			<form action='cotizar.php' method="post">
				<select name="usuarios" class="form-control">
				  <option>Seleccione</option>
				  <?php
					while($cliente = $clientes -> fetch_assoc()){
				  ?>
				    <option value='<?php echo $cliente['Id']?>'>
				    	<?php echo $cliente['Nombre'];?>
				    </option>
				  <?php }?>
				</select>
				<br>
				<input type="submit" class="btn btn-info" name="Consultar" value="Consultar">
			</form>
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2 col-xs-2 ">
			
		</div>
		<div class="col-md-8 col-xs-8">
			<div class="row">
				<div class="col-md-2">
					<span class="btn btn-lg" >Cliente: </span>
				</div>
				<div class="col-md-5">
					<label class="form-control" type="text" name="Usuario" disabled>
						<?php if ($flag){
							echo $name;
						} ?>
					</label>
				</div>
				<div class="col-md-2">
					<span class="btn btn-lg" >Fecha: </span>
				</div>
				<div class="col-md-3">
					<label class="form-control" type="text" name="Fecha" disabled><?php if($flag){echo $fecha;}?></label>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					<span class="btn btn-lg" >Direccion: </span>
				</div>
				<div class="col-md-5">
					<label class="form-control" type="text" name="Direccion" disabled>
						<?php if ($flag){
							echo $address;
						} ?>
					</label>
				</div>
				<div class="col-md-2">
					<span class="btn btn-lg" >Telefono: </span>
				</div>
				<div class="col-md-3">
					<label class="form-control" type="text" name="Telefono" disabled>
						<?php if ($flag){
							echo $phone;
						} ?>
					</label>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					<span class="btn btn-lg" >Correo: </span>
				</div>
				<div class="col-md-5">
					<label class="form-control" type="text" name="Correo" disabled>
						<?php if ($flag){
							echo $mail;
						} ?>
					</label>
				</div>
				<div class="col-md-2">
					<span class="btn btn-lg" >Producto: </span>
				</div>
				<div class="col-md-3">
					<label class="form-control" type="text" name="Producto" disabled>
						<?php echo $prod;
						?>
					</label>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					<span class="btn btn-lg" >Proforma: </span>
				</div>
				<div class="col-md-2">
					<select name="usuarios" class="form-control">
				  		<option>Seleccione</option>
				  		<?php
							while($proforma = $proformas -> fetch_assoc()){
				  		?>
				    	<option value='<?php echo $proforma['Id']?>'>
				    		<?php echo $proforma['TipoProforma'];?>
				    	</option>
				  		<?php }?>
					</select>
				</div>
				<div class="col-md-2">
					<input class="form-control" type="text" name="NumProforma">
				</div>
			</div>
		</div>
		<div class="col-md-2 col-xs-2"></div>
	</div>
	<div class="row">
		<div class="col-md-4 col-xs-4"></div>
		<div class="col-md-4 col-xs-4 centrar"><hr></div>
		<div class="col-md-4 col-xs-4"></div>
	</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>