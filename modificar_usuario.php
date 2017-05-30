<?php
	$conexion=mysqli_connect("localhost","root","","examenes");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Modificar Usario</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1, maximum-scale=1, minimun-scale=1">

		<link rel="stylesheet" href="css/estilos_menu_pagina.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/estilos_usuarios.css">

		<script src="https://code.jquery.com/jquery-3.2.1.js" ></script>
		<script src="javascript/main.js" ></script>


	</head>
	<body>

		<?php
		include("menu_pagina.html");
		?>

		<form action="" method="post">
			<h2>Modificar Usuario</h2>
			<input type="text" name="usuario" id="usuario" placeholder="Usuario a modificar">
			<input type="text" name="nuevo_usuario" id="usuario" placeholder="Nuevo Usuario">
			<input type="password" name="nueva_clave" id="usuario" placeholder="Nueva Clave">
			<input type="submit" value="Modificar Usuario" id="boton">
		</form>
		<?php
			if (isset($_POST['usuario']) and $_POST['usuario']!="") 
			{
			$consulta_usuario=$conexion->query("select * from usuarios where usuario='{$_POST['usuario']}'");
			if ($consulta_usuario->num_rows>0) 
			{
			$consulta_modificar=$conexion->query("Update usuarios set usuario ='{$_POST['nuevo_usuario']}', clave='{$_POST['nueva_clave']}' where usuario='{$_POST['usuario']}'");
				?>
				<div>
					Usuario Modificado
				</div>
				<?php
			}
			else{
				?> 			
				<div>
					Usuario no encontrado
				</div>

				<?php
				}
			}
				?>
			
	</body>
</html>