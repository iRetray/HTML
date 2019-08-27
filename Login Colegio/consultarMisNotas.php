<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Consultar mis Notas</title>
	<link rel="stylesheet" type="text/css" href="css/estiloTablas.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Livvic&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
		<table class="table" align="center">
			<tr><td><p class="texto">Tus Notas</p></td></tr>
			<tr class="tr1">
				<td><p class="texto1">
					
<?php
$usuario = $_POST['usuario'];

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


echo "<table border='1' class='table1'>";
echo "<tr>";
echo "<th>Nombre</th>";
echo "<th>1P/Trabajo 1</th>";
echo "<th>1P/Trabajo 2</th>";
echo "<th>1P/Trabajo 3</th>";
echo "<th>1P/Final</th>";
echo "<th>2P/Tarea 1</th>";
echo "<th>2P/Tarea 2</th>";
echo "<th>2P/Tarea 3</th>";
echo "<th>2P/Final</th>";
echo "<th>3P/Evaluacion</th>";
echo "<th>3P/Final</th>";
echo "<th>4P/Evaluacion Docente</th>";
echo "<th>4P/Autoevalucaion</th>";
echo "<th>4P/Final</th>";
echo "<th>Definitiva</th>";
echo "</tr>";
$notaFinal = "";

$consulta = "SELECT * FROM `usuarioscolegio` WHERE 1";
$resultado = mysqli_query($conexion, $consulta);
while ($columna = mysqli_fetch_array( $resultado ))
{
	if ($columna['usuario']==$usuario) {
		echo "<tr>";
	echo "<th>" . $columna['nombre'] ."</th><td>" .$columna['nota1_trabajo1']."</td><td>" .$columna['nota1_trabajo2']."</td><td>" .$columna['nota1_trabajo3']."</td><td>" .$columna['nota1_final']."</td><td>" .$columna['nota2_tarea1']."</td><td>" .$columna['nota2_tarea2']."</td><td>" .$columna['nota2_tarea3']."</td><td>" .$columna['nota2_final']."</td><td>" .$columna['nota3_evaluacion']."</td><td>" .$columna['nota3_final']."</td><td>" .$columna['nota4_docente']."</td><td>" .$columna['nota4_auto']."</td><td>" .$columna['nota4_final']."</td><td>" .$columna['definitiva']."</td>";
	echo "</tr>";
	$notaFinal = $columna['definitiva'];
	}
	
}

mysqli_close($conexion);
?>
				</p></td>
			</tr>
			<p class="texto">
				<?php
					if ($notaFinal>=7.0) {
					  	echo "Has aprobado!";
					  } else {
					  	echo "Has reprobado";
					  }
					    
				?>
			</p>
		</table>
		<br>
		<form action="estudianteHome.php" method="get">
						<input type="hidden" name="usuario" value=<?php echo $usuario;?>>
						<input type="submit" value="Volver a mi Perfil" class="inputSubmitHome">
		</form>
</body>
</html>