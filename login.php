<?php 
	session_start();
	if (isset($_SESSION['nombre'])) {
		header('Location: index.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="Style.css">
	<title>Iniciar sesion</title>
	<meta charset="utf-8">
</head>
<body>

	<div class="contenedor">
		

		<!--<center>-->
		<form method="POST" action="loginProceso.php">

			<div class="subcontenedor">

				<label class="Usuario">Usuario: </label>
			<input type="text" name="txtUsu">
			<br>
			<label>Password: </label>
			<input type="password" name="txtPass">
			<br>
            
            	<input type="submit" value="Iniciar sesión">
            
			
			</div>
            
		</form>
	<!--</center>-->
	</div> 
	

</body>
</html>