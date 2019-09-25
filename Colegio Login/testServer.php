<?php  
//Conexion de Base de datos con PHP
//1-Declarar variables para conectarse a MySQL
$usuario = "root";
$contraseña = "12345678";
$servidor = "localhost";
$baseDeDatos = "colegio";
//Conectar a la base de datos
$conexion = mysqli_connect($servidor, $usuario, $contraseña)
//Mensaje en caso de que no se conecte
or die ("Error al conectar al servidor");
echo "Conexion al servidor OK!";
//Conectar a la BD con el objeto de conexion y el nombre
$db = mysqli_select_db($conexion, $baseDeDatos)
//Mensaje en caso de que no se conecte a la BD
or die ("Eror al conectar a la BD");
//Hacer una consulta en la BD, en una tabla especifica
// "usuarios" -> nombre de la tabla
$consulta = "SELECT * FROM estudiantes";
$resultado = mysqli_query($conexion, $consulta)
//Mensaje en caso de no poder consultar
or die ("No se pudo hacer la consulta");
//Imprimir resultados de la DB

$consulta = "INSERT INTO estudiantes (estudiante, nota1, nota2, nota3, nota4) VALUES ('Jose', '1.0', '2.0', '3.0', '4.0')";
if (mysqli_query($conexion, $consulta)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $consulta . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);

echo "Consulta ok!";
echo "<table borde='2'>";
echo "<tr>";
echo "<th>Nombre</th>";
echo "<th>Edad</th>";
echo "</tr>";


echo "";
while ($columna = mysqli_fetch_array( $resultado ))
{
	echo "<tr>";
	echo "<td>" . $columna['estudiante'] . "</td><td>" . $columna['nota1'] . "</td><td>" . $columna['nota2']. "</td><td>" . $columna['nota3']. "</td><td>" . $columna['nota4']. "</td>";
	echo "</tr>";
}
//Imprime todos los resultados encontrados en la tabla


echo "123123";
//Meter datos en MySQL

?>