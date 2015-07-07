<?php

require("Conexion.php");//incluimos la conexion

			$Nombre=$_POST["TxtNombre"];
			$Apellido=$_POST["TxtApellido"];
			$Cedula=$_POST["NumCedula"];
			$Edad=$_POST["Edad"];
			$Email=$_POST["Mail"];
			$T=$_POST["TxtEstado"];

			$Sw=false;

			$SW=false;
			$C=Conexion::Conectar();//llamamos la funcion que nos conecta a la BD
            $Q="insert into egresados"."(Nombre,Apellidos,Cedula,FNac,Email,Trabaja)"."values"."(
				'$Nombre','$Apellido','$Cedula','$Edad','$Email','$T');";
            $RB="select * from egresados";
            $R1=mysql_query($RB,$C);
            if($fila=mysql_fetch_array($R1)){
            	if($Cedula===$fila['Cedula']){
            		echo "Cedula ya registrada"+"<br>";
            		echo "
				<script>
  				window.location.href='Ingreso.php';
  				</script>";
            	}else{
            		$Sw=true;
            	}
            }
            else{
			
				mysql_query($Q,$C);
				echo"<script>
  				window.location.href='MenuAdmin.php';
  				</script>";
			}if($Sw==true){
				mysql_query($Q,$C);
				echo ";<script>
  				window.location.href='MenuAdmin.php';
  				</script>";

			}
			











?>