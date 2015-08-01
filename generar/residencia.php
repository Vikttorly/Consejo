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


require "fpdf.php";
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',14);
$pdf->Image('cintillo.png', 15,8,180,15,'PNG');


$e1 = 'REPÚBLICA BOLIVARIANA DE VENEZUELA';
$e2 = 'años aproximadamente';
$e3 = 'año 2015.';
$f1 = utf8_decode($e1); 
$f2 = utf8_decode($e2);
$f3 = utf8_decode($e3);


$pdf->SetXY(55, 22);
$pdf->Cell(40,10,$f1);
$pdf->SetXY(38, 28);
$pdf->Cell(40,10,'MINISTERIO DEL PODER POPULAR PARA LAS COMUNAS');
$pdf->SetXY(54, 34);
$pdf->Cell(40,10,'CONSEJO COMUNAL TRINIDAD IV SECTOR I');
$pdf->SetXY(70, 40);
$pdf->Cell(40,10,'CALABOZO ESTADO GUARICO');
$pdf->SetFont('Arial','BU',14);
$pdf->SetXY(70, 70);
$pdf->Cell(40,10,'CONSTANCIA DE RESIDENCIA');
$pdf->SetFont('Arial','',14);
$pdf->SetXY(30, 90);
$pdf->Cell(40,10,'Quienes suscriben voceros del Consejo Comunal Trinidad IV Sector I,');
$pdf->SetXY(15, 100);
$pdf->Cell(40,10,' hacemos constar por medio de la presente que el ciudadano(a)');
$pdf->SetFont('Arial','B',14);
$pdf->SetXY(156, 102.5);
$pdf->Cell(30,5,$nombres,0,0,'c');
$pdf->SetFont('Arial','B',14);
$pdf->SetXY(16, 110);
$pdf->Cell(40,10,$apellidos,0,0,'c');
$pdf->SetFont('Arial','',14);
$pdf->SetXY(53, 110);
$pdf->Cell(40,10,'Titular de la Cedula de Identidad No');
$pdf->SetFont('Arial','B',14);
$pdf->SetXY(134, 110);
$pdf->Cell(40,10,$cedula,0,0,'c');
$pdf->SetFont('Arial','',14);
$pdf->SetXY(156, 110);
$pdf->Cell(40,10,', esta residen-');
$pdf->SetXY(16, 120);
$pdf->Cell(40,10,'ciado(a) en la');
$pdf->SetFont('Arial','B',14);
$pdf->SetXY(47, 120);
$pdf->Cell(40,10,$residencia);
$pdf->SetFont('Arial','',14);
$pdf->SetXY(95, 120);
$pdf->Cell(40,10,', desde hace');
$pdf->SetFont('Arial','B',14);
$pdf->SetXY(125, 120);
$pdf->Cell(40,10,$antiguedad);
$pdf->SetFont('Arial','',14);
$pdf->SetXY(132, 120);
$pdf->Cell(40,10,'   '.$f2);
$pdf->SetXY(27, 140);
$pdf->Cell(40,10,'Constancia que se expide a peticion de la parte interesada, para tramitar');
$pdf->SetXY(16, 150);
$pdf->Cell(40,10,'____________________________en ________________________________');
$pdf->SetXY(16, 160);
$pdf->Cell(40,10,'Ciudad de Calabozo a los ________ dias del mes de ________________del');
$pdf->setXY(16,170);
$pdf->Cell(40,10,$f3);
$pdf->setXY(90,190);
$pdf->Cell(40,10,'Atentamente');
$pdf->setXY(17,200);
$pdf->Cell(40,10,'__________________');
$pdf->setXY(138,200);
$pdf->Cell(40,10,'__________________');
$pdf->setXY(17,207);
$pdf->Cell(40,10,'Organo Administrativo                                                         Organo Contralor');
$pdf->setXY(17,218);
$pdf->Cell(40,10,'C.I.:_______________                                                  C.I.:_______________');
$pdf->setXY(17,228);
$pdf->Cell(40,10,'Telf._______________                                                 Telf._______________');
$pdf->setXY(80,238);
$pdf->Cell(40,10,'__________________');
$pdf->setXY(85,245);
$pdf->Cell(40,10,'Organo ejecutivo');
$pdf->setXY(78,252);
$pdf->Cell(40,10,'C.I.:_______________');
$pdf->setXY(78,262);
$pdf->Cell(40,10,'Telf._______________');





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
                                    <a href="caval.html"><input type="submit" value="Intentar de nuevo"/> </a>
								</p>

                        </div>
            </section>
        </div>


';}

?>