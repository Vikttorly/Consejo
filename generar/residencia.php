    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Generación y Registro de Costancia</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
    
    <style type="text/css">

    .imprimir{
        
    }




    h3,h4{
        
        font-family: sans-serif;
    }

    h4{
        font-weight:normal;
        font-size: 20px;
        line-height: 40px;
    }

    .h4{
        margin-left: 100px;
        margin-right: 100px;
        text-align: justify;
    }
    </style>


   </head>



<?php

error_reporting(0);

$cedulap = $_POST['cedula'];
$clavep = $_POST['clave'];


$con=mysql_connect("localhost","root","");
mysql_select_db("consejo",$con);

$sql3 = "SELECT * FROM administrador WHERE clave=$clavep";
$resultado1=mysql_query($sql3,$con);
while($row2=mysql_fetch_array($resultado1)){
	$clave=$row2[1];
}

if ($clavep = $clave){

$sql="SELECT * FROM personas WHERE cedula=$cedulap";

$resultado=mysql_query($sql,$con);
while($row=mysql_fetch_array($resultado)){
	$nombres=$row[1];
	$apellidos=$row[2];
	$cedula=$row[3];
	$residencia=$row[5];
	$año=$row[6];
}

$d = date('d');
$dia = $d;
            $mes = date('m');
            $anio = date('Y');
if ($mes == '01') {
    $mes = 'Enero';
}elseif ($mes == '02') {
    $mes = 'Febrero';
}elseif ($mes == '03') {
    $mes = 'Marzo';
}elseif ($mes == '04') {
    $mes = 'Abril';
}elseif ($mes  == '05') {
    $mes = 'Mayo';
}elseif ($mes == '06') {
    $mes = 'Junio';
}elseif ($mes == '07') {
    $mes = 'Julio';
}elseif ($mes == '08') {
    $mes = 'Agosto';
}elseif ($mes == '09') {
    $mes = 'Septiembre';
}elseif ($mes == '10') {
    $mes = 'Octubre';
}elseif ($mes == '11') {
    $mes = 'Noviembre';
}elseif ($mes == '12') {
    $mes = 'Diciembre';
}

$antiguedad = 2015 - $año;

$espacio = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';

if ($cedulap = $cedula){
	$tipo = 'Constancia_Residencia';
	$sql2 = "INSERT INTO documento(cusuario,tipo,fecha_generacion) VALUES ('$cedula','$tipo',NOW())";
	mysql_query($sql2);
}else{ echo '

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
                                <h1>La Cédula Introducida no existe</h1> 
                                <p class="login button"> 
                                    <a href="javascript:history.back(-1);" title="Ir la página anterior"><input type="submit" value="Ir a la pagina anterior"/></a>
								</p>

                        </div>
            </section>
        </div>


';}
?>

<div class="imprimir" align="center">
    <img src="cintillo.png">
    <br>
    <h3>REPÚBLICA BOLIVARIANA DE VENEZUELA</h3>
    <h3>MINISTERIO DEL PODER POPULAR PARA LAS COMUNAS</h3>
    <h3>CONSEJO COMUNAL TRINIDAD IV SECTOR I</h3>
    <h3>CALABOZO ESTADO GUARICO</h3>
    <br><br>
    <h3><u>CONSTANCIA DE RESIDENCIA</u></h3>
    <br><br>
    <h4 class="h4">
    Quienes suscriben voceros del Consejo Comunal Trinidad IV Sector I,
    hacemos constar por medio de la presente que el ciudadano(a) <b><?php echo $nombres;?>
    <?php echo $apellidos;?></b> titular de la cedula <b><?php echo $cedula;?></b>, está
    residenciado(a) en la <b><?php echo $residencia;?></b>, desde hace <b><?php echo $antiguedad; ?></b>
    años aproximadamente.

    <br><br>

    Constancia que se expide a peticion de la parte interesada, para tramitar________________________ en ______________________
    ciudad de Calabozo a los <b><?php echo $dia;?></b> dias del mes de <b><?php echo $mes;?></b> del año <b><?php echo $anio;?></b>.

    <br><br>
    <center><u>Atentamente</u><br>
   
    _______________________<?php echo $espacio; echo $espacio; ?>_______________________<br>
    Organo Administrativo<?php echo $espacio; echo $espacio;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Organo Contralor
    <br>C.I.:_______________ <?php echo $espacio; echo $espacio;?> C.I.:_______________<br>
    Telf._______________<?php echo $espacio; echo $espacio;?> &nbsp;&nbsp;&nbsp;Telf.______________<br><br>
   __________________<br>
    Organo ejecutivo<br>
    C.I.:_______________<br>
    Telf._______________<br>

   <br><button onclick="window.print();">Imprimir</button>
    </center>
    </h4>

    
</div>


<?php

}else{echo '
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
                                <h1>La Clave de Administrador es incorrecta</h1> 
                                <p class="login button"> 
                                    <a href="caval.html"><input type="submit" value="Intentar de nuevo"/> </a>
								</p>

                        </div>
            </section>
        </div>


';}

?>