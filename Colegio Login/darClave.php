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

$consulta = "SELECT * FROM `usuarioscolegio` WHERE 1";
$resultado = mysqli_query($conexion, $consulta);
$clavePedida = "";
while ($columna = mysqli_fetch_array( $resultado ))
{
	if ($columna['usuario']==$usuario) {
		$clavePedida = $columna['clave'];
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Livvic&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
		<table class="table" align="center">
			<tr class="tr1">
				<td class="td1"><p class="texto">Contraseña recuperada</p></td>
			</tr>
			<tr><td><img src="recursos/pass.png" class="image1"></td></tr>
			<tr class="tr2">
				<td class="td1"><p class="textoClave">

					<?php 
					if ($clavePedida=="") {
						echo "Este usuario tiene una clave vacia";
					} else {
						echo "".$clavePedida;
					}
					?>

					</p></td>
			</tr>
			<tr class="tr1">
				<td><p class="texto1">Ahora que tienes tus credenciales, ingresa a la plataforma <a href="index.html">aqui.</a> </p></td>
			</tr>
		</table>
</body>
</html>