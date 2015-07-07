<!DOCTYPE html>
<html>
<head>
	<title>PRUEBA PARCIAL</title>
</head>
<strong><header id="cabezaRegistro">REGISTRO</header></strong><br><br>
<body>

<form name="F2" method="POST" action="Registro.php" >
NOMBRE <input type="TEXT" name="TxtNombre"><br><br>
APELLIDO <input type="TEXT" name="TxtApellido"><br><br>
CEDULA <input type="text" name="NumCedula"><br><br>
FECHA DE NACIMIENTO <input type="DATE" name="Edad"><br><br>
CORREO ELECTRONICO <input type="EMAIL" name="Mail"><br><br>
<align="center">TRABAJA<select name="TxtEstado"><br/>
	<br>
		<option value="99">---</option>
		<option value="1">Si</option>
		<option value="2">No</option>
		
	</select>

<input type="button" value="Registrarse" onclick="Validar1()"/>
</form>
<script type="text/javascript" src="Uno.js"></script>

<!--<a href="Menu.html">REGRESAR</a>-->





</body>
</html>