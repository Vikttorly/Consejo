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

$antiguedad = 2015 - $año;

$ciudadano = $nombres.' '.$apellidos;

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

require "fpdf.php";
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','b',10);

$e1 = 'REPÚBLICA BOLIVARIANA DE VENEZUELA';
$e2 = 'años';
$f1 = utf8_decode($e1);
$f2 = utf8_decode($e2);
$pdf->SetXY(65, 15);
$pdf->Cell(40,10,$f1);
$pdf->SetXY(64, 22);
$pdf->Cell(40,10,'CONSEJO COMUNAL TRINIDAD IV SECTOR I');
$pdf->SetXY(87, 29);
$pdf->Cell(40,10,'RIF: J-29960670-7');
$pdf->SetXY(75, 36);
$pdf->Cell(40,10,'CALABOZO ESTADO GUARICO');
$pdf->SetFont('Arial','B',12);
$pdf->SetXY(90, 56);
$pdf->Cell(40,10,'CARTA AVAL');
$pdf->SetFont('Arial','',12);
$pdf->SetXY(22, 68);
$pdf->Cell(40,10,'Quienes suscriben voceros del Comunal Trinidad IV Sector I, por medio de la presente,');
$pdf->SetXY(22, 75);
$pdf->Cell(40,10,'postulamos y avalamos al ciudadano(a)');
$pdf->SetFont('Arial','B',12);
$pdf->SetXY(97, 75);
$pdf->Cell(40,10,$ciudadano);
$pdf->SetFont('Arial','',12);
$pdf->SetXY(155, 75);
$pdf->Cell(40,10,'titular de la -');
$pdf->SetXY(22, 82);
$pdf->Cell(40,10,'Cedula de Identidad No');
$pdf->SetFont('Arial','B',12);
$pdf->SetXY(68, 82);
$pdf->Cell(40,10,$cedula);
$pdf->SetFont('Arial','',12);
$pdf->SetXY(88, 82);
$pdf->Cell(40,10,', residenciado(a) en la');
$pdf->SetFont('Arial','B',12);
$pdf->SetXY(132, 82);
$pdf->Cell(40,10,$residencia);
$pdf->SetFont('Arial','',12);
$pdf->SetXY(22, 89);
$pdf->Cell(40,10,'desde hace');
$pdf->SetFont('Arial','B',12);
$pdf->SetXY(45, 89);
$pdf->Cell(40,10,$antiguedad);
$pdf->SetFont('Arial','',12);
$pdf->SetXY(48, 89);
$pdf->Cell(40,10,'   '.$f2.' aproximadamente, para optar una vivienda ya que no posee si no');
$pdf->SetXY(22, 96);
$pdf->Cell(40,10,'que habita en una prestada es madre de un menor, ademas es una ciudadana trabaja-');
$pdf->SetXY(22, 103);
$pdf->Cell(40,10,'dora, responsable y fiel cumplidora de sus deberes civicos y morales.');
$pdf->SetXY(22, 140);
$pdf->Cell(40,10,'Constancia que se expide en la ciudad de Calabozo a los ____ dias del mes ________');
$pdf->SetXY(22, 147);
$pdf->Cell(40,10,'del '.$f2.' 2015.');
$pdf->SetFont('Arial','B',12);
$pdf->SetXY(90, 170);
$pdf->Cell(40,10,'  Atentamente');
$pdf->SetFont('Arial','',12);
$pdf->SetXY(40, 185);
$pdf->Cell(40,10,'___________                      ___________                     ___________');
$pdf->SetXY(35, 195);
$pdf->Cell(40,10,'Omaira Betancourt                Carmen O. Rengifo             Yelinda Lopez');
$pdf->SetXY(35, 204);
$pdf->Cell(40,10,'      C.I 8.60.926                          C.I 8.621.580                 C.I 10.271.988');
$pdf->SetXY(35, 212);
$pdf->Cell(40,10,'         Finanzas                                Habitat                          Contraloria');
$pdf->SetXY(35, 220);
$pdf->Cell(40,10,'  Tlf 0416.0249958                 Tfl 0424.3145898              Tfl 0424.3464339');

$pdf->Output();


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