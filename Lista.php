<?php
include "includs/conexion.php";

$consultaExamen=$conexion->query("select id,nombre from examen ;");


?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1, maximum-scale=1, minimun-scale=1">

	<title>Sistema de encuestas</title>
	
    <link rel="stylesheet" href="css/estilos_menu_pagina.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">

    <script src="https://code.jquery.com/jquery-3.2.1.js" ></script>
    <script src="javascript/main.js" ></script>

</head>
<body>
    <?php
        include("menu_pagina.html");
    ?>
    <div class="wrap">
    	<h1>Examenes Creados</h1>

    	<?php
                while($exa = $consultaExamen->fetch_assoc()){
                          
                    
                    echo "<li><a href='Crea.php?id=".$exa['id']." ' >".$exa['nombre']."</a></li><br> ";
                  

                   

                }
                  
        ?>	




		
		</div>
</body>
</html>