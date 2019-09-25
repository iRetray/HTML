<?php  

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
				<td class="td1"><p class="texto">Recuperación de Contraseña</p></td>
			</tr>
			<tr><td><img src="recursos/user.png" class="image3"></td></tr>
			<tr class="tr2">
				<td class="td1"><p class="texto1">Escribe tu usuario para recuperar tu contraseña</p></td>
			</tr>
			<form action="darClave.php" method="post">
				<tr class="tr2">
					<td><input type="text" name="usuario" placeholder="usuario" class="input" required="true"></td>
				</tr>
				<tr>
					<td><input type="submit" value="Recuperar Contraseña" class="inputSubmit3"></td>
				</tr>
			</form>
		</table>
</body>
</html>