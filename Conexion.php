<?php

	class Conexion{

		static function Conectar(){

		$Con=mysql_connect("localhost","root","");
		mysql_select_db("prupar", $Con);

		return $Con;
	}

	}
