<?php

$con = mysql_connect('localhost','root','') or die ("Ha ocurrido un error al conectar con el servidor");
mysql_select_db('consejo',$con) or die ("Ha ocurrido un error al seleccionar la base de datos");

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$cedula = $_POST['cedula'];
$direccion = $_POST['direccion'];
$antiguedad = $_POST['antiguedad'];

if(isset($_POST['registrar'])){
$sql = "INSERT INTO personas(nombres,apellidos,cedula,fecha,residencia,antiguedad) VALUES ('$nombres','$apellidos','$cedula',NOW(),'$direccion','$antiguedad')";
mysql_query($sql) or die (mysql_error());
}

if($sql){
	echo '
<!DOCTYPE html>
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Generación y Registro de Costancia</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
    <div class="container">
            <!-- Codrops top bar -->
           
            <br><br><br><br><br>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                                <h1>Se há registrado  el nuevo usuario</h1> 
                                <p class="login button"> 
                                <a href="javascript:history.back(-1);" title="Ir la página anterior"><input type="submit" value="Ir a la pagina anterior"/></a>
								</p>

                        </div>
            </section>
        </div>


';}



?>