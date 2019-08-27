<?php
$usuario = $_POST['usuario'];
$trabajo1 = $_POST['trabajo1'];
$trabajo2 = $_POST['trabajo2'];
$trabajo3 = $_POST['trabajo3'];
$tarea1 = $_POST['tarea1'];
$tarea2 = $_POST['tarea2'];
$tarea3 = $_POST['tarea3'];
$evaluacion = $_POST['evaluacion'];
$evaluacionD = $_POST['evaluacionD'];
$auto = $_POST['auto'];


$usuarioDB = "root";
$contraseña = "";
$servidor = "localhost";
$baseDeDatos = "colegiobd";
$conexion = mysqli_connect($servidor, $usuarioDB, $contraseña, $baseDeDatos)
or die ("Error al conectar al servidor"); 
$db = mysqli_select_db($conexion, $baseDeDatos)
or die ("Eror al conectar a la BD");

$tipoUsuario = "";
$clave = "";
$nombre = "";


$consulta = "SELECT * FROM `usuarioscolegio` WHERE 1";
$resultado = mysqli_query($conexion, $consulta);
while ($columna = mysqli_fetch_array( $resultado ))
{
	if ($columna['usuario']==$usuario) {
		$columna['tipoUsuario']==$tipoUsuario;
		$columna['clave']==$clave;
		$columna['nombre']==$nombre;
	}
}


$trabajo1 = (int)round($trabajo1);
$trabajo2 = (int)round($trabajo2);
$trabajo3 = (int)round($trabajo3);
$tarea1 = (int)round($tarea1);
$tarea2 = (int)round($tarea2);
$tarea3 = (int)round($tarea3);
$evaluacion = (int)round($evaluacion);
$evaluacionD =(int)round($evaluacionD);
$auto = (int)round($auto);

$final1 = ($trabajo1+$trabajo2+$trabajo3)/3;
$final2 = ($tarea1+$tarea2+$tarea3)/3;
$final3 = $evaluacion;
$final4 = ($evaluacionD+$auto)/2;
$definitiva = ($final1*0.5)+($final2*0.25)+($final3*0.2)+($final4*0.05);


$final1 = (int)round($final1);
$final2 = (int)round($final2);
$final3 = (int)round($final3);
$final4 = (int)round($final4);
$definitiva = (int)round($definitiva);

$usuarioDB = "root";
$contraseña = "";
$servidor = "localhost";
$baseDeDatos = "colegiobd";
$conexion = mysqli_connect($servidor, $usuarioDB, $contraseña, $baseDeDatos)
or die ("Error al conectar al servidor"); 
$db = mysqli_select_db($conexion, $baseDeDatos)
or die ("Eror al conectar a la BD");

$consultaWhile = "SELECT * FROM `usuarioscolegio` WHERE 1";
$resultado = mysqli_query($conexion, $consultaWhile);
while ($columna = mysqli_fetch_array( $resultado ))
{
	if ($columna['usuario']==$usuario) {
		$consulta = "UPDATE usuarioscolegio SET nota1_trabajo1='$trabajo1', `nota1_trabajo2`='$trabajo2', `nota1_trabajo3`='$trabajo3', `nota1_final`='$final1', `nota2_tarea1`='$tarea1', `nota2_tarea2`='$tarea2', `nota2_tarea3`='$tarea3', `nota2_final`='$final2', `nota3_evaluacion`='$evaluacion', `nota3_final`=$final3, `nota4_docente`='$evaluacionD', `nota4_auto`='$auto', `nota4_final`='$final4', `definitiva`='definitiva' WHERE usuario='$usuario'";
	}
		
	
}


//$consulta = "UPDATE usuarioscolegio SET nota1_trabajo1='$trabajo1', `nota1_trabajo2`='$trabajo2', `nota1_trabajo3`='$trabajo3', `nota1_final`='$final1', `nota2_tarea1`='$tarea1', `nota2_tarea2`='$tarea2', `nota2_tarea3`='$tarea3', `nota2_final`='$final2', `nota3_evaluacion`='$evaluacion', `nota3_final`=$final3, `nota4_docente`='$evaluacionD', `nota4_auto`='$auto', `nota4_final`='$final4', `definitiva`='definitiva' WHERE 1";
//$consulta = "INSERT INTO `usuarioscolegio` (`usuario`, `clave`, `nombre`, `nota1_trabajo1`, `nota1_trabajo2`, `nota1_trabajo3`, `nota1_final`, `nota2_tarea1`, `nota2_tarea2`, `nota2_tarea3`, `nota2_final`, `nota3_evaluacion`, `nota3_final`, `nota4_docente`, `nota4_auto`, `nota4_final`, `definitiva`, `tipoUsuario`) VALUES ('$usuario', '$clave', '$nombre', '$trabajo1', '$trabajo2', '$trabajo3', '$final1', '$tarea1', '$tarea2', '$tarea3', '$final2', '$evaluacion', '$final3', '$evaluacionD', '$auto', '$final4', '$definitiva', '$tipoUsuario') ";
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
				<td class="td1"><p class="texto">¡Notas ingresadas correctamente!</p></td>
			</tr>
			<tr><td><br></td></tr>
			<tr><td><img src="recursos/reg.png" class="image1"></td></tr>
			<tr><td><br></td></tr>
			<tr class="tr1">
				<td><p class="texto1"><a href="index.html">Volver al inicio</a> </p></td>
			</tr>
		</table>
</body>
</html>