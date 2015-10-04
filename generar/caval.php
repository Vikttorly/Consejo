    <head>
        <meta charset='utf-8'>
    </head>

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

$ciudadano = $nombres.' '.$apellidos;

$motivo = $_POST['motivo'];

if ($cedulap = $cedula){
    $tipo = 'Carta_Aval';
	$sql2 = "INSERT INTO documento(cusuario,tipo, fecha_generacion) VALUES ('$cedula','$tipo',NOW())";
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
                                    <a href="caval.html"><input type="submit" value="Intentar de nuevo"/> </a>
								</p>

                        </div>
            </section>
        </div>


';}
?>


<div class="imprimir" align="center">
<img src="cintillo.png">
    <br><br>
    <h3>REPÚBLICA BOLIVARIANA DE VENEZUELA</h3>
    <h3>CONSEJO COMUNAL TRINIDAD IV SECTOR I</h3>
    <h3>RIF:J.29960670-7</h3>
    <h3>CALABOZO ESTADO GUARICO</h3>
    <br><br><br>
    <h3><u>CARTA AVAL</u></h3>
    <br><br>
    <h4 class="h4">
    Quienes suscriben voceros del Consejo Comunal Trinidad IV Sector I,
    por medio de la presente postulamos y avalamos al ciudadano(a) <b><?php echo $nombres;?>
    <?php echo $apellidos;?></b> titular de la cedula <b><?php echo $cedula;?></b>, está
    residenciado(a) en la <b><?php echo $residencia;?></b>, desde hace <b><?php echo $antiguedad; ?></b>
    años aproximadamente, dicha carta está escrita con el motivo de: <?php echo $motivo;?>

    <br><br>

    Constancia que se expide a peticion de la parte interesada en la
    ciudad de <b>Calabozo</b> a los <b><?php echo $dia;?></b> dias del mes de <b><?php echo $mes;?></b> del año <b><?php echo $anio;?></b>.

    <br><br>
    <center>Atentamente<br><br>
   
    <table>
        <tr align="center">
        <td><p>_____________________&nbsp;&nbsp;&nbsp;</p><p>Omaira  Betancourt</p><p>C.I. 8.620.926</p><p>Telf:0416.0249958</p><p>V/Finanzas</p></td>
        <td><p>_____________________&nbsp;&nbsp;&nbsp;</p><p>Carmen Rengifo</p><p>C.I.8.621.580</p><p>Telf.0424.3145898</p><p>V/Vivienda</p></td>
        <td><p>_____________________&nbsp;&nbsp;&nbsp;</p><p>Yelindad Lopez</p><p>C.I. 10.271.288</p><p>Telf.0424.3464339</p><p>V/Contraloría</p></td>
        </tr>
    </table>
            <br><br>
        <button onclick="window.print();">Imprimir</button>
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
                                   <a href="javascript:history.back(-1);" title="Ir la página anterior"><input type="submit" value="Ir a la pagina anterior"/></a>
								</p>

                        </div>
            </section>
        </div>


';}

?>