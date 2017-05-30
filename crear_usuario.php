<?php
	$conexion=mysqli_connect("localhost","root","","examenes");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Crear Usuario</title>
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
			<h2>Crear usuario</h2>
			<input type="text" name="usuario" id="usuario" placeholder="Usuario">
			<input type="password" name="clave" id="clave" placeholder="Contraseña">
			<input type="password" name="repetir_clave" placeholder="Repetir Contraseña">
			<input type="submit" value="Crear Usuario" id="boton">
		</form>
		<?php
			if (isset($_POST['usuario']) and $_POST['usuario']!="") 
			{
			$consulta_usuario=$conexion->query("select * from usuarios where usuario='{$_POST['usuario']}'");
			$consulta_clave=$conexion->query("select * from usuarios where clave='{$_POST['clave']}'");
			if ($consulta_usuario->num_rows>0) 
			{
				?>
				<div class="anuncio">
					Error el usuario ya existe
				</div>
				<?php
			}
			elseif ($consulta_clave->num_rows>0) {
				?>
				<div class="anuncio">
					Error la contraseña ya existe
				</div>
				<?php
			}

			else{



				 $consulta_registro=$conexion->query("insert into usuarios(usuario,clave)values('{$_POST['usuario']}','{$_POST['clave']}')");
				?> 			
				<div class="anuncio">
					Usuario registrado
				</div>

				<?php
				}
			}
				?>
			
	</body>
</html>