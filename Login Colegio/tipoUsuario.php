<?php
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

$consulta = "SELECT * FROM `usuarioscolegio` WHERE 1";
$resultado = mysqli_query($conexion, $consulta);
$tipoUsuario = "";
$claveCorrecta = 0;
while ($columna = mysqli_fetch_array( $resultado ))
{
	if ($columna['usuario']==$usuario) {
		$tipoUsuario = $columna['tipoUsuario'];
		if ($columna['clave']==$clave) {
			$claveCorrecta = 1;
		}
	}
}

if ($claveCorrecta==1) {
	if ($tipoUsuario=="profesor") {
	header("Location:profesorHome.php?usuario=$usuario");
	} else {
	if ($tipoUsuario=="estudiante") {
		header("Location:estudianteHome.php?usuario=$usuario");
	}	
}
} else {
	header("Location:claveIncorrecta.php");
}


mysqli_close($conexion);  
?>