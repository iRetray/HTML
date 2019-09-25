<?php  
	echo "Hola!";
	header("Location:estudiante.php");
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
				<td class="td1"><p class="texto">Inicio de sesión</p></td>
			</tr>
			<tr><td><p><br></p></td></tr>
			<tr><td><img src="recursos/calculation.png" class="image1"></td></tr>
			<tr><td><p><br></p></td></tr>
			<tr class="tr2">
				<td class="td1"><p class="texto1">Escribe tus credenciales para ingresar a la plataforma</p></td>
			</tr>
			<form action="testServer.php" method="post">
				<tr class="tr2">
					<td><input type="text" name="usuario" placeholder="usuario" class="input" required="true"></td>
				</tr>
				<tr class="tr2">
					<td><input type="password" name="clave" placeholder="clave" class="input" required="true"></td>
				</tr>
				<tr>
					<td><input type="submit" value="Ingresar" class="inputSubmit"></td>
				</tr>
			</form>
			<tr><td><p><br></p></td></tr>
			<tr class="tr1">
				<td><p class="texto1">¿Aun no estas registrado? Registrate <a href="registro.php">aqui.</a> </p></td>
			</tr>
		</table>
</body>
</html>