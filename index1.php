<?php

include "includs/conexion.php";


if (isset($_POST['crearExamenBtn'])) {
    $errors = array();


	if (!isset($_POST['TituloTxt']) || empty($_POST['TituloTxt']) || ctype_digit($_POST['TituloTxt'])  ){
	//aparece un error 

       $errors[]="nombre de examen no valido";

    }



if(count($errors) == 0) {  


        
        $nombre=$_POST['TituloTxt'];

		$insertExamen=$conexion->query("insert into examen(nombre) values ('$nombre') ");
   		header('Location:Lista.php');
}

    

	



}


?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1, maximum-scale=1, minimun-scale=1">

	<title>Crear Nuevo Examen</title>

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

<?php

        if(isset($errors) and count($errors) > 0 ){
            foreach($errors as $error){
               
               echo $error;
                    

            }
        }
?> 

    <div class="wrap">
    	<center>
    		<form action="" method="POST">
    		
    			<h1>Nuevo Examen</h1>
    	
    			<input type="text" name="TituloTxt" placeholder="Titulo del Examen"><br><br>
    	
    			<input type="submit" name="crearExamenBtn" value="Crear Examen">

        	</form>
        </center>
	</div>
</body>
</html>