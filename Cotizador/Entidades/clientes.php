<?php

class clientes
{
	public $Id;
	public $nombre;
	public $Empresa;
	public $Cargo;
	public $Correo;
	public $Telefono;
	public $Direccion;
	public $Interes;

	/*ID*/
	function get_id()
	{
		return $this->Id;
	}

	function set_id($Id)
	{
		$this->Id = $Id;
	}

	/*nombre*/
	function get_nombre_producto()
	{
		return $this->nombre_producto;
	}

	function set_nombre_producto($nombre_producto)
	{
		$this->nombre_producto = $nombre_producto;
	}

	/*Telefono*/
	function get_Telefono()
	{
		return $this->Telefono;
	}

	function set_Telefono($Telefono)
	{
		$this->Telefono = $Telefono;
	}

	/*Correo*/
	function get_Correo()
	{
		return $this->Correo;
	}

	function set_Correo($Correo)
	{
		$this->Correo = $Correo;
	}
	/*Empresa_producto*/
	function get_Empresa_producto()
	{
		return $this->Empresa_producto;
	}

	function set_Empresa_producto($Empresa_producto)
	{
		$this->Empresa_producto = $Empresa_producto;
	}
	/*Cargo*/
	function get_Cargo()
	{
		return $this->Cargo;
	}

	function set_Cargo($Cargo)
	{
		$this->Cargo = $Cargo;
	}
	
	/*Direccion*/
	function get_Direccion()
	{
		return $this->Direccion;
	}

	function set_Direccion($Direccion)
	{
		$this->Direccion = $Direccion;
	}

	/*Interes*/
	function get_Interes_producto()
	{
		return $this->Interes_producto;
	}

	function set_Interes_producto($Interes_producto)
	{
		$this->Interes_producto = $Interes_producto;
	}

}
?>