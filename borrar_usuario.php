<?php
	$conexion=mysqli_connect("localhost","root","","examenes");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Borrar Usario</title>
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
			<h2>Borrar Usuario</h2>
			<input type="text" name="usuario" id="usuario" placeholder="Usuario">
			<input type="submit" value="Borrar Usuario" id="boton">
		</form>
		<?php
			if (isset($_POST['usuario']) and $_POST['usuario']!="") 
			{
			$consulta_usuario=$conexion->query("select * from usuarios where usuario='{$_POST['usuario']}'");
			if ($consulta_usuario->num_rows>0) 
			{
			$consulta_usuario=$conexion->query("delete from usuarios where usuario='{$_POST['usuario']}'");
				?>
				<div class="anuncio">
					Usuario Borrado
				</div>
				<?php
			}
			else{
				?> 			
				<div class="anuncio">
					Usuario no encontrado
				</div>

				<?php
				}
			}
				?>
			
	</body>
</html>