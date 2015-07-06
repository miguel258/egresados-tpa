<!DOCTYPE html>
<html>
<head>
	<title >BIENVENIDO</title>

</head><header>BIENVENIDO</header><br>
<body>
<form name="F1" method="POST" action="ValidaAcceso.php" ><!--funcion que procesara los datos enviados desde el formulario-->
USUARIO<input type="TEXT" name="User"><br><br>
CLAVE<input type="TEXT" name="Pass" >

<input type="button" value="Registrarse" onclick="Validar() " />
<!-- <button type="submit" name="btnRegistro" onclick="Validar()"> Registrarse</button> -->
</form>

 	<div id="Resultado">

	</div>
	<script type="text/javascript" src="Uno.js"></script>
</body>
</html>
