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
				<td class="td1"><p class="texto">Ingreso de Notas</p></td>
			</tr>
			<tr><td><img src="recursos/lapiz.png" class="image5"></td></tr>
			<tr class="tr2">
				<td class="td1"><p class="texto1">Completa los campos, recuerda que las notas tienen un formato numerico con decimales (50.0 , 32.8)</p></td>
			</tr>
			<form action="notasSistema.php" method="post">>
				<tr class="tr2">
					<td><input type="text" name="usuario" placeholder="usuario del estudiante" class="input" required="true"></td>
				</tr>
				<tr class="tr2">
					<td><input type="number" step="any" min="0.0" max="10.0" name="trabajo1" placeholder="trabajo 1" class="input" required="true"></td>
				</tr>
				<tr class="tr2">
					<td><input type="number" step="any" min="0.0" max="10.0" name="trabajo2" placeholder="trabajo 2" class="input" required="true"></td>
				</tr>
				<tr class="tr2">
					<td><input type="number" step="any" min="0.0" max="10.0" name="trabajo3" placeholder="trabajo 3" class="input" required="true"></td>
				</tr>
				<tr class="tr2">
					<td><input type="number" step="any" min="0.0" max="10.0" name="tarea1" placeholder="tarea 1" class="input" required="true"></td>
				</tr>
				<tr class="tr2">
					<td><input type="number" step="any" min="0.0" max="10.0" name="tarea2" placeholder="tarea 2" class="input" required="true"></td>
				</tr>
				<tr class="tr2">
					<td><input type="number" step="any" min="0.0" max="10.0" name="tarea3" placeholder="tarea 3" class="input" required="true"></td>
				</tr>
				<tr class="tr2">
					<td><input type="number" step="any" min="0.0" max="10.0" name="evaluacion" placeholder="evaluación" class="input" required="true"></td>
				</tr>
				<tr class="tr2">
					<td><input type="number" step="any" min="0.0" max="10.0" name="evaluacionD" placeholder="evaluación docente" class="input" required="true"></td>
				</tr>
				<tr class="tr2">
					<td><input type="number" step="any" min="0.0" max="10.0" name="auto" placeholder="autoevaluacion" class="input" required="true"></td>
				</tr>
				<tr>
					<td><input type="submit" value="Ingresar Notas" class="inputSubmit2"></td>
				</tr>
			</form>
		</table>
</body>
</html>