<?php
	$usuario=$_POST['usuario'];
	$clave=$_POST['clave'];

	$conexion=mysqli_connect("localhost","root","","examenes");

	$consulta_usuario=$conexion->query("select * from usuarios where usuario='{$usuario}'");
	
	$consulta_clave=$conexion->query("select * from usuarios where clave ='{$clave}'");
	

	if ($consulta_usuario->num_rows==0) 
	{
		header("location:../error_usuario.html");
	}
	elseif ($consulta_clave->num_rows==0) {
		header("location:../error_clave.html");
	}

	else{
		 header("location:../menu_usuario.html");
	}
?>