<?php  
$usuario = $_GET['usuario'];

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
	<title>Home Estudiante</title>
	<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Livvic&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
		<table class="table" align="center">
			<tr class="tr1">
				<td class="td1">
					<table class="usuario">
						<tr class="usuario1">
							<td class="us1"><img src="recursos/usuario.png" class="img123"></td>
							<td class="us2">
								<table class="usuario">
									<tr class="usuario1"></tr>
									<tr class="usuario1"></tr>
								</table>
								<p class="texto">
								<?php 
					 				echo "".$nombre;
								?>
							</p></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr><td><img src="recursos/libro.png" class="image1"></td></tr>
			<tr class="tr2">
				<td class="td1"><p class="texto1">En tu rol de 
					<?php 
					 	echo "".$tipoUsuario;
					?> 
				puedes realizar las siguientes tareas</p></td>
			</tr>
			<tr class="tr1">
				<td>
					<form action="consultarMisNotas.php" method="post">
						<input type="hidden" name="usuario" value=<?php echo $usuario;?>>
						<input type="submit" value="Consultar tus Notas" class="inputSubmitHome">
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