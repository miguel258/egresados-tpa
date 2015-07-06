<?php


	require("Conexion.php");//incluimos la conexion

			$Id=$_POST["User"];
			$Pass=$_POST["Pass"];
			$SW=false;
			$C=Conexion::Conectar();//llamamos la funcion que nos conecta a la BD

			$Q="select * from admin";
			$R=mysql_query($Q,$C);
			while($fila=mysql_fetch_array($R)){

				if($Id==$fila["Id"] && $Pass==$fila["Pass"]){
					$SW=true;
				}
		}if($SW==true){
			echo "BIENVENIDO";
		}








 ?>
