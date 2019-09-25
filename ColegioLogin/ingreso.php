<?php
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

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
$existeUsuario = 0;
while ($columna = mysqli_fetch_array( $resultado ))
{
	if ($columna['usuario']==$usuario) {
		$existeUsuario = 1;
	}
}

if ($existeUsuario==1) {
	header("Location:tipoUsuario.php?usuario=$usuario&clave=$clave");
} else {
	header("Location:usuarioNoExiste.php");
}

mysqli_close($conexion);  
?>