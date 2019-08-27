<?php

$usuario = $_GET['usuario'];
$_SESSION['login_user'] = $usuario;

$usuarioDB = "root";
$contraseña = "";
$servidor = "localhost";
$baseDeDatos = "colegiobd";
$conexion = mysqli_connect($servidor, $usuarioDB, $contraseña, $baseDeDatos)
or die ("Error al conectar al servidor"); 
$db = mysqli_select_db($conexion, $baseDeDatos)
or die ("Eror al conectar a la BD");

$consulta = "SELECT * FROM `usuarioscolegio` WHERE 1";
$resultado = mysqli_query($conexion, $consulta);
$tipoUsuario = "";
$nombre = "";
while ($columna = mysqli_fetch_array( $resultado ))
{
	if ($columna['usuario']==$usuario) {
		$tipoUsuario = $columna['tipoUsuario'];
		$nombre = $columna['nombre'];
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home Profesor</title>
	<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Livvic&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
		<table class="table" align="center">
			<tr class="tr1">
				<td class="td1"><p class="texto">Bienvenido
					<?php  
						echo "".$nombre;
					?>
				</p></td>
			</tr>
			<tr><td><img src="recursos/calif.png" class="image1"></td></tr>
			<tr class="tr2">
				<td class="td1"><p class="texto1">En tu rol de 
					<?php 
					 	echo "".$tipoUsuario;
					?> 
				puedes realizar las siguientes tareas</p></td>
			</tr>
			<tr class="tr1">
				<td>
					<form action="consultarEstudiantes.php" method="post">
						<input type="hidden" name="usuario" value=<?php echo $usuario;?>>
						<input type="submit" value="Consultar notas de Estudiantes" class="inputSubmitHome">
					</form>
				</td>
			</tr>
			<tr class="tr1">
				<td>
					<form action="InsertarNotas.php" method="post">
						<input type="submit" value="Ingresar notas para un Estudiante" class="inputSubmitHome">
					</form>
				</td>
			</tr>
			<tr class="tr1">
				<td>
					<form action="index.html" method="post">
						<input type="submit" value="Cerrar Sesión" class="inputSubmitHome1">
					</form>
				</td>
			</tr>
		</table>
</body>
</html>