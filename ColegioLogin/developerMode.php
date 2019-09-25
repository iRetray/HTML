

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DevMode</title>
	<link rel="stylesheet" type="text/css" href="css/estiloTablas.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Livvic&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
		<table class="table" align="center">
			<tr><td><p class="texto1">Bases de Datos del sistema</p></td></tr>
			<tr class="tr1">
				<td><p class="texto1">
					
<?php
$usuarioDB = "root";
$contraseña = "";
$servidor = "localhost";
$baseDeDatos = "colegiobd";
$conexion = mysqli_connect($servidor, $usuarioDB, $contraseña, $baseDeDatos)
or die ("Error al conectar al servidor"); 
$db = mysqli_select_db($conexion, $baseDeDatos)
or die ("Eror al conectar a la BD");

$usuarioDB = "root";
$contraseña = "";
$servidor = "localhost";
$baseDeDatos = "colegiobd";
$conexion = mysqli_connect($servidor, $usuarioDB, $contraseña, $baseDeDatos)
or die ("Error al conectar al servidor"); 
$db = mysqli_select_db($conexion, $baseDeDatos)
or die ("Eror al conectar a la BD");


echo "<table class='table1'>";
echo "<tr>";
echo "<th>Nombre</th>";
echo "<th>Usuario</th>";
echo "<th>Clave</th>";
echo "<th>Tipo de Usuario</th>";
echo "<th>nota1_trabajo1</th>";
echo "<th>nota1_trabajo2</th>";
echo "<th>nota1_trabajo3</th>";
echo "<th>nota1_final</th>";
echo "<th>nota2_tarea1</th>";
echo "<th>nota2_tarea2</th>";
echo "<th>nota2_tarea3</th>";
echo "<th>nota2_final</th>";
echo "<th>nota3_evaluacion</th>";
echo "<th>nota3_final</th>";
echo "<th>nota4_docente</th>";
echo "<th>nota4_auto</th>";
echo "<th>nota4_final</th>";
echo "<th>definitiva</th>";
echo "</tr>";

$consulta = "SELECT * FROM `usuarioscolegio` WHERE 1";
$resultado = mysqli_query($conexion, $consulta);
while ($columna = mysqli_fetch_array( $resultado ))
{
	echo "<tr>";
	echo "<td>" . $columna['nombre'] . "</td><td>" . $columna['usuario'] . "</td><td>" . $columna['clave']. "</td><td>" . $columna['tipoUsuario']."</td><td>" .$columna['nota1_trabajo1']."</td><td>" .$columna['nota1_trabajo2']."</td><td>" .$columna['nota1_trabajo3']."</td><td>" .$columna['nota1_final']."</td><td>" .$columna['nota2_tarea1']."</td><td>" .$columna['nota2_tarea2']."</td><td>" .$columna['nota2_tarea3']."</td><td>" .$columna['nota2_final']."</td><td>" .$columna['nota3_evaluacion']."</td><td>" .$columna['nota3_final']."</td><td>" .$columna['nota4_docente']."</td><td>" .$columna['nota4_auto']."</td><td>" .$columna['nota4_final']."</td><td>" .$columna['definitiva']."</td>";
	echo "</tr>";
}

mysqli_close($conexion);
?>
				</p></td>
			</tr>
		</table>
		<br>
		<a href="index.html">Volver al inicio</a>
</body>
</html>