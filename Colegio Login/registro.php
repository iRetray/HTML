<?php
$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$codigo = $_POST['codigoDocente'];

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

if ($existeUsuario==0) {
	header("Location:registroCorrecto.php?nombre=$nombre&usuario=$usuario&clave=$clave&codigoDocente=$codigo");
} else {
	header("Location:usuarioYaExiste.php");
}

mysqli_close($conexion);
?>