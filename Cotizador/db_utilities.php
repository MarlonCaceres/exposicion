<?php 
require_once('db_credentials.php');

$conexion= new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
$resultado='';

if ($conexion->connect_errno)
{
	echo 'Error en la conexion';
	exit;
}

function AllCategoria(){
	global $conexion,$resultado;
	$sql='SELECT * FROM categorias';
	return $conexion->query($sql);
}

function ver_Nombre($nombre)
{
	global $conexion, $resultado;
	$sql = "SELECT * FROM productos WHERE nombre_producto LIKE '%{$nombre}%' AND Cantidad>=1";
	return $conexion-> query($sql);
}

function actualizar($id,$detalle,$tipo,$precio,$cantidad,$imagen)
{
	global $conexion;
	$sql="UPDATE productos SET Detalle = '{$detalle}', Tipo_producto= '{$tipo}', Precio_producto='{$precio}', Cantidad='{$cantidad}', Imagen='{$imagen}' WHERE Id = {$id}";
	$conexion->query($sql);
}

function ver_Id( $id )
{
	global $conexion;
	$sql="SELECT * FROM productos WHERE Id={$id}";
	$resultado = $conexion->query($sql);	
	if($resultado ->num_rows)
		return $resultado->fetch_assoc();
	return $resultado;
}

function compra($id,$cantidad)
{
	global $conexion;
	$prod=ver_Id($id);
	$cant= $prod['Cantidad']-$cantidad;
	$sql="UPDATE productos SET Cantidad='{$cant}' WHERE Id={$id}";
	$conexion->query($sql);
}
 ?>

