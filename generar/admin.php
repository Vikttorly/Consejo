<!DOCTYPE html>
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Panel de control</title>
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
<br><br><br>
 <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
<div id="wrapper">
	<div id="login" class="animate form">
		<form> 
                             
<?php
$con= mysql_connect('localhost','root','');
mysql_select_db('consejo',$con);
$sql="SELECT * FROM Administrador";
$res=mysql_query($sql,$con);
while($row=mysql_fetch_array($res)){
	$nombre_admin=$row[3];
}

echo "<h1>Bienvenido al Panel de Control, ".$nombre_admin."</h1>";

echo '<a href="#toregister" class="to_register">Mostrar Usuarios</a>';

$sql2= "SELECT * FROM documento";
$res2 = mysql_query($sql2,$con);
echo "<table border ='1'>";
echo "<tr><td>ID</td><td>Cédula de usuario</td><td>Tipo</td><td>Fecha de Generacion</td></tr>";
while ($row = mysql_fetch_array($res2)){
	$id = $row[0];
	$cedula = $row[1];
	$tipo = $row[2];
	$fecha = $row[3];

	if ($tipo == 'Constancia_Residencia'){ $tipo = 'Constancia de Residencia';}
	elseif($tipo == 'Carta_Aval'){$tipo = 'Carta Aval';}
	echo "<tr><td>$id</td><td>$cedula</td><td>$tipo</td><td>$fecha</td></tr>";
}
echo "</table>";

?>
			</form>
		</div>
		 	<div id="register" class="animate form">
                <form> 
<?php

echo "<h1>Bienvenido al Panel de Control, ".$nombre_admin."</h1>";
echo '<a href="#tologin" class="to_register"> Mostrar Registros </a>';

$sql3 = "SELECT * FROM personas";
$res3 = mysql_query($sql3,$con);
echo "<table border='1'>";
echo "<tr><td>ID</td><td>Nombre</td><td>Apellidos</td><td>Cédula</td><td>Residencia</td><td>Antiguedad</td></tr>";
while ($row = mysql_fetch_array($res3)){
	$anti = $row[6];
	$antiguedad = 2015 - $anti;
	echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[5]</td><td>$antiguedad Años</td></tr>";
}
echo "</table>";
?>


				
				</form>
				<p class="change_link">  
	<a href="/consejo" >Cerrar Sesion</a>
</p>
		</div>
	</div>
</body>
</html>