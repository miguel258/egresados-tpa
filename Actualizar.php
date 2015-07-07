<?php

require("Conexion.php");
	$Cedula=$_POST["User"];
	$FN=$_POST["FNac"];
	$C=Conexion::Conectar();//llamamos la funcion que nos conecta a la BD
	$Q="select * from egresados ";
	echo($Q);
	$R=mysql_query($Q,$C);
	echo($R);
    if($fila=mysql_fetch_array($R)){
    		
				
  				$Q1="update egresados set FNac='$FN' where Cedula='$Cedula'";
  				mysql_query($Q1,$C);
    }else{
    	echo"esta cedula no existe";
    }



?>