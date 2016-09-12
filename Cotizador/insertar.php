<?php 
require_once 'db_utilities.php';
require_once './Controlador/clienteControlador.php';

$nombre=$_POST['nombre'];
$empresa=$_POST['empresa'];
$cargo=$_POST['cargo'];
$direccion=$_POST['direccion'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$detalle=$_POST['detalle'];
$interes=$_POST['Pinteres'];

if($nombre==null||$empresa==null||$cargo==null||$direccion==null||$correo==null||$telefono==null||$detalle==null||$interes==null){
	header('Location: index.php?error=1');
}else{
	if($interes=='1' || $interes=='2'|| $interes=='3'){
		$clienteCon= new clienteControlador();
		if ($clienteCon->insertarCliente($nombre,$empresa,$cargo,$direccion,$correo,$telefono,$interes,$detalle)){
			header('Location: cotizar.php');	
		}else{
			echo 'error';
		}
	}else{
		header('Location: index.php?error=2');
	}
			
}


 ?>
