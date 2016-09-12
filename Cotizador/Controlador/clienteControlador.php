<?php

require_once "./Datos/clientesDatos.php";

class clienteControlador
{
	
	function insertarCliente($nombre,$Empresa,$Cargo,$Direccion,$Correo,$Telefono,$Interes,$Detalle)
	{
		$obj= new clientesDatos;
		return $obj->insertarCliente($nombre,$Empresa,$Cargo,$Direccion,$Correo,$Telefono,$Interes,$Detalle);
	}
}
?>