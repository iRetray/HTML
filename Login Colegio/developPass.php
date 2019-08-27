<?php  
$codigoDev = $_POST['codigoDev'];
$_SESSION['login_user'] = $codigoDev;
if ($codigoDev==ba4c5a06) {
	header("Location:developerMode.php");
} else {
	header("Location:noDev.php");
}
?>