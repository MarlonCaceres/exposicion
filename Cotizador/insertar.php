<?php 
$nombre=$_POST['nombre'];
$empresa=$_POST['empresa'];
$cargo=$_POST['cargo'];
$direccion=$_POST['direccion'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$interes=$_POST['Pinteres'];

if($nombre==null||$empresa==null||$cargo==null||$direccion==null||$correo==null||$telefono==null||$interes==null){
	header('Location: index.php?id=1');
}else{
	switch ($interes) {
		case '1':
				header('Location: cotizar.php?id=1');
			break;
		case '2':
				header('Location: cotizar.php?id=2');
			break;
		case '3':
				header('Location: cotizar.php?id=3');
			break;
		default:
			header('Location: index.php?id=2');
			break;
	}
}

 ?>
