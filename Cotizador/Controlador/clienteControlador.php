<?php

require_once "./Datos/clientesDatos.php";

class clienteControlador
{
	
	function insertarCliente($nombre,$Empresa,$Cargo,$Direccion,$Correo,$Telefono,$Interes)
	{
		$obj= new ClientesDatos;
		return $obj->insertarCliente($nombre,$Empresa,$Cargo,$Direccion,$Correo,$Telefono,$Interes);
	}
}
?>