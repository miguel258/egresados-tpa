<!DOCTYPE html>
<html>
<head>
	<title >BIENVENIDO</title>
	<link rel="stylesheet" href="./css/style.css">
</head><header>ACTUALIZAR</header><br>
<body>
	<form name="F4" method="POST" action="Actualizar.php" ><!--funcion que procesara los datos enviados desde el formulario-->
	INGRESE LA NUEVA FECHA DE NACIMIENTO<input type="DATE" name="FNac"><br><br>
	

	<input type="button" value="Confirmar" onclick="Validar() " />
	<!-- <button type="submit" name="btnRegistro" onclick="Validar()"> Registrarse</button> -->
	</form>
 	<div id="Resultado">
	</div>
	<script type="text/javascript" src="Uno4.js"></script>
</body>
</html>