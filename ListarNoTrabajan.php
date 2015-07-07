
<!DOCTYPE html>
<html>
<head>
	<title></title>
<?php

require("Conexion.php");//incluimos la conexion
$C=Conexion::Conectar();//llamamos la funcion que nos conecta a la BD
$Q='select * from egresados where Trabaja="2"';
$R=mysql_query($Q,$C);
$Col=5;
$Filas=0;
$R=mysql_query($Q,$C);
$Filas = mysql_num_rows($R);

?>
</head>
<body>
        <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Cedula</th>
                <th>Fecha Nacimiento</th>
                <th>Email</th>
                <th>Trabaja</th>

            </tr>
        </thead>
        <tbody>
<?php
	while($fila=mysql_fetch_array($R)) { ?>
  <tr>
   
			<td><?= $fila['Nombre']; ?></td>;
			<td><?=$fila['Apellidos']; ?></td>;
			<td><?=$fila['Cedula']; ?></td>;
			<td><?=$fila['FNac']; ?></td>;
			<td><?=$fila['Email']; ?></td>;

			<td><?php if($fila['Trabaja']=='1'){?>
                <?php echo ("Si");}else{ ?>
				<?php echo ("No"); } ?>
				</td>
			
	</tr>
	<?php } ?>
	</tbody>
</table>
</html>