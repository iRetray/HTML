<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registro</title>
	<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Livvic&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
		<table class="table" align="center">
			<tr class="tr1">
				<td class="td1"><p class="texto">Registro de usuarios nuevos</p></td>
			</tr>
			<tr><td><img src="recursos/firefox.png" class="image2"></td></tr>
			<tr class="tr2">
				<td class="td1"><p class="texto1">Escribe tus datos para registrarte en la plataforma</p></td>
			</tr>
			<form action="registro.php" method="post">
				<tr class="tr2">
					<td><input type="text" name="nombre" placeholder="nombre" class="input" required="true"></td>
				</tr>
				<tr class="tr2">
					<td><input type="text" name="usuario" placeholder="usuario" class="input" required="true"></td>
				</tr>
				<tr class="tr2">
					<td><input type="password" name="clave" placeholder="clave" class="input" required="true"></td>
				</tr>
				<tr class="tr2">
					<td><p class="texto1">Ingresa el codigo si eres docente</p></td>
				</tr>
				<tr class="tr2">
					<td><input type="text" name="codigoDocente" placeholder="codigo de autorización" class="input"></td>
				</tr>
				<tr>
					<td><input type="submit" value="Ingresar" class="inputSubmit2"></td>
				</tr>
			</form>
			<tr class="tr1">
				<td><p class="texto1">¿Te acabas de registrar? Inicia sesión <a href="index.html">aqui.</a> </p></td>
			</tr>
		</table>
</body>
</html>