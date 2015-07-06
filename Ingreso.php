<!DOCTYPE html>
<html>
<head>
	<title>PRUEBA PARCIAL</title>
</head>
<body>

<form name="F1" method="GET" action="Registro.php" onsubmit="return Validar(this)"></form>
NOMBRE <input type="TEXT" name="TxtNombre"><br><br>
APELLIDO <input type="TEXT" name="TxtApellido"><br><br>
CEDULA <input type="NUMBER" name="NumCedula"><br><br>
<br>

<input type="button" value="Registrarse" onclick="Validar()"/>
<a href="Menu.html">REGRESAR</a>





</body>
</html>