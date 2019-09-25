<?php
$nombre = $_GET['nombre'];
$usuario = $_GET['usuario'];
$clave = $_GET['clave'];

$usuarioDB = "root";
$contraseña = "";
$servidor = "localhost";
$baseDeDatos = "colegiobd";
$conexion = mysqli_connect($servidor, $usuarioDB, $contraseña, $baseDeDatos)
or die ("Error al conectar al servidor"); 
$db = mysqli_select_db($conexion, $baseDeDatos)
or die ("Eror al conectar a la BD");

$codigo = $_GET['codigoDocente'];
$tipoUsuario = "";
if ($codigo=="a7c9f534c") {
	$tipoUsuario = "profesor";
} else {
	$tipoUsuario = "estudiante";
}


$usuarioDB = "root";
$contraseña = "";
$servidor = "localhost";
$baseDeDatos = "colegiobd";
$conexion = mysqli_connect($servidor, $usuarioDB, $contraseña, $baseDeDatos)
or die ("Error al conectar al servidor"); 
$db = mysqli_select_db($conexion, $baseDeDatos)
or die ("Eror al conectar a la BD");
$consulta = "INSERT INTO `usuarioscolegio` (`usuario`, `clave`, `nombre`, `nota1_trabajo1`, `nota1_trabajo2`, `nota1_trabajo3`, `nota1_final`, `nota2_tarea1`, `nota2_tarea2`, `nota2_tarea3`, `nota2_final`, `nota3_evaluacion`, `nota3_final`, `nota4_docente`, `nota4_auto`, `nota4_final`, `definitiva`, `tipoUsuario`) VALUES ('$usuario', '$clave', '$nombre', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '$tipoUsuario')";
if (mysqli_query($conexion, $consulta)) {

} else {
      echo "Error: " . $consulta . "<br>" . mysqli_error($conexion);
}

mysqli_close($conexion);
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registro Correcto</title>
	<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Livvic&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
		<table class="table" align="center">
			<tr class="tr1">
				<td class="td1"><p class="texto">¡Usuario registrado correctamente!</p></td>
			</tr>
			<tr><td><br></td></tr>
			<tr><td><img src="recursos/reg.png" class="image1"></td></tr>
			<tr><td><br></td></tr>
			<tr class="tr1">
				<td><p class="texto1">Ahora que estas registrado, ingresa con tu cuenta <a href="index.html">aqui.</a> </p></td>
			</tr>
		</table>
</body>
</html>